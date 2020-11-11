<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $name = $_POST['name'];
  $email=$_POST['email'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $hobbies=$_POST['hobbies'];
    $image=$_POST['image'];
 $q = " update users set id=$id, name='$name',"
         . "email='$email'," . "gender='$gender'"  . "hobbies='$hobbies'"   . "image='$image'"
                    
         . " where id=$id  ";

 $query = mysqli_query($con,$q);

 header('location:view.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>
 <tr>
     <td> <label> Name: </label>
 <input type="text" name="username" class="form-control"></td>
 </tr>

 <tr>
    <td> <label> Email: </label>
 <input type="email" name="email" class="form-control"></td>
 </tr>

 <tr> <td> <label> Mobile: </label>
 <input type="number" name="contact" class="form-control"></td>
 </tr>
 
                 <tr>
                         
<div class="form-group">
    <td><label>Gender :- </label></td>
<td><input type="radio" name="gender" value="Male" >Male
<input type="radio" name="gender" value="Female"  > Female
<input type="radio" name="gender" value="Other"  > Other<br></td>
                  </tr>

                         


                  <tr>
                      <td>
                     <div class="form-group">
<label>Hobbies :- </label> </td>
 <td> <input type="checkbox"  name="hobbies" value="Reading">Reading
 <input type="checkbox" name="hobbies" value="Listening Music"  > Listening Music
 <input type="checkbox" name="hobbies" value="Singing"  > Singing
  
</div></td>
                     </tr>

                     <tr>
                         <td><div class="form-group">
<label>Upload Profile Picture :- </label></td>
                         <td><input type="file" name="image" ><br></td>
                     </tr>

                         
                         
 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>
