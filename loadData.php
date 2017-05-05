<?php
include 'koneksi.php';

$loadType=$_POST['loadType'];
$loadId=$_POST['loadId'];



if($loadType=="kotaKabupaten"){
    $sql="select kodeKotaKabupaten, namaKotaKabupaten from kotaKabupaten where kodeProvinsi='".$loadId."' order by namaKotaKabupaten asc";
}

$res=mysqli_query($con,$sql);
$check=mysqli_num_rows($res);

if($check > 0){
    $HTML="";
    while($row=mysqli_fetch_array($res)){
        $HTML.="<option value='".$row['kodeKotaKabupaten']."'>".$row['1']."</option>";
    }
    echo $HTML;
}
?>