
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
    <div class="container mt-4 p-5 bg-dark text-white rounded">
        <h1 class="text-center">DEV10</h1>
        
    </div> 
    
    <div class="container mt-3">
  
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" href="#">Active</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Dropdown</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Link 1</a></li>
        <li><a class="dropdown-item" href="#">Link 2</a></li>
        <li><a class="dropdown-item" href="#">Link 3</a></li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
   
  </ul>
</div>

        
        <div class="container mt-3 p-3 bg-light text-white rounded">
        <div class="row">
       <div class="col-6">
                <div class="card" style="width:200px">
                    <div class="card-body">
                <h4 class="card-title text-success text-center">DEV10</h4>
                <p class="card-text text-success text-center">first project</p>
                    </div>
                <img class="card-img-top" src="img_avatar1" alt="Card image">
                
                
                
                </div>

       </div>
        <div class="col-6">
            <div class="mb-3">
              <h1 class="text-center text-success">login page</h1>
              <label for="exampleInputEmail1" class="form-label text-success" >Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fname">
                
  </div>  
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-success">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
  </div>
            
    <button type="submit" class="btn btn-primary" action="lisa.php">login</button>
    <a href="newlisa.php" class="link-primary">create new account</a>
        
        </form>
        </div>
        </div>
        </div>
        <div class="container bg-dark">
        <h2>  
Bootstrap4 Footer Example  
</h2>  
<footer class="mainfooter" role="contentinfo">  
  <div class="footer-middle container">  
  <div class="container">  
    <div class="row">  
      <div class="col-md-3 col-sm-6">  
        <div class="footer-pad">  
          <h4> Footer Heading 1</h4>  
          <ul class="list-unstyled">  
            <li> <a href="#"> </a> </li>  
            <li> <a href="#">Payment Center</a></li>  
            <li> <a href="#"> Contact Directory </a></li>  
            <li> <a href="#">Forms</a></li>  
            <li> <a href="#">News and Updates</a></li>  
            <li> <a href="#">FAQs</a></li>  
          </ul>  
        </div>  
      </div>  
      <div class="col-md-3 col-sm-6">  
        <div class="footer-pad">  
          <h4> Footer Heading 2</h4>  
          <ul class="list-unstyled">  
            <li><a href="#"> Blog </a> </li>  
            <li><a href="#">Accessibility</a> </li>  
            <li><a href="#">Disclaimer</a></li>  
            <li><a href="#">Privacy Policy</a></li>  
            <li><a href="#">FAQs</a></li>  
            <li><a href="#">Webmaster</a></li>  
          </ul>  
        </div>  
      </div>  
      <div class="col-md-3 col-sm-6">  
        <div class="footer-pad">  
          <h4> Footer Heading 3 </h4>  
          <ul class="list-unstyled">  
            <li> <a href="#"> Parks and Recreation </a> </li>  
            <li> <a href="#"> Public Works </a> </li>  
            <li> <a href="#">Police Department</a> </li>  
            <li> <a href="#"> Fire </a> </li>  
            <li> <a href="#"> Mayor and City Council </a> </li>  
          </ul>  
        </div>  
      </div>  
        <div class="col-md-3">  
            <h4> Follow Us </h4>  
            <ul class="social-network social-circle">  
             <li> <a href="#" class="icoFacebook" title="Facebook"> <i class="fa fa-facebook"> </i> </a> </li>  
             <li> <a href="#" class="icoLinkedin" title="Linkedin"> <i class="fa fa-linkedin"> </i> </a> </li>  
    <li> <a href="#"> <i class="fa fa-youtube" aria-hidden="true"> </i> </a> </li>  
            </ul>               
    </div>  
    </div>  
    <div class="row">  
    <div class="col-md-12 copy">  
    <p class="text-center"> © Copyright 2021 - Company Name.  All rights reserved. </p>  
    </div>  
    </div>  
  </div>  
  </div>  
</footer> 
</div> 
    </body>
</html>

<?php
include 'conn.php';

$fname=$_POST['fname'];
$pwd=$_POST['pwd'];

$sql= "SELECT * FROM fpt2 WHERE email = '$fname' AND pwd = '$pwd' limit 1 ";
$result = mysqli_query($con,$sql);

if($result  && mysqli_fetch_rows($result)>0)
{
$user_data=mysqli_fetch_assoc($result);
return $result;

}

header("Location:newlisa.php");
die;
?>

