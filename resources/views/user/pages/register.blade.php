@extends('user.components.main')

@section('content')
<div class="flex flex-col md:flex-row min-h-screen mt-[-84px]">
  <div class="w-1/3 bg-black hidden md:block">
  </div>
  <div class="w-full max-w-md mt-[84px] md:mt-0 mx-auto md:w-2/3 flex flex-col  md:justify-center items-center">
    <div class="w-full px-3 mt-3 md:mt-0">
        <h1 class="text-2xl font-bold">Register to Atensi</h1>
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

            <label for="password" class="font-medium">Password</label>
            <input id="password" type="password" name="password" class="w-full py-1 px-2 md:py-2 md:px-4 border-2 rounded-lg mb-2 bg-stone-100 hover:bg-white" required>
            @error('password')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror

            <button type="submit" class="bg-black  text-white w-1/3 p-2 rounded-lg">Register</button>
        </form> 
        <p class="text-sm text-center mt-2">Sudah punya akun? <a class="text-sky-500" href="/login">Login</a></p>

    </div>
    
  </div>
</div>

@endsection