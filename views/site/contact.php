<!DOCTYPE html>
<html>
<head>
    <!-- <title>Invoice</title> -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Name: <?= $customerData['name'] ?></p>
                <p>Address: <?= $customerData['Address'] ?></p>
                <p>City: <?= $customerData['City'] ?></p>
                <!-- Add more customer details as needed -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($invoiceData as $item): ?>
                            <tr>
                                <td><?= $item['name'] ?></td>
                                <td><?= $item['quantity'] ?></td>
                                <td><?= $item['rate'] ?></td>
                                <td><?= $item['total'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Payment Method: <?= $paymentDetails['PaymentMethod'] ?></p>
                <p>Transaction ID: <?= $paymentDetails['TransactionID'] ?></p>
                <p>Subtotal: <?= $paymentDetails['Subtotal'] ?></p>
                <p>Date: <?= $paymentDetails['Date'] ?></p>
            </div>
        </div>
    </div>
</body>
</html>
