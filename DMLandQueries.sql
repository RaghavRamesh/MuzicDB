#Queries
#1. Search music by album title

#2. Search music by song title

#3. Search music by artist name

#4. Search music by composer name

#5. Search music by genre

#6. Find all songs

#7. Find all albums


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