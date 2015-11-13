<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\nurseRequest;
use App\Patient;
use App\patientTriage;
use Carbon\Carbon;
use App\User;


class nurseController extends Controller {

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
		$patient=Patient::all();
		$userDetails= \Auth::user();
		$users=User::all();
		return view ('nurse.nurseIndex',compact('patient','userDetails'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(nurseRequest $Request)
	{
		patientTriage::create($Request->all());
		
		$patient=Patient::all();

		return view ('nurse.nurseIndex',compact('patient'));

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$patient=Patient::findOrFail($id);

		return view('nurse.triageNurse',compact('patient'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		
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

	public function triage($id)
	{

	}

}
