<div class="flex w-full justify-between border-white border-b-2 items-center pb-2 mb-2">
  <h1 class="text-xl font-normal md:text-2xl">Dashboard</h1>
  <div class="box shadow-sm h-14 py-2 px-3 bg-white md:flex md:gap-1 justify-evenly items-center rounded-md hidden">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-slate-800" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
      </svg>
      <div>
          <h1 class="font-semibold text-sm text-slate-600">{{ auth()->user()->username }}</h1>
          <h1 class="text-slate-500 text-sm">{{ auth()->user()->role}}</h1>  
      </div>
      <div class="p-2">
          <div class="dropdown inline-block relative group">
            <button class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
            </button>
            <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 group-hover:block ">
              <li>
                  <form action="/logout" method="POST">
                      @csrf
                      <button class="rounded-sm bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" \>Logout</button>
                  </form>
              </li>
            </ul>
          </div>  
      </div>
  </div>
</div>