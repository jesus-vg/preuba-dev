<x-app-layout>
	<x-slot name="styles">
		<script
		  src="//cdn.jsdelivr.net/npm/sweetalert2@11"
		  lazy
		></script>
	</x-slot>

	<x-slot name="header">
		<ul class="flex flex-wrap">
			<li class="text-xl font-semibold leading-tight text-gray-800 md:mr-1">
				<a
					class="btn-primary"
					href="{{ route('dashboard.create') }}"
				>Crear</a>
			</li>
		</ul>
	</x-slot>

	<div class="py-12">
		@if (count($users) > 0)
			<div class="flex flex-col">
				<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
					<div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
						<div class="overflow-hidden shadow-md sm:rounded-lg">
							<table class="min-w-full">
								<thead class="bg-gray-50 dark:bg-gray-700">
									<tr>
										<th
											scope="col"
											class="py-3 px-6 text-left text-xs font-medium uppercase tracking-wider text-gray-700 dark:text-gray-400"
										>
											Usuario
										</th>
										<th
											scope="col"
											class="py-3 px-6 text-left text-xs font-medium uppercase tracking-wider text-gray-700 dark:text-gray-400"
										>
											Fecha registro
										</th>
										<th
											scope="col"
											class="py-3 px-6 text-left text-xs font-medium uppercase tracking-wider text-gray-700 dark:text-gray-400"
										>

										</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($users as $user)
										<tr class="border-b border-gray-700 bg-gray-800 text-sm text-gray-400">
											<td class="whitespace-nowrap py-4 px-6">
												<span class="font-medium text-white">{{ $user->name }}</span>
												<br>
												{{ $user->email }}
											</td>
											<td class="whitespace-nowrap py-4 px-6">
												{{ $user->created_at->format('d/m/Y') }}
											</td>
											<td class="whitespace-nowrap py-4 px-6">
												<a
													href="{{ route('dashboard.edit', [$user]) }}"
													class="px-1 text-green-500 hover:underline"
												>Editar</a>
												<eliminar-usuario
													id="{{ $user->id }}"
													nombre-usuario="{{ $user->name }}"
												></eliminar-usuario>
												<a
													href="{{ route('dashboard.show', $user) }}"
													class="px-1 text-blue-500 hover:underline"
												>ver</a>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			{{ $users->links() }}
		@else
			<h2 class="my-5 text-center text-3xl font-medium text-gray-400">Aún no hay usuarios registrados</h2>
		@endif
	</div>
</x-app-layout>
