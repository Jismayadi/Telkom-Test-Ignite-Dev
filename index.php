<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Hitung Suara Pemilu</title>

    <!-- Load File bootstrap.min.css yang ada difolder css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Membuat Navbar -->
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="">
				<div class="">
					<a class="navbar-brand" href="#" style="color: white;"><b>Hasil Hitung Suara Pemilu</b></a>
				</div>
			</div>
		</nav>
    <!-- Combo box dan Button -->
    <div style="padding: 0 15px;">
      <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="form-group col-xs-6 col-sm-3">
              <label for="keyword">View:</label>
              <select class="form-control" id="keyword">
                <option value="Kota">Kota</option>
                <option value="Kecamatan">Kecamatan</option>
              </select>
            </div>
            <div class="form-group col-xs-6 col-sm-3">
              <label for="keyword2">View Kecamatan sesuai Kota:</label>
              <select class="form-control" id="keyword2">
                <option value="">ALL</option>
                <option value="Balikpapan">Balikpapan</option>
                <option value="Samarinda">Samarinda</option>
                <option value="Bontang">Bontang</option>
              </select>
            </div>
            <div class="col-xs-6 col-sm-3" style="padding: 0px 0px 1px 0px;">
              <br>
              <button class="btn btn-primary" type="button" id="btn-search">SEARCH</button>
							<a href="" class="btn btn-warning">RESET</a>
            </div>
        </div>
      </div>
      <br>

      <!-- Tabel View -->
      <div id="view"><?php include "view.php"; ?></div>


    </div>
    <div  class="col-xs-12 col-sm-12" style="position: fixed; bottom: 3%">
      <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
          <a href="https://github.com/Jismayadi"> Jismayadi</a>
        </div>
        <!-- Copyright -->

      </footer>
      <!-- Footer -->
    </div>


    <!-- Load File jquery.min.js-->
		<script src="js/jquery.min.js"></script>
		<!-- Load File bootstrap.min.js-->
		<script src="js/bootstrap.min.js"></script>
		<!-- Load file ajax.js-->
		<script src="js/ajax.js"></script>
    <!-- Disable Enabled dari Dropdown 2 -->
    <script type="text/javascript">
    $(document).ready(function() {
      $('#keyword2').attr('disabled', 'disabled');
      $('#keyword').change(function(){
        if($(this).val() === 'Kota'){
            $('#keyword2').attr('disabled', 'disabled');
            $('#keyword2').prop('selectedIndex', 0);
        }else{
            $('#keyword2').attr('disabled', false);

        }
      });

    });
    </script>
  </body>
</html>
