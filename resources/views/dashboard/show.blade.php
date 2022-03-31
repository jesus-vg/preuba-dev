<x-app-layout>

	<x-slot name="header">
		<ul class="flex flex-wrap">
			<li class="text-xl font-semibold leading-tight text-gray-800 md:mr-1">
				Datos de usuario
			</li>
		</ul>
	</x-slot>

	<div class="py-12">
		{{-- mostrar datos del usuario --}}
		<div class="container mx-auto my-4 rounded-md bg-white p-3 shadow-md">
			<div class="flex flex-wrap">
				<div class="w-full p-3 md:w-1/2 lg:w-2/3">
					<div class="mb-6 md:flex md:items-center">
						<div class="md:mr-2 md:w-1/3">
							<label
								class="mb-2 block text-sm font-medium text-gray-900"
								for="name"
							>
								Nombre del usuario:
							</label>
						</div>
						<div class="md:w-2/3">
							<p class="w-full rounded-lg border bg-gray-200 py-2 px-4 text-sm leading-tight text-gray-700 shadow-sm">
								{{ $user->name }}
							</p>
						</div>
					</div>
					<div class="mb-6 md:flex md:items-center">
						<div class="md:mr-2 md:w-1/3">
							<label
								class="mb-2 block text-sm font-medium text-gray-900"
								for="email"
							>
								Correo electrónico:
							</label>
						</div>
						<div class="md:w-2/3">
							<p class="w-full rounded-lg border bg-gray-200 py-2 px-4 text-sm leading-tight text-gray-700 shadow-sm">
								{{ $user->email }}
							</p>
						</div>
					</div>
					{{-- fecha de creacion --}}
					<div class="mb-6 md:flex md:items-center">
						<div class="md:mr-2 md:w-1/3">
							<label
								class="mb-2 block text-sm font-medium text-gray-900"
								for="created_at"
							>
								Fecha de creación:
							</label>
						</div>
						<div class="md:w-2/3">
							<p class="w-full rounded-lg border bg-gray-200 py-2 px-4 text-sm leading-tight text-gray-700 shadow-sm">
								{{ $user->created_at->format('d/m/Y') }}
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
