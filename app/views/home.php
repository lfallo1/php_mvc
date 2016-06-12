<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Page Title is: ' . $data['title'] ?></h1>
    <hr />
    <h3>User</h3>
    <ul>
        <li>Name: <?php echo $data['user']->name ?></li>
        <li>Email: <?php echo $data['user']->email ?></li>
        <li>Age: <?php echo $data['user']->age ?></li>
    </ul>
    <hr />
    <?php
        if($data['discount']){
            ?>
            <div class="alert alert-info">Discount code: <?php echo $data['discount'] ?></div>
    <?php
        }
    ?>

</body>
</html>