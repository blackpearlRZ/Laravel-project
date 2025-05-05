<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hellooo {{$prenom}}</h1>
    <h4>Cours : </h4>
    <ul>
        <?php foreach($cours as $cour): ?>
        <li> <?php echo $cour ?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>