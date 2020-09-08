<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ethiopia4Ethiopia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy&amp;display=swap">
    <!-- Lightbox-->
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
		<!--slide css-->
	<link rel="stylesheet" href="css/slide.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
     	<title>slider in Javascript</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  
  </head>
  <body>
    <!-- navbar-->
    <header class="header">                   
      <nav class="navbar navbar-expand-lg navbar-light py-4 index-forward bg-white">
        <div class="container d-flex justify-content-center justify-content-lg-between align-items-center">
          <ul class="list-inline small mb-0 text-dark d-none d-lg-block">
            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-linkedin"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-youtube"></i></a></li>
          </ul><a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="..." width="150"></a>
		  <a class="reset-anchor text-small mb-0 h6 d-none d-lg-block" href="mailto:ethiopia4ethiopia@gmail.com">
		  <i class="far fa-envelope mr-2 text-primary"></i>ethiopia4ethiopia@gmail.com</a>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-light border-top border-bottom border-light">
        <div class="container">
          <ul class="list-inline small mb-0 text-dark d-block d-lg-none">
            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-linkedin"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-youtube"></i></a></li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
		  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
		  aria-label="Toggle navigation"><span></span><span></span><span></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <!-- Navbar link--><a class="nav-link active" href="home.php">Home</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="listingVariants"
			  href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Health</a>
                <div class="dropdown-menu mt-2" aria-labelledby="listingVariants"><a class="dropdown-item" href="#">Post1</a>
				<a class="dropdown-item" href="#">Post2</a></div>
              </li>
              <li class="nav-item">
                <!-- Navbar link-->
				<a class="nav-link" href="#">Business</a>
              </li>
			  <li class="nav-item">
                <!-- Navbar link-->
				<a class="nav-link" href="#">Fasthion</a>
              </li>
			  
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inspiration</a>
                <div class="dropdown-menu mt-2" aria-labelledby="pages">
				<a class="dropdown-item" href="#">post1</a><a class="dropdown-item" href="#">post2</a><a class="dropdown-item" href="#">Post3 </a></div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>


  
  <section class="home">
     <div class="slider">
        <div class="slide active" style="background-image: url('imag/authorB.jpg')">
            <div class="container">
                <div class="caption">
                    <h1>1. Winter Collection 2020</h1>
                    <p>Lorem ipsum dummy text goes here.</p>
                    <a href="">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url('images/slide-2.jpg')">
            <div class="container">
                <div class="caption">
                    <h1>2. Winter Collection 2020</h1>
                    <p>Lorem ipsum dummy text goes here.</p>
                    <a href="">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url('images/slide-3.jpg')">
            <div class="container">
                <div class="caption">
                    <h1>3. Winter Collection 2020</h1>
                    <p>Lorem ipsum dummy text goes here.</p>
                    <a href="">Shop Now</a>
                </div>
            </div>
        </div>
     </div>
   
    <!-- controls  -->
    <div class="controls">
        <div class="prev"><</div>
        <div class="next">></div>
    </div>

    <!-- indicators -->
    <div class="indicator">
    </div>

  </section>

 
 <script src="script.js"></script>

</body>
</html>



