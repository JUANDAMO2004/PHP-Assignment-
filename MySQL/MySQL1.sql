Create database PHP_database;
Use PHP_database;
Create table players_login(
id INT AUTO_INCREMENT PRIMARY KEY,
name varchar(255) NOT NULL,
lastname varchar(255) NOT NULL,
email varchar(255) NOT NULL,
password CHAR(60) NOT NULL
);

