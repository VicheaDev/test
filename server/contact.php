<?php
    $request = strtoupper($_SERVER['REQUEST_METHOD']);
    if ($request !== "POST"){
        header("Location:../contact.php");
    }
    if (isset($_POST["name"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        if (isset($_POST["bot"]) && !empty($_POST["bot"])) {
            echo "<h1> you are spam !!</h1>";
            die();
        }
        echo "<h1>Send Success</h1>";
    }

?>
