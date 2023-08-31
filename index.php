<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PesaPal Payments</title>
    <!-- Add Bootstrap CSS link here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color:#f8f8f8">
    <div class="container d-flex justify-content-center align-items-center vh-80">
        <form action="iframe.php" method="post" class="rounded p-5">
            <h2 class="mb-4 text-center text-primary">Make Payment using <span class="text-warning">PesaPal</span></h2>
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name:</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name:</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number:</label>
                <input type="tel" name="phone_number" id="phone_number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="currency" class="form-label">Currency:</label>
                <select name="currency" id="currency" class="form-select" required>
                    <option value="KES">Kenya shillings</option>  
                    <option value="UGX">Ugandan Shillings</option> 
                    <option value="TZS">Tanzanian shillings</option>  
                    <option value="USD">US Dollars</option>  
                </select>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount:</label>
                <input type="number" name="amount" id="amount" class="form-control" required>
            </div>
            <div class="mb-3" id="refholder" style="visibility: hidden">
                <label for="reference" class="form-label">Reference:</label>
                <input type="text" name="reference" id="reference" class="form-control">
            </div>
            <div class="mb-3">
                <input type="checkbox" name="ref" id="ref" class="form-check-input" onClick="return referenceShuffle()">
                <label class="form-check-label" for="ref">System allows my clients to input a predefined reference code issued to the client before they make the payment</label>
            </div>
            <div class="mb-3">
                <input type="checkbox" name="keys" id="keys" class="form-check-input">
                <label class="form-check-label" for="keys"><b>ENSURE TO CHECK THIS FIELD</b> The consumer key and consumer secret I have used in this sample PHP code are <a href="https://developer.pesapal.com/api3-demo-keys.txt"><b>DEMO Credentials</b></a>.</label>
            </div>
            <hr class="my-4">
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <input type="text" name="description" id="description" class="form-control" value="Payments to XYZ Company">
            </div>
            <button type="submit" class="btn btn-primary">Make Payment</button>
        </form>
    </div>

    <!-- Optional: Add Bootstrap JS and jQuery scripts here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function referenceShuffle(val) {
            if (document.getElementById('ref').checked) {
                document.getElementById("refholder").style.visibility = "visible";
            } else {
                document.getElementById("refholder").style.visibility = "hidden";
            }
        }
    </script>
</body>
</html>


<?php  ?>