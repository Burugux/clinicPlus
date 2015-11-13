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
                      <h1>Create a new User</h1>
                    </div>
                     @if($errors->any())

                      <ul class="alert alert-danger">
                      
                        @foreach($errors->all() as $error)

                                <li> {{$error}} </li>
                                  
                        @endforeach

                      </ul>
                @endif

                   {!! Form::open(['url' =>'admin','autocomplete' => 'off']) !!}

                            <div class="form-group">
                        <label>Name</label>
                          <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                      </div>


                                <div class="form-group">
                        <label >E-Mail Address</label>
                          <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                      
                            <div class="form-group">
                            <label>AccessLevel</label>
                            <select class="form-control" name="admin">
                            <div class="input-group">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                            </div>
                            </select>
                          </div>

                    <div class="form-group">
                        <label>Password</label>
                          <input type="password" class="form-control" name="password">
                        </div>
                      

                            <div class="form-group">
                    <label>Confirm Password</label>
                      <input type="password" class="form-control" name="password_confirmation">
                  </div>
                         
                    <!-- submit button -->
            <div class ="form-group">

                    {!! Form :: submit("Submit",['class' => 'btn btn-success form-control']) !!}
                  
                      </div>

                 {!! Form::close () !!}

                 
    </div>

  </body>

</html>