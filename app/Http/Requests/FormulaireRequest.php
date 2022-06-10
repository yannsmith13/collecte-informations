<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormulaireRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'customer' => 'required|exists:customers,id',

            'nom' => 'nullable|string|max:255',
            'prenom' => 'nullable|string|max:255',
            'tel' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',

            'society_name' => 'nullable|string|max:255',
            'siret' => 'nullable|string|max:255',
            'tva' => 'nullable|string|max:255',
            'society_tel' => 'nullable|string|max:255',
            'society_email' => 'nullable|email|max:255',
            'adresse' => 'nullable|string|max:255',
            'adresse2' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',

            'reseaux_sociaux' => 'nullable|string',
            'sites_webs' => 'nullable|string',

            'wished_domain' => 'nullable|string|max:255',
            'hosting' => 'in:true,false',

            'budget' => 'nullable|string|max:255',
            'wished_prestations' => 'nullable|string',

            'how_mcts' => 'nullable|string',
            'additionnal_informations' => 'nullable|string',

            // Reasons
            'reasons.*' => 'nullable|exists:reasons,id',
            'other-reasons' => 'nullable|string',

            // Graph
            'graph-description' => 'nullable|string',

            // Images
            'images.*' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2048',

            // Society Details
            'history' => 'nullable|string',
            'offer_presentation' => 'nullable|string',
            'offer_prices' => 'nullable|string',
            'offer_list' => 'nullable|string',
            'offer_qualities' => 'nullable|string',
            'target_audience' => 'nullable|string',
            'society_moral' => 'nullable|string',
            'activity_area' => 'nullable|string',

            // Inspirations
            'inspiration' => 'nullable|string',



        ];
    }
}
