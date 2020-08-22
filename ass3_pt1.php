<html>

<head>
    <title>Assignment 3</title>
    <h1>PHP</h1>
</head>

<body>
    <h2>Part 1</h2>
    Your formatted paragraph is: 
    <?php 
             $fontStyle = $_POST["fontStyle"];
             $fontColor = $_POST["fontColor"];
             $fontSize = $_POST["fontSize"];
             $text = $_POST["text"];
            
            
            // echo "this is a test";
            //  echo $fontStyle;
            //  echo $fontColor;
            //  echo $fontSize;
            //  echo $text;
             echo '<div style="font-family:'.$fontStyle.'; color:'.$fontColor.'; font-size:'.$fontSize.'">'.$text.'</div>'
            // echo "</div>"
            
            
    ?>






    


</body>
</html>