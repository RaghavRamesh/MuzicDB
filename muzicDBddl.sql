  /*CS2102 Databases Project 
* 
* muzicDBddl.sql 
* SQL DDL Statements
* for MuzicDB
* Done by: Bryan Chu, Raghav, Henry, Aaron, Judan
*
*
*
*/

CREATE TABLE artist (
	artistName VARCHAR(64) NOT NULL,
	id VARCHAR(32)		PRIMARY KEY
);

CREATE TABLE album (
	title VARCHAR(64), 
	artistID VARCHAR(32),

	PRIMARY KEY (title, artistID),
	FOREIGN KEY (artistID) REFERENCES artist(id) ON DELETE RESTRICT ON UPDATE CASCADE
	/* weak entity has no primary key */
);

CREATE TABLE song (
	name VARCHAR(64),		#song name
	title VARCHAR(64),		#album title
	artistID VARCHAR(32),

	composer VARCHAR(64),   #asd ad
	genre VARCHAR(64),
	length INTEGER,			#this will be in seconds
	PRIMARY KEY (name, title, artistID),
	FOREIGN KEY (title, artistID) REFERENCES album(title, artistID) ON DELETE RESTRICT ON UPDATE CASCADE,
	FOREIGN KEY (artistID) REFERENCES artist(id) ON DELETE RESTRICT ON UPDATE CASCADE 
);                #no pri key only in ER diag, in SQL all tables will have pri key! 

CREATE TABLE user (
	name VARCHAR(64),
	email VARCHAR(64)		PRIMARY KEY,
	password VARCHAR(32)
);

CREATE TABLE song_purchase (
	name VARCHAR(64),
	title VARCHAR(64),
	artistID VARCHAR(32),
	price FLOAT(5,2),
	email VARCHAR(64),

	PRIMARY KEY (name, title, artistID, email),
	FOREIGN KEY (name, title, artistID) REFERENCES song(name, title, artistID),
	FOREIGN KEY (email) REFERENCES user(email) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE album_purchase (
	title VARCHAR(64),
	artistID VARCHAR(32),
	price FLOAT(5,2),
	email VARCHAR(64),

	PRIMARY KEY (title, artistID, email),
	FOREIGN KEY (title, artistID) REFERENCES album(title, artistID) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY (email) REFERENCES user(email) ON UPDATE CASCADE ON DELETE RESTRICT
);

/*****INSERTING SOME OF BRYAN'S DATA*******/

#Insert some artists
INSERT INTO artist(artistName, id) VALUES('Regina Spektor', '001');
INSERT INTO artist(artistName, id) VALUES('Capital Cities', '002');
INSERT INTO artist(artistName, id) VALUES('Tensnake', '003');
INSERT INTO artist(artistName, id) VALUES('2NE1', '004');
INSERT INTO artist(artistName, id) VALUES('Yiruma', '005');
INSERT INTO artist(artistName, id) VALUES('Skrillex', '006');
INSERT INTO artist(artistName, id) VALUES('Jon McLaughlin', '007');
INSERT INTO artist(artistName, id) VALUES('Fire Away', '008');
INSERT INTO artist(artistName, id) VALUES('Yngwie J. Malmsteen', '009');
