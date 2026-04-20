<?php
include "../auth/check_auth.php";
include "../config/db.php";

// Fetch statistics
$students = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM Students"));
$courses = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM Courses"));
$enrollments = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM Enrollment"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - University Admin</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex h-screen bg-gray-100">

<!-- Sidebar -->
<div class="w-64 bg-white shadow-md flex flex-col">

 <div class="p-6 flex items-center gap-3">
  <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center shadow-sm">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <path d="M12 2L2 7l10 5 10-5-10-5z"/>
      <path d="M2 17l10 5 10-5"/>
      <path d="M2 12l10 5 10-5"/>
    </svg>
  </div>
  <span class="text-2xl font-bold leading-tight text-transparent bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text">Admin Panel</span>
 </div>

 <nav class="flex-1 px-4 py-2 space-y-1">

  <a href="dashboard.php" class="flex items-center gap-3 py-2 px-3 rounded-lg hover:bg-blue-50 text-gray-700 hover:text-blue-700 transition-colors group">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/>
      <rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>
    </svg>
    <span class="text-sm font-medium">Dashboard</span>
  </a>

  <a href="../students/student_list.php" class="flex items-center gap-3 py-2 px-3 rounded-lg hover:bg-blue-50 text-gray-700 hover:text-blue-700 transition-colors group">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
      <circle cx="9" cy="7" r="4"/>
      <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
      <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
    </svg>
    <span class="text-sm font-medium">Students</span>
  </a>

  <a href="../courses/add_course.php" class="flex items-center gap-3 py-2 px-3 rounded-lg hover:bg-blue-50 text-gray-700 hover:text-blue-700 transition-colors group">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
      <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
    </svg>
    <span class="text-sm font-medium">Courses</span>
  </a>

  <a href="../enrollment/enroll_student.php" class="flex items-center gap-3 py-2 px-3 rounded-lg hover:bg-blue-50 text-gray-700 hover:text-blue-700 transition-colors group">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
      <circle cx="9" cy="7" r="4"/>
      <line x1="19" y1="8" x2="19" y2="14"/>
      <line x1="22" y1="11" x2="16" y2="11"/>
    </svg>
    <span class="text-sm font-medium">Enrollments</span>
  </a>

  <a href="../enrollment/enrollment_list.php" class="flex items-center gap-3 py-2 px-3 rounded-lg hover:bg-blue-50 text-gray-700 hover:text-blue-700 transition-colors group">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <line x1="8" y1="6" x2="21" y2="6"/>
      <line x1="8" y1="12" x2="21" y2="12"/>
      <line x1="8" y1="18" x2="21" y2="18"/>
      <circle cx="3" cy="6" r="1" fill="currentColor"/>
      <circle cx="3" cy="12" r="1" fill="currentColor"/>
      <circle cx="3" cy="18" r="1" fill="currentColor"/>
    </svg>
    <span class="text-sm font-medium">Enrollment List</span>
  </a>

  <a href="../courses/course_list.php" class="flex items-center gap-3 py-2 px-3 rounded-lg hover:bg-blue-50 text-gray-700 hover:text-blue-700 transition-colors group">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <circle cx="11" cy="11" r="8"/>
      <line x1="21" y1="21" x2="16.65" y2="16.65"/>
    </svg>
    <span class="text-sm font-medium">Find Status</span>
  </a>

  <div class="pt-2 border-t border-gray-100 mt-2">
    <a href="../auth/logout.php" class="flex items-center gap-3 py-2 px-3 rounded-lg hover:bg-red-50 text-red-500 hover:text-red-600 transition-colors">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
        <polyline points="16 17 21 12 16 7"/>
        <line x1="21" y1="12" x2="9" y2="12"/>
      </svg>
      <span class="text-sm font-medium">Logout</span>
    </a>
  </div>

 </nav>
    
</div>

<!-- Main Content -->
<div class="flex-1 p-8 overflow-auto">
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

    <style>
  .students-bar::before { content:''; position:absolute; top:0; left:0; right:0; height:3px; background:#5DCAA5; border-radius:12px 12px 0 0; }
  .courses-bar::before  { content:''; position:absolute; top:0; left:0; right:0; height:3px; background:#85B7EB; border-radius:12px 12px 0 0; }
  .enrollments-bar::before { content:''; position:absolute; top:0; left:0; right:0; height:3px; background:#AFA9EC; border-radius:12px 12px 0 0; }
</style>

 <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-12">

  <!-- Students -->
  <div class="students-bar bg-white border border-gray-200 rounded-xl p-6 relative overflow-hidden">
    <div class="w-10 h-10 rounded-[10px] bg-[#E1F5EE] flex items-center justify-center mb-3">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0F6E56" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/>
        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
      </svg>
    </div>
    <p class="text-[11px] font-semibold uppercase tracking-widest text-gray-500 mb-1">Total Students</p>
    <p class="text-[32px] font-semibold text-gray-900 leading-none mb-2"><?php echo $students; ?></p>
    <span class="inline-flex items-center gap-1 text-xs px-2 py-0.5 rounded-full bg-[#E1F5EE] text-[#0F6E56]">↑ Active learners</span>
  </div>

  <!-- Courses -->
  <div class="courses-bar bg-white border border-gray-200 rounded-xl p-6 relative overflow-hidden">
    <div class="w-10 h-10 rounded-[10px] bg-[#E6F1FB] flex items-center justify-center mb-3">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#185FA5" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
      </svg>
    </div>
    <p class="text-[11px] font-semibold uppercase tracking-widest text-gray-500 mb-1">Total Courses</p>
    <p class="text-[32px] font-semibold text-gray-900 leading-none mb-2"><?php echo $courses; ?></p>
    <span class="inline-flex items-center gap-1 text-xs px-2 py-0.5 rounded-full bg-[#E6F1FB] text-[#185FA5]">↑ Published</span>
  </div>

  <!-- Enrollments -->
  <div class="enrollments-bar bg-white border border-gray-200 rounded-xl p-6 relative overflow-hidden">
    <div class="w-10 h-10 rounded-[10px] bg-[#EEEDFE] flex items-center justify-center mb-3">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#534AB7" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
      </svg>
    </div>
    <p class="text-[11px] font-semibold uppercase tracking-widest text-gray-500 mb-1">Total Enrollments</p>
    <p class="text-[32px] font-semibold text-gray-900 leading-none mb-2"><?php echo $enrollments; ?></p>
    <span class="inline-flex items-center gap-1 text-xs px-2 py-0.5 rounded-full bg-[#EEEDFE] text-[#534AB7]">↑ This month</span>
  </div>

 </div>

    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-semibold mb-4">Enrollments Chart</h2>
        <canvas id="enrollChart" class="w-full"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../assets/dashboard.js"></script>
</body>
</html>

