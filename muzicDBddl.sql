  /*CS2102 Databases Project 
* 
* muzicDBddl.sql 
* SQL DDL Statements & DML Statements
* for MuzicDB
* Done by: Bryan Chu, Raghav, Henry, Aaron, Judan
*
*
*
*/
#DDL
CREATE TABLE artist (
	artistName VARCHAR(64) NOT NULL UNIQUE,
	id VARCHAR(32)		PRIMARY KEY
);

CREATE TABLE album (
	title VARCHAR(64), 
	artistID VARCHAR(32),

	PRIMARY KEY (title, artistID),
	FOREIGN KEY (artistID) REFERENCES artist(id) ON DELETE CASCADE ON UPDATE CASCADE
	/* weak entity has no primary key */
);

CREATE TABLE song (
	name VARCHAR(64),		#song name
	title VARCHAR(64),		#album title
	artistID VARCHAR(32),

	composer VARCHAR(64),   
	genre VARCHAR(64),
	length INTEGER,			#this will be in seconds
	PRIMARY KEY (name, title, artistID),
	FOREIGN KEY (title, artistID) REFERENCES album(title, artistID) ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY (artistID) REFERENCES artist(id) ON DELETE CASCADE ON UPDATE CASCADE 
);                #no pri key only in ER diag, in SQL all tables will have pri key! 

CREATE TABLE user (
	name VARCHAR(64),		NOT NULL UNIQUE 
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
	FOREIGN KEY (name, title, artistID) REFERENCES song(name, title, artistID) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (email) REFERENCES user(email) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE album_purchase (
	title VARCHAR(64),
	artistID VARCHAR(32),
	price FLOAT(5,2),
	email VARCHAR(64),

	PRIMARY KEY (title, artistID, email),
	FOREIGN KEY (title, artistID) REFERENCES album(title, artistID) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY (email) REFERENCES user(email) ON UPDATE CASCADE ON DELETE CASCADE
);

/*****INSERTING SOME OF BRYAN'S DATA*******/
#DML

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

INSERT INTO album(title, artistID) VALUES('In a Tidal Wave of Mystery','002');
INSERT INTO album(title, artistID) VALUES('Glow','003');
INSERT INTO album(title, artistID) VALUES('Crush','004');
INSERT INTO album(title, artistID) VALUES('Healing Piano','005');
INSERT INTO album(title, artistID) VALUES('Stay In Memory','005');
INSERT INTO album(title, artistID) VALUES('Recess','006');
INSERT INTO album(title, artistID) VALUES('Holding My Breath','007');
INSERT INTO album(title, artistID) VALUES('The Greatest Hits - EP - Single','008');
INSERT INTO album(title, artistID) VALUES('Spellbound','009');

#Insert some songs, up to the first one by Yngwie J. Malmsteen
INSERT INTO song(name, title, artistID, composer, genre, length)
VALUES('Kangaroo Court', 'In a Tidal Wave of Mystery', '002', 'Capital Cities', 'Alternative', 180);

INSERT INTO song(name, title, artistID, composer, genre, length)
VALUES('I Sold My Bed, But Not My Stereo', 'In a Tidal Wave of Mystery', '002', 'Capital Cities', 'Alternative', 183);

INSERT INTO song(name, title, artistID, composer, genre, length)
VALUES('Love Sublime', 'Glow', '003', 'Tensnake', 'Dance', 192);

INSERT INTO song(name, title, artistID, composer, genre, length)
VALUES('Ten Minutes', 'Glow', '003', 'Tensnake', 'Dance', 192);

INSERT INTO song(name, title, artistID, composer, genre, length)
  VALUES('Come Back Home', 'Crush', '004', '2NE1', 'Pop', 232);

INSERT INTO song(name, title, artistID, composer, genre, length)
VALUES('River Flows in You', 'Healing Piano', '005', 'Yiruma', 'New Age', 184);

INSERT INTO song(name, title, artistID, composer, genre, length)
VALUES('May Be', 'Healing Piano', '005', 'Yiruma', 'New Age', 184);

INSERT INTO song(name, title, artistID, composer, genre, length)
VALUES('Silver Line', 'Stay In Memory', '005', 'Yiruma', 'New Age', 194);

INSERT INTO song(name, title, artistID, composer, genre, length)
VALUES('Recess', 'Recess', '006', 'Skrillex', 'Dance', 170);

INSERT INTO song(name, title, artistID, composer, genre, length)
VALUES('Fire Away', 'Recess', '006', 'Skrillex', 'Dance', 200);

INSERT INTO song(name, title, artistID, composer, genre, length)
VALUES('Fire Away', 'Holding My Breath', '007', 'Jon McLaughlin', 'Pop', 194);

INSERT INTO song(name, title, artistID, composer, genre, length)
VALUES('The Coast', 'The Greatest Hits - EP - Single', '008', 'Fire Away', 'Pop', 180);

INSERT INTO song(name, title, artistID, composer, genre, length)
VALUES('Electric Duet', 'Spellbound', '009', 'Yngwie J. Malmsteen', 'Rock', 220);
