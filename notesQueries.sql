
# create database and user
CREATE DATABASE notes;
CREATE USER 'gabriel'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'gabriel'@'localhost';


# create tables
CREATE TABLE subject (
	subject_id INT(11) NOT NULL AUTO_INCREMENT,
  subject_no VARCHAR(30) NOT NULL,
	PRIMARY KEY (subject_id)
);

CREATE TABLE note (
	note_id INT(11) NOT NULL AUTO_INCREMENT,
	title VARCHAR(40) NOT NULL,
	date DATE NOT NULL,
	notes TEXT NOT NULL,
  type VARCHAR(30),
  size INT(11),
  name VARCHAR(30),
  filepath VARCHAR(30),
  student_id INT(11),
  subject_id INT(11),
	PRIMARY KEY(note_id),
  CONSTRAINT fk_studentNote FOREIGN KEY (student_id) REFERENCES student(student_id),
  CONSTRAINT fk_subjectNote FOREIGN KEY (subject_id) REFERENCES subject(subject_id)
);

CREATE TABLE student (
  student_id INT(11) NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(30) NOT NULL,
  last_name VARCHAR(30) NOT NULL,
  username VARCHAR(15) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(50) NOT NULL,
  PRIMARY KEY (student_id)
);


/*
    creates the constant subject numbers for the website
*/
INSERT INTO subject (subject_no)
    VALUES
      (32998),
      (2998),
      (32013),
      (89204),
      (32543),
      (31241),
      (22708),
      (22605)
;