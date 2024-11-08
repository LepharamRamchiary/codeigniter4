<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject List</title>
</head>

<body>
    <h1>Subject List</h1>
    <ul>
        <?php foreach ($result as $subs): ?>
            <li><?= $subs['sub'] ?>-<?= $subs['desc'] ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>