@extends('dashboard.components.main')

@section('content')
<div class="flex-1 px-2 md:px-3 mt-14 md:mt-0 bg-indigo-50 min-h-screen pt-2">
    <div class="flex w-full justify-between border-white border-b-2 items-center pb-2 mb-2">
        <h1 class="text-xl font-normal md:text-2xl">Register Guru</h1>
        <div class="box shadow-sm h-14 py-2 px-3 bg-white md:flex md:gap-1 justify-evenly items-center rounded-md hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-slate-800" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
            </svg>
            <div>
                <h1 class="font-semibold text-sm text-slate-600">Coki Pardede</h1>
                <h1 class="text-slate-500 text-sm">Guru</h1>  
            </div>
            <div class="p-2">
                <div class="dropdown inline-block relative group">
                  <button class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                  </button>
                  <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 group-hover:block">
                    <li class=""><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Logout</a></li>
                  </ul>
                </div>  
            </div>
        </div>
    </div>
    
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
                              <option value="2">Guru</option>
                              <option value="3">Murid</option>
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