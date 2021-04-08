@extends('layouts\master')
@section('content')

    <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4 ">

        {{--Start Content Title--}}

        <div class="border-bottom d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 pr-2 main " >
            <h1 class="h2 mt-2 mb-2 ml-2">إضافة بلاغ وارد</h1>
        </div>

        {{--End Content Title--}}



        {{--Start Content--}}

        <div class="card shadow " >
            <div class="card-header " style="background-color: #F9F9F9;">
                <div class="col-md-12 ">
                    <div class="card-body position-relative">
                        <form>

                            {{--//////////////////////////////////////////////////////--}}
                            {{--                       بيانات المبلغ                   --}}
                            {{--//////////////////////////////////////////////////////--}}

                            <div class="row">
                                <h4>بيانات المبلغ</h4>
                            </div>
                            <div class="row border-bottom pb-5">
                                <div class="form-group raw mt-4 mr-3 " style="display: flex; flex-wrap: wrap;">
                                    <label class="col-form-label text-sm-right mt-2 ">اسم المبلغ : </label>
                                    <div class=" mt-2 ml-4 ">
                                        <input type="text" class="form-control " placeholder="اسم المبلغ">
                                    </div>
                                </div>
                                <div class="form-group raw mt-4 mr-3" style="display: flex; flex-wrap: wrap;">
                                    <label class="col-form-label text-sm-right mt-2"> رقم الهاتف : </label>
                                    <div class=" mt-2 ml-4">
                                        <input type="text" class="form-control" placeholder="رقم الهاتف ">
                                    </div>
                                    <label class="col-form-label text-sm-right mt-2 ml-0"> الصفة : </label>
                                    <div class=" mt-2 ml-4  ">
                                        <input type="text" class="form-control  " placeholder="الصفة ">
                                    </div>
                                </div>
                            </div>

                            {{--//////////////////////////////////////////////////////--}}
                            {{--                       تفاصيل البلاغ                    --}}
                            {{--//////////////////////////////////////////////////////--}}

                            <div class="row mt-4">
                                <h4>موضوع البلاغ</h4>
                            </div>
                            <div class="row ">
                                <div class="form-group raw mt-4 mr-3" style="display: flex; flex-wrap: wrap; margin-left: -12px; margin-right: -12px;">
                                    <label class="col-form-label  text-sm-right mt-2">  الرقم المميز : </label>
                                    <div class="mt-2  ml-4">
                                        <input type="text" class="form-control" placeholder="الرقم المميز  ">
                                    </div>
                                </div>
                                <div class="form-group raw mt-4 mr-3" style="display: flex; flex-wrap: wrap; margin-left: -12px; margin-right: -12px;">
                                    <label class="col-form-label text-sm-right mt-2">  اسم الدواء : </label>
                                    <div class="mt-2 ml-4">
                                        <input type="text" class="form-control" placeholder="الاسم التجاري  ">
                                    </div>
                                    <label class="col-form-label text-sm-right mt-2 "> التركيبة العلمية : </label>
                                    <div class=" mt-2 ml-4 ">
                                        <input type="text" class="form-control" placeholder="الاسم العلمي ">
                                    </div>
                                </div>
                                <div class="form-group raw mt-4 mr-3" style="display: flex; flex-wrap: wrap; margin-left: -12px; margin-right: -12px;">
                                    <label class="col-form-label text-sm-right mt-2">اسم الصيديلة  : </label>
                                    <div class=" mt-2 ml-4">
                                        <input type="text" class="form-control" placeholder="اسم الصيديلة">
                                    </div>
                                    <label class="col-form-label text-sm-right mt-2">المنطقة : </label>
                                    <div class=" mt-2 ml-4">
                                        <input type="text" class="form-control" placeholder="المنطقة ">
                                    </div>
                                </div>
                                <div class="form-group raw mt-4 mr-3 " style="display: flex; flex-wrap: wrap; margin-left: -12px; margin-right: -12px;">
                                    <label class="col-form-label text-sm-right mt-2">وصف الموقع : </label>
                                    <div class=" mt-2 ml-4">
                                        <input type="text" class="form-control" placeholder="وصف الموقع ">
                                    </div>
                                </div>
                                <div class="form-group raw mt-4 mr-3 " style="display: flex; flex-wrap: wrap; margin-left: -12px; margin-right: -12px;">
                                    <label class="col-form-label text-sm-right mt-2">ملاحظة المبلغ : </label>
                                    <div class=" mt-2 ml-4">
                                        <textarea class="form-control" placeholder="ملاحظة المبلغ" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group raw mt-4 mr-3" style="display: flex; flex-wrap: wrap; margin-left: -12px; margin-right: -12px;">
                                    <label class="col-form-label text-sm-right mt-2">نوع البلاغ : </label>
                                    <div class=" mt-2 ml-4">
                                        <select class="form-control mb-3">
                                            <option selected="">غير معروف</option>
                                            <option>مهرب</option>
                                            <option>مسحوب</option>
                                            <option>غير مطابق</option>
                                        </select>
                                    </div>
                                    <label class="col-form-label text-sm-right mt-2">الجهه المحال إليها : </label>
                                    <div class="mt-2 ml-4">
                                        <select class="form-control mb-3">
                                            <option selected=""></option>
                                            <option>إدارة الصيدلة</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group raw mt-4 " style="display: flex; flex-wrap: wrap; margin-left: -12px; margin-right: -12px;">
                                <button class="btn " type="button" style="margin-right:90%; width: 20%; background-color: #5468FF; color:#ffffff">حفظ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{--End Content--}}

    </main>

@endsection
