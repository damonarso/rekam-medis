<head>
	<title>Patient Form</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	    <link rel="icon" href="../../favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="../../public/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../public/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="../../public/assets/js/ie-emulation-modes-warning.js"></script>
		<script src="../../public/assets/js/smoothscroll.js"></script>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../../public/css/carousel.css" rel="stylesheet">
</head>

<body>
  <div class="col-md-12">
         <a href="patients.blade.php"><img src="../../public/img/AVERROES LOGO TEXT.png" width = "150" height = "50"></a>
   </div>
  <div class="container">
      <div class="col-md-12" id="basket">
          <div class="box">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ Form::open(array('url' => 'patients')) }}
              <h1 style="text-align: center">Data Rekam Medis</h1>
              <div class="table-responsive">
                  <div class="content">
                     <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                              <label for="patient_number">Nomor Pasien</label>
                              <input type="text" class="form-control namecookie" name="patient_number" required>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                              <label for="allergy_history">Riwayat Alergi</label>
                              <input type="text" class="form-control namecookie" name="allergy_history" required>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                              <label for="insurance">Asuransi</label>
                              <input type="text" class="form-control namecookie" name="insurance" required>
                          </div>
                        </div>
                      </div>
                     <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control namecookie" name="name" required>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                              <label for="parents">Orang Tua</label>
                              <input type="text" class="form-control namecookie" name="parents" required>
                          </div>
                        </div>
                      </div>
                     <div class="row">
                        <div class="col-sm-2">
                          <div class="form-group">
                              <label for="age">Umur</label>
                              <input type="text" class="form-control namecookie" name="age" required>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                              <label for="birthday">Tanggal Lahir</label>
                              <input type="date" class="form-control namecookie" name="birthday" required>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                              <label for="partner">Suami/Istri</label>
                              <input type="text" class="form-control namecookie" name="partner" required>
                          </div>
                        </div>
                      </div>
                      <!-- /.row -->
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <input type="text" class="form-control namecookie" name="gender" required>
                          </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                              <label for="education">Pendidikan</label>
                              <input type="text" class="form-control namecookie" name="education" required>
                            </div>
                          </div>
                       </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="religion">Agama</label>
                            <input type="text" class="form-control namecookie" name="religion" required>
                          </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                              <label for="job">Pekerjaan</label>
                              <input type="text" class="form-control namecookie" name="job" required>
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="marriage">Perkawinan</label>
                            <input type="text" class="form-control namecookie" name="marriage" required>
                          </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                              <label for="address">Alamat</label>
                              <input type="text" class="form-control namecookie" name="address" required>
                            </div>
                          </div>
                      </div>
                      <div class="row">
                         <div class="col-sm-6">
                            <div class="form-group">
                              <label for="phone_number">No. Telepon</label>
                              <input type="text" class="form-control namecookie" name="phone_number" required>
                            </div>
                          </div>
                      </div>
                      <div class="row">
                         <div class="col-sm-3">
                            <div class="form-group">
                              <label for="weight">Berat Badan</label>
                              <input type="number_format" class="form-control namecookie" name="weight" required>
                            </div>
                          </div>
                         <div class="col-sm-3">
                            <div class="form-group">
                              <label for="height">Tinggi Badan</label>
                              <input type="number_format" class="form-control namecookie" name="height" required>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                      <table class="table" id="rekam">
              <tr>
                <th>Tanggal</th>
                <th>Anamnesa</th>
                <th>Pemeriksaan Fisik</th>
                <th>Diagnosa</th>
                <th>Tindakan</th>
                <th>Dokter</th>
              </tr>
                        <tr>
                             <td>
                                 <input type="date" class="form-control" name="date">
                         </td>
                             <td>
                                  <input type="text" class="form-control" name="anamnesa">
                         </td>
                           <td>
                                  <input type="text" class="form-control" name="physical_examination">
                           </td>
                           <td>
                                  <input type="text" class="form-control" name="diagnosis">
                           </td>
                           <td>
                                  <input type="text" class="form-control" name="act">
                           </td>
                           <td>
                                 <input type="text" class="form-control" name="doctor">
                           </td>
                          </tr>     
                      </table>
                       <div class="box-footer">
                        <div class="pull-right">
                               <input type="submit" value="Save Data" class="co-button btn btn-primary"/>
                           </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>  
	
</body>



