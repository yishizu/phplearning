<?php
    $name = 'Jon';
    echo "Hello $name";

    $colors = array('red', 'bule','yellow');

    print_r($colors);

    $colors[] = 'green';

    
    echo '<p>'.$colors[0].'</p>';
    print_r($colors);

    //for loop

    for($i=0; $i<sizeof($colors); $i++){
        echo '<p>'.$colors[$i].'</p>';
    }

    //foreach
    foreach($colors as $color){
        echo '<p>'.$color.'</p>';
    }

    $is_loggedin = false;
    if($is_loggedin){
        $message = 'Welcome to this Page';
    }else{
        $message = 'Hello there!';
    }

    $message = $is_loggedin ? 'Welcome' : 'Hello';

    echo '<p>'.$message.'</p>';

    $total = 10;

    switch($total){
        case 1:
            echo '<p> $total is 1 </p>';
            break;
        case 5:
            echo '<p> $total is 5 </p>';
            break;
        case 10:
            echo '<p> $total is 10 </p>';
            break;
    }

    function add_to_x($x){
        return $x+10;
    }
    $x = 1;
    $result = match($x){
        1 =>  '<p> $x is 1 </p>',
        2 =>  '<p> $x is 2 </p>',
        default =>  '<p> $x is nor 1 and 2 </p>',
    };


    $result2 = match(true){
        $x ==1 =>  '<p> $x is 1 </p>',
        $x ==2 =>  '<p> $x is 2 </p>',
        default =>  '<p> $x is nor 1 and 2 </p>',
    };


    echo '<p>'.$result2.'</p>';

    //do while
    $i =0;

    do{
        echo "<p>$i</p>";
        $i++;
    }while($i<10);

    //forloop

    for($i=0; $i<10; $i++){
        echo "<p>$i</p>";
    };

    //foreach array 
    $home_towns = array(
        'Yuko' => 'Hamamatsu',
        'Moja' => 'Kure',
        'Kozue' => 'Tokyo'
    );

    foreach($home_towns as $name => $town){
        echo "<p>$name's home town is $town</p>";
    };
        
    function is_palindrome($word){
        $word = strtolower($word);
        $word = str_replace(" ","", $word);
        $pal_check = ($word == strrev($word));
        return $pal_check;
    }

    $thisWord = 'Wow';
    if(is_palindrome($thisWord)){
        echo "<p>$thisWord is palindrome</p>";
    }
    
    class Person{
        var $name;
        var $age;
        var $birthday = false;

        function __construct($name,$age){
            $this->name = $name;
            $this->age = $age;
        }
        
        public function get_age(){
            return $this->age;
        }
        public function get_name(){
            return $this->name;
        }

        public function set_name($name){
            $this->name = $name;
        }
    }

    $person = new Person('Yuko','35');

    $age = $person->get_age();
    echo "<p>$age</p>";

    error_reporting(E_ALL);
    setcookie('error',true);
    $a = 2;

    var_dump($a);
    print_r($a);

    try{
        echo "";
    }catch(Exception $e){
        echo $e;
    }
?>