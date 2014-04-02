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

CREATE TABLE song (
	name VARCHAR(64),		#song name
	title VARCHAR(64),		#album title
	artistName VARCHAR(64), 
	artistID VARCHAR(32),

	composer VARCHAR(64),   #asd ad
	genre VARCHAR(64),
	length INTEGER			#this will be in seconds
	PRIMARY KEY (name, title, artistName),
	FOREIGN KEY (title, artistName) REFERENCES album(title, artistName) ON DELETE RESTRICT ON UPDATE CASCADE,
	FOREIGN KEY (artistID) REFERENCES artist(id) ON DELETE RESTRICT ON UPDATE CASCADE 
);                #no pri key only in ER diag, in SQL all tables will have pri key! 

CREATE TABLE album (
	title VARCHAR(64), 
	artistName VARCHAR(64),
	artistID VARCHAR(32),

	PRIMARY KEY (title, artistName),
	FOREIGN KEY (artistID) REFERENCES artist(id) ON DELETE RESTRICT ON UPDATE CASCADE
	/* weak entity has no primary key */
);

CREATE TABLE artist (
	artistName VARCHAR(64),
	id VARCHAR(32)		PRIMARY KEY
);

CREATE TABLE user (
	name VARCHAR(64),
	email VARCHAR(64)		PRIMARY KEY,
	password VARCHAR(32),
);

CREATE TABLE song_purchase (
	name VARCHAR(64),
	title VARCHAR(64),
	artistName VARCHAR(64),
	price FLOAT(5,2),
	email VARCHAR(64),

	PRIMARY KEY (name, title, artistName, email),
	FOREIGN KEY (name, title, artistName) REFERENCES song(name, title, artistName),
	FOREIGN KEY (email) REFERENCES user(email) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE album_purchase (
	title VARCHAR(64),
	artistName VARCHAR(64),
	price FLOAT(5,2),
	email VARCHAR(64),

	PRIMARY KEY (title, artistName, email),
	FOREIGN KEY (title, artistName) REFERENCES album(title, artistName) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY (email) REFERENCES user(email) ON UPDATE CASCADE ON DELETE RESTRICT
);
