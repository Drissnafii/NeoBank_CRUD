<?php
    if (isset($_POST['delete'])) {
        require_once __DIR__ . '/config/Connection.php';
        $ID = $_POST['ID'];
        $query = $pdo->prepare('DELETE FROM contacts WHERE ID=?');
        $query->execute([$ID]);
        header('location: index.php');
    }
?>