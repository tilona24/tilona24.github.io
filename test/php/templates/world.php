<?php

$Hero = '';

if ($_COOKIE['Race'] == 'Human') {
    $Hero = new Human();
    switch ($_COOKIE['Gender']) {
        case 'Female':
            $Hero->face = 'female_human';
            break;
        case 'Male':
            $Hero->face = 'male_human';
            break;
    }
} elseif ($_COOKIE['Race'] == 'Elf') {
    $Hero = new Elf();
    switch ($_COOKIE['Gender']) {
        case 'Female':
            $Hero->face = 'female_elf';
            break;
        case 'Male':
            $Hero->face = 'male_elf';
            break;
    }
} elseif ($_COOKIE['Race'] == 'Dwarf') {
    $Hero = new Dwarf();
    switch ($_COOKIE['Gender']) {
        case 'Female':
            $Hero->face = 'female_dwarf';
            break;
        case 'Male':
            $Hero->face = 'male_dwarf';
            break;
    }
}

$Hero->name   = $_COOKIE['Name'];
$Hero->race   = $_COOKIE['Race'];
$Hero->gender = $_COOKIE['Gender'];

echo '<div class="container">';
for ($row = 0; $row <= 12; $row++) {
    echo '<div class="row">';
    for ($col = 0; $col <= 8; $col++) {
        echo '<div class=\'col\'>';
        switch ($Hero->race) {
            case 'Human':

                ?>
                <img src="img/texture/sand.png" alt="sand">
                <?php
                break;
            case 'Elf':
                ?>
                <img src="img/texture/gras.png" alt="sand">
                <?php
                break;
            case 'Dwarf':
                ?>
                <img src="img/texture/stone.png" alt="sand">
                <?php
                break;
        }
        echo '</div>';
    }
    echo '</div>';
}
echo '</div>';
?>
    <div class="character col">
        <img src="img/characters/<?=$Hero->face?>.png" alt="Hero">
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

<?php

$Hero->walk();