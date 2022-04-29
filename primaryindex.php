<!DOCTYPE html>
<html>
    <head>
        <title>Library website</title>
        <link rel="stylesheet" href="css/style.css">
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

<!-- landing -->
<section class="landing">
    <h1>Welcome To Our Library</h1>
</section>



<!-- start login -->
<section class="loginform">
<form action="buy.php" method="post">
    <h3>Sign In</h3>
            <label for="email">Email</label>
            <input type="email" placeholder="Enter Your Email" name="email" class="box" required>
           
            <label for="password">Password</label>
            <input type="password" placeholder="Enter Password" name="password" class="box"  required>
           
            <div class="checkbox">
            <input type="checkbox" name="" id="remember-me"/>
            <span class="remember-me">Remeber Me</span>
            </div>
        <input type="submit" value="Sign In" class="btn"/>
        <P>Forget Password ?<a href="#">Click Here.</a></p>
        <P>Dont Have An Account ?<a href="register.php">Create Account</a></p>
    </form>
</section>
</header>