<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/dataTables.jqueryui.min.css">


<div class="animated fadeIn">
    <table class="table table-striped table-hover  datatable" id="users-table">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th></th>
        </tr>
        </thead>
        {{-- <tbody>
            @foreach($user as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->admin}}</td>
                <td>
                        <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/page/{{$value->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/page/{{$value->id}}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/page/{{$value->id}}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach
        </tbody> --}}

    </table>

    <script type="text/javascript">
        $(function() {
            $('#users-table').DataTable({
                scrollY: 300,
                processing: true,
                serverSide: true,
                ajax: '{!! url('/users/data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'control', name: '' }
                ],
                oLanguage: {
                    "sProcessing":   "جارٍ التحميل...",
                    "sLengthMenu":   "أظهر _MENU_ مدخلات",
                    "sZeroRecords":  "لم يعثر على أية سجلات",
                    "sInfo":         "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
                    "sInfoEmpty":    "يعرض 0 إلى 0 من أصل 0 سجل",
                    "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
                    "sInfoPostFix":  "",
                    "sSearch":       "ابحث:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "الأول",
                        "sPrevious": "السابق",
                        "sNext":     "التالي",
                        "sLast":     "الأخير"
                    }
                },
                "responsive": true,

                "order": [[0, 'desc']],
                "pagingType": "full_numbers",
                aLengthMenu: [
                    [25, 50, 100, -1],
                    [25, 50, 100, "All"]
                ],
                iDisplayLength: 25,
                fixedHeader: true,


                dom: 'Brtlip',
                buttons: [
                    {
                        extend: 'copyHtml5',
                        text:      '<span class="mif-files-empty"></span>\n',
                        exportOptions: {
                            columns: [ 0, ':visible' ]
                        }
                    },
                    // {
                    //     extend:    'csvHtml5',
                    //     text:      '<span class="mif-file-code"></span>\n',
                    //     titleAttr: 'CSV'
                    // },
                    {
                        extend: 'excelHtml5',
                        text:      '<span class="mif-file-excel"></span>\n',
                        exportOptions: {
                            columns: [ 0, 1, 2 ]
                        }
                    },

                    {
                        extend: 'pdfHtml5',
                        text:      '<span class="mif-file-pdf"></span>\n',
                        pageSize: 'A4',
                        exportOptions: {
                            columns: [ 0, 1, 2 ]
                        },
                        customize: function (doc) {
                            doc.content[1].table.widths =
                                Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                        }

                    },
                    {
                        extend:    'print',
                        text:      '<span class="mif-printer"></span>\n',
                        exportOptions: {
                            columns: [ ':visible' ]
                        },
                        titleAttr: 'CSV'
                    },
                    {
                        extend: 'colvis',
                        text:      '<span class="mif-more-horiz"></span>\n',
                        background: false
                    }
                ],


            });

            table.columns().eq(0).each(function(colIdx) {
                $('input', table.column(colIdx).header()).on('keyup change', function() {
                    table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
                });
            });
            table.columns().eq(0).each(function(colIdx) {
                $('select', table.column(colIdx).header()).on('change', function() {
                    table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
                });
                $('select', table.column(colIdx).header()).on('click', function(e) {
                    e.stopPropagation();
                });
            });

        });
    </script>



</div>