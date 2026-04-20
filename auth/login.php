<?php
session_start();
include "../config/db.php";
if(isset($_POST['login'])){
$user=$_POST['username'];
$pass=md5($_POST['password']);
$sql="SELECT * FROM Admins WHERE username='$user' AND password='$pass'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
$_SESSION['admin']=$user;
header("Location: ../dashboard/dashboard.php");
}else{
echo "Invalid login";
}
}
?>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<div class=" min-h-screen  bg-gradient-to-r from-gray-900 to-cyan-600 flex items-center justify-center">
   
  <div class="w-full max-w-md bg-gradient-to-br from-gray-600 to-cyan-700/90 backdrop-blur-lg p-10 rounded-2xl shadow-2xl">

   <!-- Title -->
<div class="text-center mb-8">
  <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center mx-auto mb-4 shadow-lg">
    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
      <rect x="3" y="11" width="18" height="11" rx="2"/>
      <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
    </svg>
  </div>
  <h2 class="text-2xl font-bold text-white tracking-tight">Admin Panel</h2>
  <p class="text-gray-300 text-sm mt-1">Secure login to continue</p>
</div>

<!-- Form -->
<form method="POST" class="space-y-5">

  <!-- Username -->
  <div>
    <label class="flex items-center gap-2 text-xs font-semibold text-gray-100 uppercase tracking-widest mb-2">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
        <circle cx="12" cy="7" r="4"/>
      </svg>
      Username
    </label>
    <div class="relative">
      <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
          <circle cx="12" cy="7" r="4"/>
        </svg>
      </span>
      <input
        type="text"
        name="username"
        placeholder="Enter username"
        class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 text-white placeholder-gray-400 rounded-xl focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition text-sm"
      >
    </div>
  </div>

  <!-- Password -->
  <div>
    <label class="flex items-center gap-2 text-xs font-semibold text-gray-100 uppercase tracking-widest mb-2">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="3" y="11" width="18" height="11" rx="2"/>
        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
      </svg>
      Password
    </label>
    <div class="relative">
      <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="11" width="18" height="11" rx="2"/>
          <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
        </svg>
      </span>
      <input
        type="password"
        name="password"
        placeholder="Enter password"
        class="w-full pl-10 pr-4 py-3 bg-white/5 border border-white/10 text-white placeholder-gray-400 rounded-xl focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition text-sm"
      >
    </div>
  </div>

  <!-- Button -->
  <button
    type="submit"
    name="login"
    class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white py-3 rounded-xl font-semibold text-sm tracking-wide transition shadow-lg shadow-cyan-900/30 mt-2"
  >
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
      <polyline points="10 17 15 12 10 7"/>
      <line x1="15" y1="12" x2="3" y2="12"/>
    </svg>
    Sign In
  </button>
  <a href="../index.php" class="text-cyan-400 hover:text-cyan-300 text-sm mt-4 block text-center">
    ← Back to Home
  </a>

</form>

  </div>

</div>