<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\AnimalControllerController as AnimalControllerControllerRequest;

class AnimalControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param AnimalControllerControllerRequest\AnimalControllerControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(AnimalControllerControllerRequest\AnimalControllerControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param AnimalControllerControllerRequest\AnimalControllerControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(AnimalControllerControllerRequest\AnimalControllerControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param AnimalControllerControllerRequest\AnimalControllerControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(AnimalControllerControllerRequest\AnimalControllerControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param AnimalControllerControllerRequest\AnimalControllerControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(AnimalControllerControllerRequest\AnimalControllerControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param AnimalControllerControllerRequest\AnimalControllerControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(AnimalControllerControllerRequest\AnimalControllerControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
