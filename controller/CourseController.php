<?php



class CourseController
{
    public function getCourses($date){
        $course = new CourseModel();
        $view = new CourseView();

        $courses = $course->getCourse($date);

        $view->render($courses);
    }
}