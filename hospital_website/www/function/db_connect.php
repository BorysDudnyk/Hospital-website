<?php

    $mysqli = new mysqli("localhost", "root", "", "hospital_website");
    if ($mysqli->connect_errno) {
        echo "Вибачте, виникла помилка на сайті";
        exit;
    }

?>