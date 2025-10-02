-- CREATE DATABASE IF NOT EXISTS myDatabase CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- CREATE TABLE IF NOT EXISTS users (
--     id         INT PRIMARY KEY AUTO_INCREMENT,
--     name       VARCHAR(255) NOT NULL,
--     email      VARCHAR(255) NOT NULL UNIQUE,
--     password   VARCHAR(255) NOT NULL,
--     created_at TIMESTAMP NOT NULL,
--     updated_at TIMESTAMP NOT NULL
-- );

-- CREATE TABLE IF NOT EXISTS posts (
--     id         INT PRIMARY KEY AUTO_INCREMENT,
--     user_id    INT NOT NULL,
--     title      VARCHAR(255) NOT NULL,
--     body       TEXT,
--     created_at TIMESTAMP NOT NULL,
--     updated_at TIMESTAMP NOT NULL,
--     FOREIGN KEY (user_id) REFERENCES users(id)
-- );
