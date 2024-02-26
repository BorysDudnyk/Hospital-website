<?php
    include('./function/db_connect.php');
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Успішна реєстрація</title>
    <link rel="stylesheet" href="style/cor.css">
</head>
<body>
    <div class="main-container">
        <h1> Успішне завершення реєстрації </h1>
        <h2> Дякуємо, що звернулися саме до нашої лікарні</h2>
        <h3>Очікуйте відповіді на електронну пошту</h3> 
        <button><a href="index.php">Повернутися на головну сторінку</a></button>
    </div>
    
    <?php
        // Перевірка, чи дані були надіслані методом POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Отримання даних з форми
            $name = $_POST["name"];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $doctor = $_POST['doctor'];
            $appointmentDay = $_POST['appointmentDay'];
            $appointmentTime = $_POST['appointmentTime'];

            // Підготовка та виконання запиту на вставку даних у базу даних
            $query = "INSERT INTO registration (name, phone, email, doctor, appointmentDay, appointmentTime) 
                    VALUES ('$name', '$phone', '$email', '$doctor', '$appointmentDay', '$appointmentTime')";
            
            // Виконання запиту
            if ($mysqli->query($query) === TRUE) {
                echo "";
            } else {
                echo "Помилка: " . $query . "<br>" . $mysqli->error;
            }
        }

        // Закриття підключення до бази даних
        $mysqli->close();
    ?>
</body>
</html>
