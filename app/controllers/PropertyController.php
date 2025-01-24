<?php
namespace app\controllers;

use Flight;
use app\models\PropertyModel;
class PropertyController
{
    public function getAllProperity()
    {
        $properties = Flight::PropertyModel()->getAll();
        Flight::render('list-housing', ['properties' => $properties]);
    }
}