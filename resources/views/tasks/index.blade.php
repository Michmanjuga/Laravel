<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <div class="container">
    
        <ul>
            @foreach( $tasks as $task )
                <li>
                    <a href="/tasks/{{ $task->id }}">
                        {{ $task->body }}
                    </a>
                </li>
            @endforeach
        </ul>

  </div> <!-- end container -->
</body>
</html>