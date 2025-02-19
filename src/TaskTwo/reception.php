<?php

/**
 * Получение
 */

use DevTask\TaskTwo\Order;

$orders = Order::with('manager')->limit(50)->get();

foreach ($orders as $order) {
    echo "Заказ #" . $order->id . " - Менеджер: " . $order->manager_full_name;
}
