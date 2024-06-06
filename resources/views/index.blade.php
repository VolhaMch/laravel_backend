<x-app-layout>
  <div class="bg-cover bg-center bg-no-repeat h-screen bg-opacity-25 bg-[url('/public/img/background_1.jpg')]">
{{--    <x-slot name="header">--}}
{{--        <div class="overflow-hidden">--}}
{{--        <h2 class="font-semibold  text-xl text-black leading-tight">--}}
{{--            {{__('menu.welcome')}}--}}
{{--        </h2>--}}
{{--        </div>--}}
{{--    </x-slot>--}}


      <div class="w-[90%] mx-auto h-full flex items-center justify-between">

              <div class="text-white text-left font-serif font-extrabold uppercase lg:ml-2">
                  <h1 class="text-5xl">Marketing</h1>
                  <h1 class="text-5xl">enthusiast</h1>
                  <p class="text-xl mt-6">in IT industry since 2018.</p>
                  <p class="text-xl">I assist companies with:</p>
                  <ul class="text-lg mt-4 mb-6">
                  <li> > lead generation</li>
                  <li> > social networking</li>
                  <li> > and business development</li>
                  </ul>


            <button>
                <p class="ml-12 text-lg text-black bg-white/20 font-semibold mt-1 capitalize rounded-lg p-2 hover:bg-gray-50">{{__('menu.download')}}</p>
            </button>
          </div>

    <div class="grid grid-cols-1  gap-10  md:place-self-center md:justify-self-end">
        <div><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
        </svg></div>
        <div><svg  xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
        </svg></div>
        <div><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
        </svg></div>
    </div>


          </div>

      </div>

{{--      <div x-data="swipeCards()" x-init="--}}
{{--			let isDown = false;--}}
{{--			let startX;--}}
{{--			let scrollLeft;--}}
{{--			$el.addEventListener('mousedown', (e) => {--}}
{{--			isDown = true;--}}
{{--			startX = e.pageX - $el.offsetLeft;--}}
{{--			scrollLeft = $el.scrollLeft;--}}
{{--			});--}}
{{--			$el.addEventListener('mouseleave', () => {--}}
{{--			isDown = false;--}}
{{--			});--}}
{{--			$el.addEventListener('mouseup', () => {--}}
{{--			isDown = false;--}}
{{--			});--}}
{{--			$el.addEventListener('mousemove', (e) => {--}}
{{--			if (!isDown) return;--}}
{{--			e.preventDefault();--}}
{{--			const x = e.pageX - $el.offsetLeft;--}}
{{--			const walk = (x - startX) * 1;--}}
{{--			$el.scrollLeft = scrollLeft - walk;--}}
{{--			});--}}
{{--			" class="overflow-x-scroll scrollbar-hide mb-4 relative px-0.5" style="overflow-y: hidden;">--}}
{{--          <div class="flex snap-x snap-mandatory gap-4" style="width: max-content;">--}}
{{--              <template x-for="card in cards" :key="card.id">--}}
{{--                  <div class="flex-none w-64 snap-center">--}}
{{--                      <div class="bg-white border-1 border border-gray-200 rounded-lg overflow-hidden mb-4">--}}
{{--                          <img :src="card.image" alt="" class="w-full h-40 object-cover">--}}
{{--                          <div class="p-4">--}}
{{--                              <h3 class="text-lg leading-6 font-bold text-gray-900" x-text="card.title"></h3>--}}
{{--                              <p class="text-gray-600 mt-2 text-sm" x-text="card.description"></p>--}}

{{--                          </div>--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--              </template>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--      <script>--}}
{{--          function swipeCards() {--}}
{{--              return {--}}
{{--                  cards: [--}}
{{--                          @foreach($services as $service)--}}
{{--                      {--}}
{{--                          id: {{$service->id}},--}}
{{--                          image: '{{$service->picture ? asset('storage/'.$service->picture) : asset('img/no_company.jpg')}}',--}}
{{--                          title: '{{$service->name}}',--}}
{{--                          description: '{{$service->description_small}}',--}}
{{--                          price: 8.99,--}}
{{--                          link: 'https://lqrs.com/'--}}
{{--                      },--}}
{{--                      @endforeach--}}
{{--                  ],--}}
{{--                  addToCart(product) {--}}
{{--                      // Implement your add to cart logic here--}}
{{--                      console.log('Adding to cart:', product);--}}
{{--                  }--}}
{{--              };--}}
{{--          }--}}
{{--      </script>--}}

  </div>

</x-app-layout>

