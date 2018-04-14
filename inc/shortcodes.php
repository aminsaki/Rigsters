<?php
session_start();
//session_unset('rand');
add_shortcode('rigster', 'rigster_form');

function rigster_form()
{
  include RIG_INCT_DIR . "layout.php";
    if (isset($_POST['sub_register'])) {
        ///upload img
        $name = $_FILES['userfile']['name'];
        $tmp_name = $_FILES['userfile']['tmp_name'];
        // hesh name images
        $foder_uploaded = RIG_UP_DIR . "uploads";

        $cheank_format = md5($name . microtime()) . substr($name, -5, 5);
        move_uploaded_file($tmp_name, "$foder_uploaded/$cheank_format");
        ///code random
        $rand = rand(200, 10000) . time() . rand(10, 100);
        // Set session variables
        $_SESSION["rand"] = $rand;
        global $wpdb;
        $sql = $wpdb->insert("wp_rigster", [
            "uid" => $_SESSION["rand"],
            "userfile" => $cheank_format,
            "name_fmaily" => $_POST['name_fmaily'],
            "fader" => $_POST['fader'],
            "shsh" => $_POST['shsh'],
            "mhalsordore" => $_POST['mhalsordore'],
            "codemell" => $_POST['codemell'],
            "locallave" => $_POST['locallave'],
            "datebirth"=>$_POST['datebirth'],
            "jnseat" => $_POST['jnseat'],
            "vazetthoall" => $_POST['vazetthoall'],
            "tadatefrenzand" => $_POST['tadatefrenzand'],
            "melet" => $_POST['melet'],
            "slamet" => $_POST['slamet'],
            "slamet_text" => $_POST['slamet_text'],
            "nzamvzef" => $_POST['nzamvzef'],
            "nzamvzef_show" => $_POST['nzamvzef_text'],
            "phone" => $_POST['phone'],
            "tell" => $_POST['tell'],
            "address" => $_POST['address'],
            "production" => $_POST['production'],
            "essay" => $_POST['essay'],
            "otheractive" => $_POST['otheractive'],
            "position" => $_POST['position'],
            "position2" => $_POST['position2'],
            "read" => $_POST['read'],
            "write" => $_POST['write'],
            "study" => $_POST['study'],
            "understamd" => $_POST['understamd'],
            "read2" => $_POST['read2'],
            "write2" => $_POST['write2'],
            "study2" => $_POST['study2'],
            "understamd2" => $_POST['understamd2'],
            "type" => $_POST['type'],
            "other" => $_POST['other'],
            "internet" => $_POST['internet'],
            "excel" => $_POST['excel'],
            "window" => $_POST['window'],
            "powerpoint" => $_POST['powerpoint'],
            "access" => $_POST['access'],
            "word" => $_POST['word'],
            "status1" => $_POST['status1'],
            "status2" => $_POST['status2'],
            "status3" => $_POST['status3'],
            "status4" => $_POST['status4'],
            "status1_comment" => $_POST['status1_comment'],
            "q1" => $_POST['q1'],
            "q2" => $_POST['q2'],
            "q3" => $_POST['q3'],
            "q4" => $_POST['q4'],
            "jaba5" => $_POST['jaba5'],
            "jaba1" => $_POST['jaba1'],
            "jaba2" => $_POST['jaba2'],
            "jaba6" => $_POST['jaba6'],
            "jaba4" => $_POST['jaba4']
        ]);
        ////insert acdment
        if (isset($_POST['endmakeer'])):
            $count = count($_POST['endmakeer']);
            for ($i = 0; $i < $count; $i++):
                $wpdb->insert("wp_educationalrecords", [
                    "uid" => $_SESSION["rand"],
                    "endmakeer" => $_POST['endmakeer'][$i],
                    "academicdegree" => $_POST['fieldstudr'][$i],
                    "data_s" => $_POST['si'][$i] . "/" . $_POST['sm'][$i] . "/" . $_POST['sd'][$i],
                    "end_e" => $_POST['sei'][$i] . "/" . $_POST['sem'][$i] . "/" . $_POST['sed'][$i],
                    "avg" => $_POST['avg'][$i],
                    "academy" => $_POST['name_acodmentk'][$i],
                    "city" => $_POST['city'][$i]]);
            endfor;
        endif;

        ///car
        if (isset($_POST['compantlast'])):
            $count2 = count($_POST["compantlast"]);
            for ($j = 0; $j < $count2; $j++):
                $wpdb->insert("wp_careerexperiences", [
                    "uid" => $_SESSION['rand'],
                    "compantlast" => $_POST["compantlast"][$j],
                    "side" => $_POST["side"][$j],
                    "data_start" => $_POST['comi'][$j] . "/" . $_POST['comm'][$j] . "/" . $_POST["comd"][$j] . "/",
                    "data_end" => $_POST['omei'][$j] . "/" . $_POST['comem'][$j] . "/" . $_POST['comed'][$j],
                    "couseraver" => $_POST['couseraver'][$j],
                    "exitcar" => $_POST["exitcar"][$j],

                ]);

            endfor;
        endif;

        if ($sql) {
                $errormassgetss ="اطلاعات شما با موفقعیت درج شده";
        } else {

             $errormassgetss = "خط رخ داد است لطفا دوباره امحتانی نمایید.";
        }
    }
  ?>

    <div class="se-pre-con"></div>
<div class="container panel mypanel">
    <?php if (isset($errormassgetss)): ?>
    <div class="alert-danger form-">
        <div class="alert alert-danger text-center">
            <h4> <?= $errormassgetss; ?></h4>
        </div>

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


                <h5 class="text-danger
">حجم تصویر کمتر از 1 مگابایت باشد-فرمت های مجاز jpeg-jpg-png-gif
                    هستند</h5>
                <input type="file" name="userfile" id="userfile"
                       class="btn btn-info col-md-4 pull-left col-md-offset-4" id="exampleInputFile">
                <div id="image-show" class="col-md-4 pull-left col-md-offset-4"></div>

            </td>

        </tr>
    </table><!--End TABLE-->
    <table class="table table-bordered  specifications">
        <tbody class="form-horizontal">
        <tr>
            <td>
                <div class="div-inline">
                    <div class="div-group">
                    <label for="exampleInputName1">نام و نام خانوادگی <span class="reds">*</span></label>
                    <input type="text" name="name_fmaily" class="form-control" id="name_fmaily" placeholder="نام و نام خانوادگی">

                </div>
                </div>
            </td>
            <td>
                <div class="div-inline">
                    <div class="div-group">
                        <label for="exampleInputName2"> نام پدر <span class="reds">*</span></label>
                        <input type="text" name="fader" class="form-control fader" id="fader" placeholder="نام پدر">

                    </div>
                </div>
            </td>
            <td>
                <div class="div-inline">
                    <div class="div-group">
                        <label for="exampleInputName3"> شماره شناسنامه <span class="reds">*</span></label>
                        <input type="text" maxlength="10" name="shsh" class="form-control " id="shsh"
                               placeholder="لطفا فقط عدد وارد کنید">

                    </div>
                    </div>
            </td>
            <td>
                <div class="div-inline">
                    <div class="div-group">
                    <label for="exampleInputName4">محل صدور <span class="reds">*</span></label>
                    <input type="text" name="mhalsordore" class=" form-control mhalsordore" id="mhalsordore" placeholder="محل صدور">
                    </div>
                </div>
            </td>
        </tr><!---row1---->
        <tr>
            <td>
                <div class="div-inline">

                    <div class="div-group">
                        <label for="exampleInputName1"> کد ملی <span class="reds">*</span></label>
                        <input type="text" name="codemell" class="form-control" id="codemell" maxlength="10"
                               placeholder="لطفا فقط عدد وارد کنید">

                    </div>
                </div>
            </td>
            <td>
                <div class="div-inline">
                    <div class="div-group">
                        <label for="exampleInputName2">محل تولد <span class="reds">*</span></label>

                        <input type="text" name="locallave" placeholder="محل تولد" class="form-control locallave" id="locallave">

                    </div>
                </div>
            </td>
            <td class="sets">
                <div class="div-inline">
                    <div class="div-group">
                <label>
                    تاریخ تولد <span class="reds">*</span>
                </label>
                <div class="form-inline">
                    <input type="text" name="datebirth" id="date1" class="form-control">

                </div>
                    </div>
            <td>
                <div class="div-inline">
                    <div class="div-group">
                        <label for="empty"> جنسیت <span class="reds">*</span></label>
                        <select name="jnseat" id="jnseat" class="form-control">
                            <option></option>
                            <option value="مرد"> مرد</option>
                            <option value="زن"> زن</option>
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
                            <option value="مجرد"> مجرد</option>
                            <option value="متاهل">متاهل</option>
                        </select>
                    </div>
                </div>
            </td>
            <td>
                <div class="div-inline">

                    <div class="div-group">
                        <label for="exampleInputName2">تعداد فرزند</label>
                        <input type="text" name="tadatefrenzand" class="form-control tadatefrenzand"
                               id="exampleInputName12" maxlength="2" placeholder="لطفا فقط عدد وارد کنید">


                    </div>
                </div>
            </td>

            <td colspan="2">
                <div class="div-inline">

                    <div class="div-group">
                        <label for="exampleInputName3">ملیت <span class="reds">*</span></label>
                        <input type="text" name="melet" class="form-control melet" id="melet" placeholder="ملیت">

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
                        <textarea class="form-control slamet_text" name="slamet_text" cols="50"></textarea>


                    </div>
            </td>
            <td colspan="2">
                <div class="div-inline">
                    <div class="div-group">
                        <label for="exampleInputName1"> خدمت نظام وظیفه <span class="reds">*</span>

                        <input type="radio" name="nzamvzef" class="z" value="پایان خدمت"
                               id="optionsRaios24"> پایان خدمت
                        <input type="radio" name="nzamvzef" class="z" value="مشمول" id="optionsRaios24">
                        مشمول
                        <input type="radio" name="nzamvzef" class="ns" value="معاف" id="optionsRaios24">معاف
                        <input type="radio" name="nzamvzef" class="z" value="سایر" id="optionsRaios24"> سایر

                    </label>

                    </div>
                </div>
                <div class="div-inline">

                <div class="div-group" id="nzamvzef_show">
                    <label for="exampleInputName1"> :ذکر نوع و علت معافیت</label>
                    <textarea class="form-control " id="nzamvzef_show" name="nzamvzef_text"
                              cols="50"></textarea>
                </div>
                </div>

            </td>

        </tr>
        <tr>
            <td>
                <div class="div-inline">
                    <div class="div-group">
                        <label for="exampleInputName2"><span>تلفن منزل</span></label>
                        <input type="text" name="phone" class=" form-control phone" id="phone" maxlength="13"
                               placeholder="لطفا فقط عدد وارد کنید">
                    </div>
                </div>
            </td>

            <td>
                <div class="div-inline">
                    <div class="div-group">
                        <label for="exampleInputName2">تلفن همراه <span class="reds" maxlength="12"
                                                                        placeholder="لطفا فقط عدد وارد کنید">*</span></label>

                        <input type="text" name="tell" id="tell" maxlength="13" class="form-control"
                               placeholder="لطفا فقط عدد وارد کنید">
                    </div>
                </div>
            </td>
            <td colspan="2">
                <div class="div-inline">
                    <div class="div-group">
                        <label for="exampleInputName1">آدرس محل سکونت<span class="reds" >*</span></label>
                        <br>
                        <textarea   name="address"  cols="50" id="address"></textarea>
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
            <th> مدرک تحصیلی(به ترتیب از اول مدرک)</th>
            <th> رشته تحصيلي</th>
            <th class="col-md-2">تاریخ شروع تحصیلی </th>
            <th class="col-md-2cd ">تاريخ پايان تحصیلی...</th>
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
            <td colspan="8"><h2>تجربيات شغلي</h2>
            </td>
        </tr>
        <tr>
            <th class="col-md-2">نام سازمان یا شرکت (به ترتیب از آخرین سابقه) </th>
            <th> سمت/شغل</th>
            <th>مدت سابقه</th>
            <th>تاريخ شروع</th>
            <th>تاريخ پايان</th>
            <th>آخرین حقوق و مزایا (تومان)</th>
            <th> علت ترک شغل</th>
            <th><p  id="addcar" class="btn-success btn  "
                   title="برای اضافه کردن فیلد سابقه شغل لطفا اینجاه کلید نمایید.">اضافه  کردن <i
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
                    <textarea class="form-control" name="otheractive" cols="50"></textarea>

                </div>
            </td>
            <td>
                <div class="form-group">
                    <textarea class="form-control" name="essay" cols="50"></textarea>
                </div>
            </td>
            <td>
                <div class="form-group">
                    <textarea class="form-control" name="production" cols="50"></textarea>
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

                        <textarea class="form-control" name="status1_comment" cols="50"></textarea>
                    </div>
                </center>
            </td>
        </tr>
        </thead>
    </table>
    <table class="table table-bordered jobquestion" align="center">
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
                    <textarea name="jaba5" id="jaba5" cols="50" style="height:20px;width:600px; "></textarea>
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
                <textarea name="jaba6" cols="50" style="height:20px;width:600px; "></textarea>
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
                    <input type="text" class="jaba4-commit" name="jaba4" class=" form-control"
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
                    <textarea name="q4" style="width:220px; height:30px;" cols="50"
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
            <td colspan="8" class="shoes">

                <input type="button" name="button" id="sub_register" data-name="sub"
                        class="btn btn-large btn-block btn-primary disabled">


            </td>
        </tr>

    </table>
</form>

</div>

<?php

}

