<?php
session_start();
$rigster_page = add_shortcode('rigster', 'rigster_form');
function rigster_form()
{

    ///CSS
    wp_register_style('app', RIG_CSS_URL . 'app.css');
    wp_enqueue_style('app');
    wp_register_style('bootstrap', RIG_CSS_URL . 'bootstrap.min.css');
    wp_enqueue_style('bootstrap');
    wp_register_style('bootstrap-theme', RIG_CSS_URL . 'bootstrap-theme.min.css');
    wp_enqueue_style('bootstrap-theme');

    ///JS


    wp_register_script('bootstrap', RIG_JS_URL . 'bootstrap.js');
    wp_enqueue_script('bootstrap');


    wp_register_script('jquery', RIG_JS_URL . 'jquery.min.js');
    wp_enqueue_script('jquery');


    wp_register_script('freend', RIG_JS_URL . 'freend.js');
    wp_enqueue_script('freend');
    ?>

    <div class="container panel panel-default">
        <div class="alert-danger btn btn-danger">
            <?= (isset($_SESSION['error'])) ?: $_SESSION['error']; ?>
        </div>
        <table class="table table-bordered mywidth">

            <tr>
                <td colspan="8">
                    <div class="alert alert-success">
                        <h4> متقاضی محترم لطفا به ترتیب جداول را پر نمایید.</h4>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="8"><h4>اطلاعات شخصی</h4></td>
            </tr>

            <tr>
                <th colspan="8">
                </th>
            </tr>
            <tr class="resutl">

                <td colspan="8">

                    <center>
                        <label style="text-align:center; margin-left: 246px; float:left;">ابتدا عکس خود را انتخاب و دکمه
                            ارسال را بزنید ،حجم تصویر کمتر از ۳۰۰ کیلوبایت باشد-فرمت های مجاز jpg-png-gif
                            هستند</label><br>

                        <!--                        <form action="Uploads/vliadtionUpdate" method="post" enctype="multipart/form-data">-->

                        <input type="file" name="userfile" id="userfile" class="btn btn-info" id="exampleInputFile">

                        <input type="submit" name="submit" class="btn btn-primary" value="ارسال عکس">

                        <!--                        </form>-->
                    </center>
                </td>

            </tr>
        </table><!--End TABLE-->

        <form method="post">

            <table class="table table-bordered ">
                <div class="form-horizontal">
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
                                    <input type="text" maxlength="10" name="shsh" class="div-control shsh" id="shsh"
                                           maxlength="10" placeholder="لطفا فقط عدد وارد کنید">

                                </div>
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

                                    <input type="text" name="locallave" class="form-control locallave" id="locallave">

                                </div>
                            </div>
                        </td>
                        <td class="sets">

                            <div class="form-inline">
                                تاریخ تولد <span class="reds">*</span>
                                <br>
                                <label> روز</label>
                                <select name="td" id="td">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                </select>

                                <label> ماه</label>
                                <select name="tm" id="tm">
                                    <option></option>
                                    ;
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>


                                <label>سال</label>
                                <select name="ti" id="ti">
                                    <option></option>

                                    <option>1300</option>

                                    <option>1301</option>

                                    <option>1302</option>

                                    <option>1303</option>

                                    <option>1304</option>

                                    <option>1305</option>

                                    <option>1306</option>

                                    <option>1307</option>

                                    <option>1308</option>

                                    <option>1309</option>

                                    <option>1310</option>

                                    <option>1311</option>

                                    <option>1312</option>

                                    <option>1313</option>

                                    <option>1314</option>

                                    <option>1315</option>

                                    <option>1316</option>

                                    <option>1317</option>

                                    <option>1318</option>

                                    <option>1319</option>

                                    <option>1320</option>

                                    <option>1321</option>

                                    <option>1322</option>

                                    <option>1323</option>

                                    <option>1324</option>

                                    <option>1325</option>

                                    <option>1326</option>

                                    <option>1327</option>

                                    <option>1328</option>

                                    <option>1329</option>

                                    <option>1330</option>

                                    <option>1331</option>

                                    <option>1332</option>

                                    <option>1333</option>

                                    <option>1334</option>

                                    <option>1335</option>

                                    <option>1336</option>

                                    <option>1337</option>

                                    <option>1338</option>

                                    <option>1339</option>

                                    <option>1340</option>

                                    <option>1341</option>

                                    <option>1342</option>

                                    <option>1343</option>

                                    <option>1344</option>

                                    <option>1345</option>

                                    <option>1346</option>

                                    <option>1347</option>

                                    <option>1348</option>

                                    <option>1349</option>

                                    <option>1350</option>

                                    <option>1351</option>

                                    <option>1352</option>

                                    <option>1353</option>

                                    <option>1354</option>

                                    <option>1355</option>

                                    <option>1356</option>

                                    <option>1357</option>

                                    <option>1358</option>

                                    <option>1359</option>

                                    <option>1360</option>

                                    <option>1361</option>

                                    <option>1362</option>

                                    <option>1363</option>

                                    <option>1364</option>

                                    <option>1365</option>

                                    <option>1366</option>

                                    <option>1367</option>

                                    <option>1368</option>

                                    <option>1369</option>

                                    <option>1370</option>

                                    <option>1371</option>

                                    <option>1372</option>

                                    <option>1373</option>

                                    <option>1374</option>

                                    <option>1375</option>

                                    <option>1376</option>

                                    <option>1377</option>

                                    <option>1378</option>

                                    <option>1379</option>

                                    <option>1380</option>

                                    <option>1381</option>

                                    <option>1382</option>

                                    <option>1383</option>

                                    <option>1384</option>

                                    <option>1385</option>

                                    <option>1386</option>

                                    <option>1387</option>

                                    <option>1388</option>

                                    <option>1389</option>

                                    <option>1390</option>

                                    <option>1391</option>

                                    <option>1392</option>

                                    <option>1393</option>

                                    <option>1394</option>

                                    <option>1395</option>

                                    <option>1396</option>

                                    <option>1397</option>

                                    <option>1398</option>

                                    <option>1399</option>

                                    <option>1400</option>

                                    <option>1401</option>

                                    <option>1402</option>

                                    <option>1403</option>

                                    <option>1404</option>

                                    <option>1405</option>

                                    <option>1406</option>

                                    <option>1407</option>

                                    <option>1408</option>

                                    <option>1409</option>

                                    <option>1410</option>

                                    <option>1411</option>

                                    <option>1412</option>

                                    <option>1413</option>

                                    <option>1414</option>

                                    <option>1415</option>

                                    <option>1416</option>

                                    <option>1417</option>

                                    <option>1418</option>

                                    <option>1419</option>

                                    <option>1420</option>
                                </select>


                            </div>
                        </td>
                        <td>
                            <div class="div-inline">
                                <div class="div-group">
                                    <label for="empty"> جنسیت <span class="reds">*</span></label>
                                    <select name="jnseat" id="jnseat" class="form-control">
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
                                    <input type="text" name="melet" class="div-control melet" id="melet">

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
                                    <label for="exampleInputName2">تلفن منزل</label>
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
                            <div class="form-group">
                                <label for="exampleInputName1">آدرس محل سکونت<span class="reds">*</span></label>
                                <textarea rows="4" name="address" id="address"></textarea>
                            </div>

                        </td>

                    </tr>
                </div>
            </table>

            <table class="table table-bordered myhtml ">
                <thead>

                <tr>
                    <td colspan="7">

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
                    <td colspan="7"><h2>تجربيات شغلي</h2>
                        <p id="addcar">اضافه کردن تجربیات شغلی </p>
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
                    </td colspan="2">
                    <td colspan="2">

                        <label>
                            <input type="radio" name="write" id="optionsRadios6" value="متوسط">

                        </label>
                    </td colspan="2">
                    <td colspan="2">
                        <label>
                            <input type="radio" name="write" id="optionsRadios7" value="خوب">

                        </label>
                    </td colspan="2">
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
                            <input type="radio" name=" read2" id="optionsRadios17" value="ضعيف">

                        </label>
                    </td>
                    <td colspan="2">

                        <label>
                            <input type="radio" name=" read2" id="optionsRadios17" value="ضعيف">


                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <input type="radio" name=" read2" id="optionsRadios19" value="خوب">

                        </label>
                    </td>
                    <td colspan="2">
                        <label>
                            <input type="radio" name=" read2" id="optionsRadios20" value="عالي">

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


                                <input type="checkbox" name="status" id="status1" value=" تمام وقت">
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
                            <input type="checkbox" name="jaba4" id="optionsRadios1" value=" مبلغ پيشنهادي">
                            مبلغ پيشنهادي
                            <input type="text" name="jaba4" class=" div-control" id="exampleInputName4"
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
                            <center>
                                <br>

                                معرفي دوستان
                                <input type="checkbox" name="q1" id="o1" value="معرفي دوستان">

                                اينترنت
                                <input type="checkbox" name="q2" id="o2" value="اينترنت ">
                                آگهي روزنامه
                                <input type="checkbox" name="q3" id="o3" value="آگهي روزنامه   ">

                            </center>
                        </div>
                    </td>
                    <td colspan="6"><label>
                            در صورت انتخاب گزینه اینترنت سایت را اعلام فرمایید
                            <textarea name="q4" style="width:220px; height:30px;"></textarea>


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
                        <button type="submit" name="sub_register" value="ارسال اطلاعات"
                                class="btn btn-large btn-block btn-primary ">ثبت کردن
                        </button>

                    </td>
                </tr>

            </table>
        </form>

    </div>
    <?php
    if (isset($_POST['sub_register'])) {
        ///upload img
        $name = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        //// hesh name images
        $foder_uploaded = RIG_UP_DIR . "/";
        $cheank_format = md5($name . microtime()) . substr($name, -5, 5);
        move_uploaded_file($tmp_name, "$foder_uploaded/$cheank_format");
        ///code random
        $rand = rand(200, 10000) . time() . rand(10, 100);
        // Set session variables
        $_SESSION["rand"] = $rand;
        global $wpdb;
        $sql = $wpdb->insert("wp-rigster", [
            "uid" => $_SESSION["rand"],
            "userfile" => $cheank_format,
            "name_fmaily" => $_POST['name_fmaily'],
            "fader" => $_POST['fader'],
            "shsh" => $_POST['shsh'],
            "mhalsordore" => $_POST['mhalsordore'],
            "codemell" => $_POST['codemell'],
            "locallave" => $_POST['locallave'],
            "jnseat" => $_POST['jnseat'],
            "vazetthoall" => $_POST['vazetthoall'],
            "tadatefrenzand" => $_POST['tadatefrenzand'],
            "melet" => $_POST['melet'],
            "slamet" => $_POST['slamet'],
            "slamet_text" => $_POST['slamet_text'],
            "nzamvzef" => $_POST['nzamvzef'],
            "nzamvzef_show" => $_POST['nzamvzef_show'],
            "phone" => $_POST['phone'],
            "tell" => $_POST['tell'],
            "address" => $_POST['address'],
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
                    "academicdegree" => $_POST['academicdegree'],
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
        if (count($sql) > 0) {
            $_SESSION['error'] = "اطلاعات شما با موفق درج شده ";
        } else {
            $_SESSION['error'] = "اطاعات شما درج نشده لطفا بعد دوباره امحتان نمایید.";
        }

        echo $wpdb->show_errors();
        echo $wpdb->print_error();
    }
}

?>

