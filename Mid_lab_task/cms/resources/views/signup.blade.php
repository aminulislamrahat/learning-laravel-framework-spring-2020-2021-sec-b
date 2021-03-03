<div >
		<form method="POST" >
			<table style="width:75%";>
				<tr>
					<td><label for="user_type"> Select a user type : </label><br></td>
					<td></td>
					<td><select required name="user_type" id="user_type" >
						<option value = ""></option>
						<option value = "admin" >Admin </option>
						<option value = "customer" >customer </option>
                        <option value = "accountant" >Accountant </option>
						<option value = "stuf" >Stuf </option>
					</select><br></td>
			
				</tr>	
				<tr>
					<td><label for="fullname">Full Name : </label><br></td>
					<td></td>
					<td><input  type="text" required autocomplete="off" name="fullname" id="fullname"><br></td>
					
				</tr>
                <tr>
					<td><label for="username">User Name : </label><br></td>
					<td></td>
					<td><input  type="text" required autocomplete="off" name="username" id="username"><br></td>
					
				</tr>
				<tr>
					
					<td><label for="mail">E-mail : </label><br></td>
					<td></td>
					<td><input placeholder="example@gmail.com" type="email" required  autocomplete="off" name="mail" id="mail"><br></td>
					<td>
						<?php
							if(isset($_REQUEST["email_error"]))
							{
								echo "<font color='red'>Sorry.....This email already taken</font>";
							}
							
		
						?>
					</td>
					
				</tr>
				
				
				
				<tr>
					
					<td><label for="Phone">Phone number : </label><br></td>
					<td></td>
					<td><input type="tel" required  id="Phone" name="Phone" placeholder="01915-678124" pattern="[0-9]{5}-[0-9]{6}" required><br></td>
					<td>
						<?php
							if(isset($_REQUEST["phn_error"]))
							{
								echo "<font color='red'>Sorry.....This phone number already taken</font>";
							}
							
		
						?>
					</td>
					
				</tr>
				<tr>
					<td><label for="Address">Address : </label><br></td>
					<td></td>
					<td><input type="text" required  autocomplete="off" name="Address" id="Address"><br></td>
				</tr>
                <tr>
					<td><label for="company_name">Company Name : </label><br></td>
					<td></td>
					<td><input type="text" required  autocomplete="off" name="company_name" id="company_name"><br></td>
				</tr>
                <tr>
					<td><label for="city">City : </label><br></td>
					<td></td>
					<td><input type="text" required  autocomplete="off" name="city" id="city"><br></td>
				</tr>
                <tr>
					<td><label for="country">Country : </label><br></td>
					<td></td>
					<td><input type="text" required  autocomplete="off" name="country" id="country"><br></td>
				</tr>
				<tr>
					<td><label for="password">Password : </label><br></td>
					<td></td>
					<td><input type="password" required name="password" id="password"><br></td>
				</tr>
                <tr>
					<td><label for="confirm_password">Confirm Password : </label><br></td>
					<td></td>
					<td><input type="password" required name="confirm_password" id="confirm_password"><br></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="submit" value="submit"></td>
					<td><a href="login"> Already have an account? go to login </a></td>
				</tr>
			</table>
		</form>
	</div>
	