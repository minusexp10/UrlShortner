<?php
    function hashify($str){     #later when connected to the db, also take userId as param
        $sha256_hash = hash("sha256", $str);
        return substr($sha256_hash, 0, 6);      #when connected to db check for conditions if the substring exists in the db, keep increasing the length by 1 till it is unique
    }
?>

