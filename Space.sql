

-- ENTITIES - missing foreign key descriptions
CREATE TABLE Alien
   (
    aID INTEGER(5) not NULL,
     aName  VARCHAR(200)not NULL,
     PRIMARY KEY  (aID), 
     comes_from VARCHAR(20) not NULL REFERENCES Planet(pID) -- FOREIGN KEY Planet  -- 

     )

CREATE TABLE login
(
	userid VARCHAR(20) not NULL,
	password VARCHAR(20) not NULL,
	PRIMARY KEY (userid)
)

CREATE TABLE Soldier
   (alien_aID INTEGER(5) not NULL REFERENCES Alien(aID),
   	type VARCHAR(200) not NULL,
   	PRIMARY KEY  (alien_aID)
      )

   CREATE TABLE Worker
   (alien_aID INTEGER(5) not NULL REFERENCES Alien(aID),
   	speciality VARCHAR(200) not NULL,
   	PRIMARY KEY  (alien_aID)
      )

CREATE TABLE Planet
   (pID INTEGER(5) not NULL,
     pName  VARCHAR(200) not NULL,
     PRIMARY KEY  (pID) )

   CREATE TABLE Land
   (lID INTEGER(5)  not NULL,
    location  VARCHAR(200) not NULL,
    lName VARCHAR(200) not NULL,
    owned_by VARCHAR(20) not NULL REFERENCES Worker(alien_aD), -- Foreign key Land -- land must be owned by a worker
	located VARCHAR(20) not NULL REFERENCES Planet(pID), -- FOREIGN KEY Planet
     PRIMARY KEY  (lID) )



   CREATE TABLE Resource
   (rID INTEGER(5) not NULL,
     rName  INTEGER(200) not NULL,
     PRIMARY KEY  (rID) )



CREATE TABLE Mineral
   (resource_rID INTEGER(5) not NULL REFERENCES Resource(rID),
   	rareness VARCHAR(200) not NULL,
   	PRIMARY KEY  (resource_rID)
      )

   CREATE TABLE Nutrition
   (resource_rID INTEGER(5) not NULL REFERENCES Resource(rID),
   	quality VARCHAR(200) not NULL,
   	PRIMARY KEY  (resource_rID)
      )


   
	CREATE TABLE Gun
	   (gID INTEGER(5) not NULL,
	     gName  VARCHAR(200) not NULL,
	     belongs_to VARCHAR(20) not NULL REFERENCES Soldier(alien_aID),
	     PRIMARY KEY  (gID) )

   
-- RELATIONS missing lots of things


CREATE TABLE made_of -- between gun and mimeral has when as attribute
   ( pDate VARCHAR(20),
    rID VARCHAR(20) not NULL REFERENCES Mineral(resource_rID),
    gID VARCHAR(20) not NULL REFERENCES Gun(gID),
    PRIMARY KEY  (rID,gID)
    )



CREATE TABLE yield -- betwewen land an resource 
(
	rID VARCHAR(20) not NULL REFERENCES Resource(rID),
	lID VARCHAR(20) not NULL REFERENCES Land(lID),
	PRIMARY KEY (rID,LID)
	)

   
