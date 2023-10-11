<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}

include 'header.php';
?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-text">this is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="field input">
                        <label>Apellidos</label>
                        <input type="text" name="apellidos" placeholder="Apellidos" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Correo electronico</label>
                    <input type="text" name="email" placeholder="Ingresa tu correo" required>
                </div>
                <div class="field input">
                    <label>Contrasena</label>
                    <input type="password" name="password" placeholder="Ingresa una nueva contrasena" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Foto de perfil</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continua el chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
</body>

</html>