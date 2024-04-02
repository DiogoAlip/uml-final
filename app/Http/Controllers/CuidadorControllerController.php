<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\CuidadorControllerController as CuidadorControllerControllerRequest;

class CuidadorControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param CuidadorControllerControllerRequest\CuidadorControllerControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(CuidadorControllerControllerRequest\CuidadorControllerControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param CuidadorControllerControllerRequest\CuidadorControllerControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(CuidadorControllerControllerRequest\CuidadorControllerControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param CuidadorControllerControllerRequest\CuidadorControllerControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(CuidadorControllerControllerRequest\CuidadorControllerControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param CuidadorControllerControllerRequest\CuidadorControllerControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(CuidadorControllerControllerRequest\CuidadorControllerControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param CuidadorControllerControllerRequest\CuidadorControllerControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(CuidadorControllerControllerRequest\CuidadorControllerControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
