<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic-Tac-Toe</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('v3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <style>
        .cell {
            width: 100px;
            height: 100px;
            font-size: 24px;
            text-align: center;
            cursor: pointer;
             border: 3px solid black;
              display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Tic-Tac-Toe</h1>
        <div class="row mt-4">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="row">
                    <div class="col cell" onclick="makeMove(0, 0)"></div>
                    <div class="col cell" onclick="makeMove(0, 1)"></div>
                    <div class="col cell" onclick="makeMove(0, 2)"></div>
                </div>
                <div class="row">
                    <div class="col cell" onclick="makeMove(1, 0)"></div>
                    <div class="col cell" onclick="makeMove(1, 1)"></div>
                    <div class="col cell" onclick="makeMove(1, 2)"></div>
                </div>
                <div class="row">
                    <div class="col cell" onclick="makeMove(2, 0)"></div>
                    <div class="col cell" onclick="makeMove(2, 1)"></div>
                    <div class="col cell" onclick="makeMove(2, 2)"></div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
        <div id="result" class="mt-4 text-center"></div>
        <button class="btn btn-primary mt-3" onclick="resetBoard()">Reset Board</button>
    </div>

    <script>
        const cells = document.querySelectorAll('.cell');
        const resultElement = document.getElementById('result');
        let currentPlayer = 'X';
        let board = ['', '', '', '', '', '', '', '', ''];
        let gameActive = true;

        function makeMove(row, col) {
            if (!gameActive || board[row * 3 + col] !== '') return;

            board[row * 3 + col] = currentPlayer;
            cells[row * 3 + col].innerText = currentPlayer;
            cells[row * 3 + col].classList.add('text-' + currentPlayer.toLowerCase());

            if (checkWin()) {
                resultElement.innerText = `Player ${currentPlayer} wins!`;
                gameActive = false;
            } else if (isBoardFull()) {
                resultElement.innerText = "It's a draw!";
                gameActive = false;
            } else {
                currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
            }
        }

        function checkWin() {
            const winPatterns = [
                [0, 1, 2], [3, 4, 5], [6, 7, 8], // Rows
                [0, 3, 6], [1, 4, 7], [2, 5, 8], // Columns
                [0, 4, 8], [2, 4, 6] // Diagonals
            ];

            for (const pattern of winPatterns) {
                const [a, b, c] = pattern;
                if (board[a] && board[a] === board[b] && board[a] === board[c]) {
                    return true;
                }
            }

            return false;
        }

        function isBoardFull() {
            return board.every(cell => cell !== '');
        }

        function resetBoard() {
            board = ['', '', '', '', '', '', '', '', ''];
            cells.forEach(cell => {
                cell.innerText = '';
                cell.classList.remove('text-x', 'text-o');
            });
            resultElement.innerText = '';
            currentPlayer = 'X';
            gameActive = true;
        }
    </script>
</body>
</html>
