<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Freight</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="float-panel.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="demo2.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
.carousel{
    background: #000;
    margin-top: 20px;
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
}
.bs-example{
	margin: 20px;
}
 body {font-family:Verdana, sans-serif;}
        p {padding:20px 0;}

        #backtop {
	        position: fixed;
            left:auto;right: 20px;top:auto;bottom: 20px;
	        outline: none;
            overflow:hidden;
            color:#fff;
            text-align:center;
            background-color:rgba(49,79,96,0.84);
            height:40px;
            width:40px;
            line-height:40px;
            font-size:14px;
            border-radius:2px;
            cursor:pointer;
            transition:all 0.3s linear;
            z-index:999999;

            opacity:1;
            display:none;
        }
        #backtop:hover {
            background-color:#27CFC3;
        }
        #backtop.mcOut {
            opacity:0;
        }
</style>
</head>
<body>

<nav role="navigation" class="navbar" style="background-color:#000">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="color:#fff">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle" style="color:#fff">
                <span class="glyphicon glyphicon-menu-hamburger"style="color:#fff"></span>
                <span class="icon-bar" style="color:#fff"></span>
                <span class="icon-bar" style="color:#fff"></span>
                <span class="icon-bar" style="color:#fff"></span>
            </button>
			 <a href="#" class="navbar-brand" style="color:#fff">MovieMania</a>
        </div>
		
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" style="color:#fff">Home</a></li>
                <li><a href="contact.html" style="color:#fff">Contact</a></li>
				<li><a href="about.html" style="color:#fff">AboutUs</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#" style="color:#fff">Category<b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="movies.html" style="background-color:#000;color:#fff">Movies</a></li>
                        <li><a href="series.html" style="background-color:#000;color:#fff">Series</a></li>
						<li><a href="animation.html" style="background-color:#000;color:#fff">Animation</a></li>
                    </ul>
                </li>
            </ul>
            <form role="search" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" placeholder="Search" class="form-control">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
			<li><a href="#"><img src="images/facebook.png" width=50px height=50px/></a><li>
			<li><a href="#"><img src="images/twitter.png" width=50px height=50px/></a><li>
			<li><a href="#"><img src="images/instagram.png" width=50px height=50px/></a><li>
			<li><a href="#"><img src="images/pinterest.png" width=50px height=50px/></a><li>
                <li><a href="#myModal" data-toggle="modal">Login</a></li>
            </ul>
        </div>
    </nav>
					<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
   <div class="container" style="background-color:#fff">
  <h2>Log In</h2>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

  </div>
</div>
<div class="jumbotron">
    <div class="container-fluid">
	<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
              <img src ="images/image-slider-1.jpg" alt="Welcome to Movie Mania"/>
            </div>
            <div class="item">
                <img src ="images/image-slider-2.jpg" />
            </div>
            <div class="item">
                <img src ="images/image-slider-3.jpg" />
            </div>
			<div class="item">
                <img src ="images/image-slider-4.jpg" />
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
	  </div>
