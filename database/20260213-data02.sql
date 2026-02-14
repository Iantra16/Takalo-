CREATE OR REPLACE VIEW v_objet_propri_actuel AS
SELECT 
    o.id AS id_objet,
    o.nom AS nom_objet,
    o.prix,
    o.description,
    o.idCat,
    u.idUser AS id_proprietaire,
    u.email AS nom_proprietaire,
    a.date_debut
FROM objet o
LEFT JOIN appartenance a ON o.id = a.idObjet
LEFT JOIN user u ON a.idUser = u.idUser
WHERE a.date_debut = (
    SELECT MAX(date_debut)
    FROM appartenance
    WHERE idObjet = o.id
);