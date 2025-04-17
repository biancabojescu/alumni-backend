<?php

namespace App\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface IAlumnRepository extends IEloquent {
    public function getAlumni(
        ?string $an = null,
        ?int $page = null,
        ?int $perPage = null
    ): Collection|LengthAwarePaginator;
}
