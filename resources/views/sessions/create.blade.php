@extends ('layouts.master')

@section('content')

 <div class="col-sm-8 text-left">
    
          <!-- Title -->
          <h1 class="mt-4">Sign in</h1>
 
        <form method="POST" action="/login">
            
            {{ csrf_field() }}
            
            
                  
        <div class="form-group">
            <label for="email">E-mail:</label>
            
            <input  type="text" class="form-control" id="email" name="email" placeholder="type the your e-mail" required>
        </div>
            
            <div class="form-group">
            <label for="password">Password:</label>
            
            <input  type='password' class="form-control" id="password" name="password" placeholder="type the your password" required>
            </div>
            
          

        <button type="submit" class="btn btn-primary">Login</button>

         @include('layouts.errors')
         
        </form>
    
               
</div>

@endsection
