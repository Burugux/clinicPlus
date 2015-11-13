<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class patientTriage extends Model {

	protected $table = 'patient_triages';

	protected $fillable =[

		'Age',
		'Weight',
		'Height',
		'Bmi',
		'Allergies',
		'patient_id'

				
	];

	public function patient()
		{
			return $this->belongsTo('App\Patient');
		}

}
