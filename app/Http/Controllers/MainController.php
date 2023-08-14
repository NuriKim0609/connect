<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController

{
    public function MainController(){

        $clientController = new ClientController();
        $clients = $clientController->get_client();

        $carSelectController = new CarSelectController();
        $selectedCar = $carSelectController->car_select();

        $TripController = new TripController();
        $selectedTrip = $TripController->trip_select();
        
        $MapController = new MapController();
        $selectedMap = $MapController->getNonZeroPositions();

        
        
        $car_list = [
            'car_id' => $selectedCar['car_id'],
            'VRN' => $selectedCar['VRN'],
            'car_status' => $selectedCar['car_status'],
            'driver_name' => $selectedCar['driver_name'],
        ];
        
        

        return view('tbox', [
            'client' => $clients, 
            'car_list' => $car_list,
            'trip'=>$selectedTrip,
            'map' => $selectedMap
        ]); //ajax가 있어야 돌아갈 수 있음.
    }
    //use AuthorizesRequests, ValidatesRequests;
}
?>