<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Checking if file is selected or not
    if ($_FILES['file']['name'] != "") {

        if (isset($_FILES) && $_FILES['file']['type'] != 'text/plain') {
            echo "<span>File could not be accepted ! Please upload any '*.txt' file.</span>";
            exit();
        }
        echo "<center><strong><h2 class='content' style='padding-top: 150px;'>Sum of the Contents of " . $_FILES['file']['name'] . " File</h2></strong></center>";

        //Getting and storing the temporary file name of the uploaded file
        $fileName = $_FILES['file']['tmp_name'];
        $fileDuplicate = checkSubFilesName($_FILES['file']['name'], $_FILES['file']['tmp_name']);

        if ($fileDuplicate){
            echo "<center><h2>The file name " . $_FILES['file']['name'] . " is found in the file. It will result to an infinite loop. Please edit the file"." File</h2></center>";
            exit();
        }
        $result = calculate($fileName);

        echo "<center><h3>" .$_FILES['file']['name'] ." - ". $result . "</h3></center>";
    } else {
        if (isset($_FILES) && $_FILES['file']['type'] == '')
            echo "<span>Please Choose a file by click on 'Browse' or 'Choose File' button.</span>";
    }
}



function calculate($fileName, $stack = [], $Subtotal = 0)
{

    $total = 0;

    $total += $Subtotal;

    $fileContent = $stack;

    //Throw an error message if the file could not be open
    $file = fopen($fileName, "r") or exit("Unable to open file!");

    // Reading a .txt file line by line
    while (!feof($file)) {
        $line  = fgets($file);

        if (isFile($line)) {
            array_push($fileContent, 'files/' . trim($line));
        } else {
            // echo $line . " is path: " .isFile($line) . "<br>";
            $total += (int)$line;
        }
    }


    


    fclose($file);

    if (count($fileContent) > 0) {

        $subFile = array_pop($fileContent);

        return calculate($subFile, $fileContent, $total);
    }


    return $total;
}

function checkSubFilesName($fileName, $temp)
{
     //Throw an error message if the file could not be open
     $file = fopen($temp, "r") or exit("Unable to open file!");
     $fileContent = [];
     // Reading a .txt file line by line
     while (!feof($file)) {
         $line  = fgets($file);
 
         if (isFile($line)) {
             array_push($fileContent, 'files/' . trim($line));
         } 
     }
     
    foreach ($fileContent as $filePath){
        if(strpos($filePath, $fileName) !== false){
            return true;
        };
    }
 
    fclose($file);

    return false;
};

function isFile($file)
{
    if (preg_match('/(\.txt)$/i', $file)) return true;
    return false;
}
