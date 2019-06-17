<?php

$people[] = "Steve";
$people[] = "Kevin";
$people[] = "Hunter";
$people[] = "Brad";
$people[] = "Mark";
$people[] = "Tayte";
$people[] = "Bryan";
$people[] = "Matias";
$people[] = "Tessa";
$people[] = "Amanda";
$people[] = "Houston";
$people[] = "Steven";
$people[] = "Eric";
$people[] = "Kendell";
$people[] = "Rick";
$people[] = "Morty";
$people[] = "Harry";
$people[] = "Ron";
$people[] = "Joe";
$people[] = "Court";
$people[] = "Riley";
$people[] = "Rick";

// Get Query String
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions
if($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);

    foreach($people as $person) {
        if(stristr($q, substr($person, 0, $len))) {
            if($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;