<?php

namespace App\Repositories;

use App\Models\LoginToken;

interface ILoginTokenRepository
{
    public function createToken(string $email, string $hashedToken): LoginToken;
    public function findValidToken(string $hashedToken): ?LoginToken;
    public function deleteToken(string $hashedToken): void;
}
