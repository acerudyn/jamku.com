<?php
session_start();
include "koneksi.php";

if ($_SESSION['admin'] == $_GET['edit']) {
    header("location:admin-edit.php"); 
  }
 else { ?>
  	<script type="text/javascript">
    	alert('Maaf, Anda tidak berhak mengedit !')
		document.location='admin.php';
    </script>
    <?php } ?>