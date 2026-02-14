

INSERT INTO admin (username) VALUES ('admin');

INSERT INTO categorie (nom) VALUES
('Food'),
('Books'),
('Clothing');


INSERT INTO objet (nom, prix, description, idCat) VALUES
('Pizza', 9.99, 'Delicious cheese pizza', 1),
('The Great Gatsby', 14.99, 'Classic novel by F. Scott Fitzgerald', 2),
('T-shirt', 19.99, 'Comfortable cotton t-shirt', 3);


INSERT INTO image (urlImg, idOb) VALUES
('images/pizza.jpg', 1),
('images/gatsby.jpg', 2),
('images/tshirt.jpg', 3);

INSERT INTO appartenance (idObjet, idUser, date_debut, date_fin) VALUES 
(1, 1, '2023-01-10 10:00:00', '2024-02-01 15:30:00'),
(1, 2, '2024-02-01 15:30:00', NULL),
(2, 3, '2023-05-20 09:00:00', NULL),
(3, 1, '2024-01-15 11:00:00', NULL);