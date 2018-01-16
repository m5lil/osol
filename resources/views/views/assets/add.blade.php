<div class="animated fadeIn" dir="ltr">

    {!! Form::open( array('route' => 'assets.store', 'id' => 'form', 'class' => 'form-horizontal')) !!}

    {!! Form::text('user_id', Auth::user()->id , ['placeholder' => '', 'hidden'=>'hidden']) !!}


    <div class="grid">
        <div class="row cells2">
            <div class="cell">
                <div class="example" data-text="البيانات العامة">
                    <div class="grid">
                        <div class="row">
                            <div class="cell" dir="rtl">
                                <label>إسم الأصل </label>
                                <div class="input-control full-size big-input">
                                    {!! Form::text('name', null , ['placeholder' => 'إسم الأصل']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row cells2">
                            <div class="cell" dir="rtl">
                                <label>الباركود </label>
                                <div class="input-control full-size">
                                    {!! Form::text('barcode', null , ['placeholder' => '########']) !!}
                                </div>
                            </div>
                            <div class="cell" dir="rtl">
                                <label>الرقم التسلسلى : </label>
                                <div class="input-control full-size text">
                                    {!! Form::text('serial', null , ['placeholder' => '########']) !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="example" data-text="التصنيفات">
                    <div class="grid">
                        <div class="row cells2">
                            <div class="cell" dir="rtl">
                                <label>المنطقة : </label>
                                <div class="input-control full-size">
                                    {!! Form::select('area_id',$areas ,null , ['placeholder' => '']) !!}
                                </div>
                            </div>


                            <div class="cell" dir="rtl">
                                <label>المنشأة : </label>
                                <div class="input-control full-size">
                                    {!! Form::select('section_id', $sections, null , ['placeholder' => '']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="row cells2">


                            <div class="cell" dir="rtl">
                                <label>القسم : </label>
                                <div class="input-control full-size">
                                    {!! Form::select('classification_id', $classifications, null , ['placeholder' => '']) !!}
                                </div>
                            </div>


                            <div class="cell" dir="rtl">
                                <label>المورد : </label>
                                <div class="input-control full-size">
                                    {!! Form::select('supplier_id', $suppliers, null , ['placeholder' => '']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="example" data-text="">

                    <div class="grid">
                        <div class="row">
                            <div class="cell" dir="rtl">
                                <div class="input-control full-size">
                                    {!! Form::submit('حفظ' , ['class' => 'primary']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="cell">
                <div class="example" data-text="بيانات ثانوية">
                    <div class="grid">
                        <div class="row">
                            <div class="cell" dir="rtl">
                                <label>الوصف : </label>
                                <div class="input-control textarea full-size">
                                    {!! Form::textarea('description', null , ['placeholder' => '']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="row cells2">

                            <div class="cell" dir="rtl">
                                <label>الماركة : </label>
                                <div class="input-control full-size">
                                    {!! Form::text('brand', null , ['placeholder' => '']) !!}
                                </div>
                            </div>


                            <div class="cell" dir="rtl">
                                <label>الموديل : </label>
                                <div class="input-control full-size">
                                    {!! Form::text('model', null , ['placeholder' => '']) !!}
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="grid">
                        <div class="row cells2">

                            <div class="cell" dir="rtl">
                                <label>الضمان : </label>
                                <div class="input-control full-size">
                                    {!! Form::number('warranty', null , ['placeholder' => '']) !!}
                                </div>
                            </div>


                            <div class="cell" dir="rtl">
                                <label>الحالة : </label>
                                <div class="input-control full-size">
                                    {!! Form::select('condition', ['new'=>'new','used'=>'used'],null , ['placeholder' => '']) !!}
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="grid">
                        <div class="row cells2">

                            <div class="cell" dir="rtl">
                                <label>العمر الإفتراضى : </label>
                                <div class="input-control full-size">
                                    {!! Form::number('life_time', null , ['placeholder' => '']) !!}
                                </div>
                            </div>


                            <div class="cell" dir="rtl">
                                <label>نسبة الإهلاك : </label>
                                <div class="input-control full-size">
                                    {!! Form::number('depreciation_rate', null , ['placeholder' => '']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="example" data-text="معلومات إضاتفية">
                    <div class="grid">
                        <div class="row cells2">


                            <div class="cell" dir="rtl">
                                <label>موجود : </label>
                                <div class="input-control full-size">
                                    {!! Form::select('status', ['Away','Something'] ,null , ['placeholder' => '']) !!}
                                </div>
                            </div>


                            <div class="cell" dir="rtl">
                                <label>تاريخ الشراء : </label>
                                <div class="input-control full-size">
                                    {!! Form::date('purchase_date', null , ['placeholder' => '']) !!}
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="grid">
                        <div class="row cells2">

                            <div class="cell" dir="rtl">
                                <label>سعر الشراء : </label>
                                <div class="input-control full-size">
                                    {!! Form::number('purchase_price', null , ['placeholder' => '']) !!}
                                </div>
                            </div>


                            <div class="cell" dir="rtl">
                                <label>كود الإستلام : </label>
                                <div class="input-control full-size">
                                    {!! Form::text('receipt_code', null , ['placeholder' => '']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="row cells2">


                            <div class="cell" dir="rtl">
                                <label>تاريخ الإستلام : </label>
                                <div class="input-control full-size">
                                    {!! Form::date('receipt_date', null , ['placeholder' => '']) !!}
                                </div>
                            </div>


                            <div class="cell" dir="rtl">
                                <label>تاريخ الصيانة : </label>
                                <div class="input-control full-size">
                                    {!! Form::date('maintenance_date', null , ['placeholder' => '']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="row">


                            <div class="cell" dir="rtl">
                                <label>صورة : </label>
                                <div class="input-control full-size">
                                    {!! Form::file('image' , ['placeholder' => '']) !!}
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>


    {!! Form::close() !!}
</div>
