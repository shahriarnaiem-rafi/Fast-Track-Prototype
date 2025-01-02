
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Form</title>
    <style>
        /* General Styling */
       

        .form-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            background: #ffffff;
            border-radius: 15px;
            padding: 20px 30px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            max-width: 900px;
            width: 100%;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
            color: #2575fc;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            font-size: 0.9rem;
            color: #333;
        }

        input[type="text"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="tel"]:focus,
        select:focus {
            border-color: #2575fc;
        }

        select {
            background-color: #f9f9f9;
            appearance: none;
            font-size: 1rem;
        }

        .button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .button:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
        }

        .form-section {
            flex: 1;
            margin-bottom: 20px;
        }

        /* Receipt Styling */
        #receipt {
            background: #fff;
            border: 1px solid #000;
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            color: #000;
        }

        .receipt-header {
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 1.2rem;
            border-bottom: 1px solid #000;
            padding-bottom: 10px;
        }

        .receipt-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .receipt-row div {
            flex: 1;
            text-align: center;
            font-size: 0.9rem;
            padding: 5px;
            border: 1px solid #000;
        }

        .receipt-ref {
            text-align: right;
            margin: 10px 0;
            font-weight: bold;
        }

        .receipt-details {
            border: 1px solid #000;
            padding: 10px;
            margin-top: 10px;
        }

        .receipt-footer {
            text-align: center;
            margin-top: 10px;
            font-size: 0.8rem;
            border-top: 1px solid #000;
            padding-top: 10px;
        }

        .receipt-footer p {
            margin: 2px 0;
        }

        .print-button {
            margin-top: 10px;
            text-align: center;
        }/* Hide Print Button during Printing */
        @media print {
            .print-button {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <!-- Sender Form -->
        <div class="form-section">
            <h2>Sender</h2>
            <form id="senderForm">
                <label for="service">Service Type</label>
                <select id="service" name="service">
                    <option value="Standard">Standard</option>
                    <option value="Express">Express</option>
                </select>

                <label for="senderName">Name</label>
                <input type="text" id="senderName" name="senderName" required>

                <label for="senderAddress">Address</label>
                <input type="text" id="senderAddress" name="senderAddress" required>

                <label for="senderPhone">Phone</label>
                <input type="tel" id="senderPhone" name="senderPhone" required>
            </form>
        </div>

        <!-- Receiver Form -->
        <div class="form-section">
            <h2>Receiver</h2>
            <form id="receiverForm">
                <label for="receiverName">Name</label>
                <input type="text" id="receiverName" name="receiverName" required>

                <label for="receiverAddress">Address</label>
                <input type="text" id="receiverAddress" name="receiverAddress" required>

                <label for="receiverPhone">Phone</label>
                <input type="tel" id="receiverPhone" name="receiverPhone" required>
            </form>
        </div>
    </div>

    <input type="button" value="Submit" id="submitBtn" class="button">

    <div id="receipt" style="display: none;">
        <div class="receipt-header">
            Fast-track Courier Service (PVT.) LTD.
        </div>
        <div class="receipt-row">
            <div>
                <strong>Origin</strong>
                <p id="receiptOrigin">---</p>
            </div>
            <div>
                <strong>Destination</strong>
                <p id="receiptDestination">---</p>
            </div>
        </div>
        <div class="receipt-ref">
            Ref. No: <span id="receiptRefNo">12345678</span>
        </div>
        <div class="receipt-details">
            <p><strong>From:</strong></p>
            <p>Name: <span id="receiptSenderName"></span></p>
            <p>Address: <span id="receiptSenderAddress"></span></p>
            <p>Phone: <span id="receiptSenderPhone"></span></p>
            <p><strong>To:</strong></p>
            <p>Name: <span id="receiptReceiverName"></span></p>
            <p>Address: <span id="receiptReceiverAddress"></span></p>
            <p>Phone: <span id="receiptReceiverPhone"></span></p>
        </div>
        <div class="receipt-footer">
            <p>Head Office: Dhaka</p>
            <p>Corporate Office: Chittagong</p>
        </div>
        <div class="print-button">
            <button onclick="printReceipt()">Print</button>
        </div>
    </div>

    <script>
        document.getElementById('submitBtn').addEventListener('click', function () {
            // Gather data from forms
            const senderName = document.getElementById('senderName').value;
            const senderAddress = document.getElementById('senderAddress').value;
            const senderPhone = document.getElementById('senderPhone').value;
            const receiverName = document.getElementById('receiverName').value;
            const receiverAddress = document.getElementById('receiverAddress').value;
            const receiverPhone = document.getElementById('receiverPhone').value;

            // Update receipt content
            document.getElementById('receiptSenderName').textContent = senderName;
            document.getElementById('receiptSenderAddress').textContent = senderAddress;
            document.getElementById('receiptSenderPhone').textContent = senderPhone;
            document.getElementById('receiptReceiverName').textContent = receiverName;
            document.getElementById('receiptReceiverAddress').textContent = receiverAddress;
            document.getElementById('receiptReceiverPhone').textContent = receiverPhone;

            // Show receipt
            document.getElementById('receipt').style.display = 'block';
        });

        function printReceipt() {
            const receiptContent = document.getElementById('receipt').innerHTML;
            const printWindow = window.open('', '_blank', 'width=800,height=600');
            printWindow.document.write('<html><head><title>Print Receipt</title></head><body>');
            printWindow.document.write(receiptContent);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }
    </script>
</body>
</html>
