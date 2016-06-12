<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>This is the contact page and the title is <?php echo $data['title']; ?></h1>
    <br />
    <h2><?php echo 'Your email is: ' . $data['contact']->your_email ?></h2>
</body>
</html>