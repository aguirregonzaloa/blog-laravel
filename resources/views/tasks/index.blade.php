<!doctype html>
<html >
    <head>
        
        <title>Index Tasks</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
        <body>

            <div class="container">
              <h1>Tasks List:</h1>
              <ul class="list-group">
                  
                   @foreach($tasks as $task)
                  
                <li class="list-group-item">
                    
                <a href="/tasks/{{$task->id}}" >
                   {{$task->text}}
                    
                </a>
                  
                              
                </li>
                  @endforeach
              </ul>
            </div>
        </body>
</html>
