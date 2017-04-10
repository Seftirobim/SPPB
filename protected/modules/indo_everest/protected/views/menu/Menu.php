<style>
/* CSS for Zebra Table in index.html */
 .zebra-table {
 width: 100%;
 border-collapse: collapse;
 box-shadow: 0 2px 3px 1px #ddd;
 overflow: hidden;
 border:10px solid #fff;

 }
 .zebra-table th,.zebra-table td{
 vertical-align: top;
 padding:10px 7px;
 text-align: left;
 margin:0;

 }
 .zebra-table tbody tr:nth-child(odd) { /* Make table like zebra */
 background:#CBCBCB;

 }/* End CSS for Zebra Table in index.html */
</style>
<center><h1>Silahkan Untuk Memilih Menu</h1></center>
</br>
</br>
</br>
</br>
<p style ="color:#CD0033;"> Pilihlah Sesuai Hak Akses</p>
<table>

<table class="zebra-table" >
	<h3 style  = "color:#31659C">Super Admin</h3>
	<thead>
		<tr>
			<th><center>Create</center></th>
			<th><center>List Update</center></th>
			<th><center>View</center></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
			<center>
				<?php echo CHtml::link("Buat User",array('/Login/create'),array('style'=>'Text-decoration:none; color:black;')); ?></br>
			</center>
			</td>
			<td>
			<center>
				<?php echo CHtml::link("Update User",array('/Login/InUpdate'),array('style'=>'Text-decoration:none; color:black;')); ?></br>
			</center>
			</td>
			<td>
			<center>
				<?php echo CHtml::link("Lihat User",array('/Login'),array('style'=>'Text-decoration:none; color:black;')); ?></br>
			</center>
			</td>
			
		</tr>
	</tbody>
</table>

<?php
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";

?>