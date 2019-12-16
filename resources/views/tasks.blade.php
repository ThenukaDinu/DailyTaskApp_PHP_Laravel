<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body> 
    <div class="container">
        <div class="text-center">
            <br>
            <a style=" text-decoration: none;" href="/"> <h1>Daily Tasks</h1> </a>
            <br>
            <div class="row">
                
                <div class="col-md-12">

                    @foreach($errors->all() as $error)

                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>

                    @endforeach

                    <form action="/saveTask" method="post">
                        {{csrf_field()}}

                        <input type="text" name="task" placeholder="Enter Your Task Here" id="" class="form-control">
                            <br>
                        <input type="submit" value="SAVE" class="btn btn-primary">
                        <input type="button" value="CLEAR" class="btn btn-warning">
                        </form>
                        <br>
                    <table class="table table-dark table-hover"> 
                        
                        <th>ID</th>
                        <th>Task</th>
                        <th>Completed</th>
                        <th>Action</th>

                        @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>
                            <td>
                            @if($task->iscompleted)
                            <button class="btn btn-success">Completed</button> 
                            @else
                            <button class="btn btn-warning">Not Completed</button>  
                            @endif
                            </td>
                            
                            <td>
                            @if(!$task->iscompleted)
                                <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a>
                            @else
                                <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark As Not Completed</a>
                            @endif
                                
                            </td>

                            <td>
                                <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>
                            </td>

                            <td>
                                <a href="/updatetask/{{$task->id}}" class="btn btn-success">Update</a>
                            </td>                    
                                                        
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>