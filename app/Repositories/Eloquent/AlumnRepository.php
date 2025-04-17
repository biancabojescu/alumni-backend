<?php

namespace App\Repositories\Eloquent;

use App\Models\Alumn;
use App\Repositories\IAlumnRepository;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class AlumnRepository extends BaseRepository implements IAlumnRepository {
    private Alumn $model;

    public function __construct(Alumn $model){
        parent::__construct($model);
        $this->model = $model;
    }

    public function getAlumni(
        ?string $an = null,
        ?int $page = null,
        ?int $perPage = null
    ): Collection|LengthAwarePaginator
    {
        $query = $this->model->filterByAcord(true);

        if ($an) {
            $query = $query->filterByAnAlumnizare($an);
        }

        return $page ? $query->paginate($perPage ?? 8, ['*'], 'page', $page) : $query->get();
    }
}
