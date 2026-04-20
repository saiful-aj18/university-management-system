<?php
include "../auth/check_auth.php";
include "../config/db.php";

$search="";
if(isset($_GET['search'])) $search=$_GET['search'];

$query="SELECT * FROM Students WHERE name LIKE '%$search%'";
$result=mysqli_query($conn,$query);
?>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<div class="p-8">
<h1 class="text-2xl font-bold mb-4">Students</h1>

<form method="GET" class="mb-4">
    <input type="text" name="search" placeholder="Search student" class="border p-2 rounded">
    <button class="px-4 py-2 bg-blue-600 text-white rounded">Search</button>
</form>

<a href="add_student.php" class="px-4 py-2 bg-green-600 text-white rounded mb-4 inline-block">Add New Student</a>

<table class="w-full table-auto border-collapse border border-gray-300">
<thead>
<tr>
<th class="border px-4 py-2">ID</th>
<th class="border px-4 py-2">Name</th>
<th class="border px-4 py-2">Email</th>
<th class="border px-4 py-2">Department</th>
</tr>
</thead>
<tbody>
<?php while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<td class="border px-4 py-2"><?php echo $row['student_id'];?></td>
<td class="border px-4 py-2"><?php echo $row['name'];?></td>
<td class="border px-4 py-2"><?php echo $row['email'];?></td>
<td class="border px-4 py-2"><?php echo $row['department_id'];?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>