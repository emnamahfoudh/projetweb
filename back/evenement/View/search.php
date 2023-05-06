<?php
include '../Controller/CourseC.php';
$courseC = new CourseC();

if (isset($_GET['label']) && !empty($_GET['label'])) {
    $list = $courseC->showCourse($_GET['label']);
} else {
    $list = $courseC->listCourses();
}

include 'SearchCourse.php';
?>
