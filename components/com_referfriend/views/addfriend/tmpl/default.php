<?php
	defined('_JEXEC') or die('Restricted access'); 
?>
	<form name="default.php" action="index.php" method="post">
		<div class="col100">
			<fieldset>
				<table align="center">
					<tr>
						<td><h1>Coach Details</h1></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="coach_name" value=""/></td>
					</tr>
					<tr>
						<td>Phone no</td>
						<td><input type="text" name="coach_phone_no" value=""/></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><TEXTAREA Name="address" rows="4" cols="15"></TEXTAREA></td>
					</tr>
					<tr>
						<td><label for="coachname">Post Code</td>
						<td><input type="text" name="post_code" value=""/></td>
					</tr>
					<tr>
						<td><input type="checkbox" name="checkbox1" id="checkbox1" value=""/></td>
						<td>I'm interested and would like more information</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="checkbox2" id="checkbox2" value=""/></td>
						<td>I would like to join straight away</td>
					</tr>
					<tr>
						<td><h1>Next of Kin / Alternative Contact</h1></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value=""/></td>
					</tr>
					<tr>
						<td>Phone no</td>
						<td><input type="text" name="phone_no" value=""/></td>
					</tr>
					<tr>
						<td><h1>Referee</h1></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="referee_name" value=""/></td>
					</tr>
					<tr>
						<td>Phone no</td>
						<td><input type="text" name="referee_phone_no" value=""/></td>
					</tr>
					<tr>
						<td>Organisation</td>
						<td><input type="text" name="referee_organisation" value=""/></td>
					</tr>
					<tr>
						<td>Description</td>
						<td><textarea name="description" rows="4" cols="15"></textarea></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><input type="radio" name="gender" id="gender" value="male" checked/> male <input type="radio" name="gender" id="gender" value="female"/> female</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"/></td>
					</tr>
				</table>
			</fieldset>
		</div>
		<div class="clr"></div>
		<input type="hidden" name="option" value="com_referfriend" />
		<input type="hidden" name="id" value="<?php echo $this->regvar->id; ?>" />
		<input type="hidden" name="task" value="save" />
		<input type="hidden" name="controller" value="referfriend" />
	</form>