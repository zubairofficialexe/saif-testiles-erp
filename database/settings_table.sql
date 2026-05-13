CREATE TABLE settings(

    id INT AUTO_INCREMENT PRIMARY KEY,

    company_name VARCHAR(255),

    contact_no VARCHAR(50),

    email VARCHAR(255),

    address TEXT,

    gst_no VARCHAR(100),

    dark_mode TINYINT DEFAULT 0,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);