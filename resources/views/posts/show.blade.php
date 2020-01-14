@extends ('layouts.master')

@section('content')

<div class="col-sm-8 text-left">



        <h1 class="mt-4"> {{$post->title}} </h1>
        <p class="lead">
        by {{$post->user->name}} on {{$post->created_at->toFormattedDateString()}}
        </p>
        <p class="lead"> {{$post->body}} </p>

           
          <input class="form-control" id="myInput" type="text" placeholder="Filter comments..">
          <br>
       
        <div class="comments" id="myDIV">
            <ul class="list-group" >

            @foreach ($post->comments as $comment)

                <li class="list-group-item">
                <strong>{{$comment->created_at->diffForHumans()}} by {{$comment->user->name}} :
                </strong> {{$comment->body}}
                </li>


            </ul>  
            @endforeach
            <br>
         
         
            
        <script>
            
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myDIV li").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        </script>

        </div>
    <hr>

    @if(auth()->check())
    @include('layouts.comments')

    @include('layouts.errors')
    @endif

</div>


@endsection