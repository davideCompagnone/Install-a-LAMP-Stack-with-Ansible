use users;

CREATE TABLE IF NOT EXISTS users (
  id varchar(255) NOT NULL PRIMARY KEY,
  username varchar(255) NOT NULL,
  email varchar(255) NOT NULL
);


INSERT IGNORE INTO users (id, username, email) VALUES('1', 'martina', 'martinalil@hotmail.it');

   INSERT IGNORE INTO users (id, username, email) VALUES('2', 'giuliano', 'giusol@hotmail.it');

   INSERT IGNORE INTO users (id, username, email) VALUES('3', 'edgar', 'edpol@hotmail.it');

   INSERT IGNORE INTO users (id, username, email) VALUES('4', 'michele', 'micpuz@hotmail.it');

   INSERT IGNORE INTO users (id, username, email) VALUES('5', 'davide', 'davcomp@hotmail.it');





