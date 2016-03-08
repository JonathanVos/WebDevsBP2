USE master

IF EXISTS(select * from sys.databases where name='WebShop')
DROP DATABASE WebShop

CREATE DATABASE WebShop

GO

use WebShop

CREATE TABLE Products(
	product_id INT,
	product_name VARCHAR(1000),
	price DECIMAL(19, 2),
	description VARCHAR(2000),

	CONSTRAINT PK_PRODUCT PRIMARY KEY(product_id),
	CONSTRAINT CK_PRODUCT_PRICE CHECK (price >= 0)
)