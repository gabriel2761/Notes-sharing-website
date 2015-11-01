Readme.txt

In order to run the software locally, a server must be installed.
The current software only runs locally on windows directories.

On windows.

1. Install WAMP for windows.
http://www.wampserver.com/en/

2. Run WAMP, and start all servers.
When WAMP is running click select WAMP in the windows icon tray and select "Start all services"

3. Create the database
Select WAMP from the windows icon tray and select MySQL > MySQL console. If it is the first time install mysql then press enter when prompt to enter password. Otherwise enter the previous password given.

4. Create the database tables and the user in the command prompt, when logged into MySQL console. The SQL statements are posted below.

	# The users must be specifically
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
		title VARCHAR(20) NOT NULL,	
		date DATE NOT NULL,
		notes TEXT NOT NULL,
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
		password VARCHAR(70) NOT NULL,
		email VARCHAR(50) NOT NULL,
		PRIMARY KEY (student_id)
	);


	/*
	    creates the constant subject numbers for the website
	*/
	INSERT INTO subject (subject_no)
	    VALUES
	      (32013),
	      (89204),
	      (32543),
	      (31241),
	      (22708),
	;

5. Add the Project folder Notes-sharing-website to the WAMP directory. The location in windows is usually: C:\wamp\www\

6. Run the website
Open a browser and run the url, http://localhost/Notes-sharing-website/





