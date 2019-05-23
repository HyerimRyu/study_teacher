<?php

    //Cookie 읽어오기
    // $ueserid= $_COOKIE['userid'];
    // $uesername= $_COOKIE['username'];

    //notice가 될 가능성 있음.
    if( isset($_COOKIE['userid']) ) $userid= $_COOKIE['userid'];
    else $userid=null;

    if( isset($_COOKIE['username']) ) $username= $_COOKIE['username'];
    else $username=null;

    if( isset($_COOKIE['usernick']) ) $usernick= $_COOKIE['usernick'];
    else $usernick=null;

    if( isset($_COOKIE['userhp']) ) $userhp= $_COOKIE['userhp'];
    else $userhp=null;

    echo "아이디 : $userid<br>";
    echo "이름 : $username<br>";
    echo "닉네임 : $usernick<br>";
    echo "phone : $userhp<br>";

?>
