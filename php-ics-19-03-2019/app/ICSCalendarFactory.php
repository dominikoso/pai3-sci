<?php

namespace App;

use SQLiteConnction;

class ICSCalendarFactory{

    private $calendar;
    private $eventFactory;

    public function calendarBuilder($class = '3c'){
        $calendar = new \Eluceo\iCal\Component\Calendar('dominikoso.me');
        $eventFactory = new ICSEventFactory();
        $pdo = (new SQLiteConnection())->connect();
        $stmt = $pdo->prepare("SELECT * FROM 'Terminarz' WHERE Klasa = :class");
        $stmt->bindParam(':class', $class, \PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        foreach($rows as $row){
          $calendar->addComponent($eventFactory->eventBuilder($row));
        }
        
        return $calendar;
    }

}