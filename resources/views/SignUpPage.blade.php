<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
  <style>
  .myform{background:#fff;padding:30px;border-radius:10px;box-shadow:53px 0px 188px 446px #efefef ;}
  </style>
</head>
<body> 
 
 
 <div class="container mt-2">
  <div class = "row justify-content-center">
   <div class = "col-xs-2 myform">

  <form method="post" action="{{route('post.signcomplete')}}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Enter user Name</label>
    <input type="text" class="form-control" name="userName" aria-describedby="emailHelp" placeholder="user Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" name="userEmail" placeholder="User Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">User Contact</label>
    <input type="text" class="form-control" name="userContact" placeholder="User Contact">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Select your Gender</label><br>
   Male <input type="radio"  name="gender" value="male">
   Female <input type="radio"  name="gender" value="female">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" name="course[]" value="java">
    <label class="form-check-label" for="exampleCheck1">java&nbsp;&nbsp;&nbsp;</label>
   &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" class="form-check-input" name="course[]" value="php">
    <label class="form-check-label" for="exampleCheck1">php  &nbsp;&nbsp;&nbsp;</label>
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="form-check-input" name="course[]"  value="C++">
     <label class="form-check-label" for="exampleCheck1">C++</label>
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Select your country</label>
    <select name="userCountry" class="form-control">
    <option value="India">India</option>
    <option value="USA">USA</option>
    <option value="UK">UK</option>
    </select>
  </div>
  <br>
  <div class="form-group">
   
    <input type="file"  name="image">
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" name="test" >
    <label class="form-check-label" for="exampleCheck1">I Agree All the term and condition</label>
  </div>
</div>
<div>
<button type="submit" class="btn btn-primary" style="margin-top:603px;margin-left:-239px">Submit</button>
  </div>
 
</form>


</body>
</html>
