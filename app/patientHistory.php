<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class patientHistory extends Model {

		protected $table = 'patient_histories';

		protected $fillable =[

				'patient_history',
				'patient_id'
				
	];

		public function patient()
		{
			return $this->belongsTo('App\Patient','patient_id');
		}

		
}
