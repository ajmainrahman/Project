<!DOCTYPE html>
<html>

<head>
	<title>Scholarship Hub "A Higher Studies Planning"</title>
	<link rel="stylesheet" href="Scholarship.css">
	<script src="Scholarship.js"></script>
</head>

<body>
	<header>
		<h1>Scholarship Hub "A Higher Studies Planning"</h1>
		<nav>
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#countrylist">Country List</a></li>
				<li><a href="#proflist">Professor List</a></li>
				<li><a href="#scholarship">Top Scholarship</a></li>
				<li><a href="#portal">Student Portal</a></li>
				<li><a href="#info">Study, Research & teach</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<form>
				<input type="text" placeholder="Search...">
				<button type="submit">Search</button>
			</form>
		</nav>
	</header>
	
	<main>
		<section id="home">
			<h2>Home</h2>
			<p>A higher studies website is a website that provides information about various educational institutions, degree programs, courses, and admission requirements for students looking to pursue higher education. These websites typically cater to students who have completed their secondary education and are looking to enroll in undergraduate or graduate programs.

				A higher studies website may include information about colleges and universities, vocational schools, technical institutes, and other educational institutions. The website may also provide details about the admission process, including application requirements, deadlines, and eligibility criteria.
				In addition to admission information, a higher studies website may provide details about the academic programs offered by the institution, including course descriptions, program requirements, and faculty profiles. The website may also provide information about campus life, including housing options, extracurricular activities, and student organizations.
				A higher studies website may also provide resources for students who are interested in pursuing research opportunities, internships, and career development. These resources may include information about job fairs, resume writing, and interviewing skills.
				Overall, a higher studies website serves as a valuable resource for students who are interested in pursuing higher education and provides them with the information they need to make informed decisions about their educational and career goals.</p>
		</section>
		<section id="countrylist">
			<h2>Country List</h2>
			<ul>
				
				<li>United States</li> <button onclick="alert('') >Universities</a></button>

				<li>Canada</li> <button onclick="alert('Canada is a country located in North America, bordered by the United States to the south and northwest, and by the Arctic Ocean to the north. It is the second-largest country in the world by land area, and the 10th largest economy by nominal GDP.')">Universities</button>
				
				<li>United Kingdom</li> <button onclick="alert('The United Kingdom (UK) is a country located in Europe, consisting of England, Scotland, Wales, and Northern Ireland. It is a constitutional monarchy with a parliamentary democracy and a long and rich history.')">Universities</button>
				
				<li>Germany</li> <button onclick="alert('Germany is a country located in central Europe, bordered by Denmark to the north, Poland and the Czech Republic to the east, Austria and Switzerland to the south, and France, Luxembourg, Belgium, and the Netherlands to the west. It is the seventh-largest country in Europe and the second-most populous country in the European Union, with a population )">Universities</button>
				
				<li>Australia</li> <button onclick="alert('Australia is a country and continent located in the southern hemisphere, between the Pacific Ocean to the east and the Indian Ocean to the west. It is the worlds sixth-largest country by land area and the only country to occupy an entire continent.')">Click me</button>
			</ul>
		</section>
		<section id="proflist">
			<h2>Professor List</h2>
			<p>A higher studies website is a website that provides information about various educational institutions, degree programs, courses, and admission requirements for students looking to pursue higher education. These websites typically cater to students who have completed their secondary education and are looking to enroll in undergraduate or graduate programs.

				A higher studies website may include information about colleges and universities, vocational schools, technical institutes, and other educational institutions. The website may also provide details about the admission process, including application requirements, deadlines, and eligibility criteria.
				In addition to admission information, a higher studies website may provide details about the academic programs offered by the institution, including course descriptions, program requirements, and faculty profiles. The website may also provide information about campus life, including housing options, extracurricular activities, and student organizations.
				A higher studies website may also provide resources for students who are interested in pursuing research opportunities, internships, and career development. These resources may include information about job fairs, resume writing, and interviewing skills.
				Overall, a higher studies website serves as a valuable resource for students who are interested in pursuing higher education and provides them with the information they need to make informed decisions about their educational and career goals.</p>
		</section>
		<section id="scholarship">
			<h2>Top Scholarship</h2>
			<ul>
				<li>Web Design</li>
				<li>Graphic Design</li>
				<li>SEO Optimization</li>
			</ul>
		</section>
		<section id="portal">
			<h2>Student Portal</h2>
			<nav>
				<ul>
					<li><a href="StudentID.php">StudentID</a></li>
					<li><a href="name.php">Name</a></li>
					<li><a href="Department.php">Department</a></li>
					<li><a href="Major.php">Major</a></li>
					<li><a href="University.php">University</a></li>
					<li><a href="Country.php">Country</a></li>
					<li><a href="Grades.php">Grades</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
				<!-- <h1>CGPA Converter</h1>
				<label for="cgpa">Enter CGPA:</label>
    			<input type="number" id="cgpa" step="0.01">
   	 			<button onclick="calculateCGPA()">Calculate</button>
    			<div id="result"></div> -->
			</nav>
			<main>
				<h2>Homepage Content</h2>
        <!-- Add your homepage content here -->
	</main>
		</section>
		<section id="info">
			<h2>Study, Research & Teach</h2>
			<ul>
				<li>Web Design</li>
				<li>Graphic Design</li>
				<li>SEO Optimization</li>
			</ul>
		</section>
		<section id="contact">
			<h2>Contact</h2>
			<form action='#' method = "POST">
                Name: <input type="text" name = "Name"> <br>
				Email: <input type="text" name = "Email"> <br>
				Message: <textarea type="text" name = "Message"></textarea>
				<input type="submit" name="submit" value="Submit">
			</form>
		</section>
	</main>
	<footer>
		<p>Scholarship Hub "A Higher Studies Planning"</p>
	</footer>

<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labproject";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> -->

</body>

</html>