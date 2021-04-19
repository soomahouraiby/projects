@extends('layouts\master')
@section('content')
    <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4 ">

        {{--Start Content Title--}}

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 pr-2  border-bottom main " >
            <h1 class="h2   ml-2 mt-2 mb-2">تحويل البلاغات الواردة</h1>

        </div>

        {{--End Content Title--}}
        <div class="alert alert-success" id="success_msg" style="display: none;">
            تم التحويل بنجاح
        </div>


        {{--Start Content--}}

        <div class="row" style="width: 100%;" >
            <div class="card shadow mb-0 pb-0" >
                <div class="card-header " style="background-color: #F9F9F9;">
                    <div class="row m-2 ">
                        <h4>موضوع البلاغ</h4>
                    </div>
                </div>
                <div class="card-body position-relative mb-0 pb-0" style="background-color: #F9F9F9;">
                    <form>
                        @if(isset($reports))
                            @foreach($reports as $report)
                                <div class="form-group raw mt-2 " style="display: flex; flex-wrap: wrap;  ">
                                    <label class="col-form-label Text ml-3 mr-4 ">اسم المبلغ : </label>
                                    <label class="col-form-label  ml-2 mr-4  ">{{$report -> authors_name}}  </label>
                                    <label class="col-form-label Text ml-5 mr-4 ">رقم الهاتف : </label>
                                    <label class="col-form-label  ml-2 mr-4  ">{{$report -> authors_phone}}  </label>
                                    <label class="col-form-label  Text ml-3 mr-4 ">نوع البلاغ : </label>
                                    <label class="col-form-label  ml-2 mr-4 ">{{$report -> type_report}}  </label>
                                </div>
                                <div class="form-group raw mt-2  border-bottom " style="display: flex; flex-wrap: wrap; ">

                                    <label class="col-form-label Text  ml-3 mr-4 ">تاريخ البلاغ : </label>
                                    <label class="col-form-label ml-2 mr-4  ">{{$report -> report_date}}  </label>
                                    <label class="col-form-label Text  ml-5 mr-4 ">ملاحظة المبلغ : </label>
                                    <label class="col-form-label ml-2 mr-4 mb-3  ">{{$report -> notes_user}}  </label>
                                </div>
                                <div class="form-group raw mt-4  ">
                                    <a class="text-center col-form-label mb-3"  href="{{url('operationsManagement/detailsReport',$report -> report_no)}}" style="margin-right: 45%"> تفاصيل البلاغ</a>
                                </div>

                    </form>


                </div>
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form id="FormUpdate" method="POST" action="{{url('operationsManagement/transfered',$report -> report_no)}}">
                @csrf
                <div class="form-group raw mt-4 mr-3" style="display: flex; flex-wrap: wrap; margin-left: -12px; margin-right: -12px;">
                    <label class="col-form-label text-sm-right mt-2">تحويل الى : </label>
                    <div class="mt-2 ml-4">
{{--                        <select class="form-control mb-3" id="trans" name="trans" >--}}
{{--                            <option selected="" value="إدارة الصيدلة">إدارة الصيدلة</option>--}}
{{--                        </select>--}}
                        <input type="text" class="form-control" placeholder="tr " value="{{$report->transfer_party}}">
                    </div>
                    <br><br>
                    <div class="form-group raw mt-4 " style="display: flex; flex-wrap: wrap; margin-left: -12px; margin-right: -12px;">
                        <button id="transfer" class="btn btn-primary "  >تحويل</button>
                    </div>
                </div>
                </form>
                @endforeach
                @endif
            </div>



            </div>
        </div>

        {{--End Content--}}

    </main>

@endsection

{{--@push('save_ajax')--}}
{{--    <script>--}}

{{--        $(document).on('click', '#transfer', function () {--}}
{{--            // e.preventDefault();--}}
{{--            var formData = new FormData($('#FormUpdate')[0]);--}}
{{--            $.ajax({--}}
{{--                type: 'POST',--}}
{{--                url: "/operationsManagement/transfered",--}}
{{--                data: formData,--}}
{{--                success: function (data) {--}}
{{--                    alert(data);--}}
{{--                    // if(data.status == true){--}}
{{--                    //     $('#success_msg').show();--}}
{{--                    }--}}


{{--                , error: function (reject) {--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}


{{--    </script>--}}
{{--@endpush--}}

