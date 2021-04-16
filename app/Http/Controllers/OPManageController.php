<?php
namespace App\Http\Controllers;

use App\Models\Report_detailes;
use App\Models\Sites;
use App\Models\Commercial_drugs;
use App\Models\App_users;
use App\Models\Reports;
use App\Models\Types_report;
use App\Request\ReportsRequest;
use App\Models\Shipments;
use App\Models\Combinations;
use App\Models\Effective_materials;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

class OPManageController extends Controller
{
    public function newReports()
    {
        $reports = DB::table('reports')
            ->join('types_reports', 'reports.type_report_no', '=', 'types_reports.type_report_no')
            ->select('reports.report_no','reports.authors_name','reports.report_date', 'types_reports.type_report')
            ->get();
        return view('operationsManagement.newReports', compact('reports'));
    }

    public function detailsReport($report_no){
        //استخدمت هذا بدل find
          $reports = DB::table('reports')->select('reports.report_no')
              ->where('report_no','=', $report_no)->get();  // search in given table id only
        if (!$reports)
            return redirect()->back();

        $report = DB::table('reports')
            ->join('types_reports', 'reports.type_report_no', '=', 'types_reports.type_report_no')
            ->join('site', 'reports.site_no', '=', 'site.site_no')
            ->join('commercial_drug', 'reports.drug_no', '=', 'commercial_drug.drug_no')
            ->select('reports.authors_name','reports.authors_phone', 'reports.authors_character', 'reports.authors_age'
               ,'site.pharmacy_name','site.street_name','site.sit_dec'
               ,'reports.notes_user','reports.report_date','types_reports.type_report'
                ,'commercial_drug.drug_name')
            ->where('report_no','=', $report_no)->get();

        return view('operationsManagement.detailsReport',compact('report'));

    }

    public function transfer(Request $request){
        $add_atrr=Reports::create([
            'report_date'=>Carbon::now()->toDateTimeString(),
            'transfered_party' =>$request->input('transfered_party'),
            'transfer_date'=>Carbon::now()->toDateTimeString(),
            ]);
        // return redirect()->back()->with(['success' => 'تم اضافه البلاغ بنجاح ']);
    }

    public function getDrug(){

        //$r=Commercial_drugs::with('effective_materials')->get();
        //$r = DB::table('commercial_drug')->get();
        $r = DB::table('commercial_drug')
            ->join('combination', 'Commercial_drug.drug_no', '=', 'combination.drug_no')
            ->join('effective_material', 'combination.material_no', '=', 'effective_material.material_no')
            ->get();
        return response($r);
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
    public  function gg(){
        $c=Commercial_drugs::with('shipment')->get();
        return$r=Reports::with($c)->first();
    }

    //هذي الدالة للادخال عن طريق الواجهات
//    public function create()
//    {
//        return view('operationsManagement.addReport');
//    }
//
//    public function store(Request  $request): \Illuminate\Http\RedirectResponse
//    {
//        echo "fff";
//        // $file_name = $this->saveImage($request->drug_picture, 'images/Report');
//        //insert
//        Reports::create([
//            // 'drug_picture' => $file_name,
//            'pharmacy_address' => $request->input('pharmacy_address'),
//            'drug_name' =>   $request->input('drug_name'),
//            'material_name' =>  $request->input('material_name'),
//            'district' => $request->input('district'),
//            'notes_user' => $request->input('notes_user'),
//            'report_date'=>Carbon::now()->toDateTimeString(),
//              'transfered_party' =>$request->input('transfered_party'),
//              'transfer_date'=>Carbon::now()->toDateTimeString(),
//        ]);
//
//        // return redirect()->back()->with(['success' => 'تم اضافه البلاغ بنجاح ']);
//    }

    //هذي الدالة للادخال مباشره
    public function storeType()
    {
        Types_report::create([
            'type_report' => 'جديد',

        ]);
    }

}
