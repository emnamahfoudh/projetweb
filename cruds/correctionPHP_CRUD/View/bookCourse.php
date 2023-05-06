<?php
include '../Controller/reservationC.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book event</title>
</head>
<body>
	<h1>Book event</h1>
	<?php
	include '../Controller/CourseC.php';

	$courseC = new CourseC();

	if(isset($_GET["idevent"])) {
		$courseC->bookCourse($_GET["idevent"], 1);
		echo "<p>Course booked successfully!</p>";
	} else {
		echo "<p>Invalid request!</p>";
	}

	?>
	<a href="addReservation.php">Add a reservation</a>
	<a href="upcomingCourses.php">Back to Upcoming Courses</a>
</body>
</html>
