<x-app-layout>
    
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <nav class="fixed top-0 left-0 z-20 w-full border-b border-gray-200 bg-white py-2.2 px-6 sm:px-4">
          <div class="container mx-auto flex max-w-6xl flex-wrap items-center justify-between">
            <a href="#" class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-3 h-6 text-blue-500 sm:h-9">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
              </svg>
        
              <span class="self-center whitespace-nowrap text-xl font-semibold">Sneaker</span>
            </a>
            <div class="mt-2 sm:mt-0 sm:flex md:order-2">
              <!-- Login Button -->
              
              
              </a>
              <!-- Register Button -->
              <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 md:hidden" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
              </button>
            </div>
            <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="navbar-sticky">
              <ul class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:text-sm md:font-medium">
                <li>
                  <a href="/sneaker" class="block rounded py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">Home</a>
                </li>
                <li>
                  <a href="/sneakers/post" class="block rounded py-2 pl-3 pr-4 text-blue-700 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">投稿する</a>
                </li>
                <li>
                  <a href="#" class="block rounded py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">Services</a>
                </li>
                <li>
                  <a href="#" class="block rounded py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-100 md:p-0 md:hover:bg-transparent md:hover:text-blue-700">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <div class="pl-10">
        <h1>Blog Name</h1>
        <form action="/sneakers" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="pt-20">
            <div class="title">
                <h2>Name</h2>
                <input type="text" name="sneaker[name]" placeholder="タイトル" value="{{ old('sneaker.name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('sneaker.name') }}</p>
            </div>
          </div>
            <div class="body">
                <h2>message</h2>
                <textarea name="sneaker[body]" cols="30" row="10" placeholder="・サイズ・状態・値段・その他">{{ old('sneaker.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('sneaker.body') }}</p>
            </div>
            <div class="image">
                <input type="file" name="image">
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">
            <a href="/sneaker">back</a>
        </div>
      </div>
    </body>
    
</html>
</x-app-layout>

