<div class="animated fadeIn">
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#largeModal">
        Add
    </button>
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Area</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open( array('route' => 'classifications.store', 'id' => 'form', 'class' => 'form-horizontal')) !!}

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Name : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::text('class_name', null , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Detail : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::textarea('value', null , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Area : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::select('section_id', $sections ,null , ['class' => 'form-control']) !!}
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
    <table class="table table-striped table-hover " id="users-table">
        <thead>
        <tr>
            <th>#</th>
            <th>class name</th>
            <th>Details</th>
            <th>Section</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($classifications as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->class_name}}</td>
                <td>{{$value->value}}</td>
                <td>{{\App\Section::find($value->section_id)->section_name}}</td>
                <td>
                    <a class = 'sure' href = 'classifications/{{$value->id}}/delete' ><span class="mif-bin"></span></a> &nbsp;&nbsp;
                    <a class = '' href = 'classifications/{{$value->id}}/edit'><span class="mif-pencil"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>



</div>