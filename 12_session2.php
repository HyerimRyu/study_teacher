<?php
    header('Content-Type: text/html; charset=utf-8');

    //세션사용하면 무조건..
    session_start();

    $userid=null;
    $username=null;

    if( isset($_SESSION['userid']) ) $userid= $_SESSION['userid'];
    if( isset($_SESSION['username']) ) $username= $_SESSION['username'];

    echo "아이디 : $userid <br>";
    echo "사용자 : $username <br>";

    //세션은 쿠키와 다르게 같은 도메인이면 모든 폴더에서 세션정보 읽을 수 있음.




?>