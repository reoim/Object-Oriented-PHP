<?php
class First{
    public $id;
    public $name;
    public function saySomething($word){
        echo $word;
    }

    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }
}

class Second extends First{
    public function getName(){
        return $this->name;
    }
}

$second = new Second('1', 'Reo Lee');
echo $second->getName();
$second->saysomething('<br />yolo');
?>
