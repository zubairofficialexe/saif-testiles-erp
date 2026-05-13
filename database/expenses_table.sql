CREATE TABLE expenses(

    id INT AUTO_INCREMENT PRIMARY KEY,

    expense_name VARCHAR(255),

    amount DECIMAL(10,2),

    expense_date DATE,

    remarks TEXT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);