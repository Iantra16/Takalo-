-- CREATE TABLE admin(
--     idAdmin INT AUTO_INCREMENT PRIMARY KEY,
--     username VARCHAR(50) NOT NULL UNIQUE,
--     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
-- );

INSERT INTO admin (username) VALUES ('admin');

-- CREATE TABLE categorie(
--     idCat INT AUTO_INCREMENT PRIMARY KEY,
--     nom VARCHAR(100) NOT NULL UNIQUE,
--     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
-- );

INSERT INTO categorie (nom) VALUES
('Food'),
('Books'),
('Clothing');


-- CREATE TABLE objet(
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     nom VARCHAR(100) NOT NULL,
--     prix DECIMAL(10,2) NOT NULL,
--     description TEXT,
--     idCat INT,
--     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
--     FOREIGN KEY (idCat) REFERENCES categorie(idCat) ON DELETE SET NULL
-- );
INSERT INTO objet (nom, prix, description, idCat) VALUES
('Pizza', 9.99, 'Delicious cheese pizza', 1),
('The Great Gatsby', 14.99, 'Classic novel by F. Scott Fitzgerald', 2),
('T-shirt', 19.99, 'Comfortable cotton t-shirt', 3);

-- CREATE TABLE image(
--     idImg INT AUTO_INCREMENT PRIMARY KEY,
--     urlImg VARCHAR(255) NOT NULL,
--     idOb INT,
--     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
--     FOREIGN KEY (idOb) REFERENCES objet(id) ON DELETE CASCADE
-- );

INSERT INTO image (urlImg, idOb) VALUES
('images/pizza.jpg', 1),
('images/gatsby.jpg', 2),
('images/tshirt.jpg', 3);

INSERT INTO appartenance (idObjet, idUser, date_debut, date_fin) VALUES 
(1, 1, '2023-01-10 10:00:00', '2024-02-01 15:30:00'),
(1, 2, '2024-02-01 15:30:00', NULL),
(2, 3, '2023-05-20 09:00:00', NULL),
(3, 1, '2024-01-15 11:00:00', NULL);