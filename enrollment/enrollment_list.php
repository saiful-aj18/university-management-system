<?php
include "../auth/check_auth.php";
include "../config/db.php";

$query="
SELECT 
s.name AS student,
c.course_name AS course,
e.semester,
e.grade
FROM Enrollment e

JOIN Students s
ON e.student_id = s.student_id

JOIN Courses c
ON e.course_id = c.course_id
";

$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Enrollments</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">

<h1 class="text-3xl font-bold mb-6">Enrollment List</h1>

<a href="enroll_student.php"
class="bg-gradient-to-r from-indigo-500 to-cyan-500 text-white px-4 py-2 rounded mb-4 inline-block hover:from-indigo-600 hover:to-cyan-600 transition">
Enroll Student
</a>

<table class="w-full bg-white shadow rounded">

<thead class="bg-gray-200">
<tr>
<th class="p-3">Student</th>
<th class="p-3">Course</th>
<th class="p-3">Semester</th>
<th class="p-3">Grade</th>
</tr>
</thead>

<tbody>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr class="border-t">
<td class="p-3"><?php echo $row['student']; ?></td>
<td class="p-3"><?php echo $row['course']; ?></td>
<td class="p-3"><?php echo $row['semester']; ?></td>
<td class="p-3"><?php echo $row['grade']; ?></td>
</tr>

<?php } ?>

</tbody>

</table>

</body>
</html>