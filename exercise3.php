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
        $grade = 61;
        
        // here i used switch statement in order to reduce repetitive coding and made an execution of the code faster
        switch ($grade) {
            case ($grade >= 80):
                echo "Excellent";
                break;
            case ($grade >= 70):
                echo "Great";
                break;
            case ($grade >= 60):
                echo "Good";
                break;
            case ($grade >= 50):
                echo "Pass";
                break;
            default:
                echo "Fail";
                break;        
        }
    ?>

    <p>
        4. Write a program to get inputs (age and name) from the user and based on their age,
        decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.)
    </p>

        <form action="" method="get">
            Enter your name
            <input type="text" name="" placeholder="Your name">
            <br>
            <br>
            Enter your age
            <input type="text" name="t2" placeholder="Age">
            <br>
            <br>
            <input type="submit" name="submit" value="Submit">
            <br>
            <br>
        </form>

        <?php
            $_GET["t2"];

            if($_GET["t2"] >= 18) {
                echo "You are <b>allowed</b> to vote.";
            } else {
                echo "You are <b>not allowed</b> to vote.";
            }
        ?>

    <p>
        5. Use a looping statement to construct the following pattern: 
        <br>
        12345678
        <br>
        1234567
        <br>
        123456
        <br>
        12345
        <br>
        1234
        <br>
        123
        <br>
        12
        <br>
        1
    </p>

    <?php
    $str = "12345678";
        for ($i = 0; $i <= 7 ; $i++) {
            echo "$str" . "<br>";
            // here i use function substr so that it could delete last
            // character from the string
            $str = substr($str, 0, -1);
        }
    ?>

    <p>
        6. Use While loop to print the following pattern:
        <br>
        *
        <br>
        **
        <br>
        ***
        <br>
        ****
        <br>
        *****
        <br>
        ******
        <br>
        *******
        <br>
        ********
    </p>

    <?php
        $num = 1;
        $character = "*";
        while ($num <= 8) {
            echo "$character" . "<br>";
            $character .= "*";
            $num++;
        }
    ?>

    <p>
        7. Create a GitHub repo and enable GitHub pages for the repo. Upload your HTML files
        (your website that you did with Tommi) to the repo. Include the link to the repo and
        your web page in the php file.
    </p>

    <a href="https://markek1337.github.io/NorthTravelWebDev/">Website</a>
    <br>
    <a href="https://github.com/markek1337/NorthTravelWebDev">Git Hub repository</a>

</body>
</html>