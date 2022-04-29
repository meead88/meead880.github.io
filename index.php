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
      <section class="header1">
         <img class="logo" src="images/logo.png" alt="logo">
         <form action="" class="search-form">
         <input type="search" name="" placeholder="Search Here.." id="search-box">
         <label for="search-box" class="fas fa-search"></label>
         </form>
        <section class="icons">
            <div id="#" class="fas fa-home"></div>
            <div id="#" class="fas fa-shopping-cart"></div>
            <div id="search-btn" class="fas fa-heart"></div>
            <div id="search-btn" class="fas fa-search"></div>
        </section>
</section>
<div class="header2">
    <nav class="navbar">
            <a href="#home">Home</a>
            <a href="about.html">About</a>
            <a href="services.html">Services</a>
            <a href="buy.php">Books</a>
            <a href="contact.html">Contact</a>
            <a href="#review">Review</a>
            <a class="login" href="registor.php">Registor</a>
    </nav>  
</div>
<section class="landing">
                        <h1>Welcome To Our Library</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit, dolorem delectus veniam!</p>
                        <form method="post" action="buy.php"><button class="user">Buy Books</button></form>
                        <form method="post" action="#review"><button class="admin">Reviews</button></form>
</section>          
</header>
<!-- end header -->


<!-- start contact -->
<section class="question">
    <h2>Have Any Questions ?</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit dolor molestias deserunt molestiae voluptates? Ut vel harum at quibusdam illum! Saepe recusandae porro amet voluptates unde, dolore provident ratione nam!</p>
    <form method="post" action="contact.php"><button class="user">Contact Us</button></form>
</section>

<!-- Review -->
<section class="review" id="review">
        <h2 class="headings">User's Reviews</h2>
        <section class="container">
                <section class="rev">
                     <img class="revimg" src="images/a.jpg" alt="pic"/><span>Jack</span>
                         <p>Praesentium nihil illum quos?</p>
                         <div class="icon">
                         <i class="fa fa-star"></i> 
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         </div>
                </section>
                <section class="rev">
                   <img class="revimg" src="images/b.jpg" alt="pic"/><span>Sally</span>
                         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
                         <div class="icon">
                         <i class="fa fa-star"></i> 
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         </div>
                </section>
                <section class="rev">
                         <img class="revimg" src="images/d.jpg" alt="pic"/><span>Emma </span>
                         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium nihil illum quos</p>
                         <div class="icon">
                         <i class="fa fa-star"></i> 
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         <i class="fa fa-star"></i>
                         </div>
                </section>
        </section>
</section>
<!-- start footer -->
<footer>
    <div class="container">
        <section class="row">
            <section class="column">
                <h4>Library</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="buy.php">Books</a></li>
                    <li><a href="primaryindex.php">LogOut</a></li>
                </ul>
            </section>

            <section class="column">
                <h4>Get Help</h4>
                <ul>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </section>

            <section class="column">
                <h4>Contact Info</h4>
                <ul>
                    <li><a href="phoneto:+123-456-7890">+123-456-7890</a></li>
                    <li><a href="mailto:library@gmail.com">library@gmail.com</a></li>
                    <li><adress>Sudan-Khartoum</adress></li>
                </ul>
            </section>

            <section class="column">
                <h4>Follow Us</h4>
            <div class="social">             
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>       
            </section>
        </section>
    </div>
    <p>&copy; Copyright 2022 library . All Right Reserved</p>
</footer>
</article>
</body>
</html>





