<?php

namespace App\Services;

use App\Repositories\IAuthRepository;
use App\Repositories\ILoginTokenRepository;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\MagicLoginLink;
use Illuminate\Support\Facades\Auth;

class AuthService {
    private IAuthRepository $authRepository;
    private ILoginTokenRepository $tokenRepo;

    public function __construct(IAuthRepository $authRepository, ILoginTokenRepository $loginTokenRepository) {
        $this->authRepository = $authRepository;
        $this->tokenRepo = $loginTokenRepository;
    }

    public function sendMagicLink(string $email) {
        $user = $this->authRepository->findOrCreateByEmail($email);

        $rawToken = Str::random(64);
        $hashedToken = hash('sha256', $rawToken);

        $this->tokenRepo->createToken($email, $hashedToken);

        $loginLink = "http://localhost:3000/auth/callback?token={$rawToken}";
        Mail::to($email)->send(new MagicLoginLink($loginLink));
    }

    public function handleLoginWithToken(string $rawToken) {
        $hashedToken = hash('sha256', $rawToken);

        $token = $this->tokenRepo->findValidToken($hashedToken);

        if (!$token) {
            return false;
        }

        $user = $this->authRepository->findByEmail($token->email);

        if (!$user) {
            return;
        }

        Auth::login($user);
        $token = $user->createToken('magic-link-login')->plainTextToken;

        $this->tokenRepo->deleteToken($hashedToken);

        return $token;
    }
}
