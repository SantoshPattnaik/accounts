<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Accounts</title>
</head>

<body>
    <div class="container">
        <h1 id="site-title" class="display-3">ACCOUNTS MANAGEMENT</h1>
        <form action="./db_insert.php" method="post" class="was-validated form-group" onsubmit="return validate()">
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label">Date Of Transaction</label>
                <input type="date" name="date" class="form-control" required>
                <div class="valid-feedback">Ok.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label">Name</label>
                <input type="text" name="acname" class="form-control" placeholder="Enter Your Name Here" required>
                <div class="valid-feedback">Ok.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label">Bank Name</label>
                <select class="form-control" type="text" name="bank">
                    <option>State Bank Of India</option>
                    <option>Union Bank</option>
                    <option>Canara Bank</option>
                    <option>Federal Bank</option>
                    <option>Punjab National Bank</option>
                    <option>Yes Bank</option>
                    <option>Axis Bank</option>
                    <option>HDFC Bank</option>
                    <option>ICICI Bank</option>
                </select>
                <div class="valid-feedback">Ok.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label">Payment Method</label>
                <select class="form-control" type="text" name="pay_method">
                    <option>UPI</option>
                    <option>Transfer</option>
                    <option>Cheque</option>
                    <option>Credit Card</option>
                    <option>Debit Card</option>
                    <option>Netbanking</option>
                    <option>RTGS</option>
                </select>
                <div class="valid-feedback">Ok.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label">Transaction ID</label>
                <input type="text" name="trans_id" class="form-control" placeholder="Enter The Transaction ID Here"
                    required>
                <div class="valid-feedback">Ok.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label">Amount in INR</label>
                <input type="text" name="amount" class="form-control" placeholder="Enter The Transaction Amount Here"
                    required>
                <div class="valid-feedback">Ok.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                <label class="form-check-label" for="myCheck">I agree that the details I have given are correct</label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <br>
    </div>
    <script src="./script.js"></script>
    <script src="./bootstrap-5.1.3/js/bootstrap.min.js"></script>
</body>

</html>