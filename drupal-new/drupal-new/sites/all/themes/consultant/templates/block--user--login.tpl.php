<form accept-charset="UTF-8" id="user-login-form" method="post" action="/practice_drupal/drupal-new/user">
			<h2>members login</h2>
			<label>Log In:</label>
		<input name="name" type="text" id="Yourname" />
		<label>Password:</label>
		<input name="pass" type="password" id="password" />
		<input name="Login" type="submit" class="button" value="Login" />
		<div id="register"><a href="/user/register">register now</a></div>
		 <input type="hidden" value="<?php print $elements['form_build_id']['#value']; ?> " name="form_build_id">
         <input type="hidden" value="user_login_block" name="form_id">
		</form>