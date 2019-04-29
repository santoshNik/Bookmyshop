<?php 

session_start();
$un=$_SESSION['un'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>BookMyShow</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/movie.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<script src="js/citychange.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

	<section  id="header" class="container-fluid">
		<div class="icon searchbox">
			<form action="signin.php" method="post">
				<img src="images/book-my-show.png" width="250" height="90">
				<input type="text" placeholder="Search for Movies, Events, Plays, Sports and Activities">
				
				<button type="button" class="btn btn-success">
                    <a href="index.php" target="_self">
                    <span style="color: blue; font-style: italic; font-family: Lucida Handwriting"> Welcome 
                    <?php echo $un; ?></span>&emsp;Signout</a>	
				</button>
			</form>
		</div>

		<nav class="navbar navsec container-fluid">
  			
    			<ul class="nav navbar-nav">
      				<li class="active"><a href="#">Movies</a></li>
      				<li><a href="#">Events</a></li>
      				<li><a href="#">Sports</a></li>
      				<li><a href="#">International</a></li>
      				<li><a href="#">Activities</a></li>
      				<li><a href="#">Offers</a></li>
      				<li><a href="#">Gift Cards</a></li>
      				<li><a href="#citylist">CITY</a></li>
    			</ul>
  			
		</nav>
	</section>


	<!--===========================Image slider code start===============================-->

	<section class="img_slider">
  		 
  		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    	
    		<ol class="carousel-indicators">
    		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    		  <li data-target="#myCarousel" data-slide-to="1"></li>
    		  <li data-target="#myCarousel" data-slide-to="2"></li>
    		</ol>

    
    		<div class="carousel-inner">
	      		<div class="item active">
	        		<img src="images/img1.jpg" alt="img_slide1" style="width:100%;">
	      		</div>

	      		<div class="item">
	        		<img src="images/img2.jpg" alt="img_slide2" style="width:100%;">
	      		</div>
	    
	      		<div class="item">
	        		<img src="images/img3.jpg" alt="img_slide3" style="width:100%;">
	      		</div>
    		</div>

	    	<!-- Left and right controls -->
	    	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      		<span class="glyphicon glyphicon-chevron-left"></span>
	      		<span class="sr-only">Previous</span>
	    	</a>
	    	<a class="right carousel-control" href="#myCarousel" data-slide="next">
	      		<span class="glyphicon glyphicon-chevron-right"></span>
	      		<span class="sr-only">Next</span>
	    	</a>
  		</div>
	</section>


	<!--===========================Image slider code End===============================-->


<section id="citylist">
		
			<div class="tabs">
      			<button class="tablinks btn-primary" onclick="openDiv(event, 'city-content1')">PUNE</button>
               	<button class="tablinks btn-primary" onclick="openDiv(event, 'city-content2')">MUMBAI</button>
               	<button class="tablinks btn-primary" onclick="openDiv(event, 'city-content3')">NASHIK</button>
               	<button class="tablinks btn-primary" onclick="openDiv(event, 'city-content4')">NAGPUR</button>
      		</div>
	            			
      
        <div id="city-content1" class="tabcontent">
        	<div class="PUNE mbackimg">
        		<div class="movie1 cinema">
        			<img src="images/shazam.jpg" alt="movieposter">
        			<a href="pune_shows.php"> <form method="post" action="pune_shows.php"><button class="btn-default" name="shazam" value="shazam">BOOK NOW</button></form></a>
        		</div>

        		<div class="movie2 cinema">
        			<img src="images/kesari.jpg" alt="movieposter">
        			<a href="pune_shows.php"> <form method="post" action="pune_shows.php"><button class="btn-default" name="kesari" value="kesari">BOOK NOW</button></form></a>
        		</div>

        		<div class="movie3 cinema">
        			<img src="images/junglee.jpg" alt="movieposter">
        			<a href="pune_shows.php"> <form method="post" action="pune_shows.php"><button class="btn-default" name="junglee" value="junglee">BOOK NOW</button></form></a>
        		</div>

        		<div class="movie4 cinema">
        			<img src="images/kalank.jpg" alt="movieposter">
        			<a href="pune_shows.php"> <form method="post" action="pune_shows.php"><button class="btn-default" name="kalank" value="kalank">BOOK NOW</button></form></a>
        		</div>
        	</div>
        	
        </div>
    
    
        <div id="city-content2" class="tabcontent">
        	<div class="MUMBAI mbackimg">
        		<div class="movie1 cinema">
        			<img src="images/avenger.jpg" alt="movieposter">
        			<a href="mumbai_shows.php"><form method="post" action="mumbai_shows.php"><button class="btn-default" name="avenger" value="avenger">BOOK NOW</button></form></a>
        		</div>

        		<div class="movie2 cinema">
        			<img src="images/lallorona.jpg" alt="movieposter">
        			<a href="mumbai_shows.php"><form method="post" action="mumbai_shows.php"><button class="btn-default" name="lallorona" value="lallorona">BOOK NOW</button></form></a>
        		</div>

        		<div class="movie3 cinema">
        			<img src="images/junglee.jpg" alt="movieposter">
        			<a href="mumbai_shows.php"><form method="post" action="mumbai_shows.php"><button class="btn-default" name="junglee" value="junglee">BOOK NOW</button></form></a>
        		</div>

        		<div class="movie4 cinema">
        			<img src="images/kalank.jpg" alt="movieposter">
        			<a href="mumbai_shows.php"><form method="post" action="mumbai_shows.php"><button class="btn-default" name="kalank" value="kalank">BOOK NOW</button></form></a>
        		</div>
        	</div>
        </div>

        <div id="city-content3" class="tabcontent">
        	<div class="NASHIK mbackimg">
        		<div class="movie1 cinema">
        			<img src="images/badla.jpg" alt="movieposter">
        			<a href="nashik_shows.php"><form method="post" action="nashik_shows.php"><button class="btn-default" name="badla" value="badla">BOOK NOW</button></form></a>
        		</div>

        		<div class="movie2 cinema">
        			<img src="images/romeo.jpg" alt="movieposter">
        			<a href="nashik_shows.php"><form method="post" action="nashik_shows.php"><button class="btn-default" name="romeo" value="romeo">BOOK NOW</button></form></a>
        		</div>

        		<div class="movie3 cinema">
        			<img src="images/junglee.jpg" alt="movieposter">
        			<a href="nashik_shows.php"><form method="post" action="nashik_shows.php"><button class="btn-default" name="junglee" value="junglee">BOOK NOW</button></form></a>
        		</div>

        		<div class="movie4 cinema">
        			<img src="images/kalank.jpg" alt="movieposter">
        			<a href="nashik_shows.php"><form method="post" action="nashik_shows.php"><button class="btn-default" name="kalank" value="kalank">BOOK NOW</button></form></a>
        		</div>
        	</div>
        </div>
           <div id="city-content4" class="tabcontent">
        	<div class="NAGPUR mbackimg">
        		<div class="movie1 cinema">
        			<img src="images/shazam.jpg" alt="movieposter">
        			<a href="nagpur_shows.php"><form method="post" action="nagpur_shows.php"><button class="btn-default"  name="shazam" value="shazam">BOOK NOW</button></form></a>
        		</div>

        		<div class="movie2 cinema">
        			<img src="images/kesari.jpg" alt="movieposter">
        			<a href="nagpur_shows.php"><form method="post" action="nagpur_shows.php"><button class="btn-default" name="kesari" value="kesari">BOOK NOW</button></a>
        		</div>

        		<div class="movie3 cinema">
        			<img src="images/junglee.jpg" alt="movieposter">
        			<a href="nagpur_shows.php"><form method="post" action="nagpur_shows.php"><button class="btn-default" name="junglee" value="junglee">BOOK NOW</button></a>
        		</div>

        		<div class="movie4 cinema">
        			<img src="images/kalank.jpg" alt="movieposter">
        			<a href="nagpur_shows.php"><form method="post" action="nagpur_shows.php"><button class="btn-default" name="kalank" value="kalank">BOOK NOW</button></a>
        		</div>
        	</div>
        </div>

		
	</section>





  

</body>
</html>