CREATE DATABASE IF NOT EXISTS revision;
USE revision;

-- ============================================
-- TABLE ADMIN
-- ============================================
CREATE TABLE admin(
    idAdmin INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- TABLE USER (UTILISATEURS)
-- ============================================
CREATE TABLE user(
    idUser INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    telephone VARCHAR(15) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- TABLE CATEGORIE
-- ============================================
CREATE TABLE categorie(
    idCat INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================
-- TABLE OBJET (SANS idUserCreateur)
-- ============================================
CREATE TABLE objet(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    description TEXT,
    idCat INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idCat) REFERENCES categorie(idCat) ON DELETE SET NULL
);

-- ============================================
-- TABLE IMAGE
-- ============================================
CREATE TABLE image(
    idImg INT AUTO_INCREMENT PRIMARY KEY,
    urlImg VARCHAR(255) NOT NULL,
    idOb INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idOb) REFERENCES objet(id) ON DELETE CASCADE
);

-- ============================================
-- TABLE APPARTENANCE
-- Historique de possession d'un objet
-- Le propriétaire actuel a date_fin = NULL
-- ============================================
CREATE TABLE appartenance(
    idAppart INT AUTO_INCREMENT PRIMARY KEY,
    idObjet INT NOT NULL,
    idUser INT NOT NULL,
    date_debut TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_fin TIMESTAMP NULL,  -- NULL = propriétaire actuel
    FOREIGN KEY (idObjet) REFERENCES objet(id) ON DELETE CASCADE,
    FOREIGN KEY (idUser) REFERENCES user(idUser) ON DELETE CASCADE
);

-- ============================================
-- TABLE PROPOSITION_ECHANGE
-- Propositions d'échange entre utilisateurs
-- ============================================
CREATE TABLE proposition_echange(
    idProp INT AUTO_INCREMENT PRIMARY KEY,
    idObjetPropose INT NOT NULL,      -- L'objet que l'utilisateur propose
    idObjetDemande INT NOT NULL,      -- L'objet que l'utilisateur veut en échange
    idUserProposant INT NOT NULL,     -- L'utilisateur qui fait la proposition
    idUserDestinataire INT NOT NULL,  -- L'utilisateur qui reçoit la proposition
    statut ENUM('en_attente', 'accepte', 'refuse') DEFAULT 'en_attente',
    date_proposition TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_reponse TIMESTAMP NULL,
    FOREIGN KEY (idObjetPropose) REFERENCES objet(id) ON DELETE CASCADE,
    FOREIGN KEY (idObjetDemande) REFERENCES objet(id) ON DELETE CASCADE,
    FOREIGN KEY (idUserProposant) REFERENCES user(idUser) ON DELETE CASCADE,
    FOREIGN KEY (idUserDestinataire) REFERENCES user(idUser) ON DELETE CASCADE
);

-- ============================================
-- TABLE ECHANGE
-- Historique des échanges effectués (acceptés)
-- ============================================
CREATE TABLE echange(
    idEchange INT AUTO_INCREMENT PRIMARY KEY,
    idProp INT NOT NULL,  -- Référence à la proposition acceptée
    idObjet1 INT NOT NULL,
    idObjet2 INT NOT NULL,
    idUser1 INT NOT NULL,
    idUser2 INT NOT NULL,
    date_echange TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idProp) REFERENCES proposition_echange(idProp) ON DELETE CASCADE,
    FOREIGN KEY (idObjet1) REFERENCES objet(id) ON DELETE CASCADE,
    FOREIGN KEY (idObjet2) REFERENCES objet(id) ON DELETE CASCADE,
    FOREIGN KEY (idUser1) REFERENCES user(idUser) ON DELETE CASCADE,
    FOREIGN KEY (idUser2) REFERENCES user(idUser) ON DELETE CASCADE
);