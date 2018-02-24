jQuery(document).ready(function(){

    var count=1;
    var max_addinput = 8;
    jQuery("#addhtml").click(function () {
           if(count < max_addinput){
           count++;
         jQuery(".myhtml tbody").append(

                "<tr> <td>"+
               "<div class=form-group>"+
                   "<input name='endmakeer[]' class='form-control' id='endmakeer' type='text'>" +
               "</div>"+
               "</td>"+
               "<td>"+
                   "<div class='form-group'>"+
                       "<input name='fieldstudr[]' class='form-control' id='fieldstudr' type='text'>"+
                   "</div>"+
               "</td>"+
               "<td class='sets'>"+
                   "<div class='form-group'>"+
                       "<select name='si[]'>"+
                         "<option> سال</option>1300<option>1301</option><option>1302</option><option>1303</option><option>1304</option><option>1305</option><option>1306</option><option>1307</option><option>1308</option><option>1309</option><option>1310</option><option>1311</option><option>1312</option><option>1313</option><option>1314</option><option>1315</option><option>1316</option><option>1317</option><option>1318</option><option>1319</option><option>1320</option><option>1321</option><option>1322</option><option>1323</option><option>1324</option><option>1325</option><option>1326</option><option>1327</option><option>1328</option><option>1329</option><option>1330</option><option>1331</option><option>1332</option><option>1333</option><option>1334</option><option>1335</option><option>1336</option><option>1337</option><option>1338</option><option>1339</option><option>1340</option><option>1341</option><option>1342</option><option>1343</option><option>1344</option><option>1345</option><option>1346</option><option>1347</option><option>1348</option><option>1349</option><option>1350</option><option>1351</option><option>1352</option><option>1353</option><option>1354</option><option>1355</option><option>1356</option><option>1357</option><option>1358</option><option>1359</option><option>1360</option><option>1361</option><option>1362</option><option>1363</option><option>1364</option><option>1365</option><option>1366</option><option>1367</option><option>1368</option><option>1369</option><option>1370</option><option>1371</option><option>1372</option><option>1373</option><option>1374</option><option>1375</option><option>1376</option><option>1377</option><option>1378</option><option>1379</option><option>1380</option><option>1381</option><option>1382</option><option>1383</option><option>1384</option><option>1385</option><option>1386</option><option>1387</option><option>1388</option><option>1389</option><option>1390</option><option>1391</option><option>1392</option><option>1393</option><option>1394</option><option>1395</option><option>1396</option><option>1397</option><option>1398</option><option>1399</option><option>1400</option><option>1401</option><option>1402</option><option>1403</option><option>1404</option><option>1405</option><option>1406</option><option>1407</option><option>1408</option><option>1409</option><option>1410</option><option>1411</option><option>1412</option><option>1413</option><option>1414</option><option>1415</option><option>1416</option><option>1417</option><option>1418</option><option>1419</option><option>1420</option>"+
                       "</select>"+
                       "<select name='sm[]'>"+
                           "<option>ماه</option>1<option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>"+
                        "</select>"+
                       "<select name='sd[]'>"+
                           "<option>روز</option>1<option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>"
                         +"</select>"+
                      "</div>"+
               "</td>"+

               "<td class='sets'>"+

               "<div class='form-group'>"+

                       "<select name='sei[]'>"+
                           "<option> سال</option>1300<option>1301</option><option>1302</option><option>1303</option><option>1304</option><option>1305</option><option>1306</option><option>1307</option><option>1308</option><option>1309</option><option>1310</option><option>1311</option><option>1312</option><option>1313</option><option>1314</option><option>1315</option><option>1316</option><option>1317</option><option>1318</option><option>1319</option><option>1320</option><option>1321</option><option>1322</option><option>1323</option><option>1324</option><option>1325</option><option>1326</option><option>1327</option><option>1328</option><option>1329</option><option>1330</option><option>1331</option><option>1332</option><option>1333</option><option>1334</option><option>1335</option><option>1336</option><option>1337</option><option>1338</option><option>1339</option><option>1340</option><option>1341</option><option>1342</option><option>1343</option><option>1344</option><option>1345</option><option>1346</option><option>1347</option><option>1348</option><option>1349</option><option>1350</option><option>1351</option><option>1352</option><option>1353</option><option>1354</option><option>1355</option><option>1356</option><option>1357</option><option>1358</option><option>1359</option><option>1360</option><option>1361</option><option>1362</option><option>1363</option><option>1364</option><option>1365</option><option>1366</option><option>1367</option><option>1368</option><option>1369</option><option>1370</option><option>1371</option><option>1372</option><option>1373</option><option>1374</option><option>1375</option><option>1376</option><option>1377</option><option>1378</option><option>1379</option><option>1380</option><option>1381</option><option>1382</option><option>1383</option><option>1384</option><option>1385</option><option>1386</option><option>1387</option><option>1388</option><option>1389</option><option>1390</option><option>1391</option><option>1392</option><option>1393</option><option>1394</option><option>1395</option><option>1396</option><option>1397</option><option>1398</option><option>1399</option><option>1400</option><option>1401</option><option>1402</option><option>1403</option><option>1404</option><option>1405</option><option>1406</option><option>1407</option><option>1408</option><option>1409</option><option>1410</option><option>1411</option><option>1412</option><option>1413</option><option>1414</option><option>1415</option><option>1416</option><option>1417</option><option>1418</option><option>1419</option><option>1420</option>"+
                        "</select>"+

                       "<select name='sem[]'>"+
                           "<option>ماه</option>1<option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>"+
                       "</select>"+


                       "<select name='sed[]'>"+
                           "<option>روز</option>1<option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>"+
                       "</select>"+

                   "</div>"+

               "</td> <td>"+

                 "<input name='avg[]' class='form-control' id='avg' type='text'>"+

               "</td>"+

               "<td>"+
                   "<div class='form-group'>"+
                       "<input name='name_acodmentk[]' class='form-control' id='name_acodmentk' type='text'>"+
                   '</div>'+
               "</td>"+
               "<td>"+
                   "<div class='form-group'>"+
                       "<input name='city[]' class='form-control' id='city' type='text'>"+

             "</div>"+
                "<td>"+ '<p class="remove_field btn btn-danger" ><i class="glyphicon glyphicon-remove"></i></p>'+"</td>"+
               "</td>"+
                "</tr>"
         );
     }else{
               alert('تعداد درخواست شما بیش از حد مجاز می باشد');
               return false;
           }

    });
    jQuery(".myhtml tbody").on("click",".remove_field", function(e){ //user click on remove text links
            e.preventDefault();
         jQuery(this).parents('tr').remove();
          count--;

    });

    //// car
    var count=1;
    var max_addinput = 8;
    jQuery("#addcar").click(function () {
        if(count < max_addinput){
            count++;
            jQuery(".mycar tbody").append(

            "<tr><td>"+
            "<div class='form-group'>"+
                "<input name='compantlast[]' class='form-control' id='compantlast[]' type='text'>"+
                "</div> </td>"+
                "<td>  <div class='form-group'>"+
                "<input name='side[]' class='form-control' id='side' type='text'>"+
                "</div>"+
                "</td>"+
                "<td>"+
                "<div class='form-group'>"+
                "<input name='timehistory[]' class='form-control' id='timehistory' type='text'>"+
                "</div>"+
                "</td>"+
                "<td class='ttt'>"+
                "<div class='form-group'>"+
                "<select name='comi[]'>"+
                "<option> سال</option>1300<option>1301</option><option>1302</option><option>1303</option><option>1304</option><option>1305</option><option>1306</option><option>1307</option><option>1308</option><option>1309</option><option>1310</option><option>1311</option><option>1312</option><option>1313</option><option>1314</option><option>1315</option><option>1316</option><option>1317</option><option>1318</option><option>1319</option><option>1320</option><option>1321</option><option>1322</option><option>1323</option><option>1324</option><option>1325</option><option>1326</option><option>1327</option><option>1328</option><option>1329</option><option>1330</option><option>1331</option><option>1332</option><option>1333</option><option>1334</option><option>1335</option><option>1336</option><option>1337</option><option>1338</option><option>1339</option><option>1340</option><option>1341</option><option>1342</option><option>1343</option><option>1344</option><option>1345</option><option>1346</option><option>1347</option><option>1348</option><option>1349</option><option>1350</option><option>1351</option><option>1352</option><option>1353</option><option>1354</option><option>1355</option><option>1356</option><option>1357</option><option>1358</option><option>1359</option><option>1360</option><option>1361</option><option>1362</option><option>1363</option><option>1364</option><option>1365</option><option>1366</option><option>1367</option><option>1368</option><option>1369</option><option>1370</option><option>1371</option><option>1372</option><option>1373</option><option>1374</option><option>1375</option><option>1376</option><option>1377</option><option>1378</option><option>1379</option><option>1380</option><option>1381</option><option>1382</option><option>1383</option><option>1384</option><option>1385</option><option>1386</option><option>1387</option><option>1388</option><option>1389</option><option>1390</option><option>1391</option><option>1392</option><option>1393</option><option>1394</option><option>1395</option><option>1396</option><option>1397</option><option>1398</option><option>1399</option><option>1400</option><option>1401</option><option>1402</option><option>1403</option><option>1404</option><option>1405</option><option>1406</option><option>1407</option><option>1408</option><option>1409</option><option>1410</option><option>1411</option><option>1412</option><option>1413</option><option>1414</option><option>1415</option><option>1416</option><option>1417</option><option>1418</option><option>1419</option><option>1420</option>"+
            "</select>"+

            "<select name='comm[]'>"+
                "<option>ماه</option>1<option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>"+
            "</select>"+

            "<select name='comd[]'>"+
                "<option>روز</option>1<option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>"+
            "</select>"+

            "</div>"+
            "</td>"+
            "<td class='ttt'>"+
                "<div class='form-group'>"+
                "<select name='comei[]'>"+
                "<option> سال</option>1300<option>1301</option><option>1302</option><option>1303</option><option>1304</option><option>1305</option><option>1306</option><option>1307</option><option>1308</option><option>1309</option><option>1310</option><option>1311</option><option>1312</option><option>1313</option><option>1314</option><option>1315</option><option>1316</option><option>1317</option><option>1318</option><option>1319</option><option>1320</option><option>1321</option><option>1322</option><option>1323</option><option>1324</option><option>1325</option><option>1326</option><option>1327</option><option>1328</option><option>1329</option><option>1330</option><option>1331</option><option>1332</option><option>1333</option><option>1334</option><option>1335</option><option>1336</option><option>1337</option><option>1338</option><option>1339</option><option>1340</option><option>1341</option><option>1342</option><option>1343</option><option>1344</option><option>1345</option><option>1346</option><option>1347</option><option>1348</option><option>1349</option><option>1350</option><option>1351</option><option>1352</option><option>1353</option><option>1354</option><option>1355</option><option>1356</option><option>1357</option><option>1358</option><option>1359</option><option>1360</option><option>1361</option><option>1362</option><option>1363</option><option>1364</option><option>1365</option><option>1366</option><option>1367</option><option>1368</option><option>1369</option><option>1370</option><option>1371</option><option>1372</option><option>1373</option><option>1374</option><option>1375</option><option>1376</option><option>1377</option><option>1378</option><option>1379</option><option>1380</option><option>1381</option><option>1382</option><option>1383</option><option>1384</option><option>1385</option><option>1386</option><option>1387</option><option>1388</option><option>1389</option><option>1390</option><option>1391</option><option>1392</option><option>1393</option><option>1394</option><option>1395</option><option>1396</option><option>1397</option><option>1398</option><option>1399</option><option>1400</option><option>1401</option><option>1402</option><option>1403</option><option>1404</option><option>1405</option><option>1406</option><option>1407</option><option>1408</option><option>1409</option><option>1410</option><option>1411</option><option>1412</option><option>1413</option><option>1414</option><option>1415</option><option>1416</option><option>1417</option><option>1418</option><option>1419</option><option>1420</option>"+

            "</select>"+

            "<select name='comem[]'>"+
               "<option>ماه</option>1<option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option> "+
             "</select>"+

            "<select name='comed[]'>"+
                "<option>روز</option>1<option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>"+
            "</select>"+
            "</div>"+
            "</td>"+
            "<td>"+
            "<div class='form-group'>"+
                "<input name='couseraver[]' class='form-control' id='couseraver' type='text'>"+
                "</div></td>"+
                "<td>"+
                "<div class='form-group'>"+
                "<textarea class='form-control' name='exitcar[]' id='exitcar'></textarea>"+
                '<p class="remove_field_car"><i class="glyphicon glyphicon-remove"></i></p>'+

                "</div> </td>"+
                "</tr>"
            );
        }else{
            alert('تعداد درخواست شما بیش از حد مجاز می باشد');
            return false;
        }

    });
    jQuery(".mycar tbody").on("click",".remove_field_car", function(e){ //user click on remove text links
        e.preventDefault();
        jQuery(this).parents('tr').remove();
        count--;

    });

    ///slamet
    var commit_slamet = jQuery("#commit_slamet").hide();
    var nzamvzef_show =  jQuery("#nzamvzef_show").hide();
    ///slamet
    jQuery(".div-inline .slamet").change(function(){
           var status = jQuery("#slamet_yes").prop("checked");
             if(status == true) {
                 jQuery("#commit_slamet").slideDown(1000,function(){
                 });
              }else if(status == false) {
                 jQuery("#commit_slamet").slideUp(1000);
             }

     });
      ///nzamvzef
    jQuery(".div-inline #optionsRaios24").change(function(){
        var status = jQuery(".ns").prop("checked");
        if(status == true) {
            jQuery("#nzamvzef_show").slideDown(1000,function(){
            });
        }else if(status == false) {
            jQuery("#nzamvzef_show").slideUp(1000);
        }

    });
});
