<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function addReport(){
        return view('operationsManagement/addReport');
    }

    public function detailsFollow(){
        return view('operationsManagement/detailsFollow');
    }

    public function detailsReport(){
        return view('operationsManagement/detailsReport');
    }

    public function followReports(){
        return view('operationsManagement/followReports');
    }

    public function managementReports(){
        return view('operationsManagement/managementReports');
    }

    public function newReports(){
        return view('operationsManagement/newReports');
    }
}
