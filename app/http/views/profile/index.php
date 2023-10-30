<?php 
	if(!$isConnected) Redirect('/login');
?>
<form action="/profile" method="post">
	<div class="mb-6">
		<label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
			Nom d'utilisateur
		</label>
		<input 
			type="text" 
			id="username" 
			name="username"
			class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
			value="<?= $user['username'] ?>"
		>
		<?php isset($errors) ? renderErrors($errors, 'username') : null ?>

	</div>
	<div class="mb-6">
		<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
			Nouveau mot de passe
		</label>
		<input 
			type="password" 
			id="password" 
			name="password"
			class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
			value=""
		>
		<?php isset($errors) ? renderErrors($errors, 'password') : null ?>
	</div>
	<div class="mb-6">
		<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
			Confirmation du nouveau mot de passe
		</label>
		<input 
			type="password" 
			id="password" 
			name="repassword"
			class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
			value=""
		>
		<?php isset($errors) ? renderErrors($errors, 'repassword') : null ?>
	</div>
	<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
