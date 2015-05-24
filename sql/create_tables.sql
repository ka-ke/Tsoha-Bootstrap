-- Lisää CREATE TABLE lauseet tähän tiedostoon
CREATE TABLE Collection(
    ID SERIAL PRIMARY KEY,
    collector varchar(20) NOT NULL,
);

CREATE TABLE CollectionEntry(
    ID SERIAL PRIMARY KEY,
    added DATE,
    collectorID INTEGER REFERENCES Collection(ID),
    cardname varchar(20) NOT NULL,
    expansion varchar(20) NOT NULL,
    foil boolean DEFAULT FALSE,
    condition varchar(20) NOT NULL,
    amount INTEGER NOT NULL,
    location varchar(20)
);

