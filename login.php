<?php // Do not put any HTML above this line


session_start();


$salt = 'XyZzy12*_';
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';  // pass is php123
$mail="admin";

// Check to see if we have some POST data, if we do process it
//echo($_SESSION['name']);
if(isset($_POST['email'])&&isset($_POST['pass'])) {
    
    if ( strlen($_POST['email']) < 1 || strlen($_POST['pass']) < 1 ) {
        $_SESSION['error'] = "User name and password are required";
        error_log("Login fail ".$_POST['email']." $check");
        header("Location: login.php");
        return;
        
    } else {
        $check = hash('md5', $salt.$_POST['pass']);
        
        if ( $check == $stored_hash && $_POST['email'] == $mail) {
            // Redirect the browser to game.php
            //print("yes");
            header("Location: admin1.php");
           error_log("Login success ".$_POST['email']);
            return;
        }
        else{
            $_SESSION['error'] = "Incorrect Password/Username";
            error_log("Login fail ".$_POST['email']." $check");
            header("Location: login.php");
            return;
        }
    
    }
}

// Fall through into the View
?>
<!DOCTYPE html>
<html>
<head>
<!--<?php // require_once "bootstrap.php"; ?>-->
<title>admin login</title>
</head>
<body>
<div class="container">
<h1>Please Log In</h1>
<?php
// Note triple not equals and think how badly double
// not equals would work here...
if ( isset($_SESSION['error']) ) {
    echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
    unset($_SESSION['error']);
  }

?>

<form method="POST">
<label for="nam">User Name</label>
<input type="text" name="email" id="nam"><br/>
<label for="id_1723">Password</label>
<input type="text" name="pass" id="id_1723"><br/>
<input type="submit" name='login' value="Log In">
</form>
<p>

<!-- Hint: The password is the four character sound a cat
makes (all lower case) followed by 123.
//error_log("Login fail ".$_POST['email']." $check");
//error_log("Login success ".$_POST['email']);
-->
</p>
</div>
</body>