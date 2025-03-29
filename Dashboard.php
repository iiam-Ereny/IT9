<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!--Linking Google Font For Icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-header">
            <img src="../img/LOGO1.png" alt="LOGO">
            <h2>Medicine Monitoring System</h2>
        </div>
        <ul class="sidebar-links">
            <li>
                <a href="Dashboard.php"><span class="material-symbols-outlined">dashboard</span>Dashboard</a>
            </li>
            <li>
                <a href="Inventory.php"><span class="material-symbols-outlined">inventory</span>Inventory</a>
            </li>
            <li>
                <a href="Sales.php"><span class="material-symbols-outlined">real_estate_agent</span>Sales</a>
            </li>
            <li>
                <a href="Suppliers.php"><span class="material-symbols-outlined">forklift</span>Suppliers</a>
            </li>
            <li>
                <a href="Reports.php"><span class="material-symbols-outlined">lab_profile</span>Reports</a>
            </li>
            <li>
                <a href="Settings.php"><span class="material-symbols-outlined">settings</span>Settings</a>
            </li>
            <li>
                <a href="login.php"><span class="material-symbols-outlined">logout</span>Log-Out</a>
            </li>
        </ul>
    </aside>
    <div class="main-content">
        <h1>DASHBOARD</h1>
        <div class="dashboard-section">
            <h2>Medicine Stock Overview</h2>
            <p>Total Stock: 500</p>
            <p>Low-stock Medicines: 5</p>
            <p>Expiring Soon: 3</p>
        </div>
        <div class="dashboard-section">
            <h2>Sales Summary</h2>
            <p>Total Stock: 500</p>
            <p>Low-stock Medicines: 5</p>
            <p>Expiring Soon: 3</p>
        </div>
        <div class="dashboard-section">
            <h2>Alerts</h2>
            <p>Expiry Date Alerts: 3 Medicines Expiring Soon</p>
            <p>Low-stock Alerts: 2 Medicines</p>
        </div>
        <div class="dashboard-section">
            <h2>Medicine Stock Management</h2>
            <table>
                <thead>
                    <tr>
                        <th>Medicine Name</th>
                        <th>Current Stock</th>
                        <th>Expiry Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Paracetamol</td>
                        <td>100</td>
                        <td>2025-02-09</td>
                        <td class="actions">
                            <button class="add-stock">Add Stock</button>
                            <button class="remove-stock">Remove Stock</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Aspirin</td>
                        <td>50</td>
                        <td>2025-02-13</td>
                        <td class="actions">
                            <button class="add-stock">Add Stock</button>
                            <button class="remove-stock">Remove Stock</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Kisspirin</td>
                        <td>∞</td>
                        <td>2025-02-31</td>
                        <td class="actions">
                            <button class="add-stock">Add Stock</button>
                            <button class="remove-stock">Remove Stock</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="dashboard-section">
            <h2>Sales & Prescription Tracking</h2>
            <table>
                <thead>
                    <tr>
                        <th>Prescription ID</th>
                        <th>Medicine Name</th>
                        <th>Quantity Sold</th>
                        <th>Sale Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#143</td>
                        <td>Paracetamol</td>
                        <td>20</td>
                        <td>2025-01-10</td>
                    </tr>
                    <tr>
                        <td>#1433</td>
                        <td>Kisspirin</td>
                        <td>99999999</td>
                        <td>2025-02-14</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="footer">
        © 2025 Medicines Monitoring System. All rights reserved.
    </div>
</body>
</html>