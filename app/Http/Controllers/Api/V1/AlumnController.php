<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Alumn\GetRequest;
use App\Http\Resources\AlumnResource;
use App\Services\AlumnService;
use Illuminate\Http\JsonResponse;

class AlumnController extends Controller {
    private AlumnService $alumnService;

    public function __construct(AlumnService $alumnService) {
        $this->alumnService = $alumnService;
    }

    public function indexAlumni(GetRequest $request): JsonResponse {
        $data = $request->validated();
        $result = $this->alumnService->getAlumni($data);
        return AlumnResource::collection($result)->response();
    }

}
