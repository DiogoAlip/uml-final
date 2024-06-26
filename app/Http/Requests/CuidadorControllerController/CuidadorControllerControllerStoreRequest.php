<?php

namespace App\Http\Requests\CuidadorControllerController;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use App\Models\Cuidador;

class CuidadorControllerControllerStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @author PlantUmlGen
     * @return array
     */
    public function rules(): array
    {
        return [
            'nombre' => 'string|required',
            'apellido' => 'string|required',
            'edad' => 'integer|required',
            'telefono' => 'string|required',
            'especialidad' => 'string|required',
        ];
    }

    /**
     * messages
     * @author PlantUmlGen
     * @return array
     */
    public function messages(): array
    {
        return [
            'required' => 'The :attribute is required.',
            'max' => 'The :attribute is very long.',
            'unique' => 'The :attribute has already been taken.',
            'exists' => 'Could not find :attribute',
        ];
    }

    /**
     * response
     * @author PlantUmlGen
     * @return JsonResponse
     */
    public function response(): JsonResponse
    {
        $param = $this->input();
        $cuidador = Cuidador::create($param);
        
        return response()->json($param); 
    }
}
