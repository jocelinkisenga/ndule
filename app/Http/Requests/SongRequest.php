<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
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
            'title'=>'bail|required|string',
            'artiste_name'=>'bail|required|string',
            'description'=>'bail|required|string',
            'Categorie_id'=>'bail|required',
            'photo'=>'bail|required|file|mimes:jpeg,png,jpg',
            'song'=>'bail|required|file|mimes:mp3',
            ];
    }
}
