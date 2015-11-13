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
                    <!--page header -->
                    <div class="page-header">
                      <h1>Edit patient information.</h1>
                    </div>

                    @if($errors->any())
                      <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                                <li> {{$error}} </li>      
                        @endforeach
                      </ul>
                @endif

    {!!Form::model($patients,['method' => 'PATCH', 'action' => ['patientController@update', $patients -> id]])!!}

                         <!--FirstName -->
          <div class ="form group">
                  {!! Form :: label('firstName' , 'firstName:') !!}
                        {!! Form :: text ('firstName' ,null, ['class'=> 'form-control']) !!}
                          </div>

           <div class ="form group">
                  {!! Form :: label('surname' , 'surname:') !!}
                        {!! Form :: text ('surname' ,null, ['class'=> 'form-control']) !!}
                          </div>

             <div class ="form group">
                  {!! Form :: label('lastName' , 'lastName:') !!}
                        {!! Form :: text ('lastName' ,null, ['class'=> 'form-control']) !!}
                          </div>

              <div class ="form-group">
                  {!! Form :: label('Gender' , 'Gender :') !!}
                   {!! Form::select('gender', array([
                                    'male' => 'Male',
                                   'Female' => 'Female',
                                   'Others' => 'Others'
                   ])
                   , null, ['class' => 'form-control']) !!}  
                </div>

                <div class="form group">
                  <i class="fa fa-calendar"></i>
                  {!! Form :: label('dateOfBirth' , 'dateOfBirth:') !!}
                   {!! Form :: input ('date','dateOfBirth',null,['class'=> 'form-control']) !!}
                    </div>

                 <div class ="form group">
                   <i class="fa fa-phone"></i>
                  {!! Form :: label('phone' , 'Mobile Number:') !!}
                        {!! Form :: text ('phone' ,null, ['class'=> 'form-control']) !!}
                          </div>

                   <div class ="form group">
                   <i class="fa fa-envelope"></i>
                  {!! Form :: label('email' , 'E-mail:') !!}
                        {!! Form :: text ('email' ,null, ['class'=> 'form-control']) !!}
                          </div>

<br>
               
                    <!-- submit button -->
                      <div class ="form-group">
                        {!! Form :: submit("Update Patient",['class' => 'btn btn-success form-control']) !!}
                          </div>

                 {!! Form::close () !!}

    </div>
  </body>
</html>

