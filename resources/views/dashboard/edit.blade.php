<x-app-layout>
	<x-slot name="header">
		<ul class="flex flex-wrap">
			<li class="text-xl font-semibold leading-tight text-gray-800 md:mr-1">
				Crear usuario
			</li>
		</ul>
	</x-slot>

	<div class="container mx-auto my-4 rounded-md bg-white p-3 shadow-md">
		<form
			action="{{ route('dashboard.update', $user) }}"
			method="post"
		>
			@method('PUT')
			@include('dashboard._form-create-update', [
			    'btnText' => 'Actualizar usuario',
			])
		</form>
	</div>
</x-app-layout>
