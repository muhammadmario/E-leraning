@extends('dashboard.components.main')

@section('content')
<div class="flex-1 px-2 md:px-3 mt-14 md:mt-0 bg-indigo-50 min-h-screen pt-2">
    @include('dashboard.components.navbar')
    
        <div class="w-full max-w-md mx-auto  flex flex-col  md:justify-center items-center">
            <div class="w-full px-3 mt-3">
                <h1 class="text-2xl font-bold">Register</h1>
                <div class="border-b-2 w-full mt-5"></div>
                <form action="/register" method="POST" class="flex flex-col gap-2 mt-2">
                  @csrf
                    <label for="name" class="font-medium">Name</label>
                    <input id="name" type="text" name="name" class="w-full py-1 px-2 md:py-2 md:px-4 border-2 rounded-lg mb-2 bg-stone-100 hover:bg-white" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
        
                    <label for="username" class="font-medium">Username</label>
                    <input id="username" type="text" name="username" class="w-full py-1 px-2 md:py-2 md:px-4 border-2 rounded-lg mb-2 bg-stone-100 hover:bg-white" value="{{ old('username') }}" required>
                    @error('username')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
        
                    <label for="email" class="font-medium">Email Address</label>
                    <input id="email" type="email" name="email" class="w-full py-1 px-2 md:py-2 md:px-4 border-2 rounded-lg mb-2 bg-stone-100 hover:bg-white" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror

                    <label for="role" class="font-medium">Role</label>
                          <select id="role" name="role" class="form-select block appearance-none w-full py-1 px-2 md:py-2 md:px-4 border-2 mb-2 bg-stone-100 hover:bg-white text-basefont-normal text-gray-700 border-solid border-gray-300 rounded-lg transition ease-in-out focus:text-gray-700 focus:bg-white focus:border-black focus:outline-none" aria-label="Default select example">
                              @if (auth()->user()->role==1)
                              <option value="2">Guru</option>
                              <option value="3">Murid</option>
                              @else
                              <option value="3">Murid</option>
                              @endif
                              
                          </select>
                    @error('role')
                          <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
        
                    <label for="password" class="font-medium">Password</label>
                    <input id="password" type="password" name="password" class="w-full py-1 px-2 md:py-2 md:px-4 border-2 rounded-lg mb-2 bg-stone-100 hover:bg-white" required>
                    @error('password')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
        
                    <button type="submit" class="bg-black  text-white w-1/3 p-2 rounded-lg">Register</button>
                </form> 
            </div>
        </div>  
@endsection