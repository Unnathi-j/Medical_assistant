<?php
require_once "pdo.php";
session_start();
if ( isset($_POST['logout'] ) ) {
    // Redirect the browser to game.php
    header("Location:admin1.php");
    return;
}
if ( isset($_SESSION['error']) ) {
    echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
    unset($_SESSION['error']);
  }
if(isset($_POST['name'])&& isset($_POST['pass']))
    {
        if(strlen($_POST['name'])<1 || strlen($_POST['pass'])<1)
        {
            $_SESSION['error']="Name and passwords are required";
            header("Location:doctors.php");
            return;
        }
        
        else{
            $stmts = $pdo->query("SELECT count(id) FROM patients");
$rows = $stmts->fetchAll(PDO::FETCH_ASSOC);
            $stmt = $pdo->prepare('INSERT INTO doctors
  (name, password,no_patients) VALUES ( :nm, :pw, :no)');
$stmt->execute(array(
  ':nm' =>htmlentities($_POST['name']),
  ':pw' => $_POST['pass'],
  ':no' => $rows)
);
$_SESSION['success']="Registered successfully";
header('Location: admin1.php');
    return;
        }
    }
    
      ?>
      <html>
      
          <head>
              <meta charset="utf-8"/>
            <title>...add doctors.</title>
          </head>
          <form method="post">
              <label for="name">Name:</label>
              <input type="text" size="40" name="name" ><br>
              <label for="pass">Password:</label>
              <input type="text" size="20" name="pass" ><br>
              
              <input type="submit" name="add" value="Add">
              
              <input type="submit" name="logout" value="Cancel">
              </form> 
          
          </html>