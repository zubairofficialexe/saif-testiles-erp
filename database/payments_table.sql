CREATE TABLE payments(

    id INT AUTO_INCREMENT PRIMARY KEY,

    party_name VARCHAR(150),

    beam_no VARCHAR(100),

    total_meter DECIMAL(10,2),

    rate_per_meter DECIMAL(10,2),

    total_amount DECIMAL(10,2),

    received_amount DECIMAL(10,2),

    pending_amount DECIMAL(10,2),

    payment_date DATE,

    payment_method VARCHAR(50),

    remarks TEXT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);