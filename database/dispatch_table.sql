CREATE TABLE dispatch(

    id INT AUTO_INCREMENT PRIMARY KEY,

    beam_id INT,

    beam_no VARCHAR(100),

    party_name VARCHAR(150),

    takha_no VARCHAR(100),

    dispatch_meter DECIMAL(10,2),

    dispatch_weight DECIMAL(10,2),

    vehicle_no VARCHAR(100),

    driver_name VARCHAR(100),

    challan_no VARCHAR(100),

    dispatch_date DATE,

    remarks TEXT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);