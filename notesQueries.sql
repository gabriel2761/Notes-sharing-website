
id
subno
email
username
date
notes
rating



CREATE TABLE subject (
	subject_id INT(11) NOT NULL AUTO_INCREMENT,
        subject_no VARCHAR(30) NOT NULL,
	PRIMARY KEY (subject_id)
);

CREATE TABLE note (
	note_id INT(11) NOT NULL AUTO_INCREMENT,
	title VARCHAR(20) NOT NULL,	
	date DATE NOT NULL,
	notes TEXT NOT NULL,
	PRIMARY KEY(note_id)
        CONSTRAINT fk_studentNote FOREIGN KEY (note_id) REFERENCES student(student_id)
        CONSTRAINT fk_subjectNote FOREIGN KEY (note_id) REFERENCES subject(subject_id)
);

CREATE TABLE student (
        student_id INT(11) NOT NULL AUTO_INCREMENT,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        username VARCHAR(15) NOT NULL,
        password VARCHAR(20) NOT NULL,        
	email VARCHAR(50) NOT NULL,        
	PRIMARY KEY (student_id);        
);