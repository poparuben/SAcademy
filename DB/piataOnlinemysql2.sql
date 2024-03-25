
CREATE DATABASE piata_online;
USE piata_online;
CREATE TABLE products(
product_id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
kg INT,
price INT NOT NULL,
catgory INT NOT NULL,
PRIMARY KEY(product_id)
);
SELECT * FROM products;

CREATE TABLE product_category(
	category_id INT NOT NULL auto_increment,
	name_category VARCHAR(255) NOT NULL,
	PRIMARY KEY(category_id)
);

ALTER TABLE products 
	ADD CONSTRAINT catgory
		FOREIGN KEY (catgory) REFERENCES product_category(category_id);

CREATE TABLE product_inventory(
	id INT NOT NULL AUTO_INCREMENT,
	product_id_category INT NOT NULL,
	stock INT NOT NULL,
	PRIMARY KEY(id)
);



ALTER TABLE product_inventory
	ADD CONSTRAINT product_id_category
		FOREIGN KEY (product_id_category) REFERENCES products(product_id);

CREATE TABLE order_items(
	id INT NOT NULL AUTO_INCREMENT,
	order_id INT NOT NULL,
	product_id INT NOT NULL,
	PRIMARY KEY(id)
);

ALTER TABLE order_items
	ADD CONSTRAINT product_id
		FOREIGN  KEY(product_id) REFERENCES products(product_id);

CREATE TABLE orders(
	id INT NOT NULL AUTO_INCREMENT,
	client_id INT NOT NULL,
	order_date DATETIME NOT NULL,
	id_adress INT NOT NULL,
	total_price INT NOT NULL,
	contact_phone INT NOT NULL,
	mail VARCHAR(255),
	PRIMARY KEY(id)
);

ALTER TABLE order_items
	ADD CONSTRAINT order_id
		FOREIGN KEY (order_id) REFERENCES orders(id);

CREATE TABLE client(
	id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    second_name VARCHAR(255) NOT NULL,
    client_mail VARCHAR(255) NOT NULL,
    client_phone INT NOT NULL,
    PRIMARY KEY(id)
);

ALTER TABLE orders
	ADD CONSTRAINT client_id
		FOREIGN KEY (client_id) REFERENCES client(id);

CREATE TABLE addresses(
	id_address INT NOT NULL AUTO_INCREMENT,
    street VARCHAR(255) NOT NULL,
    number VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    zip_code INT NOT NULL,
    PRIMARY KEY(id_address)
);

ALTER TABLE orders
	ADD CONSTRAINT id_adress
		FOREIGN KEY (id_adress) REFERENCES addresses(id_address);




