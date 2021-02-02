<?php
    $var="I miss you 1500";
    //$result=preg_replace('/[[:alpha:]]/',"2",$var);
    //$result=preg_replace('/[[:digit:]]/',"#",$var);
    //$result=preg_replace('/[[:alnum:]]/',"*",$var);
    $result=preg_replace('/[[:space:]]/',"_",$var);
    echo $result;

?>