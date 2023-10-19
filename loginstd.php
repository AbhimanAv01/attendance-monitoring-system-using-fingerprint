<?php
require 'l1.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style11.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>


<body>

  <div class="cont">
  <form action="loginstd.php" method="post">
    <div class="form sign-in">
      <h2>LOG IN</h2>
      <label>
       <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="username">Enter your USN</label>
            <input type="text" class="form-control" id="usn" name="usn" aria-describedby="usn">
            
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

      <button class="submit" class="btn btn-primary">Login</button>      
      
    </form>


    
      <div class="social-media">
      </div>
    </div>


    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New Student!?</h2>
          <p>Sign up and Stay connected</p>
        </div>














        <div class="img-text m-in">
          <h2>All ready registered?</h2>
          <p>If you already has an account, just LOG IN</p>
        </div>

        
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      </body>
</html>










<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style11.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>


<body>

<?php
require 's1.php'; 

?>
      <form action="loginstd.php" method="post">
      <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="USN">Enter your USN</label>
            <input type="text" class="form-control" id="usn" name="usn" aria-describedby="usn">
            
        </div>
        <div class="form-group">
            <label for="email">Enter your Email Address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
         
        <button type="submit" class="submit">Sign Up Now</button>
      </div>
    </div>
  </div>



<script type="text/javascript" src="script.js"></script>
</body>
</html>