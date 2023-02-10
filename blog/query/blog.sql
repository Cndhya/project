-- Run this before running the blog
CREATE DATABASE blog;

USE blog;

CREATE TABLE blogs (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description VARCHAR(2000)
);


CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    password VARCHAR(255)
);
