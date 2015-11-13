<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PatientRequest extends Request {

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

		/**
		 * This is part of the patient validation,all fields are required and must be filled in the rigth format
		 */
			'firstName' => 'required|Alpha',
			'lastName' => 'required|Alpha',
			'surname' => 'required|Alpha',
			'gender' =>'required|Alpha',
			'dateOfBirth' => 'required |date|After:1920-12-25',
			'phone' => 'required |numeric',
			'email' =>'required |email|max:255',


		];
	}

}
