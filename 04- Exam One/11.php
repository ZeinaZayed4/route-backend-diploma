<?php

if (isset($_POST['color'])) {
	$color = $_POST['color'];
	setcookie('bg_color', $color, time() + (30 * 24 * 60 * 60), '/');
	header("Location: " . $_SERVER['PHP_SELF']);
	exit();
}

$bgColor = $_COOKIE['bg_color'] ?? 'white';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Color</title>
    <style>
        body {
            background-color: <?= htmlspecialchars($bgColor); ?>;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 2rem 3rem;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            margin-bottom: 1.5rem;
            color: #333;
        }

        label {
            font-size: 1.1rem;
            margin-right: 0.5rem;
        }

        select {
            padding: 0.5rem 1rem;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        button {
            margin-top: 1rem;
            padding: 0.6rem 1.5rem;
            font-size: 1rem;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 480px) {
            .container {
                width: 90%;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Customize Background Color</h1>
        <form method="post">
            <label for="color">Choose a background color:</label>
            <select name="color" id="color">
                <option value="white" <?= $bgColor == 'white' ? 'selected' : '' ?>>White</option>
                <option value="black" <?= $bgColor == 'black' ? 'selected' : '' ?>>Black</option>
                <option value="lightblue" <?= $bgColor == 'lightblue' ? 'selected' : '' ?>>Light Blue</option>
                <option value="lightgreen" <?= $bgColor == 'lightgreen' ? 'selected' : '' ?>>Light Green</option>
                <option value="lightyellow" <?= $bgColor == 'lightyellow' ? 'selected' : '' ?>>Light Yellow</option>
                <option value="lightpink" <?= $bgColor == 'lightpink' ? 'selected' : '' ?>>Light Pink</option>
            </select>
            <br>
            <button type="submit">Set Background</button>
        </form>
    </div>
</body>
</html>
