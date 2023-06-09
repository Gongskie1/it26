<?php session_start()?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="attendance\attendance.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="details">
        <div class="name">Company</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
       <a href="employee_form.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Employee</span>
       </a>
       <span class="tooltip">Employee</span>
     </li>
     <li>
       <a href="deduction_form.php">
       <i class='bx bx-file'></i>
         <span class="links_name">Deduction</span>
       </a>
       <span class="tooltip">Accountant</span>
     </li>
     <li>
       <a href="attendance_form.php">
       <i class='bx bxs-calendar'></i>
         <span class="links_name">Attendance</span>
       </a>
       <span class="tooltip">Attendance</span>
     </li>
     <li>
       <a href="payroll_form.php">
       <i class='bx bxs-bank'></i>
         <span class="links_name">Payroll</span>
       </a>
       <span class="tooltip">Payroll</span>
     </li>

     <li class="profile">
         <div class="profile-details">
           <div class="name_job">
             <div class="name"><?php echo $_SESSION['user_admin']; ?></div>
             <div class="job"><?php echo "admin"; ?></div>
           </div>
         </div>
         <a href="log-inFolder/loginForm.php">
         <i class='bx bx-log-out' id="log_out" ></a></i>
     </li>
    </ul>
  </div>
  
  <section class="home-section">
      <div class="text">Attendance</div>
      <?php
      include 'attendance\attendance.php'
      ?>
  </section>
  
 
  <script src="sidebar.js"></script>

</body>
</html>
