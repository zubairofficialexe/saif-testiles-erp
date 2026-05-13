# SAIF TEXTILES ERP SYSTEM

A complete Job Work Textile ERP Management System developed for power loom factories and textile job work businesses.

This ERP is specially designed for:

- Power Loom Factories
- Textile Job Work Units
- Bhiwandi Textile Industry
- Beam & Weft Management
- Production Tracking
- Dispatch Management
- Salary & Expense Accounting
- Monthly ERP Reporting

---

# FEATURES

## Authentication System

- Secure Login System
- Session Authentication
- Role Protection
- Signup Disabled for Public Security

---

# DASHBOARD

- Total Beam Count
- Total Production
- Total Dispatch
- Total Payments
- Pending Amount
- Salary Summary
- Expense Summary
- Profit / Loss Analytics

---

# MODULES

## 1. Beam Management

Tracks:

- Incoming Beams
- Party Name
- Beam Weight
- Quality
- Beam Status

Files:

```txt
modules/beam/
├── add.php
├── edit.php
├── delete.php
└── view.php
```

---

## 2. Weft Inventory

Tracks:

- Yarn Stock
- Yarn Type
- Yarn Count
- Received Weight
- Used Weight
- Remaining Weight

Files:

```txt
modules/weft/
├── add.php
├── edit.php
├── delete.php
├── usage.php
└── view.php
```

---

## 3. Production Management

Tracks:

- Loom Production
- Worker Production
- Takha Production
- Meter Produced

Files:

```txt
modules/production/
├── add.php
├── dashboard.php
├── edit.php
├── delete.php
└── view.php
```

---

## 4. Dispatch Management

Tracks:

- Dispatch Meter
- Takha Dispatch
- Vehicle Details
- Challan Number
- Driver Details

Files:

```txt
modules/dispatch/
├── add.php
├── edit.php
├── delete.php
├── pdf.php
├── print.php
└── view.php
```

---

## 5. Payment Management

Tracks:

- Party Payments
- Received Amount
- Pending Amount
- Payment Method

Files:

```txt
modules/payments/
├── add.php
├── edit.php
├── delete.php
├── ledger.php
├── pdf.php
├── print.php
└── view.php
```

---

## 6. Salary Management

Tracks:

- Worker Salary
- Loom-wise Salary
- Production-based Salary
- Advance Salary
- Pending Salary

Files:

```txt
modules/salary/
├── add.php
├── edit.php
├── delete.php
├── pdf.php
├── print.php
└── view.php
```

---

## 7. Expense Management

Tracks:

- Factory Expenses
- Wireman Expense
- Mill Store Expense
- Electricity Expense
- Maintenance Expense
- Custom Factory Expenses

Files:

```txt
modules/expenses/
├── add.php
├── edit.php
├── delete.php
└── view.php
```

---

## 8. Reports System

Features:

- Monthly Master Excel Report
- Monthly Master PDF Report
- Profit / Loss Report
- Party Reports
- Monthly Reset System

Files:

```txt
modules/reports/
├── dashboard.php
├── export_excel.php
├── export_pdf.php
├── party_report.php
├── profit_loss.php
└── reset_month.php
```

---

# PROJECT STRUCTURE

```txt
SAIF-TEXTILES-ERP/
│
├── assets/
│   ├── css/
│   │   └── style.css
│   │
│   ├── js/
│   │   └── script.js
│   │
│   └── images/
│
├── config/
│   └── db.php
│
├── database/
│   ├── activity_logs.sql
│   ├── beam_table.sql
│   ├── dispatch_table.sql
│   ├── expenses_table.sql
│   ├── payments_table.sql
│   ├── production_table.sql
│   ├── saif_textiles.sql
│   ├── salary_table.sql
│   ├── settings_table.sql
│   ├── users_update.sql
│   └── weft_table.sql
│
├── fpdf/
│
├── includes/
│   ├── auth_check.php
│   ├── auth_role.php
│   ├── footer.php
│   ├── header.php
│   ├── log_activity.php
│   ├── navbar.php
│   ├── notification.php
│   └── sidebar.php
│
├── modules/
│   │
│   ├── beam/
│   ├── dispatch/
│   ├── expenses/
│   ├── payments/
│   ├── production/
│   ├── reports/
│   ├── salary/
│   ├── settings/
│   └── weft/
│
├── backup.php
├── dashboard.php
├── index.php
├── login.php
├── logout.php
└── signup_disabled.php
```

---

# TECHNOLOGIES USED

- PHP
- MySQL
- Bootstrap 5
- HTML5
- CSS3
- JavaScript
- FPDF

---

# REQUIREMENTS

- XAMPP / WAMP
- PHP 8+
- MySQL 5.7+
- Apache Server

---

# LOCAL INSTALLATION

## STEP 1

Install XAMPP:

https://www.apachefriends.org/

---

## STEP 2

Move project to:

```txt
C:\xampp\htdocs\
```

---

## STEP 3

Create database:

```txt
saif_textiles
```

using phpMyAdmin.

---

## STEP 4

Import SQL files from:

```txt
database/
```

---

## STEP 5

Update Database Config

File:

```txt
config/db.php
```

Example:

```php
<?php

$host = "localhost";

$user = "root";

$password = "";

$database = "saif_textiles";

$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

session_start();

?>
```

---

## STEP 6

Run Project

```txt
http://localhost/saif-textiles-erp
```

---

# MONTH-END WORKFLOW

1. Export Master Excel Report
2. Export Master PDF Report
3. Backup Database
4. Reset System
5. Start Next Month Fresh

---

# SECURITY FEATURES

- Session Authentication
- Login Protection
- Public Signup Disabled
- SQL-Based Authentication
- Secure Routing

---

# REPORTS

## Excel Report Includes

- Beam Report
- Weft Report
- Production Report
- Dispatch Report
- Payment Report
- Salary Report
- Expense Report

---

## PDF Report Includes

- Company Header
- Contact Details
- GST Details
- Monthly ERP Report
- All Management Sections

---

# FUTURE IMPROVEMENTS

- Multi User Roles
- SMS Notifications
- WhatsApp Integration
- GST Billing
- Barcode System
- QR Tracking
- Auto Backup
- Cloud Deployment
- Mobile App

---

# DEVELOPED FOR

SAIF TEXTILES

Power Loom ERP & Job Work Management System

Bhiwandi Textile Industry

---