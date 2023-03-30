<!DOCTYPE PHP>
<html lang='en'>
<head>
    <title><?php echo $title?></title>
    <?php echo Asset::css($css)?>
    
</head>
<body>
    
    <nav>
        <img href='' alt='Company Logo'>
        <a href='?page=home'>Home</a>
        <a href="?page=about">Bio</a>
        <a href="?page=color">Colors</a>
    </nav>
</body>
    <?php echo $content?>

</html>

