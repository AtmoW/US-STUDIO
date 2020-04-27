<?php


class CourseView
{
    public function render($array)
    {
        $courses = $array;
        require(dirname(__DIR__).'/tmp/course.php');
    }
}