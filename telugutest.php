<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <h1>Quiz</h1>
        <form id="quizForm">
            <div class="form-group">
                <label for="question1">1. తెలుగు సమాసంలో 'బాలుడు మిత్రం' గురించి ఉంటున్నది.</label>
                <select class="form-control" id="question1">
                    <option value="">Select an answer</option>
                    <option value="ద్వంద్వ సమాసం">ద్వంద్వ సమాసం</option>
                    <option value="కర్మధారయ సమాసం">కర్మధారయ సమాసం</option>
                    <option value="తత్పురుష సమాసం">తత్పురుష సమాసం</option>
                </select>
            </div>
            <div class="form-group">
                <label for="question2">2.క్రియ పదాన్ని విధించుటకు కారకం ఏమిటి?</label>
                <select class="form-control" id="question2">
                    <option value="">Select an answer</option>
                    <option value="కర్మకారకము"> కర్మకారకము</option>
                    <option value="సంబంధకారకము">సంబంధకారకము</option>
                    <option value="ఉపకరకము">ఉపకరకము</option>
                </select>
            </div>
            <div class="form-group">
                <label for="question3">3. కారక వాక్యంలో కార్యకారణం ఏమిటి?</label>
                <select class="form-control" id="question3">
                    <option value="">Select an answer</option>
                    <option value="నేపథ్యం">నేపథ్యం</option>
                    <option value="కారకుడు">కారకుడు</option>
                    <option value="కార్యకారణ కారకము">కార్యకారణ కారకము</option>
                </select>
            </div>
            <div class="form-group">
                <label for="question4">4.వాక్యంలో ఆకర్షణ చిహ్నములు ఏమిటి?</label>
                <select class="form-control" id="question4">
                    <option value="">Select an answer</option>
                    <option value="విరామ చిహ్నము">విరామ చిహ్నము</option>
                    <option value="విభక్తి చిహ్నము">విభక్తి చిహ్నము</option>
                    <option value="సమాస చిహ్నము">సమాస చిహ్నము</option>
                </select>
            </div>
            <div class="form-group">
                <label for="question5">5. తెలుగు భాషలో అక్షరాల సరళమైన ప్రతిరూపం ఏమిటి?</label>
                <select class="form-control" id="question5">
                    <option value="">Select an answer</option>
                    <option value="వట్లాది ప్రతిరూపం">వట్లాది ప్రతిరూపం</option>
                    <option value="కూడ్లాది ప్రతిరూపం">కూడ్లాది ప్రతిరూపం</option>
                    <option value="జ్ఞాది ప్రతిరూపం">జ్ఞాది ప్రతిరూపం</option>
                </select>
            </div>
            <div class="form-group">
                <label for="question6">6. తెలుగు సమాసము 'వాణిపాటి' గురించి ఉంటున్నది.</label>
                <select class="form-control" id="question6">
                    <option value="">Select an answer</option>
                    <option value="ద్వంద్వ సమాసము">ద్వంద్వ సమాసము</option>
                    <option value="కర్మధారయ సమాసము">కర్మధారయ సమాసము</option>
                    <option value="తత్పురుష సమాసము">తత్పురుష సమాసము</option>
                </select>
            </div>
            <div class="form-group">
                <label for="question7">7. తెలుగులో 'నిద్రించి వెళ్ళు' అనగా 'నిద్ర పోయింది' అనగా ఏమిటి?</label>
                <select class="form-control" id="question7">
                    <option value="">Select an answer</option>
                    <option value=" అకర్మక క్రియ">అకర్మక క్రియ</option>
                    <option value="ఆకర్షణ క్రియ">ఆకర్షణ క్రియ</option>
                    <option value="క్రియాపద విధిలు">క్రియాపద విధిలు</option>
                </select>
            </div>
            <div class="form-group">
                <label for="question8">8. తెలుగులో 'త్రిశంకు' అనగా 'మూడు శంకలు' అనగా ఏమిటి?</label>
                <select class="form-control" id="question8">
                    <option value="">Select an answer</option>
                    <option value="అవ్యయం">అవ్యయం</option>
                    <option value="సర్వనామము">సర్వనామము</option>
                    <option value="సంజ్ఞ">సంజ్ఞ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="question9">9.తెలుగులో 'వ్యాకరణము' అనగా 'వాక్య రచన' అనగా ఏమిటి?</label>
                <select class="form-control" id="question9">
                    <option value="">Select an answer</option>
                    <option value="అవ్యయం">అవ్యయం</option>
                    <option value="సర్వనామము">సర్వనామము</option>
                    <option value="సంజ్ఞ">సంజ్ఞ</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary" id="submitQuiz">Submit</button>
        </form>
        <div id="quizResults" class="mt-4"></div>
    </div>

    <script>
        document.getElementById('submitQuiz').addEventListener('click', function() {
            // Get selected answers
            const answer1 = document.getElementById('question1').value;
            const answer2 = document.getElementById('question2').value;
             const answer3 = document.getElementById('question3').value;
              const answer4 = document.getElementById('question4').value;
               const answer5 = document.getElementById('question5').value;
                const answer6 = document.getElementById('question6').value;
                 const answer7 = document.getElementById('question7').value;
                  const answer8 = document.getElementById('question8').value;
                   const answer9 = document.getElementById('question9').value;

            // Calculate the score
            let score = 0;
            if (answer1 === 'కర్మధారయ సమాసం') {
                score += 1;
            }
            if (answer2 === 'ఉపకరకము') {
                score += 1;
            }
            if (answer3 === 'కార్యకారణ కారకము') {
                score += 1;
            }
            if (answer4 === 'సమాస చిహ్నము') {
                score += 1;
            }
            if (answer5 === 'వట్లాది ప్రతిరూపం') {
                score += 1;
            }
            if (answer6 === 'కర్మధారయ సమాసము') {
                score += 1;
            }
            if (answer7 === 'ఆకర్షణ క్రియ') {
                score += 1;
            }
            if (answer8 === 'సంజ్ఞ') {
                score += 1;
            }
            if (answer9 === 'సర్వనామము') {
                score += 1;
            }

            // Display the score
            const quizResults = document.getElementById('quizResults');
            quizResults.innerHTML = `<p>Your score is: ${score} out of 9</p>`;
        });
    </script>
</body>
</html>