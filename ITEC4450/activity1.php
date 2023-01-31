<html>
<head>
    <title>Activity 1</title>
</head>

<body>
    <h1>Activity 1 Jan 20</h1>
    <?php
    $school = "GGC";
    echo "I like ".$school."? </br>";
    echo "I like ".$school."! </br>";

    /*
    milti 
    line 
    comment
    */
    ?>

    <hr>
    <?php
        $n = 123.456789;
        echo "This number n = ".$n."<br/>";
        printf("The number using printf is: <br/>", $n);
        printf("The number as a float is: %f<br/>", $n);
        printf("The number as a decimal is: %d<br/>", $n);
        printf("The number as a string is: %s<br/>", $n);
        printf("The number with 3 decimals is: %.3f<br/>", $n);
        echo "The number with 3 decimals using echo is: ".round($n,3)."<br/>";
    ?>
    </hr>
</body>

</html>