<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Learning Chatbot</title>
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
        <h1>English Learning Chatbot</h1>
        <div class="card">
            <div class="card-body" id="chat-container">
                <p class="card-text">Chatbot: Hello! I'm here to help you learn English. Ask me questions or practice your English.</p>
            </div>
        </div>
        <div class="mt-3">
            <input type="text" class="form-control" id="user-input" placeholder="Type your message">
            <button class="btn btn-primary mt-2" onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
        const chatContainer = document.getElementById('chat-container');
        const userInput = document.getElementById('user-input');

        function addMessage(who, message) {
            const messageElement = document.createElement('p');
            messageElement.className = 'card-text';
            messageElement.innerText = `${who}: ${message}`;
            chatContainer.appendChild(messageElement);
        }

        function sendMessage() {
            const userMessage = userInput.value.trim();
            if (userMessage === '') return;

            addMessage('You', userMessage);

            // Simple predefined responses for English learning
            const chatbotResponse = generateChatbotResponse(userMessage);
            addMessage('Chatbot', chatbotResponse);

            userInput.value = ''; // Clear the input field
        }

        // Function to generate chatbot responses (can be expanded with more comprehensive responses)
        function generateChatbotResponse(userMessage) {
            // Basic responses for greetings
            if (userMessage.toLowerCase().includes('hello') || userMessage.toLowerCase().includes('hi')) {
                return 'Hello! How can I assist you with your English learning today?';
            }
             if (userMessage.toLowerCase().includes('i need to improve my communication') || userMessage.toLowerCase().includes('hi')) {
                return 'oh ok then lets communicate';
            }
             if (userMessage.toLowerCase().includes('what is your name') || userMessage.toLowerCase().includes('hi')) {
                return 'i am an chatbot i dont have an specific name,what is yours';
            }

            // Vocabulary practice (you can add more words and their meanings)
            if (userMessage.toLowerCase().includes('my name is navin')) {
                return 'wow such a nice name';
            }

            // Default response
            return 'I can help you with English learning. Feel free to ask questions or practice words!';
        }
    </script>
</body>
</html>
