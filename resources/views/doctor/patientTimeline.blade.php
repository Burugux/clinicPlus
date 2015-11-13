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
      <!-- timeline css-->
      <link rel="stylesheet" type="text/css" href="../css/timeline.css">
      <!-- Font Awesome Icons -->
      <link href="../fontAwesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <body>
   
        <div class="container">
  <div class="page-header">
    <h1 id="timeline">Patient Timeline.</h1>
  </div>

      <div class="panel panel-default">
              <div class="panel-body">
                  <a href="{{ action('doctorController@create',$patient->id)}}" class="btn btn-success">Makes Notes</a>
              </div>
          </div>

@foreach($patient->patientHistory as $patients)

<!-- timeline right card -->
  <ul class="timeline">
    <li class = 
     @if($i++%2==1)
     "timeline-inverted"
      @endif>
      <div class="timeline-badge"><i class="glyphicon glyphicon-inbox"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">  {{$patients->updated_at->format('F d, Y h:ia')}} </h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small></p>
        </div>
        <div class="timeline-body">    
          <p> {{$patients->patient_history}}  </p>
        </div>
      </div>
    </li>
@endforeach
    </ul>
  </div>
  </body>
</html>