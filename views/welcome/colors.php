<!DOCTYPE PHP>
<html lang='en'>
<head>
    <title id='print'>Company Name Colors</title>
</head>
<body>
    <br>
    <br>
    <form action="<?php echo Uri::create(); ?>" method="get">
        <input type="text" name=size placeholder="Input size of table">
        <input type="text" name=colors placeholder="Input size of colors">
        <button type="submit">Search</button> 
        <br>
    </form>
    <nav>
        <a href='?page=gray&
            colors=<?php if(isset($_GET['colors'])){echo $_GET['colors'];}?>&
            size=<?php if(isset($_GET['size'])){echo $_GET['size'];}?>'>
            PrintView</a>
    </nav>
</body>
</html>
