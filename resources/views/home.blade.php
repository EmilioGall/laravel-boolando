@extends('layouts.app')

@section('content')
   <main class="home">

      {{-- Products Display Section --}}
      <section class="container-md overflow-hidden">

         <div class="row gx-3 gy-4 py-5">

            @foreach ($productsKey['products'] as $product)
               <div class="col-4">

                  <div>

                     <div class="position-relative">

                        <img src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}"
                             alt="Image of {{ $product['name'] }}">

                        <div class="favorite-badges bg-white">

                           @if ($product['isInFavorites'])
                              <i class="fa-solid fa-heart p-2"></i>
                           @else
                              <i class="fa-regular fa-heart p-2"></i>
                           @endif

                        </div>

                        @if ($product['badges'])

                           <div class="optional-badges">

                              <div class="text-white fw-bold gap-1">
                                 @foreach ($product['badges'] as $badge)
                                    @if ($badge['type'] === 'discount')
                                       <span class="bg-danger px-1 me-1"> {{ $badge['value'] }} </span>
                                    @endif
                                 @endforeach

                                 @foreach ($product['badges'] as $badge)
                                    @if ($badge['type'] === 'tag')
                                       <span class="bg-success px-1"> {{ $badge['value'] }} </span>
                                    @endif
                                 @endforeach

                              </div>

                           </div>
                        @endif

                     </div>


                  </div>

                  <div>

                     <em class="fs-6">{{ $product['brand'] }}</em>

                     <h3 class="fs-3">{{ strtoupper($product['name']) }}</h3>

                     <div class="fs-6 fw-bold">

                        <span class="text-danger">{{ $product['price'] }} €</span>

                     </div>

                  </div>

               </div>
            @endforeach

         </div>

      </section>
      {{-- /Products Display Section --}}

   </main>
@endsection
