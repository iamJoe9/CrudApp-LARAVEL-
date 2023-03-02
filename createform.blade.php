<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  
    <form class="form" method="POST" action="{{ URL::TO('create') }}">
   @csrf
        <div class="form-group col-sm-4 col-form-label">
        <label>Username</label>
          <input type="text" class="form-control" name="username" placeholder="Enter Username">
        </div>
        <div class="form-group col-sm-4 col-form-label">
        <label>Email</label>
          <input type="email" class="form-control" name="email" placeholder="Enter Email">
        </div>
        <div class="form-group col-sm-4 col-form-label">
            <label >Age</label>
            <input type="number" name="age" step="0.1" class="form-control"  placeholder="Enter Age">
          </div>
          <div class="button">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
      
      </form>
</body>
</html>