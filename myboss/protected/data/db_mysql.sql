CREATE TABLE boss_user
(
	user_id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	user_type VARCHAR(128) NOT NULL,
	user_name VARCHAR(128) NOT NULL,
	user_password  VARCHAR(128) NOT NULL,
	user_createtime DATETIME NOT NULL,
	user_email VARCHAR(128) NOT NULL,
	user_telephone  VARCHAR(11),
	user_profile TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE boss_consumer
(
	consumer_id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	consumer_bype VARCHAR(128) NOT NULL,
	consumer_name VARCHAR(128) NOT NULL,
	consumer_uintprice FLOAT NOT NULL,
	consumer_num integer NOT NULL,
	consumer_totalprice integer NOT NULL,
	consumer_year YEAR NOT NULL,
	consumer_date DATE NOT NULL,
	consumer_time TIME NOT NULL,
	consumer_timestamp TIMESTAMP NOT NULL,
	consumer_week integer NOT NULL,
	consumer_mon integer NOT NULL,
	consumer_quarter integer,
	consumer_datetime DATETIME NOT NULL,
	user_id INTEGER NOT NULL,
	consumer_profile TEXT,
	FOREIGN KEY (user_id) REFERENCES boss_user(user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;