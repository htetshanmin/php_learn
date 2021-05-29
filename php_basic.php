<?php

// ********************************************WELCOME TO MY PHP*************************************************************

//!!boolean data type
//$bol = '0';
//echo $bol ? 'True' : 'False';
//return value
//$name = 'Mg Mg is a good guy';
//echo strlen($name).'<br>';
//$string = 'i am hacker i want to hack ';
// echo strlen($string);
//constant operators
//define('NAME', 'htetshanmin');
//echo NAME;
//echo '<br>';
//define('AGE', 30);
//echo AGE;

//$name = 'htet shan min';
//$age = 15;
//$salary = 28.9;
//$ismarried = false.'<br>';
//echo gettype($name).'<br>';
//echo gettype($age).'<br>';
//echo gettype($salary).'<br>';
//echo gettype($ismarried).'<br>';
//echo '<pre>';
//   var_dump($age);
//echo '</pre>';
//echo '<pre>';
//  var_dump($name);
//echo '</pre>';
//echo '<pre>';
// var_dump($salary);
//echo '</pre>';
//echo '<pre>';

//var_dump($ismarried);
//echo '</pre>';
//define('NAME', 'hyet shan min');
//echo NAME;
//define('CLASS', 'beginner');

//echo '<h1>WELCOME  TO MY WEBSITE</h1>';
// echo '<p>my name is <b>htet shan min.</b></p>';
//echo '<li>here is my lists which you can get in my blog</li>';
//echo  '<ul>sqli injection<b>(both manually and auto</b></ul>';
//echo  '<ul>xss <b>(both manually and auto)</b></ul>';
//echo "<button>CLICH ME!<script>alert('THANK YOU')</script></button>";
//echo '<br>';
//echo '<center><h3><i>    created by <b>KILLER007</b></i></h3></center>';
//here doc
//$doc = <<<HACKER
//<h1>WELCOME  TO MY WEBSITE</h1>
//<p>my name is <b>htet shan min.</b></p>
//<li>here is my lists which you can get in my blog</li>
//<ul>sqli injection<b>(both manually and auto)</b></ul>
//<ul>xss <b>(both manually and auto)</b></ul>
//<button>CLICH ME!<script>alert('THANK YOU')</script></button>
//<br>
//<h3><i>created by <b>KILLER007</b></i></h3></center>
//HACKER;
//echo $doc;
//####################################((PHP OPERATORS))#######################################################
//ARITHEMETIC OPERATORS ( + , - , * , / , %)
//COMPAARISON OPERATORS
//LOGICAL OPERATORS
//ASSIGNMENT OPERATORS
//CONDITIONAL OPERATORS(TERNARY OPERATORS)

//echo 5 + 3;//!!ARITHEMETIC OPERATORS
//echo '<br>';
//echo 5 - 3;
//echo '<br>';
//echo 5 * 3;
//echo '<br>';
//echo 15 / 3;
//echo '<br>';
//echo 16 % 3;

//!!COMPARISON OPERATORS (increment )
//$num_1; //declare
//$num_1 = 10; //asgin
//$num_1 = 10 + 5; //reassign
// echo $num_1;
//echo ++$num_1;// $num_1++ = ++$num_1 = $num_1 = $num_1 + 1

//(decrement )
//$num_2; //declare
//$num_2 = 15; //assgin
//$num_2 = $num_2 - 5; //reassign
// echo $num_2;
//--$num_2;
//echo $num_2;

//logical operator
// and or ! && ||
//$name = 'MG MG';
//$age = 25;

//if ($name == 'MG MG') {
//   echo 'it is mg mg';
//} else {
//    echo 'it is not MG MG';
//}
//echo '<br>';
// $age = 20;

// if ($age == 30) {
//    echo 'his age is 30';
//} else {
//    echo 'his age is 20';
// }
// echo '<br>';
// $username = 'KILLER007';
//$pass_wd = '12345htet';
//if ($username == 'KILLeR007' and $pass_wd == '123445htet') {
//  echo 'Welcome back admin';
// } else {
//  echo 'sorry, noob hacker :can not login it';
// }
//echo '<br>';
//$birth_year = 2004;
//$birth_month = 01;
//if ($birth_year == 2004 and $birth_month == 01) {
//  echo 'your birthday is correct';
//} else {
// echo 'check your birthday';
// }
//$_ember = 'aung aung';
//$usr_id = '003';
//if ($_ember == false || $usr_id == false) {
//  echo 'welcome back : '.$_ember.'';
// } else {
//    echo 'wrong password and undefined account .. create account?';
//}

//$_ember = 'aung aung';
//$usr_id = '003';
// if ((bool) $usr_id == '007') {   // !! == (bool) be careful you can wrong in here (bool)is equal to false and expression is also false [false false make true]
//   echo 'welcome back : '.$_ember.'';
//} else {
//  echo 'wrong password and undefined account .. create account?';
//}

//!! ASSIGNMENT OPERATOR
//!!(= , += , -= , /= , %=)!!//
// $age; //let the man age (declared )
// $age = 16; //assingned
// $age = $age - 5; //reassingned
//echo $age -= 5;
//echo '<br>';
//echo $age += 5;
//echo '<br>';
//echo $age *= 2;
//echo '<br>';
//echo $age /= 2;
//echo '<br>';
//echo $age %= 3;

//!!conditional operators
//$age = 10;
//echo $age == 10 ? 'right' : 'wrong'; //tinary operators if and else short habd form
//echo '<br>';
// echo $age == 8 ? 'hi, i love you' : 'i hate you';

//echo '<br>';
//echo $age > 11 ? 'yea age is greater than 11' : 'no age is less than 11';

//echo '<br>';
//echo $age == 20 ? 'yea min khant have no girl friend' : 'yea nyein chan aung is totally fa(forever saw pyint kaung)';

// echo '<br>';
//  $girlfriend = 26 != 26;
// echo $girlfriend ? 'kaw pyint kaung lay' : 'killermine had 22 girlfriends';
// echo '<br>';
// $UGMH = 10 != 9;
// echo $UGMH ? 'UGMH is skillful but saw ma shit bu' : 'killer is noob but saw hyint tal';

//!! if else short hand writing
//if (null) {//null is also false
//   echo 'hello world';
//} else {
//    echo 'hacker';//{}is not include but it will only alllow to use only one echo please do not use.other developers will laught at you.
//}
// if (null)
//  echo 'it is true';
//else
// 'it is false';

//!! if else, else if!!//
//$user_name = ['htet shan min',
// 'killler007',
//  'blackmail hacker',
// 'noob injector founder',
//  'php developer', ];
//  echo '<br>';
//  echo '<pre>';
// var_dump($user_name);
//  echo '</pre>';
/// $pass_wd = ['12345htet',
//'12345killer',
//'12345blackmail',
//'12345noobinjector',
//'12345php_developer',
// ];
//echo '<pre>';

//var_dump($pass_wd);
///echo '</pre>';

//if ($user_name == 'mg mg') {
//  echo 'login in member';
//} elseif ($user_name == 'aung aung') {
//  echo 'welcome admin';
//} elseif ($user_name == '1=1') {
//   echo 'welcome moderator';
// } elseif ($user_name == 'null') {
//    echo 'welcome cpanel admin';
//} else {
//    echo 'you are noob hacker';
//}
//echo '<br>';
//if ($pass_wd == '12345') {
//    echo 'welcome admin';
// } elseif ($pass_wd == "'1'='1'") {
//   echo 'welcome member';
//} elseif ($pass_wd == 'null') {
//   echo 'welcome db admin';
//} else {
//   echo'GET OUT MOTHER FUCKER DONOT TOUCH MY PAGE!!';
//}

//!! ternary operator and decision making
//$number = 10;
// $number_1 = 11;
// echo $number > $number_1 ? "$number is greater than $number_1" : "$number is not greator than $number_1";

//$db_name = 'htet shan min';
//$db_pass = '12345htet';

//$user_input_name = 'killermine';
//$user_input_pass = '12345httttet';

//if ($db_name == $user_input_name) {
//    echo 'welcome back admin';
//} elseif ($db_pass == $user_input_pass) {
//   echo 'welcome back admin';
//} else {
//   echo 'hacker : you need to learn more';
//}

// if ($user_input_name == $user_input_name && $db_pass == $user_input_pass) {
//    echo 'welcome back admin';
// } elseif ($user_input_name == $user_input_name and $db_pass == $user_input_pass) {
//    echo 'please check username and password again1';
//} elseif ($user_input_name != $user_input_name and $db_pass != $user_input_pass) {
//    echo 'please check username and password again2';
// } elseif ($user_input_name != $user_input_name || $db_pass == $user_input_pass) {
//    echo 'please check user_name and pass';
//} else {
//    echo 'sorry hacker, inprove your skill more';
//}
//!!switch statement
///if ($db_name == $user_input_name and $db_pass == $user_input_pass) {
//   echo 'welcome back admin';
//} //elseif ($db_name != $user_input_name && $db_pass != $user_input_pass) {
// echo 'you are hacker ,you try to bypasss our admin panel';
// } elseif ($db_name != $user_input_name and $db_pass == $user_input_pass) {
//    echo 'your username is incorrect . please check your username';
// } elseif ($db_name == $user_input_name and $db_pass != $user_input_pass) {
//   echo 'your password is incorrect . please check your passwork again';
//} else {
//    echo 'sorry , we donot have any username and psssword of this case. would you like to create a new account?  <button>CLICK ME TO CREATE ACCOUNT</button>';
// }
//!!amazing filtered original thinked by killer007 not copy
//!!$user_input = '12345hhhhh';
//!!$filtered_input = [
//!!'noob',
//!!'1=1',
//!!'12345hhhhh',
//!!'<script>alert(1)</script>',
//!! 'hacked',
//!!'null',
//!!];
//!!$num_in_0; //declear

//!!if ($user_input == $filtered_input[0]) {
//!!  $num_in_0 = 0; //reassigned
//!!} elseif ($user_input == $filtered_input[1]) {
//!!   $num_in_0 = 1;
//!!} elseif ($user_input == $filtered_input[2]) {
//!!   $num_in_0 = 2;
//!!} elseif ($user_input == $filtered_input[3]) {
//!!   $num_in_0 = 3;
//!! } elseif ($user_input == $filtered_input[4]) {
//!!    $num_in_0 = 4;
//!!} elseif ($user_input == $filtered_input[5]) {
//!!  $num_in_0 = 5;
//!!}
//!!switch ($user_input == $filtered_input[$num_in_0]) {
//!! case $user_input == $filtered_input[0]: echo 'sorry ,this keyword has already banned got haha noob hacker'; break;
//!! case $user_input == $filtered_input[1]: echo '1=1 is not allowed and already filtered'; break;
//!!case $user_input == $filtered_input[2]: echo 'THIS METHOD WILL NOT ALLOWED NOOB HACKER'; break;
//!! case $user_input == $filtered_input[3]: echo 'sorry xss is not allowed too'; break;
//!!case $user_input == $filtered_input[4]: echo 'hacked blahblah is not allowed noob hacker'; break;

//!! case $user_input == $filtered_input[5]: echo 'null is already filtered ;)';
//!!}

//!! looping types
// for loop
//while loop
//do while loop
//!! FOR LOOP
//for ($i = 0; $i < 101; ++$i) {//for (start point{intialize} ; end point (condition) ; increment)
//  echo "i love you($i)".'<br>';
// }
//when girl friend says send me 100 times i love you  me :: looping is the best
//for ($h = 100; $h > -1; --$h) {
// echo "i love MYSELF ($h)".'<br>';
// }

//!!WHILE LOOP
//$fa = 0;
//$rs = 101;
// $h_1 = "$fa";
//$h_2 = "$rs";
//while ($h_1 < $h_2) {
//  echo "your are forever alone ($h_1) ".'<br>';
//  ++$h_1;
//}

//$abcd = 0; $a1 = 1; $a2 = 2; $a3 = 3;
//for ($abcd; $abcd < 10; ++$abcd) {
// if ($abcd == 0) {
//   echo 'it is 0 now';
// }
// echo '<br>';
// if ($abcd == $a1) {
///     echo 'it is 1 now';
// }
// if ($abcd == $a2) {
//     echo 'it is 2 now';
// }
/// echo '<br>';
//if ($abcd == $a3) {
//   echo "it is $a3 now";
// }
// echo '<br>';
//if ($abcd == 4) {
//    echo 'it is 4 now';
// }
//echo '<br>';
//if ($abcd == 5) {
// echo "alert('it is 5 now ')";
/// }
//echo '<br>';
//if ($abcd == 6) {
//   echo 'it is 6 now';
//}
//echo '<br>';
//if ($abcd == 7) {
//    echo 'it is 7 now';
//}
//echo '<br>';
///if ($abcd == 8) {
//   echo 'it is 8 now';
// }
//echo '<br>';
//if ($abcd == 9) {
//   echo 'it is 9 now';
// }
//}

//$test = 1;
// for ($test; $test < 101; ++$test) {
//    if ($test == 10) {
//      echo " it is 10 nows.Would you like to stop it ? ".'<br>';
//   } else {
//      echo "it is $test now <br>";
//  }
// }

//$num = 0;
// while ($num < 10) {
//    ++$num;
//    if ($num == 5) {
//       echo 'it is 5 now';
//     break;
// } else {
//     echo "it is $num now <br>";
//  }
//}

// $num = 0;
// for ($num; $num < 12; ++$num) {
//  if ($num == 10) {
//     echo 'it is 10 now. i have stop that looping';
//    break;
// } else {
//     echo "it is $num now <br>";
//  }
//  }

//!! Variable types
//#######################################((VARIABLES))######################################################
/*
 * !!!!Integer
 * !!!!Float (double)
 * !!!!Boolean
 * !!!!Null
 * !!!!Array
 * !!!!Object
 * !!!Resource
 */
//$name = 'MG MG'; //assign the variable
//echo $name.' ==  '; //call the variable (.) is used to add string using string method
//echo gettype($name).'  ==  '; // gettype is used to show the datatype
//echo strlen($name).'<br>'; // string length is used to count the string
// var_dump($name);
//echo is_string($name);//to check string or not if the answer is 1 is it string else not string
//echo var_dump(is_string($name));

//$age = 20;
//echo $age.'<br>';
//echo gettype($age).'<br>';
//echo strlen($age).'<br>';
//var_dump($age);
//echo is_integer($age);
//echo var_dump(is_integer($age));

//$salary = 200.54;
//echo $salary.'<br>';
//echo gettype($salary).'<br>';
//echo strlen($salary).'<br>';
//echo is_double($salary);
//echo var_dump(is_double($salary));

//$is_married = false;
//echo $is_married; //0 because it is false false value is equal to zero but php ingnore it
//var_dump($is_married).'<br>'; // check line 2 to know more
//echo is_bool($is_married);

//if else statement
//if (4 == 5) {
//  echo 'had a girl friend';
//} else {
//  echo 'you need a girlfriend';
// }
//echo '<br>';
// if (4 == 5) {
//     echo 'you miss me';
// } else {
//    echo 'you got me';
// }
// echo '<br>';
// if (2 == 3) {
//    echo 'say hello';
//} else {
//    echo 'hello world';
//}
// echo '<br>';
// $user = 'htet shan min';

//if (is_integer($user)) {
//    echo 'is it integer';
//} else {
//   echo 'is it not integer';
// }
//echo '<br>';
//$amount_of_user = 100;
//if (is_integer($amount_of_user)) {
//    echo 'you are right it is integer.';
// } else {
//    echo 'you are totally wrong';
//}
//$salary = 200.54;
//if (is_double($salary)) {
//    echo 'yea it is float or double';
//} else {
//   echo 'it is not float';
//}

//!!Array!!//
//!!Numeric Array (index array)
//!!Associative Array
//!!Multidimenaional array
//numeric array

//$name = ['hello',
//'htet shan min',
//'killermine007',
//'noob injector',
//'whoami',
//];

//$greeting = [];
//$greeting[0] = 'hi';
//$greeting[1] = 'hello';
//$greeting[2] = 'how are you';
//$greeting[3] = 'is everything fine';

//echo $greeting[0];

//$car = []; //declear
//$car[0] = 'car0';
// $car[1] = 'car1';
//$car[2] = 'car2';

//echo $car[0];

//$ary = ['zero', 'one', 'two', 'three']; //array intalization method

//echo $ary[1];
//!!Associated array
//$ary_test = [];

//$ary_test['Zero'] = 'hello'; //key => value styple
//$ary_test['One'] = 'hi';
// $ary_test['Two'] = 'how are you?';
//$ary_test['Three'] = 'greeting to you';

//echo '<pre>';
//var_dump($ary_test);
//echo '</pre>';
//$array_test['hi'] = 'greeting in elglish';
//$array_test['whoai'] = 'sound like hacker';

// $test = [
// 'one' => 'toyota',//intialization
//  'two' => 'landcuiser',
//  'three' => 'hacker',
// 'four' => 'cracker',
//];
//echo $test['three'];
//echo '<br>';
//$hacker = [
// 'one' => 'annoymous',
// 'two' => 'myanmar anonoymous family',
//'three' => 'black mail',
// 'four' => 'sql noob injector',
//];

//echo $hacker['one'];
//!! re practise
//$test_1 = [];
//$test_1[0] = 'hello';
//$test_1[1] = 'say hi';

// echo $test_1[0];

//$test_2 = ['hello', 'say hi', 'how are you?'];

//echo $test_2[1];
//!!Multi Dimensional array
// $bigAry = [
// ['hi', 'hello', 'mingalarpar'],
//  ['ethical hacker', 'white hacker', 'black hacker'],
//  ['htet shan min', 'nyein chan aung', 'min khant', 'phone pyae'],
/// ];
//$bigAry[row][column];
//echo $bigAry[0][2];
//echo '<br>';
//echo $bigAry[1][0];
// echo '<br>';
//echo $bigAry[1][1];
//!!Array looping
//$index_array = [];
//$index_array[0] = 'i am 0';
// $index_arrray[1] = 'i am 1';
//$index_array[2] = ' i am 2';

//$index_array = ['i am 0', 'i am 1', 'i am 2', 'i am 3', 'i am 4'];

// for ($i = 0; $i < count($index_array); ++$i) {
//    echo $index_array[$i].'<br>';
// }
// $i = 0;
// while ($i < count($index_array)) {
//    echo $index_array[$i].'<br>';
//    ++$i;
// }
//do{
// echo $index_array[$i] . '<br>';
// $i++;
//}while($i < count($index_array))
// for ($i; $i < count($index_array); ++$i) {
//  if ($i == 3) {
//     echo $index_array[3].' hello it is 3 positon now'.'<br>';
// } else {
//     echo $index_array[$i].'<br>';
// }
//}
//for ($i = 0; $i < count($index_array); ++$i) {
// if ($i == 3) {
//   echo $index_array[3].' hello it is 3th position now'.'<br>';
// } else {
//   echo $index_array[$i].'<br>';
// }
// }
//do {
// if ($i == 3) {
//    echo $index_array[3].' hello you are in third position'.'<br>';
//     ++$i;
// } else {
//    echo $index_array[$i].'<br>';
///    ++$i;
// }
//  } while ($i < count($index_array));
//$big_test = [
//['one', 'two', 'three', 'four', 'five'],
// ['hi', 'hello', 'greeting'],
//['i love you', 'i hate you'],
//];
//echo '<pre>';
//for ($h = 0; $h < count($big_test); ++$h) {
// for ($t = 0; $t < count($big_test[$h]); ++$t) {
//    echo $big_test[$h][$t].' ';
// }
// echo '<hr>';
//}
//$need_to_learn = [
// ['html', 'css', 'java script', 'java'],
// ['php', 'mysql', 'node.js', 'dianjo', 'perl', 'cold fusion', 'java EE'],
// ['C', 'C++', 'C#'],
//];

//for ($h = 0; $h < count($need_to_learn); ++$h) {
//  for ($t = 0; $t < count($need_to_learn[$h]); ++$t) {
//      echo $need_to_learn[$h][$t].' ';
// }
//  echo '<hr>';
//}
//$tt = [
// ['hello', 'hi', 'say hi to me'],
// ['hacker', 'cracker', 'developer', 'network enginner'],
//['learn programming ', 'learn how to exploit', 'learn how to stay annoymous'],
//];

//for ($i = 0; $i < count($tt); ++$i) {
//for ($j = 0; $j < count($tt[$i]); ++$j) {
//   echo $tt[$i][$j].'<br>';
//}
// echo '<hr>';
//}

//!! for each loop

//$tthh = ['hi', 'hacker', 'and', 'cracker', 'welcome ', 'to ', 'my page'];
//foreach ($tthh as $test) {
// echo $test.'<hr>';
//}

//$aryy = ['first' => 'html / css', 'second' => 'python', 'third' => 'mysql', 'fourth' => 'php', 'fifth' => 'node.js'];
//foreach ($aryy as $key => $value) {
//   echo $key.' => '.$value.'<br>';
//}
//!! Function
//function myFun()
//{
// echo 'hello <br>';
// echo ' i am from function';
//}
//myFun();
//function myFirst()
//{
//  echo ' it is my second function <br>';
//  echo ' say hello to my second function';
//}
// myFirst();
//function sayHello()
//{
// $num_1 = 10;
// $num_2 = 30;
//$result = $num_1 + $num_2;
// echo $result;
//}
//sayHello();

//function loopFirst()
//{
// $i = [
//  ['hello', 'hi', 'how are you ?'],
// ['1', '2', '3', '4', '5', '6', '7'],
//  ['hacker', 'cracker', 'developer', 'network enginner'],
//];
//for ($h = 0; $h < count($i); ++$h) {
//   for ($w = 0; $w < count($i[$h]); ++$w) {
//      echo $i[$h][$w].'<br>';
//  }
//    echo '<hr>';
// }
// }
// loopFirst();
//function testt($num)
//{
// echo "THE VALUE IS => $num";
//}
// testt(10);
// echo '<br>';
// function Hii($num_1, $num_2, $num_3)
// {
//    echo "My name is $num_1 and My age is $num_2 . I born in yangon in $num_3 . ";
//}
//Hii('htet shan min', 16, 2004);
//function Hacker($num_1, $num_2, $num_3)
//{
//    echo "my name is $num_1  and i am from $num_2 . i am the founder of $num_3 . ";
//}
//Hacker('KILLER007', 'BLACKMAIL', 'SQL LAB');

//echo '<br>';

// function operator($num_1, $num_3)
//{
//    echo($num_1 + 8) * $num_3;
//}
//operator(3, 8);
//function Doit($num_1 = 10)
//{
//  echo "5 + 5 + 1 is :: $num_1";
//}
//Doit(11);
//$val = 'i am global variable';
//function doIt()
//{
//   global $val;
//   echo $val;
//   echo '<br>';
//   $value = 10;
//   echo $value;
//}
//doIt();
//function myFunc()
//{
// static $value = 0;
// ++$value;
// echo $value;
// echo '<br>';
//}
// myFunc();
// myFunc();
// myFunc();
// myFunc();
// static $user = 1;
// ++$user;

// $a = 20;
//$b = &$a; // & variable passes to by reference

// $b = 180;
// echo $b;
// echo '<br>';
// echo $a;
// echo '<br>';

// $c = 30;
// $d = &$c;

// $c = 100;

// echo $c;
// echo '<br>';
// echo $d;
//////////////////////////////////////////////!!PHP FILE HANDLING//!!////////////////////////////////////////////////////////////!!///////
//!! GETTING INPUT TEXT //!!
//!! GETTING INPUT FILE
//!! GETTING INPUT CHECKBOX
//!! GETTING RADIO BUTTTON DATA
//!! GETTING DIFFERENT INPUT METHODS
//!!GET METHOD AND POST METHOD

//!! GET METHOD AND POST METHOD
// <form action="" method="post">
//username :: <input type="text" placeholder="enter your name" name="username">
//<br>
//password :: <input type="password" placeholder="enter your password" name="password">
//<br>
//<input type="submit" name="submit">
//</form>
//if (isset($_GET['submit'])) {
// echo "<script>alert('submit button was click')</script>";
//}
//if (isset($_GET['submit'])) {
//    echo "<script>alert('submit complete')</script>";
//}
//<form action="" method="get">
//Username  :: <input type="text" placeholder="please input your name" name="username">
//<br>
//Password   :: <input type="password" placeholder="please input your password" name="password">
//<br>
//<input type ="submit" name="submit">
//</form>
//$uname = $_GET['username'];
//echo 'your user name is '.$uname;
//if (isset($_GET['submit'])) {
//   echo "<script>alert('hi you click submit buttom')</script>";
//}
//$uname = $_GET['username'];
//   echo "your user name is <span style='color:red'> ".$uname.'</span>';
//  echo '<br>';
//$upass = $_GET['password'];
//   echo 'we will check your password as fast as possible '."$upass";
//<form action="" method="get">
//Username  :: <input type="text" placeholder="please input your name" name="username">
//<br>
//Password   :: <input type="password" placeholder="please input your password" name="password">
//<br>
//<input type ="submit" name="submit">
//</form>

?>


