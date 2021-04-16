@extends('layouts\master')
@section('content')
    <main class="col-md-8 ms-sm-auto col-lg-10 px-md-4 ">

        {{--Start Content Title--}}

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 pr-2  border-bottom main " >
            <h1 class="h2  ml-4">إدارة ومتابعة البلاغات</h1>
            <div class="btn-toolbar ">
                <input class="form-control form-control-dark w-50 mr-5" type="text" placeholder="بحث" aria-label="بحث" size="30" style="border: 2px solid #ECECEC;
                    border-radius: 20px;">
                <div class="dropdown">
                    <button type="button" class="btn btn-sm  dropdown-toggle mr-4 ml-4 button" data-toggle="dropdown" id="btn">
                        عرض
                    </button>
                    <div class="dropdown-menu dropdown-menu-right bg-light">
                        <a class="dropdown-item " href="#">جميع البلاغات</a>
                        <a class="dropdown-item " href="#">قيد المتابعة</a>
                        <a class="dropdown-item " href="#">تم متابعتها</a>
                        <a class="dropdown-item " href="#">تم انهائها</a>
                    </div>
                </div>
            </div>
        </div>

        {{--End Content Title--}}



        {{--Start Content--}}

        <div class="card shadow mb-3 w-9" style="background-color: #F9F9F9;">
            <div class="card-body px-0 py-0" style="background-color: #F9F9F9;">
                <div class="table-responsive scrollbar">
                    <table class="table table-hover fs--1 mb-0" style="background-color: #F9F9F9;">
                        <thead class="bg-200 text-900">
                        <tr>
                            <th>
                                <div class="form-check mb-2 mt-2 d-flex align-items-center mb-3 mt-3"><input class="form-check-input" id="checkbox-bulk-purchases-select" type="checkbox" data-bulk-select='{"body":"table-purchase-body","actions":"table-purchases-actions","replacedElement":"table-purchases-replace-element"}' /></div>
                            </th>
                            <th class="sort pr-1 align-middle white-space-nowrap text-left" data-sort="name">اسم المبلغ</th>
                            <th class="sort pr-1 align-middle white-space-nowrap text-left" data-sort="email">تاريخ البلاغ</th>
                            <th class="sort pr-1 align-middle white-space-nowrap text-left" data-sort="product">تاريخ التحويل</th>
                            <th class="sort pr-1 align-middle white-space-nowrap text-left" data-sort="payment">الجهه المُحال إليها</th>
                            <th class="sort pr-1 align-middle white-space-nowrap text-left" data-sort="amount">حالة البلاغ</th>
                            <th class="no-sort pr-1 align-middle data-table-row-action"></th>
                        </tr>
                        </thead>
                        <tbody class="list" id="table-purchase-body">
                        <tr class="btn-reveal-trigger">
                            <td class="align-middle" style="width: 28px;">
                                <div class="form-check mb-2 mt-2 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="recent-purchase-0" data-bulk-select-row="data-bulk-select-row" /></div>
                            </td>
                            <td class="align-middle white-space-nowrap text-left name ">احلام محمد عبده الفاشق</td>
                            <td class="align-middle white-space-nowrap text-left email">2021/5/31</td>
                            <td class="align-middle white-space-nowrap text-left product">2021/6/1</td>
                            <td class="align-middle white-space-nowrap text-left amount">إدارة الصيدلة</td>
                            <td class="align-middle text-left  white-space-nowrap payment">
                                <a class="badge badge rounded-pill badge-soft-success  align-items-center text-left nav-link active" href="{{route('OP_followedUp')}}" style="background-color:#D9DEFF; color:#5468FF;  height:25px;"  >
                                    <span data-feather="file  text-center">تم متابعتها </span>
                                    <i class="fas fa-file-contract ml-3"></i>
                                </a>
                            </td>
                            <td class="align-middle white-space-nowrap">
                                <div class="dropdown font-sans-serif">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-right" type="button" id="dropdown0" data-toggle="dropdown">
                                        <span class="fas fa-ellipsis-h fs--1"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right border py-2" aria-labelledby="dropdown0">
                                        <a class="dropdown-item" href="#">عرض</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item  " href="#!">إنهاء</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                            <td class="align-middle" style="width: 28px;">
                                <div class="form-check mb-2 mt-2 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="recent-purchase-0" data-bulk-select-row="data-bulk-select-row" /></div>
                            </td>
                            <td class="align-middle white-space-nowrap text-left name ">احلام محمد عبده الفاشق</td>
                            <td class="align-middle white-space-nowrap text-left email">2021/5/31</td>
                            <td class="align-middle white-space-nowrap text-left product">2021/6/1</td>
                            <td class="align-middle white-space-nowrap text-left amount">إدارة الصيدلة</td>
                            <td class="align-middle text-left  white-space-nowrap payment">
                                <a class="badge badge rounded-pill badge-soft-success  align-items-center text-left nav-link active" href="#" style="background-color:#FDE6D8; color:#A7613A;  height:25px;"  >
                                    <span data-feather="file  text-center">قيد المتابعة </span>
                                    <i class="fas fa-file-contract ml-3"></i>
                                </a>
                            </td>
                            <td class="align-middle white-space-nowrap">
                                <div class="dropdown font-sans-serif">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-right" type="button" id="dropdown0" data-toggle="dropdown">
                                        <span class="fas fa-ellipsis-h fs--1"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right border py-2" aria-labelledby="dropdown0">
                                        <a class="dropdown-item" href="#">عرض</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item  " href="#!">إنهاء</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                            <td class="align-middle" style="width: 28px;">
                                <div class="form-check mb-2 mt-2 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="recent-purchase-0" data-bulk-select-row="data-bulk-select-row" /></div>
                            </td>
                            <td class="align-middle white-space-nowrap text-left name ">احلام محمد عبده الفاشق</td>
                            <td class="align-middle white-space-nowrap text-left email">2021/5/31</td>
                            <td class="align-middle white-space-nowrap text-left product">2021/6/1</td>
                            <td class="align-middle white-space-nowrap text-left amount">إدارة الصيدلة</td>
                            <td class="align-middle text-left  white-space-nowrap payment">
                                <a class="badge badge rounded-pill badge-soft-success  align-items-center text-left nav-link active" href="#" style="background-color:#CCF6E4; color:#00864E;  height:25px;"  >
                                    <span data-feather="file  text-center">تم إنهائها </span>
                                    <i class="fas fa-file-contract ml-4"></i>
                                </a>
                            </td>
                            <td class="align-middle white-space-nowrap">
                                <div class="dropdown font-sans-serif">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-right" type="button" id="dropdown0" data-toggle="dropdown">
                                        <span class="fas fa-ellipsis-h fs--1"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right border py-2" aria-labelledby="dropdown0">
                                        <a class="dropdown-item" href="#">عرض</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item  " href="#!">إنهاء</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                            <td class="align-middle" style="width: 28px;">
                                <div class="form-check mb-2 mt-2 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="recent-purchase-0" data-bulk-select-row="data-bulk-select-row" /></div>
                            </td>
                            <td class="align-middle white-space-nowrap text-left name ">احلام محمد عبده الفاشق</td>
                            <td class="align-middle white-space-nowrap text-left email">2021/5/31</td>
                            <td class="align-middle white-space-nowrap text-left product">2021/6/1</td>
                            <td class="align-middle white-space-nowrap text-left amount">إدارة الصيدلة</td>
                            <td class="align-middle text-left  white-space-nowrap payment">
                                <a class="badge badge rounded-pill badge-soft-success  align-items-center text-left nav-link active" href="#" style="background-color:#FDE6D8; color:#A7613A;  height:25px;"  >
                                    <span data-feather="file  text-center">قيد المتابعة </span>
                                    <i class="fas fa-file-contract ml-3"></i>
                                </a>
                            </td>
                            <td class="align-middle white-space-nowrap">
                                <div class="dropdown font-sans-serif">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-right" type="button" id="dropdown0" data-toggle="dropdown">
                                        <span class="fas fa-ellipsis-h fs--1"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right border py-2" aria-labelledby="dropdown0">
                                        <a class="dropdown-item" href="#">عرض</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item  " href="#!">إنهاء</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                            <td class="align-middle" style="width: 28px;">
                                <div class="form-check mb-2 mt-2 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="recent-purchase-0" data-bulk-select-row="data-bulk-select-row" /></div>
                            </td>
                            <td class="align-middle white-space-nowrap text-left name ">احلام محمد عبده الفاشق</td>
                            <td class="align-middle white-space-nowrap text-left email">2021/5/31</td>
                            <td class="align-middle white-space-nowrap text-left product">2021/6/1</td>
                            <td class="align-middle white-space-nowrap text-left amount">إدارة الصيدلة</td>
                            <td class="align-middle text-left  white-space-nowrap payment">
                                <a class="badge badge rounded-pill badge-soft-success  align-items-center text-left nav-link active" href="{{route('OP_followedUp')}}" style="background-color:#D9DEFF; color:#5468FF;  height:25px;"  >
                                    <span data-feather="file  text-center">تم متابعتها </span>
                                    <i class="fas fa-file-contract ml-3"></i>
                                </a>
                            </td>
                            <td class="align-middle white-space-nowrap">
                                <div class="dropdown font-sans-serif">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-right" type="button" id="dropdown0" data-toggle="dropdown">
                                        <span class="fas fa-ellipsis-h fs--1"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right border py-2" aria-labelledby="dropdown0">
                                        <a class="dropdown-item" href="#">عرض</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item  " href="#!">إنهاء</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="btn-reveal-trigger">
                            <td class="align-middle" style="width: 28px;">
                                <div class="form-check mb-2 mt-2 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="recent-purchase-0" data-bulk-select-row="data-bulk-select-row" /></div>
                            </td>
                            <td class="align-middle white-space-nowrap text-left name ">احلام محمد عبده الفاشق</td>
                            <td class="align-middle white-space-nowrap text-left email">2021/5/31</td>
                            <td class="align-middle white-space-nowrap text-left product">2021/6/1</td>
                            <td class="align-middle white-space-nowrap text-left amount">إدارة الصيدلة</td>
                            <td class="align-middle text-left  white-space-nowrap payment">
                                <a class="badge badge rounded-pill badge-soft-success  align-items-center text-left nav-link active" href="#" style="background-color:#CCF6E4; color:#00864E;  height:25px;"  >
                                    <span data-feather="file  text-center">تم إنهائها </span>
                                    <i class="fas fa-file-contract ml-4"></i>
                                </a>
                            </td>
                            <td class="align-middle white-space-nowrap">
                                <div class="dropdown font-sans-serif">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-right" type="button" id="dropdown0" data-toggle="dropdown">
                                        <span class="fas fa-ellipsis-h fs--1"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right border py-2" aria-labelledby="dropdown0">
                                        <a class="dropdown-item" href="#">عرض</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item  " href="#!">إنهاء</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="btn-reveal-trigger ">
                            <td class="align-middle" style="width: 28px;">
                                <div class="form-check mb-2 mt-2 d-flex align-items-center"><input class="form-check-input" type="checkbox" id="recent-purchase-0" data-bulk-select-row="data-bulk-select-row" /></div>
                            </td>
                            <td class="align-middle white-space-nowrap text-left name ">احلام محمد عبده الفاشق</td>
                            <td class="align-middle white-space-nowrap text-left email">2021/5/31</td>
                            <td class="align-middle white-space-nowrap text-left product">2021/6/1</td>
                            <td class="align-middle white-space-nowrap text-left amount">إدارة الصيدلة</td>
                            <td class="align-middle text-left white-space-nowrap payment">
                                <a class="badge badge rounded-pill badge-soft-success  align-items-center text-left nav-link active" href="{{route('OP_followedUp')}}" style="background-color:#D9DEFF; color:#5468FF;  height:25px;"  >
                                    <span data-feather="file  text-center">تم متابعتها </span>
                                    <i class="fas fa-file-contract ml-3"></i>
                                </a>
                            </td>
                            <td class="align-middle white-space-nowrap">
                                <div class="dropdown font-sans-serif">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-right" type="button" id="dropdown0" data-toggle="dropdown">
                                        <span class="fas fa-ellipsis-h fs--1"></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right border py-2" aria-labelledby="dropdown0">
                                        <a class="dropdown-item" href="#">عرض</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item  " href="#!">إنهاء</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer"></div>

        </div>

        {{--End Content--}}

    </main>

@endsection
