<!DOCTYPE html>
<html>
<head>
	<title>Workit - Your Reccommendation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
    .wow:first-child {
      visibility: hidden;
    }
  </style>
  
</head>
<body>
 
 <!-- Start Header  -->
 <header>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="">WORK<span>.IT</span></a>
 	 	</div>
 	 	<a href="javascript:void(0)" class="ham-burger">
 	       <span></span>	
 	       <span></span>
 	 	</a>
 	 	<div class="nav">
 	 		<ul>
 	 			<li><a href="#home">Home</a></li>
 	 			<li><a href="#about">About</a></li>
 	 			<li><a href="#service">AI Recommender</a></li>
 	 			<li><a href="#classes">Classes</a></li>
 	 			<li><a href="#schedule">Schedule</a></li>
 	 			<li><a href="#login">Login</a></li>
 	 		</ul>
 	 	</div>
 	 </div>
 </header>
 <!-- End Header  -->

<h1>Workit</h1>
<br>
 <iframe width="1366" height="768" src="https://www.youtube.com/embed/ctjVHKWLRQA?si=0r30rmfNSHP6QdKv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


<!-- Start Contact -->
<section class="contact" id="login">
    <div class="container">
        <div class="content">
            <div class="box form wow slideInLeft">
                <h3 class="login-heading">Login</h3>
                <form>
                    <input type="text" placeholder="Email or Phone">
                    <input type="password" placeholder="Password">
                    <button type="submit">Login</button>
                </form>
            </div>
            <div class="box text wow slideInRight">
                <h2>Get Connected with Gym</h2>
                <p class="title-p">Create an account to further enhance your workout and gain more suited experience.</p>
                <div class="info">
                    <ul>
                        <li><span class="fa fa-map-marker"></span>Sparck Jones Building, University of Huddersfield, HD1 3BZ</li>
                        <li><span class="fa fa-phone"></span> 0123456789</li>
                        <li><span class="fa fa-envelope"></span> workit@gym.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact -->




 <!-- jquery -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){

      $(".ham-burger, .nav ul li a").click(function(){
       
        $(".nav").toggleClass("open")

        $(".ham-burger").toggleClass("active");
      })      
      $(".accordian-container").click(function(){
      	$(".accordian-container").children(".body").slideUp();
      	$(".accordian-container").removeClass("active")
      	$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
      	$(this).children(".body").slideDown();
      	$(this).addClass("active")
      	$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
      })

       $(".nav ul li a, .go-down").click(function(event){
         if(this.hash !== ""){

              event.preventDefault();

              var hash=this.hash; 

              $('html,body').animate({
                scrollTop:$(hash).offset().top
              },800 , function(){
                 window.location.hash=hash;
              });

              // add active class in navigation
              $(".nav ul li a").removeClass("active")
              $(this).addClass("active")
         }
      })
})

</script>
<script src="js/wow.min.js"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
      }
    );
    wow.init();

	

	  

  </script>
</body>
</html>