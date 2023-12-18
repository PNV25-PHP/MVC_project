
create database MVC_Project;
use MVC_Project;
CREATE TABLE IF NOT EXISTS doctors (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    position VARCHAR(255) NOT NULL,
    hospital VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO doctors (name, position, hospital, image) VALUES
('Doctor Name 1', 'Position 1', 'Hospital 1', 'image1.jpg'),
('Doctor Name 2', 'Position 2', 'Hospital 2', 'image2.jpg'),
('Doctor Name 3', 'Position 3', 'Hospital 3', 'image3.jpg');

