<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3 / Mark Petrov</title>

    <style>
        p {
            font-size: 20px;
            font-weight: bold;
        }
    </style>

</head>
<body>
    
    <!-- Mark Petrov -->

    <p>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
        <br>
        <br>
        It's August, so it's still holiday.
        <br>
        Not August, This is Month-name so i don't have any holidays
        <br>
        You can use date(F) function to get the current month name
    </p>

    <?php
        $month = date("F");

        if ($month == "Aug") {
            echo "It's August, so it's still holiday.";
        } else {
            echo "Not August, this is $month, so I don't have any holidays.";
        }
    ?>

    <p>
        2. Assign color red to a variable name $color and check to print one the following responses using if else statement 
        <br>
        The color is red. 
        <br>
        The color is not red.
    </p>

    <?php
        $color = "red";

        if ($color == "red") {
            echo "The color is  red.";
        } else {
            echo "The color is not red.";
        }
    ?>

    <p>
        3. Write a program to grade students based on their total score for a subject.
        The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70;
        Pass >50 & less than 60 & Fail < 50
    </p>

    <?php
    $grade = 75;
    
    ?>

</body>
</html>