<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
echo "Exercise 1 starts here:";

function new_exercise($x) {

    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}
echo new_exercise(1);

// EXPLANATION Have to give argument $x to function to pass a parametar 1 (first).

new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

// EXPLANATION Array index starts from 0, Monday is 0, not 1.

new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);

// EXPLANATION Wrong quotation marks for string, should be "". The best is to write
//another string and check how it behaves (green is good).

new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);

// EXPLANATION  Check $day and remove it with &; with strlen we are returning part of the string.

new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) {
    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array

// EXPLANATION: for method have to loop through a to z, so one letter should be always include.
// With != we declare it can not be equal to double aa and we don't include that part of array, remove it with false.


new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];

function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode(" - ", $params);
}


/*//function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}*/

function randomHeroName() {
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes) -1)][rand(0, 10)];

    return $randname;
}

echo "Here is the name: " . combineNames();

// EXPLANATION We had to return $randname, not echo it and put -1 (don't quite understand why...) or rand(0, 1).

new_exercise(7);
function copyright(int $year) {
    return "&copy; $year BeCode";
}
//print the copyright
 echo copyright(idate('Y'));

//EXPLANATION idate — Format a local time/date as integer

new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith';

    }
    return 'No access';
}

//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//no access
echo login('john@example.be', 'dfgidfgdfg');
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!

// EXPLANATION I added && to include email and password to access data.
// It has to return string in one line, with name and surname together.

new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found <br />';
        }

        }
    return 'Acceptable <br />';
}

//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');

// EXPLANATION So, for link to return unacceptable after looping through array argument has to be false or do not mach to anything in array and echo every
// link after check.

new_exercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
$count = count($areTheseFruits);
for($i = 0; $i < $count; $i++) {
    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this

// EXPLANATION I declared $count variable of areTheseFruits to include each item of fruits in array. Then looping through array we check for fruits. 