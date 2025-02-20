<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use DevTask\TaskOne\Test;
use DevTask\TaskOne\LinkedListReverser;

// =====================================================================================================================
echo "<h2>Task 1</h2>";

$a = new Test();
$b = new Test();
$c = new Test();

$a->next = $b;
$b->next = $c;
$c->next = null;

$ob1 = LinkedListReverser::reverse($a);
echo '<pre>';
    var_dump($ob1);
echo '</pre>';

// =====================================================================================================================

echo "<h2>Task 3</h2>";

use DevTask\TaskThree\Delivery;
/*$boxes = [1, 2, 1, 5, 1, 3, 5, 2, 5, 5];
$weight = 6;*/

$boxes = [2,4,3,6,1];
$weight = 5;

echo (new Delivery)->getResult($boxes, $weight);

