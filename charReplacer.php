
<!-- iterate folder directory for each file -->
<!-- E:\xampp\htdocs\datasetRandomiser\uploads -->
<!-- FILKAS PUT PNGS INTO ANOTHER FOLDER TEMPORARILY -->

    <!-- open file -->
    <!-- find all "&" chars -->
    <!-- replace w "/n" -->
    <!-- rewrite to file -->


<?php
    $dir = "E:/xampp/htdocs/datasetRandomiser/uploads/*";

    foreach(glob($dir) as $file) 
    {
        $spl = new SplFileInfo($file);
        echo $spl->getExtension() . "<br />"; //gives extension 

        if($spl->getExtension() == "gui"){ //excludes any file types that are not .gui
            echo $file . "<br />";
            $current = file_get_contents($file); //read file
            $dataToWrite = str_replace("&", "\n", $current);
            file_put_contents($file, $dataToWrite); //write to file
        } else {
            echo "File other than .gui detected and ignored" . "<br>";
        }
    }
?>