<?php
      while($eventsVar = mysql_fetch_array($events) )  {
                 echo '<a href="' . $eventsVar["events_link"] . '?id='. $eventsVar["events_id"]. '"
                  id='. '"a'.$eventsVar["events_id"] .'"'. '>' . $eventsVar['events_text']."</a>
                  <br/><br/>" .

                  "<img id= 'img" .  $eventsVar['events_id']  ."' src='images/events/" .$eventsVar['events_title'] . "' style='display:none'/>";
     }//ends while
?>