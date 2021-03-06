@extends('layouts\master')
@section('content')

    <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4 ">

        {{--Start Content Title--}}
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 pr-2  border-bottom main " >
            <h1 class="h2  ml-4">متابعة بلاغ وارد</h1>
            <div class="btn-toolbar ">
            </div>
        </div>

        {{--End Content Title--}}



        {{--Start Content--}}

    <!--//////////////////////////////////////////////////////-->
        <!--                      موضوع البلاغ                      -->
        <!--//////////////////////////////////////////////////////-->

        <div class="card shadow mb-0 pb-0" >
            <div class="card-header " style="background-color: #F9F9F9;">
                <div class="row m-2 ">
                    <h4>موضوع البلاغ</h4>
                </div>
            </div>
            <div class="card-body position-relative mb-0 pb-0" style="background-color: #F9F9F9;">
                <form>
                    @if(isset($report))
                        @foreach($report as $reports)
                            @if($reports -> type_report=='مهرب')
                            <div class="form-group raw mt-2 " style="display: flex; flex-wrap: wrap;  ">
                                <label class="col-form-label Text ml-3 mr-4 ">اسم المبلغ : </label>
                                <label class="col-form-label  ml-2 mr-4  ">{{$reports -> app_user_name}}  </label>
                                <label class="col-form-label Text ml-5 mr-4 ">رقم الهاتف : </label>
                                <label class="col-form-label  ml-2 mr-4  ">{{$reports -> app_user_phone}}  </label>
                            </div>
                            <div class="form-group raw mt-4  border-bottom " style="display: flex; flex-wrap: wrap; ">
                                <label class="col-form-label  Text ml-3 mr-4 ">نوع البلاغ : </label>
                                <label class="col-form-label  ml-2 mr-4 ">{{$reports -> type_report}}  </label>
                                <label class="col-form-label Text  ml-5 mr-4 ">اسم الصيدلية : </label>
                                <label class="col-form-label ml-2 mr-4  ">{{$reports -> pharmacy_name}}  </label>
                                <label class="col-form-label Text  ml-5 mr-4 ">تاريخ البلاغ : </label>
                                <label class="col-form-label ml-2 mr-4 mb-3  ">{{$reports -> report_date}}  </label>
                            </div>
                            <div class="form-group raw mt-4  ">
                                <a class="text-center col-form-label mb-3"  href="{{url('operationsManagement/detailsSmuggledReport2',$reports -> report_no)}}" style="margin-right: 45%"> تفاصيل البلاغ</a>
                            </div>
                            @else
                                <div class="form-group raw mt-2 " style="display: flex; flex-wrap: wrap;  ">
                                    <label class="col-form-label Text ml-3 mr-4 ">اسم المبلغ : </label>
                                    <label class="col-form-label  ml-2 mr-4  ">{{$reports -> app_user_name}}  </label>
                                    <label class="col-form-label Text ml-5 mr-4 ">رقم الهاتف : </label>
                                    <label class="col-form-label  ml-2 mr-4  ">{{$reports -> app_user_phone}}  </label>
                                </div>
                                <div class="form-group raw mt-4  border-bottom " style="display: flex; flex-wrap: wrap; ">
                                    <label class="col-form-label  Text ml-3 mr-4 ">نوع البلاغ : </label>
                                    <label class="col-form-label  ml-2 mr-4 ">{{$reports -> type_report}}  </label>
                                    <label class="col-form-label Text  ml-5 mr-4 ">اسم الصيدلية : </label>
                                    <label class="col-form-label ml-2 mr-4  ">{{$reports -> pharmacy_name}}  </label>
                                    <label class="col-form-label Text  ml-5 mr-4 ">تاريخ البلاغ : </label>
                                    <label class="col-form-label ml-2 mr-4 mb-3  ">{{$reports -> report_date}}  </label>
                                </div>
                                <div class="form-group raw mt-4  ">
                                    <a class="text-center col-form-label mb-3"  href="{{url('operationsManagement/detailsReport2',$reports -> report_no)}}" style="margin-right: 45%"> تفاصيل البلاغ</a>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </form>
            </div>
        </div>

        <!--//////////////////////////////////////////////////////-->
        <!--                    متابعة البلاغ                        -->
        <!--//////////////////////////////////////////////////////-->

        <div class="card shadow mt-5" >
            <div class="card-header " style="background-color: #F9F9F9;">
                <div class="row m-2">
                    <h4>الإجراءات المتخذه حيال البلاغ</h4>
                </div>
            </div>
            <div class="card-body position-relative mb-0 pb-0" style="background-color: #F9F9F9;">
                <form>
                    @if(isset($procedures))
                        @foreach($procedures as $procedure)
                            <div class="form-group raw mt-2 " style="display: flex; flex-wrap: wrap;  ">
                                <label  >  تــاريــخ الإجراء : </label>
                                <label class="ml-3">{{$procedure -> procedure_date}}</label>
                                <label >   الإجراء المتخذ : </label>
                                <label class="ml-3">{{$procedure -> procedure}} </label>
                            </div>
                            <div class="form-group raw mt-2 " style="display: flex; flex-wrap: wrap;  ">
                                <label  >   الــنــتــائــج : </label>
                                <label class="ml-3">{{$procedure -> procedure_result}} </label>
                            </div>
                        @endforeach
                    @endif
                </form>
            </div>
            @if(isset($report))
                @foreach($report as $reports)
                    <div class="row pb-5">
                        <div class="col-lg">
                            <button class="btn " type="submit" style="margin-right:90%; width: 10%; background-color: #0F122D; color:#ffffff">
                                <a  href="{{url('operationsManagement/editReport',$reports -> report_no)}}">انهاء</a></button>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        {{--End Content--}}

    </main>

@endsection
