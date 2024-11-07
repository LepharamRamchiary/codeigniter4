<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* Basic CSS for layout */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }

        main {
            flex: 1;
            padding: 20px;
            text-align: center;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        /* Links in footer */
        footer a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header>
        <h1> <?= $this->renderSection('titles'); ?></h1>
        <p><?= $highlight ?></p>
    </header>

    <?= $this->renderSection('content'); ?>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </footer>
</body>

</html>