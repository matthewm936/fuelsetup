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
    <form action="<?php echo Uri::create(); ?>" method="get">
        <input type="text" name=colorID placeholder="Input an id for the color">
        <input type="text" name=colorName placeholder="Input name of the color">
        <input type="text" name=colorHex placeholder="Input hexvalue of the color">
        <button type="submit">Add Color</button> 
        <br>
    </form>
    <form action="<?php echo Uri::create(); ?>" method="get">
        <input type="text" name=colorNameRemove placeholder="Input name of the color">
        <button type="submit">Remove Color</button> 
        <br>
    </form>
    <p>Colors in the database: 
        <?php $dataBaseColors = DB::select('*')->from('colors')->execute();
		    $numColors = count($dataBaseColors);
            echo $numColors;
            echo "<br>";

            $colors = DB::query('SELECT `name` FROM `colors`')->execute()->as_array();
	    $firstElementFlag = true;
	    foreach($colors as $color) {
                if($firstElementFlag) {
                    echo $color['name'];
                    $firstElementFlag = false;
                } else {
		    echo (", " . $color['name']);
                }
	    }
        ?>
    </p>
    <nav>
        <a href='?page=gray&
            colors=<?php if(isset($_GET['colors'])){echo $_GET['colors'];}?>&
            size=<?php if(isset($_GET['size'])){echo $_GET['size'];}?>'>
            PrintView</a>
    </nav>
</body>
</html>
