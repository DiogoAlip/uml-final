<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\EspecieControllerController as EspecieControllerControllerRequest;

class EspecieControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param EspecieControllerControllerRequest\EspecieControllerControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(EspecieControllerControllerRequest\EspecieControllerControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param EspecieControllerControllerRequest\EspecieControllerControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(EspecieControllerControllerRequest\EspecieControllerControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param EspecieControllerControllerRequest\EspecieControllerControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(EspecieControllerControllerRequest\EspecieControllerControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param EspecieControllerControllerRequest\EspecieControllerControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(EspecieControllerControllerRequest\EspecieControllerControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param EspecieControllerControllerRequest\EspecieControllerControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(EspecieControllerControllerRequest\EspecieControllerControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
