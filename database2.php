<?php

    header('Content-Type:text/html; charset=utf-8');

    phpinfo();

    //DB에 저장할 데이터들
    $name= 'sam';
    $msg= "Hello world.";
    date_default_timezone_set('Asia/Seoul');
    $date= date('Y-m-d H:i:s');

    //DBMS와 연결하는 객체 생성 : PDO객체 -지원가능DBMS : mysql, oracle, mssql, sqlite, sybase etc..
    //php버전 5.5버전 이상에서만 됨.
    $db= new PDO('mysql:host=localhost;dbname=mrhi_db', 'mrhi' , '1234' );
    //$db는 포인터변수

    //DB제어 SQL문 실행
    //1) create    
    $db->exec("create table if not exists notice(no integer primary key auto_increment, name varchar(20), msg text, date datetime)");

    //2) insert
    $db->exec("insert into notice(name, msg, date) values('$name','$msg','$date')");

    //3) select
    $result= $db->query("select * from notice");

    //$result결과 보여주기
    while( $row= $result->fetch() ){
        echo $row['no'].", ".$row['name'].", ".$row['msg'].", ".$row['date']."<hr>";
    }

?>