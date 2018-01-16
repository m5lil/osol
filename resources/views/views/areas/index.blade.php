<script src="{{ url('js/jquery.flip.min.js') }}"></script>


<script type="text/javascript">
    $("#card").flip({
        trigger: 'manual'
    });
</script>

<div class="s">
    <button onclick="$('#card').flip('toggle');" class="s" >
        <span class="mif-plus"></span>
    </button>
</div>

<div class="animated fadeIn">

    <div id="card" style="margin-top: 20px; ">
            <table class=" bg-white front table table-striped table-hover " id="users-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Area Name</th>
                    <th>Details</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($areas as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->area_name}}</td>
                        <td>{{$value->value}}</td>
                        <td>
                            <a class='sure' href='areas/{{$value->id}}/delete'><span class="mif-bin"></span></a> &nbsp;&nbsp;
                            <a class='setupajax' href='areas/{{$value->id}}/edit'><span class="mif-pencil"></span></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        <div class="back " >
            {!! Form::open( array('route' => 'areas.store', 'id' => 'form', 'class' => 'form-horizontal')) !!}

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
    </div>

</div>


