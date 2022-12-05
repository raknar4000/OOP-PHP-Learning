<?php

class Calendar
{
    // Regular properties
    // Value should vary between objects
    public $name;

    // Static properties
    // Value can change but remains same (static) for class and instances
    public static $daysInFebruary = 28;

    public static $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    // Class properties
    // Set values associated with this class
    public const MONTHS_IN_YEAR = 12;

    public function getMonthsInYear()
    {
        return self::MONTHS_IN_YEAR;
    }


}

$calendar = new Calendar();
$calendar2 = new Calendar();

$calendar->name = 'Year Planner';

print Calendar::$count . PHP_EOL;
