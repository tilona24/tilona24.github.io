<?php

if (isset($_POST['gender'])) {
    setcookie('Gender', $_POST['gender']);
    $Person->gender = $_POST['gender'];
    } else {
    $Person->gender = $_COOKIE['gender'];
}

?>

<div class="reaction">
    Alright, <?=$_COOKIE['Name']?>. So you're a <?=$Person->gender.' '.$_COOKIE['Race']?>.
</div>

<form action="" method="post" class="start">
    <input type="submit" name="start" value="Start Game">
</form>
