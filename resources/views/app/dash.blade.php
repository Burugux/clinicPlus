@extends ('dashboard')


  @section('content')

  @if(Session::has('flash_message'))

      <div class="alert alert-success {{ Session::has('flash_message') ? 'alert-success' : ''}}">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('flash_message') }}
          </div>

  @endif
   <!-- search form -->
           {!! Form::open(['url' =>'dash']) !!}
           
            <div class="input-group" >
                <input type="text" name="keyword" class="form-control" placeholder="Search For A patient" >
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          
         {!! Form::close () !!}

         <br>

  <!--END OF searh form-->
    
  <!--create patient button-->
      <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('patientController@create') }}" class="btn btn-success">Create A New Patient</a>
        </div>
    </div>

     <script type="text/javascript">
      $('div.alert').not('.alert-success').delay(3000).slideup(300);
          </script>

  @endsection
