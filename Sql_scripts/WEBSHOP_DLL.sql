USE master

IF EXISTS(select * from sys.databases where name='WebShop')
DROP DATABASE WebShop

CREATE DATABASE WebShop

GO

use WebShop

CREATE TABLE Products(
	product_id INT NOT NULL,
	product_name VARCHAR(1000) NOT NULL,
	price DECIMAL(19, 2) NOT NULL,
	description VARCHAR(2000),
	image_name VARCHAR(255), --where to look for the image on the server
	stock INT NOT NULL,

	CONSTRAINT PK_PRODUCT PRIMARY KEY(product_id),
	CONSTRAINT CK_PRODUCT_PRICE CHECK (price >= 0)
)

CREATE TABLE Catogory(
	catogory_id INT NOT NULL,
	name VARCHAR(255) NOT NULL,
	description VARCHAR(2000) NOT NULL,

	CONSTRAINT PK_CATOGORY PRIMARY KEY (catogory_id)
)

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


CREATE TABLE Product_Catogories(
	product_id INT NOT NULL,
	catogory_id INT NOT NULL,

	CONSTRAINT FK_PRODUCT_CATOGORIES_REF_CATOGORY FOREIGN KEY(catogory_id) 
		REFERENCES Catogory (catogory_id)
		ON UPDATE CASCADE
		ON DELETE CASCADE,

	CONSTRAINT FK_PRODUCT_CATOGORIES_REF_PRODUCT FOREIGN KEY(product_id)
		REFERENCES Products (product_id)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
)

GO

CREATE VIEW Product_with_catogory AS
SELECT P.product_id, product_name, P.description,P.price, image_name, stock, C.name AS catogory_name
FROM Products P LEFT JOIN Product_Catogories PC
ON P.product_id = PC.product_id
LEFT JOIN Catogory C
ON C.catogory_id = PC.catogory_id

GO