
            <?php

          while($row = mysql_fetch_array($result_event)){   //Creates a loop to loop through results
            $output = "<table id='akce' class='table'>";
            $output .= "<tr>";
            $output .= "<td><strong>" . $row['subject_en'] . " </strong></td>";
            $output .= "</tr>";
            $output .= "<tr>";
            $output .= "<td>(event added " . date('d.m.Y', strtotime($row['date'])) . ")" . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
              $output .= "<td>". $row['message_en'] . "</td>";
            $output .= "</tr>";
            $output .= "</table>";
            echo $output;
          }

          mysql_close($dbhandle);
          ?>
