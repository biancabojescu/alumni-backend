<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\IEloquent;

interface IAuthRepository extends IEloquent {
    public function findOrCreateByEmail(string $email): User;
    public function findByEmail(string $email): ?User;

}
