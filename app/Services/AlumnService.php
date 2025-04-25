<?php

namespace App\Services;

use App\Repositories\IAlumnRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class AlumnService {
    private IAlumnRepository $alumnRepository;

    public function __construct(IAlumnRepository $alumnRepository) {
        $this->alumnRepository = $alumnRepository;
    }

    public function getAlumni(array $data): Collection|LengthAwarePaginator {
        $an = $data['anul_alumnizarii'] ?? null;
        $page = $data['page'] ?? null;
        $per_page =$data['per_page'] ?? null;

        return $this->alumnRepository->getAlumni(
            $an,
            $page,
            $per_page
        );
    }
}
