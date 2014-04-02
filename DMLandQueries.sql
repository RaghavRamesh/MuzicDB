#Queries
#1. Search music by album title
/*Notice the usage of where before group by,
 * this is a mySQL thing, maybe mention that in
 * the report.
 */
SELECT s.title AS 'Album Name', a.artistName AS 'Artist'
FROM song s, artist a
WHERE UPPER(s.title) LIKE UPPER('%php_search_query%')             #Note: the % signs are at the front and back for
      AND a.id = s.artistID                                       #      padding, so you can search for a string
GROUP BY s.title, a.artistName;                                   #      that occurs in the middle of a word for example.

#2. Search music by song title. Ignores case 
SELECT s.name AS 'Song Title', a.artistName AS 'Artist', s.title AS 'Album Name',
       s.composer, s.genre, s.length
FROM song s, artist a
WHERE UPPER(s.name) LIKE UPPER('%php_search_query%')
      AND a.id = s.artistID;

#3. Search music by artist name
SELECT a.artistName AS 'Artist'
FROM artist a
WHERE UPPER(a.artistName) LIKE UPPER('%ns%')
GROUP BY a.artistName, a.id;

#4. Search music by composer name
SELECT s.name AS 'Song Title', a.artistName AS 'Artist', s.title AS 'Album Name',
       s.composer, s.genre, s.length
FROM song s, artist a
WHERE UPPER(s.composer) LIKE UPPER('%php_search_query%')
      AND a.id = s.artistID;

#5. Search music by genre
SELECT s.name AS 'Song Title', a.artistName AS 'Artist', s.title AS 'Album Name',
       s.composer, s.genre, s.length
FROM song s, artist a
WHERE UPPER(s.genre) LIKE UPPER('%php_search_query%')
      AND a.id = s.artistID;

#6. Find all songs
SELECT s.name AS 'Song Title', a.artistName AS 'Artist', s.title AS 'Album Name',
       s.composer, s.genre, s.length
FROM song s, artist a
WHERE a.id = s.artistID;

#7. Find all albums
SELECT s.title AS 'Album Name', a.artistName AS 'Artist'
FROM song s, artist a
WHERE a.id = s.artistID
GROUP BY s.title, a.artistName;


#DML
#8. Add a user
INSERT INTO user VALUES('John Crew', 'john@crew.com', 'bigjohncrew'); 
INSERT INTO user VALUES('John', 'john@j.com', 'bigjohn');
#9. Delete a user
DELETE FROM user
WHERE name='John';

DELETE FROM user WHERE email='john@crew.com';
#10. Edit a user
UPDATE user
SET email='johncrew@gmail.com'
WHERE email='john@crew.com';

#11. Add an album
INSERT INTO album VALUES('Appetite for Destruction', '123');

#12. Delete an album

#13. Edit an album

#14. Add a song

#15. Delete a song

#16. Edit a song
