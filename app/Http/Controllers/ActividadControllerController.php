<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ActividadControllerController as ActividadControllerControllerRequest;

class ActividadControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param ActividadControllerControllerRequest\ActividadControllerControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(ActividadControllerControllerRequest\ActividadControllerControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param ActividadControllerControllerRequest\ActividadControllerControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(ActividadControllerControllerRequest\ActividadControllerControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param ActividadControllerControllerRequest\ActividadControllerControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(ActividadControllerControllerRequest\ActividadControllerControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param ActividadControllerControllerRequest\ActividadControllerControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(ActividadControllerControllerRequest\ActividadControllerControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param ActividadControllerControllerRequest\ActividadControllerControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(ActividadControllerControllerRequest\ActividadControllerControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
