<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/main_style.css" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/custom_nav.css" type="text/css">
</head>
<title>Rebus Generate_Many-From-A-List</title>
<body>

<div class="divTitle" align="center">
    <font class="font">Rebus Puzzle (Many from a List)</font>
</div>
<div>
    <p>Input Word List:
        <!-- Code for displaying the input of words -->
        <?php

        $rows = sizeof($wordsArray);

        for ($input = 0; $input < $rows; $input++) {
            $incrementedValue = $input + 1;
            echo "$incrementedValue. $wordsArray[$input]";
        }
        ?>
        <br>
        Puzzles
        <?php

        $rows = sizeof($wordsArray);

        for ($input = 0; $input < $rows; $input++) {
            $incrementedValue = $input + 1;
            echo "$incrementedValue. $wordsArray[$input]";
        }
        ?>
    </p>
</div>
</body>
</html>
