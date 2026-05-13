CREATE TABLE beams(

    id INT AUTO_INCREMENT PRIMARY KEY,

    beam_no VARCHAR(100) UNIQUE,

    party_name VARCHAR(150),

    quality VARCHAR(100),

    warp_type VARCHAR(100),

    warp_count VARCHAR(100),

    beam_weight DECIMAL(10,2),

    expected_meter DECIMAL(10,2),

    loom_no VARCHAR(50),

    status VARCHAR(50),

    received_date DATE,

    remarks TEXT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);