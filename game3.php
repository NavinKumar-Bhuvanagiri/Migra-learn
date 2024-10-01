<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Puzzle</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <style>
        body {
            background-image: url('v3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            margin-top: 20px;
        }

        h1 {
            color: #333;
        }

        .puzzle-container {
            display: grid;
            grid-template-columns: repeat(3, 80px);
            gap: 5px;
            margin-top: 20px;
        }

        .row {
            display: flex;
        }

        .cell {
            width: 80px;
            height: 80px;
            border: 1px solid #333;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            cursor: pointer;
        }

        .empty {
            background-color: #f0f0f0;
            border: none;
            cursor: not-allowed;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Number Puzzle</h1>
        <div class="puzzle-container">
            <div class="row">
                <div class="cell">1</div>
                <div class="cell">2</div>
                <div class="cell">3</div>
            </div>
            <div class="row">
                <div class="cell">4</div>
                <div class="cell">5</div>
                <div class="cell">6</div>
            </div>
            <div class="row">
                <div class="cell">7</div>
                <div class="cell">8</div>
                <div class="cell empty"></div>
            </div>
        </div>
        <button id="shuffle" class="btn btn-primary mt-3">Shuffle</button>
    </div>
    
    <!-- Add Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const cells = document.querySelectorAll(".cell");
            const shuffleButton = document.getElementById("shuffle");

            // Function to shuffle the puzzle
            const shufflePuzzle = () => {
                const cellArray = Array.from(cells);
                for (let i = cellArray.length - 1; i > 0; i--) {
                    const j = Math.floor(Math.random() * (i + 1));
                    const temp = cellArray[i].textContent;
                    cellArray[i].textContent = cellArray[j].textContent;
                    cellArray[j].textContent = temp;
                }
            };

            // Function to check if the puzzle is solved
            const isPuzzleSolved = () => {
                const cellValues = Array.from(cells).map((cell) => cell.textContent);
                return cellValues.every((value, index) => {
                    return index === cellValues.length - 1 ? value === "" : value === (index + 1).toString();
                });
            };

            // Function to handle cell clicks
            const handleCellClick = (cell) => {
                if (cell.textContent === "") {
                    // Empty cell, can't be moved
                    return;
                }

                const emptyCell = document.querySelector(".empty");
                const cellIndex = Array.from(cells).indexOf(cell);
                const emptyIndex = Array.from(cells).indexOf(emptyCell);

                const isAdjacent = (
                    (cellIndex === emptyIndex - 1 && emptyIndex % 3 !== 0) || // Left
                    (cellIndex === emptyIndex + 1 && cellIndex % 3 !== 0) || // Right
                    cellIndex === emptyIndex - 3 || // Up
                    cellIndex === emptyIndex + 3 // Down
                );

                if (isAdjacent) {
                    // Swap the contents of the clicked cell and the empty cell
                    const temp = cell.textContent;
                    cell.textContent = "";
                    emptyCell.textContent = temp;
                }

                if (isPuzzleSolved()) {
                    alert("Congratulations! You solved the puzzle!");
                }
            };

            // Add an event listener to the shuffle button
            shuffleButton.addEventListener("click", () => {
                shufflePuzzle();
            });

            // Add event listeners to the puzzle cells to handle clicks
            cells.forEach((cell) => {
                cell.addEventListener("click", () => {
                    handleCellClick(cell);
                });
            });
        });
    </script>
</body>
</html>