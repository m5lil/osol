<div class="animated fadeIn">


        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Area</strong>
                    Edit
                </div>
                <div class="card-body">

                    {!! Form::model($section, array('route' => ['sections.update',$section->id], 'method' => 'PATCH', 'id' => 'form', 'class' => 'form-horizontal')) !!}

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Name : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::text('section_name', $section->section_name , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Detail : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::textarea('value', $section->value , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Area : </label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                {!! Form::select('area_id', $areas,null , ['class' => 'form-control']) !!}
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
