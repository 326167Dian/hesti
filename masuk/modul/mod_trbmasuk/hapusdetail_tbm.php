<?php 
include "../../../configurasi/koneksi.php";

$id_dtrbmasuk  = $_POST['id_dtrbmasuk'];

//ambil data
$ambildata=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM trbmasuk_detail 
WHERE id_dtrbmasuk='$id_dtrbmasuk'");
$r=mysqli_fetch_array($ambildata);

$id_barang = $r['id_barang'];
$qty_dtrbmasuk = $r['qty_dtrbmasuk'];

//update stok
$cekstok=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT id_barang, stok_barang FROM barang 
WHERE id_barang='$id_barang'");
$rst=mysqli_fetch_array($cekstok);

$stok_barang = $rst['stok_barang'];
$stokakhir = $stok_barang - $qty_dtrbmasuk;

mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE barang SET stok_barang = '$stokakhir' WHERE id_barang = '$id_barang'");



$id_dtrkasir = $r['id_dtrbmasuk'];
$id_barang = $r['id_barang'];
$qty_dtrkasir = $r['qty_dtrbmasuk'];

$ambildatainduk = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM trbmasuk WHERE id_trkasir='$_GET[id]'");
$r1 = mysqli_fetch_array($ambildatainduk);
			
mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO trkasir_restore(
						kd_trkasir, petugas, shift, tgl_trkasir, nm_pelanggan, tlp_pelanggan, alamat_pelanggan,
						ttl_trkasir, dp_bayar, diskon1, diskon2, sisa_bayar, ket_trkasir, id_carabayar, id_barang,
						kd_barang, nmbrg_dtrkasir, qty_dtrkasir, sat_dtrkasir, hrgjual_dtrkasir, hrgttl_dtrkasir)
			VALUES(
						'$r1[kd_trbmasuk]','$r1[petugas]','$r1[shift]','$r1[tgl_trbmasuk]','$r1[nm_supplier]','$r1[tlp_supplier]','$r1[alamat_trbmasuk]','$r1[ttl_trbmasuk]','$r1[dp_bayar]','$r1[diskon1]','$r1[diskon2]','$r1[sisa_bayar]','$r1[ket_trbmasuk]','$r1[id_carabayar]','$r[id_barang]','$r[kd_barang]','$r[nmbrg_dtrbmasuk]','$r[qty_dtrbmasuk]','$r[sat_dtrbmasuk]','$r[hrgjual_dtrbmasuk]','$r[hrgttl_dtrbmasuk]')");
						
mysqli_query($GLOBALS["___mysqli_ston"], "DELETE FROM trbmasuk_detail WHERE id_dtrbmasuk = '$id_dtrbmasuk'");						
?>
