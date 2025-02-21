<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $game = $_POST["game"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        echo "$game </br>";
        echo "$title </br>";
        echo "$description </br>";

        try {
            $db = new PDO("mysql:host=localhost;dbname=achievement tracker", "root", "usbw");
            $query = $db->prepare("INSERT INTO achievements(game, title, description, status) VALUES('$game', '$title', '$description', False)");
            if($query->execute()) {
                echo "De nieuwe gegevens zijn toegevoegd.";
            } else {
                echo "Er is een fout opgetreden!";
            }
        } catch(PDOException $e) {
            die("Er is een databasefout opgetreden!");
        }
    }
?>