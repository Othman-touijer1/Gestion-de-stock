<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titreProduit' => 'required|string|max:255',
            'imageProduit' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nomReferent' => 'required|integer',
            'descriptionProduit' => 'required|string',
            'categoriesProduit' => 'required|string'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'titreProduit.required' => 'Le titre du produit est obligatoire',
            'titreProduit.max' => 'Le titre ne doit pas dépasser 255 caractères',
            'imageProduit.image' => 'Le fichier doit être une image',
            'imageProduit.mimes' => 'L\'image doit être de type: jpeg, png, jpg, gif',
            'imageProduit.max' => 'L\'image ne doit pas dépasser 2Mo',
            'nomReferent.required' => 'Le référent est obligatoire',
            'nomReferent.integer' => 'Le référent doit être un nombre entier',
            'descriptionProduit.required' => 'La description est obligatoire',
            'categoriesProduit.required' => 'La catégorie est obligatoire'
        ];
    }
}    