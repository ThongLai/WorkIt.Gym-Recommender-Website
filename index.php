<!DOCTYPE html>
<html>
<head>
	<title>WorkIT - AI Fitness Recommender</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Define Python File Path --> 
	<?php 
		$FLASK_SERVER_ADDRESS = "http://127.0.0.1:5000/"; 
	?> 

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

  <!-- Start Home -->
  <section class="home wow flash" id="home">
  	 <div class="container">
  	 	  <h1 class="wow slideInLeft" data-wow-delay="1s">It's <span>gym</span> time.</h1>
  	 	  <h1 class="wow slideInRight" data-wow-delay="1s">Enhance fitness with <span> AI</span></h1>
  	 </div>
  	  <!-- go down -->
  	      <a href="#about" class="go-down">
  	      	  <i class="fa fa-angle-down" aria-hidden="true"></i>
  	      </a>
  	  <!-- go down -->

  </section>
  <!-- End Home -->


 <!-- Start About -->
  <section class="about" id="about">
  	  <div class="container">
  	  	  <div class="content">
  	  	  	   <div class="box wow bounceInUp">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/about1.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Personalise with AI</h4>
                       	   <p>Unlock the power of personalized fitness with our innovative AI-driven solutions. Experience a new level of efficiency and effectiveness as our AI adapts to your evolving needs, guiding you towards peak performance and optimal health. Embrace the future of fitness and embark on a journey towards your best self with our personalized AI solutions.</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   	<div class="box wow bounceInUp" data-wow-delay="0.2s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/about2.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Set Your Routine</h4>
                       	   <p>Take control of your workout journey by selecting from a diverse range of exercises, intensity levels, and duration options. Whether you're a beginner looking to establish a consistent routine or a seasoned athlete seeking variety, our intuitive interface empowers you to design workouts that align perfectly with your goals and schedule.</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="images/about3.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Track Your Results</h4>
                       	   <p>Keep a close eye on your fitness journey as our platform provides detailed insights into your performance, nutrition, and overall well-being. From tracking your workouts and calorie intake to monitoring your weight fluctuations and body measurements, our user-friendly interface makes it easy to stay accountable and motivated.</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  </div>
  	  </div>
  </section>
 <!-- End About -->


 <!-- AI Recommender -->
 <section class="service" id="service">
 	<div class="container">
 		 <div class="content">
		  <div class="text box wow slideInLeft">
                  <h2>AI Recommender</h2>
					<form method="POST">
						<div class="ai-form">
							<label for="workout-type">Workout Type:</label>
							<select name="workout-type" id="workout-type" required>
								<option value="">-- Select an option --</option>
								<option value="Strength">Strength</option>
								<option value="Plyometrics">Plyometrics</option>
								<option value="Cardio">Cardio</option>
								<option value="Stretching">Stretching</option>
								<option value="Powerlifitng">Powerlifting</option>
								<option value="Strongman">Strongman</option>
								<option value="Olympic Weightlifitng">Olympic Weightlifitng</option>
							</select>

							<label for="body-part">Body Part:</label>
							<select name="body-part" id="body-part" required>
								<option value="">-- Select an option --</option>
								<option value="Abdominals">Abdominals</option>
								<option value="Abductors">Abductors</option>
								<option value="Biceps">Biceps</option>
								<option value="Lats">Lats</option>
								<option value="Chest">Chest</option>
								<option value="Forearms">Forearms</option>
								<option value="Lats">Lats</option>
								<option value="Lower-back">Lower-Back</option>
								<option value="Middle-back">Middle-Back</option>
								<option value="Traps">Traps</option>
								<option value="Neck">Necks</option>
								<option value="Shoulder">Shoulder</option>
								<option value="Triceps">Triceps</option>
							</select>

							<label for="equipment">Equipment:</label>
							<select name="equipment" id="equipment" required>
								<option value="">-- Select an option --</option>
								<option value="Bands">Bands</option>
								<option value="Barbell">Barbell</option>
								<option value="Kettlebells">Kettlebells</option>
								<option value="Dumbbells">Dumbbells</option>
								<option value="Other">Other</option>
								<option value="Cable">Cable</option>
								<option value="Machine">Machine</option>
								<option value="Body Only">Body Only</option>
								<option value="Medicine Ball">Medicine Ball</option>
								<option value="Exercises">Exercise</option>
								<option value="Foam Roll">Foam Roll</option>
								<option value="E-Z Curl Bar">E-Z Curl Bar</option>
							</select>

							<label for="level">Level:</label>
							<select name="level" id="level" required>
								<option value="">-- Select an option --</option>
								<option value="Beginner">Beginner</option>
								<option value="Intermediate">Intermediate</option>
								<option value="Expert">Expert</option>
							</select>
						</div>
						<input type="submit" name="recommend" class="btn" value="Recommend">
						<!-- <input type="reset" value="Reset"> -->
					</form>
					
					<?php
					if ($_SERVER['REQUEST_METHOD'] === 'POST') {
						if(isset($_POST['recommend'])) {
							echo '<div style="text-align: center; background-color: #000000; color: white; padding: 20px;">';
							echo '<h2 style="margin-bottom: 10px;">Input Features:</h2>';
							echo '<strong>Workout Type:</strong> ' . $_POST['workout-type'] . '<br>';
							echo '<strong>Body Part:</strong> ' . $_POST['body-part'] . '<br>';
							echo '<strong>Equipment:</strong> ' . $_POST['equipment'] . '<br>';
							echo '<strong>Level:</strong> ' . $_POST['level'];
							echo '</div>';
							
							
							
							
							$url = $FLASK_SERVER_ADDRESS .
							"?workout-type=".urlencode($_POST['workout-type']).
							"&body-part=".urlencode($_POST['body-part']).
							"&equipment=".urlencode($_POST['equipment']).
							"&level=".urlencode($_POST['level']);
							
							// echo $url . "<br>";

							$response = @file_get_contents($url);

							if ($response === false) {
								// Error occurred
								echo "<style>
								.error {
									color: yellow;
									font-size: 24px;
									text-align: center;
									border: 2px solid black;
									padding: 10px;
								}
							</style>";
							
					  		echo "<div class='error'>No exercises are similar with your references</div>";
							} else {
								// Content was fetched successfully
								// Process the response

								// Parse JSON data
								$data = json_decode($response, true);
								echo '<h2 style="text-align: center;">Results</h2><br>';

								// Display the data as a table with centered column values
								echo '<style>
								table {
								width: 100%;
								border-collapse: collapse;
								}

								th, td {
								padding: 8px;
								text-align: center; /* Center align column values */
								border-bottom: 1px solid #ddd;
								}

								thead th {
								background-color: #f2f2f2;
								font-weight: bold;
								}

								tbody tr:nth-child(even) {
								background-color: #f9f9f9;
								}

								tbody tr:hover {
								background-color: #e9e9e9;
								}
								</style>';

								echo '<table>';
								echo '<thead>';
								echo '<tr>';
								echo '<th>ID</th>';
								echo '<th>Title</th>';
								echo '<th>Description</th>';
								echo '<th>Type</th>';
								echo '<th>Body Part</th>';
								echo '<th>Equipment</th>';
								echo '<th>Level</th>';
								echo '<th>Rating</th>';
								echo '</tr>';
								echo '</thead>';
								echo '<tbody>';

								foreach ($data as $row) {
									echo '<tr>';
									echo '<td>' . $row['ID'] . '</td>';
									echo '<td><a href="video.php">' . $row['Title'] . '</a></td>';
									echo '<td>' . $row['Desc'] . '</td>';
									echo '<td>' . $row['Type'] . '</td>';
									echo '<td>' . $row['BodyPart'] . '</td>';
									echo '<td>' . $row['Equipment'] . '</td>';
									echo '<td>' . $row['Level'] . '</td>';
									echo '<td>' . number_format($row['Rating'], 2) . '</td>'; // Round rating to 2 decimal places
									echo '</tr>';
								}

								echo '</tbody>';
								echo '</table>';
							}
						}
					}
					?>
 		 	  </div>
 		 	  
 		 </div>
 	</div>
 </section>
 <!-- End Service -->

<!-- Start Classes -->
<section class="classes" id="classes">
	<div class="container">
		 <div class="content">
		 	  <div class="box img wow slideInLeft">
		 	  	 <img src="images/class2.png" alt="classes" />
		 	  </div>
		 	  <div class="box text wow slideInRight">
		 	  	 <h2>Our Workouts</h2>
		 	  	 <p>Whether you're a beginner looking to kickstart your fitness journey or a seasoned enthusiast aiming to diversify your routine, we've got you covered. Explore our comprehensive collection featuring professionally curated workouts targeting various muscle groups, fitness levels, and training styles.</p>
		 	  	<div class="class-items">
		 	  	 <div class="item wow bounceInUp">
                     <div class="item-img">
                     	 <img src="images/class1.jpg" alt="classes" />
                     	 
                     </div>
                     <div class="item-text">
                     	  <h4>Our Workouts</h4>
                     	  <p>Explore a range of energizing workout videos tailored to your fitness journey. Whether you're aiming for strength, flexibility, or cardio.</p>
                     	  <a href="">Create</a>
                     </div>
		 	  	 </div>
		 	  	 <div class="item wow bounceInUp">
                     <div class="item-text">
                     	  <h4>Create your own workouts</h4>
                     	  <p>See all our videos to create your own workout plans</p>
                     	  <a href="">Create</a>
                     </div>
                     <div class="item-img">
                     	 <img src="images/class1.jpg" alt="classes" />
                     	 
                     </div>
		 	  	 </div>
		 	  	</div>
		 	  </div>
		 </div>
	</div>
</section>
<!-- End Classes -->

<!-- Start Today -->
 <section class="start-today">
 	<div class="container">
 		 <div class="content">
 		 	  <div class="box text wow slideInLeft">
 		 	  	 <h2>Start Your Training Today</h2>
 		 	  	 <p>Start your training with us and unlock a world of personalized workouts, expert guidance, and transformative results.</p>
 		 	  	 <a href="" class="btn">Start Now</a>
 		 	  </div>
 		 	  <div class="box img wow slideInRight">
 		 	  	 <img src="images/gallery4.jpg" alt="start today" />
 		 	  </div>

 		 </div>
 	</div>
 </section>
<!-- End Start Today -->

<!-- Start Schedule -->
  <section class="schedule" id="schedule">
  	 <div class="container">
  	 	  <div class="content">
  	 	  	   <div class="box text wow slideInLeft">
  	 	  	   	   <h2>Create Your Routine</h2>
  	 	  	   	   <p>
					Design a tailored workout plan that fits your goals, schedule, and preferences perfectly. From cardio to strength training, customize every aspect of your routine to achieve maximum results. Start building your path to a healthier, fitter you today.
  	 	  	   	   </p>
  	 	  	   	   <img src="images/schedule1.png" alt="schedule" />
  	 	  	   </div>
  	 	  	   <div class="box timing wow slideInRight">
                   <table class="table">
                   	 <tbody>
                   	 	<tr>
                   	 		<td class="day">Monday</td>
                   	 		<td><strong>7:00 AM</strong></td>
                   	 		<td>Cardio <br/> 7:00 to 9:00 AM</td>
                   	 		<td>Home</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Tuesday</td>
                   	 		<td><strong>7:00 AM</strong></td>
                   	 		<td>Arms <br/> 7:00 to 9:00 AM</td>
                   	 		<td>Home</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Wednesday</td>
                   	 		<td><strong>7:00 AM</strong></td>
                   	 		<td>Legs <br/> 7:00 to 9:00 AM</td>
                   	 		<td>Home</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Thursday</td>
                   	 		<td><strong>7:00 AM</strong></td>
                   	 		<td>Chest <br/> 7:00 to 9:00 AM</td>
                   	 		<td>Home</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Friday</td>
                   	 		<td><strong>7:00 AM</strong></td>
                   	 		<td>Back <br/> 7:00 to 9:00 AM</td>
                   	 		<td>Home</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Saturday</td>
                   	 		<td><strong>10:00 AM</strong></td>
                   	 		<td>Stretching <br/> 10:00 to 12:00 AM</td>
                   	 		<td>Gym</td>
                   	 	</tr>
                   	 </tbody>
                   </table>
  	 	  	   </div>
  	 	  </div>
  	 </div>
  </section>
<!-- End Schedule -->

<!-- Start Gallery -->
  <section class="gallery" id="gallery">
  	 <h2>Workout Gallery</h2>
  	<div class="content">
  		 <div class="box wow slideInLeft">
  		 	 <img src="images/gallery1.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInRight">
  		 	 <img src="images/gallery2.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInLeft">
  		 	 <img src="images/gallery3.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInRight">
  		 	 <img src="images/gallery4.jpg" alt="gallery" />
  		 </div>
  	</div>
  </section>
<!-- End Gallery -->

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