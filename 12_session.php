<?php

    //세션작업을 하려면 무조건 echo보다 먼저 session_start()로 시작!
    session_start();

    $_SESSION['userid']="web";
    $_SESSION['username']="robin";

    echo $_SESSION['userid'].", ". $_SESSION['username']."가 저장되었습니다.<br>";

    //쿠키와 세션의 차이 ///////////////
    //1. 데이터가 저장된 위치

    //2. 브라우저를 껐다가 켰을때 저장되는 기간..


?>