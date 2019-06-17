<?php 
    $user = ['name' => 'Hunter Luker', 'email' => 'test@test.com', 'age' => 27];

    $user = serialize($user);

    setcookie('user', $user, time() + (8600 * 30));

    $user = unserialize($_COOKIE['user']);

    print_r($user);