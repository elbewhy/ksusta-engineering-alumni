-- Create the database "ar_bunza_db"
CREATE DATABASE ar_bunza_db;

-- Switch to the newly created database
USE ar_bunza_db;

-- Create the "users" table
CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    age INT,
    qualifications VARCHAR(100),
    post VARCHAR(100),
    languages VARCHAR(100)
);

-- Create the "education" table
CREATE TABLE education (
    education_id INT PRIMARY KEY AUTO_INCREMENT,
    start_year INT,
    end_year INT,
    school_name VARCHAR(100) NOT NULL,
    school_location VARCHAR(100),
    description TEXT
);

-- Create the "frontend_courses" table
CREATE TABLE frontend_courses (
    course_id INT PRIMARY KEY AUTO_INCREMENT,
    course_name VARCHAR(100) NOT NULL
);

-- Create the "backend_courses" table
CREATE TABLE backend_courses (
    course_id INT PRIMARY KEY AUTO_INCREMENT,
    course_name VARCHAR(100) NOT NULL
);
