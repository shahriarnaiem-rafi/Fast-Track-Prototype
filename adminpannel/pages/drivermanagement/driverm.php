<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 20px;
    }

    .drivers-container {
        max-width: 800px;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-actions {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-actions button {
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        background-color: #007bff;
        color: #fff;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #007bff;
        color: #fff;
    }

    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tbody tr:hover {
        background-color: #f1f1f1;
    }

    .status {
        font-weight: bold;
        color: #28a745;
    }

    .status.unavailable {
        color: #dc3545;
    }
</style>

<div class="drivers-container">
    <h2>Drivers Management</h2>
    <!-- Add Driver Form -->
    <form action="#" method="post">
        <div class="form-group">
            <label for="driver-name">Driver Name</label>
            <input type="text" id="driver-name" name="driver_name" placeholder="Enter driver name">
        </div>
        <div class="form-group">
            <label for="driver-phone">Phone Number</label>
            <input type="text" id="driver-phone" name="driver_phone" placeholder="Enter phone number">
        </div>
        <div class="form-group">
            <label for="driver-status">Availability Status</label>
            <select id="driver-status" name="driver_status">
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
        </div>
        <div class="form-actions">
            <button type="submit">Add Driver</button>
        </div>
    </form>

    <!-- Drivers List -->
    <h3>Drivers List</h3>
    <table>
        <thead>
            <tr>
                <th>Driver ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Completed Deliveries</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>DRV001</td>
                <td>John Doe</td>
                <td>+1 234 567 890</td>
                <td><span class="status">Available</span></td>
                <td>120</td>
            </tr>
            <tr>
                <td>DRV002</td>
                <td>Jane Smith</td>
                <td>+1 987 654 321</td>
                <td><span class="status unavailable">Unavailable</span></td>
                <td>95</td>
            </tr>
        </tbody>
    </table>

    <!-- Assign Task -->
    <h3>Assign Task</h3>
    <form action="#" method="post">
        <div class="form-group">
            <label for="task-order-id">Order ID</label>
            <input type="text" id="task-order-id" name="order_id" placeholder="Enter Order ID">
        </div>
        <div class="form-group">
            <label for="assign-driver">Select Driver</label>
            <select id="assign-driver" name="assign_driver">
                <option value="driver_1">John Doe</option>
                <option value="driver_2">Jane Smith</option>
            </select>
        </div>
        <div class="form-actions">
            <button type="submit">Assign Task</button>
        </div>
    </form>
</div>