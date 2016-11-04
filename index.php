  <!DOCTYPE html>
  <html>
    <head>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <style type="text/css">
      	.container{
      		font-family: Comic Sans MS;
      	}
      	 body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
      		background-image: url(images/back.jpg);
  }

  main {
    flex: 1 0 auto;
  }

      </style>
      <title>Mess Online</title>
    </head>
    <body>
	<div class="container white">
	<nav class="blue">
    <div class="nav-wrapper">
      <img src="logo.jpg" class="brand-logo" height="64"><a href="#" style="clear: both;margin-left: 70px;font-size: 20px;"> Azad Mess Online Review Portal</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="sass.html"><i class="material-icons left">home</i>Home</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Login/Register<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
    <ul id="dropdown1" class="dropdown-content" >
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
  </nav>
   <div class="carousel carousel-slider" style="height: 350px;background-color: blue;">
    <a class="carousel-item" href="#one!"><img src="images/1.jpg" height="100%"></a>
    <a class="carousel-item" href="#one!"><img src="images/2.jpg" height="100%"></a>
    <a class="carousel-item" href="#one!"><img src="images/3.jpg" height="100%"></a>
    <a class="carousel-item" href="#one!"><img src="images/4.jpg" height="100%"></a>
  </div>
  <div class="row">
  	<div class="col l12">fxhdhd</div>
  </div>
  <footer class="page-footer blue" style="margin-top: 0;">
          <div class="container" >
            <div class="row">
              <div class="col l7 s12">
              <div style="height:200px;width:400px;max-width:100%;list-style:none; transition: none;overflow:hidden;"><div id="google-maps-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Azad+hall+of+residence&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-code" rel="nofollow" href="http://www.interserver-coupons.com" id="authorize-map-data">http://www.interserver-coupons.com</a><style>#google-maps-display img{max-width:none!important;background:none!important;font-size: inherit;}</style></div><script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=74b4573b-da19-6be0-b63f-88c74cbacd14&c=google-map-code&u=1478225292" defer="defer" async="async"></script>
              </div>
              <div class="col l5 s12">
                <h5 class="white-text">Azad Mess Online Review Portal</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>

              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            &copy 2016 Copyright Azad Hall of Residence.
            <a class="grey-text text-lighten-4 right" href="#!">Visit Us</a>
            </div>
          </div>
        </footer>
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
	  $(".dropdown-button").dropdown();
	  $('.carousel.carousel-slider').carousel({full_width: true});
	autoplay()   
	function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
	}
    });
	</script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>