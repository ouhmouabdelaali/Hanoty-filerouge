@extends('component.app')

@section('content')


@include('component.navebare') 


<div class="font-mono bg-gray-400 mt-20">
		<!-- Container -->
		<div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    					<!-- Col -->
                                        <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                                        style="background-image: url({{asset('images/register.png') }})">
                                    </div>
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
                        <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="{{ route('register') }}" method="POST">
                           @csrf
							<div class="mb-4 md:flex md:justify-between">
								<div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
										First Name
									</label>
									<input
										class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="first_name"
                                        name="first_name"
										type="text"
										placeholder="First Name"
									/>
								</div>
								<div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
										Last Name
									</label>
									<input
										class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="last_name"
                                        name="last_name"
										type="text"
										placeholder="Last Name"
									/>
								</div>
							</div>
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
									Email
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="email"
                                    name="email"
									type="email"
									placeholder="Email"
								/>
							</div>
							<div class="mb-4 md:flex md:justify-between">

                                <div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
										Password
									</label>
									<input
										class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="password_confirmation"
                                        name="password_confirmation"
										type="password"
										placeholder="******************"
									/>
								</div>
								<div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
										Confirm Password
									</label>
									<input
										class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
										id="c_password"
                                        name="password"
										type="password"
										placeholder="******************"
									/>
								</div>

							</div>


        <div class="mb-4">
        <label for="role" class="block text-gray-700">Role</label>
        <div class="flex items-center space-x-4">
                           
                           <div>
                               <input id="role-commercial" type="radio" name="role" value="commercial" class="h-4 w-4 text-blue-500 border-gray-300 focus:ring-2 focus:ring-blue-300">
                               <label for="role-commercial" class="text-sm font-medium text-gray-900">Commercial</label>
                           </div>
                       
                           <div>
                               <input id="role-provider" type="radio" name="role" value="provider" class="h-4 w-4 text-blue-500 border-gray-300 focus:ring-2 focus:ring-blue-300">
                               <label for="role-provider" class="text-sm font-medium text-gray-900">Provider</label>
                           </div>
                       </div>
         </div>                    

                            <div class="mb-4">
                                
                            <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">
                                Register
                            </button>
                            </div>
							<hr class="mb-6 border-t" />
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
									href="#"
								>
									Forgot Password?
								</a>
							</div>
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                    href="{{ route('loginform') }}"
								>
									Already have an account? Login!
								</a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
</div>

@endsection