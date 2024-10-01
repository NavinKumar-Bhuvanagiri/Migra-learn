<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('v3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Simple Calculator</h2>
        <div class="row">
            <div class="col-md-4">
                <input type="text" class="form-control" id="display" readonly>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <button class="btn btn-primary btn-block" onclick="appendToDisplay('1')">1</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary btn-block" onclick="appendToDisplay('2')">2</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary btn-block" onclick="appendToDisplay('3')">3</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-warning btn-block" onclick="appendToDisplay('+')">+</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <button class="btn btn-primary btn-block" onclick="appendToDisplay('4')">4</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary btn-block" onclick="appendToDisplay('5')">5</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary btn-block" onclick="appendToDisplay('6')">6</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-warning btn-block" onclick="appendToDisplay('-')">-</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <button class="btn btn-primary btn-block" onclick="appendToDisplay('7')">7</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary btn-block" onclick="appendToDisplay('8')">8</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary btn-block" onclick="appendToDisplay('9')">9</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-warning btn-block" onclick="appendToDisplay('*')">*</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <button class="btn btn-danger btn-block" onclick="clearDisplay()">C</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary btn-block" onclick="appendToDisplay('0')">0</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-success btn-block" onclick="calculateResult()">=</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-warning btn-block" onclick="appendToDisplay('/')">/</button>
            </div>
        </div>
    </div>

    <script>
        function appendToDisplay(value) {
            document.getElementById('display').value += value;
        }

        function clearDisplay() {
            document.getElementById('display').value = '';
        }

        function calculateResult() {
            const display = document.getElementById('display');
            try {
                display.value = eval(display.value);
            } catch (error) {
                display.value = 'Error';
            }
        }
    </script>
</body>
</html>
