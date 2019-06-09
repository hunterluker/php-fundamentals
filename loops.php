
<?php

    # LOOPS - Execute code set number of times

    /*  
        For
        While
        Do...While
        ForEach
    */

    # For Loop
    # @params = init, condition, inc

    for($i = 0; $i <= 10; $i++) {
        echo 'Number ' . $i;
        echo '<br>';
    };


    # While Loop
    # @params = condition

    $i = 0;

    while($i < 10) {
        echo $i;
        echo '<br>';
        $i++;
    }


    # Do... While
    # @params = condition

    $i = 0;

    do {
        echo $i;
        echo '<br>';
        $i++;
    } while($i < 10)


    # ForEach loop - For arrays

    $people = array('Brad', 'Jose', 'Hunter');

    foreach($people as $person) {
        echo $person;
        echo '<br>';
    }

    $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'j@sfl.com', 'Hunter' => 'hunter@aol.com');

    foreach($people as $person => $email) {
        echo $person. ': ' . $email;
        echo '<br>';
    }
    
?>