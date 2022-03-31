<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-gray-800">
	<div class="mx-auto max-w-7xl px-4 sm:px-6">
		<div class="flex items-center justify-between py-6 md:justify-start md:space-x-10">
			<div class="flex justify-start lg:w-0 lg:flex-1">
				<a href="#">
					<span class="sr-only">Workflow</span>
					<img
						class="h-8 w-auto sm:h-10"
						src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
						alt=""
					>
				</a>
			</div>
			<nav class="flex space-x-10">

			</nav>
			<div class="flex items-center justify-end md:flex-1 lg:w-0">
				<a
					href="{{ route('login') }}"
					class="{{ request()->is('login')? 'px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-teal-500 hover:bg-teal-700': 'text-gray-500 hover:text-gray-100' }} whitespace-nowrap text-base font-medium"
				> {{ __('Sign in') }} </a>
				<a
					href="{{ route('register') }}"
					class="{{ request()->is('register')? 'px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-teal-500 hover:bg-teal-700': 'text-gray-500 hover:text-gray-100' }} ml-4 whitespace-nowrap text-base font-medium"
				> {{ __('Sign up') }} </a>
			</div>
		</div>
	</div>
</div>
