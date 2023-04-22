<!-- <?php

   $db_name = 'mysql:host=localhost;dbname=course_db';
   $user_name = 'root';
   $user_password = '';

   $conn = new PDO($db_name, $user_name, $user_password);  // Obj of pdo class(dbname,)

   function unique_id() {
      $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $rand = array();   //initialize empty array
      $length = strlen($str) - 1;
      for ($i = 0; $i < 20; $i++) {
          $n = mt_rand(0, $length);  //mt_rand() function is used to generate a random number between 0 and the $length variable (inclusive), which is used as an index to retrieve a character from the $str string. The character is then added to the $rand array.
          $rand[] = $str[$n];
      }
      return implode($rand);  //join the elements of the $rand array together into a string
   }
   
//on calling 'unique_id()' function it genrates a random string of 20 alphanumeric chars
//and can be useful for generating passwords

/*1. connection
  2. run SQL query
      $conn -> query(SQL Query)
      
   3. close connection
   $conn = null;*/
?> --> 
