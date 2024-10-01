<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Search Puzzle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        .container {
            background-color: #fff;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .word-grid {
            display: grid;
            grid-template-columns: repeat(10, 1fr); /* Larger grid with 10 columns */
            gap: 5px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .cell {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #eee;
            border: 1px solid #ccc;
            font-weight: bold;
            cursor: pointer;
        }

        .word-list {
            text-align: left;
        }

        .word-list h3 {
            font-size: 18px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            font-size: 16px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Word Search Puzzle</h1>
        <div class="word-grid">
            <!-- Replace this with your own jumbled letters -->
            <div class="cell">T</div>
            <div class="cell">H</div>
            <div class="cell">W</div>
            <div class="cell">O</div>
            <div class="cell">R</div>
            <div class="cell">L</div>
            <div class="cell">D</div>
            <div class="cell">S</div>
            <div class="cell">E</div>
            <div class="cell">A</div>
            <div class="cell">R</div>
            <div class="cell">C</div>
            <div class="cell">P</div>
            <div class="cell">Y</div>
            <div class="cell">T</div>
            <div class="cell">H</div>
            <div class="cell">O</div>
            <div class="cell">N</div>
            <div class="cell">L</div>
            <div class="cell">A</div>
            <div class="cell">R</div>
            <div class="cell">G</div>
            <div class="cell">E</div>
            <div class="cell">S</div>
            <div class="cell">T</div>
            <div class="cell">R</div>
            <div class="cell">I</div>
            <div class="cell">N</div>
            <div class="cell">G</div>
            <div class="cell">O</div>
            <div class="cell">N</div>
            <div class="cell">I</div>
            <div class="cell">O</div>
            <div class="cell">S</div>
        </div>
        <div class="word-list">
            <h3>Find these words:</h3>
            <!-- Replace this with your own words -->
            <ul>
                <li>WORLD</li>
                <li>SEARCH</li>
                <li>PYTHON</li>
                <li>LARGEST</li>
                <li>ONION</li>
            </ul>
        </div>
    </div>
    <script>
        const cells = document.querySelectorAll('.cell');
        const wordsToFind = ['WORLD', 'SEARCH', 'PYTHON', 'LARGEST', 'ONION']; // Replace with your own words

        cells.forEach(cell => {
            cell.addEventListener('click', () => {
                const letter = cell.textContent;
                wordsToFind.forEach((word, index) => {
                    if (word.includes(letter)) {
                        wordsToFind[index] = word.replace(letter, '');
                        if (wordsToFind[index] === '') {
                            wordsToFind.splice(index, 1);
                            document.querySelector('ul').removeChild(document.querySelector('ul').children[index]);
                        }
                    }
                });
                cell.style.visibility = 'hidden';
                checkWin();
            });
        });

        function checkWin() {
            if (wordsToFind.length === 0) {
                alert('Congratulations! You found all the words.');
            }
        }
    </script>
</body>
</html>
