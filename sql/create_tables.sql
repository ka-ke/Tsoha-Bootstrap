-- Lisää CREATE TABLE lauseet tähän tiedostoon
CREATE TABLE Account(
    ID SERIAL PRIMARY KEY,
    username varchar(20) NOT NULL,
    password varchar(20) NOT NULL
);

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
    cardCondition varchar(20) NOT NULL,
    amount INTEGER NOT NULL,
    location varchar(20)
);

CREATE TABLE ValueProgress(
    ID SERIAL PRIMARY KEY,
    valueAt DATE,
    collectorID INTEGER REFERENCES Collection(ID),
    collectionValue INTEGER NOT NULL
);

CREATE TABLE Deck(
    ID SERIAL PRIMARY KEY,
    deckName varchar(20) NOT NULL,
    created DATE,
    collectorID INTEGER REFERENCES Collection(ID),
    decksize INTEGER NOT NULL
);

CREATE TABLE DeckEntry(
    ID SERIAL PRIMARY KEY,
    cardname varchar(20) NOT NULL,
    expansion varchar(20) NOT NULL,
    foil boolean DEFAULT FALSE,
    amount INTEGER NOT NULL,
    mainboard boolean DEFAULT TRUE
),
