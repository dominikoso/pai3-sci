<?php
namespace App;

class ICSEventFactory {

    private $event;

    public function eventBuilder($row){
        $event = new \Eluceo\iCal\Component\Event();
        $event
            ->setDtStart(new \DateTime($row['Datapublikacji']))
            ->setDtEnd(new \DateTime($row['Terminoddania']))
            ->setNoTime(true)
            ->setSummary($row['Opis']);
        return $event;
    }


}

