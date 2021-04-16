<?php
namespace App\Http\Controllers;

use App\Models\Report_detailes;
use App\Models\Reports;
use App\Models\Types_report;
use Illuminate\Http\Request;

class OPManageController extends Controller
{

    public function newReports()
    {
       // $q="s";
       // return Reports::get();
        $reports = Reports::select('report_no', 'presented_report', 'report_date', 'type_report_no'
            ) ->get();

//->with(['type_report'=>function ($t){$t->select('type_report');}])
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
           //return response()->json($reports);
       return view('operationsManagement.newReports', compact('reports'));
    }


    public function type(){
       return $r=Reports::with('type_report')->get();
    }

    public function user(){
        return $r=\App\Models\Reports::with('app_user')->find(1);
    }

    public function material(){
        return  $r=\App\Models\Reports::with('effective_material')->get();
    }

    public function drug(){
        return $r=\App\Models\Reports::with('drug')->find(1);
    }

//    public function detailsReport(){
//
//       //  $f=\App\Models\Reports::with('app_user')->find(1);
//         return $r=\App\Models\Reports::select('report_date', 'notes_user', 'drug_picture')
//              ->with(['type_report'=>function ($t){$t->select('type_report');}
//              ,'app_user'=>function($a){$a->select('app_user_name','app_user_phone','age','number_of_report');}
//                  ,'drug'=>function ($d){$d->select('drug_name','drug_picture');}
//                  ,'drug.effective_material'=>function($e){$e->select('material_name');}
//                  ])->find(1);
////,'effective_material'=>function($e){$e->select('material_name');}
//            return response()->json($r,$f);
//    }

    public function detailsReport(){


        return $r=\App\Models\Reports::
            with(['type_report:type_report','app_user:app_user_name','drug'])->get();

    }

    public function addReport(){
        return view('operationsManagement.addReport');
    }
}
