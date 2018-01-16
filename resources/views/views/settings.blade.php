<div class="animated fadeIn">
    {!! Form::open(['action' => 'SettingController@update', 'id' => 'form', 'method' => 'post' ,'class' => 'form-horizontal','files' => true]) !!}
    <div class="grid">
        <div class="example" data-text="">
            <div class="row cells2">
                @foreach ($settings as $setting)
                    @if($setting->type == 1)
                        <div class="cell" dir="rtl">
                            <label for="">{{ $setting->set_slug }}</label>
                            <div class="input-control full-size text">
                                {!! Form::text($setting->set_name, $setting->value , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    @elseif($setting->set_name == 'statue')
                        <div class="cell" dir="rtl">
                            <label for="">{{ $setting->set_slug }}</label>
                            <div class="input-control full-size text">
                                {!! Form::select($setting->set_name,['online' => 'Online', 'offline' => 'Offline'] , $setting->value , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    @elseif($setting->set_name == 'logo')
                        <div class="cell" dir="rtl">
                            <label for="">{{ $setting->set_slug }}</label>
                            <div class="input-control full-size" >
                                {!! Form::file($setting->set_name) !!}
                            </div>
                        </div>
                    @endif
                @endforeach
                @foreach ($settings as $setting)
                        @if($setting->type == 2)
                            <div class="cell" dir="rtl">
                                <label for="">{{ $setting->set_slug }}</label>
                                <div class="input-control textarea full-size">
                                    {!! Form::textarea($setting->set_name, $setting->value , ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        @endif
                @endforeach
            </div>
        </div>
    </div>

    {!! Form::close() !!}
</div>