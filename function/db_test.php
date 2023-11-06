<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label>Введіть ваше ім'я</label> <br>
        <input type="text" name="name"> <br>

        <label>Введіть ваш вік</label> <br>
        <input type="number" name="age"> <br>
        <br>
        <input type="submit" name="formSubmit" value="Відправити">
    </form>
</body>
</html>

<?php
    if(isset($_GET['formSubmit'])) {
        $name=$_GET["name"];
        $age=$_GET['age'];
        $mysqli = new mysqli("localhost", "root", "", "test");
        if ($mysqli->connect_errno) {
            echo "Вибачте, виникла помилка на сайті";
            exit;
        }
        $name = $mysqli->real_escape_string($name);
        $age = $mysqli->real_escape_string($age);
        $query="INSERT INTO users (name,age) VALUES ('$name','$age')";
        $result=$mysqli->query($query);
        if ($result) {
            print('Реестрація пройшла успішно !'. '<br>');
        }
        $mysqli->close();
    }
?>