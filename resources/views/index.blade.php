<x-app-layout>
  <div>
    <x-slot name="header">
        <div class="overflow-hidden">
        <h2 class="font-semibold  text-xl text-black leading-tight">
            {{__('menu.welcome')}}
        </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    What is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
        </div>
    </div>

      <div x-data="swipeCards()" x-init="
			let isDown = false;
			let startX;
			let scrollLeft;
			$el.addEventListener('mousedown', (e) => {
			isDown = true;
			startX = e.pageX - $el.offsetLeft;
			scrollLeft = $el.scrollLeft;
			});
			$el.addEventListener('mouseleave', () => {
			isDown = false;
			});
			$el.addEventListener('mouseup', () => {
			isDown = false;
			});
			$el.addEventListener('mousemove', (e) => {
			if (!isDown) return;
			e.preventDefault();
			const x = e.pageX - $el.offsetLeft;
			const walk = (x - startX) * 1;
			$el.scrollLeft = scrollLeft - walk;
			});
			" class="overflow-x-scroll scrollbar-hide mb-4 relative px-0.5" style="overflow-y: hidden;">
          <div class="flex snap-x snap-mandatory gap-4" style="width: max-content;">
              <template x-for="card in cards" :key="card.id">
                  <div class="flex-none w-64 snap-center">
                      <div class="bg-white border-1 border border-gray-200 rounded-lg overflow-hidden mb-4">
                          <img :src="card.image" alt="" class="w-full h-40 object-cover">
                          <div class="p-4">
                              <h3 class="text-lg leading-6 font-bold text-gray-900" x-text="card.title"></h3>
                              <p class="text-gray-600 mt-2 text-sm" x-text="card.description"></p>

                          </div>
                      </div>
                  </div>
              </template>
          </div>
      </div>
      <script>
          function swipeCards() {
              return {
                  cards: [
                          @foreach($services as $service)
                      {
                          id: {{$service->id}},
                          image: '{{$service->picture ? asset('storage/'.$service->picture) : asset('img/no_company.jpg')}}',
                          title: '{{$service->name}}',
                          description: '{{$service->description_small}}',
                          price: 8.99,
                          link: 'https://lqrs.com/'
                      },
                      @endforeach
                  ],
                  addToCart(product) {
                      // Implement your add to cart logic here
                      console.log('Adding to cart:', product);
                  }
              };
          }
      </script>

  </div>

</x-app-layout>

