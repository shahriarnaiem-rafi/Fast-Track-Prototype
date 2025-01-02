<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 20px;
    }

    .assign-container {
        max-width: 500px;
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
</style>
<div class="assign-container">
    <h2>Assign Drivers</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="order-id">Order ID</label>
            <input type="text" id="order-id" name="order_id" placeholder="Enter Order ID">
        </div>
        <div class="form-group">
            <label for="driver">Assign Driver</label>
            <select id="driver" name="driver">
                <option value="driver_1">John Doe</option>
                <option value="driver_2">Jane Smith</option>
                <option value="driver_3">Michael Brown</option>
            </select>
        </div>
        <div class="form-group">
            <label for="vehicle">Assign Vehicle</label>
            <select id="vehicle" name="vehicle">
                <option value="vehicle_1">Truck 101</option>
                <option value="vehicle_2">Van 202</option>
                <option value="vehicle_3">Bike 303</option>
            </select>
        </div>
        <div class="form-actions">
            <button type="submit">Assign</button>
        </div>
    </form>
</div>