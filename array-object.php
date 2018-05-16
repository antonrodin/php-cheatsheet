<?php

    // Some times is important have array and some times, object or array of objects...

    // 1. Create any array object
    $obj1 = (object) [];
    var_dump($obj1);

    // 2. Create some array of objects
    $arr = array(
        (object) ['titulo' => 'Titulo 1', 'description' => 'Description 1'],
        (object) ['titulo' => 'Titulo 2', 'description' => 'Description 2'],
        (object) ['titulo' => 'Titulo 3', 'description' => 'Description 3'],
    );

    $obj2 = (object) $arr;
    foreach($obj2 as $o) {
        echo "<p>{$o->titulo}, {$o->description}</p>";
    }

    // 3. The other, way, with push method, like so:
    $arr2 = array();
    
    $person1 = new stdClass();
    $person1->name = "John Doe";
    $person1->city = "Moscow";

    $person2 = new stdClass();
    $person2->name = "Mary Popins";
    $person2->city = "New York";

    $person3 = new stdClass();
    $person3->name = "Brad Jefferson";
    $person3->city = "Madrid";

    array_push($arr2, $person1);
    array_push($arr2, $person2);
    array_push($arr2, $person3);

    $obj3 = (object) $arr2;
    foreach($obj3 as $person) {
        echo "<p>{$person->name}, {$person->city}</p>";
    }

    // Other way may be something like that:

    $arr3[] = (object) array('team' => 'Celta de Vigo', 'points' => 15);
    $arr3[] = (object) array('team' => 'Real Madrid', 'points' => 34);
    $arr3[] = (object) array('team' => 'Barcelona', 'points' => 33);
    $arr3[] = (object) array('team' => 'Atletico de Madrid', 'points' => 27);

    // Some irrelevant shit for sorting array
    function cmp($a, $b) {
        if ($a->points == $b->points) { return 0; }
        return ($a->points > $b->points) ? -1 : 1;
    }
    usort($arr3, 'cmp');

    foreach($arr3 as $fc) {
        echo "<p>{$fc->points}, {$fc->team}</p>";
    }

?>