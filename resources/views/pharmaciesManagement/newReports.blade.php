@extends('layouts\master')
@section('content')

    <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4 ">

        {{--Title--}}
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 pr-2  border-bottom main " >
            <h1 class="h2 ml-4">بلاغات واردة</h1>
            <div class="btn-toolbar ">
                <input class="form-control form-control-dark w-50 mr-5" type="text" placeholder="بحث" aria-label="بحث" size="30" style="border: 2px solid #ECECEC;
                    border-radius: 20px;">
                <div class="dropdown">
                    <button type="button" class="btn btn-sm  dropdown-toggle mr-4 ml-4 button" data-toggle="dropdown" id="btn">
                        نوع البلاغ
                    </button>
                    <div class="dropdown-menu dropdown-menu-right bg-light">
                        <a class="dropdown-item " href="#">جميع البلاغات</a>
                        <a class="dropdown-item " href="#">مهرب</a>
                        <a class="dropdown-item " href="#">مسحوب</a>
                        <a class="dropdown-item " href="#">غير مطابق</a>
                    </div>
                </div>
            </div>
        </div>


        {{--Content--}}

        <div class="card shadow align-center" style="width: 80%; ">
            <div class="card-header ">
                <table class="table table-striped table-hover ">
                    <thead >
                        <tr>
                            <th>اسم المبلغ</th>
                            <th>التاريخ</th>
                            <th>نوع البلاغ</th>
                            <th>اسم الصيدليه</th>
                            <th class="no-sort pr-1 align-middle data-table-row-action"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="{{route('detailsReport')}}">احلام محمد الفاشق</a></td>
                            <td><a href="{{route('detailsReport')}}">June 21, 1961</a></td>
                            <td><a href="{{route('detailsReport')}}">مهرب</a></td>
                            <td><a href="{{route('detailsReport')}}">ابن حيان</a></td>
                            <td><a  class="btn " href="{{route('detailsReport')}}">تفاصيل</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{route('detailsReport')}}">احلام محمد الفاشق</a></td>
                            <td><a href="{{route('detailsReport')}}">June 21, 1961</a></td>
                            <td><a href="{{route('detailsReport')}}">مهرب</a></td>
                            <td><a href="{{route('detailsReport')}}">ابن حيان</a></td>
                            <td><a  class="btn " href="{{route('detailsReport')}}">تفاصيل</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{route('detailsReport')}}">احلام محمد الفاشق</a></td>
                            <td><a href="{{route('detailsReport')}}">June 21, 1961</a></td>
                            <td><a href="{{route('detailsReport')}}">مهرب</a></td>
                            <td><a href="{{route('detailsReport')}}">ابن حيان</a></td>
                            <td><a  class="btn " href="{{route('detailsReport')}}">تفاصيل</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{route('detailsReport')}}">احلام محمد الفاشق</a></td>
                            <td><a href="{{route('detailsReport')}}">June 21, 1961</a></td>
                            <td><a href="{{route('detailsReport')}}">مهرب</a></td>
                            <td><a href="{{route('detailsReport')}}">ابن حيان</a></td>
                            <td><a  class="btn " href="{{route('detailsReport')}}">تفاصيل</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{route('detailsReport')}}">احلام محمد الفاشق</a></td>
                            <td><a href="{{route('detailsReport')}}">June 21, 1961</a></td>
                            <td><a href="{{route('detailsReport')}}">مهرب</a></td>
                            <td><a href="{{route('detailsReport')}}">ابن حيان</a></td>
                            <td><a  class="btn " href="{{route('detailsReport')}}">تفاصيل</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{route('detailsReport')}}">احلام محمد الفاشق</a></td>
                            <td><a href="{{route('detailsReport')}}">June 21, 1961</a></td>
                            <td><a href="{{route('detailsReport')}}">مهرب</a></td>
                            <td><a href="{{route('detailsReport')}}">ابن حيان</a></td>
                            <td><a  class="btn " href="{{route('detailsReport')}}">تفاصيل</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{route('detailsReport')}}">احلام محمد الفاشق</a></td>
                            <td><a href="{{route('detailsReport')}}">June 21, 1961</a></td>
                            <td><a href="{{route('detailsReport')}}">مهرب</a></td>
                            <td><a href="{{route('detailsReport')}}">ابن حيان</a></td>
                            <td><a  class="btn " href="{{route('detailsReport')}}">تفاصيل</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{route('detailsReport')}}">احلام محمد الفاشق</a></td>
                            <td><a href="{{route('detailsReport')}}">June 21, 1961</a></td>
                            <td><a href="{{route('detailsReport')}}">مهرب</a></td>
                            <td><a href="{{route('detailsReport')}}">ابن حيان</a></td>
                            <td><a  class="btn " href="{{route('detailsReport')}}">تفاصيل</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

@endsection
