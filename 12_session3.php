<?php

    session_start();

    // if ( !isset( $_SESSION['userid'] ) ){
    //     echo "삭제할 데이터가 없습니다.";
    //     exit();
    // } 

    //좀 짧게 작성하기..
    isset( $_SESSION['userid'] ) or die("삭제할 데이터가 없습니다.");



    //세션지우기
    unset($_SESSION['userid']);
    $_SESSION['username']="";

    echo "삭제되었습니다.<br>";

?>