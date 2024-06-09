<header class="d-flex align-items-center">

   <div class="container-md">

      <div class="row">

         <div class="col-4 d-flex align-items-center">

            <ul class="d-flex align-items-center gap-4">

               <li>
                  <a href="{{ route('woman') }}">Donna</a>
               </li>

               <li>
                  <a href="{{ route('man') }}">Uomo</a>
               </li>

               <li>
                  <a href="{{ route('kid') }}">Bambino</a>
               </li>

            </ul>

         </div>

         <div class="col-4 d-flex align-items-center justify-content-center">

            <a href="{{ route('home') }}">

               <img src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="">

            </a>

         </div>

         <div class="col-4 d-flex align-items-center justify-content-end">

            <ul class="d-flex align-items-center gap-4">

               <li>
                  <a href="{{ route('home') }}">
                     <i class="fa-regular fa-user"></i>
                  </a>
               </li>

               <li>
                  <a href="{{ route('home') }}">
                     <i class="fa-regular fa-heart"></i>
                  </a>
               </li>

               <li>
                  <a href="{{ route('home') }}">
                     <i class="fa-solid fa-bag-shopping"></i>
                  </a>
               </li>

            </ul>

         </div>

      </div>

   </div>

</header>
