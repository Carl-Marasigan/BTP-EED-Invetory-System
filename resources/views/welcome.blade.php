<title>EED Spare Parts Inventory System</title>


<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<style type="text/css">
  
<style>



body {
  background-color: #fff ;
 
}

.back {
  background-color: #fff ;
  width: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
}

.div-center {
  width: 400px;
  height: 300px;
  background-color: #fff;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  max-width: 100%;
  max-height: 100%;
  overflow: auto;
  padding: 1em 2em;
  border: 5px solid #ccc;
  display: table;
  box-shadow: 10px 15px #888888;
}

div.content {
  display: table-cell;
  vertical-align: middle;
}


</style>


<div class="body">

<div class="back">


  <div class="div-center">


    <div class="content">


    <h4 align ="center">EED Spare Parts Inventory System</h4><br />
     
      @if(isset(Auth::user()->email))
   
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      Failed Login Attempt!
     @endforeach
     </ul>
    </div>
   @endif

   <form action="{{ route('voyager.login') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group form-group-default" id="emailGroup">
                <label>Username</label>
                <div class="controls">
                    <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Username" class="form-control" required>
                </div>
            </div>

            <div class="form-group form-group-default" id="passwordGroup">
                <label>{{ __('voyager::generic.password') }}</label>
                <div class="controls">
                    <input type="password" name="password" placeholder="{{ __('voyager::generic.password') }}" class="form-control" required>
                </div>
            </div>

             <div class="form-group">
        <input type="submit" name="login" class="btn btn-primary" value="Login" />

    </div>
   </form>
  </div>
 </body>
</html>
