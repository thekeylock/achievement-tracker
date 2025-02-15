<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $description = $_POST["description"];
        echo $name;
        echo $description;

        try {
            $db = new PDO("mysql:host=localhost;dbname=test", "root", "usbw");
            $query = $db->prepare("INSERT INTO testtabel(naam, description, status) VALUES('$name', '$description', True)");
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