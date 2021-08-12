@extends('layouts.admin')
@section('content')

<section id="hidden-label-form-layouts">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="card rSide">
                                <div class="card-header">
                                    <h4 class="card-title"><img src="https://db.expand.ps/images/Office_Equipment_-_088_-_Printer-512.png" height="32">
                                    معلومات المعدات
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12 ">
                                                <div class="form-group">
                                                    <div class="input-group w-s-87">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                اسم الجهاز
                                                            </span>
                                                        </div>
                                                        <input type="text" id="Equipment" class="form-control ac ui-autocomplete-input" placeholder="" name="Equipment" autocomplete="off">
                                                        <input type="hidden" id="pk_i_id" name="pk_i_id" value="0">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                العلامة التجارية 
                                                            </span>
                                                        </div>
                                                        <select type="text" id="brand" name="brand" class="form-control">
                                                            <option> - </option>
                                                                                                                        <option value="92"> HP </option>
                                                                                                                        <option value="125"> Samsung </option>
                                                                                                                        <option value="147"> Donfor </option>
                                                                                                                        <option value="148"> kyocera </option>
                                                                                                                        <option value="182"> هكسين </option>
                                                                                                                        <option value="189"> IBM </option>
                                                                                                                        <option value="2048"> nokia </option>
                                                                                                                        <option value="2069"> epson </option>
                                                                                                                        <option value="2132"> اليكو </option>
                                                                                                                    </select>
                                                        <div class="input-group-append" onclick="QuickAdd(23,'brand','Brand')">
                                                            <span class="input-group-text input-group-text2">
                                                                <i class="fa fa-external-link-alt"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                نوع المعدات
                                                            </span>
                                                        </div>
                                                        <select type="text" id="Eqtype" name="Eqtype" class="form-control">
                                                            <option> - </option>
                                                                                                                            <option value="93"> طابعات  </option>
                                                                                                                            <option value="126"> ماكنة تصوير  </option>
                                                                                                                            <option value="146"> محمول كهربائي </option>
                                                                                                                            <option value="190"> محولات الضغط العالي  </option>
                                                                                                                            <option value="212"> جهاز كمبيوتر </option>
                                                                                                                            <option value="2207"> تابلت </option>
                                                                                                                    </select>
                                                        <div class="input-group-append" onclick="QuickAdd(24,'Eqtype','Equipment Type')">
                                                            <span class="input-group-text input-group-text2">
                                                            <i class="fa fa-external-link-alt"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <img src="https://db.expand.ps/images/equipment.jpg" style="cursor: pointer;" width="150" height="100" id="equipmentimg" onclick="document.getElementById('formDataimgPic2').click(); return false">
                                                <input type="hidden" id="equipmentimgpath" name="equipmentimgpath">
                                                <input type="file" class="form-control-file" id="formDataimgPic2" name="imgPic" style="display: none" onchange="doUploadPic1('formData1','equipmentimg','equipmentimgpath')">
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                حالة الجهاز
                                                            </span>
                                                        </div>
                                                        <select type="text" id="EqtStatus" name="EqtStatus" class="form-control" onchange="if($(this).val()==2128)$('.failDate').show();else $('.failDate').hide();">
                                                            <option> - </option>
                                                                                                                            <option value="2182"> فعال </option>
                                                                                                                            <option value="2183"> تالف </option>
                                                                                                                            <option value="2199"> مخالفات  </option>
                                                                                                                    </select>
                                                        <div class="input-group-append" onclick="QuickAdd(50,'EqtStatus','حالة الجهاز')">
                                                            <span class="input-group-text input-group-text2">
                                                            <i class="fa fa-external-link-alt"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                               <div class="form-group">
                                                    <div class="input-group w-s-87 failDate" style="display:none; width: 100% !important;">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                تاريخ الإتلاف
                                                            </span>
                                                        </div>
                                                        <input type="text" id="failDate" class="form-control" placeholder="dd/mm/yyyy" name="failDate">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                               <div class="form-group">
                                                    <div class="input-group w-s-87">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                الرقم التسلسلي
                                                            </span>
                                                        </div>
                                                        <input type="text" id="SerialNo" class="form-control " placeholder="" name="SerialNo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group w-s-87" style="width: 100% !important;">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                الرقم الداخلي .
                                                            </span>
                                                        </div>
                                                        <input type="text" id="InternalNo" class="form-control " placeholder="" name="InternalNo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group w-s-87" style="width: 100% !important;">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                العدد
                                                            </span>
                                                        </div>
                                                        <input type="text" id="PiceCnt" class="form-control " placeholder="" name="PiceCnt">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    القسم
                                                                </span>
                                                            </div>
                                                            <select type="text" id="Department" name="Department" class="form-control">
                                                                <option> - </option>
                                                                                                                                    <option value="24">الادارة </option>
                                                                                                                                    <option value="31">الدائرة المالية </option>
                                                                                                                                    <option value="4">الدائرة الهندسية </option>
                                                                                                                                    <option value="37">الكمبيوتر والشؤون الادارية</option>
                                                                                                                                    <option value="45">المساحة</option>
                                                                                                                                    <option value="38">دائرة الصحة والمياه والكهرباء</option>
                                                                                                                                    <option value="29">رئاسة البلدية</option>
                                                                                                                                    <option value="39">قسم البرمجة والتطوير</option>
                                                                                                                                    <option value="42">قسم التطوير</option>
                                                                                                                                    <option value="40">قسم الخدمات العامة </option>
                                                                                                                                    <option value="43">قسم الخدمات اللوجستيه </option>
                                                                                                                                    <option value="44">قسم الرقابة والتطوير </option>
                                                                                                                                    <option value="36">قسم الصحة </option>
                                                                                                                                    <option value="7">قسم الكهرباء </option>
                                                                                                                                    <option value="8">قسم المياه </option>
                                                                                                                                    <option value="41">قسم النفايات</option>
                                                                                                                                    <option value="25">مراكزخدمات الجمهور</option>
                                                                                                                            </select>

                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group w-s-87" style="width: 100% !important;">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1">
                                                                    الشخص المسؤول
                                                                </span>
                                                            </div>
                                                            <select type="text" id="pinc3" name="pinc3" class="form-control">
                                                                <option> - </option>
                                                                                                                                    <option value="63">EMP</option>
                                                                                                                                    <option value="76">hfsfdsfsd</option>
                                                                                                                                    <option value="62">م. احمد حج حمد</option>
                                                                                                                                    <option value="28">احمد بشير </option>
                                                                                                                                    <option value="22">اديب فرج الله</option>
                                                                                                                                    <option value="39">اسحاق نمر</option>
                                                                                                                                    <option value="57">Anas</option>
                                                                                                                                    <option value="41">انس طميزة</option>
                                                                                                                                    <option value="9">ايمن</option>
                                                                                                                                    <option value="34">ايمن طميزة</option>
                                                                                                                                    <option value="50">م. ايهاب العمري</option>
                                                                                                                                    <option value="8">أ. بلال عساف</option>
                                                                                                                                    <option value="15">تامر غالب</option>
                                                                                                                                    <option value="61">تامر العلي </option>
                                                                                                                                    <option value="59">ثابت علي</option>
                                                                                                                                    <option value="71">جهاد حمد </option>
                                                                                                                                    <option value="75">حاتم حمد</option>
                                                                                                                                    <option value="29">حازم عمر</option>
                                                                                                                                    <option value="67">حسام مصطفى </option>
                                                                                                                                    <option value="11">حسن سليميه</option>
                                                                                                                                    <option value="65">حسن علاونة</option>
                                                                                                                                    <option value="13">م. حسين البزور</option>
                                                                                                                                    <option value="21">حمزة فراجيين</option>
                                                                                                                                    <option value="12">خليل عمر</option>
                                                                                                                                    <option value="6">ربيع الشرفا</option>
                                                                                                                                    <option value="31">زينات طميزة</option>
                                                                                                                                    <option value="73">سامي حمد </option>
                                                                                                                                    <option value="18">شحاده فرج الله</option>
                                                                                                                                    <option value="66">شيماء عامر</option>
                                                                                                                                    <option value="23">طارق طميزة</option>
                                                                                                                                    <option value="72">طلال حمد </option>
                                                                                                                                    <option value="32">طلعت عواد</option>
                                                                                                                                    <option value="27">عبد الرحمن شوبكي</option>
                                                                                                                                    <option value="10">عبد الرحمن طميزة</option>
                                                                                                                                    <option value="35">عبد الفتاح طميزة</option>
                                                                                                                                    <option value="33">عبد اللطيف فواز</option>
                                                                                                                                    <option value="46">علي طميزة</option>
                                                                                                                                    <option value="60">عمر عبد السلام </option>
                                                                                                                                    <option value="26">غسان طميزة</option>
                                                                                                                                    <option value="58">فادي عبد الغني</option>
                                                                                                                                    <option value="69">فراس حمد </option>
                                                                                                                                    <option value="70">كمال حمد </option>
                                                                                                                                    <option value="49">مجد عامر</option>
                                                                                                                                    <option value="55">مجلس عورتا </option>
                                                                                                                                    <option value="54">مجلس مجدل بني فاضل</option>
                                                                                                                                    <option value="68">م. محمد منسوب</option>
                                                                                                                                    <option value="42">محمد خالد</option>
                                                                                                                                    <option value="44">م.محمد الصوايفه</option>
                                                                                                                                    <option value="24">محمد ابو اسعد</option>
                                                                                                                                    <option value="17">محمود ابوزلطه</option>
                                                                                                                                    <option value="56">ابو عمر</option>
                                                                                                                                    <option value="36">مسلم طميزة</option>
                                                                                                                                    <option value="52">مصطفى ابو صقر </option>
                                                                                                                                    <option value="74">معتدل دويكات</option>
                                                                                                                                    <option value="7">م. معتز كميل </option>
                                                                                                                                    <option value="45">معتز العسود</option>
                                                                                                                                    <option value="43">منار عوض</option>
                                                                                                                                    <option value="38">منال عواد</option>
                                                                                                                                    <option value="51">Muna</option>
                                                                                                                                    <option value="19">موسى طميزة</option>
                                                                                                                                    <option value="20">ميساء مطر</option>
                                                                                                                                    <option value="25">ناصر خلاوي</option>
                                                                                                                                    <option value="40">نيفين نمر </option>
                                                                                                                                    <option value="14">م . هاني العمري</option>
                                                                                                                                    <option value="53">علي ابو حسن </option>
                                                                                                                                    <option value="30">يوسف نصار</option>
                                                                                                                                    <option value="37">يونس ابو عمر</option>
                                                                                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        
                                        <div class="row" style="margin-left: 0">
                                            <div class="form-group col-md-4 mb-2" id="equipmentdvtext5" style="display:none">
                                                <label class="sr-only" for="dateinput1"></label>
                                                 تاريخ بدء الايجار<br>
                                                <input type="text" id="dateinput1" name="dateinput1" data-mask="00/00/0000" maxlength="10" class="form-control singledate1 valid" placeholder="dd/mm/yyyy" autocomplete="off" aria-required="true" style="border-radius: 3px !important;height:36px;
">
                                            </div>
                                            <div class="form-group col-md-4 mb-2" id="equipmentdvtext6" style="display:none">
                                                <label class="sr-only" for="dateinput2"></label>
                                                تاريخ نهاية الايجار :<br>
                                                <input type="text" id="dateinput2" onblur="SubtractDates($('#dateinput1').val(),$(this).val(),'dateinpute3')" name="dateinput2" data-mask="00/00/0000" maxlength="10" class="form-control singledate valid" placeholder="dd/mm/yyyy" autocomplete="off" aria-required="true" style="border-radius: 3px !important;height:36px;">
                                            </div>
                                            <div class="form-group col-md-4 mb-2" id="equipmentdvtext7" style="display:none">
                                                <label class="sr-only" for="dateinput3"> </label>
                                                مدة التأجير<br>
                                                <input type="text" id="dateinpute3" name="dateinput3" class="form-control numFeild" style="border-radius: 3px !important;height:36px;">
                                            </div>
                                        </div>

                                        <div class="row" style="margin-left: 0">
                                            <div class="form-group col-md-4 mb-2" id="equipmentdvtext8" style="display:none">
                                                <label class="sr-only" for="dateinput1"></label>
                                                تكلفة التأجير<br>
                                                <div class="row">
                                                    <div class="col-lg-6" style="padding-right: 0px !important;">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">

                                                                <input id="Cost" name="cost" class="form-control numFeild" placeholder="00.00" style="height: 34px;border-radius: 3px !important;width: 95px;">

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">

                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <select id="CurrencyID" name="CurrencyID" type="text" class="form-control" style="border-radius: 3px !important;padding:0 !important;">
                                                                    <option> $ </option>
                                                                                                                                            <option value="26" selected=""> شيكل </option>
                                                                                                                                            <option value="27"> دولار </option>
                                                                                                                                            <option value="28"> دينار </option>
                                                                                                                                            <option value="31"> يورو </option>
                                                                                                                                    </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4 mb-2" id="equipmentdvtext9" style="display:none">
                                                <label class="sr-only" for="dateinput2"></label>
                                                دورية كل :<br>
                                                <select type="text" id="periodinput1" name="periodinput1" class="form-control" style="border-radius: 3px !important;">
                                                    <option>  -  </option>
                                                                                                            <option value="131">يوميا </option>
                                                                                                            <option value="132">اسبوعي</option>
                                                                                                            <option value="133">شهري</option>
                                                                                                            <option value="134" selected="">سنوي</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4 mb-2" id="equipmentdvtext10" style="display:none">
                                                <label class="sr-only" for="dateinput4"> </label>
                                                يدفع كل :<br>
                                                <select type="text" id="paymentinput3" name="paymentinput3" class="form-control" style="border-radius: 3px !important;">
                                                    <option>  -  </option>
                                                                                                            <option value="135">يوميا</option>
                                                                                                            <option value="136">اسبوعيا</option>
                                                                                                            <option value="137">شهريا</option>
                                                                                                            <option value="138">نصف سنوي</option>
                                                                                                            <option value="139">سنوي</option>
                                                                                                            <option value="140">كل 10 ايام </option>
                                                                                                    </select>

                                            </div>
                                        </div>
                                        <div class="row" style="   margin-left: 0px;">
                                            <div class="form-group col-lg-12" id="equipmentdvtext11" style="display:none">
                                                <div class="input-group" style="width:100% !important;">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">
                                                        الشخص المسؤول عن الدفع
                                                        </span>
                                                    </div>
                                                    <select type="text" id="pinc4" name="pinc4" class="form-control">
                                                        <option> - </option>
                                                                                                                    <option value="63">EMP</option>
                                                                                                                    <option value="76">hfsfdsfsd</option>
                                                                                                                    <option value="62">م. احمد حج حمد</option>
                                                                                                                    <option value="28">احمد بشير </option>
                                                                                                                    <option value="22">اديب فرج الله</option>
                                                                                                                    <option value="39">اسحاق نمر</option>
                                                                                                                    <option value="57">Anas</option>
                                                                                                                    <option value="41">انس طميزة</option>
                                                                                                                    <option value="9">ايمن</option>
                                                                                                                    <option value="34">ايمن طميزة</option>
                                                                                                                    <option value="50">م. ايهاب العمري</option>
                                                                                                                    <option value="8">أ. بلال عساف</option>
                                                                                                                    <option value="15">تامر غالب</option>
                                                                                                                    <option value="61">تامر العلي </option>
                                                                                                                    <option value="59">ثابت علي</option>
                                                                                                                    <option value="71">جهاد حمد </option>
                                                                                                                    <option value="75">حاتم حمد</option>
                                                                                                                    <option value="29">حازم عمر</option>
                                                                                                                    <option value="67">حسام مصطفى </option>
                                                                                                                    <option value="11">حسن سليميه</option>
                                                                                                                    <option value="65">حسن علاونة</option>
                                                                                                                    <option value="13">م. حسين البزور</option>
                                                                                                                    <option value="21">حمزة فراجيين</option>
                                                                                                                    <option value="12">خليل عمر</option>
                                                                                                                    <option value="6">ربيع الشرفا</option>
                                                                                                                    <option value="31">زينات طميزة</option>
                                                                                                                    <option value="73">سامي حمد </option>
                                                                                                                    <option value="18">شحاده فرج الله</option>
                                                                                                                    <option value="66">شيماء عامر</option>
                                                                                                                    <option value="23">طارق طميزة</option>
                                                                                                                    <option value="72">طلال حمد </option>
                                                                                                                    <option value="32">طلعت عواد</option>
                                                                                                                    <option value="27">عبد الرحمن شوبكي</option>
                                                                                                                    <option value="10">عبد الرحمن طميزة</option>
                                                                                                                    <option value="35">عبد الفتاح طميزة</option>
                                                                                                                    <option value="33">عبد اللطيف فواز</option>
                                                                                                                    <option value="46">علي طميزة</option>
                                                                                                                    <option value="60">عمر عبد السلام </option>
                                                                                                                    <option value="26">غسان طميزة</option>
                                                                                                                    <option value="58">فادي عبد الغني</option>
                                                                                                                    <option value="69">فراس حمد </option>
                                                                                                                    <option value="70">كمال حمد </option>
                                                                                                                    <option value="49">مجد عامر</option>
                                                                                                                    <option value="55">مجلس عورتا </option>
                                                                                                                    <option value="54">مجلس مجدل بني فاضل</option>
                                                                                                                    <option value="68">م. محمد منسوب</option>
                                                                                                                    <option value="42">محمد خالد</option>
                                                                                                                    <option value="44">م.محمد الصوايفه</option>
                                                                                                                    <option value="24">محمد ابو اسعد</option>
                                                                                                                    <option value="17">محمود ابوزلطه</option>
                                                                                                                    <option value="56">ابو عمر</option>
                                                                                                                    <option value="36">مسلم طميزة</option>
                                                                                                                    <option value="52">مصطفى ابو صقر </option>
                                                                                                                    <option value="74">معتدل دويكات</option>
                                                                                                                    <option value="7">م. معتز كميل </option>
                                                                                                                    <option value="45">معتز العسود</option>
                                                                                                                    <option value="43">منار عوض</option>
                                                                                                                    <option value="38">منال عواد</option>
                                                                                                                    <option value="51">Muna</option>
                                                                                                                    <option value="19">موسى طميزة</option>
                                                                                                                    <option value="20">ميساء مطر</option>
                                                                                                                    <option value="25">ناصر خلاوي</option>
                                                                                                                    <option value="40">نيفين نمر </option>
                                                                                                                    <option value="14">م . هاني العمري</option>
                                                                                                                    <option value="53">علي ابو حسن </option>
                                                                                                                    <option value="30">يوسف نصار</option>
                                                                                                                    <option value="37">يونس ابو عمر</option>
                                                                                                            </select>
                                                    <div class="input-group-append">
                                                        <a class="input-group-text input-group-text2">
                                                            <i class="fa fa-external-link-alt" style="color:#ffffff"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="EnabledItem" style="direction: rtl;border:1px solid #ff0000; color:#ff0000; text-align: center;display: none">UserDisable</div>
                                        
                                        <div class="row" style="margin-left: 0">
                                            <div class="form-group col-md-4 mb-2" id="equipmentdvtext1" style="display: block">
                                                <label class="sr-only" for="dateinput">تاريخ الشراء</label>
                                                تاريخ الشراء<br>
                                                <input type="text" id="dateinput" data-mask="00/00/0000" maxlength="10" class="form-control singledate valid" placeholder="dd/mm/yyyy" autocomplete="off" aria-required="true" style="border-radius:3px !important;height:38px;">
                                            </div>
                                            <div class="form-group col-md-4 mb-2" id="equipmentdvtext2" style="display: block">
                                                <label class="sr-only" for="Wdateinput">تاريخ انتهاء الكفالة</label>
                                                تاريخ انتهاء الكفالة<br>
                                                <input type="text" id="Wdateinput" data-mask="00/00/0000" maxlength="10" class="form-control singledate valid" placeholder="dd/mm/yyyy" autocomplete="off" aria-required="true" style="border-radius:3px !important;height:38px;">
                                            </div>
                                            <div class="form-group col-md-4 mb-2" id="equipmentdvtext3" style="display: block">
                                                <label class="sr-only" for="CW">السعر الأصلي</label>
                                                التكلفة الكلية<br>
                                                <div class="row">
                                                    <div class="col-md-12" style="padding-right: 0px !important;">
                                                        <div class="input-group" style=" width: 106% !important;">

                                                            <input id="OrgSalary2" name="OrgSalary" class="form-control numFeild " placeholder="00.00" style="    border-radius: 0rem !important;">
                                                            <select id="OrgCurrencyID2" name="OrgCurrencyID" type="text" class="form-control" style=" height: 37px !important;">
                                                                    <option> - </option>
                                                                                                                                            <option value="26" selected=""> شيكل </option>
                                                                                                                                            <option value="27"> دولار </option>
                                                                                                                                            <option value="28"> دينار </option>
                                                                                                                                            <option value="31"> يورو </option>
                                                                                                                                    </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="input-group w-s-87" style="width:100% !important">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                ملاحظات الصيانة
                                                            </span>
                                                        </div>
                                                        <textarea type="text" id="MantinanceNote" class="form-control" placeholder="ملاحظات الصيانة" name="MantinanceNote" style="border-radius:3px !important;height: 35px;" aria-invalid="false"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="card lSide" style="min-height:555.5px">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        <img src="https://db.expand.ps/images/sponsor.png" width="32" height="32">
                                        مانح / مورد
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row hide">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        الحي
                                                    </span>
                                                    </div>
                                                                                                        <select type="text" id="Neighborhod" name="Neighborhod" class="form-control" onchange="doGetChild($(this).val(),11,'Street')">
                                                        <option> - </option>
                                                                                                                    <option value="278">المنطقة الشمالية</option>
                                                                                                                    <option value="279">المنطقة الغربية</option>
                                                                                                                    <option value="320">بيتا</option>
                                                                                                                    <option value="342">الحاه الفوقا</option>
                                                                                                            </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">
                                                        الشارع
                                                        </span>
                                                    </div>
                                                    <select type="text" id="Street" name="Street" class="form-control">
                                                        <option> - </option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group" style="width: 99% !important;">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                    تفاصيل العنوان
                                                    </span>
                                                    </div>
                                                    <textarea type="text" id="AddressDetailsAR" class="form-control" placeholder="تفاصيل العنوان" name="AddressDetailsAR" style="height: 35px;"></textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group" id="equipmentdvtext12" style="display:block;">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">
                                                        الشركة الموردة
                                                        </span>
                                                    </div>

                                                    <select onchange="getSupplierInfo($(this).val(),'formData1 #PHnum1')" type="text" id="Supplier" name="Supplier" class="form-control">
                                                        <option> - </option>
                                                                                                                    <option value="1">بلدية اذنا</option>
                                                                                                                    <option value="2">شركة اكسباند </option>
                                                                                                                    <option value="3">شركة طميزكوللمحروقات</option>
                                                                                                                    <option value="4">دفنة </option>
                                                                                                                    <option value="5">مطبعة خويرة </option>
                                                                                                                    <option value="6">بلدية بيت فوريك </option>
                                                                                                                    <option value="7">شركة المتحدون العرب للتوريدات </option>
                                                                                                                    <option value="8">شركة الفا ون للتوريدات الكهربائية </option>
                                                                                                                    <option value="9">شركة عالم المستقبل</option>
                                                                                                                    <option value="10">مجلس الخدمات المشترك للنفايات الصلبة </option>
                                                                                                                    <option value="11">ساتكو</option>
                                                                                                                    <option value="12">اوفتك </option>
                                                                                                                    <option value="13">شركة سنديان </option>
                                                                                                                    <option value="14">وزارة الزراعة </option>
                                                                                                                    <option value="15">شركة القناطر</option>
                                                                                                                    <option value="16">الفيحاء</option>
                                                                                                                    <option value="17">شركة السماح </option>
                                                                                                                    <option value="18">شركة النبراس للتكنلوجيا </option>
                                                                                                                    <option value="19">شركة الامل </option>
                                                                                                                    <option value="20">شركة bci</option>
                                                                                                            </select>
                                                    <div class="input-group-append hide" onclick="">
                                                        <a class="input-group-text input-group-text2" href="https://db.expand.ps/addSuppler">
                                                            <i class="fa fa-external-link-alt"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group" id="equipmentdvtext13" style="display:none;">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">
                                                        المؤجر
                                                        </span>
                                                    </div>

                                                        <select onchange="getSupplierInfo($(this).val(),'formData1 #PHnum1')" type="text" id="Lessor" name="Lessor" class="form-control">
                                                            <option> - </option>
                                                                                                                            <option value="1">بلدية اذنا</option>
                                                                                                                            <option value="2">شركة اكسباند </option>
                                                                                                                            <option value="3">شركة طميزكوللمحروقات</option>
                                                                                                                            <option value="4">دفنة </option>
                                                                                                                            <option value="5">مطبعة خويرة </option>
                                                                                                                            <option value="6">بلدية بيت فوريك </option>
                                                                                                                            <option value="7">شركة المتحدون العرب للتوريدات </option>
                                                                                                                            <option value="8">شركة الفا ون للتوريدات الكهربائية </option>
                                                                                                                            <option value="9">شركة عالم المستقبل</option>
                                                                                                                            <option value="10">مجلس الخدمات المشترك للنفايات الصلبة </option>
                                                                                                                            <option value="11">ساتكو</option>
                                                                                                                            <option value="12">اوفتك </option>
                                                                                                                            <option value="13">شركة سنديان </option>
                                                                                                                            <option value="14">وزارة الزراعة </option>
                                                                                                                            <option value="15">شركة القناطر</option>
                                                                                                                            <option value="16">الفيحاء</option>
                                                                                                                            <option value="17">شركة السماح </option>
                                                                                                                            <option value="18">شركة النبراس للتكنلوجيا </option>
                                                                                                                            <option value="19">شركة الامل </option>
                                                                                                                            <option value="20">شركة bci</option>
                                                                                                                </select>
                                                    <div class="input-group-append hide">
                                                        <span class="input-group-text input-group-text2">
                                                            <i class="fa fa-external-link-alt" style="color: #FFFFFF;"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="input-group" style="width: 100% !important;">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input-group-text1" id="basic-addon1">
                                                        <img src="https://db.expand.ps/images/jawwal35.png">
                                                        </span>
                                                    </div>
                                                    <input type="text" id="PHnum1" name="PHnum1" maxlength="10" class="form-control noleft numFeild" placeholder="050000000" aria-describedby="basic-addon1">

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        المؤسسة المانحة
                                                    </span>
                                                    </div>

                                                    <select onchange="getSponserInfo($(this).val(),'formData1 #PHnum2')" type="text" id="SponsorName" name="SponsorName" class="form-control">
                                                        <option> - </option>
                                                                                                                    <option value="1">وزارة الحكم المحلي </option>
                                                                                                                    <option value="2">test</option>
                                                                                                                    <option value="3">السيد مدير ضريبة الاملاك جنوب الخليل  المحترم</option>
                                                                                                                    <option value="4">لمن يهمة الامر</option>
                                                                                                                    <option value="5">الاخ محمود المصري حفظه الله مدير مكتب عمل ترقوميا </option>
                                                                                                                    <option value="6">مؤسسة الاغا</option>
                                                                                                                    <option value="7">صندوق تطوير و اقراض البلديات </option>
                                                                                                                    <option value="8">وزارة العمل </option>
                                                                                                                    <option value="9">وزارة الصناعة</option>
                                                                                                                    <option value="10">مديرية الحكم المحلي  الخليل </option>
                                                                                                                    <option value="11">مديرية الحكم المحلي</option>
                                                                                                                    <option value="12">الحكم المحلي </option>
                                                                                                                    <option value="13">التربيه والتعليم </option>
                                                                                                                    <option value="14">أمانة السر</option>
                                                                                                                    <option value="15">وزارة الزراعه </option>
                                                                                                                    <option value="16">مجلس تنظيم قطاع الكهرباء </option>
                                                                                                                    <option value="17">محافظ جنين </option>
                                                                                                                    <option value="18">شركة توزيع كهرباء الشمال </option>
                                                                                                                    <option value="19">وزارة الصحة </option>
                                                                                                                    <option value="20">الحكم المحلي  جنين </option>
                                                                                                                    <option value="21">بلدية برقين </option>
                                                                                                                    <option value="22">وزارة المالية </option>
                                                                                                                    <option value="23">فاتن </option>
                                                                                                                    <option value="24">الامل </option>
                                                                                                                    <option value="25">وزارة الداخلية </option>
                                                                                                                    <option value="26">وزارة التنميه </option>
                                                                                                                    <option value="27">مؤسسة عبد الحميد قطان </option>
                                                                                                                    <option value="28">بلدية بيتا </option>
                                                                                                                    <option value="29">وزارة الشؤون الاجتماعية</option>
                                                                                                                    <option value="30">وزارة التربية والتعليم </option>
                                                                                                                    <option value="31">مؤسسة الحق </option>
                                                                                                                    <option value="32">جمعيه الائتلاف </option>
                                                                                                                    <option value="33">مؤسسة المانحون العرب </option>
                                                                                                            </select>
                                                    <div class="input-group-append hide">
                                                        <a class="input-group-text input-group-text2" href="https://db.expand.ps/addSponsor">
                                                        <i class="fa fa-external-link-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="input-group" style="width:100% !important;">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input-group-text1" id="basic-addon1">
                                                        <img src="https://db.expand.ps/images/jawwal35.png">
                                                        </span>
                                                    </div>
                                                    <input type="text" id="PHnum2" name="PHnum2" maxlength="10" class="form-control noleft numFeild" placeholder="050000000" aria-describedby="basic-addon1">

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-12" id="equipmentdvtext14" style="display:none;">
                                            <textarea type="text" id="MantinanceNote1" class="form-control" placeholder="ملاحظات الصيانة" name="MantinanceNote1" style="border-radius:3px !important;height: 35px;"></textarea>
                                        </div>
                                    </div>
                                            
                                    
                                        <div class="card-header" style="padding-top:0px;">
                                        	<h4 class="card-title">
                                        		<img src="/images/msg.png" width="32" height="32"> 
                                            الأرشيف
                                        </h4>
                                        	<!--  <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a> -->
                                        	<div class="heading-elements" style="display: none">
                                        		<ul class="list-inline mb-0">
                                        			<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        			<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        			<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        			<li><a data-action="close"><i class="ft-x"></i></a></li>
                                        		</ul>
                                        	</div>
                                        
                                        </div>
                                        <div class="card-content collapse show">
                                        	<div class="card-body" style="padding-bottom: 0px;">
                                        		<div class="row" style="text-align: center">
                                        			<div class="col-md-2 w-s-50" style="padding: 0px;">
                                        				<div class="form-group">
                                        					<img src="/images/msg.png" onclick="$('#msgModal').modal('show')" style="cursor:pointer">
                                        					<div class="form-group">
                                        						<a onclick="$('#msgModal').modal('show')" style="color:#000000">الأرشيف
                                        						<span id="msgStatic" style="color:#1E9FF2"><b>(0)</b></span></a>
                                        					</div>
                                        				</div>
                                        			</div>
                                        		</div>
                                        	</div>
                                        </div>                                
                                    <div class="row" style="display: none">
                                        <div class="col-md attachs-section">
                                            <img src="https://db.expand.ps/images/upload.png" width="40" height="40">
                                            <span class="attach-header">مرفقات
                                            <span id="attach-required">*</span>
                                            <span class="attach-icons">
                                                <a href="#" onclick="document.getElementById('formData1upload-file[]').click(); return false" class="attach-icon"><i class="fas fa-paperclip"></i></a>
                                                <a href="#" onclick="document.getElementById('formData1upload-image[]').click(); return false" class="attach-icon"><i class="far fa-image"></i></a>
                                                <a onclick="showLinkModal('formData1')" class="attach-icon"><i class="fas fa-link"></i></a>
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="row attachs-body" style="display: none">
                                        <div class="form-group col-12 mb-2">
                                            <input type="hidden" name="fromname" value="formData1">
                                            <input type="file" class="form-control-file" id="formData1upload-file[]" multiple="" name="formData1UploadFile[]" onchange="doUploadAttach('formData1')" style="display: none" accept=".doxc, .xlsx, .pptx, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,text/plain, application/pdf">
                                            <input type="file" class="form-control-file" id="formData1upload-image[]" multiple="" name="formData1UploadImage[]" onchange="doUploadAttach('formData1')" accept="image/*" style="display: none">
                                            <div class="row formData1ImagesArea">
                                            </div>
                                            <div class="row formData1FilesArea" style="margin-left: 0px;">
                                            </div>
                                            <div class="row formData1LinkArea" style="margin-left: 0px;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions" style="border-top:0px;">
                                        <div class="text-right">
                                                                                    <button type="submit" class="btn btn-primary" id="saveBtn">حفظ <i class="ft-thumbs-up position-right"></i></button>
                                                                                        <button type="button" onclick="redirectURL('linkIcon1-tab1')" class="btn btn-warning">إعادة تعيين <i class="ft-refresh-cw position-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection