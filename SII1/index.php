<?php
echo "Начинается работа программы.\nОтветы на вопросы - 1(ДА) или 0(НЕТ).\n";

$str_results = file_get_contents('results.txt');
$results = explode("\n", $str_results);
global $count;
for ($i = 0; $i < count($results); $i++)
{
    $count[$i] = floatval(0.0);
}

$finalResult = question1($results, $count);

echo "Оружие для самообороны для вас - " . $finalResult[0] . "\n";

echo "Вероятности:\n";

for ($i = 0; $i < count($results); $i++)
{
    $str_tmp = $results[$i];
    $str_print = $str_tmp ."\n";
    echo $str_print;
    echo $finalResult[1][$i]/20 . "\n";
}




function question1($results, $count)
{
    echo "вам нужно оружие для самообороны ?\n";
    echo "Ввод:";
    $answer = readline();
	if ($answer == 1) {
        for ($i = 1; $i < 21; $i++) {
            $count[$i]++;
        }
		return question2($results, $count);
	}
    else {
        $count[0]++;
        return array($results[0], $count);
	}
}

function question2($results, $count)
{
    echo "для дома ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        for ($i = 7; $i < 21; $i++) {
            $count[$i]++;
        }
        return question8($results, $count);
    }
    else {
        for ($i = 1; $i < 7; $i++) {
            $count[$i]++;
        }
        return question3($results, $count);
    }
}

function question3($results, $count)
{
    echo "от собак ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        $count[1]++;
        return array($results[1], $count);
    }
    else {
        for ($i = 2; $i < 7; $i++) {
            $count[$i]++;
        }
        return question4($results, $count);
    }
}

function question4($results, $count)
{
    echo "дистанция ближняя ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        $count[2]++;
        return array($results[2], $count);
    }
    else {
        for ($i = 3; $i < 7; $i++) {
            $count[$i]++;
        }
        return question5($results, $count);
    }
}

function question5($results, $count)
{
    echo "хотите напугать ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        $count[3]++;
        return array($results[3], $count);
    }
    else {
        for ($i = 4; $i < 7; $i++) {
            $count[$i]++;
        }
        return question6($results, $count);
    }
}

function question6($results, $count)
{
    echo "хотите нанести серьёзный вред ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        $count[4]++;
        return array($results[4], $count);
    }
    else {
        for ($i = 5; $i < 7; $i++) {
            $count[$i]++;
        }
        return question7($results, $count);
    }
}

function question7($results, $count)
{
    echo "для замкнутого помещения ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        $count[5]++;
        return array($results[5], $count);
    }
    else {
        $count[6]++;
        return array($results[6], $count);
    }
}

function question8($results, $count)
{
    echo "не боитесь взрывоопасного оружия?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        $count[7]++;
        return array($results[7], $count);
    }
    else {
        for ($i = 8; $i < 21; $i++) {
            $count[$i]++;
        }
        return question9($results, $count);
    }
}

function question9($results, $count)
{
    echo "есть минимальные инженерные навыки и смекалка?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        $count[8]++;
        return array($results[8], $count);
    }
    else {
        for ($i = 9; $i < 21; $i++) {
            $count[$i]++;
        }
        return question10($results, $count);
    }
}

function question10($results, $count)
{
    echo "есть разрешение на оружие ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        for ($i = 9; $i < 13; $i++) {
            $count[$i]++;
        }
        return question11($results, $count);
    }
    else {
        for ($i = 13; $i < 21; $i++) {
            $count[$i]++;
        }
        return question14($results, $count);
    }
}

function question11($results, $count)
{
    echo "стрельба на дальние расстояния?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        for ($i = 9; $i < 11; $i++) {
            $count[$i]++;
        }
        return question12($results, $count);
    }
    else {
        for ($i = 11; $i < 13; $i++) {
            $count[$i]++;
        }
        return question13($results, $count);
    }
}

function question12($results, $count)
{
    echo "оружие нарезное ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        $count[9]++;
        return array($results[9], $count);
    }
    else {
        $count[10]++;
        return array($results[10], $count);
    }
}

function question13($results, $count)
{
    echo "сильное останавливающее действие ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        $count[11]++;
        return array($results[11], $count);
    }
    else {
        $count[12]++;
        return array($results[12], $count);
    }
}

function question14($results, $count)
{
    echo "для спорта ?\n";
    echo "Ввод:";
    $answer = readline("");
    if ($answer == 1) {
        for ($i = 13; $i < 16; $i++) {
            $count[$i]++;
        }
        return question15($results, $count);
    }
    else {
        for ($i = 16; $i < 21; $i++) {
            $count[$i]++;
        }
        return question17($results, $count);
    }
}

function question15($results, $count)
{
    echo "для спорта ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        $count[13]++;
        return array($results[13], $count);
    }
    else {
        for ($i = 14; $i < 16; $i++) {
            $count[$i]++;
        }
        return question16($results, $count);
    }
}

function question16($results, $count)
{
    echo "требует силы ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        $count[14]++;
        return array($results[14], $count);
    }
    else {
        $count[15]++;
        return array($results[15], $count);
    }
}

function question17($results, $count)
{
    echo "холодно-клинковое ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        for ($i = 17; $i < 21; $i++) {
            $count[$i]++;
        }
        return question18($results, $count);
    }
    else {
        $count[16]++;
        return array($results[16], $count);
    }
}

function question18($results, $count)
{
    echo "длинное ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        $count[17]++;
        return array($results[17], $count);
    }
    else {
        for ($i = 18; $i < 21; $i++) {
            $count[$i]++;
        }
        return question19($results, $count);

    }
}

function question19($results, $count)
{
    echo "короткое ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        $count[18]++;
        return array($results[18], $count);
    }
    else {
        for ($i = 19; $i < 21; $i++) {
            $count[$i]++;
        }
        return question20($results, $count);
    }
}

function question20($results, $count)
{
    echo "дробящее ?\n";
    echo "Ввод:";
    $answer = readline();
    if ($answer == 1) {
        $count[19]++;
        return array($results[19], $count);
    }
    else {
        $count[20]++;
        return array($results[20], $count);
    }
}