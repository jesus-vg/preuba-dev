@csrf
<div class="flex flex-wrap">
	<div class="w-full p-3 md:w-1/2 lg:w-1/3">
		<div class="mb-6 md:flex md:items-center">
			<div class="md:w-1/3">
				<label
					class="mb-2 block text-sm font-medium text-gray-900"
					for="name"
				>
					Nombre del usuario:
				</label>
			</div>
			<div class="md:w-2/3">
				<input
					type="text"
					id="name"
					name="name"
					class="@error('name') border-red-500 @enderror w-full appearance-none rounded-lg border bg-gray-200 py-2 px-4 leading-tight text-gray-700 focus:border-gray-800 focus:outline-none focus:ring-gray-800"
					value="{{ old('name', $user->name) }}"
				>
				@error('name')
					<x-mensaje-error-input :message="$message" />
				@enderror
			</div>
		</div>
		<div class="mb-6 md:flex md:items-center">
			<div class="md:w-1/3">
				<label
					class="mb-2 block text-sm font-medium text-gray-900"
					for="email"
				>
					Correo electrónico:
				</label>
			</div>
			<div class="md:w-2/3">
				<input
					type="text"
					id="email"
					name="email"
					class="@error('email') border-red-500 @enderror w-full appearance-none rounded-lg border bg-gray-200 py-2 px-4 leading-tight text-gray-700 focus:border-gray-800 focus:outline-none focus:ring-gray-800"
					value="{{ old('email', $user->email) }}"
				>
				@error('email')
					<x-mensaje-error-input :message="$message" />
				@enderror
			</div>
		</div>
		<div class="mb-6 md:flex md:items-center">
			<div class="md:w-1/3">
				<label
					class="mb-2 block text-sm font-medium text-gray-900"
					for="password"
				>
					Contraseña:
				</label>
			</div>
			<div class="md:w-2/3">
				<input
					type="password"
					id="password"
					name="password"
					class="@error('password') border-red-500 @enderror w-full appearance-none rounded-lg border bg-gray-200 py-2 px-4 leading-tight text-gray-700 focus:border-gray-800 focus:outline-none focus:ring-gray-800"
					value="{{ old('password') }}"
				>
				@error('password')
					<x-mensaje-error-input :message="$message" />
				@enderror
			</div>
		</div>
	</div>
	<div class="w-full text-center">
		<button
			type="submit"
			class="btn-primary"
		>
			{{ $btnText }}
		</button>
	</div>
</div>
