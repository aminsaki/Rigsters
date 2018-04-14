<div class="container panel panel-default">

    <?php if (isset($_SESSION['error_massgetss'])): ?>
        <div class="alert-danger btn btn-danger">
            <?php echo $_SESSION['error_massgetss']; ?>
        </div>
    <?php endif; ?>
    <form method="post" action="" enctype="multipart/form-data">
        <table class="table table-bordered">

            <tr>
                <td>
                    <div class="alert alert-success">
                        <h4> متقاضی محترم لطفا به ترتیب جداول را پر نمایید.</h4>
                    </div>
                </td>
            </tr>
            <tr>
                <td><h4>اطلاعات شخصی</h4></td>
            </tr>

            <tr class="resutl">

                <td colspan="8">


                    <h5 class=" alert alert-danger">ابتدا عکس خود را انتخاب و دکمه
                        ارسال را بزنید ،حجم تصویر کمتر از 1 مگابایت باشد-فرمت های مجاز jpeg-jpg-png-gif
                        هستند</h5>
                    <input type="file" name="userfile" id="userfile"
                           class="btn btn-info col-md-4 pull-left col-md-offset-4" id="exampleInputFile">
                    <div id="image-show" class="col-md-4 pull-left col-md-offset-4"></div>

                </td>

            </tr>
        </table><!--End TABLE-->
        <table class="table table-bordered ">
            <tbody class="form-horizontal">
            <tr>
                <td>
                    <div class="controls">
                        <label for="exampleInputName1">نام و نام خانوادگی <span class="reds">*</span></label>
                        <input type="text" name="name_fmaily" class="div-control" id="name_fmaily">

                    </div>
                </td>
                <td>
                    <div class="div-inline">
                        <div class="div-group">
                            <label for="exampleInputName2"> نام پدر <span class="reds">*</span></label>
                            <input type="text" name="fader" class="div-control fader" id="fader">

                        </div>
                    </div>
                </td>
                <td>
                    <div class="div-inline">
                        <div class="div-group">
                            <label for="exampleInputName3"> شماره شناسنامه <span class="reds">*</span></label>
                            <input type="text" maxlength="10" name="shsh" class="div-control " id="shsh"
                                   placeholder="لطفا فقط عدد وارد کنید">


                        </div>
                </td>
                <td>
                    <div class="div-group">
                        <label for="exampleInputName4">محل صدور <span class="reds">*</span></label>
                        <input type="text" name="mhalsordore" class=" div-control mhalsordore" id="mhalsordore">

                    </div>
                </td>
            </tr><!---row1---->
            <tr>
                <td>
                    <div class="div-inline">

                        <div class="div-group">
                            <label for="exampleInputName1"> کد ملی <span class="reds">*</span></label>
                            <input type="text" name="codemell" class="div-control" id="codemell" maxlength="10"
                                   placeholder="لطفا فقط عدد وارد کنید">

                        </div>
                    </div>
                </td>
                <td>
                    <div class="div-inline">
                        <div class="div-group">
                            <label for="exampleInputName2">محل تولد <span class="reds">*</span></label>

                            <input type="text" name="locallave" class="div-control locallave" id="locallave">

                        </div>
                    </div>
                </td>
                <td class="sets">
                    <label>
                        تاریخ تولد <span class="reds">*</span>
                    </label>
                    <div class="form-inline">
                        <input type="text" id="date1" class="div-control">

                    </div>
                <td>
                    <div class="div-inline">
                        <div class="div-group">
                            <label for="empty"> جنسیت <span class="reds">*</span></label>
                            <select name="jnseat" id="jnseat" class="div-control form-control">
                                <option></option>
                                <option> مرد</option>
                                <option> زن</option>
                            </select>
                        </div>
                    </div>
                </td>

            </tr><!--row2---->
            <tr>
                <td>
                    <div class="div-inline">
                        <div class="div-group">
                            <lable for="empty"> وضعیت تأهل <span class="reds">*</span></lable>
                            <select name="vazetthoall" id="vazetthoall" class="form-control">
                                <option></option>
                                <option> مجرد</option>
                                <option>متاهل</option>
                            </select>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="div-inline">
                        <div class="div-group">
                            <label for="exampleInputName2">تعداد فرزند</label>
                            <input type="text" name="tadatefrenzand" class="div-control tadatefrenzand"
                                   id="exampleInputName12" maxlength="2" placeholder="لطفا فقط عدد وارد کنید">


                        </div>
                    </div>
                </td>

                <td colspan="2">
                    <div class="div-inline">

                        <div class="div-group">
                            <label for="exampleInputName3">ملیت <span class="reds">*</span></label>
                            <input type="text" name="melet" class="div-control form-control melet" id="melet">

                        </div>
                    </div>
                </td>


            </tr><!---row---->
            <tr>
                <td colspan="2">
                    <div class="div-group">
                        <div class="div-inline">


                            <label for="exampleInputName1"> وضعیت سلامت روحی و جسمی <span class="reds">*</span>

                                <input type="radio" name="slamet" id="slamet_no" value="خیر" class="slamet"> خیر
                                <input type="radio" name="slamet" id="slamet_yes" value="بله" class="slamet">
                                بله


                        </div>

                        <div class="div-group" id="commit_slamet">
                            <label for="exampleInputName1">در صورت خیر توضیح دهید</label>
                            <textarea class="form-control slamet_text" name="slamet_text" rows="3"></textarea>


                        </div>
                </td>
                <td colspan="2">
                    <div class="div-group  div-inline">
                        <label for="exampleInputName1"> خدمت نظام وظیفه <span class="reds">*</span>

                            <input type="radio" name="nzamvzef" class="z" value="پایان خدمت"
                                   id="optionsRaios24"> پایان خدمت
                            <input type="radio" name="nzamvzef" class="z" value="مشمول" id="optionsRaios24">
                            مشمول
                            <input type="radio" name="nzamvzef" class="ns" value="معاف" id="optionsRaios24">معاف
                            <input type="radio" name="nzamvzef" class="z" value="سایر" id="optionsRaios24"> سایر

                        </label>


                    </div>

                    <div class="div-group" id="nzamvzef_show">
                        <label for="exampleInputName1"> :ذکر نوع و علت معافیت</label>
                        <textarea class="form-control " id="nzamvzef_show" name="nzamvzef_text"
                                  rows="3"></textarea>
                    </div>

                </td>

            </tr>
            <tr>
                <td>
                    <div class="div-inline">
                        <div class="div-group">
                            <label for="exampleInputName2"><span>تلفن منزل</span></label>
                            <input type="text" name="phone" class=" div-control phone" id="phone" maxlength="13"
                                   placeholder="لطفا فقط عدد وارد کنید">
                        </div>
                    </div>
                </td>

                <td>
                    <div class="div-inline">
                        <div class="div-group">
                            <label for="exampleInputName2">تلفن همراه <span class="reds" maxlength="12"
                                                                            placeholder="لطفا فقط عدد وارد کنید">*</span></label>

                            <input type="text" name="tell" id="tell" maxlength="13"
                                   placeholder="لطفا فقط عدد وارد کنید">
                        </div>
                    </div>
                </td>


                <td colspan="2">
                    <div class="div-inline">
                        <div class="div-group">
                            <label for="exampleInputName1">آدرس محل سکونت<span class="reds">*</span></label>
                            <textarea rows="40" cols="50" class="div-control" name="address"
                                      id="address"></textarea>
                        </div>
                    </div>
                </td>

            </tr>
            </tbody>
        </table>
        <table class="table table-bordered myhtml ">
            <thead>

            <tr>
                <td colspan="8">

                    <h2> سوابق تحصیلی و آموزشی </h2>
                </td>
            </tr>
            <tr>
                <th> مدرک تحصیلی/ آموزشی (به ترتیب از آخرین مدرک)</th>
                <th> رشته تحصيلي</th>
                <th>تاريخ پايان</th>
                <th>تاريخ شروع</th>
                <th>معدل</th>
                <th>نام دانشگاه/ مؤسسه آموزشی</th>
                <th>شهر-کشور</th>
                <th><p id="addhtml" class="btn-success btn "
                       title="برای اضافه کردن فیلد تحصیل لطفا اینجا کلید نمایید.">اضافه کردن <i
                            class="glyphicon glyphicon-plus-sign"></i></p></th>


            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

        <table class="table table-bordered enducation mycar">
            <thead>
            <tr>

            </tr>

            <tr>
                <td colspan="8"><h2>تجربيات شغلي</h2>

                </td>
            </tr>
            <tr>
                <th>نام سازمان یا شرکت (به ترتیب از آخرین سابقه)
                </th>
                <th> سمت/شغل</th>
                <th>مدت سابقه</th>
                <th>تاريخ شروع</th>
                <th>تاريخ پايان</th>
                <th>آخرین حقوق و مزایا (تومان)</th>
                <th> علت ترک شغل</th>
                <th><p class="btn btn-success" id="addcar"
                       title="برای اضافه کردن فیلد سابقه شغل لطفا اینجاه کلید نمایید.">اضافه کردن <i
                            class="glyphicon glyphicon-plus-sign"></i></p></th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <table class="table table-bordered enducation">
            <thead>
            <tr>


            </tr>
            <tr>
                <td colspan="3"><h4>فعاليت‏هاي علمي</h4></td>
            </tr>
            <tr>
                <th> ساير فعاليتهاي علمي</th>
                <th> تدوين کتاب يا مقاله علمي</th>
                <th>ارايه سمينار</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div class="form-group">
                        <textarea class="form-control" name="otheractive" rows="3"></textarea>

                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <textarea class="form-control" name="essay" rows="3"></textarea>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <textarea class="form-control" name="production" rows="3"></textarea>
                    </div>

                </td>

            </tr>
            </tbody>
        </table>
        <table class="table table-bordered ">
            <thead>
            <tr>
                <td colspan="12"><h4> آشنایی با زبان های خارجه</h4></td>
            </tr>
            <tr>
                <td colspan="2">نام زبان</td>
                <td colspan="2">وضعیت</td>
                <td colspan="2">ضعیف</td>
                <td colspan="2">متوسط</td>
                <td colspan="2">خوب</td>
                <td colspan="2">عالی</td>

            </tr>
            </thead>
            <tbody>
            <tr class="ktablee">
                <td style="border:0px groove white;" colspan="2"></td>
                <td colspan="2">خواندن</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="read" id="optionsRadios1" value="ضعيف">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="read" id="optionsRadios2" value="متوسط">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="read" id="optionsRadios3" value="خوب">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="read" id="optionsRadios4" value="عالي">

                    </label>
                </td>

            </tr>
            <tr>
                <td colspan="2" style="border:0px groove white;"><input type="text" name="position"
                                                                        placeholder=" نام زبان را وارد نمایید"></td>
                <td colspan="2">نوشتن</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="write" id="optionsRadios5" value="ضعيف">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="write" id="optionsRadios6" value="متوسط">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="write" id="optionsRadios7" value="خوب">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="write" id="optionsRadios8" value="عالي">

                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border:0px groove white;"></td>
                <td colspan="2">مکالمه</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="study" id="optionsRadios9" value="ضعيف">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="study" id="optionsRadios10" value="متوسط">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="study" id="optionsRadios11" value="خوب">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="study" id="optionsRadios12" value="عالی">


                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border:0px groove white;"></td>
                <td colspan="2">درک مطلب</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="understamd" id="optionsRadios13" value="ضعيف">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="understamd" id="optionsRadios14" value="متوسط">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="understamd" id="optionsRadios15" value="خوب">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="understamd" id="optionsRadios16" value="عالي">

                    </label>
                </td>


            </tr>
            <!--row-->
            <tr>
                <td colspan="2" style="border:0px groove red" colspan="12">
                    <hr style="border:1px groove black;">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border:0px groove white;"></td>
                <td colspan="2">خواندن</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="read2" id="optionsRadios17" value="ضعيف">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="read2" id="optionsRadios17" value="ضعيف">


                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="read2" id="optionsRadios19" value="خوب">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="read2" id="optionsRadios20" value="عالي">

                    </label>
                </td>

            </tr>
            <tr>
                <td colspan="2" style="border:0px groove white;"><input type="text" name="position2"
                                                                        placeholder=" نام زبان را وارد نمایید"></td>
                <td colspan="2">نوشتن</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="write2" id="optionsRadios21" value="ضعيف">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="write2" id="optionsRadios22" value="متوسط">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="write2" id="optionsRadios23" value="خوب">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="write2" id="optionsRadios24" value="عالي">

                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border:0px groove white;"></td>
                <td colspan="2">مکالمه</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="study2" id="optionsRadios25" value="ضعيف">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="study2" id="optionsRadios26" value="متوسط">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="study2" id="optionsRadios27" value="خوب">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="study2" id="optionsRadios28" value="عالي">

                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border:0px groove white;"></td>
                <td colspan="2">درک مطلب</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="understamd2" id="optionsRadios29" value="ضعيف">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="understamd2" id="optionsRadios30" value="متوسط">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="understamd2" id="optionsRadios31" value="خوب">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="understamd2" id="optionsRadios32" value="عالي">

                    </label>
                </td>


            </tr>
            </tbody>
        </table>
        <table class="table table-bordered enducation">
            <thead>
            <tr>


            </tr>
            <tr>
                <td colspan="16"><h4>آشنایی با کامپیوتر</h4></td>
            </tr>
            <thead>
            <tr>
                <th colspan="2">نام مهارت</th>
                <th colspan="2">عالي</th>
                <th colspan="2">خوب</th>
                <th colspan="2">متوسط</th>
                <th colspan="2"> ضعيف</th>
                <th colspan="2">نام مهارت</th>
                <th colspan="2">عالی</th>
                <th colspan="2">خوب</th>
                <th colspan="2">متوسط</th>
                <th colspan="2"> ضعيف</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="2">windows</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="window" id="optionsRadios1" value="عالي">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="window" id="optionsRadios1" value="خوب">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="window" id="optionsRadios1" value="متوسط">

                    </label>
                </td>

                <td colspan="2">
                    <label>
                        <input type="radio" name="window" id="optionsRadios1" value="ضعيف">

                    </label>
                </td>
                <td colspan="2">Excel</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="excel" id="optionsRadios1" value="عالي">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="excel" id="optionsRadios1" value="خوب">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="excel" id="optionsRadios1" value="متوسط">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="excel" id="optionsRadios1" value="ضعيف">

                    </label>
                </td>

            </tr>
            <tr>
                <td colspan="2">Powerpoint</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="powerpoint" id="optionsRadios1" value="عالي">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="powerpoint" id="optionsRadios1" value="خوب">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="powerpoint" id="optionsRadios1" value="متوسط">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="powerpoint" id="optionsRadios1" value="ضعيف">

                    </label>
                </td>

                <td colspan="2">Internet</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="internet" id="optionsRadios1" value="عالي">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="internet" id="optionsRadios1" value="خوب">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="internet" id="optionsRadios1" value="متوسط">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="internet" id="optionsRadios1" value="ضعيف">

                    </label>
                </td>

            <tr>
                <td colspan="2">Access</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="access" id="optionsRadios1" value="عالي">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="access" id="optionsRadios1" value="خوب">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="access" id="optionsRadios1" value="متوسط">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="access" id="optionsRadios1" value="ضعيف">

                    </label>
                </td>

                <td colspan="2">Type</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="type" id="optionsRadios1" value="عالي">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="type" id="optionsRadios1" value="خوب">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="type" id="optionsRadios1" value="متوسط">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="type" id="optionsRadios1" value="ضعيف">

                    </label>
                </td>

            </tr>
            <tr>
                <td colspan="2">Word</td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="word" id="optionsRadios1" value="عالي">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="word" id="optionsRadios1" value="خوب">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="word" id="optionsRadios1" value="متوسط">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="word" id="optionsRadios1" value="ضعيف">

                    </label>
                </td>
                <td colspan="2"><input type="text" name="name_other"
                                       placeholder="لطفاً نام مهارت دیگر خود را وارد کنید"></td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="other" id="optionsRadios1" value="عالي">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="other" id="optionsRadios1" value="خوب">

                    </label>
                </td>
                <td colspan="2">

                    <label>
                        <input type="radio" name="other" id="optionsRadios1" value="متوسط">

                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <input type="radio" name="other" id="optionsRadios1" value="ضعيف">

                    </label>
                </td>

            </tr>
        </table>
        <table class="table table-bordered ">
            <thead>
            <tr>
            </tr>
            <tr>
                <td colspan="8"><h4><span class="reds">*</span> نحوه همکاري</h4></td>
            </tr>
            <tr>
                <td colspan="8" style="text-align:cenrter;">
                    <center>
                        <div id="div1">


                            <input type="checkbox" name="status1" id="status1" value=" تمام وقت">
                            تمام وقت

                            <input type="checkbox" name="status2" class="sh" id="status2" value=" پاروقت">
                            پاروقت

                            <input type="checkbox" name="status3" id="status3" value="همکاري خارج از مرکز">
                            همکاري خارج از مرکز

                            <input type="checkbox" name="status4" id="status4" value=" همکاری خارج از شیراز">
                            همکاری خارج از شیراز
                            <br> <br>
                        </div>
                        (انتخاب بيش ازيک گزينه مجاز است)</label>
                        </label>
                        <br>
                        <div class="form-group" id="com">
                            <label>
                                درصورت تمايل به کار پاره وقت ساعات و روزهاي همکاري را دقيقاً اعلام فرماييد
                            </label>

                            <textarea class="form-control" name="status1_comment" rows="3"></textarea>
                        </div>
                    </center>
                </td>
            </tr>
            </thead>
        </table>
        <table class="table table-bordered enducation" align="center">
            <thead>
            <tr>
            </tr>
            <tr>
                <td colspan="2"><h4>سؤالات شغلي</h4></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label><span class="reds">*</span> شغل مورد درخواست خود و تاريخي که مي توانيد مشغول به کار شويد
                        را ذکر فرماييد؟
                        <textarea name="jaba5" id="jaba5" rows="2" style="height:20px;width:600px; "></textarea>
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label> در صورت انتقال يا مأموريت حاضر به رفتن به شهر‏ها شبعه ديگر هستيد؟
                        <input type="radio" name="jaba1" id="optionsRadios1" value="بله" checked>
                        بله


                        <input type="radio" name="jaba1" id="optionsRadios1" value="خیر" checked>
                        خير

                    </label>

                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label> آيا اکنون مشغول به کار هستيد؟
                        <input type="radio" name="jaba2" id="optionsRadios2" value="بله" checked>
                        بله

                        <input type="radio" name="jaba2" id="optionsRadios2" value="خیر" checked>
                        خير

                    </label>

                </td>
            </tr>

            <td colspan="2">
                <label> در صورت داشتن وسیله نقلیه نوع آن را بفرمایید
                    <textarea name="jaba6" rows="2" style="height:20px;width:600px; "></textarea>
                </label>
            </td>
            <tr>
                <td colspan="2">
                    <center>

                        <label> حقوق مورد انتظار </label> <br>
                        <span></span>
                        <input type="checkbox" name="jaba4" id="optionsRadios1" value=" برابر ضوابط شرکت">
                        برابر ضوابط شرکت


                        <span></span>
                        <input type="checkbox" class="jaba4" name="jaba4" id="optionsRadios1"
                               value=" مبلغ پيشنهادي">
                        مبلغ پيشنهادي
                        <input type="text" class="jaba4-commit" name="jaba4" class=" div-control"
                               id="exampleInputName4"
                               placeholder="تومان">


                    </center>
                </td>

            </tr>
            </thead>
        </table>
        <table class="table table-bordered enducation">
            <thead>
            <tr>
            </tr>
            <tr>
                <td colspan="8"><h4><span class="reds">*</span> چگونگي آشنايي شما با شرکت</h4></td>
            </tr>
            </thead>
            <thead>
            <tr>
                <td colspan="2">
                    <div id="div">

                        <br>

                        معرفي دوستان
                        <input type="checkbox" name="q1" id="o1" value="معرفي دوستان">

                        اينترنت
                        <input type="checkbox" name="q2" id="o2" value="اينترنت ">
                        آگهي روزنامه
                        <input type="checkbox" name="q3" id="o3" value="آگهي روزنامه   ">


                    </div>
                </td>
                <td colspan="6" class="show_o2"><label>

                        در صورت انتخاب گزینه اینترنت سایت را اعلام فرمایید
                        <br>
                        <textarea name="q4" style="width:220px; height:30px;" class="form-control div-control"
                                  rows="5"></textarea>


                    </label>

                </td>
            </tr>
            </thead>
        </table>
        <table class="table table-bordered enducation">


            <tr>
                <td colspan="8">
                    <h3>
                        <center>
                            توجه: تکميل نمودن اين فرم هيچگونه تعهدي در قبال استخدام شما براي شرکت ايجاد نمي نمايد
                        </center>
                    </h3>
                </td>

            </tr>
            <tr>
                <td colspan="8">
                    <button type="submit" name="sub_register" id="sub_register" value="ارسال اطلاعات"
                            class="btn btn-large btn-block btn-primary ">ثبت کردن
                    </button>

                </td>
            </tr>

        </table>
    </form>

</div>
