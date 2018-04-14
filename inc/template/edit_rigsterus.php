<?php
global $wpdb;
$r = $wpdb->get_results("SELECT * FROM wp_rigster INNER JOIN wp_careerexperiences JOIN wp_educationalrecords 
      WHERE wp_rigster.uid=5048152037925883");

?>
<div class="container panel mypanel">

    <?php
    echo $wpdb->show_errors();
    echo $wpdb->print_error();
    ?>
    <?php if (isset($_SESSION['error_massgetss'])): ?>
        <div class="alert-danger btn btn-danger">
            <?php echo $_SESSION['error_massgetss']; ?>
        </div>
    <?php endif;?>
 <?php  foreach ($r as $row):?>
            <table class="table table-bordered">

                <tr>
                    <td><h4>اطلاعات شخصی</h4></td>
                </tr>

                <tr class="resutl">

                    <td colspan="8">
                       <img src="<?= RIG_UP_URL . $row->userfile; ?>" class=" img-responsive pull-left col-md-offset-4 " style="height: 250px" >
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
                                <input type="text" name="name_fmaily" class="form-control" id="name_fmaily"
                                       placeholder="نام و نام خانوادگی" value="<?= $row->name_fmaily ?>">

                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="div-inline">
                            <div class="div-group">
                                <label for="exampleInputName2"> نام پدر <span class="reds">*</span></label>
                                <input type="text" name="fader" class="form-control fader" id="fader"
                                       placeholder="نام پدر" value="<?= $row->fader ?>">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="div-inline">
                            <div class="div-group">
                                <label for="exampleInputName3"> شماره شناسنامه <span class="reds">*</span></label>
                                <input type="text" maxlength="10" name="shsh" class="form-control " id="shsh"
                                       placeholder="لطفا فقط عدد وارد کنید" value="<?= $row->shsh ?>">

                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="div-inline">
                            <div class="div-group">
                                <label for="exampleInputName4">محل صدور <span class="reds">*</span></label>
                                <input type="text" name="mhalsordore" class=" form-control mhalsordore" id="mhalsordore"
                                       placeholder="محل صدور" value="<?= $row->mhalsordore ?>">
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
                                       placeholder="لطفا فقط عدد وارد کنید" value="<?= $row->codemell ?>">

                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="div-inline">
                            <div class="div-group">
                                <label for="exampleInputName2">محل تولد <span class="reds">*</span></label>

                                <input type="text" name="locallave" placeholder="محل تولد"
                                       class="form-control locallave" id="locallave" value="<?= $row->locallave ?>">

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
                                    <input type="text" name="datebirth" id="date1" class="form-control" value="<?= $row->datebirth?>">

                                </div>
                            </div>
                    <td>
                        <div class="div-inline">
                            <div class="div-group">
                                <label for="empty"> جنسیت <span class="reds">*</span></label>
                                   <input type="text" class="form-control" value="<?= $row->sex ?>" >
                             </div>
                        </div>
                    </td>

                </tr><!--row2---->
                <tr>
                    <td>
                        <div class="div-inline">
                            <div class="div-group">
                                <lable for="empty"> وضعیت تأهل <span class="reds">*</span></lable>
                                  <input type="text" value="<?= $row->vazetthoall ?>"
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="div-inline">

                            <div class="div-group">
                                <label for="exampleInputName2">تعداد فرزند</label>
                                <input type="text" name="tadatefrenzand" class="form-control tadatefrenzand"
                                       id="exampleInputName12" maxlength="2" value="<?= $row->tadatefrenzand ?>" placeholder="لطفا فقط عدد وارد کنید">


                            </div>
                        </div>
                    </td>

                    <td colspan="2">
                        <div class="div-inline">

                            <div class="div-group">
                                <label for="exampleInputName3">ملیت <span class="reds">*</span></label>
                                <input type="text" name="melet" class="form-control melet" id="melet"
                                       placeholder="ملیت" value="<?= $row->melet ?>">

                            </div>
                        </div>
                    </td>


                </tr>
                <tr>
                    <td colspan="2">
                        <div class="div-group">
                            <div class="div-inline">

                              <label for="exampleInputName1"> وضعیت سلامت روحی و جسمی <span class="reds">*</span>
                                <input type="text" class="form-control" value="<?= $row->slamet ?>">

                            </div>
                           <?php if(!empty($row->slamet_text)):?>
                            <div class="div-group" id="commit_slamet">
                                <label for="exampleInputName1">در صورت خیر توضیح دهید</label>
                                <textarea class="form-control slamet_text" name="slamet_text" cols="50"><?= $row->slamet_text?></textarea>
                            </div>
                           <?php endif; ?>
                    </td>
                    <td colspan="2">
                        <div class="div-inline">
                            <div class="div-group">
                                <label for="exampleInputName1"> خدمت نظام وظیفه <span class="reds">*</span>
                                    <input type="text" class="form-control" value="<?= $row->nzamvzef ?>">
                            </div>
                        </div>
                        <?php if(!empty($row->nzamvzef_show)):?>
                        <div class="div-inline">

                            <div class="div-group" id="nzamvzef_show">
                                <label for="exampleInputName1"> :ذکر نوع و علت معافیت</label>
                                <textarea class="form-control " id="nzamvzef_show" name="nzamvzef_text"
                                          cols="50"><?= $row->nzamvzef_show ?></textarea>
                            </div>

                        </div>
                        <?php endif;?>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="div-inline">
                            <div class="div-group">
                                <label for="exampleInputName2"><span>تلفن منزل</span></label>
                                <input type="text" name="phone" class=" form-control phone" id="phone" maxlength="13"
                                       value="<?= $row->phone?>">
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="div-inline">
                            <div class="div-group">
                                <label for="exampleInputName2">تلفن همراه <span class="reds" maxlength="12"
                                                                                placeholder="لطفا فقط عدد وارد کنید">*</span></label>

                                <input type="text" name="tell" id="tell" maxlength="13" class="form-control"
                                     value="<?= $row->tell ?>">
                            </div>
                        </div>
                    </td>
                    <td colspan="2">
                        <div class="div-inline">
                            <div class="div-group">
                                <label for="exampleInputName1">آدرس محل سکونت<span class="reds">*</span></label>
                                <br>
                                <textarea name="address" cols="50" id="address"> <?= $row->address ?></textarea>
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
                    <th class="col-md-2">تاریخ شروع تحصیلی</th>
                    <th class="col-md-2cd ">تاريخ پايان تحصیلی...</th>
                    <th>معدل</th>
                    <th>نام دانشگاه/ مؤسسه آموزشی</th>
                    <th>شهر-کشور</th>
                </tr>
                </thead>
                 <tbody>
                 <tr>
                     <td>
                         <div class=form-group>
                             <input name='endmakeer' value="<?= $row->endmakeer ?>" class='form-control'  type='text'>
                         </div>
                         </td>
                     <td>
                          <div class='form-group'>
                              <input name='fieldstudr' class='form-control' value="<?= $row->fieldstudr  ?>" >
                              </div>
                          </td>
                         <td class='sets col-md-2'>
                          <div class='form-group'>
                                   <input type="text"  class="form-control" value="<?= $row->data_s ?>"
                              </div>
                         </td>

                     <td class='sets col-md-2' >

                         <div class='form-group'>

                                 <input type="text" class="form-control" value="<?= $row->end_e  ?>">

                             </div>

                         </td> <td>

                         <input name='avg[]' class='form-control'  value="<?= $row->avg ?>" type='text'>

                         </td>

                     <td>
                          <div class='form-group'>
                              <input name='name_acodmentk' value="<?= $row->name_acodmentk ?>" class='form-control' id='name_acodmentk' type='text'>
                            </div>
                         </td>
                     <td>
                         <div class='form-group'>
                             <input name='city' class='form-control' value="<?= $row->city ?>" id='city' type='text'>

                             </div>
                     </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered enducation mycar">
                <thead>

                <tr>
                    <td colspan="8"><h2>تجربيات شغلي</h2>
                    </td>
                </tr>
                <tr>
                    <th class="col-md-2">نام سازمان یا شرکت (به ترتیب از آخرین سابقه)</th>
                    <th> سمت/شغل</th>
                    <th>مدت سابقه</th>
                    <th>تاريخ شروع</th>
                    <th>تاريخ پايان</th>
                    <th>آخرین حقوق و مزایا (تومان)</th>
                    <th> علت ترک شغل</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class=form-group>
                            <input name='endmakeer' class='form-control'  type='text' value="<?= $row->endmakeer  ?>">
                            </div>
                        </td>
                    <td>
                        <div class='form-group'>
                            <input name='fieldstudr[]' value="<?= $row->fieldstudr ?>" class='form-control' id='fieldstudr' type='text'>
                            </div>
                        </td>
                    <td class='sets col-md-2'>
                        <div class='form-group'>
                            <input type="text" name="data_start" value="<?= $row->data_start ?>">
                         </div>
                    </td>

                    <td class='sets col-md-2' >

                        <div class='form-group'>
                            <input type="text" name="data_end" value="<?= $row->data_end ?>"
                        </div>

                        </td>
                    <td>

                        <input name='avg[]' class='form-control' value="<?= $row->avg ?>" id='avg' type='text'>

                        </td>

                    <td>
                        <div class='form-group'>
                            <input name='name_acodmentk[]' value="<?= $row->name_acodmentk ?>" class='form-control' type='text'>
                            '</div>'+
                        </td>
                    <td>
                        <div class='form-group'>
                            <input name='city[]' class='form-control' id='city'  value="<?= $row->city ?>" type='text'>

                            </div>
                    </td>
                    </tr>"
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
                            <textarea class="form-control" name="otheractive" cols="50"><?= $row->otheractive  ?> </textarea>

                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <textarea class="form-control" name="essay" cols="50"> <?= $row->essay ?></textarea>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <textarea class="form-control" name="production" cols="50"><?= $row->production ?></textarea>
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
                     <?php  if($row->read==="ضعیف"): ?>
                     <input type="radio" name="read" id="optionsRadios1" checked value="ضعيف">
                   <?php   else:?>
                    <input type="radio" name="read" id="optionsRadios1" value="ضعيف">

                     <?php endif;?>
                 </label>
             </td>
             <td colspan="2">

                 <label>

                     <?php  if($row->read==="متوسط"): ?>
                         <input type="radio" name="read" id="optionsRadios1" checked value="متوسط">
                     <?php   else:?>
                         <input type="radio" name="read" id="optionsRadios1" value="متوسط">

                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">
                 <label>

                     <?php  if($row->read==="خوب"): ?>
                         <input type="radio" name="read" id="optionsRadios1" checked value="خوب">
                     <?php   else:?>
                         <input type="radio" name="read" id="optionsRadios1" value="خوب">

                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">
                 <label>


                     <?php  if($row->read==="عالي"): ?>
                         <input type="radio" name="read" id="optionsRadios1" checked value="عالي">
                     <?php   else:?>
                         <input type="radio" name="read" id="optionsRadios1" value="عالي">

                     <?php endif;?>

                 </label>
             </td>

         </tr>
         <tr>
             <td colspan="2" style="border:0px groove white;">
                  <input type="text" name="position"  value="<?= $row->position ?>">
             <td colspan="2">نوشتن</td>
             <td colspan="2">
                 <label>


                     <?php  if($row->write==="ضعيف"): ?>
                         <input type="radio" name="write" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="write" id="optionsRadios1" value="ضعيف">

                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">

                 <label>

                     <?php  if($row->write==="متوسط"): ?>
                         <input type="radio" name="write" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="write" id="optionsRadios1" value="ضعيف">

                     <?php endif;?>


                 </label>
             </td>
             <td colspan="2">
                 <label>
                     <?php  if($row->write==="خوب"): ?>
                         <input type="radio" name="write" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="write" id="optionsRadios1" value="ضعيف">

                     <?php endif;?>


                 </label>
             </td>
             <td colspan="2">
                 <label>

                     <?php  if($row->write==="عالي"): ?>
                         <input type="radio" name="write" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="write" id="optionsRadios1" value="ضعيف">

                     <?php endif;?>

                 </label>
             </td>
         </tr>
         <tr>
             <td colspan="2" style="border:0px groove white;"></td>
             <td colspan="2">مکالمه</td>
             <td colspan="2">
                 <label>
                     <?php  if($row->study==="ضعيف"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>
                 </label>
             </td>
             <td colspan="2">

                 <label>

                     <?php  if($row->study==="متوسط"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">
                 <label>

                     <?php  if($row->study==="خوب"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">
                 <label>

                     <?php  if($row->study==="عالی"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>


                 </label>
             </td>
         </tr>
         <tr>
             <td colspan="2" style="border:0px groove white;"></td>
             <td colspan="2">درک مطلب</td>
             <td colspan="2">
                 <label>
                     <?php  if($row->understamd==="ضعيف"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">

                 <label>
                     <?php  if($row->understamd==="متوسط"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">
                 <label>
                     <?php  if($row->understamd==="خوب"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">
                 <label>

                     <?php  if($row->understamd==="عالي"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

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

                     <?php  if($row->read2==="ضعيف"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">

                 <label>

                     <?php  if($row->read2==="متوسط"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                     <input type="radio" name="read2" id="optionsRadios17" value="">


                 </label>
             </td>
             <td colspan="2">
                 <label>
                     <?php  if($row->read2==="خوب"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>


                 </label>
             </td>
             <td colspan="2">
                 <label>

                     <?php  if($row->read2==="عالي"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>


                 </label>
             </td>

         </tr>
         <tr>
             <td colspan="2" style="border:0px groove white;">
                 <input type="text" name="position2"  value="<?= $row->position2 ?>"></td>
             <td colspan="2">نوشتن</td>
             <td colspan="2">
                 <label>

                     <?php  if($row->write2==="ضعيف"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">

                 <label>

                     <?php  if($row->write2==="متوسط"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">
                 <label>
                     <?php  if($row->write2==="خوب"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">
                 <label>

                     <?php  if($row->write2==="عالي"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
         </tr>
         <tr>
             <td colspan="2" style="border:0px groove white;"></td>
             <td colspan="2">مکالمه</td>
             <td colspan="2">
                 <label>
                     <?php  if($row->study2==="ضعيف"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>


                 </label>
             </td>
             <td colspan="2">

                 <label>
                     <?php  if($row->study2==="متوسط"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">
                 <label>
                     <?php  if($row->study2==="خوب"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">
                 <label>
                     <?php  if($row->study2==="عالي"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
         </tr>
         <tr>
             <td colspan="2" style="border:0px groove white;"></td>
             <td colspan="2">درک مطلب</td>
             <td colspan="2">
                 <label>
                     <?php  if($row->understamd2==="ضعيف"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">

                 <label>
                     <?php  if($row->understamd2==="متوسط"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">
                 <label>
                     <?php  if($row->understamd2==="خوب"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>
             <td colspan="2">
                 <label>
                     <?php  if($row->understamd2==="عالي"): ?>
                         <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                     <?php   else:?>
                         <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                     <?php endif;?>

                 </label>
             </td>


         </tr>
         </tbody>
     </table>
            <table class="table table-bordered enducation">
                <thead>

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
                            <?php  if($row->window==="عالي"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->window==="خوب"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">

                        <label>
                            <?php  if($row->window==="متوسط"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>

                    <td colspan="2">
                        <label>
                            <?php  if($row->window==="ضعيف"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">Excel</td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->excel==="عالي"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->excel==="خوب"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">

                        <label>
                            <?php  if($row->excel==="متوسط"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->excel==="ضعيف"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>

                </tr>
                <tr>
                    <td colspan="2">Powerpoint</td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->powerpoint==="عالي"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->powerpoint==="خوب"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">

                        <label>
                            <?php  if($row->powerpoint==="متوسط"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->powerpoint==="ضعیف"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>


                        </label>
                    </td>

                    <td colspan="2">Internet</td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->powerpoint==="عالي"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>



                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->internet==="خوب"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">

                        <label>
                            <?php  if($row->internet==="متوسط"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->internet==="ضعيف"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>

                <tr>
                    <td colspan="2">Access</td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->access==="عالي"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->access==="خوب"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">

                        <label>
                            <?php  if($row->access==="متوسط"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->access==="ضعيف"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>

                    <td colspan="2">Type</td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->type==="عالي"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->type==="خوب"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">

                        <label>
                            <?php  if($row->type==="متوسط"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->type==="ضعيف"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>

                </tr>
                <tr>
                    <td colspan="2">Word</td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->word==="عالي"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->word==="خوب"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">

                        <label>
                            <?php  if($row->word==="متوسط"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->word==="ضعيف"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <input type="text" name="name_other"  value="<?= $row->name_other; ?>">
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->other==="عالي"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->other==="خوب"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">

                        <label>
                            <?php  if($row->other==="متوسط"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <?php  if($row->other==="ضعيف"): ?>
                                <input type="radio" name="study" id="optionsRadios1" checked value="ضعيف">
                            <?php   else:?>
                                <input type="radio" name="study" id="optionsRadios1" value="ضعيف">
                            <?php endif;?>

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
                            <textarea name="jaba5" id="jaba5" cols="50" style="height:20px;width:600px; ">
                             <?= $row->jaba5 ?>
                            </textarea>
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
                        <textarea name="jaba6" cols="50" style="height:20px;width:600px; ">

                            <?= $row->jaba6 ?>
                        </textarea>
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



            </table>

 <?php endforeach;?>

</div>
