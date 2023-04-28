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
      echo "<table class='table table-bordered table-hover table-sm'>";
      echo "<thead class='thead-dark' align='center'>";
      echo "<th>Id</th>";
      echo "<th>DP</th>";
      echo "<th>Name</th>";
      echo "<th>College</th>";
      echo "<th>email</th>";
      echo "<th>diploma</th>";
      echo "</thead>";
      foreach ($results as $result) {
        echo "<tr>";
        echo "<td>$result[id]</td>";
        echo "<td><img class='rounded-circle profpic img-thumbnail ml-3' alt='100x100' style='' src='data:".$result['mm'].";base64,".base64_encode($result['dp'])."'/></td>";
        echo "<td>$result[name]</td>";
        echo "<td>$result[colleges]</td>";
        echo "<td>$result[email]</td>";
        echo "<td>$result[diploma]</td>";
        echo "</tr>";
    }
    echo "</table>";



  }
}
?>