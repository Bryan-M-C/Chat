<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
include 'header.php';
include 'php/config.php';

$conn = new Connection();

$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");
if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
}
?>

<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                    <img src="php/images/<?php echo $row['img']; ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['nombre'] . ' ' . $row['apellidos']; ?></span>
                        <p><?php echo $row['status']; ?></p>
                    </div>
                </div>
                <a href="php/logout.php?user_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an iser to start chat</span>
                <input type="text" name="" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
            </div>
        </section>
    </div>
    <script src="js/users.js"></script>
</body>

</html>