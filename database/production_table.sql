CREATE TABLE production(

    id INT AUTO_INCREMENT PRIMARY KEY,

    beam_id INT,

    beam_no VARCHAR(100),

    loom_no VARCHAR(50),

    party_name VARCHAR(150),

    worker_name VARCHAR(100),

    shift_name VARCHAR(50),

    takha_no VARCHAR(100),

    meter_produced DECIMAL(10,2),

    production_date DATE,

    remarks TEXT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);