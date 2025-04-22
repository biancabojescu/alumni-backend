<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Auth\LoginRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private AuthService $authService;

    public function __construct(AuthService $authService) {
        $this->authService = $authService;
    }

    public function sendLoginLink(LoginRequest $request){
        $email = $request->validated()['email'];

        if (!str_ends_with($email, '@bestis.ro')) {
            return response()->json([
                'error' => 'Doar adresele de email @bestis.ro sunt permise.'
            ], 403);
        }

        $this->authService->sendMagicLink($email);

        return response()->json([
            'success' => 'Pentru autentificare verifica adresa de mail @bestis.ro'
        ], 200);
    }

    public function loginWithToken(Request $request) {
        $result = $this->authService->handleLoginWithToken($request->query('token'));

        if (!$result){
            return response()->json([
                'error' => 'Ceva nu a functionat cum trebuie.'
            ], 403);
        }

        return response()->json([
            'success' => 'Te-ai autentificat cu succes!',
            'token' => $result
        ], 200);
    }
}
