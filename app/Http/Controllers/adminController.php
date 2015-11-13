<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\adminRequest;
use App\User;

class adminController extends Controller {

	/**
	 * checks for authorization
	 */

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
		$users=User::all();
		return view('admin.indexAdmin',compact('users','userDetails'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.createAdmin');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(adminRequest $request)
	{
		User::create($request->all());
		return redirect('dash');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user=User::findOrFail($id);
	}

	
	public function delete($id)
	{
		$user=User::findOrFail($id);
		
		return view('admin.deleteAdmin',compact('user'));
	}

	public function destroy($id)
	{
		$user=User::findOrFail($id);
		$user->delete();
		return redirect('admin');

	}

}
