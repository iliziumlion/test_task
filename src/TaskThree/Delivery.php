<?php
namespace DevTask\TaskThree;

class Delivery
{
    /**
     * @param  array  $boxes
     * @param  int  $weight
     * @return int
     */
    public function getResult(array $boxes, int $weight): int
    {
        // Подсчёт частот каждого веса
        $freq = [];
        foreach ($boxes as $box) {
            $freq[$box] = ($freq[$box] ?? 0) + 1;
        }

        $trips = 0;

        // Обработка каждого уникального веса
        foreach ($freq as $boxWeight => $count) {
            $complement = $weight - $boxWeight;

            // Если для комплемента нет посылок, переходим дальше
            if (!isset($freq[$complement])) {
                continue;
            }

            if ($boxWeight < $complement) {
                // Пары (boxWeight, complement)
                $trips += min($count, $freq[$complement]);
            } elseif ($boxWeight == $complement) {
                // Если оба веса одинаковы, то можно сформировать пару из каждых двух посылок
                $trips += floor($count / 2);
            }
            // Если $boxWeight > $complement, то такая пара уже была посчитана.
        }

        return $trips;
    }
}
