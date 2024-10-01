<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitals </title>
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
        <h1>Capitals </h1>
        <div class="form-group">
            <input type="text" id="user-input" class="form-control" placeholder="Ask a question">
        </div>
        <button id="ask-button" class="btn btn-primary">Ask</button>
        <div id="chat-log" class="mt-4"></div>
    </div>

    <script>
        // Define dictionaries for Indian states and their capitals, and world countries and their capitals
        const indianStates = {
            'andhra pradesh': 'Amaravati',
            'arunachal pradesh': 'Itanagar',
            'assam': 'Dispur',
            'bihar': 'Patna',
            'chhattisgarh': 'Raipur',
            'goa': 'Panaji',
            'gujarat': 'Gandhinagar',
            'uttar pradesh': 'lucknow',
            'rajasthan': 'jaipur',
            'haryana': 'candigarh',
            'himachal pradesh': 'shimla',
            'tamilnadu': 'chennai',
            'maharastra': 'mumbai',
            'punjab': 'chandigarh',
            'telangana': 'hyderabad',
            'uttarakhand': 'dehradun',
            'goa': 'panaji',
            'jharkhand': 'ranchi',
            'karnataka': 'benguluru',
            'manipur': 'imphal',
            'sikkim': 'Gangtok',
            'nagaland': 'kohima',
            'kerala': 'thiruvananthapuram',
            'odisha': 'bhubaneswar',
            'madhya pradesh': 'bhupal',
            'meghalaya': 'shilong',
            'mizoram': 'aizwal',
            'westbengal': 'kolkata',
            'tripura': 'agartala',


            // Add more states and capitals here
        };

        const worldCountries = {
            'india': 'New Delhi',
            'united states': 'Washington, D.C.',
            'united kingdom': 'London',
            'france': 'Paris',
            'germany': 'Berlin',
            'china': 'Beijing',
            'japan': 'Tokyo',
            // Add more countries and capitals here
        };

        // Function to handle user queries
        function chatbot() {
            const userInput = document.getElementById('user-input').value.trim();
            const chatLog = document.getElementById('chat-log');

            if (userInput.toLowerCase() === 'quit') {
                chatLog.innerHTML += '<p>Goodbye!</p>';
            } else if (indianStates[userInput]) {
                chatLog.innerHTML += `<p>The capital of ${userInput} is ${indianStates[userInput]}.</p>`;
            } else if (worldCountries[userInput]) {
                chatLog.innerHTML += `<p>The capital of ${userInput} is ${worldCountries[userInput]}.</p>`;
            } else {
                chatLog.innerHTML += '<p>I\'m sorry, I don\'t know the answer to that question.</p>';
            }

            document.getElementById('user-input').value = '';
        }

        // Event listener for the "Ask" button
        document.getElementById('ask-button').addEventListener('click', chatbot);
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>