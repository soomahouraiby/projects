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
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class PHCManageController extends Controller
{
    //عشان عرض البلاغات الوارده
    public function newReports()
    {
        $reports = DB::table('reports')
            ->join('types_reports', 'reports.type_report_no', '=', 'types_reports.type_report_no')
            ->join('app_user', 'reports.app_user_no', '=', 'app_user.app_user_no')
            ->select('reports.report_no','app_user.app_user_name'
                , 'reports.report_date', 'types_reports.type_report')
            ->where('state','=',0)
            ->where('type_report','!=','مهرب')
            ->where('type_report','!=','مسحوب')
            ->where('type_report','!=','غير مطابق')
            ->where('type_report','!=','مستثناء')
            ->get();
        //return response($reports);
        return view('pharmacovigilanceManagement.newReports', compact('reports'));
    }

    // عشان اللفلترة حق البلاغات الوارده للاعراض الجانبية
    public function newEffectReports()
    {
        $reports = DB::table('reports')
            ->join('types_reports', 'reports.type_report_no', '=', 'types_reports.type_report_no')
            ->join('app_user', 'reports.app_user_no', '=', 'app_user.app_user_no')
            ->select('reports.report_no','app_user.app_user_name'
                , 'reports.report_date', 'types_reports.type_report')
            ->where('state','=',0)
            ->where('type_report','=','اعراض جانبية')
            ->get();
        return view('pharmacovigilanceManagement.newReports', compact('reports'));
    }
//عشان اللفلترة حق البلاغات الوارده للجودة
    public function newQualityReports()
    {
        $reports = DB::table('reports')
            ->join('types_reports', 'reports.type_report_no', '=', 'types_reports.type_report_no')
            ->join('app_user', 'reports.app_user_no', '=', 'app_user.app_user_no')
            ->select('reports.report_no','app_user.app_user_name'
                , 'reports.report_date', 'types_reports.type_report')
            ->where('state','=',0)
            ->where('type_report','=','جودة')
            ->get();
        return view('pharmacovigilanceManagement.newReports', compact('reports'));
    }

//عشان تفاصيل كل البلاغات الجودة
    public function detailsReport($report_no){
        $reports = DB::table('reports')->select('reports.report_no')
            ->where('report_no','=', $report_no)->get();  // search in given table id only
        if (!$reports)
            return redirect()->back();

        $report = DB::table('reports')
            ->join('types_reports', 'reports.type_report_no', '=', 'types_reports.type_report_no')
            ->join('app_user', 'reports.app_user_no', '=', 'app_user.app_user_no')
            ->join('site', 'reports.site_no', '=', 'site.site_no')
            ->join('commercial_drug', 'reports.drug_no', '=', 'commercial_drug.drug_no')
            ->join('batch_number', 'commercial_drug.drug_no', '=', 'batch_number.drug_no')
            ->join('combination', 'combination.drug_no', '=','commercial_drug.drug_no')
            ->join('effective_material', 'combination.material_no', '=', 'effective_material.material_no')
            ->join('companies', 'commercial_drug.company_no', '=', 'companies.company_no')
            ->select('reports.report_no', 'app_user.app_user_name', 'app_user.app_user_phone',
                'app_user.adjective', 'app_user.age','app_user.app_user_email', 'site.pharmacy_name',
                'site.street_name', 'reports.notes_user', 'reports.report_date',
                'types_reports.type_report', 'reports.drug_picture', 'commercial_drug.drug_name',
                'commercial_drug.drug_no',
                'commercial_drug.drug_form','commercial_drug.side_effects','batch_number.batch_num'
                ,'effective_material.material_name','companies.company_name')
            ->where('report_no', '=', $report_no)->get();


        $com=DB::table('commercial_drug')
            ->join('companies', 'commercial_drug.company_no', '=', 'companies.company_no')
            ->where('drug_no','=', '$report->drug_no')
            ->select('companies.company_name')
            ->get();

        $details=DB::table('report_side_effects')
            ->join('drug_user', 'report_side_effects.drug_user_no', '=',
                'drug_user.drug_user_no')
            ->select('report_side_effects.Relation_with_patient','report_side_effects.purpose_of_use'
            ,'report_side_effects.date_start_use','report_side_effects.dose',
                'report_side_effects.how_use_drug','report_side_effects.how_get_drug',
                'report_side_effects.status_stop_use','report_side_effects.date_stop_use',
                'report_side_effects.expiration_date','drug_user.drug_user_name','drug_user.age'
            ,'drug_user.height','drug_user.weight','drug_user.gender')
            ->where('report_no','=', $report_no)->get();
        return view('pharmacovigilanceManagement.detailsReport', compact('report','details'))
            ->with('com',$com);
//        return View::make('pharmacovigilanceManagement.detailsReport')
//
//            ->with(compact('report'))
//
//            ->with(compact('details'))
//
//            ->with(compact('com'));
            //return Response($report );
    }
//عشان تفاصيل كل البلاغات الاعراض الجانبية
    public function detailsEffectReport($report_no){
        //استخدمت هذا بدل find
        $reports = DB::table('reports')->select('reports.report_no')
            ->where('report_no','=', $report_no)->get();  // search in given table id only
        if (!$reports)
            return redirect()->back();

        $report = DB::table('reports')
            ->join('types_reports', 'reports.type_report_no', '=', 'types_reports.type_report_no')
            ->join('app_user', 'reports.app_user_no', '=', 'app_user.app_user_no')
            ->select('reports.report_no', 'app_user.app_user_name', 'app_user.app_user_phone',
                'app_user.adjective', 'app_user.age', 'reports.notes_user', 'reports.report_date',
                'types_reports.type_report', 'reports.drug_picture')
            ->where('report_no', '=', $report_no)->get();
        return view('operationsManagement.detailsSmuggledReport', compact('report'));
    }


//عشان تفاصيل الدواء
    public function detailsDrug($drug_no){

        $r = DB::table('commercial_drug')
            ->join('combination', 'combination.drug_no', '=','commercial_drug.drug_no')
            ->join('effective_material', 'combination.material_no', '=', 'effective_material.material_no')
            ->join('batch_number', 'batch_number.drug_no', '=','commercial_drug.drug_no')
            ->join('shipments', 'batch_number.shipment_no', '=', 'shipments.shipment_no')
            ->join('agents', 'commercial_drug.agent_no', '=', 'agents.agent_no')
            ->join('companies', 'commercial_drug.company_no', '=', 'companies.company_no')
            ->select('commercial_drug.drug_name','commercial_drug.how_to_use'
                ,'commercial_drug.side_effects','commercial_drug.drug_form','commercial_drug.drug_no','agents.agent_name'
                ,'effective_material.material_name','companies.company_name','companies.company_country'
                ,'batch_number.batch_num','shipments.production_date','shipments.expiry_date')
            ->where('commercial_drug.drug_no','=',$drug_no)
            ->get();


        return view('pharmacovigilanceManagement/detailsDrug',compact('r'));
        //return response($r) ;

    }

//عشان تحويل البلاغات الوارده الى متابعة
    public function transferReports($report_no,Request $request)
    {
        $reports = DB::table('reports')->select('reports.transfer_party')
            ->where('report_no', '=', $report_no)
            ->update(['state'=>1,'reports.report_statues'=>'قيد المتابعة']);
        return view('pharmacovigilanceManagement.followReports');
    }


// عشان عرض المتابعة للبلاغات
    public function followReports(){
        $reports = DB::table('reports')
            ->select('reports.report_no','reports.authors_name','reports.report_date',
                'reports.transfer_date','reports.transfer_party','reports.report_statues' )
            ->where('report_statues','!=',null)
            ->get();
        return view('operationsManagement/followReports',compact('reports'));
    }
    //عشان اللفلترة حق قيد المتابعة
    public function followingReports(){
        $reports = DB::table('reports')
            ->select('reports.report_no','reports.authors_name','reports.report_date',
                'reports.transfer_date','reports.transfer_party','reports.report_statues' )
            ->where('report_statues','=','قيد المتابعة')
            ->get();
        return view('operationsManagement/followReports',compact('reports'));
    }
    //عشان اللفلترة حق تمت المتابعة
    public function followDoneReports(){
        $reports = DB::table('reports')
            ->select('reports.report_no','reports.authors_name','reports.report_date',
                'reports.transfer_date','reports.transfer_party','reports.report_statues' )
            ->where('report_statues','=','تمت المتابعة')
            ->get();
        return view('operationsManagement/followReports',compact('reports'));
    }
    //عشان اللفلترة حق تم الانهاء
    public function doneReports(){
        $reports = DB::table('reports')
            ->select('reports.report_no','reports.authors_name','reports.report_date',
                'reports.transfer_date','reports.transfer_party','reports.report_statues' )
            ->where('report_statues','=','تم الانهاء')
            ->get();
        return view('operationsManagement/followReports',compact('reports'));
    }



//عشان تفاصيل الذي تمت المتابعه
    public function followedUp($report_no,Request $request){
        $reports = DB::table('reports')->select('reports.report_no')
            ->where('report_no','=', $report_no)->get();  // search in given table id only
        if (!$reports)
            return redirect()->back();

        $report = DB::table('reports')
            ->join('types_reports', 'reports.type_report_no', '=', 'types_reports.type_report_no')
            ->join('site', 'reports.site_no', '=', 'site.site_no')
            ->join('commercial_drug', 'reports.drug_no', '=', 'commercial_drug.drug_no')
            ->select('reports.report_no','reports.authors_name','reports.authors_phone'
                ,'site.pharmacy_name','types_reports.type_report','commercial_drug.drug_name')
            ->where('report_no','=', $report_no)->get();

        $procedures=DB::table('procedures')->select('procedures.procedure'
            ,'procedures.procedure_date','procedures.procedure_result')
            ->where('report_no','=', $report_no)->get();

        return view('operationsManagement/followedUp',compact('report','procedures'));
    }
//عشان تفاصيل الذي قيد المتابعه
    public function followedUp2($report_no){
        $reports = DB::table('reports')->select('reports.report_no')
            ->where('report_no','=', $report_no)->get();  // search in given table id only
        if (!$reports)
            return redirect()->back();

        $report = DB::table('reports')
            ->join('types_reports', 'reports.type_report_no', '=', 'types_reports.type_report_no')
            ->join('site', 'reports.site_no', '=', 'site.site_no')
            ->join('commercial_drug', 'reports.drug_no', '=', 'commercial_drug.drug_no')
            ->select('reports.report_no','reports.authors_name','reports.authors_phone'
                ,'site.pharmacy_name','types_reports.type_report','commercial_drug.drug_name')
            ->where('report_no','=', $report_no)->get();

        $procedures=DB::table('procedures')->select('procedures.procedure'
            ,'procedures.procedure_date','procedures.procedure_result')
            ->where('report_no','=', $report_no)->get();

        return view('operationsManagement/followedUp2',compact('report','procedures'));
    }
//عشان تفاصيل الذي تم الانهاء
    public function followedUp3($report_no){
        $reports = DB::table('reports')->select('reports.report_no')
            ->where('report_no','=', $report_no)->get();  // search in given table id only
        if (!$reports)
            return redirect()->back();

        $report = DB::table('reports')
            ->join('types_reports', 'reports.type_report_no', '=', 'types_reports.type_report_no')
            ->join('site', 'reports.site_no', '=', 'site.site_no')
            ->join('commercial_drug', 'reports.drug_no', '=', 'commercial_drug.drug_no')
            ->select('reports.report_no','reports.authors_name','reports.authors_phone'
                ,'site.pharmacy_name','types_reports.type_report','commercial_drug.drug_name','reports.opmanage_notes')
            //->where('opmanage_notes','!=',null)
            ->where('report_no','=', $report_no)
            ->get();

        $procedures=DB::table('procedures')->select('procedures.procedure'
            ,'procedures.procedure_date','procedures.procedure_result')
            ->where('report_no','=', $report_no)->get();

        return view('operationsManagement/followedUp3',compact('report','procedures'));
    }

//عشان حفظ ملاحظة المدير على البلاغ
    public function editReport($report_no){
        $reports = Reports::find($report_no);
        return view('operationsManagement/doneReports',compact('reports'));
    }
    public function saveOPMNotes($report_no,Request $request)
    {
        Reports::select('reports.report_no')
            ->where('report_no', '=', $report_no)
            ->update(['opmanage_notes' => $request->opmanage_notes,
                'reports.report_statues'=>'تم الانهاء' ]);
        $reports = DB::table('reports')
            ->select('reports.report_no','reports.authors_name','reports.report_date',
                'reports.transfer_date','reports.transfer_party','reports.report_statues' )
            ->where('report_statues','!=',null)
            ->get();
        return view('operationsManagement/followReports',compact('reports'))
            ->with(['success' => 'تم الانهاء بنجاح ']);
    }


//عشان اضافة بلاغ
    public function addReport(){
        return view('operationsManagement/addReport');
    }
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
            'report_date'=>Carbon::now()->toDateTimeString(),
            'transfer_party' =>$request->input('transfer_party'),
            'transfer_date'=>Carbon::now()->toDateTimeString(),
        ]);

        // return redirect()->back()->with(['success' => 'تم اضافه البلاغ بنجاح ']);
    }


}
