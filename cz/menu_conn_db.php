
            <?php

          while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
            if (date("W", strtotime($row['date'])) == date('W')) {
              $output = "<table id='vypis_menu' class='table'>";
            $output .= "<tr>";
              $output .= "<td></td>";
              if ($row['date'] == date("Y-m-d")) {
                $output .= "<td><strong><span class='oranzovy_text'>". date('d.m.Y', strtotime($row['date'])) . "</strong></span></td>";
              } else {
                $output .= "<td><strong>". date('d.m.Y', strtotime($row['date'])) . "</strong></td>";
              }
            $output .= "</tr>";
            $output .= "<tr>";
              $output .= "<td>1. </td>";
              $output .= "<td>". $row['meal1'] . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
              $output .= "<td>2. </td>";
              $output .= "<td>". $row['meal2'] . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
              $output .= "<td>3. </td>";
              $output .= "<td>". $row['meal3'] . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
              $output .= "<td>4. </td>";
              $output .= "<td>". $row['meal4'] . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
              $output .= "<td>5. </td>";
              $output .= "<td>". $row['meal5'] . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
              $output .= "<td>6. </td>";
              $output .= "<td>". $row['meal6'] . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
              $output .= "<td>7. </td>";
              $output .= "<td>". $row['meal7'] . "</td>";
            $output .= "</tr>";
            $output .= "<tr>";
              $output .= "<td>8. </td>";
              $output .= "<td>". $row['meal8'] . "</td>";
            $output .= "</tr>";
            $output .= "</table>";
            echo $output;
            } 
          }

          mysql_close($dbhandle);
          ?>
