@extends('layouts\master')
@section('content')

    <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4 ">

        {{--Start Content Title--}}

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 pr-2  border-bottom main " >
            <h1 class="h2  ml-4 mt-4">تفاصيل الدواء</h1>
        </div>

        {{--End Content Title--}}



        {{--Start Content--}}

        {{--//////////////////////////////////////////////////////--}}
        {{--                       بيانات الدواء                   --}}
        {{--//////////////////////////////////////////////////////--}}

        <div class="card shadow col-lg-5" style="width: 40%; background-color: #F9F9F9;"  >
            <div class="card-header "style="background-color: #F9F9F9;">
                <h5 class="card-title" style="color:#5468FF">تفاصيل الدواء</h5>
            </div>
            <div class="card-body">
                <div class="row " >
                    @if(isset($r))
                        @foreach($r as $rr)
                            <ul class="list-group list-group-flush" >
                                <li class="list-group-item" style="background-color: #F9F9F9;">
                                    <label>الاسم التجاري : </label>
                                    <label  class="ml-5">{{$rr->drug_name}}</label>
                                    <label >الاسم العلمي : </label>
                                    <label  class="ml-3"></label>
                                </li>
                                <li class="list-group-item" style="background-color: #F9F9F9;">
                                    <label>الاستخدامات : </label>
                                    <label  class="ml-3 mr-4">{{$rr->how_to_use}}</label>
                                </li>
                                <li class="list-group-item"style="background-color: #F9F9F9;">
                                    <label > الاعراض : </label>
                                    <label  class="ml-3">{{$rr->side_effects}}</label>
                                </li>
                                <li class="list-group-item"style="background-color: #F9F9F9;">
                                    <label > اسم الوكيل : </label>
                                    <label  class="ml-5">{{$rr->agent_name}}</label>
                                </li>
                            </ul>
                        @endforeach
                    @endif
                    @if(isset($s))
                        @foreach($s as $ss)
                            <ul>
                                <li>
                                    <label > رقم الشحنة : </label>
                                    <label  class="ml-3">{{$ss->batch_number}}</label>
                                </li>
                                <li class="list-group-item"style="background-color: #F9F9F9;">
                                    <label>  تاريخ الانتاج : </label>
                                    <label  class="ml-5">{{$ss->production_date}}</label>
                                </li>
                                <li class="list-group-item"style="background-color: #F9F9F9;">
                                    <label > تاريخ الانتهاء :</label>
                                    <label  class="ml-3">{{$ss->expiry_date}}</label>
                                </li>
                            </ul>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>


        {{--End Content--}}

    </main>

@endsection
