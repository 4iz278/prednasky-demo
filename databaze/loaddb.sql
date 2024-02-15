# 
# Soubor pro vytvoření testovacích tabulek

#DROP TABLE Odberatele;

#
# Table structure for table 'Odberatele'
#
CREATE TABLE Odberatele (
  ICO char(8) NOT NULL,
  Nazev varchar(40),
  Sidlo varchar(60),
  Zastupce int,
  PRIMARY KEY (ICO)
);

#
# Dumping data for table 'Odberatele'
#

INSERT INTO Odberatele VALUES ('56479245','Omicron','nám. Karla IV. 13, Dobříš',2021);
INSERT INTO Odberatele VALUES ('71435984','Houska & syn','Běrunice 17, Kralupy n/Vltavou',1230);
INSERT INTO Odberatele VALUES ('77833216','Megakix','Přípotoční 875/91, Praha 13',1230);
INSERT INTO Odberatele VALUES ('78981236','GAS-Trade','Plynárenská 17, Praha 4',1230);
INSERT INTO Odberatele VALUES ('89746674','Novozdroj','Pražská 67, Plzeň',2987);
INSERT INTO Odberatele VALUES ('89792245','Quarantino','Beskydská 76, Bruntál',2021);
INSERT INTO Odberatele VALUES ('89894625','Elektromix','U průhonu 16, Praha 7',4598);

#DROP TABLE Proj_Zam;

#
# Table structure for table 'Proj_Zam'
#
CREATE TABLE Proj_Zam (
  ID_Projektu char(6) NOT NULL,
  OsobniCislo int NOT NULL,
  PRIMARY KEY (ID_Projektu,OsobniCislo)
);

#
# Dumping data for table 'Proj_Zam'
#

INSERT INTO Proj_Zam VALUES ('X97013',1230);
INSERT INTO Proj_Zam VALUES ('X97013',2021);
INSERT INTO Proj_Zam VALUES ('X97020',1230);
INSERT INTO Proj_Zam VALUES ('X98007',2021);
INSERT INTO Proj_Zam VALUES ('X98007',2022);

#DROP TABLE Projekty;

#
# Table structure for table 'Projekty'
#
CREATE TABLE Projekty (
  ID char(6) NOT NULL,
  Nazev varchar(60),
  Ukonceni datetime,
  PRIMARY KEY (ID)
);

#
# Dumping data for table 'Projekty'
#

INSERT INTO Projekty VALUES ('Q97416','Testování vozů značky Speedy-wheel','1997-04-15 00:00:00');
INSERT INTO Projekty VALUES ('X97013','Reklamní kampaň na brzdové destičky','1997-07-16 00:00:00');
INSERT INTO Projekty VALUES ('X97020','Reklamní videoklip na sedan Speedy-wheel','1997-06-30 00:00:00');
INSERT INTO Projekty VALUES ('X98007','Fotoalbum Šeredky Hrůzné','1998-06-05 00:00:00');

#DROP TABLE Zamestnanci;

#
# Table structure for table 'Zamestnanci'
#
CREATE TABLE Zamestnanci (
  OsobniCislo int NOT NULL,
  Jmeno varchar(40),
  RC char(11),
  Adresa varchar(60),
  Plat decimal(10,2),
  PRIMARY KEY (OsobniCislo)
);

#
# Dumping data for table 'Zamestnanci'
#

INSERT INTO Zamestnanci VALUES (1023,'Novák Jan','561220/0235','Levá 13, Praha 4',12000.00);
INSERT INTO Zamestnanci VALUES (1164,'Procházka Karel','630717/0158','Dlouhá 75, Praha 1',10500.00);
INSERT INTO Zamestnanci VALUES (1168,'Novotná Alena','735612/0456','Radlická 1523/17, Praha 5',9500.00);
INSERT INTO Zamestnanci VALUES (1230,'Klíma Josef','430925/123','Korunní 17, Praha 2',15000.00);
INSERT INTO Zamestnanci VALUES (1564,'Pinkas Josef','681013/0987','Slezská 97, Praha 2',13195.00);
INSERT INTO Zamestnanci VALUES (2021,'Kládová Adéla','735214/0031','Puškinova 13, Chomutov',8500.00);
INSERT INTO Zamestnanci VALUES (2022,'Pluháček Karel','541206/0362','K háji 27, Dobronice',10500.00);

