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