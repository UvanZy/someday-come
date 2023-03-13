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
      
      
      
      
    /*генерируем уникальный токен*/
      
 function generateUniqueIdentifier($length = 10) {
  $bytes = openssl_random_pseudo_bytes($length);
  return bin2hex($bytes);
}
$id = generateUniqueIdentifier(); // генерируем уникальный идентификатор
echo $id; // выводим идентификатор на экран
      
      
      
      
      
      
 /*Автозагрузка классов*/
      
      // Определяем автозагрузчик PSR-4
spl_autoload_register(function ($class) {
    // Находимся в глобальном namespace, поэтому для доступа к корневой папке нужен полный путь
    $path = __DIR__ . '/class/';
    
    // Вырезаем из полного имени класса namespace и преобразуем разделители к формату файловой системы
    $classPath = str_replace('\\', '/', $class) . '.php';

    // Формируем полный путь до файла с классом
    $file = $path . $classPath;

    // Проверяем существование файла и загружаем его
    if (file_exists($file)) {
        require_once $file;
    }
});
