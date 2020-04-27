<?php


class CourseModel
{

    public function getCourse($date)
    {
        $valutesFind = ['USD', 'EUR'];

        $SelectDate = htmlspecialchars($date);
        $date1 = date('d/m/Y', strtotime($SelectDate));                     //Отформатированная дата, заданная пользователем
        $date2 = date('d/m/Y', strtotime($SelectDate) - 86400);   //Предыдущий день

        $dates = [$date2, $date1];

        $result = [];

        foreach ($dates as $date) {
            $xml = new DOMDocument();
            $url = 'http://www.cbr.ru/scripts/XML_daily.asp?date_req=' . $date;        //xml с курсами всех валют
            // получаем xml с курсами всех валют
            if ($xml->load($url)) {
                $root = $xml->documentElement;
                $valutes = $root->getElementsByTagName('Valute');

                foreach ($valutes as $valute) {
                    // получаем код валюты
                    $code = $valute->getElementsByTagName('CharCode')->item(0)->nodeValue;
                    if (in_array($code, $valutesFind)) {
                        $course = $valute->getElementsByTagName('Value')->item(0)->nodeValue;
                        $result[$date][$code] = $course;                        //Записываем данные в массив Дата => Курс

                    }
                }
            }
        }
        return $result;
    }

}