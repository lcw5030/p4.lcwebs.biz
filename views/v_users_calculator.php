


<div>
   <body>
      <form name="Calc" method='POST' action='/bibs/p_add'>
         <input type='submit' value='New Race Event' onClick="disableSome()">
         <table border="0" cellpadding="1" cellspacing="0">
            <tr>
               <!-- bgcolor on next line = Border Color -->
               <td>
                  <!-- Embedded table -->
                  <!-- cellspacing on next line = Cell Border -->
                  <table cellpadding="5" cellspacing="1" border="1" class="calculator">
                     <tr>
                        <td bgcolor="white" colspan="3" align="center">
                           <b class="calculator">Calculate for: &nbsp;</b>
                           <select name="CalcWhat" id="calcWhat" class="calcWhat">
                              <option value="0">Time
                              <option value="2">Pace
                           </select>
                        </td>
                     </tr>
                     <tr class="calculator">
                        <td bgcolor="white">
                           <b>Time</b> (h:m:s)
                        </td>
                        <td bgcolor="white">
                           <b>Distance</b>
                        </td>
                        <td bgcolor="white">
                           <b>Pace</b> (h:m:s)
                        </td>
                     </tr>
                     <tr>
                        <td bgcolor="white" id="timeInput">
                           <input type="text" name="timeH" id="timeH" class="numbersOnly timeValue" size="2" maxlength="2">:
                           <input type="text" name="timeM" id="timeM" class="numbersOnly timeValue minSec" size="2" maxlength="2">:
                           <input type="text" name="timeS" id="timeS" class="numbersOnly timeValue minSec" size="2" maxlength="2">
                        </td>
                        <td bgcolor="white">
                           <select name="distance" id="distance" class="distance">
                              <option value="3.1" selected>5k
                              <option value="6.2">10k
                              <option value="13.1">Half Marathon
                              <option value="26.2">Marathon
                           </select>
                        </td>
                        <td bgcolor="white">
                           <input type="text" name="paceH" id="paceH" class="numbersOnly timeValue" size="2" maxlength="2">:
                           <input type="text" name="paceM" id="paceM" class="numbersOnly timeValue minSec" size="2" maxlength="2">:
                           <input type="text" name="paceS" id="paceS" class="numbersOnly timeValue minSec" size="2" maxlength="2">
                        </td>
                     </tr>
                     <tr>
                        <td bgcolor="white">
                           &nbsp;
                        </td>
                        <td bgcolor="white">
                        </td>
                        <td bgcolor="white">
                        </td>
                     </tr>
                     <tr>
                        <td bgcolor="white" colspan="3" align="center">
                           <input type="button" value="Calculate" onClick="calcIT()">
                           <input type="button" value="Clear" onClick="clearNums()">

                        </td>
                     </tr>
                     <tr>
                        <td bgcolor="white" colspan="3" align="center">
                           <input type="button" value="Save My Time for" onClick="saveMyTime()">
                           <input type="text" placeholder="Enter race name here" name="race name" id="raceName" class="raceDetails" size="20">: on
                           <input type="text" placeholder="mm" name="dateMonth" id="raceMonth"class="numbersOnly raceDetails month raceDate" maxlength="2" size="2">/
                           <input type="text" placeholder="dd" name="dateDay" id="raceDay" class="numbersOnly raceDetails day raceDate" maxlength="2" size="2">/
                           <input type="text" placeholder="yyyy" name="dateYear" id="raceYear" class="numbersOnly raceDetails year raceDate" maxlength="4" size="4">
                        </td>
                     </tr>
                  </table>
                  <!-- End embedded table -->
               </td>
               <td>
<?php foreach($bibs as $bib): ?>
   <article>
                  <table cellpadding="0" cellspacing="0" id="certificate">
                     <tr>
                        <td colspan="10" align="center">Congratulations on your Personal Records!</td>
                     </tr>
                     <tr>
                        <td width="60">5k: </td>
                        <td>
                        <input disabled="disabled" class="certificateData" size ="2" name="5kPRH" id="5kPRH" value='<?=$bib['5kPRH']; ?>'/input>
                     </td>
                        <td>:</td>
                        <td>
                        <input disabled="disabled" class="certificateData" size="2" name="5kPRM" id="5kPRM" value='<?=$bib['5kPRM']; ?>'/input>
                     </td>
                        <td>:</td>
                        <td>
                        <input disabled="disabled" class="certificateData" size="2" name="5kPRS" id="5kPRS" value='<?=$bib['5kPRS']; ?>'/input>
                     </td>
                     <td>
                     <input disabled="disabled" class="certificateData" style="padding:10px" name="5kRaceDetails" id="5kRace" value='<?=$bib['5kRaceDetails']; ?>' /input>
                  </td>
                     </tr>
                     <tr>
                        <td width="60">10k: </td>
                        <td>
                        <input disabled="disabled" class="certificateData" size ="2" name="10kPRH" id="10kPRH" value='<?=$bib['10kPRH']; ?>'/input>
                     </td>
                        <td>:</td>
                        <td>
                        <input disabled="disabled" class="certificateData"td size="2" name="10kPRM" id="10kPRM" value='<?=$bib['10kPRM']; ?>'/input>
                     </td>
                        <td>:</td>
                        <td>
                        <input disabled="disabled" class="certificateData" size="2" name="10kPRS" id="10kPRS" value='<?=$bib['10kPRS']; ?>'/input>
                     </td>
                     <td>
                     <input disabled="disabled" class="certificateData" style="padding:10px" name="10kRaceDetails" id="10kRace" value='<?=$bib['10kRaceDetails']; ?>' /input>
                  </td>
                     </tr>
                     <tr>
                        <td width="60">Half Marathon: </td>
                        <td>
                        <input disabled="disabled" class="certificateData" size ="2" name="halfMarathonPRH" id="halfMarathonPRH" value='<?=$bib['halfMarathonPRH']; ?>'/input>
                     </td>
                        <td>:</td>
                        <td>
                        <input disabled="disabled" class="certificateData" size="2" name="halfMarathonPRM" id="halfMarathonPRM" value='<?=$bib['halfMarathonPRM']; ?>'/input>
                     </td>
                        <td>:</td>
                        <td>
                        <input disabled="disabled" class="certificateData" size="2" name="halfMarathonPRS" id="halfMarathonPRS" value='<?=$bib['halfMarathonPRS']; ?>'/input>
                     </td>
                     <td>
                     <input disabled="disabled" class="certificateData" style="padding:10px" name="halfMarathonRaceDetails" id="halfMarathonRace" value='<?=$bib['halfMarathonRaceDetails']; ?>' /input>
                  </td>
                     </tr>
                     <tr>
                        <td width="60">Marathon: </td>
                        <td>
                        <input disabled="disabled" class="certificateData" size ="2" name="marathonPRH" id="marathonPRH" value='<?=$bib['marathonPRH']; ?>'/input>
                     </td>
                        <td>:</td>
                        <td>
                        <input disabled="disabled" class="certificateData" size="2" name="marathonPRM" id="marathonPRM" value='<?=$bib['marathonPRM']; ?>'/input>
                     </td>
                        <td>:</td>
                        <td>
                        <input disabled="disabled" class="certificateData" size="2" name="marathonPRS" id="marathonPRS" value='<?=$bib['marathonPRS']; ?>'/input>
                     </td>
                     <td>
                     <input disabled="disabled" class="certificateData" style="padding:10px" name="marathonRaceDetails" id="marathonRace" value='<?=$bib['marathonRaceDetails']; ?>' /input>
                  </td>
                     </tr>
                  </table>
</article>
              <?php endforeach; ?>

              <?php foreach($bibs as $bib): ?>
<article>
               <td>
                  <table cellpadding="0" cellspacing="0" class="clearPRs" style="padding:100px">
                     <tr>
                        <td>
                           <a href='/bibs/p_delete_5k/<?=$bib['bib_id']; ?>' class="clearPRButton">Clear 5k PR</a>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <a href='/bibs/p_delete_10k/<?=$bib['bib_id']; ?>' class="clearPRButton">Clear 10k PR</a>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <a href='/bibs/p_delete_halfMarathon/<?=$bib['bib_id']; ?>' class="clearPRButton">Clear half Marathon PR</a>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <a href='/bibs/p_delete_marathon/<?=$bib['bib_id']; ?>' class="clearPRButton">Clear marathon PR</a>
                        </td>
                     </tr>
                  </table>
               </td>

               </article>

<?php endforeach; ?>
               </td>
            </tr>
            <tr>
               <td align="center" id="calcErrorHandling">
               </td>
            </tr>
            <td>
               <table>
               </table>
            </td>
         </table>
      </form>
      <script language="JavaScript" src="/javascript/pacecalc_orig_api.js"></script>
      <script language="JavaScript" src="/javascript/pacecalc_functionality.js"></script>
   </body>
</div>
