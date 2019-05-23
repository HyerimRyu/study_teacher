<?php

    // 자료형 ( Data Type )
    // string
    // integer
    // float(double이라고도 부름)
    // boolean
    // null
    // Object : 클래스가 있음.

    //1. string형
    $x= "Hello world";
    $y= 'Nice to meet you.'; //작은따옴표도 문자열표기
    // 단, ""와 ''는 약간다름..

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    // 차이점..
    echo "$x<br>$y";//큰 따옴표 안에서는 $를 변수키워드 인식
    echo "<br>";
    echo '$x<br>$y';//작은 따옴표 안에서는 $를 구별하지 못함[그냥 string으로 인식함]
    echo "<br>";

    // 스트링 결합
    echo "aaa".$y . "<br>";

    //integer
    //같은 변수명을 쓰면 값이 변경되는 것임. 자료형이 동적임
    $x = 10;
    echo "$x<br>";

    //자료형 타입을 리턴해주는 함수 : gettype()
    echo gettype($x)."<br>";

    // 자료형과 값을 동시에 출력해주는 함수
    var_dump($x);//int(10)
    echo "<br>";

    //float
    $x= 10.356;
    var_dump($x);
    echo "<br>";

    //boolean
    $x= true;
    $y= false; //값출력이 없음.
    echo $x . " , " . $y;
    echo "aaa<br>";

    //배열
    $arr= array("Volvo","BMW","Toyota");
    echo "I like ". $arr[0] .", ". $arr[1] ." and" . $arr[2] . "<br>";
    echo "I like $arr[0], $arr[1] and $arr[2]<br> ";
    var_dump($arr);
    echo "<br>";

    //null
    $x= null;
    var_dump($x);
    echo "<br>";
    echo "$x<br>aaa";

    // 변수 주의 점.
    echo "<hr>";
    $a=10;
    echo "$a 입니다.<br>";
    echo "$a입니다.<br>";//변수명구별 못함
    echo "{$a}입니다.<br>";







?>