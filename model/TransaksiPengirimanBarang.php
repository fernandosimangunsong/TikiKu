<?php
	class TransaksiPengirimanBarang{

		public function __construct(){
			$this->db = new PDO('mysql:host=localhost;dbname=dbRest','root','ilkom741');
		}	

		public function showTransaksiPengirimanBarang(){
			$sql = "SELECT * FROM transaksiPengirimanBarang";
			$query = $this->db->query($sql);
			return $query;
		}

		public function transaksiPengirimanBarang($dataTransaksiPengirimanBarang){
			$sql = "INSERT INTO transaksiPengirimanBarang (resiPengiriman, namaPengirim, alamatPengirim, noTeleponPengirim, kodeProvinsiPengirim, kodeKotaKabupatenPengirim, namaPenerima,  alamatPenerima, noTeleponPenerima, kodeProvinsiPenerima, kodeKotaKabupatenPenerima, kodeKecamatanPenerima, kodeProdukPengiriman, kodeJenisBarang, beratBarang, kodeStatusPengirimanBarang, tanggalTransaksi, biayaPengirimanBarang:) 
				VALUES('$dataTransaksiPengirimanBarang[1]','$dataTransaksiPengirimanBarang[2]','$dataTransaksiPengirimanBarang[3]','$dataTransaksiPengirimanBarang[4]','$dataTransaksiPengirimanBarang[5]','$dataTransaksiPengirimanBarang[6]','$dataTransaksiPengirimanBarang[7]','$dataTransaksiPengirimanBarang[8]','$dataTransaksiPengirimanBarang[9]','$dataTransaksiPengirimanBarang[10]','$dataTransaksiPengirimanBarang[11]','$dataTransaksiPengirimanBarang[12]','$dataTransaksiPengirimanBarang[13]','$dataTransaksiPengirimanBarang[14]','$dataTransaksiPengirimanBarang[15]' ,'$dataTransaksiPengirimanBarang[16]','$dataTransaksiPengirimanBarang[17]','$dataTransaksiPengirimanBarang[18]')
					";

			$query = $this->db->query($sql);
			
			if(!$query){
				return "Failed";
			}else{
				return "Success";
			}
		}


		

		public function editStatusPengiriman($resiPengiriman){
			$sql = "SELECT * FROM transaksiPengirimanBarang WHERE resiPengiriman='$resiPengiriman'";
			$query = $this->db->query($sql);
			return $query;
		}


		public function updateStatusPengiriman($resiPengiriman, $kodestatusPengirimanBarang){
			$sql = "UPDATE transaksiPengirimanBarang SET kodeStatusPengirimanBarang='$kodestatusPengirimanBarang' WHERE resiPengiriman='$resiPengiriman'";
			$query = $this->db->query($sql);
			if(!$query){
				return "Failed";
			}else{
			 return "Success";
			}
		}




	}



		

