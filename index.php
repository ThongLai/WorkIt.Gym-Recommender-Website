<?php
// Include configuration and helper files
require_once 'includes/config.php';
require_once 'includes/recommender.php';

// Process recommender form if submitted
$recommenderResult = processRecommenderForm();

// Include header
include 'includes/header.php';
?>

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
						<h4>Personalize with AI</h4>
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
							<option value="Powerlifting">Powerlifting</option>
							<option value="Strongman">Strongman</option>
							<option value="Olympic Weightlifting">Olympic Weightlifting</option>
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
							<option value="Lower-back">Lower Back</option>
							<option value="Middle-back">Middle Back</option>
							<option value="Traps">Traps</option>
							<option value="Neck">Neck</option>
							<option value="Shoulder">Shoulders</option>
							<option value="Triceps">Triceps</option>
						</select>

						<label for="equipment">Equipment:</label>
						<select name="equipment" id="equipment" required>
							<option value="">-- Select an option --</option>
							<option value="Bands">Bands</option>
							<option value="Barbell">Barbell</option>
							<option value="Kettlebells">Kettlebells</option>
							<option value="Dumbbell">Dumbbell</option>
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
				</form>
				
				<?php
				// Display results if form was processed
				if (isset($recommenderResult['processed']) && $recommenderResult['processed'] === true) {
					echo '<div class="results-container">';
					
					// Show input summary
					renderInputSummary($recommenderResult['input']);
					
					// Show error or results
					if (!$recommenderResult['success']) {
						renderErrorMessage($recommenderResult['error']);
					} else {
						renderResultsTable($recommenderResult['data']);
					}
					
					echo '</div>';
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

<!-- Start Contact/Login -->
<section class="contact" id="login">
	<div class="container">
		<div class="content">
			<div class="box form wow slideInLeft">
				<h3 class="login-heading">Login</h3>
				<form>
					<input type="text" placeholder="Email or Username" required>
					<input type="password" placeholder="Password" required>
					<div class="form-footer">
						<label class="remember-me">
							<input type="checkbox"> Remember me
						</label>
						<a href="#" class="forgot-password">Forgot Password?</a>
					</div>
					<button type="submit" class="btn login-btn">Login</button>
				</form>
				<div class="signup-link">
					Don't have an account? <a href="sign_up/register.php">Sign up now</a>
				</div>
			</div>
			<div class="box text wow slideInRight">
				<h2>Get Connected with Gym</h2>
				<p class="title-p">Create an account to further enhance your workout and gain more personalized experience.</p>
				<div class="info">
					<ul>
						<li><i class="fas fa-map-marker-alt"></i> Sparck Jones Building, University of Huddersfield, HD1 3BZ</li>
						<li><i class="fas fa-phone"></i> 0123456789</li>
						<li><i class="fas fa-envelope"></i> workit@gym.com</li>
					</ul>
				</div>
				<div class="social-links">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Contact/Login -->

<?php
// Include footer
include 'includes/footer.php';
?>