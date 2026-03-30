<x-layout>
    <x-slot:pageTitle>{{ $pageTitle }}</x-slot:pageTitle>

<div class="bg-slate-100 w-full">
    <div class="flex items-center justify-center min-h-screen">
        <form method="POST" action="/register"  class="space-y-4 bg-slate-300 p-5 rounded-2xl">
            @csrf

            <h2 class="text-center text-2xl">Register</h2>

            <input type="text" name="username"  placeholder="Username"  class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
            disabled:bg-slate-50 text-slate-500 disabled:border-slate-200 disabled:shadow-none
            invalid:border-pink-500 invalid:text-pink-600
            focus:invalid:border-pink-500 focus:invalid:ring-pink-500
          "/>

            <input type="email" name="email" placeholder="Email"  class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
            disabled:bg-slate-50 text-slate-500 disabled:border-slate-200 disabled:shadow-none
            invalid:border-pink-500 invalid:text-pink-600
            focus:invalid:border-pink-500 focus:invalid:ring-pink-500
          "/>

            <input type="password" name="password" placeholder="Password"  class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm 
            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
            disabled:bg-slate-50 text-slate-500 disabled:border-slate-200 disabled:shadow-none
            invalid:border-pink-500 invalid:text-pink-600
            focus:invalid:border-pink-500 focus:invalid:ring-pink-500
          "/>

           <button type="submit" class="bg-sky-500 hover:bg-sky-700 w-full py-2 rounded-lg text-white text-sm">
            Regist
          </button>
           
        </form>
    </div>
</div>
</x-layout>
