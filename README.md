# UTS Note Sharing Website Project

This project was our proposal for the course [48440 Software Engineering Practice](http://handbook.uts.edu.au/subjects/48440.html) At University of Technology, Sydney.

In order to run the software locally, a server must be installed.
The current software only runs locally on windows directories.

### Windows

1. Install WAMP for windows. [Link](http://www.wampserver.com/en/)

2. Run WAMP, and start all servers. 
When WAMP is installed click select WAMP in the windows icon tray and select "Start all services"

3. Create the database
Select WAMP from the windows icon tray and select MySQL > MySQL console. If it is the first time install mysql then press enter when prompt to enter password. Otherwise enter the previous password given.

4. Create the database tables and the user in the command prompt, when logged into MySQL console. The SQL statements are posted below.

5. Add the Project folder Notes-sharing-website to the WAMP directory. The location in windows is usually: C:\wamp\www\

6. Run the website
Open a browser and run the url, http://localhost/Notes-sharing-website/ 


``` SQL
	# The user name and password must match
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


	
	# creates the constant subject numbers for the website
	INSERT INTO subject (subject_no)
	    VALUES
	      (32013),
	      (89204),
	      (32543),
	      (31241),
	      (22708),;
```







