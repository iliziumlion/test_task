# Test task
## Задача №1
- /src/TaskOne/Test.php 
- /index.php

## Задача №2
- /src/TaskTwo/Order.php
- /src/TaskTwo/reception.php

## Задача №3
- /src/TaskThree/Delivery.php
- /index.php

### Задача №1

Напишите функцию, которая развернёт список.
Последний элемент должен стать первым, а первый - последним.
`$c→next` должен содержать `$b` и так далее...

```php
class test {
    public $next;
}
```
```php
$a = new test();
$b = new test();
$c = new test();
$a->next = $b;
$b->next = $c;
$c->next = null;
```

Пример результата:
```php
function reverse($a) {
    // какой-то код
}
$ob1 = reverse($a);
var_dump($ob1);
```

### Задача №2

Даны две модели Order и Manager
```php
class Order extends Model
{
    public function manager()
    {
        return $this->hasOne('App\Manager');
    }
}

class Manager extends Model
{
}
```
Каждый Order имеет `manager_id`. Manager имеет `id`, `firstName`, `lastName`
Необходимо вывести 50 заказов (Order) + fullName менеджера с минимальным кол-вом запросов к бд.
Дополните класс Order.
Реализовать нужно без использования join.

### Задача №3
Даны веса посылок `$boxes` и вес, который может увезти курьер `$weight`.
Курьер должен возить по 2 посылки, которые вместе по весу будут строго равны `$weight`.
Необходимо найти максимальное количество рейсов, которые курьер сможет сделать с учетом условий.
```php
// первые входные данные
$boxes = [1, 2, 1, 5, 1, 3, 5, 2, 5, 5];
$weight = 6;
// вторые входные данные
$boxes = [2,4,3,6,1];
$weight = 5;

public function getResult(array $boxes, int $weight): int
{
    // какой-то код
}
```
# test_task
