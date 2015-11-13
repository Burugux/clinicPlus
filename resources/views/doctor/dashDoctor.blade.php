@extends ('dashboard')

  @section('content')

  

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
                    <th>Age</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>B.M.I</th>
                    <th>Known Allergies</th>
                    
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
                    @if(isset($patients->patientTriage->Age))
                    <td>{{$patients->patientTriage->Age}}</td>
                    <td>{{$patients->patientTriage->Weight}}</td>
                    <td>{{$patients->patientTriage->Height}}</td>
                    <td>{{$patients->patientTriage->Bmi}}</td>
                    <td>{{$patients->patientTriage->Allergies}}</td>
                    @else
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    @endif
                    <td><a href="{{ action('doctorController@show',$patients->id) }}" class="btn btn-success">View Patient timeline</a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div> 
      
  @endsection
