@extends('layouts.admin')
@section('content')

<section class="horizontal-grid" id="horizontal-grid">
<div class="row white-row">
    <div class="col-sm-12 col-lg-6 col-md-12">
        <div class="card leftSide">
            <div class="card-header">
                <h4 class="card-title">
                    <img src="https://db.expand.ps/images/info.png" width="32" height="32">
                    {{trans('admin.project_name')}}
                    </h4>
                <div class="heading-elements1" style="display: none;right: 87px; top: 10px;">
                {{trans('admin.project_status')}}
                </div>
                <div class="heading-elements1 onOffArea" style="display: none;    top: 10px;">
                    <div class="onoffswitch" onclick="ShowModal()">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitchHeader">
                        <label class="onoffswitch-label" for="myonoffswitchHeader">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="card-content collapse show">
                <div class="card-body" style="padding-bottom: 0px;">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-lg-7 col-md-12 pr-0 pr-s-12">
                                <div class="form-group">
                                    <div class="input-group" style=" width: 100% !important;">
                                        <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                    {{trans('admin.project_name')}}
                                    </span>
                                        </div>
                                        <input type="text" id="ProjectName" class="form-control ac ui-autocomplete-input" placeholder="{{trans('admin.project_name')}}" name="ProjectName" autocomplete="off">
                                        <input type="hidden" id="pk_i_id" name="pk_i_id" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                    {{trans('admin.project_num')}}
                                    </span>
                                        </div>
                                        <input type="text" id="ProjectNo" class="form-control" placeholder="{{trans('admin.project_num')}}" name="ProjectNo">


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="input-group" style=" width: 100% !important;">
                                        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
            {{trans('admin.project_start_date')}}
            </span>
                                        </div>
                                        <input type="text" id="dateStart" name="dateStart" data-mask="00/00/0000" maxlength="10" class="form-control eng-sm singledate valid " placeholder="dd/mm/yyyy" aria-describedby="basic-addon1" autocomplete="off">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
            {{trans('admin.project_end_date')}}
            </span>
                                        </div>
                                        <input type="text" id="dateEnd" name="dateEnd" class="form-control eng-sm singledate valid" data-mask="00/00/0000" autocomplete="off" maxlength="10" placeholder="dd/mm/yyyy" aria-describedby="basic-addon1">

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-7 col-md-12 pr-s-12">
                                <div class="form-group">
                                    <div class="input-group w-s-87 mt-s-6" style="width: 100% !important;">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                            {{trans('admin.manager')}}
                                            </span>
                                        </div>
                                        <select type="text" id="pinc6" name="pich6" class="form-control valid" onchange="getEmpInfo($(this).val(),$('#Department'),$('#pos'),0);hideSelected($(this).val())" aria-invalid="false">
                                            <option> - </option>
                                            <option value="63"> employee  </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="input-group" style="">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                        {{trans('admin.department')}}
                                        </span>
                                    </div>

                                    <select type="text" disabled="" id="Department" name="Department" class="form-control">
                                        <option> - </option>
                                       <option value="25"> مراكزخدمات الجمهور </option>
                                    </select>
                                </div>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-12 col-md-12 pr-s-12">
                                <div class="form-group">
                                    <div class="input-group w-s-87 mt-s-6" style="width: 100% !important;">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                            {{trans('admin.subscribers')}}
                                            </span>
                                        </div>
                                        <select type="text" id="subscribers" name="subscribers[]" multiple class="form-control valid" onchange="getEmpInfo($(this).val(),$('#Department'),$('#pos'),0);hideSelected($(this).val())" aria-invalid="false">
                                            <option value="63"> subscribers  </option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-1 mb-2 hide">
                                <i class="fas fa-users fa-lg" onclick="show();" style="    margin-left: 14px; color: #1e9ff2;margin-top: 15px;"></i>
                            </div>
                        </div>
                            <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="input-group" style="width: 100% !important;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                    {{trans('admin.project_cost')}}
                                                    </span>
                                                </div>
                                                <input id="Projectcost" name="Projectcost" class="form-control numFeild " placeholder="00.00" style="    border-radius: 0rem !important;">

                                                <select id="CurrencyID" name="CurrencyID" type="text" class="form-control" style="padding: 0 !important;height: 32px !important;">
                                                    <option> - </option>
                                                    <option value="shekel" selected=""> {{trans('admin.shekel')}} </option>
                                                    <option value="dollar"> {{trans('admin.dollar')}} </option>
                                                    <option value="dinar">{{trans('admin.dinar')}}  </option>
                                                    <option value="euro">{{trans('admin.euro')}}  </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                        <div class="EnabledItem" style="direction: rtl;border:1px solid #ff0000; color:#ff0000; text-align: center;display: none">المستخدم معطل</div>

                        <div  id="ParticipatedEmployees">
                        <div class="row" style="margin-left: 0;">
                            <h5> {{trans('admin.subscribers')}}</h5>
                            <table style="width:100%; margin-top: 0;margin-left: 3%;" class="detailsTB table">
                                <tbody><tr>
                                <th scope="col"># </th>                                    
                                    <th scope="col">{{trans('admin.subscriber_name')}} </th>
                                    <th scope="col">{{trans('admin.business_name')}}</th>
                                    <th scope="col">{{trans('admin.job_title')}}</th>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>mohamed</td>
                                    <td>hatem </td>
                                    <td>مهندس</td>
                                </tr>

                                </tbody><tbody id="userList">

                                </tbody>
                            </table>
                        </div>
                        </div>
                        <div class="card" style=" margin-left: -3%; display: none;">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <img src="https://db.expand.ps/images/cost.jpeg" width="32" height="32">تكلفة المشروع / الممول</h4>
                            </div>
                        </div>
                        <div class="row" style="display: none;">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                        شرط الدفع
                                        </span>
                                    </div>
                                    <select type="text" id="PaymentTerm" name="PaymentTerm" class="form-control">
                                        <option> - </option>
                                                                                                        <option value="149"> كفاله حسن تنفيذ </option>
                                                                                                        <option value="152"> بعد الانتهاء </option>
                                                                                                        <option value="157">        كل يو م </option>
                                        
                                    </select>
                                    <div class="input-group-append" onclick="QuickAdd(28,'PaymentTerm','Payment Term')">
                                        <span class="input-group-text input-group-text2">
                                            <i class="fa fa-external-link-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-header" style="padding-top:0px;">
                            <h4 class="card-title">
                                <img src="/images/msg.png" width="32" height="32"> 
                                {{trans('admin.archieve')}}
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
                                <img src="/images/msg.png" onclick="$('#OrgArchModal').modal('show')" style="cursor:pointer">
                                <div class="form-group">
                                    <a onclick="$('#OrgArchModal').modal('show')" style="color:#000000"> {{trans('admin.archieve')}} 
                                    <span id="msgStatic" style="color:#1E9FF2"><b>(0)</b></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-md-12">
        <div class="card rightSide" style="min-height:594.938px">
                <div class="card-header">
                    <h4 class="card-title"><img src="https://db.expand.ps/images/maps-icon.png" width="32" height="32"> {{trans('admin.address')}}</h4>
                </div>
            <div class="card-content collapse show">
                <div class="card-body">
                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
 
                                            <select id="CityID" name="CityID" type="text" class="form-control selectFullCorner" onchange="doGetChild($(this).val(),8,'TownID')">
                                                <option disabled> -- {{trans('admin.city')}} --</option>     
                                                @foreach($city as $cit)
                                                 <option  value="{{$cit->id}}">  {{$cit->name}} </option>
                                                @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select id="area_data" name="TownID" type="text" class="form-control selectFullCorner" onchange="doGetChild($(this).val(),9,'AreaID')">
                                                <option disabled>   {{trans('admin.area')}} </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                                <select id="region_data" name="AreaID" type="text" class="form-control selectFullCorner" onchange="doGetChild($(this).val(),10,'NeighborID')">
                                                    <option value="0" disabled>   {{trans('admin.region')}}  </option>                                                                         
                                                 </select>
                                                <div class="input-group-append">
                                                    <span class="input-group-text input-group-text2">
                                                    <i class="fa fa-external-link-alt" style="color:#ffffff"></i>
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group" style="width: 98% !important;">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                            {{trans('admin.address_details')}}
                                            </span>
                                        </div>
                                        <textarea type="text" id="AddressDetails" class="form-control" 
                                        placeholder="{{trans('admin.address_details')}}" name="AddressDetails"
                                         style="height: 40px;"></textarea>
                                        <div class="input-group-append hidden-xs hidden-sm">
                                        <span class="input-group-text input-group-text2" style="color:#ffffff">
                                        <i class="fa fa-external-link-alt"></i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group" style="width: 98% !important;">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                {{trans('admin.notes')}}
                                                </span>
                                        </div>
                                        <textarea type="text" id="Note" class="form-control"
                                         placeholder="{{trans('admin.notes')}}" name="Note" 
                                         style="height: 40px;"></textarea>
                                        <div class="input-group-append hidden-xs hidden-sm">
                                            <span class="input-group-text input-group-text2" style="color:#ffffff">
                                            <i class="fa fa-external-link-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <table style="margin-left: 2% !important;width:100%; margin-top: 0;" class="detailsTB  tablesj">
                            <tbody>
                                <tr>
                                    <td width="50%">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    {{trans('admin.select_financier')}}
                                                </span>
                                            </div>
                                            <select type="text" id="sponsor" name="sponsor[]" class="form-control">
                                                <option> - </option>
                                                <option value="33"> مؤسسة المانحون العرب  </option>
                                        </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                {{trans('admin.financie_percentage')}}
                                                </span>
                                            </div>
                                            <input type="text" id="cost1" name="cost[]" class="form-control " aria-describedby="basic-addon1" style="    padding-left: 10px !important;padding-right: 0 !important;">
                                        </div>
                                    </td>
                                    <td>

                                        <i class="fas fa-plus-circle" id="plusElement" style="padding-top:10px;position: relative;left: 3%;cursor: pointer;color: #1E9FF2;font-size: 15pt;"></i>

                                    </td>
                                </tr>

                            </tbody>
                            <tbody id="other">

                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <table style="    margin-left: 2% !important;width:100%; margin-top: 0;" class="detailsTB tablesj">
                            <tbody>
                            <tr>
                                <td width="50%">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                            {{trans('admin.supplier_company')}}
                                            
                                            </span>
                                        </div>
                                        <select type="text" id="Contractor" name="Contractor[]" class="form-control" onchange="getSupplierInfo($(this).val(),$('#pinc8'))" style="padding-right: 0 !important;padding-left: 0rem !important;">
                                            <option> - </option>
                                            <option value="20"> شركة bci </option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                            {{trans('admin.Contact')}}
                                            </span>
                                        </div>
                                        <input type="text" id="pinc8" name="pinc8" class="form-control alphaFeild" placeholder="" aria-describedby="basic-addon1" style="    padding-left: 10px !important;padding-right: 0 !important;">
                                    </div>
                                </td>
                                <td>
                                    <i class="fas fa-plus-circle" id="plusElement3" style="padding-top:10px;position: relative;left: 3%;cursor: pointer;color: #1E9FF2;font-size: 15pt;"></i>
                                </td>
                            </tr>

                            </tbody>
                            <tbody id="other3">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-header" style="padding-top:0px;">
                <h4 class="card-title" style="    height: 36px;"> 
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
            <div class="card" style="display:none">
                <div class="card-header">
                    <h4 class="card-title"><img src="https://db.expand.ps/images/sponsor.png" width="32" height="32"> المقاول</h4>
                    <!-- <a class="heading-elements-toggle">
                        <i class="ft-align-justify font-medium-3"></i></a> -->
                    <div class="heading-elements" style="display: none;">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">

                        <div class="row">
                            <table style=" margin-left: 2% !important;width:100%; margin-top: 0;" class="detailsTB table">
                                <tbody>
                                    <tr>
                                    <th scope="col">مكتب الهندسة</th>
                                    <th scope="col">الشخص المسؤول</th>
                                    <th scope="col"></th>
                                </tr>
                                <tr>
                                    <td>
                                        <select type="text" id="EngOffice" name="EngOffice[]" class="form-control" onchange="getOfficeInfo($(this).val(),$('#pinc7'))" style="padding-right: 0 !important;padding-left: 0rem !important;">
                                            <option> - </option>
                                                                                                                <option value="1"> مكتب كنان الهندسي </option>
                                                                                                                <option value="2"> مكتب حمزة  </option>
                                                                                                                <option value="3"> مكتب الهدى الهندسي </option>
                                                                                                                <option value="4"> مكتب الأحمد </option>
                                                                                                                <option value="5"> مكتب x </option>
                                                                                                                <option value="6"> مكتب فلسطين للمساحة والهندسة والخدمات العقارية  </option>
                                                                                                                <option value="7"> مكتب زهراء للمساحة  </option>
                                                                                                                <option value="8"> مكتب المهندس وائل  </option>
                                                                                                                <option value="9"> مكتب السلام للمحاسبة  </option>
                                                                                                                <option value="10"> مكتب السلام الهندسي  </option>
                                                                                                                <option value="11"> مكتب النجاح الهندسي  </option>
                                                                                                                <option value="12"> مكتب الكرمل للمساحة  </option>
                                                                                                                <option value="13"> مكتب الوفاء الهندسي  </option>
                                                                                                                <option value="14"> مكتب الحنبلي  </option>
                                                                                                                <option value="15"> مكتب العودة  </option>
                                                                                                                <option value="16"> مكتب عتمة الهندسي  </option>
                                                                                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" id="pinc7" name="pinc7" class="form-control alphaFeild" placeholder="" aria-describedby="basic-addon1" style="    padding-left: 10px !important;padding-right: 0 !important;">
                                    </td>
                                    <td>
                                        <i class="fas fa-plus-circle" id="plusElement2" style="padding-top:10px;position: relative;left: 3%;cursor: pointer;color: #1E9FF2;font-size: 15pt;"></i>
                                    </td>
                                </tr>

                                </tbody>
                                <tbody id="other2">

                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group" style=" width: 96% !important;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                    ملاحظات
                                                    </span>
                                                </div>
                                                <textarea type="text" id="NoteAR" class="form-control" placeholder="ادخل ملاحظاتك هنا" name="NoteAR" style="height: 35px;"></textarea>
                                                <div class="input-group-append hidden-xs hidden-sm">
                                                    <span class="input-group-text input-group-text2" style="color:#ffffff">
                                                    <i class="fa fa-external-link-alt"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md attachs-section">
                                <img src="https://db.expand.ps/images/upload.png" width="40" height="40">
                                <span class="attach-header">مرفقات
                                <span id="attach-required">*</span>
                                <span class="attach-icons">
                                    <a href="#" onclick="document.getElementById('formDataupload-file[]').click(); return false" class="attach-icon"><i class="fas fa-paperclip"></i></a>
                                    <a href="#" onclick="document.getElementById('formDataupload-image[]').click(); return false" class="attach-icon"><i class="far fa-image"></i></a>
                                    <a onclick="showLinkModal('formData')" class="attach-icon"><i class="fas fa-link"></i></a>
                                </span>
                            </span>
                            </div>
                        </div>
                        <div class="row attachs-body">
                            <div class="form-group col-12 mb-2">
                                <input type="hidden" name="fromname" value="formData">
                                <input type="file" class="form-control-file" id="formDataupload-file[]" multiple="" name="formDataUploadFile[]" onchange="doUploadAttach('formData')" style="display: none" accept=".doxc, .xlsx, .pptx, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,text/plain, application/pdf">
                                <input type="file" class="form-control-file" id="formDataupload-image[]" multiple="" name="formDataUploadImage[]" onchange="doUploadAttach('formData')" accept="image/*" style="display: none">
                                <div class="row formDataImagesArea">
                                </div>
                                <div class="row formDataFilesArea" style="margin-left: 0px;">
                                </div>
                                <div class="row formDataLinkArea" style="margin-left: 0px;">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="form-actions" style="border-top:0px;">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary" id="saveBtn">ارسال <i class="ft-thumbs-up position-right"></i></button>
                            <button type="button" class="btn btn-primary" id="updateBtn" style="display: none" onclick="UpdateForm()">تعديل <i class="ft-thumbs-up position-right"></i></button>
                            <a href="https://db.expand.ps/addProject" type="reset" class="btn btn-warning">اعادة تعيين
                                <i class="ft-refresh-cw position-right"></i>
                            </a>
                        </div>
                    </div>

        </div>

    </div>

</div>

</section>



@stop
@section('script')



@endsection