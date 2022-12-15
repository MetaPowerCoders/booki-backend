<?php

class BookingDTO {
    public $id;
    public $username;
    public $event_id;
    public $date;
    public $total_attendees_percentage;

    function __construct($id, $username, $event_id, $date, $total_attendees_percentage)
    {
        $this->id = $id;
        $this->username = $username;
        $this->event_id = $event_id;
        $this->date = $date;
        $this->total_attendees_percentage = $total_attendees_percentage;
    }

    function get_id(){
        return $this->id;
    }

    function set_id($id){
        $this->id = $id;
    }

    function get_username(){
        return $this->username;
    }

    function set_username($username){
        $this->username = $username;
    }

    function get_event_id(){
        return $this->event_id;
    }

    function set_event_id($event_id){
        $this->event_id = $event_id;
    }

    function get_date(){
        return $this->date;
    }

    function set_date($date){
        $this->date = $date;
    }

    function get_total_attendees_percentage(){
        return $this->total_attendees_percentage;
    }

    function set_total_attendees_percentage($total, $total_attendees_percentage){
        $this->total_attendees_percentage = ($total/$total_attendees_percentage)*100;
    }

}
