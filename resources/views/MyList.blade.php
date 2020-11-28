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
  
}
  </style>
</head>
<body> 
<div class="form-group">
  @if(Session::has('success'))
      
        <div class="alert alert-success" role="alert">
        {{Session::get('success')}} 
        </div>

  @endif
  <div class="form-group">
  @if(Session::has('update1'))
      
        <div class="alert alert-success" role="alert">
        {{Session::get('update1')}} 
        </div>

  @endif

  
  <div class="form-group">
  @if(Session::has('update2'))
      
        <div class="alert alert-success" role="alert">
        {{Session::get('update2')}} 
        </div>

  @endif
    
  
 <table class="table">
 <tr class="table-success">
 <th>Student ID</th>
 <th>Student Name</th>
 <th>Student Email</th>
 <th>Student phone</th>
 <th>Student Gender</th>
 <th>Student course</th>
 <th>Student country</th>
 <th>Student Image</th>
 <th>Create At</th>
 <th>updated At</th>
 <th>Modification</th>
 </tr>
 @foreach($member as $ss)
 
 <tr class="table-bordered table-striped table-hover">
 <td>{{$ss['id']}}</td>
 <td>{{$ss['name']}}</td>
 <td>{{$ss['email']}}</td>
 <td>{{$ss['phone']}}</td>
 <td>{{$ss['gender']}}</td>
 <td>{{$ss['course']}}</td>
 <td>{{$ss['country']}}</td>

 <td><img src="{{('uploads/employee/').$ss['image']}}" class="img-fluid" style="width:55px;"></td>
 <td>{{$ss['created_at']}}</td>
 <td>{{$ss['updated_at']}}</td>
 <td>
 
 <a class="btn btn-primary" style="position:relative;top:-1px;left:-3px" href={{"/edit/".$ss['id']}} >Edit</a>
 <a class="btn btn-danger"style="position:relative;top:-38px;left:60px" data-toggle="modal" data-target="#delete"  href={{"/delete/".$ss['id']}}>Del</a>
</td>
 </tr>

 @endforeach
 </table>
 
 
 <div class="modal" id="delete" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-footer">
      <a class="btn btn-success"  href={{"/delete/".$ss['id']}}>Del</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 
</body>
</html>
