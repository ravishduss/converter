<?php

class classLibrary {

   
    public function readFileAndConvert($oldFilePath, $newFilePath)
    {

        $fileToOpen = fopen($oldFilePath, "r"); // reading the file to be converted
        $fileToWrite = fopen($newFilePath, "w"); //writing file
//        $inc = 0;
        while (!feof($fileToOpen))
        {
//            $inc++;
            $tempString = fgets($fileToOpen); // getting the string
            $convertedString = utf8_encode($tempString); // cnvert the string to utf 8
            // write the text to a new file
//            echo "$inc : Old Line " . $tempString . '<br>';
//            echo "$inc : New Line " . $convertedString  . '<br>';
            fwrite($fileToWrite, $convertedString); // writing converted line to file
            
        }
        fclose($fileToOpen);
        fclose($fileToWrite);
    }

}
 