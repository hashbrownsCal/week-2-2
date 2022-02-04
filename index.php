<?php
if (isset($_GET['first']) && isset($_GET['last']) && isset($_GET['age'])) {
    $firstname = htmlspecialchars(filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING));
    $lastname = htmlspecialchars(filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING));
    $age = htmlspecialchars(filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING)); 
    if (empty($firstname) && empty($lastname) && empty($age)) {
        echo "missing data";
    }
} else {
    echo "Not set!";
}    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Parameter Assignment</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            background: oldlace;
            color: #333;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: center;
            align-items: center;
            }
    </style>
</head>

<body>
    <h1>GET Parameter Assigment</h1>
    <?php
    echo("Hello, my name is $firstname $lastname."."<br>");
    echo("I am $age years old and ");
    if ($age >= 18){
        echo("I am old enough to vote in the United States."."<br>");
    }
    else {
        echo("I am not old enough to vote in the United States."."<br>");
    }
    $days = 365 * $age;
    echo("I am around $days days old based on the number given for my age."."<br>");
    $date = date('m-d-y');
    echo ("The current date is: $date."); 
    ?>
</body>

</html>