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
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <!-- Font Awesome Icons -->
      <link href="../fontAwesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />


  <body>

                  <div class="container">
                    <!--page header -->
                    <div class="page-header">
                      <h1>Enter a new patient.</h1>
                    </div>

                    <!-- errors -->
                 
                 @if($errors->any())

                      <ul class="alert alert-danger">
                      
                        @foreach($errors->all() as $error)

                                <li> {{$error}} </li>
                                  
                        @endforeach

                      </ul>
                @endif

                   {!! Form::open(['url' =>'patient']) !!}
                   
                    <!-- firstName input -->
                      <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" class="form-control" name="firstName" placeholder="Enter ...">
                      </div>

                    <!--Surname-->
                      <div class="form-group">
                        <label>Surname</label>
                        <input type="text" class="form-control" name="surname" placeholder="Enter ...">
                      </div>

                    <!-- lastName input-->
                      <div class="form-group">
                        <label>lastName</label>
                        <input type="text" class="form-control" name="lastName" placeholder="Enter ...">
                      </div>


                    <!-- combo box for gender -->
                      <div class="form-group">
                      <label>Gender</label>
                      <select class="form-control" name="gender">
                      <div class="input-group">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                      </div>
                      </select>
                    </div>


                       <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>Date of birth</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="date" class="form-control" name="dateOfBirth" >
                    </div>
                  </div>


                      <!-- phone mask input-->
                  <div class="form-group">
                    <label>Mobile Number:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control"name="phone">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->


                    <!-- email input -->
                    <div class="form-group">
                      <label>Email:</label>
                   <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>

               </div>
               
                    <!-- submit button -->
            <div class ="form-group">

                    {!! Form :: submit("Submit",['class' => 'btn btn-success form-control']) !!}
                  
                      </div>

                 {!! Form::close () !!}
    </div>

  </body>

</html>