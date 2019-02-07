-- Database and tables creation
CREATE DATABASE IF NOT EXISTS Commerce;
USE Commerce;

CREATE TABLE IF NOT EXISTS Client( 
	Client_ID VARCHAR(9) NOT NULL,
	Client_Name VARCHAR(50) NOT NULL,
	Gender CHAR(1),
	Birthdate DATE NOT NULL,
	Phone VARCHAR(13),
	PRIMARY KEY(Client_ID)
);


CREATE TABLE IF NOT EXISTS Client_Order(
	Order_ID VARCHAR(9) NOT NULL,
	Order_Date DATE NOT NULL,
	Client_ID VARCHAR(9) NOT NULL,
	PRIMARY KEY(Order_ID),
	FOREIGN KEY (Client_ID) REFERENCES Client(Client_ID)
);

CREATE TABLE IF NOT EXISTS Product(
	Product_ID VARCHAR(9) NOT NULL,
	Product_Name VARCHAR(50) NOT NULL,
	Picture VARCHAR(2083) NOT NULL,
	PRIMARY KEY(Product_ID)
);

CREATE TABLE IF NOT EXISTS Composed(
	Quantity INT(2) NOT NULL,
	Product_ID VARCHAR(9) NOT NULL,
	Order_ID VARCHAR(9) NOT NULL,
	FOREIGN KEY (Product_ID) REFERENCES Product(Product_ID),
	FOREIGN KEY (Order_ID) REFERENCES Client_Order(Order_ID)
);


-- Adding cascade on update and delete
ALTER TABLE `client_order` DROP FOREIGN KEY `client_order_ibfk_1`;
ALTER TABLE `client_order` ADD CONSTRAINT `client_order_ibfk_1` FOREIGN KEY (`Client_ID`) REFERENCES `client`(`Client_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `composed` DROP FOREIGN KEY `composed_ibfk_1`;
ALTER TABLE `composed` ADD CONSTRAINT `composed_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `product`(`Product_ID`)ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `composed` DROP FOREIGN KEY `composed_ibfk_2`;
ALTER TABLE `composed` ADD CONSTRAINT `composed_ibfk_2` FOREIGN KEY (`Order_ID`) REFERENCES `client_order`(`Order_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
