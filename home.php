

<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />

</head>
<body class="body">


     <!-- Content -->
     <div id="content">
         <div class="inner">


             <!-- Sidebar -->
             <div id="sidebar">
                 <h1>Witaj Trenerze, <?php echo $_SESSION['name']; ?></h1>

                 <!-- Logo -->
                 <h1 id="logo"><a href="#">POKEDEX</a></h1>

                 <!-- Nav -->
                 <nav id="nav">
                     <ul>
                         <li class="current"><a href="#">Strona główna</a></li>
                         <li><a href="dodaj_przejazd.php">Dodaj przejazd</a></li>
                         <li><a href="read.php">Moje przejazdy</a></li>
                     </ul>

                     <nav class="home-nav">
                         <a href="change-password.php">Change Password</a>
                         <a href="logout.php">Logout</a>
                     </nav>
                 </nav>

             </div>



         </div>
     </div>




     <script src="assets/js/jquery.min.js"></script>
     <script src="assets/js/browser.min.js"></script>
     <script src="assets/js/breakpoints.min.js"></script>
     <script src="assets/js/util.js"></script>
     <script src="assets/js/main.js"></script>

     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>