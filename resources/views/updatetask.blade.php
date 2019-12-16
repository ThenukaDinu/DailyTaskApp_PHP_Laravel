<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <br>
        <br>
        <br>
        <form action="/updatetasks" method="POST">
            {{csrf_field()}}
            <input type="text" name="task" class="form-control" value="{{$taskdata->task}}">
            <input type="hidden" name="id" value="{{$taskdata->id}}">
            <br><br>
            <input type="submit" class="btn btn-warning" value="Update"> 
            &nbsp;&nbsp;<input type="button" class="btn btn-danger" value="Cancel">
        </form>
    </div>
</body>
</html>