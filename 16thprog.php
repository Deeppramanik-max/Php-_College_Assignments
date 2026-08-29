<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Counter</title>
    <style>
        label { display: block; margin-top: 10px; }
        textarea, input[type="text"] { width: 100%; max-width: 400px; }
        .result { margin-top: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <form action="16thprog.php" method="post">
        <label for="paragraph">Enter your paragraph:</label>
        <textarea name="paragraph" id="paragraph" cols="30" rows="10" required placeholder="Write your paragraph here"></textarea><br>

        <label for="text">Enter a word to search in the paragraph:</label>
        <input type="text" name="text" id="text" required>

        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['paragraph'], $_POST['text'])) {
        $paragraph = $_POST['paragraph'];
        $text = trim($_POST['text']);

        // Make search case-insensitive
        $paragraphLower = strtolower($paragraph);
        $textLower = strtolower($text);

        // Split paragraph into words using explode
        $para = explode(" ", $paragraphLower);

        $c = 0;
        foreach ($para as $word) {
            // Remove basic punctuation from each word
            $cleanWord = trim($word, ".,!?;:\"'()-_");
            if ($cleanWord === $textLower) {
                $c++;
            }
        }

        echo "<div class='result'>";
        echo "The word '" . htmlspecialchars($text) . "' appears " . $c . " times in the paragraph.";
        echo "</div>";
    }
    ?>
</body>
</html>