CREATE TABLE minions (
	id int NOT NULL,
	name int NULL DEFAULT NULL,
	age int NULL DEFAULT NULL,
	town_id int NULL DEFAULT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE towns (
	id int NOT NULL,
	name int NULL DEFAULT NULL,
	PRIMARY KEY (id)
);