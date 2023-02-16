<x-app-layout>
  <section>
  <img src="sneaker_image.jpeg" class="absolute h-full w-full z-0">
  <div class="z-10 relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-24">
    <div class="flex w-full mx-auto text-left">
      <div class="relative inline-flex items-center mx-auto align-middle">
        <div class="text-center">
          <h1 class="max-w-5xl text-2xl font-bold leading-none tracking-tighter text-neutral-600 md:text-5xl lg:text-6xl lg:max-w-7xl">
            Welcome to Sneaker's World!!<br class="hidden lg:block">
            Please register or login
          </h1>
          <div class="flex justify-center w-full max-w-2xl gap-2 mx-auto mt-6">
            <div class="mt-3 rounded-lg sm:mt-0">
              <a href="/register">
              <button class="px-5 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 lg:px-10 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">register</button>
              </a>
            </div>
            <div class="mt-3 rounded-lg sm:mt-0 sm:ml-3">
              <a href="/login">
              <button class="items-center block px-5 lg:px-10 py-3.5 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">login</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</x-app-layout>