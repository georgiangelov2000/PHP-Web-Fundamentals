CREATE TABLE users(
	id BIGINT UNIQUE IDENTITY(1,1),
	username VARCHAR(30) UNIQUE  NOT NULL,
	password  VARCHAR(26) NOT NULL,
	profile_picture  VARBINARY,
	last_login_time DATE,
	is_deleted bit default 0
);

ALTER TABLE users
ADD CONSTRAINT pk_users PRIMARY KEY(id);

INSERT INTO users(username, password, last_login_time, is_deleted)
VALUES ('Gogo', 'spojpe',  '2017-05-15', 1),
('Bobo','epgojro', '2017-08-05', 1),
('Ani',  'rpker', '2017-04-25', 1),
('Sasho',  'rgpjrpe', '2017-05-06', 1),
('Gery', 'pkptkh','2017-01-11', 1);