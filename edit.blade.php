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
  
    <form class="form" method="POST" action="{{ route('update',$data->id) }}">
        {{ method_field('PUT') }}
   @csrf
        <div class="form-group col-sm-4 col-form-label">
        <label>Username</label>
          <input type="text" class="form-control" name="username" placeholder="Enter Username" value="{{ $data->username }}">
        </div>
        <div class="form-group col-sm-4 col-form-label">
        <label>Email</label>
          <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ $data->email }}">
        </div>
        <div class="form-group col-sm-4 col-form-label">
            <label >Age</label>
            <input type="number" name="age" step="0.1" class="form-control"  placeholder="Enter Age" value="{{ $data->age }}">
          </div>
          <div class="button">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
      
      </form>
</body>

</html>

<style>
    *{
    margin: 0;
    padding: 0;
    
}

.form{
    padding-left:35%;
    padding-top: 5%;
    position: relative;
    width: 100%;
}

</style>