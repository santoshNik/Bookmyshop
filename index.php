<!DOCTYPE html>
<html>
<head>
	<title>BookMyShow</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/movie.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	
</head>
<body>

	<section  id="header" class="container-fluid">
		<div class="icon searchbox">
			<form action="signin.php" method="post">
				<img src="images/book-my-show.png" width="250" height="90">
				<input type="text" placeholder="Search for Movies, Events, Plays, Sports and Activities">
				<button type="button" class="btn btn-primary">
					<a href="signin.html" target="_self">Signin</a>	
				</button>
			</form>
			
		</div>

		

		<nav class="navbar navsec container-fluid">
  			
    			<ul class="nav navbar-nav">
      				<li class="active"><a href="#">Movies</a></li>
      				<li><a href="#">Events</a></li>
      				<li><a href="#">Plays</a></li>
      				<li><a href="#">Sports</a></li>
      				<li><a href="#">Activities</a></li>
      				<li><a href="#">Offers</a></li>
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
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>

        		<div class="movie2 cinema">
        			<img src="images/kesari.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>

        		<div class="movie3 cinema">
        			<img src="images/junglee.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>

        		<div class="movie4 cinema">
        			<img src="images/kalank.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>
        	</div>
        	
        </div>

        <div id="city-content2" class="tabcontent">
        	<div class="MUMBAI mbackimg">
        		<div class="movie1 cinema">
        			<img src="images/avenger.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>

        		<div class="movie2 cinema">
        			<img src="images/lallorona.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>

        		<div class="movie3 cinema">
        			<img src="images/junglee.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>

        		<div class="movie4 cinema">
        			<img src="images/kalank.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>
        	</div>
        </div>

        <div id="city-content3" class="tabcontent">
        	<div class="NASHIK mbackimg">
        		<div class="movie1 cinema">
        			<img src="images/badla.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>

        		<div class="movie2 cinema">
        			<img src="images/romeo.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>

        		<div class="movie3 cinema">
        			<img src="images/junglee.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>

        		<div class="movie4 cinema">
        			<img src="images/kalank.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>
        	</div>
        </div>

        <div id="city-content4" class="tabcontent">
        	<div class="NAGPUR mbackimg">
        		<div class="movie1 cinema">
        			<img src="images/shazam.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>

        		<div class="movie2 cinema">
        			<img src="images/kesari.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>

        		<div class="movie3 cinema">
        			<img src="images/junglee.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>

        		<div class="movie4 cinema">
        			<img src="images/kalank.jpg" alt="movieposter">
        			<button class="btn-default" onclick="popup()"><a href="#">BOOK NOW</a></button>
        		</div>
        	</div>
        </div>


		
	</section>


  <script src="js/signinpopup.js"></script>
  <script src="js/citychange.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    

</body>
</html>