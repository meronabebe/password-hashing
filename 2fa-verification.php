<?php 
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include_once("db-connect.php");
    extract($_POST);
    $sql = "SELECT * FROM `users` where `email` = '{$_SESSION['email']}'";
    $get = $conn->query($sql);
    if($get->num_rows > 0){
        $data = $get->fetch_assoc();
        if($data['verification_code'] == $code){
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $data['name'];
            header('Location: index.php');
            exit;
        }else{
            $error = "Invalid verification code!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>2FA Verification</title>
</head>
<body>
	<h1>2FA Verification</h1>
	<p>Please enter the 6-digit verification code sent:</p>
	<form method="post">
		<input type="text" name="code" maxlength="6" required><br>
		<input type="submit" value="Verify">
	</form>
	<?php if(isset($error)): ?>
		<p style="color: red;"><?php echo $error; ?></p>
	<?php endif; ?>
</body>
</html>