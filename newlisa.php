
<!doctype html>
<html lang="en">
    <head>
        <title>firstproject</title>
        <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <form method="post">
        <div class="container mt-4 p-5 bg-light text-white rounded">
  <div class="mb-3">
  <h1 class="text-center text-success">Sign in</h1>
    <label for="exampleInputEmail1" class="form-label text-success" >Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fname">
    
  </div>  
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-success">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
  </div>
            
    <button type="submit" class="btn btn-primary" action="lisa.php">create</button>
    
        
        </form>
        </div>
    </body>
</html>

<?php
include 'conn.php';

$fname=$_POST['fname'];
$pwd=$_POST['pwd'];
$sql="insert into fpt2(email,pwd) values('$fname','$pwd')";

if(mysqli_query($conn,$sql))
{
    echo "";
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>


