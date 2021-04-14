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

    public function detailsReport2(){
         $r=Reports::select('report_no','authors_name')->get();
        return response($r);
    }


    public function detailsReport($report_no){

        $reports = Reports::find($report_no);  // search in given table id only
        if (!$reports)
            return redirect()->back();

        $reports = DB::table('reports')
            ->join('types_reports', 'reports.type_report_no', '=', 'types_reports.type_report_no')
            ->join('site', 'reports.sit_no', '=', 'site.site_no')
            ->join('types_reports', 'reports.type_report_no', '=', 'types_reports.type_report_no')
            ->select('reports.report_no','reports.authors_name','reports.authors_phone',
                'reports.authors_character', 'reports.authors_age','reports.report_date',
                'reports.notes_user', 'types_reports.type_report','site.pharmacy_name','site.street_name','site.sit_dec')
            ->find($report_no);
        return view('operationsManagement.detailsReport',compact('reports'));

    }


    public function getDrugMaterial(){
        return $r=Commercial_drugs::with('effective_materials')->get();
    }

    public function getShipment(){
        $r=Commercial_drugs::get();
//        $r = DB::table('commercial_drug')
//            ->join('shipments', 'commercial_drug.shipment_no', '=', 'shipments.shipment_no')
//            ->get();

        return response($r);
    }

    public function getReportType(){
        return $r=Reports::with('type_report')->find(1);
    }

    public function getReportUser(){
        return $r=Reports::with('app_user')->find(1);
    }

    public function getReportDrug(){
        return $r=Reports::with('drug')->find(1);
    }

    public function getReportSit(){
        return $r=Reports::with('sit')->find(1);
    }

    public function getReportDetails(){
        return $r=Reports::with('report_details')->find(1);
    }

    public function getReportMaterial(){
        return  $r=Reports::with('effective_material')->get();
    }

    //هذي الدالة للادخال عن طريق الواجهات
    public function create()
    {
        return view('operationsManagement.addReport');
    }

    public function store(Request  $request): \Illuminate\Http\RedirectResponse
    {
        echo "fff";
        // $file_name = $this->saveImage($request->drug_picture, 'images/Report');
        //insert
        Reports::create([
            // 'drug_picture' => $file_name,
            'pharmacy_address' => $request->input('pharmacy_address'),
            'drug_name' =>   $request->input('drug_name'),
            'material_name' =>  $request->input('material_name'),
            'district' => $request->input('district'),
            'notes_user' => $request->input('notes_user'),
            'report_date'=>Carbon::now()->toDateTimeString()
        ]);

        // return redirect()->back()->with(['success' => 'تم اضافه البلاغ بنجاح ']);
    }

    //هذي الدالة للادخال مباشره
    public function storeType()
    {
        Types_report::create([
            'type_report' => 'جديد',

        ]);
    }

}
