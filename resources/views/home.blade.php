@extends('layouts.app')

@section('content')
   <main class="home">

      {{-- Products Display Section --}}
      <section class="container-md overflow-hidden">

         <div class="row gx-3 gy-4 py-5">

            @foreach ($productsKey['products'] as $product)
               <div class="col-4">

                  <div>

                     <div>

                        <img src="{{ Vite::asset('resources/img/' . $product['frontImage'])}}" alt="Image of {{$product['name']}}">

                     </div>

                     <div>

                        <p class="fs-6">{{$product['brand']}}</p>

                        <h3 class="fs-3">{{strtoupper($product['name'])}}</h3>

                        <div class="fs-6 fw-bold">

                           <span class="text-danger">{{$product['price']}} €</span>

                        </div>

                     </div>

                  </div>

               </div>
            @endforeach

         </div>

      </section>
      {{-- /Products Display Section --}}

   </main>
@endsection
