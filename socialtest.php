<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOCIAL TEST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('v3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <style>
        .quiz-container {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container quiz-container mt-5">
        <h1 class="mb-4">SOCIAL</h1>
        <form id="quiz-form">
            <div class="form-group">
                <label for="q1">1. Who were the first European explorers to reach the Americas</label>
                <input type="text" class="form-control" id="q1" required>
            </div>
            <div class="form-group">
                <label for="q2">2. What is the capital of France?</label>
                <input type="text" class="form-control" id="q2" required>
            </div>
            <div class="form-group">
                <label for="q3">3.Who was the first President of the United States?</label>
                <input type="text" class="form-control" id="q3" required>
            </div>
            <div class="form-group">
                <label for="q4">4.What is the largest continent on Earth?</label>
                <input type="text" class="form-control" id="q4" required>
            </div>
            <div class="form-group">
                <label for="q5">5. Which imaginary line divides the Earth into the Northern and Southern Hemispheres?</label>
                <input type="text" class="form-control" id="q5" required>
            </div>
            <div class="form-group">
                <label for="q6">6.What is the name of the world's largest desert</label>
                <input type="text" class="form-control" id="q6" required>
            </div>
            <div class="form-group">
                <label for="q7">7.Which ocean is the largest and covers more than one-third of the Earth's surface </label>
                <input type="text" class="form-control" id="q7" required>
            </div>
            <div class="form-group">
                <label for="q8">8. What is the tallest mountain in the world?</label>
                <input type="text" class="form-control" id="q8" required>
            </div>
            <div class="form-group">
                <label for="q9">9.Which country is known as the Land of the Rising Sun?</label>
                <input type="text" class="form-control" id="q9" required>
            </div>
            <div class="form-group">
                <label for="q10">10. What is the largest country by land area in the world?</label>
                <input type="text" class="form-control" id="q10" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div id="result-container" class="mt-4">
            <!-- Results will be displayed here -->
        </div>
    </div>

    <script>
        document.getElementById("quiz-form").addEventListener("submit", function (e) {
            e.preventDefault();

            // Define correct answers
            const correctAnswers = {
                q1: "columbus",
                q2: "paris",
                q3: "george washington",
                q4: "asia",
                q5: "equator",
                q6: "sahara",
                q7: "pacific",
                q8: "everest",
                q9: "japan",
                q10: "russia",


            };

            // Initialize variables for score and incorrect answers
            let score = 0;
            const incorrectAnswers = [];

            // Check answers
            for (const questionId in correctAnswers) {
                const userAnswer = document.getElementById(questionId).value.trim();
                const correctAnswer = correctAnswers[questionId];

                if (userAnswer === correctAnswer) {
                    score++;
                } else {
                    incorrectAnswers.push({ question: questionId, userAnswer, correctAnswer });
                }
            }

            // Display results
            const resultContainer = document.getElementById("result-container");
            resultContainer.innerHTML = `
                <h2>Results</h2>
                <p>Score: ${score} out of ${Object.keys(correctAnswers).length}</p>
                <h3>Incorrect Answers:</h3>
                <ul>
                    ${incorrectAnswers.map(answer => `
                        <li>
                            Question ${answer.question.slice(1)}: 
                            You answered "${answer.userAnswer}" 
                            (Correct answer: "${answer.correctAnswer}")
                        </li>
                    `).join('')}
                </ul>
            `;
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>