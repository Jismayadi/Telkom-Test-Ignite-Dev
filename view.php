<div class="table-responsive col-xs-12 col-sm-8">
  <table class="table table-bordered">
    <tr>
      <th class="text-center">NO</th>
      <th>Nama Wilayah</th>
      <th>Suara Jokowi</th>
      <th>Suara Prabowo</th>
    </tr>

    <?php
      include 'setting/conf.php';

      if(isset($keyword)){
        $param = mysqli_real_escape_string($connect, $keyword);
        $param2 = mysqli_real_escape_string($connect, $keyword2);
        if ($keyword == "Kota") {
          $sql = mysqli_query($connect, "SELECT a.* , b.* , SUM(suara_jokowi) AS total_jokowi , SUM(suara_prabowo) AS total_prabowo FROM z_kota a , z_kecamatan b WHERE a.kode_kota = b.kode_kota GROUP BY a.nama_kota");
          $no = 1;
          $totaljokowi = 0;
          $totalprabowo = 0;
          while ($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)) {
      		?>
            <tr>
              <td class="align-middle text-center"><?php echo $no; ?></td>
      				<td class="align-middle"><?php echo $row['nama_kota']; ?></td>
              <td class="align-middle"><?php echo number_format($row['total_jokowi'], 0 , ',' , '.'); ?></td>
              <td class="align-middle"><?php echo number_format($row['total_prabowo'], 0 , ',' , '.'); ?></td>
            </tr>
          <?php
          $totaljokowi += $row['total_jokowi'];
          $totalprabowo += $row['total_prabowo'];
          $no++;
          }
          ?>
          <tr>
            <td colspan="2">TOTAL SUARA</td>
            <td><?php echo number_format($totaljokowi, 0 , ',' , '.');  ?></td>
            <td><?php echo number_format($totalprabowo, 0 , ',' , '.');  ?></td>
          </tr>
          <?php
        }
        elseif ($keyword == "Kecamatan" AND $keyword2 == "") {
          // code...
          $sql = mysqli_query($connect, "SELECT * FROM z_kecamatan");
          $no = 1;
          while ($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)) {
      		?>
            <tr>
              <td class="align-middle text-center"><?php echo $no; ?></td>
      				<td class="align-middle"><?php echo $row['nama_kec']; ?></td>
              <td class="align-middle"><?php echo number_format($row['suara_jokowi'], 0 , ',' , '.'); ?></td>
              <td class="align-middle"><?php echo number_format($row['suara_prabowo'], 0 , ',' , '.'); ?></td>
            </tr>
          <?php
          $no++;
        }
      }
      elseif ($keyword == "Kecamatan" AND $keyword2 != "") {
        // code...
        $sql = mysqli_query($connect, "SELECT a.* , b.* , SUM(suara_jokowi) AS total_jokowi , SUM(suara_prabowo) AS total_prabowo FROM z_kota a , z_kecamatan b WHERE a.kode_kota = b.kode_kota AND a.nama_kota LIKE '".$param2."' GROUP BY b.kode_kota , b.kode_kec");
        $no = 1;
        $totaljokowi = 0;
        $totalprabowo = 0;
        while ($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)) {
        ?>
          <tr>
            <td class="align-middle text-center"><?php echo $no; ?></td>
            <td class="align-middle"><?php echo $row['nama_kec']; ?></td>
            <td class="align-middle"><?php echo number_format($row['suara_jokowi'], 0 , ',' , '.'); ?></td>
            <td class="align-middle"><?php echo number_format($row['suara_prabowo'], 0 , ',' , '.'); ?></td>
          </tr>
        <?php
        $totaljokowi += $row['total_jokowi'];
        $totalprabowo += $row['total_prabowo'];
        $no++;
      }
      ?>
      <tr>
        <td colspan="2">TOTAL SUARA</td>
        <td><?php echo number_format($totaljokowi, 0 , ',' , '.');  ?></td>
        <td><?php echo number_format($totalprabowo, 0 , ',' , '.');  ?></td>
      </tr>
      <?php
    }
    }

    ?>
	</table>
</div>
