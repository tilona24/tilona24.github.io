<?php
include 'php/Person.php';
include 'php/Human.php';
include 'php/Elf.php';
include 'php/Dwarf.php';

$Person = new Person();

if (isset($_POST['submit_name'])) {
    $switch = 'submitted_name';
} elseif (isset($_POST['submit_race'])) {
    $switch = 'submitted_race';
} elseif (isset($_POST['submit_gender'])) {
    $switch = 'submitted_gender';
} elseif (isset($_POST['start'])) {
    $switch = 'submitted_start';
} else {
    $switch = 'opened_game';
}

switch ($switch) {

    case 'opened_game':
        include('php/templates/enter_name.php');
        break;

    case 'submitted_name':
        include 'php/templates/choose_race.php';
        break;

    case 'submitted_race':
        include 'php/templates/choose_gender.php';
        break;

    case 'submitted_gender':
        include 'php/templates/everythings_chosen.php';
        break;

    case 'submitted_start':
        include 'php/templates/world.php';
        break;
}

?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Homemade+Apple" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Test</title>
</head>
<body>
<div class="background"></div>

</body>
</html>

