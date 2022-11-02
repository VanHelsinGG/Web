<?php 
    function Logger($file,$text){
        if($GLOBALS['debug']){
            $file = fopen($_SERVER['DOCUMENT_ROOT']."/passgen/logs/$file.txt","a") or die("erro");
            fwrite($file,"[".date("d/m/Y h:i:sa")."] - $text\n");
            fclose($file);
        }
    }
    #implode(":",getdate())
?>