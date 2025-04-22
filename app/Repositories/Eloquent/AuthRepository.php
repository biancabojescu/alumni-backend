<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\IAuthRepository;

class AuthRepository extends BaseRepository implements IAuthRepository {
    private User $model;

    public function __construct(User $model){
        $this->model = $model;
    }

    public function findOrCreateByEmail(string $email): User
    {
        return $this->model->firstOrCreate(
            ['email' => $email],
            ['name' => explode('@', $email)[0]]
        );
    }

    public function findByEmail(string $email): ?User {
        return $this->model->where('email', $email)->first();
    }
}
