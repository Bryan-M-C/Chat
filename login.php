<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}

include 'header.php';
?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-text">this is an error message!</div>
                <div class="field input">
                    <label>Correo electronico</label>
                    <input type="text" name="email" placeholder="Ingresa tu correo">
                </div>
                <div class="field input">
                    <label>Contrasena</label>
                    <input type="password" name="password" placeholder="Ingresa tu contrasena">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continua el chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
</body>

</html>