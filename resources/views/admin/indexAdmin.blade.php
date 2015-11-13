@extends ('dashboard')

  @section('content')

  @if(Auth::user()->admin==0)

 <div class="col-lg-10 col-lg-offset-1">
 	 <h1><i class="fa fa-users"></i> User Administration</h1>

 	 <div class="table-responsive">
        <table class="table table-bordered table-striped">
           
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Group</th>
                    <th>Date/Time Added</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->admin}}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>
                        <a href="admin/{{$user->id}}/delete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="admin/create" class="btn btn-success">Add New User</a>

 </div>
 @else
    <H1>Unauthorised Access</H1>
    @endif

  @endsection
