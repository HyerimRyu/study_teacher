<?php 
    echo "Hello world!";
?>

<!-- 하나의 php문서안에 여러개의 php태그문 가능 -->
<?php
    echo "Second";
    // 줄바꿈 출력하려면..브라우저의 줄바꿈<br>태그사용
    echo "<br/>";

    echo "Next";
?>

<!-- php밖에 글씨를 쓰면?? 그냥  텍스트로 출력-->
Nice to meet you.

<!-- php태그밖에 써도 에러가 아니면.. -->
<!-- 그럼 html문법을 쓰면?? -->
<hr>
<h2>This is Heading Element.</h2>
<p>이것은 단락 요소 입니다.</p>

<!-- 이런식으면 .php문서에 html만 써도 될까?? -->