<?php

    //배열 생성 방법은 2가지 : array(), []

    // $arr= {10,20,30};ERROR

    //JS의 배열과 비슷함.
    $arr= [10, 20, 30];

    echo $arr."<br>";//Array라는 글씨 출력됨[notice문구도 표시]
    echo $arr[0].", ".$arr[1].", ".$arr[2]."<br>";

    //배열의 개수를 리턴해주는 함수
    $len= count($arr);
    echo "배열길이 : ".$len."<br>";//output: 3

    //개수에 맞지 않는 인덱스를 쓰면??에러까지는 아니고 notice
    echo $arr[10]."<br>";
    echo $arr[-2]."<br>";

    //혹시 Javascript처럼 개수의 변화가 있을 까요?
    $len= count($arr);
    echo "배열길이 : ".$len."<br>";//output: 3

    //그럼 배열길이 변경될 수 없나??? 있음.!!!
    $arr[3]=40;
    $len= count($arr);
    echo "배열길이 : ".$len."<br>";//output: 4

    // 그럼 사이 간격을 두고 인덱스를 사용하면?
    $arr[9]=100; //10번째 방이나라..5번째에 위치함
    $len= count($arr);
    echo "배열길이 : ".$len."<br>";//output: 5( 10 아님..사이를 자동으로 만들지 않음)

    for($i=0; $i<$len; $i++){
        echo "{$i}번째 : $arr[$i]<br>";
    }

    //인덱스번호가 순서대로가 아닐때 차례로 출력하고 싶다면..
    $num=0;
    foreach( $arr as $e ){
        $num++;
        echo "{$num}번째 : $e<br>";
    }

    //그럼 사이번호를 나중에 넣으면?
    $arr[6]=70;
    $num=0;
    foreach( $arr as $e ){
        $num++;
        echo "{$num}번째 : $e<br>";
    }

    //배열의 길이가 0개로 시작할 수 있음
    $arr2=[];
    $len= count($arr2);
    echo "배열길이 : ".$len."<br>";//output: 0

    //php도 동적타이핑 스크립트언어이기에 배열의 요소의 자료형이 달라도 됨
    $arr3=[ 10, 3.14, "aa", true];
    var_dump($arr3);


    echo "<hr>";
    // 배열 생성의 2번째 방법 : array()함수 이용
    $arr= array(10, "aaa", 3.14);
    $num=0;
    foreach( $arr as $e ){
        $num++;
        echo "{$num}번째 : $e<br>";
    }

    //연관배열 (인덱스번호 대신 key문자열 사용)
    $arr2= array( "name"=>"sam", "age"=>20, aver=>70.5 );//key에 ""없으면 notice가 표시됨
    echo $arr2["name"]."<br>";
    echo $arr2['age']."<br>";
    echo $arr2["aver"]."<br>";

    //문자열 표시 없이 key사용하기[notice가 표시됨]
    echo $arr2[name]."<br>";
    echo $arr2[age]."<br>";
    echo $arr2[aver]."<br>";
    
    //한줄로 
    //echo " $arr2['name'] , $arr2['age'] <br>"; //""안에 배열요소를 찾는 key코드를 작성 할 수 없음 :ERROR(인덱스는 됨)
    //한줄로 하는 방법은 결합연사자 사용
    echo $arr2['name'].", ".$arr2['age'].", ".$arr2['aver']."<br>";

    //참고로 string에소도 ""나 ''를 생략하는 경우도 있음
    //단, notice
    $str= hello;
    echo $str."<br>";
    echo "<hr>";

    //연관배열도 foreach문
    foreach( $arr2 as $e ){
        echo "value : $e 입니다.<br>";
    }

    //키와 벨류를 같이 보고 싶다면??
    foreach( $arr2 as $k => $v ){
        echo "$k : $v <br>";
    }

    //연관배열을 인덱스번호로 찾아올 수 없음
    echo $arr2[1]."<br>";

    echo "<hr>";

    //다차원 배열 가능
    $cars = array( 
        array("Volvo",22, 33),
        array("BMW",10, 15),
        array("Saab",5,2)
    );

    echo $cars[0][0] . "<br>";//출력 : Volvo

    //주의할점
    echo " $cars[0][0] <br>";

    //""안에 2차원배열을 사용하려면..
    echo " {$cars[0][0]} <br> ";

    //sort에 대한 함수들.. w3schools에서 확인

    // sort()
    // rsort() - reverse
    // asort() - associative배열(연관배열 정렬)- value기준
    // ksort() - associative배열(연관배열 정렬)- key 기준
    // arsort() - 연관배열 reverse
    // krsort() - 연관배열 reverse


?>