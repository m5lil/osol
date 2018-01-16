<div class="animated fadeIn">

        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>User</strong>
                    Edit
                </div>
                <div class="card-body">

                    {!! Form::model($supplier, array('route' => ['suppliers.update',$supplier->id], 'method' => 'PATCH', 'id' => 'form', 'class' => 'form-horizontal')) !!}

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Name : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::text('supplier_name', $supplier->supplier_name , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">address : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::text('address', $supplier->address , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">contact : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::number('contact', $supplier->contact , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}


                </div>
                <div class="card-footer">
                    <button type="submit" form="form" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
