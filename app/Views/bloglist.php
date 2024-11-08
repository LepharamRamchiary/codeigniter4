<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Blog List</h1>
    <table>
        <thead>
            <tr>
                <th>Blog ID</th>
                <th>Blog Title</th>
                <th>Blog Image</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

            <?php if (!empty($result)): ?>
                <?php foreach ($result as $blog): ?>
                    <tr>
                        <td><?= $blog->blogid; ?></td>
                        <td><?= $blog->blog_title; ?></td>
                        <td><img src="<?= $blog->blog_img; ?>" alt="Blog Image" width="100"></td>
                        <td><?= $blog->status; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <h1>Sorry No Record Found</h1>
            <?php endif; ?>

        </tbody>
    </table>
</body>

</html>