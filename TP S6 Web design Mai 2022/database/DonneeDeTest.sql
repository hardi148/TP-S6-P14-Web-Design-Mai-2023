INSERT INTO Admin (mdp, users) VALUES
('admin1', 'user1'),
('admin2', 'user2'),
('admin3', 'user3');

INSERT INTO typeRemorque (TypeRemorque) VALUES
('Remorque 1'),
('Remorque 2'),
('Remorque 3');

INSERT INTO Vehicule (typeVehicule) VALUES
('Véhicule 1'),
('Véhicule 2'),
('Véhicule 3');


INSERT INTO remorque (immatricule, idTypeRemorque, kilometrage) VALUES
('REM1', 1, 1000.50),
('REM2', 2, 500.25),
('REM3', 3, 750.75);


INSERT INTO Camion (idRemorque, marque, modele, plaque_immatriculation, proprietaire) 
VALUES (1, 'Volvo', 'FH16', 'AB-123-CD', 'Transporteur XYZ');

INSERT INTO Camion (idRemorque,marque, modele, plaque_immatriculation, proprietaire) 
VALUES (2,'Scania', 'R500', 'EF-456-GH', 'Transporteur ABC');

INSERT INTO Camion (idRemorque, marque, modele, plaque_immatriculation, proprietaire) 
VALUES (3, 'Mercedes-Benz', 'Actros', 'IJ-789-KL', 'Transporteur 123');


INSERT INTO Chauffeur (nom, prenom, dateNaissance, NumCIN, NumPermis, Telephone) VALUES
('Dupont', 'Pierre', '1990-01-01', 'AB123456', '123456', '0102030405'),
('Martin', 'Lucie', '1995-05-05', 'CD456789', '789123', '0607080910'),
('Durand', 'Jean', '1985-10-10', 'EF789012', '456789', '0708091011');


INSERT INTO CamionChauffeur (idCamion, idChauffeur) VALUES
(1, 1),
(2, 2),
(3, 3);

INSERT INTO Trajet (trajet, distanceKm) VALUES
('Trajet 1', 100),
('Trajet 2', 200),
('Trajet 3', 300);


INSERT INTO Client (NomClient,nomsociete,adresse,nif,stat) VALUES
('Client 1','societe1','24 Rue Radame','2002661786','0111 11 2017 11'),
('Client 2','societe2','12 Rue Radame','3281965123','0111 11 2017 11'),
('Client 3','societe3','11 Rue Radame','45612333','0111 11 2017 11');


INSERT INTO Facture DEFAULT VALUES;


INSERT INTO Voyage (idClient, idCamion, DateDepart, DateArrivee, idTrajet, DepenseDeplacement, Recette, Poids, TailleConteneur, ConsommationGasoil, Prime, Designation, NumeroConteneur, etat, idFacture) VALUES
(1, 1, '2023-02-20', '2023-02-21', 1, 100, 500, 5000, 50, 100, 50, 'Designation 1', 'Conteneur 1', 0, 1),
(2, 2, '2023-02-20', '2023-02-21', 2, 200, 1000, 10000, 100, 200, 100, 'Designation 2', 'Conteneur 2', 0, 1),
(3, 3, '2023-02-20', '2023-02-21', 3, 300, 1500, 15000, 150, 300, 150, 'Designation 3', 'Conteneur 3', 0, 1);


INSERT INTO PaiementVoyage (idFacture, DatePaiementVoyage, montant) VALUES (1, '2022-12-31', 5000.00);
-- INSERT INTO PaiementVoyage (idFacture, DatePaiementVoyage, montant) VALUES (2, '2023-01-15', 7500.00);
-- INSERT INTO PaiementVoyage (idFacture, DatePaiementVoyage, montant) VALUES (3, '2023-02-01', 10000.00);


INSERT INTO TypeIntervention (TypeIntervention) VALUES ('Vidange');
INSERT INTO TypeIntervention (TypeIntervention) VALUES ('Réparation');
INSERT INTO TypeIntervention (TypeIntervention) VALUES ('Entretien');


INSERT INTO Maintenance (idCamion, dateMaintenance, cout, idTypeIntervention, Observation, Numero_serie, Numero_facture, idClient) VALUES (1, '2022-10-15', 2500.00, 2, 'Changement des freins', '12345', 'ABC123', 1);
INSERT INTO Maintenance (idRemorque, dateMaintenance, cout, idTypeIntervention, Observation, Numero_serie, Numero_facture, idClient) VALUES (1, '2023-01-02', 1500.00, 1, 'Vidange moteur', '67890', 'DEF456', 2);
INSERT INTO Maintenance (idCamion, dateMaintenance, cout, idTypeIntervention, Observation, Numero_serie, Numero_facture, idClient) VALUES (2, '2023-02-10', 3000.00, 3, 'Révision complète', '13579', 'GHI789', 3);


-- Insérer des données de test dans la table Stock
INSERT INTO Stock (idfournisseur,marque, designation, reference, numeroSerie, quantiter, uniter, valeurTotale)
VALUES (1,'Marque A', 'Designation A', 'Ref A', 'Serie A', 10, 'Unité A', 100.00),
       (1,'Marque B', 'Designation B', 'Ref B', 'Serie B', 20, 'Unité B', 50.00),
       (2,'Marque C', 'Designation C', 'Ref C', 'Serie C', 30, 'Unité C', 200.00);


-- Insérer des données de test dans la table MouvementStock
INSERT INTO MouvementStock (idStock, quantiter, observation, numeroSerie, typeMouvement, DateMouvementStock)
VALUES (1, 10, 'Observation 1', 'Serie A', 'entree', '2022-01-01'),
       (1, 2, 'Observation 2', 'Serie A', 'sortie', '2022-01-02'),
       (2, 10, 'Observation 3', 'Serie B', 'entree', '2022-01-03'),
       (3, 15, 'Observation 4', 'Serie C', 'entree', '2022-01-04');
