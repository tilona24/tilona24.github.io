<?php

if (isset($_POST['name'])) {
    setcookie('Name', $_POST['name']);
    $Person->name = $_POST['name'];
} else {
    $Person->name = $_COOKIE['Name'];
}

?>
<div class="question">So, <?=$Person->name?>, what are you?
</div>

<form action="" method="post" class="choose_race">
    <input type="radio" name="race" value="Human" id="chooseToBeHuman"><label for="chooseToBeHuman"> Human</label><br>
    <input type="radio" name="race" value="Elf" id="chooseToBeElf"> <label for="chooseToBeElf">Elf</label><br>
    <input type="radio" name="race" value="Dwarf" id="chooseToBeDwarf"><label for="chooseToBeDwarf"> Dwarf</label><br>
    <input type="submit" name="submit_race" value="Decide">
</form>
