<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="category_title">
        <input type="submit" name="submit">
        <input type="hidden" name="category_tokken" value="1">
    </form>
    
    <div>
        <?php if(isset($message)) echo $message; ?>
    </div>
</body>
</html>