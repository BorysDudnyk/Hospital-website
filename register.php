<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстратура поліклініки</title>
    <link rel="stylesheet" href="style/reset.css"> 
    <link rel="stylesheet" href="style/register/register_style.css">
</head> 
<body> 
    <div class="header">
        <h1>Реєстратура поліклініки</h1>
    </div>
    <div class="navigation">
        <p><a href="index.php">Головна сторінка лікарні</a></p>
        <p><a href="schedule.php">Розклад роботи лікарні</a></p>
        <p><a href="contact.php">Контактна інформація</a></p>
        <p><a href="">Соціальні Послуги</a></p>
        <p><a href="">Соціальні мережі</a></p>
        <p><a href="">Платні послуги</a></p>
    </div>
    <div >
        <div class="main-container">
            <div class="main-text">
                <h2>Запис на прийом</h2> 
                <p>Для запису на прийом з лікарем необхідно зателефонувати в нашу реєстратуру або відвідати нашу поліклініку особисто. Для зручності, ми також надаємо можливість запису на прийом через наш веб-сайт.</p> 
                <div class="contact">

                    <!--<form method="get">
                        <label for="name">Ім'я:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="surname">Прізвище:</label>
                        <input type="text" id="surname" name="surname" required>

                        <label for="phone">Телефон:</label>
                        <input type="tel" id="phone" name="phone" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="doctor">Лікар:</label>
                        <select id="doctor" name="doctor" required>
                            <option value="">Виберіть лікаря</option>
                            <option value="Лікар 1">Доктор Сміт</option>
                            <option value="Лікар 2">Доктор Гарсіа</option>
                            <option value="Лікар 3">Доктор Браун</option>
                        </select>
                        <button><p>Записатися</p></button>
                    </form>-->

                    <form method="get">
                        <label>Ім'я:</label> <br>
                        <input type="text" name="name" required> 

                        <label>Прізвище:</label> <br>
                        <input type="text" name="surname" required> 
                        
                        <label>Телефон:</label> <br>
                        <input type="tel" name="phone" required> 

                        <label>Email:</label> <br>
                        <input type="email" name="email" required> 

                        <label>Виберіть лікаря</label> <br>
                        <select type="text" name="doctor" required>
                            <option>Виберіть лікаря</option>
                            <option>Доктор Сміт</option>
                            <option>Доктор Гарсіа</option>
                            <option>Доктор Браун</option>
                        </select> 
                        <br>
                        <input type="submit" name="formSubmit" value="Відправити">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <div class="contacts">
            <h3>Контакти:</h3>
            <p> 555-1234</p>
            <p>777-4321</p>
        </div>
        <div class="mail">
            <h3>Пошта:</h3>
            <p>info@polyclinick.com</p>
        </div>
        <div class="address">
            <h3>Адреса:</h3>
            <p>м. Херсон</p>
            <p>вул. Поліклініки, 1</p>
        </div>
        <div class="schedule">
            <h3>Розклад роботи:</h3>
            <p>Понеділок-П'ятниця: 8:00 - 20:00</p>
            <p>Субота-Неділя: 10:00 - 16:00</p>
        </div>
    </div>
</body> 
</html>

<?php
if(isset($_GET['formSubmit'])) {
    $name = $_GET["name"];
    $surname = $_GET['surname'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $doctor = $_GET['doctor'];
    $mysqli = new mysqli("localhost", "root", "", "hospital_website");
    if ($mysqli->connect_errno) {
        echo "Вибачте, виникла помилка на сайті";
        exit;
    }
    $name = $mysqli->real_escape_string($name);
    $surname = $mysqli->real_escape_string($surname);
    $phone = $mysqli->real_escape_string($phone);
    $email = $mysqli->real_escape_string($email);
    $doctor = $mysqli->real_escape_string($doctor);
    $query = "INSERT INTO registration (name,surname,phone,email,doctor) VALUES ('$name','$surname','$phone','$email','$doctor')";
    $result = $mysqli->query($query);
    if ($result) {
        print('Реєстрація пройшла успішно !'. '<br>');
    } else {
        echo "Помилка виконання запиту: " . $mysqli->error;
    }
    $mysqli->close();
}
?>