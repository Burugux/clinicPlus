@extends ('dashboard')

  @section('content')

	<h1>Triage<small>Section</small></h1>
    
                 @if($errors->any())

                      <ul class="alert alert-danger">
                      
                        @foreach($errors->all() as $error)

                                <li> {{$error}} </li>
                                  
                        @endforeach

                      </ul>
                @endif
	
	 {!! Form::open(['url' =>'nurse']) !!}

                   
                      {!! Form::hidden('patient_id',$patient->id)!!}
                      
                      <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control" name="Age" placeholder="Enter ...">
                      </div>

                       <div class="form-group">
                        <label>Height</label>
                        <input type="text" class="form-control" name="Height" placeholder="Enter ...">
                      </div>

                       <div class="form-group">
                        <label>Weight</label>
                        <input type="text" class="form-control" name="Weight" placeholder="Enter ...">
                      </div>

                       <div class="form-group">
                        <label>Body Mass Index (B.M.I)</label>
                        <input type="text" class="form-control" name="Bmi" placeholder="Enter ...">
                      </div>

                       <div class="form-group">
                        <label>Known Allergies</label>
                        <input type="text" class="form-control" name="Allergies" placeholder="Enter ...">
                      </div>


                    <!-- submit button -->
            <div class ="form-group">

                    {!! Form :: submit("Submit",['class' => 'btn btn-success form-control']) !!}
                  
                      </div>

                 {!! Form::close () !!}

  @endsection
