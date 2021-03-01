<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">        
        <?php dropdownCategory(); ?>
        <input type="text" name="product_title" placeholder="Product title">
        <input type="text" name="product_price" placeholder="Price">
        <input type="text" name="product_quantity" placeholder="Quantity">
        <input type="submit" name="product_submit">
        <input type="hidden" name="product_tokken" value="1">
    </form>
    
    <div>
        <?php if(isset($message)) echo $message; ?>
    </div>
</body>
</html>