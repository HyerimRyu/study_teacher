<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title></title>
    </head>

    <body>
        <h2>오직 HTML만 있음.</h2>
        <!-- 결국 .php는 브라우저에게는 html과 같음 -->
        <!-- 다만, <?php ?>안에 있는 글씨는 php인터프리터가 해석한다는 것이 다름 -->

        <!-- html영역안에서 php문법 가용 가능 -->
        <?php 
            // 이 안에서는 php문법 사용. 마치 js처럼
            echo "Hello world";  
            // 당연히 php안에서는 그냥 html의 문법을 쓰면..에러
            // <h2>Hello</h2>
        ?>

        <!-- php영역 밖에서는 html문법 체계 따름 -->
        echo "aaa";
        <!-- echo를 못알아듣고 글씨로 출력해버림 -->

        <!-- 대부분 이런 특징을 이용하여 -->
        <!-- index.html -> index.php를 사용하는 경우가 많음 -->
        <!-- 많은 웹페이지들이 .html이 아니라 .php로 만듦 -->

        <!-- 그러면...혹시 .html문서안에 php사용이 가능한가? -->


        <hr>
        <!-- php의 키워드(문법)는 대소문자 구분이 없음. -->
        <?php
            Echo "aaa";
            eCHo "bbb";
            ECHO "ccc";

            IF(5>3) echo"zzz";

            //심지어 함수명에도...구별없음
            function aaa(){
                echo "alskdjflkasjdflka";
            }

            aaa();
            aAa();
            AAA();

            // 오히려...error
            // function aaA(){
            //     echo "aaaaa";
            // }

            //변수명은 대소문자 구별함
            $a=10;
            echo $a; //10
            echo $A; //아무값도 안나옴. 근데 요새 브라우저(php)버전들은 경고메세지..
            //에러는 아님..즉, 프로그램이 멈추지 않음.
            echo "zzz";

            //js처럼 ;생략가능? 마지막 명령줄만
            echo "aaa"
            //echo "bbb"            
        ?>

        <?php
            print "kkk";
            PrinT "aa";
        ?>

        <!-- 주석 -->
        <?php
            //주석
            /*  */

            # 주석..
        ?>
    </body>
</html>

<!-- html과 php의 혼용사용에 대한 마지막 연습 -->
