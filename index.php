// 1. Найти максимальное число из трех. Определить какое из трех введенных пользователем чисел максимальное и вывести его на экран.

// $s_1 = rand(-1000, 1000);
// $s_2 = rand(-1000, 1000);
// $s_3 = rand(-1000, 1000);

// echo $s_1.' '.$s_2.' '.$s_3;
// echo "<br>";

// if ($s_1 == $s_2 || $s_1 == $s_3 || $s_2 == $s_3){
//     echo "Присутствуют одинаковые значения";
// } elseif ($s_1 > $s_2 && $s_1 > $s_3){
//     echo $s_1;
// } elseif ($s_2 > $s_3){
//     echo $s_2;
// } else {
//     echo $s_3;
// };

// 2. Найти среднее число из трех. Среди трех чисел найти среднее. Если среди чисел есть равные, вывести сообщение "Ошибка".

// $s_1 = rand(-1000, 1000);
// $s_2 = rand(-1000, 1000);
// $s_3 = rand(-1000, 1000);

// echo $s_1.' '.$s_2.' '.$s_3;
// echo "<br>";

// if ($s_1 == $s_2 || $s_1 == $s_3 || $s_2 == $s_3){
//     echo "Ошибка";
// } elseif ((($s_1 > $s_2) && ($s_1 < $s_3)) || (($s_1 < $s_2) && ($s_1 > $s_3))){ 
//     echo $s_1;
// } elseif ((($s_2 > $s_1) && ($s_2 < $s_3)) || (($s_2 < $s_1) && ($s_2 > $s_3))){
//     echo $s_2;
// } else{
//     echo $s_3;
// };

// 3. Определение четверти на координатной плоскости. Требуется написать программу, определяющую по координатам точки, в какой четверти она находится. Координаты точки вводятся с клавиатуры.

// $x = rand(-1000, 1000);
// $y = rand(-1000, 1000);
// echo $x.' '.$y;
// echo "<br>";

// if ($x == 0){
//     echo "Точка расположена на оси Ох";
// } elseif ($y == 0) {
//     echo "Точка расположена на оси Оy";
// } elseif ($x > 0 && $y > 0){
//     echo "Точка расположена в I четверти";
// } elseif ($x < 0 && $y > 0){
//     echo "Точка расположена во II четверти";
// } elseif ($x < 0 && $y < 0){
//     echo "Точка расположена в III четверти";
// } else {
//     echo "Точка расположена в IV четверти";
// };
