<?php
echo "<h2>Inheritance & Polymorphism</h2>";

class Lecturer {
    public $name, $subject, $salary;

    function __construct($n, $s, $sal) {
        $this->name = $n;
        $this->subject = $s;
        $this->salary = $sal;
    }

    function getInfo() {
        echo "Lecturer: $this->name | $this->subject | Rs.$this->salary <br>";
    }
}

class Parttime extends Lecturer {
    public $hours;

    function __construct($n, $s, $sal, $h) {
        parent::__construct($n, $s, $sal);
        $this->hours = $h;
    }

    function getInfo() {
        echo "Part-time: $this->name | $this->subject | Rs.$this->salary | Hours: $this->hours <br>";
    }
}

class Fulltime extends Lecturer {
    public $dept;

    function __construct($n, $s, $sal, $d) {
        parent::__construct($n, $s, $sal);
        $this->dept = $d;
    }

    function getInfo() {
        echo "Full-time: $this->name | $this->subject | Rs.$this->salary | Dept: $this->dept <br>";
    }
}

// Objects
$l  = new Lecturer("Shiwani", "Science", 50000);
$pt = new Parttime("Niharika", "Maths", 20000, 19);
$ft = new Fulltime("Sorab", "English", 60000, "BBM");

// Polymorphism
$l->getInfo();
$pt->getInfo();
$ft->getInfo();

echo "<br>Inheritance: Child classes reuse properties<br>";
echo "Polymorphism: Same method (getInfo) behaves differently";
?>
