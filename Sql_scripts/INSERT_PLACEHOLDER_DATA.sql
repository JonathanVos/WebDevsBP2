use WebShop

DELETE FROM Products
DELETE FROM Catogory
DELETE FROM Product_catogories

INSERT INTO Products VALUES (0, 'Stop', 15.95, 'Bord voor als je wilt dat mensen stoppen', 'stop', 25)
INSERT INTO Products VALUES (1, 'Voorangs', 9.95, 'Als je wilt aangeven dat mensen op een weg voorang hebben', 'voorang', 30)
INSERT INTO Products VALUES (2, '50 zone', 7.53, 'Bord voor als je wilt aangeven dat je in een 50km zone rijd. of als een 50 is geworden', '50zone', 3)
INSERT INTO Products VALUES (3, 'Verboden Parkeren', 19.99, 'Bord voor het aangeven dat je aan die kant van de weg niet mag parkeren','verboden_parkeren', 2);
INSERT INTO Products VALUES (4, 'Brand Gevaar', 2.95, 'Bord voor als er een kans op brand is','brandgevaar',100)
INSERT INTO ProductS VALUES (5, 'Betalen Parkeren', 15.55, 'Voor als uw een plek heeft waar mensen moeten betalen om te parkeren', 'betalen_parkeren', 15)

INSERT INTO Catogory VALUES (0, 'Waarschuwings Borden', 'Borden voor als je de mens ergens voor moet waarschuwen')
INSERT INTO Catogory VALUES (1, 'Informatie Borden', 'Borden voor als je de mens informatie wil geven')
INSERT INTO Catogory VALUES (2, 'Verplichten Borden', 'Borden voor als je de mens iets moet doen')

INSERT INTO Product_catogories VALUES (0, 2)
INSERT INTO Product_Catogories VALUES (1, 2)
INSERT INTO Product_Catogories VALUES (2, 2)
