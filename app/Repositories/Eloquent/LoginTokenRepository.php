<?php

namespace App\Repositories\Eloquent;

use App\Models\LoginToken;
use App\Repositories\ILoginTokenRepository;
use Carbon\Carbon;

class LoginTokenRepository implements ILoginTokenRepository
{
    private LoginToken $model;

    public function __construct(LoginToken $model) {
        $this->model = $model;
    }
    public function createToken(string $email, string $hashedToken): LoginToken
    {
        return $this->model->create([
            'email' => $email,
            'token' => $hashedToken,
            'expires_at' => Carbon::now()->addMinutes(10),
        ]);
    }

    public function findValidToken(string $hashedToken): ?LoginToken
    {
        return $this->model->where('token', $hashedToken)
                         ->where('expires_at', '>', now())
                         ->first();
    }

    public function deleteToken(string $hashedToken): void
    {
        $this->model->where('token', $hashedToken)->delete();
    }
}
