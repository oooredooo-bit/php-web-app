<?php 

session_start();

require_once('./database/conn.php');

if (isset($_POST['txtUser']) && isset($_POST['txtPass'])) {

    $user = $_POST['txtUser'];
    $passwd = $_POST['txtPass'];

    $sql = "SELECT * FROM users WHERE username='" . $user . "' AND passwd='" . $passwd . "'";
    // $insertSql = "INSERT INTO users (username) VALUES ('matthew') WHERE id=1";
    // $updateSql = "UPDATE users SET username='matthew' WHERE id=1";
    // $deleteSql = "DELETE * FROM users";
    // $truncateSql = "TRUNCATE users";
    $result = $mysqli->query($sql);

    if ($result->num_rows) {

        // $row = $result->fetch_assoc();

        $result->free_result();
        $mysqli->close();

        $_SESSION['logged-user'] = $user;

        header("Location: ./pages/home.php");
    }
}

header("Location: index.php");
?>