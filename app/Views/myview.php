<?php
// echo $title;
// echo $content;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <h1><?= $content ?></h1>
    <h3>Subject List</h3>
    <ul>
        <?php
        // if(count($sub)>0){

        //     foreach ($sub as $subs) 
        //     {
        //        echo "<li>" . $subs . "</li>";
        //     }
        // }else{
        //     echo "No records found!";
        // }

        // <!-- templating engin -->
        if (count($sub) > 0):
            foreach ($sub as $su):
        ?>
                <li><?= $su ?></li>
        <?php
            endforeach;
        else:
            echo "No records found!";
        endif;
        ?>

    </ul>
</body>

</html>