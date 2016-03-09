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