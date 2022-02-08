<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Functions</title>
    <link rel="stylesheet" href="./style/style.css" />
</head>

<body>
    <?php
        $nums       = array(1, 2, 3, 4, 5);
        $sumOfArray = array_reduce($nums, fn($curr, $nextEl) => $curr + $nextEl);
        echo $sumOfArray;
    ?>
</body>

</html>