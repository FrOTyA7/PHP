<?
/*
if (condition)
   code to be executed if condition is true;
else
   code to be executed if condition is false;
*/
# Ex
<html>
   <body>
   
      <?php
         $d = date("D");
         
         if ($d == "Fri")
            echo "Have a nice weekend!"; 
         
         else
            echo "Have a nice day!"; 
      ?>
   
   </body>
</html>
<?