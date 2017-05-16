<?php
# Integers 
$int_var = 12345;
$another_int = -12345 + 12345;

# Doubles
$many = 2.2888800;
$many_2 = 2.2111200;

# Boolean
if (TRUE)
   print("This will always print<br>");

else
   print("This will never print<br>");
#If the value is a number, it is false if exactly equal to zero and true otherwise.

#If the value is a string, it is false if the string is empty (has zero characters) or is the string "0", and is true otherwise.

#Values of type NULL are always false.

#If the value is an array, it is false if it contains no other values, and it is true otherwise. For an object, containing a value means having a member variable that has been assigned a value.

#Valid resources are true (although some functions that return resources when they are successful will return FALSE when unsuccessful).

#Don't use double as Booleans.

# NULL

$my_var = null;

# Strings

$string_1 = "This is a string in double quotes";
$string_2 = 'This is a somewhat longer, singly quoted string';
$string_39 = "This string has thirty-nine characters";
$string_0 = ""; // a string with zero characters

 $variable = "name";
 $literally = 'My $variable will not print!'; // ' '
   
 print($literally);
 print "<br>";
   
 $literally = "My $variable will print!"; // " " 
 print($literally);
 # ork with " " Onley 
 /*
\n is replaced by the newline character
\r is replaced by the carriage-return character
\t is replaced by the tab character
\$ is replaced by the dollar sign itself ($)
\" is replaced by a single double-quote (")
\\ is replaced by a single backslash (\)
 */

#     Variable Scope >>> 1.Local variables  2.Function parameters  3.Global variables  4.Static variables

# Local variables >>> Dont work with Function >>> $

   print('Local variables'."\n");
   $x = 4;
   
   function assignx () { 
      $x = 0;
      print "\$x inside function is $x. <br />";
   }
   
   assignx();
   print "\$x outside of function is $x. <br />";


# Function parameters >>> $

    print('Function parameters'."\n");
   // multiply a value by 10 and return it to the caller
   function multiply ($value) {
      $value = $value * 10;
      return $value;
   }
   
   $retval = multiply (10);
   Print "Return value is $retval\n";


# Global variables >>> GLOBAL $

   print('Global variables'."\n");
   $somevar = 15;
   
   function addit() {
      GLOBAL $somevar;
      $somevar++;
      
      print "Somevar is $somevar";
   }
   
   addit();


# 


   print('Static variables'."\n");
   function keep_track() {
      STATIC $count = 0;
      $count++;
      print "$count\n";

   }
   
   keep_track();
   keep_track();
   keep_track();

















?>