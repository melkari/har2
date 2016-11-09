<h1>Muokkaa asiakastietoja</h1>
<FORM action="<?php echo site_url('asiakas/muokkaaAsiakas'); ?>" method="post">
	<TABLE BORDER=0>
		<tr><td>Etunimi</td><td><input type="text" value=<?php echo $asiakas[0]['etunimi']; ?> name="en"></td></tr>
		<tr><td>Sukunimi</td><td><input type="text" value=<?php echo $asiakas[0]['sukunimi']; ?> name="sn"></td></tr>
		<tr><td>E-mail</td><td><input type="text" value=<?php echo $asiakas[0]['email']; ?> name="email"></td></tr>
		<tr><td></td><td><input type="submit" name="btn" value="Muokkaa"></td></tr>
	</TABLE>
	<input type="hidden" name="id" value="<?php echo $asiakas[0]['id_asiakas'];?>">
</FORM>
