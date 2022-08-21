<table  width="100%" bgcolor="#E8D4B4"  style="border-collapse: collapse; font-size: 25px;" align="center">
 <form method="POST" action="index.php?quanly=xulyloc" enctype="multipart/form-data">
	  <tr class="tieude" >
					<td style="text-transform: uppercase;" colspan="2" >
					LỌC DI SẢN THEO: 
					</td>
				</tr>
	<tr style="height: 20px;"></tr>
	 <tr  >
	    <td align="center">Cấp</td>
	    <td>
	    	<select style="width:70%;" name="cap">
				<option></option>
	    		<?php
	    		$sql_cap = "SELECT * FROM tbl_cap ORDER BY id_cap ASC";
	    		$query_cap = mysqli_query($mysqli,$sql_cap);
				
	    		while($row_cap = mysqli_fetch_array($query_cap)){
	    		?>
	    		<option value="<?php echo $row_cap['id_cap'] ?>"><?php echo $row_cap['tencap'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
		 
	  </tr>
	 
	 
	 
	 <tr style="height: 20px;"></tr>
	  <tr>
	    <td align="center">Địa điểm</td>
	    <td>
	    	<select style="width:70%;" name="diadiem">
				<option></option>
	    		<?php
	    		$sql_diadiem = "SELECT * FROM tbl_diadiem ORDER BY id_diadiem ASC";
	    		$query_diadiem = mysqli_query($mysqli,$sql_diadiem);
	    		while($row_diadiem = mysqli_fetch_array($query_diadiem)){
	    		?>
	    		<option value="<?php echo $row_diadiem['id_diadiem'] ?>"><?php echo $row_diadiem['tendiadiem'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	 <tr style="height: 20px;"></tr>
	 <tr>
	    <td align="center">Loại di sản</td>
	    <td>
			
	    	<select style="width:70%;" name="danhmuc">
				<option></option>
	    		<?php
	    		$sql_loaids = "SELECT * FROM tbl_loaids ORDER BY id_danhmuc ASC";
	    		$query_loaids = mysqli_query($mysqli,$sql_loaids);
	    		while($row_loaids = mysqli_fetch_array($query_loaids)){
	    		?>
	    		<option value="<?php echo $row_loaids['id_danhmuc'] ?>"><?php echo $row_loaids['tendanhmuc'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	 
	 <tr style="height: 20px;"></tr>
	 <tr>
	    <td align="center">Loại hình di tích</td>
	    <td>
			
	    	<select style="width:70%;" name="lhdt">
				<option></option>
	    		<?php
	    		$sql_lhdt = "SELECT * FROM tbl_lhdt ORDER BY id_lhdt ASC";
	    		$query_lhdt = mysqli_query($mysqli,$sql_lhdt);
	    		while($row_lhdt = mysqli_fetch_array($query_lhdt)){
	    		?>
	    		<option value="<?php echo $row_lhdt['id_lhdt'] ?>"><?php echo $row_lhdt['tenlhdt'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	  
	 
	  <tr style="height: 20px;"></tr>
	   <tr>
	    <td colspan="2" align="center"><input type="submit" name="loc" style="width: 100px; height: 50px;" class="btn btn-primary btn-sm" value="LỌC"></td>
	  </tr>
 </form>
</table>