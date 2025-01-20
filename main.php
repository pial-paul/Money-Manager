<?php
// Money Manager Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Manager - Welcome</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #1c1f3a;
            color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #2a2d50;
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 500px;
        }

        .header {
            font-size: 2.5em;
            margin-bottom: 1em;
            color: #38bdf8;
        }

        .description {
            font-size: 1.2em;
            margin-bottom: 2em;
            color: #94a3b8;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .button {
            padding: 0.8em 1.5em;
            font-size: 1em;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            color: #ffffff;
            background-color: #3b82f6;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="header">Welcome to Money Manager</h1>
        <p class="description">Take control of your finances with Money Manager. Sign up to get started or log in to manage your expenses, budgets, and accounts effortlessly.</p>
        <div class="buttons">
            <a href="signup.php" class="button">Sign Up</a>
            <a href="signin.php" class="button">Log In</a>
        </div>
    </div>
</body>
</html>
