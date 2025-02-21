<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Achievement Tracker</title>
</head>
<?php
include("css.php");

include("php.php");
?>
<body>
    <div class="title"><h1>Achievement Tracker</h1></div>
    <div class="outest-left-bar"></div>
    <div class="outest-right-bar"></div>
    <div class="outer-left-bar">
        <div class="left-left-bar"></div>
        <div class="right-left-bar"></div>
        <div class="left-bar">
            <div class="game">Hollow Knighteeeeeeeeeeeeeeeeeeeeeeee</div>
            <div class="achievement-container"><div class="achievement">get money</div><div class="status"></div></div>
            <div class="achievement-container"><div class="achievement">get moneyeeeeeeeeeeeeeeee</div><div class="status"></div></div>
            <div class="achievement-container"><div class="achievement">get moneyeeeeeeeeeeeeeeeeeeeeeee</div><div class="status"></div></div>
            <div class="game">Helldivers 2</div>
            <div class="achievement-container"><div class="achievement">get money</div><div class="status"></div></div>
            <div class="achievement-container"><div class="achievement">get moneyeeeeeeeeeeeeeeee</div><div class="status"></div></div>
            <div class="achievement-container"><div class="achievement">get moneyeeeeeeeeeeeeeeeeeeeeeee</div><div class="status"></div></div>
                <div class="game">Hollow Knighteeeeeeeeeeeeeeeeeeeeeeee</div>
            <div class="achievement-container"><div class="achievement">get money</div><div class="status"></div></div>
            <div class="achievement-container"><div class="achievement">get moneyeeeeeeeeeeeeeeee</div><div class="status"></div></div>
            <div class="achievement-container"><div class="achievement">get moneyeeeeeeeeeeeeeeeeeeeeeee</div><div class="status"></div></div>
            <div class="game">Helldivers 2</div>
            <div class="achievement-container"><div class="achievement">get money</div><div class="status"></div></div>
            <div class="achievement-container"><div class="achievement">get moneyeeeeeeeeeeeeeeee</div><div class="status"></div></div>
            <div class="achievement-container"><div class="achievement">get moneyeeeeeeeeeeeeeeeeeeeeeee</div><div class="status"></div></div>
        </div>
    </div>
    <div class="detailedachievement">
        <div class="detailedachievement-title">get moneyeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee</div>
        <div class="detailedachievement-description">get money by doing random chores and quests around the map get money by doing random chores and quests around the mapget money by doing random chores and quests around the mapget money by doing random chores and quests around the map get money by doing random chores and quests around the map get money by doing random chores and quests around the mapget money by doing random chores and quests around the mapget money by doing random chores and quests around the map get money by doing random chores and quests around the map get money by doing random chores and quests around the mapget money by doing random chores and quests around the mapget money by doing random chores and quests around the map get money by doing random chores and quests around the map get money by doing random chores and quests around the mapget money by doing random chores and quests around the mapget money by doing random chores and quests around the map get money by doing random chores and quests around the map get money by doing random chores and quests around the mapget money by doing random chores and quests around the mapget money by doing random chores and quests around the map get money by doing random chores and quests around the map get money by doing random chores and quests around the mapget money by doing random chores and quests around the mapget money by doing random chores and quests around the map get money by doing random chores and quests around the map get money by doing random chores and quests around the mapget money by doing random chores and quests around the mapget money by doing random chores and quests around the map get money by doing random chores and quests around the map get money by doing random chores and quests around the mapget money by doing random chores and quests around the mapget money by doing random chores and quests around the map</div>
        <div class="detailedachievement-status"></div>
    </div>
    <div class="addachievement">
        <div class="addachievement-name">Voeg een achievement toe</div>
        <form action="php.php" method="POST">
            <input type="text" placeholder="Title" class="addachievement-title" name="title" required>
            <input type="text" placeholder="Game" class="addachievement-game" name="game" required>
            <textarea  class="addachievement-description" placeholder="Description" name="description" required></textarea>
            <button type="submit" class="addachievement-button">Add Achievement</button>
        </form>
    </div>
</body>
</html>