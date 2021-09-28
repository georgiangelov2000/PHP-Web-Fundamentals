ALTER TABLE users
DROP CONSTRAINT pk_users
ADD CONSTRAINT pk_users PRIMARY KEY (id, username);
