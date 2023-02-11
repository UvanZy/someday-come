<?php
/*Введённые числа через пробел суммируются */
function calc($args ){
      if (preg_match('/\D/', $args)) { /*Проверка только на числа */
         $number = explode(" ", $args);
         echo array_sum($number);
      }else{
         echo "Введите коррeктное значение";
      }
