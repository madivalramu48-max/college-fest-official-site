-- Create Database
CREATE DATABASE IF NOT EXISTS e2x_fest;
USE e2x_fest;

-- Table for Painting
CREATE TABLE IF NOT EXISTS painting_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Singing
CREATE TABLE IF NOT EXISTS singing_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Gaming - Free Fire
CREATE TABLE IF NOT EXISTS gaming_free_fire_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Gaming - BGMI
CREATE TABLE IF NOT EXISTS gaming_bgmi_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Face Painting
CREATE TABLE IF NOT EXISTS face_painting_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Stand-up Comedy
CREATE TABLE IF NOT EXISTS standup_comedy_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Dance
CREATE TABLE IF NOT EXISTS dance_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Mehandi
CREATE TABLE IF NOT EXISTS mehandi_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Makeup & Hairstyle
CREATE TABLE IF NOT EXISTS makeup_hairstyle_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Rangoli
CREATE TABLE IF NOT EXISTS rangoli_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Quiz
CREATE TABLE IF NOT EXISTS quiz_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Fashion Show
CREATE TABLE IF NOT EXISTS fashion_show_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Photography
CREATE TABLE IF NOT EXISTS photography_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Essay Writing
CREATE TABLE IF NOT EXISTS essay_writing_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Street Play
CREATE TABLE IF NOT EXISTS street_play_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Debate
CREATE TABLE IF NOT EXISTS debate_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Collage Making
CREATE TABLE IF NOT EXISTS collage_making_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Best Out Of Waste
CREATE TABLE IF NOT EXISTS best_out_of_waste_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Video Making
CREATE TABLE IF NOT EXISTS video_making_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for Meme Making
CREATE TABLE IF NOT EXISTS meme_making_registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(100) NOT NULL,
    year VARCHAR(10) NOT NULL,
    gaming_type VARCHAR(50) NULL,
    team_size VARCHAR(20) NOT NULL,
    team_members TEXT NULL,
    comments TEXT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);