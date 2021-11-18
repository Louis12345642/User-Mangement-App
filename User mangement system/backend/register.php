
<?php
include_once('MySQL_conn.php');
?>
<?php
$name=$_POST['name'];
$contact=$_POST['email'];
$class=$_POST['class'];
$age=$_POST['age'];

$sql="INSERT INTO `user` (`name`, `email`, `class`, `age`)
VALUES ('$name', '$contact', '$class', '$age');";
mysqli_query($conn,$sql);

//header ("HTTP/1.1 302 Found");
//header ("Location: htpp://localhost/index.php");
//exit();
//

?>
<DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>User mangement system</title>
  
  <!-- HTML -->
  

  <!-- Custom Styles -->
  <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css" title="" type="" />
  <link rel="stylesheet" href="../client/style.css">
</head>

<body class="container">
  <header id="head">
      <?php
//include_once('backen/MySQL_conn.php');

?>
    
 
<div>
  <br />
   <h1 id="hside">User Management App</h1>
 </div>
 <div class="logo" id="Logo"> <span class="fa fa-user"></span></div>
 </header>
 <div>
   
 
 <section id="Display" class="display">
   <div>
     <br />
     
     <div id="Text" class="text">
       
       <p>
         <br />
        Add a User 
       </p>
       <br />
       <div id="Lin" class="lin">
         
       </div>
     </div>
     <br />
     <br />
     <div class="blocky">
       <div>
    <form  id="succ"   class="formItems" >
        <br/>
           <br/>
              <br/> 
              <br/>
       <p>User Added successful</p>
       <button class="btnSucc" ><b><a href="../index.php">Home</a></b> </button>
     </form>
   </div>
   
   <div>
     
   </div>
  </div>
 
 </section>
 
   <footer id="Footer" class="footer">
     <br />
     <p>User Management System
     </p>
     <p>© 2021 Mubarak Kual Louis </p>
     <button class="btnlink">
    <a class="link" href="../users.php">Users list</a>
     </button>
    <p>Software Developer</p>
   </footer>
  <!-- Project -->
  <script src="main.js"></script>
</body>
</html>