<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/dataTables.jqueryui.min.css">


<div class="animated fadeIn">
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#largeModal">
        Add
    </button>
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open( array('route' => 'suppliers.store', 'id' => 'form', 'class' => 'form-horizontal')) !!}

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Name : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::text('supplier_name', null , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">address : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::text('address', null , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">contact : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::number('contact', null , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="form" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <table class="table table-striped table-hover  datatable" id="suppliers-table">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Contact</th>
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
            $('#suppliers-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! url('/suppliers/data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'supplier_name', name: 'supplier_name' },
                    { data: 'contact', name: 'contact' },
                    { data: 'control', name: '' }
                ],
                "stateSave": true,
                "responsive": true,
                "order": [[0, 'desc']],
                "pagingType": "full_numbers",
                aLengthMenu: [
                    [25, 50, 100, 200, -1],
                    [25, 50, 100, 200, "All"]
                ],
                iDisplayLength: 25,
                fixedHeader: true,
                "dom": '<"pull-left text-left" T><"pullright" i><"clearfix"><"pull-right text-right col-lg-6" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-6" pi > <"pull-left text-left" l><"clearfix"> '
                ,initComplete: function ()
                {
                    var r = $('#data tfoot tr');
                    r.find('th').each(function(){
                        $(this).css('padding', 8);
                    });
                    $('#data thead').append(r);
                    $('#search_0').css('text-align', 'center');
                }
            });
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
    </script>


</div>