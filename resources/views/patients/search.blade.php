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
                    <th></th>

                </tr>
            </thead>
            <tbody>
              
              @foreach($name as $names)
                <tr>
                    <td>{{$names->id}}</td>
                    <td>{{$names->firstName}}</td>
                    <td>{{$names->surname}}</td>
                    <td>{{$names->lastName}}</td>
                    <td>{{$names->gender}}</td>
                    <td>{{$names->dateOfBirth}}</td>
                    <td>{{$names->phone}}</td>
                    <td>{{$names->email}}</td>
                    <td><a href="{{ action('patientController@edit',$names->id) }}" class="btn btn-info">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    		</div>

</body>

</html>