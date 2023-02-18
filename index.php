
 

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
	<div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Task</h1>
          </div>
          <div class="panel-body">
            <?php include 'dbcon.php'; ?>

            <?php
//if user has already registered, then take user to account page            




             if (isset($_POST['submit'])) {

              $firstName = $_POST['firstName'];
              $lastName = $_POST['lastName'];
              $gender = $_POST['gender'];
              $textbox = $_POST['textbox'];
              $email = $_POST['email'];
              
              
  // Database connection
    $insert_query = mysqli_query($conn, " INSERT INTO user (firstName, lastName, gender,textbox, email) VALUES ($firstName','$lastName','$gender','$textbox','$email')");
    if ($insert_query) {
      ?>
      <script type="text/javascript"> alert ("done"); </script>
      <?php
    }else{
      ?>
      <script type="text/javascript"> alert ("not");
      </script>
      <?php
    }

}
    
  
?>



<div class="row">
  <div class="column" style="background-color:#aaa;">
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
    </div>
  <div class="column" style="background-color:#bbb;">
    <form action="" method="POST" >
            	
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName"/>
              </div>
              <div class="form-group"><br>
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName"/>
              </div>
              <div class="form-group"><br>
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline">
                    <input type="radio" name="gender" value="m" id="male"/>Male
                    </label>
                  <label for="female" class="radio-inline">
                    <input type="radio" name="gender" value="f" id="female"/>Female
                    </label>
                  <label for="others" class="radio-inline">
                    <input  type="radio" name="gender" value="o" id="others"/>Others
                    </label>
                </div>
              </div>
              
              <div class="form-group"><br>
                <textarea for="textbox" class="form-group" id="textbox" name="textbox">Enter Text...</textarea>
                
              </div>
              <div class="form-group"><br>
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email"/>
              </div><br>
              
               <input type="submit" class="btn btn-primary" id="register-btn" name="submit" value="submit"/>
           </div>
            </form>
  </div>
</div>

</body>
</html>

			
				
          
       
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
 
  
</div>
</div>

  </body>
</html>
