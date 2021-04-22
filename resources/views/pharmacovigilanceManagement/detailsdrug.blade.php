@extends('layouts\master')
@section('content')

    <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4 ">

        {{--Start Content Title--}}

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 pr-2  border-bottom main " >
            <h1 class="h2  ml-4 mt-4">متابعة البلاغ</h1>
        </div>

        {{--End Content Title--}}



        {{--Start Content--}}

        {{--//////////////////////////////////////////////////////--}}
        {{--                       بيانات الدواء                   --}}
        {{--//////////////////////////////////////////////////////--}}

        <div class="card shadow col-lg-5" style="width: 40%; background-color: #F9F9F9;"  >
            <div class="card-header "style="background-color: #F9F9F9;">
                <h5 class="card-title" style="color:#5468FF">بيانات الدواء</h5>
            </div>
            <div class="card-body">
                <div class="row " >
                    @if(isset($report))
                        @foreach($report as $reports)
                            <ul class="list-group list-group-flush" >
                                <li class="list-group-item" style="background-color: #F9F9F9;">
                                    <label>الاسم : </label>
                                    <label  class="ml-3">{{$reports -> authors_name}}</label>
                                </li>
                                <li class="list-group-item" style="background-color: #F9F9F9;">
                                    <label>رقم الهاتف : </label>
                                    <label  class="ml-3">{{$reports -> authors_phone}}</label>
                                </li>
                                <li class="list-group-item"style="background-color: #F9F9F9;">
                                    <label>العمر : </label>
                                    <label  class="ml-3 mr-4">{{$reports -> authors_age}}</label>
                                    <label class="ml-5"> الصفه : </label>
                                    <label  class="ml-3">{{$reports -> authors_character}}</label>
                                </li>
                            </ul>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        {{--//////////////////////////////////////////////////////--}}
        {{--                       تفاصيل الوكيل                   --}}
        {{--//////////////////////////////////////////////////////--}}

        <div class="card shadow  col-md-4 col-lg-5" style="width: 40%;background-color: #F9F9F9;"  >
            <div class="card-header " style="background-color: #F9F9F9;">
                <h5 class="card-title" style="color:#5468FF"> موقع الوكيل</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @if(isset($report))
                        @foreach($report as $reports)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="background-color: #F9F9F9;">
                                    <label> اسم الصيدلية : </label>
                                    <label  class="ml-3">{{$reports -> pharmacy_name}}</label>
                                </li>
                                <li class="list-group-item"style="background-color: #F9F9F9;">
                                    <label>  الشارع : </label>
                                    <label  class="ml-3">{{$reports -> street_name}}</label>
                                </li>
                                <li class="list-group-item"style="background-color: #F9F9F9;">
                                    <label> وصف الموقع :</label>
                                    <label  class="ml-3">{{$reports -> sit_dec}}</label>
                                </li>
                            </ul>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        </div>


        {{--End Content--}}

    </main>

@endsection
