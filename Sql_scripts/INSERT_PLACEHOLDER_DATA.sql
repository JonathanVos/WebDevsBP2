use WebShop

DELETE FROM Products
DELETE FROM Catogory
DELETE FROM Product_catogories

INSERT INTO Products VALUES (0, 'Stopbord', 15.95, 'Bord voor als je wilt dat mensen stoppen', 'stop', 25)
INSERT INTO Products VALUES (1, 'Voorrangsbord', 9.95, 'Als je wilt aangeven dat mensen op een weg voorrang hebben', 'voorang', 30)
INSERT INTO Products VALUES (2, '50 zonebord', 7.53, 'Bord voor als je wilt aangeven dat je in een 50km zone rijdt, of als het een 50km zone is geworden', '50zone', 3)
INSERT INTO Products VALUES (3, 'Verboden Parkeren', 19.99, 'Bord voor het aangeven dat je aan die kant van de weg niet mag parkeren','verboden_parkeren', 2);
INSERT INTO Products VALUES (4, 'Brandgevaar', 2.95, 'Bord voor als er een kans op brand is','brandgevaar',100)
INSERT INTO ProductS VALUES (5, 'Betaald Parkeren', 15.55, 'Voor als u een plek heeft waar mensen moeten betalen om te parkeren', 'betalen_parkeren', 15)

INSERT INTO Catogory VALUES (0, 'Waarschuwingsborden', 'Borden voor als je een persoon ergens voor moet waarschuwen')
INSERT INTO Catogory VALUES (1, 'Informatieborden', 'Borden voor als je een persoon informatie wil geven')
INSERT INTO Catogory VALUES (2, 'Verplichtingsborden', 'Borden voor als personen iets moeten doen')

INSERT INTO Product_catogories VALUES (4, 0) --Brandgevaar in waarschuwing
INSERT INTO Product_Catogories VALUES (5, 1) --Betaald parkeren in informatie 
INSERT INTO Product_Catogories VALUES (0, 2)
INSERT INTO Product_Catogories VALUES (1, 2)
INSERT INTO Product_Catogories VALUES (2, 2)
INSERT INTO Product_Catogories VALUES (3, 2)
