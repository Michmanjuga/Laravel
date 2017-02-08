<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <div class="container">
    
        <ul>
            @foreach( $tasks as $task )
                <li>{{ $task->body }}</li>
            @endforeach
        </ul>

  </div> <!-- end container -->
</body>
</html>