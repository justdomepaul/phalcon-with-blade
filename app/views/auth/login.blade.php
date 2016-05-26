@extends('layouts.login')

@section('content')
   <div class="row">
   	  <div class="col-md-6 col-md-offset-3 text-center">
   	  	  <div class="container"> 
   	  	  	 <form class="form-signin" method="post" action="/project1/login" style="width:600px">
		        <h2 class="form-signin-heading">I.D</h2>
		         <label for="id_field" class="sr-only">Name</label>
		          <input type="email" id="id_field" class="form-control" name="name" placeholder="ID" required autofocus>
		        
		        <label for="password_field" class="sr-only">Password</label>
		          <input type="password" id="password_field" name="password" class="form-control" placeholder="Password" required>
		        <div class="checkbox">
		        
		        <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

   	  	  </div>
   	  </div>
   	  
   </div>
@stop