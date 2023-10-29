<div class="sm:mx-auto sm:w-full sm:max-w-sm">
	<img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
	<h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
		Connexion
	</h2>
</div>
<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
	<form class="space-y-6" action="/login/store" method="POST">
		<div>
			<label for="email" class="block text-sm font-medium leading-6 text-gray-900">
				Adresse e-mail
			</label>
			<div class="mt-2">
				<input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
			</div>
			<?php isset($errors) ? renderErrors($errors, 'email') : null ?>
		</div>
		<div>
			<div class="flex items-center justify-between">
				<label for="password" class="block text-sm font-medium leading-6 text-gray-900">
					Mot de passe
				</label>
			</div>
			<div class="mt-2">
				<input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
			</div>
			<?php isset($errors) ? renderErrors($errors, 'password') : null ?>
		</div>
		<div>
			<button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
		</div>
	</form>
	<p class="mt-10 text-center text-sm text-gray-500">
		Pas encore inscrit ? 
		<a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">
			S'inscrire
		</a>
	</p>
</div>
