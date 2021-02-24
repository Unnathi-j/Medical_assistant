<?php
require_once "pdo.php";
session_start();
if ( isset($_SESSION['error']) ) {
    echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
    unset($_SESSION['error']);
  }
$t=0;
if(isset($_POST['email'])&&isset($_POST['pass'])) {
    $stmt = $pdo->query("SELECT name,password FROM doctors");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row ) {
        if(($_POST['email']==$row['name'])&&($_POST['pass']==$row['password'])){
            $t=1;
            $_SESSION['name']=$row['id'];
            break;
        }
    }
    if($t==1)
    {
        header("Location: disp.php");
         return;
    }
    else{
        $_SESSION['error'] = "Invalid username/password";
        error_log("Login fail ".$_POST['email']." $check");
        header("Location: doclogin.php");
        return;
    }
}
?>
<html>
<form method="POST">
<label for="nam">User Name</label>
<input type="text" name="email" id="nam"><br/>
<label for="id_1723">Password</label>
<input type="text" name="pass" id="id_1723"><br/>
<input type="submit" name='login' value="Log In">
</form>
</html>