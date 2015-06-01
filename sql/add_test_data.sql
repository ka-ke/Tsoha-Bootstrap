-- Lisää INSERT INTO lauseet tähän tiedostoon
INSERT INTO Account (username, password) VALUES ('Sami','Lehtinen');
INSERT INTO Collection (collector) VALUES ('Sami');
INSERT INTO CollectionEntry (added, cardname, expansion, foil, cardCondition, amount, location) 
VALUES (NOW(), 'Dark Confidant', 'Modern Masters', true, 'Near-mint', 1, 'Kansiossa');
