<?php
include "../auth/check_auth.php";
include "../config/db.php";

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM Enrollment WHERE enrollment_id=$id");
$enrollment = mysqli_fetch_assoc($data);

if(isset($_POST['update'])) {
    $semester = $_POST['semester'];
    $grade = $_POST['grade'];

    $update = "UPDATE Enrollment SET semester='$semester', grade='$grade' WHERE enrollment_id=$id";
    if(mysqli_query($conn, $update)) {
        header("Location: enrollments.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Enrollment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">Edit Enrollment</h2>
        <form method="POST">
            <label class="block mb-2">Semester</label>
            <input type="text" name="semester" value="<?php echo $enrollment['semester']; ?>" class="w-full border p-2 mb-4">
            
            <label class="block mb-2">Grade</label>
            <input type="text" name="grade" value="<?php echo $enrollment['grade']; ?>" class="w-full border p-2 mb-4">
            
            <button name="update" class="bg-blue-600 text-white px-4 py-2 rounded">Save Changes</button>
            <a href="enrollments.php" class="text-gray-500 ml-4">Cancel</a>
        </form>
    </div>
</body>
</html>
