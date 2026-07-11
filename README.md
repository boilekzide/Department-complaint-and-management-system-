## Project Team

**Project Title:** Departmental Complaint Management System (DCMS)

**Institution:** LAUTECH

**Course Code:** CYB 104

**Academic Session:** Rain Semester

### Group Members

| S/N | Name | Role |
|-----|---------------------------------------------|----------------|
| 1 | Ayinde Ifeoluwa Daniel | Group Member |
| 2 | Olaadua Khalid Tomilola | Group Member |
| 3 | Abdulsalam Qoyum Opeyemi | Group Member |
| 4 | Dipeolu Amal Titilope | Group Member |
| 5 | Foluwase Daniel Oluwasorefunmi | Group Member |
| 6 | Onyemauchechi ChukwuEbuka Samuel | Group Member |
| 7 | Akinrolabu Omolade Adufe | Group Member |
| 8 | David Ayomide Owoso | Group Member |
| 9 | **Adebodun Olalekan Shamsudeen** | **Group Leader** |
| 10 | Abdulazeez Faizah Feranmi | Group Member |
| 11 | Oyegoke Henry Timothy | Group Member |
| 12 | Oyesiji Obaloluwa David | Group Member |
| 13 | Abdussalam Abdulazeem | Group Member |
| 14 | Aderibigbe Muhammed Ola | Group Member |
| 15 | Mobolaji Kanyinsola Edith | Group Member |
| 16 | Ojo Emmanuel Oluwasetemi | Group Member |
| 17 | Olawale Olaitan Ezekiel | Group Member |
| 18 | Aluko Zainab Kehinde | Group Member |
| 19 | Bakare Farouk Adebola | Group Member |
| 20 | Olaleye Damilare Precious | Group Member |

---

## Supervisor

**Tutor:** Senior Ibukunoluwa

---

## License

This project was developed for academic purposes as a Second Semester Group Project. It is intended solely for educational use.

---

## Acknowledgements

We sincerely appreciate our lecturer for providing the project requirements and guidance throughout the development process.

Special appreciation goes to every member of the Departmental Complaint Management System (DCMS) development team for their collaboration, commitment, and contributions toward the successful completion of this project.
# 🚀 How to Run the Project

Follow the steps below to run the Departmental Complaint Management System on your local machine.

## Prerequisites

Ensure you have the following installed:

- XAMPP (Apache & MySQL)
- PHP 8.x
- MySQL
- A web browser (Google Chrome, Microsoft Edge, Firefox, etc.)
- Git (optional, for cloning the repository)

## Installation Steps

### 1. Clone the Repository

```bash
git clone https://github.com/boilekzide/Department-complaint-and-management-system-.git
```

Or download the project as a ZIP file and extract it.

### 2. Move the Project

Copy the project folder into the XAMPP `htdocs` directory.

Example:

```
C:\xampp\htdocs\Department-Complaint-and-Management-System
```

### 3. Start XAMPP

Open the XAMPP Control Panel and start:

- Apache
- MySQL

### 4. Create the Database

Open phpMyAdmin:

```
http://localhost/phpmyadmin
```

Create a new database named:

```
complaint_system
```

### 5. Import the Database

1. Open the `complaint_system` database.
2. Click **Import**.
3. Select the `database/complaint_system.sql` file.
4. Click **Go**.

### 6. Configure the Database Connection

Open:

```
config/db_connect.php
```

Ensure the database credentials are correct.

Example:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "complaint_system";
```

### 7. Create an Admin Account

Run the following in your browser:

```
http://localhost/Department-Complaint-and-Management-System/create_admin.php
```

This creates the default administrator account.

### 8. Open the Application

Visit:

```
http://localhost/Department-Complaint-and-Management-System/
```

The application is now ready to use.

## Default Admin Login

Username:

```
admin1
```

Password:

```
123456
```

> **Note:** Change the default password after the first login for better security.

## Student Registration

Students should create their own accounts using the registration page before logging in.

## Technologies Used

- PHP
- MySQL
- HTML5
- CSS3
- JavaScript
- XAMPP
- Git
- GitHub
  ## Project Structure

```
Department-Complaint-and-Management-System/
│
├── admin/
├── student/
├── config/
├── includes/
├── assets/
├── database/
│   └── complaint_system.sql
├── create_admin.php
├── index.php
└── README.md
```
