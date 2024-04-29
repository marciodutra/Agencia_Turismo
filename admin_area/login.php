<?php
session_start();
include("includes/db.php");
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);

    $sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);

    if ($check_user == 1) {
        $_SESSION['user_email'] = $email;
        echo "<script>window.open('index.php?logged_in=Você fez login com sucesso no PAINEL DE ADMINISTRAÇÃO!','_self')</script>";
    } else {
        echo "<script>alert('E-mail ou senha não coincidem, tente novamente!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario login</title>
    <link rel="stylesheet" type="text/css" href="styles/login_style.css" media="all">
</head>
<body>
<a href="../index.php?add_cart=13" name="home" class="btn btn-warning btn-block btn-large">Voltar para Home</a>
    <div class="login">
        

        <h1>Login administrador</h1>
        <form method="post" action="login.php">
            <input type="text" name="email" placeholder="Email" required="required"/>
            <input type="password" name="password" placeholder="Senha" required="required"/>
            <button type="submit" name="login" class="btn btn-primary btn-block btn-large">Login</button>            
        </form>
        
    </div>
</body>
</html>
