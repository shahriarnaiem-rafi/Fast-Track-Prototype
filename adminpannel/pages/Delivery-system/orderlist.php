<?php
    $database = mysqli_connect("localhost", "root", "", "fasttrack");
?>
 <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 20px;
    }

    .table-container {
        max-width: 90%;
        margin: 20px auto;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
    }

    thead {
        background-color: #007bff;
        color: #fff;
    }

    th,
    td {
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

    .status.completed {
        color: #155724;
        background-color: #d4edda;
    }

    .status.cancelled {
        color: #721c24;
        background-color: #f8d7da;
    }
</style> 
<?php























$ns = $database->query("select * from  customer_section");
echo "<div class='table-container'> 
<p>Order List</p>  
<table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Service  Type</th>
                <th>sender Name</th>
                 <th>Pickup Location</th>
                <th>sender phone </th>
                <th>receiver Name</th>
                <th>Delivery Location</th>
                <th>receiver phone</th>
                <th>Product</th>
                <th>Status</th>
            </tr>
        </thead>";
while (list($id,$service_type, $sender_name, $sender_address, $sender_phone, $receiver_name, $receiver_address, $receiver_phone, $product) = $ns->fetch_row()) {
    echo " <tbody>
        <tr>
            <td>$id</td>
            <td>$service_type</td>
            <td>$sender_name</td>
            <td>$sender_address</td>
            <td>$sender_phone</td>
            <td>$receiver_name</td>
            <td>$receiver_address</td>
             <td>$receiver_phone</td>
            <td> $product</td>
            <td><span class='status pending'>Pending</span> </td>
            <td><button><a href='index.php?status.php=$id'>Update<a></button> </td>
        </tr>
       
    </tbody>";
}
echo " </table> </div>";



?>