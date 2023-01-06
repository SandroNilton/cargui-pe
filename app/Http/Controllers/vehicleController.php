<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vehicleController extends Controller
{
    //

    public function index(){
        return view('vehicle.index');
    }

    public function create(){
        return view('vehicle.create');
    }

    public function store(){
        return 'Aqui se procesa el vechicle';
    }
    
    public function show($vehicle){
        return view('vehicle.show', compact('vehicle'));
    }

    public function edit($vehicle){
        return view('vehicle.edit');
    }

    public function update($vehicle){
        return "Aqui se actualizara el vehicle $vehicle";
    }

    public function destroy($vehicle){
        return "Aqui se eliminara el vehicle $vehicle";
    }
}
