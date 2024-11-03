<?php
session_start();
if (isset($_SESSION['admin_id']) && 
    isset($_SESSION['role'])) {
   
   if ($_SESSION['role'] == 'Admin') {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home ACASK School</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="icon" href="../logo.jpg">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/
  jquery.min.js"></script>
</head>
<body>
     <?php 
        include "inc/navbar.php";
     ?>
     <div class="container mt-5">
       <div class="container text-center">
         <div class="row row-cols-5">
           <a href="" class="col btn btn-dark m-2 py-3">
             Teachers
           </a>
         </div>
       </div>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
           $(document).ready(function(){
            $("#navLinks li:nth-child(2) a").addClass('active');
       });
    </script>

</body>
</html>
<?php 

}else {
    header("Location: ../login.php");
  exit;
} 

}else {
    header("Location: ../login.php");
  exit;
} 

?> 
