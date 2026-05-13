CREATE TABLE weft_inventory(

    id INT AUTO_INCREMENT PRIMARY KEY,

    beam_id INT,

    beam_no VARCHAR(100),

    party_name VARCHAR(150),

    yarn_type VARCHAR(100),

    yarn_count VARCHAR(100),

    color VARCHAR(100),

    received_weight DECIMAL(10,2),

    used_weight DECIMAL(10,2) DEFAULT 0,

    remaining_weight DECIMAL(10,2),

    received_date DATE,

    remarks TEXT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);