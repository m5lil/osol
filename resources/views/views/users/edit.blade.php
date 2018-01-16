<div class="animated fadeIn">
            <div class="example">
                <div class="grid">

                    {!! Form::model($user, array('route' => ['users.update',$user->id], 'method' => 'PATCH', 'id' => 'form', 'class' => 'form-horizontal')) !!}

                    <div class="row">
                        <label class="col-md-3 form-control-label" for="text-input">الغسم : </label>
                        <div class="cell">
                            <div class="input-control full-size">
                                {!! Form::text('name', $user->name , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 form-control-label" for="text-input">البريد الألكترونى : </label>
                        <div class="cell">
                            <div class="input-control full-size">
                                {!! Form::text('email', $user->email , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 form-control-label" for="text-input">الرقم السرى : </label>
                        <div class="cell">
                            <div class="input-control full-size">
                                {!! Form::password('password' , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 form-control-label" for="text-input">الصلاحيات : </label>
                        <div class="cell">
                            <div class="input-control textarea multiple full-size">
                                {!! Form::select('roles[]' , \App\Branch::pluck('branch_name','branch_name')->toArray(), null, ['multiple' => 'multiple', 'class' => 'form-control']) !!}
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
