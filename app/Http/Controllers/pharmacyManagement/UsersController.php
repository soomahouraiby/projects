<?php


namespace App\Http\Controllers\pharmacyManagement;


class UsersController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addDrug(){
        return view('pharmacyManagement/addDrug');
    }

    public function newReports(){
        return view('pharmacyManagement/newReports');
    }

    public function followReports(){
        return view('pharmacyManagement/followReports');
    }

    public function follow(){
        return view('pharmacyManagement/follow');
    }

    public function detailsReport(){
        return view('pharmacyManagement/detailsReport');
    }

}
