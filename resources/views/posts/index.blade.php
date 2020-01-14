@extends ('layouts.master')

@section('content')


 <div class="col-sm-8 text-left">   
            @foreach($posts as $post)
     
                @include('posts.post')
     
            @endforeach    
 </div>
       
   
    

@endsection