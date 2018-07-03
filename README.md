# Шпаргалка

Подключение библиотеки RedBean
```php
require "libs/rb-mysql.php";
```
Установка соединения с БД
```php
R::setup('mysql:host=localhost;dbname=school', 'root', '');
```

Заморозка схемы БД
```php
R::freeze(TRUE);
```

Создание записи в  таблице courses
```php
$course = R::dispense('courses');
```

Вставка значений в поля
```php
$course->title = "Курс по React";
$course->tuts = 10;
$course->homeworks = 8;
$course->level = "Для новичков";
$course->price = 100;
```

Сохранение данных, id создается автоматически
```php
R::store($course);
```

Поиск всех записей из таблицы
```php
$courses = R::find('courses');
```

Получение одной записи из табилцы по id 
```php
$course = R::load('courses', 4);
```

Изменение одной записи в табилцу
```php
$course = R::load('courses', 4);
$course->title = "React 2st level";
$course->tuts = 14;
$course->price = 80;
$course->students = 20;
R::store($course);
```

Удаление записи из таблицы по id
```php
$course = R::load('courses', 3);
R::trash($course);
```
