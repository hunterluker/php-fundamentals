

<?php


    # Array - Variable that holds multiple values
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    // Indexed
    $people = array('Kevin', 'Jeremy', 'Hunter');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Audi', 'Tesla'];
    $cars[3] = 'Lambo';
    $cars[] = 'BMW';

    //echo count($cars)
    //print_r($cars)
    //var_dump($cars);

    //echo $people[3];
    //echo $ids[2]
    //echo $cars[4]


    // Associative arrays
    $people = array('Brad' => 35, 'Hunter' => 27, 'Bob' => 33);
    $ids = [22 => 'Jose', 44 => 'Mark', 39 => 'Brent'];

    //echo $ids[22];
    //echo $people['Brad'];
    $people['Jill'] = 22;

    //echo $people['Jill']
    //print_r($people)
    //var_dump($people)

    // Multi-Dimensional
    $cars = array(
        array('Honda', 20, 10),
        array('Tesla', 30, 20),
        array('Audi', 10, 5)
    );

    echo $cars[1][2];

?>