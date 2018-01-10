<?php
	//LOGIN FOLDER

	require_once 'config.php';
	require_once DIR_IMPORTS.'start_template.php';
	require_once DIR_IMPORTS.'end_template.php';
	run_start_template("Login Page");
?>

<div>
	<form method="POST" action="login.php">
		<table>
			<tr>
				<td>
					Email
				</td>
				<td>
					<input type="email" name="email" required>
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="password" name="password" required>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit">
				</td>
			</tr>
		</table>
	</form>
</div>

<?php
	run_end_template();
?>