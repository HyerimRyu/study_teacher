<?php

    // 슈퍼전역변수 : 이미 정의된 변수며 $_ 로 시작함

    //1. $GLOBALS[] : 전역변수 선언
    function aaa(){
        $a= 10; //지역변수
        $GLOBALS['g']= 10; //전역변수 선언!!
    }
    aaa(); //함수 한번 호출

    echo "지역변수 : $a <br>";//notice
    echo "전역변수 : $g <br>";

    //2. $_SERVER[]배열 : php의 정보 출력, 요청에 대한 정보
    echo $_SERVER['PHP_SELF']."<br>";//이 문저서 파일명을 가지고 있음.
    echo $_SERVER['SERVER_NAME']."<br>";//host 서버의 이름 ( ex. www.dothome.co.kr )
    echo $_SERVER['REQUEST_METHOD']."<br>"; // 사용자가 서버에 요청할 때 사용한 메소드 (get or post)

    //3. $_GET
    //4. $_POST
    //5. $_REQUEST : get이든 post든 다 받는 것

    $name= $_REQUEST['name'];
    echo $name."<br>";

    //6. $_FILES

    //7. $_COOKIE : 쿠키
    //8. $_SESSION : 세션
?>