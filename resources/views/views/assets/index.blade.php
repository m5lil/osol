


    <!-- /.modal -->
    <table dir="rtl" class="table table-striped table-hover datatable" id="assets-table">
        <thead>
        <tr>
            <th>#</th>
            <th>serial</th>
            <th><input type="text" placeholder="Name"><div style="display: none">name</div></th>
            <th><select name="" id=""><option value="used">Used</option><option value="new">New</option><option value="">All Conditions</option></select><div style="display: none">condition</div></th>
            <th>{!! Form::select('area_id',array_add($areas,'','All Area') ,null) !!}<div style="display: none">Areas</div></th>
            <th>{!! Form::select('branch_id',array_add($branches,'','All Branches') ,null) !!}<div style="display: none">Branches</div></th>
            <th>{!! Form::select('section_id',array_add($sections,'','All Sections') ,null) !!}<div style="display: none">Suppliers</div></th>
            <th>{!! Form::select('classification_id',array_add($sections,'','All classifications') ,null) !!}<div style="display: none">Classifications</div></th>
            <th>{!! Form::select('supplier_id',array_add($suppliers,'','All Suppliers') ,null) !!}<div style="display: none">Suppliers</div></th>
            <th>status</th>
            <th>Option</th>
        </tr>
        </thead>
    </table>




    <script type="text/javascript">
        $(function() {
            var table = $('#assets-table').DataTable({
                scrollY: 300,
                scrollX: 700,
                processing: true,
                serverSide: true,
                ajax: '{!! url('/assets/data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'serial', name: 'serial' },
                    { data: 'name', name: 'name' },
                    { data: 'condition', name: 'condition' },
                    { data: 'area_id', name: 'area_id' },
                    { data: 'branch_id', name: 'branch_id' },
                    { data: 'section_id', name: 'section_id' },
                    { data: 'classification_id', name: 'classification_id' },
                    { data: 'supplier_id', name: 'supplier_id' },
                    { data: 'status', name: 'status' },
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


