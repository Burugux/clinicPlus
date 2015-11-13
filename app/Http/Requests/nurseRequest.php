<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class nurseRequest extends Request {

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
			'Age' => 'required|Integer',
			'Weight' => 'required|Integer',
			'Height' => 'required|Integer',
			'Bmi' =>'required|numeric',
			'Allergies' => 'required |min:2|Alpha',
		];
	}

}
