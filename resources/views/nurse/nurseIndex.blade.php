@extends ('dashboard')

  @section('content')

{{--   @if(Auth::user()->admin==2)
 --}}	
	{!! Form::open(['url' =>'dash']) !!}
           
            <div class="input-group" >
                <input type="text" name="keyword" class="form-control" placeholder="Search For A patient" >
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          
         {!! Form::close () !!}

         <br>


         <div class="container">
             <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Surname</th>
                    <th>LastName</th>
                    <th>gender</th>
                    <th>Date of birth</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
              @foreach($patient as $patients)
                <tr>
                    <td>{{$patients->id}}</td>
                    <td>{{$patients->firstName}}</td>
                    <td>{{$patients->surname}}</td>
                    <td>{{$patients->lastName}}</td>
                    <td>{{$patients->gender}}</td>
                    <td>{{$patients->dateOfBirth}}</td>
                    <td>{{$patients->phone}}</td>
                    <td>{{$patients->email}}</td>
                    <td><a href="{{ action('nurseController@show',$patients->id) }}" class="btn btn-info">Triage</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div> 
        {{-- @else --}}

  {{-- @endif --}}
  @endsection
