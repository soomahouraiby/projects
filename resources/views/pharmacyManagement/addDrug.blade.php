@extends('layouts\master')
@section('content')

    {{--Title--}}
    <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4 ">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 pr-2  border-bottom main " >
            <h1 class="h2  ml-4">إضافة دواء </h1>
        </div>


        {{--Content--}}

        {{--//////////////////////////////////////////////////////--}}
        {{--                    إضافة دواء جديد                    --}}
        {{--//////////////////////////////////////////////////////--}}

        <div class="card shadow mb-0 pb-0" >
            <div class="card-header " style="background-color: #F9F9F9;">
                <div class="row m-2">
                    <h4>بيانات  الدواء</h4>
                </div>
            </div>
            <div class="card-body position-relative mb-0 pb-0" style="background-color: #F9F9F9;">
                <div class="row pb-5">
                    <div class="form-group raw mt-4 " style="display: flex; flex-wrap: wrap; ">
                        <label class="col-form-label   mt-2 mx-4 "> الرقم المميز : </label>
                        <div class=" mt-2 ">
                            <input type="text" class="form-control" placeholder="الرقم المميز  ">
                        </div>
                        <label class="col-form-label   mt-2 mx-4  ">  الــتــاريــخ : </label>
                        <div class=" mt-2  ">
                            <input type="text" class="form-control" placeholder="التاريخ  ">
                        </div>
                    </div>
                    <div class="form-group raw mt-4 " style="display: flex; flex-wrap: wrap; ">
                        <label class="col-form-label  mt-2 mx-4 ">  الماده الفعاله : </label>
                        <div class=" mt-2  ">
                            <input type="text" class="form-control" placeholder="الاسم العلمي  ">
                        </div>
                        <label class="col-form-label   mt-2 mx-4 ">  الاسم التجاري : </label>
                        <div class=" mt-2  ">
                            <input type="text" class="form-control" placeholder="الاسم التجاري  ">
                        </div>
                    </div>
                    <div class="form-group raw mt-4 " style="display: flex; flex-wrap: wrap; ">
                        <label class="col-form-label  mt-2 mx-4 ">  الأثار الجانبيه : </label>
                        <div class=" mt-2">
                            <textarea class="form-control" placeholder="الأثار الجانبيه" rows="3" cols="40"></textarea>
                        </div>
                        <div class="form-group  mt-4 " style="float: right">
                            <button class="btn " type="button" style=" float:right;margin-right:90%; background-color: #5468FF; color:#ffffff">حفظ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection
