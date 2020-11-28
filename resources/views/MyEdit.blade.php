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

  <form method="post" action="{{route('post.update')}}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
  @if(Session::has('update'))
      
        <div class="alert alert-success" role="alert">
        {{Session::get('update')}} 
        </div>

  @endif
  <div class="form-group">
  <input type="hidden" name="id" value="{{$da['id']}}">
    <label for="exampleInputEmail1">Enter user Name</label>
    <input type="text" class="form-control" name="userName" aria-describedby="emailHelp" value="{{$da['name']}}">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">User Email</label>
    <input type="text" class="form-control" name="userEmail" value="{{$da['email']}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">User Contact</label>
    <input type="text" class="form-control" name="userContact" value="{{$da['phone']}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Select your Gender</label><br>
   Male <input type="radio"  name="gender"   value="male" <?php echo ($da['gender'] =='male')? 'checked':'' ?>>
   Female <input type="radio"  name="gender" value="female" <?php echo ($da['gender'] =='female')? 'checked':'' ?>>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" name="course[]" value="java" <?php echo ($da['course']=="java" ? 'checked' : '');?> >
    <label class="form-check-label" for="exampleCheck1">java&nbsp;&nbsp;&nbsp;</label>
   &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" class="form-check-input" name="course[]" value="php"  <?php echo ($da['course']=="php" ? 'checked' : '');?>>
    <label class="form-check-label" for="exampleCheck1">php  &nbsp;&nbsp;&nbsp;</label>
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="form-check-input" name="course[]"  value="C++"  <?php echo ($da['course']=="C++" ? 'checked' : '');?>>
     <label class="form-check-label" for="exampleCheck1">C++</label>
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Select your country</label>
    <select name="userCountry" class="form-control">
    <option value="India" <?php if($da['country']=="India") echo 'selected="selected"'; ?>>India</option>
    <option value="USA" <?php if($da['country']=="USA") echo 'selected="selected"'; ?>>USA</option>
    <option value="UK"<?php if($da['country']=="UK") echo 'selected="selected"'; ?>>UK</option>
    </select>
  </div>
  <br>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
  <br>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" >
    <label class="form-check-label" for="exampleCheck1">I Agree All the term and condition</label>
  </div>
</div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>


</body>
</html>
