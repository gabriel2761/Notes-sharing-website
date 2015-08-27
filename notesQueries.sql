
id
subno
email
username
date
notes
rating



CREATE TABLE subjects (
	id INT(11) NOT NULL AUTO_INCREMENT,
	menu_name VARCHAR(30) NOT NULL,
	position INT(3) NOT NULL,
	visible TINYINT(1) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE notes (
	id INT(11) NOT NULL AUTO_INCREMENT,
	subno INT(11) NOT NULL,
	email VARCHAR(30) NOT NULL,
	username VARCHAR(15) NOT NULL,
	date DATE NOT NULL,
	notes TEXT NOT NULL,
	rating INT(11) NOT NULL,
	PRIMARY KEY(id)
);