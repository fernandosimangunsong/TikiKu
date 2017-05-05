<?php
include "koneksi.php";
$sqlprovinsi="select kodeProvinsi,namaProvinsi from provinsi  order by kodeProvinsi asc ";
$resprovinsi   = mysqli_query($con,$sqlprovinsi);
$checkprovinsi = mysqli_num_rows($resprovinsi);

$sql="select kodeKotaKabupaten, namaKotaKabupaten from kotaKabupaten order by namaKotaKabupaten asc";
$reskabupaten   = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
		function pilihprovinsi(kodeProvinsi){
			if(kodeProvinsi!="-1"){
				loadData('kotaKabupaten',kodeProvinsi);
				$("#kecamatan_dropdown").html("<option value='-1'>Pilih Kecamatan</option>");	
			}else{
				$("#kabupaten_dropdown").html("<option value='-1'>Pilih Kabupaten</option>");
				$("#kecamatan_dropdown").html("<option value='-1'>Pilih Kecamatan</option>");		
			}
		}

		function pilihkabupaten(kodeKotaKabupaten){
			if(kodeKotaKabupaten!="-1"){
				loadData('kecamatan',kodeKotaKabupaten);
			}else{
				$("#kecamatan_dropdown").html("<option value='-1'>Pilih Kecamatan</option>");		
			}
		}

		function loadData(loadType,loadId){
			var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
			$("#"+loadType+"_loader").show();
			$("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="image/loading.gif" />');
			$.ajax({
				type: "POST",
				url: "loadData.php",
				data: dataString,
				cache: false,
				success: function(result){
					$("#"+loadType+"_loader").hide();
					$("#"+loadType+"_dropdown").html("<option value='-1'>Pilih "+loadType+"</option>");  
					$("#"+loadType+"_dropdown").append(result);  
				}
			});
		}
	</script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php
			if($checkprovinsi > 0){
				?>
				<form role="form">
					<div class="form-group">
						
							<select class="form-control" onchange="pilihprovinsi(this.options[this.selectedIndex].value)">
								<option value="-1">Pilih Provinsi</option>
								<?php
								while($rowprovinsi=mysqli_fetch_array($resprovinsi)){
									?>
									<option value="<?php echo $rowprovinsi['kodeProvinsi']?>"><?php echo $rowprovinsi['namaProvinsi']?></option>
									<?php
								}
								?>
							</select>
						
					</div>

					<div class="form-group">
						
							<select class="form-control" >
								<option value="-1">Pilih Kabupaten</option>

								<?php
								while($rowkabupaten=mysqli_fetch_array($reskabupaten)){
									?>
									<option value="<?php echo $rowkabupaten['kodeKotaKabupaten']?>"><?php echo $rowkabupaten['namaKotaKabupaten']?></option>
									<?php
								}
								?>
							</select>
						
					</div>


					<!-- <div class="form-group">
						
							<select class="form-control" id="kabupaten_dropdown" onchange="pilihkabupaten(this.options[this.selectedIndex].value)">
								<option value="-1">Pilih Kabupaten</option>
							</select>
							<span id="state_loader"></span>
						
					</div> -->
					
					<div class="form-group">
						
							<select class="form-control" id="kecamatan_dropdown">
								<option value="-1">Pilih Kecamatan</option>
							</select>
							<span id="city_loader"></span>
						
					</div>
				</form>
				<?php
			}else{
				echo 'Data Provinsi tidak ditemukan';
			}
			?>
		</div>
	</div>
</div>

</body>
</html>