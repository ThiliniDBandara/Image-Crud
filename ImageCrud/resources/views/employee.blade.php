<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="jumbotron">
    <h1>Image CRUD: in Laravel</h1>
    <br>
    <form action="{{route('addimage')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Post</label>
    <input type="text" name="post" class="form-control" id="exampleInputPost" placeholder="Post">
  </div>
  <label>Image</label>
  <div class="input-group">
      <div class="custom-file">
          <input type="file" name="image" class="custom-file-input">
          <label class="custom-file-label">Choose File</label>
      </div>
  </div>
  <br><br><button type="submit" class="btn btn-primary">Save Data</button>
</form></div></div>
</body>
</html>