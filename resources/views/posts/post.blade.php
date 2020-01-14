<div class ="container" id="myPOST">
        <!-- Title -->
            
    
        <h1 class="mt-4">
            <a href="posts/{{$post->id}}" name="ti">
            {{$post->title}}
            </a>
        </h1>

          <!-- Author -->
          <p class="lead">
            by {{$post->user->name}}
          </p>

          <hr>

          <!-- Date/Time -->
          <p>{{$post->created_at->toFormattedDateString()}}</p>

      
          <!-- Post Content -->
          <p class="lead">{{$post->body}}</p>
          
    

</div>