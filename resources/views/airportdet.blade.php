@extends('admindashboard')
@section('content')
<?php
/*******************
*@function:form for airport details 
*@Author:Revathy
*@date:10/03/2021
*******************/
?>
<h1>AIRPORT DETAILS</h1>

<form style="margin-left: 430px" method="post" action="insertairport">
@csrf
	<fieldset style="width:500px;height:500px;">
		<legend><strong></strong></legend>
			<table>
				<tr>
					<td>
						Airport name:</td>
							<td><input type="text" name="aname" required="required" maxlength="35" pattern="[a-z A-Z ]+"></td>
						</tr>
					<tr>
				<td>
					Country:</td>
						<td><input list="Country" name="cntry" required="required">
							<datalist id="Country">
									<option value="India">
									<option value="America">
									<option value="China">
									<option value="Brazil">
							</datalist></td>
						</tr>
							<tr><td>State:</td>
									<td><input type="text" name="state" required="required" maxlength="25" pattern="[a-zA-Z]+"></td></tr>
							<tr><td>Contact number:</td>
									<td><input type="text" name="contact" required="required" pattern="[7-9]{1}[0-9]{9}"></td></tr>
							<tr><td>Location:</td>
									<td><input type="text" name="loc" required="required" maxlength="25" pattern="[a-zA-Z]+"></td></tr>
							<tr><td><input type="submit" name="sub" value="Submit"></td></tr>



			</table>
	</fieldset>
</form>
@endsection