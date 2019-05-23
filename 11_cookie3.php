<?php

    if( isset($_COOKIE['userid']) ){
        //방법1.
        $a=setcookie("userid", "");//빈값으로 설정
        if( $a ) echo "삭제 되었습니다.<br>";

        //방법2.
        unset( $_COOKIE['userid'] );//리턴없음
    }

?>