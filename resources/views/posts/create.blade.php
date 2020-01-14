@extends ('layouts.master')

@section('content')

 <div class="col-sm-8 text-left">

      
          <!-- Title -->
          <h1 class="mt-4">Create a blog</h1>
 
        <form method="POST" action="/posts">
            
            {{ csrf_field() }}
            
            
        <div class="form-group">
            <label for="formGroupExampleInput">Title</label>

            <input type="text" class="form-control" id="title" name="title" placeholder="type the title" required>
        </div>
            
        <div class="form-group">
           
            <label for="formGroupExampleInput2">Body</label>
            
            <textarea  class="form-control" id="body" name="body" placeholder="type the body" required></textarea>
        </div>
            
        

        <button type="submit" class="btn btn-primary">Publish</button>

         @include('layouts.errors')
         
        </form>
    
        
</div>


@endsection