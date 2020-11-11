<?php
include 'conn.php';
include 'config.php';
 

if(isset($_POST['submit']))
{
  
    
    $name = $_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $hobbies=$_POST['hobbies'];
    $image=$_POST['image'];
   
    $q="INSERT INTO `user`( `name`, `email`, `contact`, `gender`, 
            `hobbies`, `image`) 
            VALUES ('$name','$email','$contact',
            '$gender','$hobbies','$image')";
            
            
            
   $query = mysqli_query($con,$q);
   if ($con->query($q) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $q . "<br>" . $con->error;
}

$con->close();
}

            
            


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registration Page</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script> 
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-8 col-offset-1">
<div class="card">
    <div class="card-header bg-light">
<h2>Registration</h2>
</div>
</div>
<p>Please fill all fields in the form</p>
<p id="show_message" style="display: none">Form data sent.  </p>
<span id="error" style="display: none"></span>
<form  method="POST" >
<div class="form-group">
      <table width="75%" height="50%"  border="0">
          <tr>
              <td>
                  <label>Name:</label></td>
              <td>  <input type="text" name="name" id="name" class="form-control" value="" maxlength="50" > 
              </td>
          </tr>
   <tr>
              <td>
                  <div class="form-group ">
                      <label>Email</label></td>
<td><input type="email" name="email" id="email" class="form-control" value="" maxlength="30" >              </td>
</tr></td>
                  <tr>
                      <td><label>Mobile</label></td>
                      <td><input type="text" name="contact" id="contact" class="form-control" value="" maxlength="12" ></td>
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




		  <script>
function getdistrict(val) {
	$.ajax({
	type: "POST",
	url: "get_district.php",
	data:'state_id='+val,
	success: function(data){
		$("#district-list").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	
	</head>
	<body>


</nav>

        </div>
       
      
     
 <!--/left-->
  
  <!--center-->
  <div class="col-sm-8">
    <div class="row">
      <div class="col-xs-12">
      
		<hr >
		
		<form name="insert" action="" method="post">
  <table width="100%" height="117"  border="0">
  <tr>
    <th width="27%" height="63" scope="row">State :</th>
    <td width="73%"><select onChange="getdistrict(this.value);"  name="state" id="state" class="form-control" >
                    <option value="">Select</option>
                   								<?php $query =mysqli_query($con,"SELECT * FROM state");
while($row=mysqli_fetch_array($query))
{ ?>
<option value="<?php echo $row['StCode'];?>"><?php echo $row['StateName'];?></option>
<?php
}
?>
                    </select></td>
  </tr>
  <tr>
    <th scope="row">City :</th>
    <td><select name="city" id="district-list" class="form-control">
<option value="">Select</option>
</select></td>
  </tr>
</table> 
                    </table>

    </div>
</div>    
</div>
    

 <input type="submit" name="submit" value="Submit">

                    
                    
                    
<script type="text/javascript">
$(document).ready(function($){
// hide messages 
$("#error").hide();
$("#show_message").hide();
// on submit...
$('#ajax-form').submit(function(e){
e.preventDefault();
$("#error").hide();
//name required
var name = $("input#name").val();
if(name == ""){
$("#error").fadeIn().text("Name required.");
$("input#name").focus();
return false;
}
// email required
var email = $("input#email").val();
if(email == ""){
$("#error").fadeIn().text("Email required");
$("input#email").focus();
return false;
}
// contact number required
var contact = $("input#contact").val();
if(contact == ""){
$("#error").fadeIn().text("Mobile number required");
$("input#contact").focus();
return false;
}

var gender = $("input#radio").val();
if(gender == ""){
$("#error").fadeIn().text("Please Select your Gender");
$("input#radio").focus();
return false;
}

var hobby = $("input#checkbox").val();
if(hobby == ""){
$("#error").fadeIn().text("Please Select your Hobby");
$("input#checkbox").focus();
return false;
}

var state = $("input#dropdown").val();
if(state == ""){
$("#error").fadeIn().text("Please Select your State");
$("input#dropdown").focus();
return false;
}

var state = $("input#dropdown").val();
if(city == ""){
$("#error").fadeIn().text("Please Select your City");
$("input#dropdown").focus();
return false;
}
// ajax
$.ajax({
type:"POST",
url: "project_folder_name/ajax-form-save.php",
data: $(this).serialize(), // get all form field value in serialize form
success: function(){
$("#show_message").fadeIn();
//$("#ajax-form").fadeOut();
}
});
});  
return false;
});
</script>
<style type="text/css">
	*{
		margin: 100;
		padding:100;
		box-sizing: border-box;
	}
	body{
		background:whitesmoke;
		background-size:500;
	}
	.box-set{
		width: 100%;
		height: 100%;
		padding: 10px 20px;
		background-color: rgba(0,0,0,0.5);
		box-shadow: 100px 100px 150px 300px black;
		margin: 100px 10px;
	}
</style>

</form>
</body>
</html>