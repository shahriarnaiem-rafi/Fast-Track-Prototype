<?php 
$database = mysqli_connect("localhost", "root", "", "fasttrack");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Drivers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
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
            font-weight: bold;
        }

        .form-group select, .form-group input {
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        table th {
            background-color: #007bff;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        table a {
            color: red;
            font-size: 18px;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="assign-container">
    <h2>Assign Drivers</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="order-id">Order ID</label>
            <select name="customer_id1" id="order-id">
                <?php
                $ns = $database->query("SELECT * FROM customer_section");
                while (list($id) = $ns->fetch_row()) {
                    echo "<option value='$id'>$id</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="driver">Assign Driver</label>
            <select id="driver" name="driver">
                <?php
                $ns = $database->query("SELECT * FROM driver_management");
                while (list($id, $dname, $dphone) = $ns->fetch_row()) {
                    echo "<option value='$id'>$dname</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="vehicle">Assign Vehicle</label>
            <select id="vehicle" name="vehicle">
                <option value="Truck 101">Truck 101</option>
                <option value="Van 202">Van 202</option>
                <option value="Bike 303">Bike 303</option>
            </select>
        </div>
        <div class="form-actions">
            <button type="submit" name="asing">Assign</button>
        </div>
    </form>
</div>

<!-- Search Field -->
<div class="form-group">
    <label for="search-input">Search by Order ID</label>
    <input type="text" id="search-input" class="form-control" placeholder="Enter Order ID">
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Driver ID</th>
                <th>Vehicle</th>
                <th>Order ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="table-body">
            <?php
            $show = $database->query("SELECT * FROM assing_drivers");
            while ($row = $show->fetch_assoc()) {
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['driver_id']}</td>
                    <td>{$row['vehicle']}</td>
                    <td>{$row['order_id']}</td>
                    <td><a href='index.php?deleteid={$row['id']}'>Delete</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    // Search Functionality
    document.getElementById('search-input').addEventListener('keyup', function () {
        const searchValue = this.value.toLowerCase();
        const tableRows = document.querySelectorAll('#table-body tr');

        tableRows.forEach(row => {
            const orderIdCell = row.children[3].textContent.toLowerCase();
            if (orderIdCell.includes(searchValue)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
