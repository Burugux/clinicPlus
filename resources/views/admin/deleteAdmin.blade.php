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
          {!! Form::open(['method' => 'delete','action'=> ['adminController@destroy',$user->id]])!!}


                  <div class="page-header">
                        <h1>Delete {{ $user->name}} <small>Are you sure?</small></h1>
                    </div>

                <input type="submit" class="btn btn-danger" value="Yes" />
                    <a href="{{ action('adminController@index') }}" class="btn btn-default">No way!</a>


          {!! Form::close () !!}


                   
      </div>

  </body>

</html>