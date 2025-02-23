DROP DATABASE IF EXISTS yup;
CREATE DATABASE yup;
USE yup;

/* Izveido fruits tabulu */
CREATE TABLE fruits (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fruit_name VARCHAR(255) NOT NULL
);

/* Izveido posts tabulu ar saiti uz fruits */
CREATE TABLE posts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR(5200) NOT NULL,
    category_id INT NULL,
    FOREIGN KEY (category_id) REFERENCES fruits(id) ON DELETE SET NULL
);

/* Ievieto kategorijas */
INSERT INTO fruits (fruit_name) VALUES 
("augļi"), 
("dārzeņi");

/* Ievieto bloga ierakstus ar pareiziem category_id */
INSERT INTO posts (content, category_id) VALUES 
("tomāts", 2), 
("ābols", 1),  
("banāns", 1); 
