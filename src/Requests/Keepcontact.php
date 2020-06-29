<?php

namespace App\Http\Requests;
use pebibits\validation\Rule\ColorName\ColorName;
use pebibits\validation\Rule\Alpha\Alpha;
use Illuminate\Foundation\Http\FormRequest;

class Keepcontact extends FormRequest
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
            'keepcontact_page_title'=>['required','min:10','max:80',new Alpha],
            'keepcontact_page_description'=>['required','min:30','max:80',new Alpha],
            'keepcontact_page_logo'=>'required|image|mimes:jpeg,png,jpg',
            'website_page_link'=>'required|url',
            'twitter_page_link '=>'required|url',
            'linkedin_page_link '=>'required|url',
            'facebook_page_link'=>'required|url',
            'instagram_page_link'=>'required|url',
             /////////// Color Validation\\\\\\\\\\\\
            'main_background_color'=>['required',new ColorName],
            'main_background_color_value'=>'required|numeric|min:0|max:100',
            'texts_color'=>['required',new ColorName],
            'texts_color_value'=>'required|numeric|min:0|max:100',
            'keep_contact_color1' => ['required',new ColorName],
            'keep_contact_color1_value' => 'required|numeric|min:0|max:100',
            'keepontact_color_2'=>['required',new ColorName],
            'keepcontact_color_2_value'=>'required|numeric|min:0|max:100',
            'keepcontact_selected_space_color'=>['required',new ColorName],
            'keepcontact_selected_space_color_value'=>'required|numeric|min:0|max:100',
            'keepcontact_background_color_1'=>['required',new ColorName],
            'keepcontact_background_color_1_value'=>'required|numeric|min:0|max:100',
            'keepcontact_background_color_2'=>['required',new ColorName],
            'keepcontact_background_color_2_value'=>'required|numeric|min:0|max:100',
            'keepcontact_selected_space_color'=>['required',new ColorName],
            'keepcontact_selected_space_color_value'=>'required|numeric|min:0|max:100',
            'keepcontact_unselected_space_color'=>['required',new ColorName],
            'keepcontact_unselected_space_color_value'=>'required|numeric|min:0|max:100',
            'keepcontact_closed_space_color'=>['required',new ColorName],
            'keepcontact_closed_space_color_value'=>'required|numeric|min:0|max:100',
            'keepcontact_text_space_color'=>['required',new ColorName],
            'keepcontact_text_space_color'=>'required|numeric|min:0|max:100',
            'keepcontact_names_color'=>['required',new ColorName],
            'keepcontact_names_color_value'=>'required|numeric|min:0|max:100',
            'keepcontact_thumbnails_color'=>['required',new ColorName],
            'keepcontact_thumbnails_color_value'=>'required|numeric|min:0|max:100',
            'keepcontact_countdown_background_color'=> ['required',new ColorName],
            'keepcontact_countdown_background_color'=>'required|numeric|min:0|max:100',
            'keepcontact_countdown_text_color'=>['required',new ColorName],
            'keepcontact_countdown_text_color'=>'required|numeric|min:0|max:100',
            /////////KeepContact section Texts Validation\\\\\\\\\\
            'Reply_text'=>['required','min:30','max:80',new Alpha],
            'keepcontact_section_line1'=>['required','min:30','max:80',new Alpha],
            'keepcontact_section_line2'=>['required','min:30','max:80',new Alpha]
        ];
    }
}
