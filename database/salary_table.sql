CREATE TABLE salary(

    id INT AUTO_INCREMENT PRIMARY KEY,

    worker_name VARCHAR(150),

    beam_no VARCHAR(100),

    loom_no VARCHAR(50),

    total_meter DECIMAL(10,2),

    rate_per_meter DECIMAL(10,2),

    total_amount DECIMAL(10,2),

    advance_amount DECIMAL(10,2),

    pending_amount DECIMAL(10,2),

    salary_date DATE,

    remarks TEXT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);