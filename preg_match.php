<?php
    $str = 'Гапошкина';
    // preg_match('/(Гапош)/', $str, $matches, PREG_OFFSET_CAPTURE);
    // print_r($matches);
    // echo '<hr />';
    // echo $str;
    // foreach($matches as $s){
    // echo '<hr />';        
        // foreach($s as $v){
            // echo $v.'; ';
        // }
    // }
    echo $str;
    $pm = preg_match('/(Гап)/i', $str, $matches);
    echo '<hr />';
    foreach($matches as $s){
        echo $s.'<br />';
    }
    echo $pm;
?>