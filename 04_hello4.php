<!-- 일단 간단히 2단 출력 -->
<?php

    $dan=2;

    for($i=1; $i<10; $i++){
        echo "$dan * $i = " . $dan*$i;
        echo "<br>";
    }

?>

<hr>
<!-- 출력결과를 좀 이쁘게 table요소 사용해보기 -->
<?php

    $dan=5;

    echo "<table border='1' style='text-align:center'>";

    for($i=1; $i<10; $i++){
        // echo "<tr><td></td></tr>"//한줄로 출력하면 작성하기가 너무 어려움
        //한줄 출력문 보다는 줄바꿔가면서 코드를 쓰고 싶다면..
        // 여러줄로 작성하고 싶다면. ()를 명시적으로!!
        echo ("<tr>
                <td>$dan</td>
                <td>$i</td>
                <td width='100px'>".$dan*$i."</td>
               </tr>");
    }

    echo "</table>";

?>

<!-- 위 방식은 html코드작성부분이 자동완성도 안되고.. -->
<!-- 불편함. -->
<hr>
<!-- 출력을 html태그로 하지 말고..값만 php로 적용 -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title></title>
    </head>

    <body>
        <!-- 구구단 출력을 표로 하기 -->
        <table border="1" style="text-align: center;">

            <?php
                $dan=7;

                for($i=1; $i<10; $i++){
            ?>
            <!-- for문의 지역 {}도 분리작성이 가능함 -->

            <!-- 이 공간은 html의 공간 -->
                    <tr>
                        <td> <?php echo $dan; ?> </td>
                        <td> <?= $i?> </td>
                        <td width="50"> <?= $dan*$i ?> </td>
                    </tr> 
            <?php 
                }
            ?>

        </table>
    </body>
</html>