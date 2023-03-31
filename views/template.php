<!DOCTYPE PHP>
<html lang='en'>
<head>
    <title><?php echo $title?></title>
    <?php echo Asset::css($css)?>
    
</head>
<body>
    <nav>
        <ul>
            <li><img src='assets/img/tempLogo.png' id="logo" alt='Company Logo' ></li>
            <li><a href='?page=home'>Home</a></li>
            <li><a href="?page=about">Bio</a></li>
            <li><a href="?page=color">Colors</a></li>
        </ul>
    </nav>
</body>
    <?php echo $content?>

</html>
