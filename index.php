<?php 

require "db.php";

// Создание новых записей
/*
$course = R::dispense('courses');
$course->title = "Курс по React";
$course->tuts = 10;
$course->homeworks = 8;
$course->level = "Для новичков";
$course->price = 100;
R::store($course);
*/
// ===========================================



// Получение всех записей
/*
$courses = R::find('courses');
// print_r($courses);
foreach ($courses as $course){
	// print_r($course);
	echo "ID: " . $course->id . "<br>";
	echo "Title: " . $course->title . "<br>";
	echo "Tuts: " . $course->tuts . "<br>";
	echo "Level: " . $course->level . "<br>";
	echo "Price: " . $course->price . "<br>";
	echo "<hr>";
}
*/
// ===========================================



// Получение одного курса
/*
$course = R::load('courses', 4);
// print_r($course);
echo "ID: " . $course->id . "<br>";
echo "Title: " . $course->title . "<br>";
echo "Tuts: " . $course->tuts . "<br>";
echo "Level: " . $course->level . "<br>";
echo "Price: " . $course->price . "<br>";
*/
// ===========================================




// Изменение данных в базе
/*
$course = R::load('courses', 4);

$course->title = "React 2st level";
$course->tuts = 14;
$course->price = 80;
$course->students = 20;
$course->img = "<img/src/react.png>";
R::store($course);
*/
// ===========================================




// Удаление записи из БД

$course = R::load('courses', 3);
R::trash($course);



?>