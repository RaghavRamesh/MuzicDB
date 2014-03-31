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
	name VARCHAR(64),
	artist VARCHAR(64),
	length INTEGER,		/* this will be in seconds */
	albumT VARCHAR(128), 
	
	PRIMARY KEY (name, artist),
);

CREATE TABLE album (
	title VARCHAR(128), 
	/* weak entity has no primary key */
	/* songs have one album name, or album
	 has many song names?*/
);

CREATE TABLE song_of (

);

CREATE TABLE user (
	name VARCHAR(64),
	email VARCHAR(64)		PRIMARY KEY,
	password VARCHAR(32),
);

CREATE TABLE song_purchase (


);

CREATE TABLE album_purchase (


);



