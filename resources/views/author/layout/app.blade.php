<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">
    <title>Thông tin bảo hành</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap"
          rel="stylesheet">

    @include('author.layout.styles')

    @include('author.layout.scripts')

</head>

<body>
<div id="app">
    <div class="main-wrapper">

        <!-- @include('author.layout.nav')

         @include('author.layout.sidebar')-->

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                   <!-- <h1>@yield('heading')</h1>-->
                    <h1>Thông tin bảo hành</h1>
                    <div class="ml-auto">
                        @yield('button')
                    </div>
                </div>
                <!--@yield('main_content')-->

                <div class="section-body">
                    <div class="invoice">
                        <div class="invoice-print">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="invoice-title">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2>Hóa đơn</h2>
                                            </div>  
                                            <div class="col-md-6">
                                                <h5>Mã bảo hành #PD0001</h5> 
                                            </div>     
                                            
                                        </div>    
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <address>
                                                <strong>Thông tin khách hàng</strong>
                                                <br>TRỊNH SỸ KIÊN<br>
                                                285 Hai Bà Trưng<br>
                                                Hồ Chí Minh, Việt Nam
                                            </address>
                                        </div>
                                        <div class="col-md-6 text-md-right">
                                            <address>
                                                <strong>Ngày làm</strong><br>
                                                23-02-2022
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="section-title">Thông tin đơn hàng </div>
                                    <p class="section-lead"></p>
                                    <hr class="invoice-above-table">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-md">
                                            <tr>
                                                <th>#</th>
                                                <th>Lab</th>
                                                <th class="text-center">Nha Khoa</th>
                                                <th class="text-center">Loại răng</th>
                                                <th class="text-right">Số lượng răng</th>
                                                <th class="text-right">Vị trí</th>
                                                <th class="text-right">Loại phục hồi</th>
                                                <th class="text-right">Ngày làm</th>
                                                <th class="text-right">Ngày bảo hành</th>
                                                <th class="text-right">Tình trạng</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>KTsmile</td>
                                                <td class="text-center">APONA</td>
                                                <td class="text-center">Loại răng</td>
                                                <td class="text-right">20</td>
                                                <td class="text-right">15:25;35:45</td>
                                                <td class="text-right">Cercon HT(Đức)</td>
                                                <td class="text-right">10-09-2023</td>
                                                <td class="text-right">10-09-2024</td>
                                                <td class="text-right">Đang bảo hành</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>KTsmile</td>
                                                <td class="text-center">APONA</td>
                                                <td class="text-center">Loại răng</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">26:28</td>
                                                <td class="text-right">Cercon</td>
                                                <td class="text-right">12-09-2023</td>
                                                <td class="text-right">12-09-2024</td>
                                                <td class="text-right">Đang bảo hành</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!--<div class="row mt-4">
                                        <div class="col-lg-12 text-right">
                                            <div class="invoice-detail-item">
                                                <div class="invoice-detail-name">Total</div>
                                                <div class="invoice-detail-value invoice-detail-value-lg">$380</div>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <hr class="about-print-button">
                        <div class="text-md-right">
                            <a href="{{ route('logout') }}" class="btn btn-warning btn-icon icon-left text-white print-invoice-button">Quay lại</a>
                            <!--<a href="javascript:window.print();"
                               class="btn btn-warning btn-icon icon-left text-white print-invoice-button"><i
                                    class="fas fa-print"></i> Quay lại</a>-->
                        </div>
                    </div>
                </div>

            </section>
        </div>

    </div>
</div>

@include('author.layout.scripts_footer')


@if($errors->any())
@foreach($errors->all() as $error)
<script>
    iziToast.error({
        title: '',
        position: 'topRight',
        message: '{{ $error }}',
    });
</script>
@endforeach
@endif

@if(session()->get('error'))
<script>
    iziToast.error({
        title: '',
        position: 'topRight',
        message: '{{ session()->get('error') }}',
    });
</script>
@endif

@if(session()->get('success'))
<script>
    iziToast.success({
        title: '',
        position: 'topRight',
        message: '{{ session()->get('success') }}',
    });
</script>
@endif

</body>
</html>
