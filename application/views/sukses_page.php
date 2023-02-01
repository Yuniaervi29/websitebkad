<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<br>

<html>
    <title>notifikasi</title>
    <link rel="icon" type="image/favicon.png" href="<?=base_url();?>/assets/img/favicon.png">
    <section class="error">
			<div class="container">
			    <input type="hidden" id=noreg name=noreg value="<?=$noreg;?>"readonly>
				<div class="row">
					<div class="jumbotron">
                      <h1 class="display-4">Terimakasih!</h1>
                      <p class="lead">Permohonan informasi anda segera kami proses.</p>
                      <hr class="my-4">
                      <p class="lead">
                        <a class="btn btn-danger btn-lg" style="color: white;" onclick="print();"> Cetak</a>
                      </p>
                    </div>
				</div>
			</div>
</section>
</html>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
function print(){
  var noreg = $('#noreg').val();
  
  var url = "<?=base_url();?>admin/permohonan_informasi/cetak?no="+noreg;
  var res_url = encodeURI(url);
  window.open(res_url);
  window.focus();
 
}
</script>