<?php
include "../auth/check_auth.php";
include "../config/db.php";

/* Advanced query with JOIN + STATUS */
$query = "
SELECT 
    c.course_id,
    c.course_name,
    c.credits,
    d.department_name,
    i.instructor_name,
    COUNT(e.student_id) AS total_students,

    CASE
        WHEN COUNT(e.student_id) = 0 THEN 'Empty'
        WHEN COUNT(e.student_id) < 8 THEN 'Available'
        ELSE 'Full'
    END AS status

FROM Courses c

JOIN Departments d 
ON c.department_id = d.department_id

JOIN Instructors i 
ON c.instructor_id = i.instructor_id

LEFT JOIN Enrollment e 
ON c.course_id = e.course_id

GROUP BY c.course_id
";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Courses</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">

<h1 class="text-3xl font-bold mb-6">Course List</h1>

<a href="add_course.php"
class="bg-green-600 text-white px-4 py-2 rounded mb-4 inline-block">
Add Course
</a>

<table class="w-full bg-white shadow rounded">

<thead class="bg-gray-200">
<tr>
<th class="p-3">Course</th>
<th class="p-3">Credits</th>
<th class="p-3">Department</th>
<th class="p-3">Instructor</th>
<th class="p-3">Students</th>
<th class="p-3">Status</th>
</tr>
</thead>

<tbody>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr class="border-t">

<td class="p-3"><?php echo $row['course_name']; ?></td>

<td class="p-3"><?php echo $row['credits']; ?></td>

<td class="p-3"><?php echo $row['department_name']; ?></td>

<td class="p-3"><?php echo $row['instructor_name']; ?></td>

<td class="p-3"><?php echo $row['total_students']; ?></td>

<td class="p-3">

<?php
$status = $row['status'];

if($status == 'Full'){
    echo "<span class='bg-red-500 text-white px-3 py-1 rounded'>Full</span>";
}
elseif($status == 'Available'){
    echo "<span class='bg-yellow-500 text-white px-3 py-1 rounded'>Available</span>";
}
else{
    echo "<span class='bg-green-500 text-white px-3 py-1 rounded'>Empty</span>";
}
?>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</body>
</html>