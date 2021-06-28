<?php


    $handle = fopen('./simpletext.txt', 'r');

    $fileContents = fread($handle, filesize('./simpletext.txt'));

    echo nl2br($fileContents);


    // // Another way to read files
    // $fileContents2 = file_get_contents('./simpletext.txt');

    // echo nl2br($fileContents2);



    // How to append file, writing into it is similar
    $handl2 = fopen('./simpletext.txt', 'a');

    $writingFile = fwrite($handl2, '<br>End of the song.');


    if($writingFile)
    {
        echo "File was written";
    }







?>