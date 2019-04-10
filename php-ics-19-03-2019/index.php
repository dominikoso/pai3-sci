<?php
    require 'vendor/autoload.php';

    use App\ICSCalendarFactory;

    $calendarFactory = new ICSCalendarFactory();
    $calendar = $calendarFactory->calendarBuilder();
    header('Content-Type: text/calendar; charset=utf-8');
    header('Content-Disposition: attachment; filename="cal.ics"');
    echo $calendar->render();

    