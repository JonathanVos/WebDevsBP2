use WebShop

DELETE FROM Products
DELETE FROM Catogory
DELETE FROM Product_catogories

INSERT INTO Products VALUES (0, 'Stop bord', 15.95, 'Bord voor als je wilt dat mensen stoppen', 'stop', 25)
INSERT INTO Products VALUES (1, 'Voorangs bord', 9.95, 'Als je wilt aangeven dat mensen op een weg voorang hebben', 'voorang', 30)
INSERT INTO Products VALUES (2, '50 zone', 7.50, 'Bord voor als je wilt aangeven dat je in een 50km zone rijd. of als een 50 is geworden', '50zone', 3)

INSERT INTO Catogory VALUES (0, 'Waarschuwings Borden', 'Borden voor als je de mens ergens voor moet waarschuwen')
INSERT INTO Catogory VALUES (1, 'Informatie Borden', 'Borden voor als je de mens informatie wil geven')
INSERT INTO Catogory VALUES (2, 'Verplichten Borden', 'Borden voor als je de mens iets moet doen')

INSERT INTO Product_catogories VALUES (0, 2)

SELECT * 
FROM Products P INNER JOIN Product_catogories PC
ON P.product_id = PC.product_id
INNER JOIN Catogory C
ON C.catogory_id = PC.catogory_id