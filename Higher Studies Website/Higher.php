<!DOCTYPE html>
<html>

<head>
	<title>Scholarship Hub "A Higher Studies Planning"</title>
	<link rel="stylesheet" href="Higher.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<body>
	<header>
		<div class="cover animated fadeIn">
			<h1>Scholarship Hub "A Higher Studies Planning"</h1>
		</div>
		<nav>
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#countrylist">Country List</a></li>
				<li><a href="#proflist">Professor List</a></li>
				<li><a href="#scholarship">Top Scholarship</a></li>
				<li><a href="#portal">Student Portal</a></li>
				<li><a href="#info">Study, Research & Teach</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<form id="search-form">
				<input type="text" id="search-input" placeholder="Search...">
				<button type="submit">Search</button>
			</form>
			<div class="user-actions">
				<a href="#">Login</a>
				<span> | </span>
				<a href="#">Logout</a>
			</div>
			<div class="social-media">
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</nav>
	</header>

	<main>
		<div>
			<section id="home">
				<div class="container">
					<h2>Welcome to Scholarship Hub</h2>
					<p style="text-align: justify;">A higher studies website is a platform that provides information
						about various scholarships, study programs, and opportunities for students to pursue their
						higher education goals.Higher studies refer to educational pursuits beyond the secondary level,
						typically at the undergraduate or graduate level. These studies provide individuals with
						specialized knowledge and skills in their chosen fields and open up opportunities for career
						advancement and personal growth. Higher studies encompass a wide range of disciplines, including
						but not limited to arts, sciences, business, engineering, medicine, and humanities. Pursuing
						higher studies allows individuals to delve deeper into their areas of interest, engage in
						research, collaborate with experts, and gain valuable insights that contribute to their
						intellectual development. It is a transformative journey that equips individuals with the
						expertise and qualifications needed to excel in their chosen professions and make meaningful
						contributions to society.</p>
					<a href="#scholarship" class="btn">Explore Scholarships</a>
				</div>
			</section>
		</div>


		<section id="countrylist">
			<h2>Country List</h2>
			<ul>
				<li>
					<img src="usa.jpg" alt="United States">
					<h3>United States</h3>
					<button onclick="alert('')">Universities Details</button>
				</li>
				<li>
					<img src="australia.jpg" alt="Australia">
					<h3>Australia</h3>
					<button onclick="alert('')">Universities Details</button>
				</li>
				<li>
					<img src="germany.png" alt="Germany">
					<h3>Germany</h3>
					<button onclick="alert('')">Universities Details</button>
				</li>
				<li>
					<img src="canada.jpg" alt="Canada">
					<h3>Canada</h3>
					<button onclick="alert('')">Universities Details</button>
				</li>
				<li>
					<img src="france.jpg" alt="France">
					<h3>France</h3>
					<button onclick="alert('')">Universities Details</button>
				</li>
				<!-- Add more list items for other countries -->
			</ul>
		</section>

		<section id="proflist">
			<h2>Professor List</h2>
			<ul class="professor-list">
				<li>
					<img src="prof.webp" alt="Dr. John Smith">
					<div class="professor-info">
						<h3 class="professor-name">Dr. John Smith</h3>
						<p class="professor-expertise">Physics Expert</p>
					</div>
					<button class="view-profile-button"
						onclick="alert('Dr. John Smith is a renowned professor in the field of Physics. He has published numerous research papers and has received several awards for his contributions to the field. He is currently affiliated with XYZ University.')">View
						Profile</button>
				</li>
				<li>
					<img src="prof2.webp" alt="Prof. Jane Doe">
					<div class="professor-info">
						<h3 class="professor-name">Prof. Jane Doe</h3>
						<p class="professor-expertise">Literature Expert</p>
					</div>
					<button class="view-profile-button"
						onclick="alert('Prof. Jane Doe is a respected professor of Literature. She specializes in postmodern literature and has authored several books. She is currently a faculty member at ABC University.')">View
						Profile</button>
				</li>
				<li>
					<img src="prof3.jpg" alt="Dr. David Johnson">
					<div class="professor-info">
						<h3 class="professor-name">Dr. David Johnson</h3>
						<p class="professor-expertise">Computer Science Expert</p>
					</div>
					<button class="view-profile-button"
						onclick="alert('Dr. David Johnson is an accomplished professor in the field of Computer Science. He has extensive experience in artificial intelligence and has worked on several cutting-edge projects. He is associated with DEF University.')">View
						Profile</button>
				</li>
			</ul>
		</section>



		<section id="scholarship">
			<h2>Top Scholarship</h2>
			<p>Explore our top scholarship opportunities for students who aspire to pursue higher studies. These
				scholarships offer financial support to deserving students and are provided by various organizations,
				institutions, and governments. Check the eligibility criteria and application deadlines for each
				scholarship to make the most of these opportunities.</p>

			<ul class="scholarship-list">
				<li>
					<div class="scholarship-header">
						<h3 class="scholarship-title">Scholarship Title 1</h3>
						<p class="scholarship-provider">Provider: XYZ Foundation</p>
					</div>
					<div class="scholarship-details">
						<p class="scholarship-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Pellentesque ac mauris eget libero mattis iaculis. Quisque aliquet justo non diam ultricies
							placerat.</p>
						<p class="scholarship-eligibility">Eligibility: Lorem ipsum dolor sit amet, consectetur
							adipiscing elit.</p>
						<p class="scholarship-deadline">Application Deadline: June 30, 2023</p>
						<a href="#" class="scholarship-apply-button">Apply Now</a>
					</div>
				</li>
				<li>
					<div class="scholarship-header">
						<h3 class="scholarship-title">Scholarship Title 2</h3>
						<p class="scholarship-provider">Provider: ABC Foundation</p>
					</div>
					<div class="scholarship-details">
						<p class="scholarship-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Pellentesque ac mauris eget libero mattis iaculis. Quisque aliquet justo non diam ultricies
							placerat.</p>
						<p class="scholarship-eligibility">Eligibility: Lorem ipsum dolor sit amet, consectetur
							adipiscing elit.</p>
						<p class="scholarship-deadline">Application Deadline: July 15, 2023</p>
						<a href="#" class="scholarship-apply-button">Apply Now</a>
					</div>
				</li>
				<!-- Add more scholarship list items as needed -->
			</ul>
		</section>


		<section id="portal">
			<h2>Student Portal</h2>
			<p>Access our student portal to find information about admissions, course registration, academic resources,
				campus events, and more. The student portal is designed to assist current students in managing their
				educational journey and staying connected with the university community.</p>
			<div id="portal-content">
				<div class="portal-section">
					<h3>Admissions</h3>
					<p>Learn about our admission process, requirements, and important dates. Submit your application and
						track its status.</p>
					<a href="#" class="portal-button">Apply Now</a>
				</div>
				<div class="portal-section">
					<h3>Course Registration</h3>
					<p>Find available courses, create your class schedule, and register for the upcoming semester.
						Manage your enrolled courses and view grades.</p>
					<a href="#" class="portal-button">Register Now</a>
				</div>
				<div class="portal-section">
					<h3>Academic Resources</h3>
					<p>Access a variety of academic resources such as library services, research materials, online
						databases, and tutoring programs.</p>
					<a href="#" class="portal-button">Explore Resources</a>
				</div>
				<div class="portal-section">
					<h3>CGPA Converter</h3>
					<p>Stay updated with campus events, workshops, seminars, and social activities happening throughout
						the year. RSVP and get involved.</p>
					<div class="calculator">
						<!-- <label for="bangladesh-cgpa">CGPA:</label> <br> -->
						<input type="number" id="bangladesh-cgpa" step="0.01" min="2.00" max="4.00" required> <br> <br>
						<button id="calculate-btn">Calculate</button> <br>
						<div id="gpa-results">
							<h3>Converted GPAs:</h3>
							<ul>
								<li><span class="country">Australia:</span> <span id="australia-gpa"></span></li>
								<li><span class="country">Germany:</span> <span id="germany-gpa"></span></li>
								<li><span class="country">USA:</span> <span id="usa-gpa"></span></li>
								<li><span class="country">France:</span> <span id="france-gpa"></span></li>
								<li><span class="country">Canada:</span> <span id="canada-gpa"></span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		</div>
		</section>

		<section id="info">
			<h2>Study, Research & Teach</h2>
			<p>Discover the possibilities of studying, researching, and teaching in various disciplines. Whether you are
				interested in pursuing a degree, engaging in research projects, or seeking teaching opportunities, we
				provide the resources and guidance to help you navigate your academic and professional pursuits.</p>
			<div class="info-container">
				<div class="info-item">
					<h3>Study Programs</h3>
					<p>Explore our diverse range of study programs and find the one that aligns with your academic goals
						and interests.</p>
					<a href="#" class="info-button">Learn More</a>
				</div>
				<div class="info-item">
					<h3>Research Opportunities</h3>
					<p>Engage in groundbreaking research projects and contribute to advancements in your field of study.
					</p>
					<a href="#" class="info-button">Learn More</a>
				</div>
				<div class="info-item">
					<h3>Teaching Positions</h3>
					<p>Discover teaching positions and opportunities to share your knowledge and expertise with
						students.</p>
					<a href="#" class="info-button">Learn More</a>
				</div>
				<div class="info-item">
					<h3>Teaching Positions</h3>
					<p>Discover teaching positions and opportunities to share your knowledge and expertise with
						students.</p>
					<a href="#" class="info-button">Learn More</a>
				</div>
			</div>
		</section>

		<footer>
			<section id="contact">
				<h2>Contact</h2>
				<p>For any inquiries or assistance, please reach out to our support team. You can contact us through
					phone,
					email, or by filling out the contact form below. We are here to help you with any questions you may
					have
					regarding higher studies and the services we offer.</p>
				<div id="contact-form">
					<form>
						<label for="name">Name:</label>
						<input type="text" id="name" name="name" required><br>

						<label for="email">Email:</label>
						<input type="email" id="email" name="email" required><br>

						<label for="message">Message:</label>
						<textarea id="message" name="message" required></textarea><br>

						<input type="submit" value="Submit">
					</form>
				</div>
			</section>
	</main>

	<footer>
		<p>&copy; 2023 Your University. All rights reserved.</p>
	</footer>
	<script src="Higher.js"></script>
<?php
	session_start();

	// Check if the user is already logged in
	if (isset($_SESSION['user_id'])) {
		// User is already logged in, show logout link
		echo '<div class="user-actions">
            <a href="logout.php">Logout</a>
            </div>';
	} else {
		// User is not logged in, show login link
		echo '<div class="user-actions">
            <a href="login.php">Login</a>
            </div>';
	}
?>
</body>

</html>