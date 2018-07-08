DROP DATABASE IF EXISTS cake3order;
CREATE DATABASE cake3order DEFAULT CHARACTER SET utf8;

USE cake3order;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
        id int(11) NOT NULL AUTO_INCREMENT,
        email varchar(255) NOT NULL,
        password varchar(255) NOT NULL,
        modified datetime DEFAULT NULL,
        created datetime DEFAULT NULL,
        PRIMARY KEY (id),
        UNIQUE KEY (email)
);

DROP TABLE IF EXISTS customers;
CREATE TABLE customers (
        id int(11) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        modified datetime DEFAULT NULL,
        created datetime DEFAULT NULL,
        PRIMARY KEY (id)
);

DROP TABLE IF EXISTS products;
CREATE TABLE products (
        id int(11) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        price int(11) NOT NULL,
        modified datetime DEFAULT NULL,
        created datetime DEFAULT NULL,
        PRIMARY KEY (id)
);

DROP TABLE IF EXISTS orders;
CREATE TABLE orders (
        id int(11) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        customer_id int(11) NOT NULL,
        modified datetime DEFAULT NULL,
        created datetime DEFAULT NULL,
        PRIMARY KEY (id)
);

DROP TABLE IF EXISTS order_details;
CREATE TABLE order_details (
        id int(11) NOT NULL AUTO_INCREMENT,
        order_id int(11) NOT NULL,
        product_id int(11) NOT NULL,
        unit int(11) NOT NULL,
        modified datetime DEFAULT NULL,
        created datetime DEFAULT NULL,
        PRIMARY KEY (id)
);




