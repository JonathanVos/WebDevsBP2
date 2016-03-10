USE WebShop

--DROP TABLE Gebruikers

CREATE TABLE Gebruikers(
	gebruikersnaam 	VARCHAR(15)  NOT NULL,
	voornaam       	VARCHAR(125) NOT NULL,
	tussenvoegsel  	VARCHAR(30)  NULL,
	achternaam     	VARCHAR(125) NOT NULL,
	straatnaam     	VARCHAR(125) NOT NULL,
	huisnummer     	INTEGER      NOT NULL,
	postcode       	CHAR(6)      NOT NULL,
	woonplaats		VARCHAR(125) NOT NULL,
	email 			VARCHAR(50)  NOT NULL,
	geslacht 		CHAR(1)      NOT NULL,
	wachtwoord      VARCHAR(64)  NOT NULL,

	CONSTRAINT PK_GEBRUIKER      PRIMARY KEY (gebruikersnaam),
	CONSTRAINT CK_GEBRUIKERSNAAM CHECK (LEN(gebruikersnaam) >= 1),
	CONSTRAINT CK_VOORNAAM       CHECK (LEN(voornaam) > 0),
	CONSTRAINT CK_ACHTERNAAM     CHECK (LEN(achternaam) >= 0),
	CONSTRAINT CK_WACHTWOORD     CHECK (LEN(wachtwoord) >= 4),
	CONSTRAINT CK_POSTCODE       CHECK (postcode LIKE '[1-9][0-9][0-9][0-9][A-Z][A-Z]'),
	CONSTRAINT CK_GESLACHT       CHECK (geslacht IN ('M', 'V')
));

INSERT INTO Gebruikers VALUES ('barabas', 'Professor', NULL, 'Barabas', 'Bollebozen', 12, '9574EC', 'Amoras', 'barabase@vandersteen.be', 'm', 'teletijdmachine');
INSERT INTO Gebruikers VALUES ('franka', 'Frank', NULL, 'Francesca Victoria', 'Museumstraat', 1, '4920DD', 'Groterdam', 'franka@striphelden.eu', 'v', 'Bars')
INSERT INTO Gebruikers VALUES ('pietjepuk', 'Pietje', NULL, 'Puk', 'Postlaan', 6, '3453AA', 'Keteldorp ', 'pietjepuk@pttpost.nl', 'm', 'spitsoor')
INSERT INTO Gebruikers VALUES ('wdviking', 'Wicky', 'de', 'Viking', 'Whalhalla', 87, '4326BB', 'Flake', 'wicky@halmar.com', 'm', 'ylvi')
--INSERT INTO Gebruikers VALUES ('barabas', 'random', NULL, 'Rendom', 'JeVader', 11, '1234AB', 'Lutjebroek', 'barabas@lutjebroek.nl', 'm', 'ww')