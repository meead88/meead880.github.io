<!DOCTYPE html>
<html>
    <head>
        <title>Library website</title>
        <link rel="stylesheet" href="css/regstyle.css">
        <link rel="stylesheet" href="css/all.min.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com" />
    </head>
	<body>
<article>
        <!-- start header -->

<header class="header">
      <section class="nav">
         <img class="logo" src="images/logo.png" alt="logo">
      </section>

      <section class="register">
<form action="buy.php" method="post">
<div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat"><b class="repeat">Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
       <a href="buy.php"><button type="submit" class="signupbtn" href="buy.php">Sign Up</button></a>
    </div>
</div>
</form>
<section>
</header>

</body>

</html>