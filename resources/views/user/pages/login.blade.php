@extends('user.components.main')

@section('content')
<div class="flex flex-col md:flex-row min-h-screen mt-[-84px]">
  <div class="w-1/3 bg-black hidden md:block">
  </div>
  <div class="w-full max-w-md mt-[84px] md:mt-0 mx-auto md:w-2/3 flex flex-col  md:justify-center items-center">
    <div class="w-full px-3 mt-3 md:mt-0">
      @if(session()->has('success'))
      <div class="alert bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-green-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert bg-red-100 rounded-lg py-5 px-6 mb-3 text-base text-red-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-red-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
        <h1 class="text-2xl font-bold">Register to Atensi</h1>
        <div class="border-b-2 w-full mt-5"></div>
        <form action="/login" method="POST" class="flex flex-col gap-2 mt-2 ">
          @csrf
            <label for="username" class="font-medium">Username</label>
            <input id="username" type="text" name="username" value="{{ old('username') }}" class="w-full py-1 px-2 md:py-2 md:px-4 border-2 rounded-lg mb-2 bg-stone-100 hover:bg-white" required>

            <label for="password" class="font-medium">Password</label>
            <input id="password" type="password" name="password" class="w-full py-1 px-2 md:py-2 md:px-4 border-2 rounded-lg mb-2 bg-stone-100 hover:bg-white" required>

            <button type="submit" class="bg-black  text-white w-1/3 p-2 rounded-lg">Login</button>
        </form> 
        <p class="text-sm text-center mt-2">Belum punya akun?<a class="text-sky-500" href="/register">Daftar</a></p>

    </div>
    
  </div>
</div>

@endsection