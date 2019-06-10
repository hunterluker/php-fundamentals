<?php

    #substr()
    # Returns a portion of a string

    // $output = substr('Hello', 1, 3);
    // $output = substr('Hello', -2);
    // echo $output

    #strlen()
    # Returns the length of a string

    // $output = strlen('Hello World');
    // echo $output;

    #strpos()
    #Finds the position of the first occurence of a sub string

    // $output = strpos('Hello World', 'o');
    // echo $output;

    #strrpos()
    # Finds the position of the last occurence of a sub string
    // $output = strrpos('Hello World', 'o');
    // echo $output;

    #trim()
    # Strips whitespace

    // $text = 'Hello World                 ';
    // var_dump($text);
    // $trimmed = trim($text);
    // var_dump($trimmed);

    #strtoupper()
    # Makes everything uppercase

    // $output = strtoupper('Hello World');
    // echo $output;

    #strtolower()
    # Makes everything lowercase

    // $output = strtolower('Hello World');
    // echo $output;

    # ucwords()
    # Capitalize every word
    // $output = ucwords('hello world');
    // echo $output;


    # str_replace()
    # Replace all occurences of a search string with a replacement

    // $text = "Hello World";
    // $output = str_replace('World', 'Everyone', $text);

    // echo $output;

    # is_string()
    # Check if string

    // $val = '22';
    // $output = is_string($val);

    // echo $output;

    // $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

    // foreach($values as $value) {
    //     if(is_string($value)) {
    //         echo "{$value} is a string<br>";
    //     }
    // }


    #gzcompress()
    # Compress a string

    $string = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi corporis vero doloribus nemo, unde quasi delectus laborum nulla adipisci suscipit, qui sequi aperiam minima quibusdam rerum eos similique odit! Suscipit? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor dignissimos, commodi facere iusto iure obcaecati aspernatur molestiae perspiciatis eveniet impedit? Eligendi rem culpa error beatae in magni cupiditate possimus consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, sequi vitae ullam maiores consequuntur cumque architecto distinctio in, veniam ducimus tenetur sit eveniet explicabo aperiam nam dolore, aliquid labore consequatur.";

    $compressed = gzcompress($string);

    // echo $compressed;

    $original = gzuncompress($compressed);

    echo $original;

