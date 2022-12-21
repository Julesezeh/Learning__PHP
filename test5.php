<?php
    function test()
    {
        static $count = 0;
        echo $count;
        $count++;

    }

    //Type conversion for arithmetic operations
    echo "<br>";
    $pi = "3.1415927";
    $radius = 5;
    echo $pi * ($radius * $radius);
    echo "<hr> count:";
    test();
    //Using substring to convert an integer to a string and to get the substring of specified width of the string version of $number.
    echo "<br>";
    $number = 12345 * 67890;
    echo $number;
    echo "<br>";
    echo substr($number,3,1);
    echo "<hr> count:";
    test();

    //constants
    define("ROOT_LOCATION",'user/local/www');
    $directory  = ROOT_LOCATION;
    echo "<br>";
    echo $directory;
    echo "<hr> count:";
    test();

    //Built-in constants
    echo "This is line " . __LINE__ . " of file " . __METHOD__;
    /*
    __LINE__
    __FILE__
    __FUNCTION__
    __METHOD__
    __DIR__
    __CLASS__
   __NAMESPACE__
   */

   //Print statements
   $food ? print "Yes I have a value":print "No i don't have a value";
   print "Trent alexander arnold isn't good defensively";

   /*
   FUNCTIONS IN PHP
   Syntax
   
   function functionname($variablename){
    return ("WHATever ".$variablename);
   }

   DATE AND TIME FORMAT----note you can get the current time from the 'time()" function
   |
   |
   "l F jS Y" -----> Sunday December 18th 2022
   */
   function longstamp($timestamp)
   {    
    return date("l F jS Y", $timestamp);
   }
   echo('<br>');
   echo(longstamp(time()));
   echo "<hr> count:";
   test();
   echo "Bingus SLimeeeeee";
   echo " On line: ". __LINE__;
   echo $GLOBALS;
   echo __LINE__;
   echo $_SERVER;
?>