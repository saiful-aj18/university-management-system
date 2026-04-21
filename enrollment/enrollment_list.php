<?php
include "../auth/check_auth.php";
include "../config/db.php";

// 1. ADDED e.enrollment_id TO THE QUERY
$query="
SELECT 
e.enrollment_id, 
s.name AS student,
c.course_name AS course,
e.semester,
e.grade
FROM Enrollment e
JOIN Students s ON e.student_id = s.student_id
JOIN Courses c ON e.course_id = c.course_id
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

<a href="enroll_student.php" class="bg-gradient-to-r from-indigo-500 to-cyan-500 text-white px-4 py-2 rounded mb-4 inline-block hover:shadow-lg transition">
    + Enroll Student
</a>

<table class="w-full bg-white shadow rounded overflow-hidden">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="p-3 text-left">Student</th>
            <th class="p-3 text-left">Course</th>
            <th class="p-3 text-left">Semester</th>
            <th class="p-3 text-left">Grade</th>
            <th class="p-3 text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row=mysqli_fetch_assoc($result)){ ?>
        <tr class="border-t hover:bg-gray-50">
            <td class="p-3"><?php echo $row['student']; ?></td>
            <td class="p-3"><?php echo $row['course']; ?></td>
            <td class="p-3"><?php echo $row['semester']; ?></td>
            <td class="p-3 font-semibold text-blue-600"><?php echo $row['grade']; ?></td>
            <td class="p-3 text-center">
                <!-- UPDATE LINK -->
                <a href="edit_enrollment.php?id=<?php echo $row['enrollment_id']; ?>" 
                   class="text-indigo-600 hover:underline mr-3">Edit</a>
                
                <!-- DELETE LINK (With Confirmation) -->
                <a href="delete_enrollment.php?id=<?php echo $row['enrollment_id']; ?>" 
                   class="text-red-600 hover:underline" 
                   onclick="return confirm('Are you sure you want to delete this enrollment?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
