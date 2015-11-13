<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Patient extends Model {

	

	protected $fillable =[

	'firstName',
	'surname',
	'lastName',
	'gender',
	'dateOfBirth',
	'phone',
	'email'


	];

	
 public function patientHistory()
 {
 	return $this->hasMany('App\patientHistory','patient_id');
 }

 public function patientTriage()
 {
 	return $this->hasOne('App\patientTriage','patient_id');
 }

	
}
