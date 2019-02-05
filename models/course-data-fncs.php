<?php
include("course.php");
function getCourseById($conn,$course_ID)
{
    $query = "SELECT * FROM course WHERE course_ID=:course_ID";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':course_ID',$course_ID);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_CLASS,'course');
    $course=$stmt->fetch();
    return $course;
}
?>