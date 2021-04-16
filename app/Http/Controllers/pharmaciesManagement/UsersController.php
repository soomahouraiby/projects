<?php


namespace App\Http\Controllers\pharmaciesManagement;


class UsersController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addDrug(){
        return view('pharmaciesManagement/addDrug');
    }

    public function newReports(){
        return view('pharmaciesManagement/newReports');
    }

    public function followReports(){
        return view('pharmaciesManagement/followReports');
    }

    public function follow(){
        return view('pharmaciesManagement/follow');
    }

    public function detailsReport(){
        return view('pharmaciesManagement/detailsReport');
    }

}
