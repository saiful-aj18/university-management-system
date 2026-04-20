<?php

?>

<?php
session_start();

// Redirect to dashboard if already logged in



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-gray-800 shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center  ">
        <h1 class="text-2xl font-bold leading-tight text-transparent bg-gradient-to-r from-indigo-500 to-cyan-500 bg-clip-text">University Admin System</h1>
        <div>
            <a href="auth/login.php" class="px-4 py-2 bg-leading-tight bg-gradient-to-r from-indigo-500 to-cyan-500  text-white rounded hover:bg-blue-700 transition">Admin Login</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="bg-gray-900 py-20">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold leading-tight text-transparent bg-gradient-to-r from-indigo-500 to-cyan-500 bg-clip-text mb-4">Manage Students, Courses & Enrollment Easily</h2>
        <p class="text-gray-400 mb-8 text-lg">A modern university management system with dashboard analytics, enrollment charts, and more.</p>
        <a href="auth/login.php" class="px-8 py-4 bg-gradient-to-r from-indigo-500 to-cyan-500 text-white rounded-lg font-semibold hover:from-indigo-600 hover:to-cyan-600 transition">Get Started</a>
    </div>
</section>

<!-- Features Section -->
<section class=" bg-gray-800 py-20">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-12 text-center">
            <div class="bg-gray-700 p-8 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-xl text-gray-300 font-semibold mb-2">Manage Students</h3>
                <p class="text-gray-400">Add, edit, and track students efficiently with search and dropdown selections.</p>
            </div>
            <div class="bg-gray-700 p-8 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-xl text-gray-300 font-semibold mb-2">Manage Courses</h3>
                <p class="text-gray-400">Add courses, assign instructors, and visualize enrollment statistics.</p>
            </div>
            <div class="bg-gray-700 p-8 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-xl text-gray-300 font-semibold mb-2">Enrollment Dashboard</h3>
                <p class="text-gray-400">Interactive charts, statistics, and reports for easy tracking of course enrollments.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="bg-gray-900 py-20">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl text-leading-tight bg-gradient-to-r from-indigo-500 to-cyan-500 bg-clip-text text-transparent font-bold mb-8">Ready to Start Managing?</h2>
        <a href="auth/login.php" class="px-8 py-4 bg-gradient-to-r from-indigo-500 to-cyan-500 text-white font-semibold rounded-lg hover:from-indigo-600 hover:to-cyan-600 transition">Login as Admin</a>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 shadow-inner py-6 ">
    <div class="container mx-auto text-center text-gray-500">
        &copy; <?php echo date('Y'); ?> University Management System. All rights reserved.
    </div>
</footer>

</body>
</html>

