<?php
$page_session = \Config\Services::session();
?>


<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert").fadeOut(); // Hide all alerts after 3 seconds
        }, 3000);
    });
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f9;
        }

        .container {
            background-color: #fff;
            padding: 2rem;
            max-width: 400px;
            width: 100%;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 1rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-group button {
            width: 100%;
            padding: 0.75rem;
            font-size: 1rem;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .form-group p {
            text-align: center;
            font-size: 0.9rem;
            margin-top: 1rem;
        }

        .form-group p a {
            color: #007bff;
            text-decoration: none;
        }

        .form-group p a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- <script>
        setTimeout(function() {
            $("#hidemsg").hide();
        }, 3000)
    </script> -->

    <div class="container">
        <h2>Register</h2>
        <?php if ($page_session->getTempdata('success')): ?>
            <div id="hidemsg" class="alert alert-success">
                <?= $page_session->getTempdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if ($page_session->getTempdata('error')): ?>
            <div id="hidemsg" class="alert alert-danger">
                <?= $page_session->getTempdata('error') ?>
            </div>
        <?php endif; ?>

        <?= form_open() ?>
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" value="<?= set_value('fullname') ?>">
            <span style="color: red; display: block; margin-top: 10px;"><?= display_error($validation, 'fullname') ?></span>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" value="<?= set_value('username') ?>">
            <span style="color: red; display: block; margin-top: 10px;"><?= display_error($validation, 'username') ?></span>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?= set_value('email') ?>">
            <span style="color: red; display: block; margin-top: 10px;"><?= display_error($validation, 'email') ?></span>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password">
            <span style="color: red; display: block; margin-top: 10px;"><?= display_error($validation, 'password') ?></span>
        </div>
        <div class="form-group">
            <input type="submit" name="save" value="save" class="btn">
        </div>
        <p>Already have an account? <a href="<?= base_url('login') ?>">Login here</a></p>
        <?= form_close() ?>
    </div>

</body>

</html>