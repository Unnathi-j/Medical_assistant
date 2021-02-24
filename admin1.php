<?php
if ( isset($_SESSION['success']) ) {
    echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
    unset($_SESSION['success']);
}
if ( isset($_POST['logout'] ) ) {
    // Redirect the browser to game.php
    header("Location: logout.php");
    return;
}
?>
<html>
<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;}
.button3 {background-color: red;} /* Blue */
</style>
</head>
<body>



<a href="reg.php"><button class="button button1"> Doctors Available </button></a>
<a href="doctors.php"><button class="button button2">New Registration</button></a>
<a href="logout.php"><button class="button button3">LOGOUT</button></a>
</html>

<!-- The core Firebase JS SDK is always required and must be listed first 
<script src="/__/firebase/7.21.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries 
<script src="/__/firebase/7.21.1/firebase-analytics.js"></script>

<!-- Initialize Firebase 
<script src="/__/firebase/init.js"></script>