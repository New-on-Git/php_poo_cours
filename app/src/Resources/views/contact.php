<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>

    {{ name }}

    <form action="/contact-us" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="email">e-mail&nbsp;:</label>
        <input type="email" id="email" name="email">
    </div>
    <div><input type="submit" value="create"></div>
</form>

    
</body>
</html>