<?php
require_once ('resource/php/class/core/init.php');

class teacherTable extends config{

public function viewData(){
      $con=$this->con();
      $sql = "SELECT * FROM tbl_accounts";
      $data = $con->prepare($sql);
      $data->execute();
      $results = $data->fetchAll(PDO::FETCH_ASSOC);

      echo "<h3 align='center'>Accounts table</h3>";
      echo "<table class='table table-hover table-sm table-light' id='teachtbl'>";
      echo "<thead class='thead-dark' align='center'>";
      echo "<th>DP</th>";
      echo "<th>Name</th>";
      echo "<th>College</th>";
      echo "<th>Email</th>";
      echo "<th>Status</th>";
      echo "</thead>";
      foreach ($results as $result) {
        $status=$result['status'];
          if($status=="student")
          {
              $color="color:green";
          }
          else 
          {
              $color="color:red";
          }
          echo "<tr><td><img class='profpic img-thumbnail' alt='100x100' src='data:".$result['mm'].";base64,".base64_encode($result['dp'])."'/></td>
          <td>$result[name]</td>
          <td>$result[colleges]</td>
          <td>$result[email]</td>
          <td style='$color'>".$status ."</td></tr>";  
      }
      echo "</table>";
      
      
      
    }
  }
  ?>