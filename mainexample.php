<?php
 include "headerimage.php";
 include("dbblog.php");//database config file
 $query="SELECT * from blog where id_blog='2'";

$run_query = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($run_query);
//pageview count query
$page=$row['title'];
 ?>

<br>
     <section class="py-5">
      <div class="container py-4">
	  	 <div class="menus">
		 <h3>Author</h3>
    <a href="https://getutemesgen247.com/category/%e1%8b%9c%e1%8a%93/">Getu Temesgen</a>
    <a href="#"><?php echo $row['author']; ?></a>
    <a href="#">Temesgen</a>
    <a href="#">Bezawit E.</a>
  </div>
        <div class="row">
          <div class="col-lg-9">
		  <h3><?php echo $row['title']; ?></h3>
            <p class="lead drop-caps mb-5"><?php echo $row['par1']; ?></p>
            <h2><?php echo $row['tag']; ?></h2>
            <p class="mb-4">
			<?php echo $row['par2']; ?></p>
            <div class="row">
              <div class="col-lg-6 mb-4">
			  <a class="d-block" href="img/ethcoff.png" data-lightbox="post-images" title="Image one">
			  <img class="img-fluid img-thumbnail" src="<?php echo $row['img']; ?>" alt=""></a></div>
              <div class="col-lg-6 mb-4"><a class="d-block" href="img/post-demo-2.jpg" data-lightbox="post-images" title="Image two"><img class="img-fluid img-thumbnail" src="img/ererer.gif" alt=""></a></div>
            </div>
            <p class="text-muted mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <h3>Heading level three</h3>
            <ul class="list-bullets mb-5">
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
              <li>Inventore magni sed error dignissimos repudiandae.</li>
              <li>Aperiam cum, nisi sed aliquam soluta amet molestiae.</li>
              <li>Consequatur sequi dolore, doloribus officia Nihil fugit.</li>
            </ul>
            <blockquote class="blockquote bg-light p-4 p-lg-5 text-center mb-5">
              <p class="h4 mb-4">Design is the fundamental soul of a human-made creation that ends up expressing itself in successive outer layers of the product or service.</p>
              <footer class="blockquote-footer">
                <cite title="Source Title">Steve Jobs</cite>
              </footer>
            </blockquote>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
            <!-- Post tags-->
            <div class="d-flex align-items-center flex-column flex-sm-row mb-4 p-4 bg-light">
              <h3 class="h4 mb-3 mb-sm-0">Tags</h3>
              <ul class="list-inline mb-0 ml-0 ml-sm-3">
                <li class="list-inline-item my-1 mr-2"><a class="sidebar-tag-link" href="#">Ethiopia</a></li>
                <li class="list-inline-item my-1 mr-2"><a class="sidebar-tag-link" href="#">Health</a></li>
                <li class="list-inline-item my-1 mr-2"><a class="sidebar-tag-link" href="#">Business</a></li>
                <li class="list-inline-item my-1 mr-2"><a class="sidebar-tag-link" href="#">Fashion</a></li>
              </ul>
            </div>
            <!-- Post share-->
            <div class="d-flex align-items-center flex-column flex-sm-row mb-5 p-4 bg-light">
              <h3 class="h4 mb-3 mb-sm-0">Share this post</h3>
              <ul class="list-inline mb-0 ml-0 ml-sm-3">
                <li class="list-inline-item mr-1 my-1"><a class="social-link-share facebook" href="#"><i class="fab fa-facebook-f mr-2"></i>Share</a></li>
                <li class="list-inline-item mr-1 my-1"><a class="social-link-share twitter" href="#"><i class="fab fa-twitter mr-2"></i>Tweet</a></li>
                <li class="list-inline-item mr-1 my-1"><a class="social-link-share instagram" href="#"><i class="fab fa-instagram mr-2"></i>Share</a></li>
              </ul>
            </div>
			</section>
			<?php
			
			include "footer.php";
?>