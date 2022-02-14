<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise2 / Mark Petrov</title>

    <style>
        p {
            font-size: 20px;
            font-weight: bold;
        }
    </style>

</head>
<body>
<?
//You are required to work as a team and complete the following task during the online session
// we will check your implementation on 16.02.2022 and the team repo must contain the following task
// Each one of you will first do it in your own repo (or branch) and then the final version in the team repo. 
// This task is not graded however will have some impact on the final grade
// It also will help you to practice utlizing GitHub in project work

echo "<h2>1. Create/read a text file by using approprite php functions</h2>";
$newfile = fopen('teamm2.txt','w') or die ("Failed to create a file");
//fread($newfile,filesize("team2.txt"));

    echo "<h2>Step 1: check if file exists or not</h2>";
    if (file_exists("teamm2.txt")) {
        echo "File exisits";
    }
    else {
        echo "File was not found";
    }
    echo "<h2>Step 2: Open the file using appropriate mode. (each member opens the file in different mode)</h2>";

    echo "<h2>Step 3: Use fwrite/fread function to write/read on the file your team name and members name.</h2";
    $text = "Team 2 (Mona Achaaoud, Jarmila Škodová, Mark Petrov)";
    fwrite($newfile, $text);
    $filename = "teamm2.txt";
    $handle = fopen($filename, "r");
    $cont = fread($handle, filesize($filename));
    echo $cont;
    fclose($handle);
    # Step 4: Close the file
    fclose($newfile);

echo "<h2><br><br>2. Uploading files</h2>";
    echo "<h2>Step 1: Create a simple html form to upload a file.</h2>";
     ?>
     <form enctype="multipart/form-data" action="upload.php" method="POST">
         Select image: <input name="userfile" type="file" required><br>
         <input type="submit" value="Upload File" />
     </form>
     <?
     # Step 2: You are required to limit the upload file size to 2 MB. 
     # Step 3: Make sure that users can submit only images. 
     # Step 4: Upon successful upload, you print a message "File uploaded successfully" and also 
     # provide the link to the directory where files are uploaded.

?>
</body>
</html>