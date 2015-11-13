<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use App\Patient;
use Illuminate\Http\Request;

class patientController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$userDetails= \Auth::user();
		$patient=Patient::all();
		return view ('app.dash',compact('patient','userDetails'));
	}


	public function show($id)

	{
		$patient=Patient::findOrFail($id);

	}

	public function create()
	{
		return view('patients.create');
	}

	public function store(PatientRequest $Request)
	{
		
		Patient::create($Request->all());
		
		session()->flash('flash_message','A new patient has been created');

		return redirect('dash');
	}

	public function edit($id)
	{
		$patients=Patient::findOrFail($id);
		
		return view('patients.edit',compact('patients'));

	}
	
	public function update($id,PatientRequest $request)
	{
			$patients=Patient::findOrFail($id);
			$patients->update($request->all());
			return redirect('dash');
		
	} 

	public function destroy()
	{

	}

}
