<?php
$database = mysqli_connect("localhost", "root", "", "fasttrack");
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql=" DELETE FROM customer_section WHERE id=$id";
    if (mysqli_query($database, $sql) == TRUE) {
        header("location:index.php");
    }

}
?>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>

        thead {
            background-color: #007bff;
            color: #fff;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            font-weight: bold;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        .status {
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .status.pending {
            color: #856404;
            background-color: #fff3cd;
        }

        .status.in_transit {
            color: #0d6efd;
            background-color: #cce5ff;
        }

        .status.delivered {
            color: #155724;
            background-color: #d4edda;
        }

        .status.cancelled {
            color: #721c24;
            background-color: #f8d7da;
        }
    </style>
</head>

<body>
    <?php
    $ns = $database->query("SELECT * FROM customer_section");
    echo "<div class='table-container'> 
    <h3>Order List</h3>  
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Service Type</th>
                <th>Sender Name</th>
                <th>Pickup Location</th>
                <th>Sender Phone</th>
                <th>Receiver Name</th>
                <th>Delivery Location</th>
                <th>Receiver Phone</th>
                <th>Product</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>";
    while ($row = $ns->fetch_assoc()) {
        echo " 
        <tbody>
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['service_type']}</td>
                <td>{$row['sender_name']}</td>
                <td>{$row['sender_address']}</td>
                <td>{$row['sender_phone']}</td>
                <td>{$row['receiver_name']}</td>
                <td>{$row['receiver_address']}</td>
                <td>{$row['receiver_phone']}</td>
                <td>{$row['product']}</td>
                <td><span class='status {$row['status']}'>{$row['status']}</span></td>
                <td>
                    <button 
                        type='button' 
                        class='btn btn-primary' 
                        data-bs-toggle='modal' 
                        data-bs-target='#exampleModal' 
                        data-id='{$row['id']}' 
                        data-status='{$row['status']}'>
                        Update
                    </button>
                     <a href='index.php?deleteid={$row['id']}'>Delete</a
            </tr>
        </tbody>";
    }
    echo " </table> </div>";
    ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Order Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateStatusForm" method="POST" action="">
                        <input type="hidden" id="order-id" name="order_id" value="">
                        <div class="mb-3">
                            <label for="delivery-status" class="form-label">Delivery Status</label>
                            <select class="form-select" id="delivery-status" name="delivery_status">
                                <option value="pending">Pending</option>
                                <option value="in_transit">In Transit</option>
                                <option value="delivered">Delivered</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const exampleModal = document.getElementById('exampleModal');
            exampleModal.addEventListener('show.bs.modal', function (event) {
                // Button that triggered the modal
                const button = event.relatedTarget;
                const orderId = button.getAttribute('data-id');
                const currentStatus = button.getAttribute('data-status');

                // Set hidden input value
                document.getElementById('order-id').value = orderId;

                // Set current status in dropdown
                document.getElementById('delivery-status').value = currentStatus;
            });
        });
    </script>
    <?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = $_POST['order_id'];
    $new_status = $_POST['delivery_status'];

    $update_query = "UPDATE customer_section SET status = '$new_status' WHERE id = $order_id";
    if ($database->query($update_query)) {
        echo "Order status updated successfully!";
    } else {
        echo "Error updating status: " . $database->error;
    }
}
?>

</body>

</html>