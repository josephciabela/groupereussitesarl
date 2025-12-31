-- Init database and contact table for Groupe Reussite SARL
CREATE DATABASE IF NOT EXISTS groupereussitesarl
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE groupereussitesarl;

CREATE TABLE IF NOT EXISTS contact (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(255) NOT NULL,
  prenom VARCHAR(255) DEFAULT '',
  email VARCHAR(255) NOT NULL,
  tel VARCHAR(50) DEFAULT NULL,
  message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
