<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>

<body>

    <h1>Form Validation</h1>

    <!-- Display all validation errors at once if needed -->

    <?= form_open(); ?>
    <table>
        <tr>
            <td>Username</td>
            <td>
                <?= form_input('username', set_value('username')); ?>
                <?php if (isset($validation)): ?>
                    <div style="color: red;">
                        <?= $validation->showError('username'); ?>
                    </div>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <?= form_input('email', set_value('email')); ?>
                <?php if (isset($validation)): ?>
                    <div style="color: red;">
                        <?= $validation->showError('email'); ?>
                    </div>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>
                <?= form_input('phone', set_value('phone')); ?>
                <?php if (isset($validation)): ?>
                    <div style="color: red;">
                        <?= $validation->showError('phone'); ?>
                    </div>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><?= form_input(['name' => 'save', 'value' => 'Save', 'type' => 'submit']); ?></td>
        </tr>
    </table>
    <?= form_close(); ?>

</body>

</html>
