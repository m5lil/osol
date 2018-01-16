{!! Form::open( array('route' => 'areas.store', 'id' => 'form', 'class' => 'form-horizontal')) !!}

<div class="form-group row">
    <label class="col-md-3 form-control-label" for="text-input">Name : </label>
    <div class="col-md-9">
        <div class="col-md-9">
            {!! Form::text('area_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="col-md-3 form-control-label" for="text-input">Details : </label>
    <div class="col-md-9">
        <div class="col-md-9">
            {!! Form::text('value', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<button type="submit" form="form" class="btn btn-primary">Save changes</button>

{!! Form::close() !!}

