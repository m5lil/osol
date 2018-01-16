<div class="animated fadeIn">


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Area</strong>
                    Edit
                </div>
                <div class="card-body">

                    {!! Form::model($classification, array('route' => ['classifications.update',$classification->id], 'method' => 'PATCH', 'id' => 'form', 'class' => 'form-horizontal')) !!}

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Name : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::text('classification_name', $classification->class_name , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Detail : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::textarea('value', $classification->value , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Section : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::select('section_id', $sections,null , ['class' => 'form-control']) !!}
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
