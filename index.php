<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use DevTask\TaskOne\Test;

echo "<h2>Task 1</h2>";

/**
 * Разворачивает односвязный список.
 *
 * @param Test $head Первый узел списка.
 * @return Test|null Новый первый узел (бывший последний).
 */
function reverse(Test $head): ?Test {
    $prev = null;
    $current = $head;

    while ($current !== null) {
        $next = $current->next;
        $current->next = $prev;
        $prev = $current;
        $current = $next;
    }

    return $prev;
}

// Пример использования:
$a = new Test();
$b = new Test();
$c = new Test();

$a->next = $b;
$b->next = $c;
$c->next = null;

$ob1 = reverse($a);
echo '<pre>';
    var_dump($ob1);
echo '</pre>';

echo "<h2>Task 3</h2>";

use DevTask\TaskThree\Delivery;
/*$boxes = [1, 2, 1, 5, 1, 3, 5, 2, 5, 5];
$weight = 6;*/

$boxes = [2,4,3,6,1];
$weight = 5;

echo (new Delivery)->getResult($boxes, $weight);

