@extends('user.components.main')

@section('content')
<div class="flex flex-col md:flex-row min-h-screen mt-[-84px]">
  <div class="w-1/3 bg-black hidden md:block">
  </div>
  <div class="w-full max-w-md mt-[84px] md:mt-0 mx-auto md:w-2/3 flex flex-col  md:justify-center items-center">
    <div class="w-full px-3 mt-3 md:mt-0">
        <h1 class="text-2xl font-bold">Sign in to Atensi</h1>
        <div class="border-b-2 w-full mt-5"></div>
        <form action="" class="flex flex-col gap-2 mt-2">
            <label for="" class="font-medium">Username or Email Address</label>
            <input id="title" type="text" name="title" value="" class="w-full py-1 px-2 md:py-2 md:px-4 border-2 rounded-lg mb-2 bg-stone-100 hover:bg-white">
            <label for="" class="font-medium">Password</label>
            <input id="title" type="password" name="title" value="" class="w-full py-1 px-2 md:py-2 md:px-4 border-2 rounded-lg mb-2 bg-stone-100 hover:bg-white">
            <button type="submit" class="bg-black  text-white w-1/3 p-2 rounded-lg">Login</button>
        </form> 
    </div>
    
  </div>
</div>

@endsection