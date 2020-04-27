<?php
include 'model/CourseModel.php';
include 'view/CourseView.php';
include 'controller/CourseController.php';
include 'tmp/layouts/app.php';

if($_GET['action'] == 'getCourse'){             //Обработка запроса
    $controller = new CourseController();
    $date = $_GET['date'];
    $controller->getCourses($date);
}