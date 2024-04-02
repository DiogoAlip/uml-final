<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\RecintoControllerController as RecintoControllerControllerRequest;

class RecintoControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param RecintoControllerControllerRequest\RecintoControllerControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(RecintoControllerControllerRequest\RecintoControllerControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param RecintoControllerControllerRequest\RecintoControllerControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(RecintoControllerControllerRequest\RecintoControllerControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param RecintoControllerControllerRequest\RecintoControllerControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(RecintoControllerControllerRequest\RecintoControllerControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param RecintoControllerControllerRequest\RecintoControllerControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(RecintoControllerControllerRequest\RecintoControllerControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param RecintoControllerControllerRequest\RecintoControllerControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(RecintoControllerControllerRequest\RecintoControllerControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
