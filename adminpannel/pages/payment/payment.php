<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 20px;
    }

    .payments-container {
        max-width: 1000px;
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
        margin-top: 20px;
    }

    .form-actions button {
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        background-color: #28a745;
        color: #fff;
    }

    .analytics {
        margin-top: 30px;
        padding: 20px;
        background-color: #e9ecef;
        border-radius: 5px;
    }

    .analytics h3 {
        margin-bottom: 10px;
    }

    .analytics div {
        margin-bottom: 5px;
    }

    .analytics span {
        font-weight: bold;
    }
</style>

<div class="payments-container">
    <h2>Payments</h2>

    <!-- Payment History -->
    <h3>Payment History</h3>
    <table>
        <thead>
            <tr>
                <th>Payment ID</th>
                <th>Customer Name</th>
                <th>Amount</th>
                <th>Payment Method</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>PMT001</td>
                <td>John Doe</td>
                <td>$100</td>
                <td>Credit Card</td>
                <td>2023-12-25</td>
            </tr>
            <tr>
                <td>PMT002</td>
                <td>Jane Smith</td>
                <td>$50</td>
                <td>PayPal</td>
                <td>2023-12-26</td>
            </tr>
        </tbody>
    </table>

    <!-- Generate Invoice -->
    <h3>Generate Invoice</h3>
    <form action="#" method="post">
        <div class="form-group">
            <label for="order-id">Order ID</label>
            <input type="text" id="order-id" name="order_id" placeholder="Enter Order ID">
        </div>
        <div class="form-actions">
            <button type="submit">Generate Invoice</button>
        </div>
    </form>

    <!-- Driver Payments -->
    <h3>Driver Payments</h3>
    <table>
        <thead>
            <tr>
                <th>Driver Name</th>
                <th>Completed Deliveries</th>
                <th>Commission</th>
                <th>Total Payment</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>120</td>
                <td>10%</td>
                <td>$1,200</td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>95</td>
                <td>10%</td>
                <td>$950</td>
            </tr>
        </tbody>
    </table>

    <!-- Profit/Loss Analytics -->
    <div class="analytics">
        <h3>Profit/Loss Analytics</h3>
        <div>Total Revenue: <span>$15,000</span></div>
        <div>Total Expenses: <span>$5,000</span></div>
        <div>Net Profit: <span>$10,000</span></div>
    </div>
</div>