<?php

    header('Content-Type:text/html; charset=utf-8');

    //DB에 저장할 데이터들
    $name= 'sam';
    $msg= "Hello world.";

    //php.ini파일안에 time-zone을 설정하지 않으면 default시간을 사용함[로마시간]
    //닷홈같은 호스팅업체에서는 이미 time-zone설정이 그 나라로 되어 있어서 실무에서는 크게 필요없음.
    //설정문서를 수정할 수 없다면.. time-zone을 설정하는 함수를 이용
    date_default_timezone_set('Asia/Seoul');

    $date= date('Y-m-d H:i:s');

    //MySQL DBMS(데이터베이스관리시스템)와 연결하기
    $conn= mysqli_connect('localhost','mrhi','1234','mrhi_db');

    //원하는 쿼리문(SQL) 작성
    //1) Table 생성[create]
    $sql="CREATE TABLE IF NOT EXISTS board(no INTEGER PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20) NOT NULL, msg TEXT, date DATETIME)";
    //mysql에게 쿼리문 요청
    mysqli_query($conn, $sql) or die('생성 실패!');

    //2) 데이터 삽입[insert]
    $sql="INSERT INTO board(name, msg, date) VALUES('$name', '$msg', '$date')";
    $result= mysqli_query($conn, $sql);
    if($result) echo "insert 성공";
    else echo "insert 실패";

    //3) 데이터 읽어오기[select]
    $sql="SELECT * FROM board";
    $result= mysqli_query($conn, $sql);

    //결과로 나온 $result테이블의 총 레코드(row)수 얻어오기
    $row_num= mysqli_num_rows($result);

    //반복해서 한줄(한 레코드)씩 연관배열로 읽어와서 출력하기
    for($i=0; $i<$row_num; $i++){
        $row= mysqli_fetch_array($result, MYSQLI_ASSOC);//연관배열로 설정
    ?>

        <!-- 여기는 html문법영역 -->
        <p> <?php echo $row['no']; ?>  </p>
        <h2> <?= $row['name'] ?> </h2>
        <p> <?=$row['msg']?> </p>
        <p> <?=$row['date']?> </p>
        <hr>

    <?php
    }

    //4) 데이터 업데이트
    $sql="update board set name='robin' where no=3";
    mysqli_query($conn, $sql);

    //5) 데이터 삭제
    $sql="delete from board where no=4";
    mysqli_query($conn, $sql);

    //데이터 베이스 닫기
    mysqli_close($conn);
?>