-- ============================================
-- VIEW: OBJETS + CATEGORIE + PROPRIETAIRE ACTUEL
-- Pour getObjetsNotOwnedBy et getObjetsOwnedBy
-- ============================================
CREATE OR REPLACE VIEW v_objet_owner AS
SELECT
    o.id,
    o.nom,
    o.prix,
    o.description,
    o.idCat,
    o.created_at,
    c.nom AS categorie_nom,
    a.idUser AS user_id
FROM objet o
INNER JOIN appartenance a ON a.idObjet = o.id AND a.date_fin IS NULL
LEFT JOIN categorie c ON o.idCat = c.idCat;

-- ============================================
-- VIEW: OBJETS + CATEGORIE + PROPRIETAIRE COMPLET
-- Pour getObjetById avec infos du proprietaire
-- ============================================
CREATE OR REPLACE VIEW v_objet_detail AS
SELECT
    o.id,
    o.nom,
    o.prix,
    o.description,
    o.idCat,
    o.created_at,
    c.nom AS categorie_nom,
    u.idUser AS proprietaire_id,
    u.nom AS proprietaire_nom,
    u.prenom AS proprietaire_prenom,
    u.email AS proprietaire_email,
    u.telephone AS proprietaire_telephone
FROM objet o
LEFT JOIN categorie c ON o.idCat = c.idCat
LEFT JOIN appartenance a ON a.idObjet = o.id AND a.date_fin IS NULL
LEFT JOIN user u ON a.idUser = u.idUser;
