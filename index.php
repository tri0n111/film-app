<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $arr = ["green"=>"зелёный", "red"=>"красный", "blue"=>"голубой"];
    // foreach($arr as $key => $elem){
    //     echo $key. " - ". $elem. "<br>";
    // }
    // С помощью цикла foreach и оператора if выведите в консоль те элементы массива, которые больше 3-х, но меньше 10.
    // $arr = [1, 2, 3, 4, 5, 10, 20, 30];
    // foreach($arr as $i){
    //     if($i > 3 && $i < 10){
    //         echo $i. "<br>";
    //     }
    // };
    // Найдите сумму нечетных чисел от 1 до 99.
    // $sum = 0;
    // for($i = 1; $i < 99; $i++){
    //     if($i % 2 == 1){
    //         $sum += $i;
    //     };
    // }
    // echo $sum;
    // Дан массив с числами. Найдите сумму элементов, расположенных от начала массива до первого отрицательного числа.
    // $arr = [1, 2, 3, 4, 5, -3, 1];
    // $sum = 0;
    //     foreach($arr as $i){
    //     if($i > 0){
    //         $sum += $i;
    //     }else{
    //         break;
    //     }
    // };
    // echo $sum;
    // ДЗ Определите, сколько чисел, начиная с числа 1, нужно сложить, чтобы сумма получилась больше 100.
    // $sum = 0;
    // for($i = 0; $i < 100; $i++){
    //     $sum += $i;
    //     if($sum > 100){
    //         break;
    //     };
    // };
    // echo $sum. ", ". $i;
    // Найдите сумму всех его элементов.
    // $arr = [[1, 2], [3, 4], [5, 6]];
    // $sum = 0;
    // foreach($arr as $i){
    // $sum += array_sum($i);
    // };
    // echo $sum;

    // $s = [3, 9, 1, 2, "Hello"];
    // $index = random_int(0,count($s) -1);
    // echo $s[$index];

    // $a = [4, 6, 8, 9, 1];
    // echo sort($a, $flags = SORT_REGULAR);
    // echo file_put_contents("test.txt","Поэма какая нибудь");
    // for($i = 0; $i < 150; $i++){
    // file_put_contents("./con/test". $i. ".docx", "Hello");
    // }
    // $a = file_get_contents("./qww/test.txt");
    // $f = 0;
    // for($i = 0; $i < strlen($a); $i++){
    //     if($a[$i] == "H"){
    //         $f++;
    //     }
    // }
    // echo $f;
    // Дана строка. Выведите в консоль последний символ строки.
    // $d = "qazfgh";
    // echo $d[strlen($d) -1];
    // Даны два слова. Проверьте, что первые буквы этих слов совпадают.
    // echo "qолочное"[0] == "молоко"[0];
    // Дано слово. Получите его последнюю букву. Если слово заканчивается на мягкий знак, то получите предпоследнюю букву.
    // $s = "изморось";
    // if(strlen($s) -1 == "ь"){
    //     strlen($s) -2;
    // };
    // Дано число. Выведите в консоль первую цифру числа.
    // $a = 456;
    // echo strval($a)[0];
    // Дано число. Выведите в консоль сумму первой и последней цифры этого числа.
    // $a = 456;
    // echo strval($a)[0] + strval($a)[2];

    // Дано число. Выведите количество цифр в этом числе.

    // Даны два числа. Проверьте, что первые цифры этих чисел совпадают.

    // $ch = "47785";
    // $count = strlen($ch);
    // echo $count. ", ";

    // $num1 = strval(4789);
    // $num2 = strval(4178);
    // if($num1[0] == $num2[0]){
    //     echo "true";
    // }else{
    //     echo "false";
    // }

    // Дан массив с числами. Найдите сумму квадратов элементов этого массива.

    // $mass = [2, 1, 5, 3];
    // $sum = 0;
    // echo array_sum($mass);
    // foreach ($mass as $i) {
    //     $sum += $i ** 2;
    // }

    // Дана строка: 'abcde'. Получите массив букв этой строки.
    // $str = "abcde";
    // $mass = ["a", "b"];
    // // var_dump(array_push($mass, $str));
    // var_dump($mass)

    // Заполните массив четными числами из промежутка от 1 до 100.
    // $m = [];
    // for($i = 0; $i < 100; $i++){
    //     if($i % 2 == 0){
    //     array_push($m, $i);
    //     }
    // }
    // var_dump($m);
    // $s = "Ehal greka cherez reku. Видит грека в реке рак. Сунул грека руку в реку, рак за руку греку: ЦАПППААПАПАПЦАПЦ!!!!";
    // echo substr($s, 0, 10);
    // Дан массив со строками. Оставьте в этом массиве только те строки, которые начинаются на http:// используя функцию substr(str, int, int);
    // $array = [
    //     'http://government.ru/department/113/events/',
    //     'https://cutcode.dev/roadmap',
    //     'https://www.php.net/',
    //     'https://laravel.ru/',
    //     'https://google.com',
    // ];
    // $array2 = [];
    // foreach($array as $value){
    //     if(substr($value, 0, 7) === 'http://'){
    //         $array2[] = $value;
    //     }
    // }
    // var_dump($array2);

    // Написать функцию, которая возвращает сумму 2 чисел
    // $num1 = 4;
    // $num2 = 7;
    // function sumnum(int $num1, int $num2){
    //     return $num1 + $num2;
    // }
    // echo sumnum($num1, $num2);

    // Сделайте функцию, которая параметром принимает число и выводит на экран куб этого числа.
    // $num = 4;
    // function cubenum(int $num){
    //     return $num ** 3;
    // }
    // echo cubenum($num);

    // дз  Сделайте функцию, которая параметром принимает число и проверяет, положительное это число или отрицательное. В первом случае пусть функция выводит на экран текст '+++', а во втором '---'.
    // $num = checkNumber(-1);
    // function checkNumber(int $num){
    //     if($num > 0) {
    //         echo "+++";
    //     }else{
    //         echo "---";
    //     }
    // };

    // Дан массив с числами. Найдите сумму тех элементов этого массива, которые больше нуля и меньше десяти.

    // $m = [1, 7, 9, 2, 15];
    // function sum(array $m){
    //     $sum = 0;
    //     foreach($m as $i){
    //         if($i > 0 && $i < 10){
    //             $sum += $i;
    //         }
    //     }
    //     return $sum;
    // }   
    // echo sum($m);

    // Дан массив с числами. Увеличьте каждое число из массива на 10 процентов.
    // $m = [100, 700, 900];
    // function hjhj(array $m){
    //     foreach($m as $i){
    //         $percent = ($i / 100) * 10;
    //         echo $percent + $i. "<br>";
    //     };
    // };
    // hjhj($m);

    // Заполните массив случайными числами из промежутка от 1 до 100.
    // $mass = [];
    // function ggh(array $mass){
    //     for ($i = 0; $i < 100; $i++) {
    //         array_push($mass, rand(0, 100));
    //     };
    //     var_dump($mass);
    // };
    // ggh($mass);

    // Дана некоторая строка. Найдите позицию первого нуля в строке.
    // $str = "fgg0fsdvbcbvc02";
    // function position($str){
    //     for ($i = 0; $i < strlen($str); $i++) {
    //         if ($str[$i] == "0") {
    //             return $i;
    //         };
    //     };
    // };
    // echo position($str);

    // Дан некоторый массив, например, вот такой: [1, 2, 3, 4, 5, 6] Найдите сумму первой половины элементов этого массива.

    // $array = [1, 2, 3, 4, 5, 6];
    // function polovina($array){
    //     $sum = 0;
    //     for ($i = 0; $i < count($array) / 2; $i++) {
    //         $sum += $array[$i];
    //     }
    //     return $sum;
    // }
    // echo polovina($array);

    // class Car{
    //     private $color = 'red';
    //     public static $wheel = 4;
    //     public $engine = 'v8';
    //     public function toGo(string $n){
    //         if ($n == 'left') {
    //             echo 'Повернуть на лево';
    //         } elseif ($n == 'right') {
    //             echo 'Повернуть на право';
    //         } elseif ($n == 'top') {
    //             echo 'Ехать прямо';
    //         } elseif ($n == 'bottom') {
    //             echo 'Ехать назад';
    //         }
    //     }
    // }
    // // $test = new Car();
    // echo Car::$wheel;

    // Дана некоторая строка с буквами и цифрами. Получите массив позиций всех цифр из этой строки.

    // $str = "ftg576gbh1";
    // $array = [];
    // for($i = 0; $i < strlen($str); $i++){
    //     if(intval($str[$i])){
    //         array_push($array, 5);
    //     };
    // };
    // var_dump($array);

    // function rtt(){
    //     $psp = 1;
    //     echo $psp;
    //     $psp++;
    //     if($psp < 10){
    //         rtt();
    //     }
    // }
    // rtt();
    // $a = 1; /* Глобальная область видимости */
    // function test(){
    //     return $a;
    // }
    // var_dump(test()); /* Ссылка на переменную в локальной области видимости */

    // $str = "ghvjdDHFF";
    // $per = 0;
    // for($i = 0; $i < strlen($str); $i++){
    //     if($str[$i] == strtoupper($str[$i])){
    //         $per++;
    //     };
    // };
    // echo $per;

    // $href = 'https://www.php.net/manual/ru/language.variables.scope.php';
    // echo '<a href="'. $href. '">'. 'asd '. '</a>';

    // var_dump (mail("robloxrar@gmail.com", "Загаловок", "Текст письма \n 1-ая строчка \n 2-ая строчка \n 3-ая строчка")); 

    // Сделайте форму с тремя инпутами. Пусть в эти инпуты вводятся числа. После отправки формы выведите на экран сумму этих чисел.
    // $sum = $_GET["num1"] + $_GET["num2"] + $_GET["num3"];
    // echo $sum;
    // 

    // Сделайте так, чтобы после отправки формы на странице результата сравнивался пароль из переменной и пароль из формы. После сравнения сообщите пользователю, правильный он ввел пароль или нет.
    // $passperem = "qwe123";
    // if($_GET["passform"] == $passperem){
    //     echo "true";
    // }else{
    //     echo "false";
    // }

    // С помощью формы спросите имя пользователя. После отправки формы поприветствуйте пользователя по имени, а форму уберите.
    if (empty($_GET)) {
    ?>
        <form id="form" action="./index.php" method="get">
            <input type="text" name="username" placeholder="Введите имя">
            <input type="submit">
        </form>
    <?php
    } else {
        echo "<h1 id='fff'>'Здравствуйте, ' ". $_GET["username"]. "</h1>";
    }

    // Дана строка: 'abcde' Получите массив букв этой строки.

    // $m = "abcde";
    // $array = [];
    // for($i = 0; $i < strlen($m); $i++){
    //     array_push($array, $m);
    // };
    // var_dump($array);

    // Дана некоторая строка. Найдите позицию третьего нуля в строке.
    // $str = "fgg0fs0dvbcbvc02";
    // $count = 0;
    // for($i = 0; $i < strlen($str); $i++){
    //     if($str[$i] == "0"){
    //         $count++;
    //         if($count == 3){
    //             echo $i;
    //         }
    //     }
    // };

    // Дана некоторая строка с буквами и цифрами. Получите массив позиций всех цифр из этой строки.
    // $str = "hjh591jf";
    // $arr = [];
    // for($i = 0; $i < strlen($str); $i++){
    //     if(intval($str[$i])){
    //         array_push($arr, $i);
    //     };
    // };
    // var_dump($arr);

    // Дано некоторое число. Проверьте, что цифры этого числа расположены по возрастанию.
    // $jk = 1293456;
    // $flag = true;
    // $jk = strval($jk);
    // for($i = 0; $i < strlen($jk) - 1; $i++){
    //     if($jk[$i] > $jk[$i + 1]){
    //         $flag = false;
    //     };
    // };
    // if($flag){
    //     echo "Да";
    // }else{
    //     echo "Нет";
    // };

    // Дан массив со словами. Удалите из него слова, состоящие более чем из трех символов.
    // $a = ["cat", "frog", "dragonfruit"];
    // for($i = 0; $i < count($a); $i++){
    //     if(strlen($a[$i]) > 3){
    //         unset($a[$i]);
    //         var_dump(strlen($a[$i]));
    //     };
    // // foreach ($a as $i) {
    // //     if(strlen($i) > 3){
    // //         unset($a[$i]);
    // //     }
    // }
    // var_dump($a);
    // $a = ["cat", "arrow", "dragonfruit"];
    // };

    $host = "127.0.0.1";
    $user = "myuser";
    $password = "mypassword";
    $name = "mydb";
    var_dump(mysqli_connect('localhost', 'myuser', 'mypassword'));

    ?>
    <!-- <form action="./index.php" method="get">
        <input name="passform" type="password">
        <input type="submit">
    </form> -->
    <!-- <form action="./index.php" method="get">
        <input name="num1" type="number">
        <input name="num2" type="number">
        <input name="num3" type="number">
        <input type="submit">
    </form> -->
    <script src="./script.js"></script>
</body>

</html>