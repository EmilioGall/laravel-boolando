@extends('layouts.app')

@section('content')
   <main class="home">

      {{-- Products Display Section --}}
      <section class="container-md">

         <div class="row g-3 pb-3">

            @foreach ($productsKey['products'] as $product)
               <div class="col-4 border">

                  <div>

                     <div>

                        <img src="" alt="">

                     </div>

                     <div>

                        <p>Marca</p>

                        <h3>Titolo</h3>

                        <div>

                           <em>prezzo</em>
                           
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
