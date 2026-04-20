<?php 
include "../config/db.php";

$query="
SELECT 
    c.course_name,
    COUNT(e.student_id) AS total
FROM Courses c
LEFT JOIN Enrollment e
ON c.course_id = e.course_id
GROUP BY c.course_id
";

$result=mysqli_query($conn,$query);

$labels=[];
$values=[];

while($row=mysqli_fetch_assoc($result)){
    $labels[]=$row['course_name'];
    $values[]=$row['total'];
}

echo json_encode([
    "labels"=>$labels,
    "values"=>$values
]);
?>