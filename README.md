# Hospital Website

A hospital website with the ability to view doctors' schedules, contact information, and register for appointments online.  
The project was developed using HTML, CSS, JavaScript, PHP, and MySQL.

## Features

- Home page with hospital information
- Doctors schedule page
- Online appointment registration
- Doctor, day, and appointment time selection
- Patient data storage in MySQL database
- Display of registered consultations
- Contact information page
- Responsive interface

---

## Development Tools

![VS Code](https://img.shields.io/badge/VS%20Code-blue?style=for-the-badge&logo=visualstudiocode&logoColor=white)
![OpenServer](https://img.shields.io/badge/OpenServer-black?style=for-the-badge&logo=windows&logoColor=white)
![phpMyAdmin](https://img.shields.io/badge/phpMyAdmin-red?style=for-the-badge&logo=phpmyadmin&logoColor=white)
![Git](https://img.shields.io/badge/Git-black?style=for-the-badge&logo=git&logoColor=white)
![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)

---

## Technologies

![HTML5](https://img.shields.io/badge/HTML5-orange?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-blue?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-yellow?style=for-the-badge&logo=javascript&logoColor=black)
![PHP](https://img.shields.io/badge/PHP-purple?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-lightblue?style=for-the-badge&logo=mysql&logoColor=black)

---

## Project Structure

### Main Pages

- `index.php` — hospital home page
- `register.php` — appointment registration page
- `schedule.php` — doctors schedule page
- `contact.php` — contact information page
- `Completion_of_registration.php` — successful registration page

### Database

- `hospital_website.sql` — SQL file for creating the database and the `registration` table

### Scripts

- `day_and_time_of_reception.js` — logic for selecting appointment day and time

### Styles

- `reset.css` — browser default styles reset
- CSS files for individual pages

### Database Connection

- `db_connect.php` — MySQL database connection file

---

## Database

The project uses a MySQL database named `hospital_website`.

### `registration` Table

| Field | Type |
|---|---|
| name | TEXT |
| phone | VARCHAR(255) |
| email | VARCHAR(100) |
| doctor | TEXT |
| appointmentDay | VARCHAR(99) |
| appointmentTime | VARCHAR(99) |

---

## Screenshots

### Home Page
![Home Page](screenshot/ScreenShotTool-1.png)

### Appointment Registration
![Register Page](screenshot/ScreenShotTool-2.png)

### Doctors Schedule
![Schedule Page](screenshot/ScreenShotTool-3.png)

---

## Installation and Setup

### 1. Clone the Repository

```bash
git clone https://github.com/BorysDudnyk/Hospital-website
```

### 2. Import the Database

Import the following file into phpMyAdmin or MySQL:

```bash
registration.sql
```

### 3. Configure Database Connection

Edit the file:

```php
/function/db_connect.php
```

Example:

```php
$mysqli = new mysqli("localhost", "root", "", "hospital_website");
```

---

## Run the Project

Start a local server using one of the following:

- XAMPP
- OpenServer

Then open in your browser:

```bash
http://localhost/Hospital-website
```

---

## Main System Features

### Appointment Registration

Users can:

- enter full name
- enter phone number
- enter email
- choose a doctor
- choose an appointment day
- choose an available time slot

After submitting the form, the data is saved to the MySQL database.

### Doctors Schedule

The `schedule.php` page contains a weekly doctors schedule.

### Dynamic Time Selection

JavaScript automatically:

- updates available days
- displays available appointment times
- updates the form without page reload
