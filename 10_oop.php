<?php
    // 자바와 c++과 js를 섞었음
    // 클래스선언
    class Person{
        // 멤버변수
        public $name;
        public $age;

        // 메소드
        public function show(){
            // echo "name : $name, age: $age <br>";못알아들음
            //멤버변수는 반드시 $this 포인터변수를 사용해야함
            echo "name : $this->name, age: $this->age <br>";
        }
    }

    //객체 생성
    $p= new Person;//객체 생성, $p는 포인터변수
    $p->name="sam";
    $p->age=20;
    $p->show();
    echo"<hr>";


    //생성자
    class Student{
        private $name;
        protected $age;
        public $major;

        //생성자 함수
        public function __construct($name, $age, $major){
            $this->name= $name;
            $this->age= $age;
            $this->major= $major;
        }

        public function show(){
            echo " $this->name , $this->age , $this->major <br>";
            //다른 메소드 호출가능
            // aaa();error
            $this->aaa();
        }

        public function aaa(){
            echo "aaa";
        }
    }

    $stu= new Student("robin", 25, "android");
    $stu->show();
    echo "<hr>";


    // 상속
    class AlbaStudent extends Student{
        private $task;

        //생성자함수
        public function __construct($name, $age, $major, $task){
            //$this->name= $name;
            //부모멤버는 부모가 알아서..
            //이걸 명시적으로 표시 (super키워드 없음)
            Student::__construct($name, $age, $major);
            $this->task= $task; 
        }

        //상속받은 메소드show()가 맘에 안들어.
        //기능바꿔치기 override
        public function show(){
            Student::show();
            echo "task : $this->task <br>";

            //한줄쓰기하려면
            echo " $this->name , $this->age , $this->major , $this->task <br>";
        }
    }

    $alba= new AlbaStudent("kim", 30, "web", "manager");
    $alba->show();

    




    

    


?>