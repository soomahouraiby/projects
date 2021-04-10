<?php
namespace App\Http\Controllers\operationsManagement;

use App\Http\Controllers\Controller;
use App\Models\Reports;
use App\Models\Types_report;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function newReports(){

        // return Reports::get();
        $report = Reports::select('report_no',
            'presented_report',
            'report_date',
            'type_report_no' )->get(); // return collection

//         if (isset($reports) && $reports->count() > 0) {
//            foreach ($reports as $report) {
//
//                 if($report->type_report_no=$report->type_report_no == 1)   {
//                     $report->type_report_no == 'مهرب';
//                 }
//                 elseif  ($report->type_report_no=$report->type_report_no == 2 ){
//                     $report->type_report_no =='مسحوب';
//                 }
//                 elseif  ($report->type_report_no=$report->type_report_no == 3 ){
//                     $report->type_report_no == 'غير مطابق';
//                 }
//                 else {
//                     $report->type_report_no == 'غير معروف';
//                 }
//
//            }
//        }

        return view('operationsManagement/newReports', compact('report'));
    }

//relationship
    public function gettype_report()
    {
        //return $type = Reports::get();
        return $type = Reports::with('type_report')-> find(1);
        //return  $type -> type_report;

    }

    public function addReport(){
        return view('operationsManagement/addReport');
    }

    public function followReports(){
        return view('operationsManagement/followReports');
    }

    public function managementReports(){
        return view('operationsManagement/managementReports');
    }

    public function detailsReport(){
        return view('operationsManagement/detailsReport');
    }

    public function detailsFollow(){
        return view('operationsManagement/detailsFollow');
    }
}
