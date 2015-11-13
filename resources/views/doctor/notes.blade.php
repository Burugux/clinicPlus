<!DOCTYPE html>
<HTML lang="en">
    <head>
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>ClinicPlus</title>
      </head>

      <!--REQUIRED STYLES -->
      
      <!-- Bootstrap 3.3.2 -->
      <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
      <!-- Font Awesome Icons -->
      <link href="/fontAwesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  
        <body>
          <div class="container">

             <div class="page-header">
              <h1 id="timeline">Doctor's Notes:</h1>
            </div>
              @if($errors->any())

                      <ul class="alert alert-danger">
                      
                        @foreach($errors->all() as $error)

                                <li> {{$error}} </li>
                                  
                        @endforeach

                      </ul>
                @endif

             {!! Form::open(['url' =>'doctor','autocomplete' => 'off']) !!}

             {!! Form::hidden('patient_id',$patient->id)!!}

            <div class ="form group">
            {!! Form :: label('patient_history' , 'Doctor Notes:') !!}
            {!! Form :: textarea ('patient_history' ,null, ['class'=> 'form-control']) !!}
            </div>

            <br>

            <div class ="form-group">
                    {!! Form :: submit("Save",['class' => 'btn btn-success form-control']) !!}
                      </div>

             {!! Form::close () !!}

          </div>

</body>
</html>