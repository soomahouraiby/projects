<?php

namespace App\Http\Controllers;




use App\Models\Reports;
use App\Models\Types_report;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function getNewReports()
    {
       // return Reports::get();
        $reports = Reports::select('report_no',
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

       return view('operationsManagement.newReports', compact('reports'));
    }

//relationship
    public function gettype_report()
    {
        //return $type = Reports::get();
        return $type = Reports::with('type_report')-> find(1);
        //return  $type -> type_report;
    }
}
