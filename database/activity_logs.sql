CREATE TABLE activity_logs(

    id INT AUTO_INCREMENT PRIMARY KEY,

    user_name VARCHAR(150),

    activity TEXT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);