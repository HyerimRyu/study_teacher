<?php

    //연사자는 Javascript와 거의 같음

    //특이한 논리 연산자 and, or키워드
    $age=25;
    
    if( $age>20 and $age<30) echo "aaa<br>";
    if( $age<10 or $age>20) echo "bbb<br>";

    // 제어문중에선 elseif만 다름- 사이 띄어쓰기가 없어도 됨.
    $score= 85;
    if( $score>=90) echo "Your grade is A<br>";
    else if($score>=80) echo "Your grade is B<br>";
    elseif($score>=70) echo "Your grade is C<br>";
    elseif($score>=60) echo "Your grade is D<br>";
    else echo "Your grade is F<br>";

    // 문자열의 같음을 비교할 때 == 써도 됨
    // 자바에서는 equals()메소드들..
    // php에서는 strcmp()함수를 이용. 하지만 == 을 더 많이 사용함
    $name= "hong";
    if($name == "lee") echo "aaa<br>";
    else if($name == "kim") echo "bbb<br>";
    else if($name == "hong") echo "ccc<br>";

    // switch문의 비교에 string도 가능함.
    switch($name){
        case 'kim':
            echo "kkk<br>";
            break;
        case 'lee':
            echo "sss<br>";
            break;
        case 'Hong':
            echo "ttt<br>";
            break;
        default:
            echo "zzz<br>";            
    }

    // foreach문..
    // foreach .. as(~로써)
    $arr= array(10, 20, 30);
    foreach( $arr as $e ){
        echo $e."<br>";
    }

    //함수도  Javascript와 같음.
    function show(){
        echo "show!!<br>";
    }
    show();//함수호출

    // 같은 .php문서안에서는 함수정의보다 함수호출을 먼저해도 됨, 즉, 호출순서 영향없음.
    kkk();//먼저호출해도 됨 <?php> 영역이 달라도 문제없음. why? <?php 는 {}같은 지역구분이 아님!!
    
    //파라미터도 같음
    function add($x, $y){
        echo $x + $y ."<br>";
    }
    add(5, 3);
    // add(5);//에러..이 줄 다음부터 실행 안됨.

    //리턴도 같음
    function sss( $x ){
        //리턴의 자료형이 달라도 상관없음
        if( $x<10 ) return true;//boolean
        if( $x<20 ) return "sss"; //string

        return 100;//integer        
    }

    echo "결과 : " . sss(5) . "<br>";
    echo "결과 : " . sss(15) . "<br>";
    echo "결과 : " . sss(25) . "<br>";

    

?>

<?php
    function kkk(){
        echo "kkk<br>";
    }
?>

<!-- php에서 < ? php 는 지역성이 아님 -->
<?php $gg=10 ?>
<?php echo "gg : $gg<br>" ?>

echo $gg;