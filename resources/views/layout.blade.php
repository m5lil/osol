<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="Mahmoud Khalil">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="{{url('img/favicon.png')}}">
    <title>{{ setting('site_name') }} | @yield('title', 'Something') </title>

    <link href="{{ url('plugins/semantic/dist/semantic.rtl.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{url('css/animate.css')}}" rel="stylesheet">
    <link href="{{url('css/buttons.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{url('css/jquery.dataTables.min.css')}}" rel="stylesheet">

    <?php
        $bg = array('1.jpg', '2.jpg', '3.jpg', '4.jpg'); // array of filenames
        $i = rand(0, count($bg)-1); // generate random number size of the array
        $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
    ?>

    @yield('css')

    <!-- Main styles for this application -->
    <link href="{{url('css/style.css')}}" rel="stylesheet">

    <style type="text/css">
        body{
            background: url({{ url('images/' .  $selectedBg) }}) no-repeat;
            background-size:100%;

        }
    </style>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

{{--oncontextmenu="return false"--}}
<body  dir="rtl" >


    <div class="ui fluid container">

        <div class="ui  top attached menu">
            <div class="header item">
                برنامج أصول
            </div>
            <div class="ui dropdown item">
                <div class=""><i class="file icon"></i>ملف</div>
                <div class="menu">
                    <a href="#" class="item"><i class="tag icon"></i>إضافة أصل جديد</a>
                    <a href="#" class="item">
                        <i class="tags icon"></i>
                        جرد وإدارة الأصول
                    </a>
                    <a href="#" class="item">
                        <i class="print icon"></i>
                        طباعة التقارير &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    </a>
                    <div class="divider"></div>
                    <a href="#" class="item"><i class="windows close icon"></i>إغلاق البرنامج</a>
                </div>
            </div> {{--File Menu--}}
            <div class="ui dropdown item">
                <div class=""><i class="fork icon"></i> التصنيفات</div>
                <div class="menu">
                    <a href="#" class="item"><i class="add square icon"></i>إضافة منطقة</a>
                    <a href="#" class="item"><i class="add square icon"></i>إضافة منشأة</a>
                    <a href="#" class="item"><i class="add square icon"></i>إضافة قسم</a>
                    <a href="#" class="item"><i class="add square icon"></i>إضافة نوع</a>
                    <a href="#" class="item"><i class="add square icon"></i>إضافة موظف</a>
                    <div class="divider"></div>
                    <a href="#" class="item"><i class="add square icon"></i>إدارة المناطق</a>
                    <a href="#" class="item"><i class="add square icon"></i>إدارة المنشآت</a>
                    <a href="#" class="item"><i class="add square icon"></i>إدارة الأقسام</a>
                    <a href="#" class="item"><i class="add square icon"></i>إدارة الأنواع</a>
                    <a href="#" class="item"><i class="add square icon"></i>إدارة الموظفين  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </a>


                </div>
            </div> {{--File Menu--}}
            <div class="ui dropdown item">
                <div class=""><i class="shipping icon"></i>الموردين</div>
                <div class="menu">
                    <a href="#" class="item">إضافة مورد</a>
                    <a href="#" class="item">جرد الموردين</a>
                    <a href="#" class="item">طباعة كشوف الموردين</a>
                </div>
            </div> {{--File Menu--}}
            <div class="ui dropdown item">
                <div class=""><i class="settings icon"></i>عمليات</div>
                <div class="menu">
                    <a href="#" class="item">إستيراد أصول من اكسل</a>
                    <a href="#" class="item">نسخ إحتياطى لقاعدة البيانات</a>
                    <a href="#" class="item">إعدادات البرنامج</a>
                </div>
            </div> {{--File Menu--}}
            <div class="ui dropdown item">
                <div class=""><i class="help icon"></i>مساعدة</div>
                <div class="menu">
                    <a href="#" class="item">تعليمات ودروس للبرنامج</a>
                    <a href="#" class="item">إرسل إقتراحك لنا</a>
                    <a href="#" class="item">عن برنامج أصول</a>
                    <a href="#" class="item">إتصل بنا</a>
                </div>
            </div> {{--File Menu--}}

            <div class="right menu">
                <div class="ui dropdown icon item">
                    <i class="user icon"></i>
                    <div class="menu">
                        <a href="#" class="item">
                            إعدادات عامة
                        </a>
                        <a href="#" class="item">
                            تعديل
                        </a>
                        <div class="divider"></div>
                        <a href="#" class="item">
                            تسجيل خروج
                        </a>
                    </div>
                </div> {{--Setting Menu--}}
            </div>
        </div>

        <div class="ui bottom attached segment">
            <div class="ui ten doubling cards container">
                <a class="orange card">
                    <div class="image">
                        <img class="ui wireframe image" src="{{ url('img/011-price-tag.png') }}">
                    </div>
                    <div class="extra">
                          إضافة أصل
                    </div>
                </a>
                <a href="assets" class="openajax orange card">
                    <div class="image">
                        <img class="ui wireframe image" src="{{ url('img/007-horizontal.png') }}">
                    </div>
                    <div class="extra">
                        جرد الأصول
                    </div>
                </a>
                <a class="orange card">
                    <div class="image">
                        <img class="ui wireframe image" src="{{ url('img/003-business-1.png') }}">
                    </div>
                    <div class="extra">
                        إدارة المناطق
                    </div>
                </a>
                <a class="orange card">
                    <div class="image">
                        <img class="ui wireframe image" src="{{ url('img/010-store.png') }}">
                    </div>
                    <div class="extra">
                        إدارة المنشآت
                    </div>
                </a>
                <a class="orange card">
                    <div class="image">
                        <img class="ui wireframe image" src="{{ url('img/009-diagram.png') }}">
                    </div>
                    <div class="extra">
                        إدارة الأقسام
                    </div>
                </a>
                <a class="orange card">
                    <div class="image">
                        <img class="ui wireframe image" src="{{ url('img/004-material.png') }}">
                    </div>
                    <div class="extra">
                        إدارو الأنواع
                    </div>
                </a>
                <a class="orange card">
                    <div class="image">
                        <img class="ui wireframe image" src="{{ url('img/recruitment.png') }}">
                    </div>
                    <div class="extra">
                        إدارة الموظفين
                    </div>
                </a>
                <a class="orange card">
                    <div class="image">
                        <img class="ui wireframe image" src="{{ url('img/box.png') }}">
                    </div>
                    <div class="extra">
                        إستيراد أصول
                    </div>
                </a>
                <a class="orange card">
                    <div class="image">
                        <img class="ui wireframe image" src="{{ url('img/harddisk.png') }}">
                    </div>
                    <div class="extra">
                        نسخ إحتياطى
                    </div>
                </a>
                <a class="orange card">
                    <div class="image">
                        <img class="ui wireframe image" src="{{ url('img/newspaper.png') }}">
                    </div>
                    <div class="extra">
                        تقارير
                    </div>
                </a>
            </div> {{--Cards--}}

        </div>

        <div class="ui stacked segment" style="height: calc(100vh - 220px); background-color: rgba(255,255,255,0.9)">

            <h4 class="ui horizontal divider header">
                <i class="signal icon"></i>
                إحصائيات
            </h4>

            @yield('body')


        </div>

    </div>


    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('plugins/semantic/dist/semantic.js') }}"></script>
    <script src="{{ url('js/chart.min.js') }}"></script>
    <script src="{{ url('js/pace.min.js') }}"></script>
    <script src="{{ url('js/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('js/datatable/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('js/datatable/buttons.flash.min.js') }}"></script>
    <script src="{{ url('js/datatable/jszip.min.js') }}"></script>
    <script src="{{ url('js/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ url('js/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ url('js/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ url('js/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ url('js/datatable/buttons.colVis.min.js') }}"></script>


    <script>

        @if(Session::has('msg'))

        $.Notify({
            content: '{!! session('msg') !!}',
            type: 'success',
            icon: "<span class='mif-checkmark'></span>",
        });

        @endif

    </script>


    <!-- CoreUI main scripts -->
    <script src="{{ url('js/app.js') }}"></script>


</body>

</html>