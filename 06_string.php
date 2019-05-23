<?php

    //string관련 함수들..(메소드 아님)

    //1. 글자수
    $str= "Hello world!";
    echo strlen($str)."<br>";

    // 2. 단어수
    echo str_word_count($str)."<br>";

    // 3. indexof : string position
    echo strpos($str, "world")."<br>";//output:6

    // 4. replace
    echo str_replace("world","android", $str)."<br>";//원본이 안바뀌고 리턴으로 새로운 string임
    echo $str."<br>";

    // 5. split
    $phone= "010-1234-4567";
    $phs= explode("-", $phone);//리턴이 string배열
    echo $phs."<br>";
    echo $phs[0] . "<br>";
    echo $phs[1] . "<br>";
    echo $phs[2] . "<br>";

    // 6.반대..
    $arr= array('aa','bb','cc');
    $s = implode('+', $arr); //배열의 요소사이에 '+'가 추가된 하나의 문자열로..
    echo $s."<br>";

    // 7. 줄바꿈문자 \n을 <br>로 변경해주는..
    $content="Hello.\nNice to meet you.\n\nHave a good day.";
    echo $content;

    echo "<hr>";
    $content= nl2br($content);
    echo $content;

    //반대로 해주는 함수는 없음.
    //str_replace('<br>','\n',$content)를 사용해서 변경 


?>