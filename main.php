<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Achievement Tracker</title>
</head>
<?php 

$db = new PDO("mysql:host=localhost;dbname=achievement tracker", "root", "usbw");   
function returnquery($query) {
       global $db;
    try {
        $query = $db->prepare($query);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    } catch(PDOException $e) {
        return "Error!: " . $e->getMessage();
    }
}
?>
<body>
    <div class="title"><h1>Achievement Tracker</h1></div>
    <div class="outest-left-bar"></div>
    <div class="outest-right-bar"></div>
    <div class="outer-left-bar">
        <div class="left-left-bar"></div>
        <div class="right-left-bar"></div>
        <div class="left-bar">
            <?php
                $currentgame = "";  
                foreach(returnquery("SELECT * FROM achievements ORDER BY game") as $data) {
                    if ($currentgame != $data["game"]) {
                        $currentgame = $data["game"];
                        echo "<div class='game'>" . $data["game"] . "</div>";
                    }
                    switch ($data["status"]) {
                        case 0:
                            echo '<form method="POST"><button type="submit" class="achievement" name="achievement" value="'. $data["id"] . '">' . $data["title"] . '</button><div class="status" style="background-color: darkred;"></div></form>';
                            break;
                        case 1:
                            echo '<form method="POST"><button type="submit" class="achievement" name="achievement" value="'. $data["id"] . '">' . $data["title"] . '</button><div class="status" style="background-color: darkgreen;"></div></form>';
                            break;
                        default:
                        echo '<form method="POST"><button type="submit" class="achievement" name="achievement" value="'. $data["id"] . '">' . $data["title"] . '</button><div class="status" style="background-color: yellow;"></div></form>';
                            break;
                    }
                    
                }
            ?>
        </div>
    </div>
    <div class="detailedachievement">
        <div class="detailedachievement-title">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["achievement"])) {
                        $result = returnquery("SELECT * FROM achievements WHERE id = " . $_POST["achievement"]);
                        foreach($result as $data) {
                            echo "<div class='detailedachievement-title-text'>" . $data["title"] . "</div>";
                        }
                    }
                }
            ?>
        </div>
        <div class="detailedachievement-description">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["achievement"])) {
                        $result = returnquery("SELECT * FROM achievements WHERE id = " . $_POST["achievement"]);
                        foreach($result as $data) {
                            echo "<div class='detailedachievement-text'>" . $data["description"] . "</div>";
                        }
                    }
                }
            ?>
        </div>
        <div class="detailedachievement-status">
            <form method="POST">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                        if (isset($_POST["achievement"])) {
                            $result = returnquery("SELECT * FROM achievements WHERE id = " . $_POST["achievement"]);
                            foreach($result as $data) {
                                switch ($data["status"]) {
                                    case 0:
                                        echo "<button class='detailedachievement-button' value='" . $data["id"] . "' style='background-color: darkred;' name='detail-button'></button>";
                                        break;
                                    case 1:
                                        echo "<button class='detailedachievement-button' value='" . $data["id"] . "' style='background-color: darkgreen;' name='detail-button'></button>";
                                        break;
                                    default:
                                        echo "<button class='detailedachievement-button' value='" . $data["id"] . "' style='background-color: yellow;' name='detail-button'></button>";
                                        break;
                                }
                            }
                        }
                    }
                ?>
            </form>
        </div>
    </div>
    <div class="addachievement">
        <div class="addachievement-name">Voeg een achievement toe</div>
        <form method="POST">
            <input type="text" placeholder="Title" class="addachievement-title" name="title" required>
            <input type="text" placeholder="Game" class="addachievement-game" name="game" required>
            <textarea  class="addachievement-description" placeholder="Description" name="description" required></textarea>
            <button type="submit" class="addachievement-button" name="addachievement">Add Achievement</button>
        </form>
    </div>
</body>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["addachievement"])) {
            $game = $_POST["game"];
            $title = $_POST["title"];
            $description = $_POST["description"];

            $result = returnquery("SELECT * FROM achievements WHERE game = '" . $game . "' AND title = '" . $title . "' AND description = '" . $description . "'");
            if(!$result){
                echo returnquery("INSERT INTO achievements(game, title, description, status) VALUES('$game', '$title', '$description', False)");
            }
            echo "<meta http-equiv='refresh' content='0'>";
        }
        elseif (isset($_POST["detail-button"])) {

            $id = $_POST["detail-button"];

            try {
                $query = $db->prepare("SELECT * FROM achievements WHERE id = '" . $_POST["detail-button"] . "'");
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach($result as $data){
                    try {
                        if($data["status"] == 1){
                            $query = $db->prepare("UPDATE achievements SET status = 0 WHERE id = " . $id);
                        }
                        else{
                            $query = $db->prepare("UPDATE achievements SET status = 1 WHERE id = " . $id);
                        }
                        echo $data["status"];
                        $query->execute();
                    } catch(PDOException $e) {
                        die("Error!: " . $e->getMessage());
                    }
                }
            } catch(PDOException $e) {
                die("Error!: ". $e->getMessage());
            }
            echo "<meta http-equiv='refresh' content='0'>";
        }
    }
?>

</html>