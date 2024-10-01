<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Educational Quiz</title>
    <!-- Include Bootstrap CSS -->
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
    <div class="container">
        <h1>Welcome to the Maths Quiz </h1>
        <p>Test your knowledge and have fun!</p>
        
        <!-- Quiz Questions Go Here -->
        <div id="quiz">
            <!-- Question 1 -->
            <div class="question">
                <h3>Question 1: What is the capital of France?</h3>
                <ul class="choices">
                    <li><input type="radio" name="q1" value="Paris"> Paris</li>
                    <li><input type="radio" name="q1" value="Berlin"> Berlin</li>
                    <li><input type="radio" name="q1" value="London"> London</li>
                </ul>
            </div>

            <!-- Question 2 -->
            <div class="question">
                <h3>Question 2: How many sides does a hexagon have?</h3>
                <ul class="choices">
                    <li><input type="radio" name="q2" value="4"> 4</li>
                    <li><input type="radio" name="q2" value="6"> 6</li>
                    <li><input type="radio" name="q2" value="8"> 8</li>
                </ul>
            </div>
            <!-- Question 3 -->
            <div class="question">
                <h3>Question 3: How many sides does a hexagon have?</h3>
                <ul class="choices">
                    <li><input type="radio" name="q2" value="4"> 4</li>
                    <li><input type="radio" name="q2" value="6"> 6</li>
                    <li><input type="radio" name="q2" value="8"> 8</li>
                </ul>
            </div>
            <!-- Question 4 -->
            <div class="question">
                <h3>Question 4: How many sides does a hexagon have?</h3>
                <ul class="choices">
                    <li><input type="radio" name="q2" value="4"> 4</li>
                    <li><input type="radio" name="q2" value="6"> 6</li>
                    <li><input type="radio" name="q2" value="8"> 8</li>
                </ul>
            </div>
            <!-- Question 5 -->
            <div class="question">
                <h3>Question 5: How many sides does a hexagon have?</h3>
                <ul class="choices">
                    <li><input type="radio" name="q2" value="4"> 4</li>
                    <li><input type="radio" name="q2" value="6"> 6</li>
                    <li><input type="radio" name="q2" value="8"> 8</li>
                </ul>
            </div>
            <!-- Question 6 -->
            <div class="question">
                <h3>Question 6: How many sides does a hexagon have?</h3>
                <ul class="choices">
                    <li><input type="radio" name="q2" value="4"> 4</li>
                    <li><input type="radio" name="q2" value="6"> 6</li>
                    <li><input type="radio" name="q2" value="8"> 8</li>
                </ul>
            </div>
            <!-- Question 7 -->
            <div class="question">
                <h3>Question 7: How many sides does a hexagon have?</h3>
                <ul class="choices">
                    <li><input type="radio" name="q2" value="4"> 4</li>
                    <li><input type="radio" name="q2" value="6"> 6</li>
                    <li><input type="radio" name="q2" value="8"> 8</li>
                </ul>
            </div>
            <!-- Question 8 -->
            <div class="question">
                <h3>Question 8: How many sides does a hexagon have?</h3>
                <ul class="choices">
                    <li><input type="radio" name="q2" value="4"> 4</li>
                    <li><input type="radio" name="q2" value="6"> 6</li>
                    <li><input type="radio" name="q2" value="8"> 8</li>
                </ul>
            </div>
            <!-- Question 9-->
            <div class="question">
                <h3>Question 9: How many sides does a hexagon have?</h3>
                <ul class="choices">
                    <li><input type="radio" name="q2" value="4"> 4</li>
                    <li><input type="radio" name="q2" value="6"> 6</li>
                    <li><input type="radio" name="q2" value="8"> 8</li>
                </ul>
            </div>
            <!-- Question 10 -->
            <div class="question">
                <h3>Question 10: How many sides does a hexagon have?</h3>
                <ul class="choices">
                    <li><input type="radio" name="q2" value="4"> 4</li>
                    <li><input type="radio" name="q2" value="6"> 6</li>
                    <li><input type="radio" name="q2" value="8"> 8</li>
                </ul>
            </div>

            <!-- Add more questions here -->
        </div>
        
        <!-- Display Quiz Results -->
        <div id="results" class="alert alert-info">
            <p>Your Score: <span id="score">0</span></p>
        </div>
        
        <button class="btn btn-primary" id="submit">Submit Answers</button>
    </div>
    
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Your JavaScript for quiz logic goes here -->
    <script>
        // Add your quiz logic here
        document.getElementById("submit").addEventListener("click", function() {
            // Calculate and display the score
        });
    </script>
</body>
</html>