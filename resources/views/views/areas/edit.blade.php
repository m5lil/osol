<div class="animated fadeIn">

    {!! Form::model($area, array('route' => ['areas.update',$area->id], 'method' => 'PATCH', 'id' => 'form', 'class' => 'form-horizontal')) !!}
    <div class="example" data-text="">
        <div class="grid">
            <div class="row">
                <label>الإسم : </label>
                <div class="cell">
                    <div class="input-control full-size">

                        {!! Form::text('area_name', null , ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <label>تفاصيل أخرى : </label>
                <div class="cell">
                    <div class="input-control full-size">

                        {!! Form::text('value', null , ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="cell" dir="rtl">
                    <div class="input-control full-size">
                        {!! Form::submit('حفظ' , ['class' => 'primary']) !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
    {!! Form::close() !!}
</div>