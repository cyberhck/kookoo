CREATE TABLE IF NOT EXISTS users(
	id INT PRIMARY KEY AUTO_INCREMENT,
	sn VARCHAR(100) UNIQUE,
	email VARCHAR(255) UNIQUE,
	name VARCHAR(255),
	password VARCHAR(255),
	user_type INT,
	register_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	phone_num VARCHAR(20),
	phone_num_parents VARCHAR(20),
	last_visit_date DATE,
	status ENUM('0','1') DEFAULT '0',
	blocked ENUM('0','1') DEFAULT '0',
	deleted ENUM('0','1') DEFAULT '0'
);
CREATE TABLE IF NOT EXISTS lost_password(
	email VARCHAR(255),
	token TEXT(255),
	used ENUM('0','1'),
	CONSTRAINT FOREIGN KEY(email) REFERENCES users(email)
);
CREATE TABLE IF NOT EXISTS emails(
	id INT PRIMARY KEY AUTO_INCREMENT,
	receiptent VARCHAR(255),
	subject TEXT,
	message TEXT
);
CREATE TABLE IF NOT EXISTS email_verification(
	id INT PRIMARY KEY AUTO_INCREMENT,
	user INT,
	verification_code VARCHAR(255),
	status ENUM('0','1') DEFAULT '0',
	CONSTRAINT FOREIGN KEY (user) REFERENCES users(id)
);
CREATE TABLE IF NOT EXISTS password_less(
	id INT PRIMARY KEY AUTO_INCREMENT,
	user INT,
	token VARCHAR(255),
	access ENUM('0','1') DEFAULT '0',
	status ENUM('0','1') DEFAULT '0',
	CONSTRAINT FOREIGN KEY (user) REFERENCES users(id)
);