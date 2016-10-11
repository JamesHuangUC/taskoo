<!--
SCHEMA:

CREATE TABLE taskoo_user (
name VARCHAR(20) NOT NULL,
email VARCHAR(20) PRIMARY KEY,
password VARCHAR(50) NOT NULL,
contact VARCHAR(20) NOT NULL,
isadmin BOOLEAN NOT NULL
}

CREATE TABLE taskoo_task (
taskid SERIAL PRIMARY KEY,
title VARCHAR(50) NOT NULL,
description VARCHAR(200),
taskdate DATE NOT NULL,
timerange VARCHAR(50) NOT NULL,
location VARCHAR(50) NOT NULL,
price INT NOT NULL,
CATEGORY VARCHAR(20),
tasker VARCHAR(20) NOT NULL,
helper VARCHAR(20) DEFAULT 'none',
FOREIGN KEY (tasker) REFERENCES taskoo_user(email),
FOREIGN KEY (helper) REFERENCES taskoo_user(email)
}

Sample Data:

INSERT INTO taskoo_user VALUES ('audreytan@gmail.com', '12345abc', 'Audrey Tan', 91238473, false);
INSERT INTO taskoo_user VALUES ('jessietan@gmail.com', '12345abd', 'Jessie Tan', 91238483, true);
INSERT INTO taskoo_user VALUES ('amelialim@gmail.com', '12345abc', 'Amelia Lim', 92234473, false);
INSERT INTO taskoo_user VALUES ('jessicawee@gmail.com', '12345abd', 'Jessica Wee', 91738483, false);
INSERT INTO taskoo_user VALUES ('belindaaa@gmail.com', '12345sbc', 'Belindaaa', 91338473, false);
INSERT INTO taskoo_user VALUES ('theresatay@gmail.com', '12345abd', 'Theresa Tay', 87238483, true);

INSERT INTO taskoo_user VALUES ('josephkang@gmail.com', '12er5abc', 'Joseph Kang', 82321473, false);
INSERT INTO taskoo_user VALUES ('weijie@gmail.com', '45324abd', 'Wei Jie', 91239233, false);
INSERT INTO taskoo_user VALUES ('hafiz@gmail.com', 'yu345abc', 'Hafiz', 86234473, false);
INSERT INTO taskoo_user VALUES ('aaron@gmail.com', '12323abd', 'Aaron', 91738763, false);
INSERT INTO taskoo_user VALUES ('bobbie@gmail.com', '22345sbc', 'Bobbie', 91333473, true);

INSERT INTO taskoo_task(title,description,taskdate,timerange,location,price,category)
VALUES ('clean my kitchen','i have a messy kitchen and i need help', '2016-10-10', 'Afternoon', 'Bedok Road', 20, 'cleaning');
INSERT INTO taskoo_task(title,description,taskdate,timerange,location,price,category)
VALUES ('buy groceries','i need to get a few veg and some bread', '2016-09-20', 'Evening', 'Carnhill Road', 15, 'errands');
INSERT INTO taskoo_task(title,description,taskdate,timerange,location,price,category)
VALUES ('create a few invoices','based on a template, create 20 invoices', '2016-05-04', 'Any Time', 'None', 10, 'virtual');
INSERT INTO taskoo_task(title,description,taskdate,timerange,location,price,category)
VALUES ('fix my table','my table leg broke and im hoping to repair it asap', '2016-08-07', 'Evening', 'Clementi Road', 30, 'furniture');
INSERT INTO taskoo_task(title,description,taskdate,timerange,location,price,category)
VALUES ('moving house','need help moving, i need a truck', '2016-04-03', 'Afternoon', 'Bedok Road', 20, 'moving');
INSERT INTO taskoo_task(title,description,taskdate,timerange,location,price,category)
VALUES ('repair water pipe','omg it's leaking and i help asap', '2016-09-23', 'Afternoon', 'Bedok Road', 20, 'handyman');

INSERT INTO taskoo_post VALUES (1, 'josephkang@gmail.com', 'jessicawee@gmail.com', '2016-10-10', '5pm');
INSERT INTO taskoo_post VALUES (3, null, 'jessicawee@gmail.com', '2016-09-03', '1pm');
INSERT INTO taskoo_post VALUES (5, 'audreytan@gmail.com', 'theresatay@gmail.com', '2016-10-03', '6pm');
INSERT INTO taskoo_post VALUES (4, null, 'weijie@gmail.com', '2016-08-12', '9pm');


-->
