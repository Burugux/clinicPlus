<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorRequest;
use Carbon\Carbon;
use App\Patient;
use App\patientTriage;
use App\patientHistory;

class doctorController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	
		$userDetails= \Auth::user();
		$patient=Patient::all();
		return view('doctor.dashDoctor',compact('patient','userDetails'));
	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$patient=Patient::findOrFail($id);
		return view ('doctor.notes',compact('patient'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(DoctorRequest $Request)
	{
		patientHistory::create($Request->all());
		
		$patient=Patient::all();

		return view ('doctor.dashDoctor',compact('patient'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Responsenew
	 */
	public function show($id)
	{
		
			 $i = 0;
			 
			 $patient=Patient::findOrFail($id);

			 $userDetails= \Auth::user();
					
			 return view('doctor.patientTimeline',compact('patient','i'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
