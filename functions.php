<?php
/*Введённые числа через пробел суммируются */
function calc($args ){
      if (preg_match('/\D/', $args)) { /*Проверка только на числа */
         $number = explode(" ", $args);
         echo array_sum($number);
      }else{
         echo "Введите коррeктное значение";
      }

  /*ИЗвлечение одной крайней записи по id*/
 function getLatestPostById( $field, $table) {
   global $pdo;
   $sql = "SELECT $field FROM $table ORDER BY id DESC LIMIT 1;";
   $stmt =  $pdo->prepare($sql);
   $stmt->execute();
   return $stmt->fetchColumn();
   }
