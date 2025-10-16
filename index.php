<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advanced Technological Institute - Jaffna</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-image: url('assets/ati.jpeg'); /* change to your image path */
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
  </style>
</head>
<body class="text-white">

  <!-- HEADER -->
  <header class="fixed top-0 left-0 w-full bg-black/60 backdrop-blur-sm z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex items-center justify-between h-20">
        
        <!-- Left side -->
        <div class="flex items-center gap-3">
         <img src="assets/ati-logo.png" alt="ATI Logo" class="h-14 w-14 rounded-full border border-white/30">

          <div class="flex flex-col leading-tight">
            <span class="text-lg font-semibold text-yellow-400">Advanced Technological Institute, Jaffna</span>
            <span class="text-sm text-white/80">Department of Information Technology</span>
          </div>
        </div>

        <!-- Right side -->
        <nav class="flex items-center gap-6">
       

          <!-- SIGN-UP Dropdown & REP Login -->
<div class="flex items-center gap-4">

  <!-- SIGN-UP Dropdown -->
  <div class="relative group">
    <button class="flex items-center gap-2 px-4 py-2 bg-yellow-400 text-black font-semibold rounded-lg hover:bg-yellow-500 transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
      SIGN-UP
    </button>

    <!-- Dropdown Menu -->
    <div class="absolute right-0 mt-2 w-44 bg-white rounded-lg shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all">
      <a href="Signup/Student_signup.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Student</a>
      <a href="Signup/Lecturer_signup.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Lecturer</a>
    </div>
  </div>

 
</div>

        </nav>
      </div>
    </div>
  </header>

  <!-- HERO SECTION -->
  <section class="min-h-screen flex flex-col justify-center items-center text-center pt-24 bg-black/40">
    <h1 class="text-4xl sm:text-5xl font-bold mb-3 text-yellow-300">
      Advanced Technological Institute - Jaffna
    </h1>
    <h2 class="text-lg sm:text-xl mb-6 text-white/90">
      Department of Information Technology
    </h2>

    <p class="text-white/80 text-base max-w-xl mx-auto mb-8">
      Welcome to the Student & Teacher Portal. Access your dashboard, manage your profile, and stay updated with academic activities.
    </p>

    <div class="flex gap-4">
      <a href="Login/Student_login.php" class="px-6 py-3 bg-yellow-400 text-black font-semibold rounded-xl hover:bg-yellow-500 transition">
        Student Login
      </a>
      <a href="Rep_login/index.php" class="px-6 py-3 bg-yellow-400 text-black font-semibold rounded-xl hover:bg-yellow-500 transition">
    REP Login
  </a>
      <a href="Login/Lecturer_login.php" class="px-6 py-3 bg-yellow-400 text-black font-semibold rounded-xl hover:bg-yellow-500 transition">
        Lecturer Login
      </a>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-black/70 text-center py-4 text-sm text-white/70">
    &copy; 2025 Advanced Technological Institute - Jaffna | All Rights Reserved
  </footer>

</body>
</html>
