@extends('layouts\master')
@section('content')

    {{--Fixed--}}
    <div id="New">
        <a class="nav-link active" href="../pharmaciesManagement/follow.php">
            <i class="fas fa-plus fa-1x ml-0 mr-0"></i>
            <span data-feather="file" class="ml-1">متابعة</span>
        </a>
    </div>

    <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4 ">
        {{--Title--}}
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 pr-2  border-bottom main " >
            <h1 class="h2 ml-4">تفاصيل بلاغ وارد</h1>
        </div>

        {{--Content--}}
        <div class="row" style="width: 100%" >

            {{--//////////////////////////////////////////////////////--}}
            {{--                    بيانات المبلغ                      --}}
            {{--//////////////////////////////////////////////////////--}}

            <div class="card shadow " style="width: 50% ;background-color: #F9F9F9;"  >
                <div class="card-header "style="background-color: #F9F9F9;">
                    <h5 class="card-title" style="color:#5468FF">بيانات المبلغ</h5>
                </div>
                <div class="card-body">
                    <div class="row" >
                        <ul class="list-group list-group-flush" >
                            <li class="list-group-item" style="background-color: #F9F9F9;">
                                <label>الاسم : </label>
                                <label  class="ml-3">احلام محمد عبده الفاشق</label>
                            </li>
                            <li class="list-group-item" style="background-color: #F9F9F9;">
                                <label>رقم الهاتف : </label>
                                <label  class="ml-3">773773773</label>
                            </li>
                            <li class="list-group-item"style="background-color: #F9F9F9;">
                                <label>العمر : </label>
                                <label  class="ml-3 mr-4">22</label>
                                <label class="ml-5"> عدد البلاغات : </label>
                                <label  class="ml-3">5</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{--//////////////////////////////////////////////////////--}}
            {{--                   تفاصيل الموقع                       --}}
            {{--//////////////////////////////////////////////////////--}}

            <div class="card shadow  col-md-4 " style="width: 50%;background-color: #F9F9F9;"  >
                <div class="card-header " style="background-color: #F9F9F9;">
                    <h5 class="card-title" style="color:#5468FF"> موقع البلاغ</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="background-color: #F9F9F9;">
                                <label> : </label>
                                <label  class="ml-3"></label>
                            </li>
                            <li class="list-group-item"style="background-color: #F9F9F9;">
                                <label>  : </label>
                                <label  class="ml-3"></label>
                            </li>
                            <li class="list-group-item"style="background-color: #F9F9F9;">
                                <label> : </label>
                                <label  class="ml-3"></label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="" >

            {{--//////////////////////////////////////////////////////--}}
            {{--                    تفاصيل الدواء                      --}}
            {{--//////////////////////////////////////////////////////--}}

            <div class="card shadow  col-md-4" style=" background-color: #F9F9F9;"  >
                <div class="card-header "style="background-color: #F9F9F9;">
                    <a class="card-title nav-link h5" href="../pharmaciesManagement/detailsDrug.php" style="color:#5468FF">تفاصيل الدواء</a>
                </div>
                <div class="card-body">
                    <div class="row" >
                        <ul class="list-group list-group-flush" >
                            <li class="list-group-item" style="background-color: #F9F9F9;">
                                <label>الاسم التجاري: </label>
                                <label  class="ml-3">Panadol</label>
                            </li>
                            <li class="list-group-item" style="background-color: #F9F9F9;">
                                <label>التركيبه العلميه:</label>
                                <label  class="ml-3">paracetamol</label>
                            </li>
                            <li class="list-group-item"style="background-color: #F9F9F9;">
                                <label>الوكيل :</label>
                                <label  class="ml-3">مجموعة الحيدري</label>
                            </li>
                            <li class="list-group-item"style="background-color: #F9F9F9;">
                                <div class="card-img-top" ><img class="card-img-top img-fluid" src="../images/Panadol.jpg"></div>
                                <a class="btn float-right" href="../pharmaciesManagement/detailsDrug.php">المزيد</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{--//////////////////////////////////////////////////////--}}
            {{--                    موضوع البلاغ                        --}}
            {{--//////////////////////////////////////////////////////--}}

            <div class="card shadow  col-md-4" style="background-color: #F9F9F9;"  >
                <div class="card-header " style="background-color: #F9F9F9;">
                    <h5 class="card-title" style="color:#5468FF"> موضوع البلاغ</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="background-color: #F9F9F9;">
                                <label> نوع البلاغ :</label>
                                <label  class="ml-3">مهرب</label>
                            </li>
                            <li class="list-group-item"style="background-color: #F9F9F9;">
                                <label>تاريخ البلاغ :</label>
                                <label  class="ml-3">2021/5/31</label>
                            </li>
                            <li class="list-group-item"style="background-color: #F9F9F9;">
                                <label> ملاحظة المبلغ :</label>
                                <label  class="ml-3">......</label>
                            </li>
                            <li class="list-group-item"style="background-color: #F9F9F9;">
                                <label>مرفق</label>
                                <div class="card-img-top" ><img class="card-img-top img-fluid" src="../images/Panadol.jpg"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
