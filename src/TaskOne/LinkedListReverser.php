<?php
declare(strict_types=1);

namespace DevTask\TaskOne;

class LinkedListReverser {
    public static function reverse(?Test $head): ?Test {
        $prev = null;
        $current = $head;
        while ($current !== null) {
            $next = $current->next;  // сохраняем следующий элемент
            $current->next = $prev;  // разворачиваем ссылку
            $prev = $current;        // сдвигаем указатели
            $current = $next;
        }
        return $prev; // новая голова перевёрнутого списка
    }
}
