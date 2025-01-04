<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
            <p>Product: <span id="receiverProduct"></span></p>
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
        //  document.getElementById("myForm").addEventListener("submit", function(event) {
        //         event.preventDefault();
        //         console.log("Form submitted without reloading the page!");

        //     });
        document.getElementById('submitBtn').addEventListener('click', function() {
            // Gather data from forms
            event.stopPropagation();
            const senderName = document.getElementById('senderName').value;
            const senderAddress = document.getElementById('senderAddress').value;
            const senderPhone = document.getElementById('senderPhone').value;
            const receiverName = document.getElementById('receiverName').value;
            const receiverAddress = document.getElementById('receiverAddress').value;
            const receiverPhone = document.getElementById('receiverPhone').value;
            const receiverProduct = document.getElementById('receiverProduct').value;

            // Update receipt content
            document.getElementById('receiptSenderName').textContent = senderName;
            document.getElementById('receiptSenderAddress').textContent = senderAddress;
            document.getElementById('receiptSenderPhone').textContent = senderPhone;
            document.getElementById('receiptReceiverName').textContent = receiverName;
            document.getElementById('receiptReceiverAddress').textContent = receiverAddress;
            document.getElementById('receiptReceiverPhone').textContent = receiverPhone;
            document.getElementById('receiverProduct').textContent = receiverProduct;

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