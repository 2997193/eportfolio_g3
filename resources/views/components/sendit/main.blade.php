@php
    $faqs = [
        ['pregunta' => 'What does SendIt?', 'respuesta' => 'respuesta de ejemplo.'],
        ['pregunta' => 'What coding languages?', 'respuesta' => 'respuesta de ejemplo.'],
        // Añade aquí las demás preguntas y respuestas.
    ];
     $planes = [
        [
            'nombre' => 'Plan basico',
            'precio' => 19,
            'descripcion' => 'Para empezar',
            'tiempo' => 'mes',
            'lista' => ['Acceso básico', 'Soporte por email'],
        ],
        [
            'nombre' => 'Plan pro',
            'precio' => 29,
            'descripcion' => 'Para un uso avanzado',
            'tiempo' => 'mes',
            'lista' => ['Todas las funciones', 'Soporte prioritario', 'Informes'],
        ],
        [
            'nombre' => 'Plan empresarial',
            'precio' => 39,
            'descripcion' => 'Para equipos',
            'tiempo' => 'mes',
            'lista' => ['Todas las funciones', 'Soporte prioritario', 'Informes', 'Varios usuarios'],
        ],
    ];
@endphp
<section class="px-8 py-20 bg-[#0d0e11] relative items-center overflow-hidden max-h-[900px]">
    <div class="flex flex-col gap-6 items-center text-white mx-auto w-full max-w-5xl">
      <div class="flex gap-4 items-center">
        <div class="flex gap-1">
          @foreach (range(1, 5) as $numero)
          <i class="bi bi-star-fill text-yellow-400"></i>
          @endforeach
        </div>
        <span class="text-xs text-gray-400">
          4.8/5 (45k reviews)
        </span>
      </div>
      <h1 class="text-5xl font-semibold tracking-tighter text-center">
        ePortfolioG3
      </h1>
      <strong class="font-normal text-xl text-center">
        Bienvenido a nuestro ePortfolio del grupo 3.
      </strong>
      <form action="#" method="post" class="flex gap-4 items-center">
        <input name="email" type="email" placeholder="Introduce tu email" class="border border-gray-700 focus:outline-none px-4 py-1 bg-[#ebebeb]/5 rounded-xl" required>
        <input type="submit" class="cursor-pointer bg-[#cff245] text-black px-4 py-1 rounded-xl" value="Unete a nuestro grupo">
      </form>
      <small class="text-xs px-2 text-center">
        Al hacer clic, confirmas que aceptas nuestros <a href="#" class="underline">Términos y Condiciones</a>.
      </small>
      <div class="mt-20">
        <img src="{{ asset('sendit/imgs/hero-black.png')   }}" class="mx-auto w-full max-w-[1000px] rounded shadow-2xl" alt="">
      </div>
    </div>
  </section>
  <section class="px-8 py-20 bg-[#f6f7fa] rounded-3xl">
    <div class="flex flex-col gap-16 items-center mx-auto w-full max-w-5xl">
      <h2 class="text-5xl font-semibold tracking-tighter text-center">
        Securize your<br>data with us
      </h2>
      <div class="flex flex-col md:grid grid-cols-2 gap-4">
        <div class="col-span-1 flex flex-col gap-4 items-left bg-white rounded-3xl px-8 pb-8">
          <img src="{{ asset('sendit/imgs/ihpone-mocup3.png') }}" class="max-w-[300px] mx-auto mb-6" alt="">
          <h3 class="text-xl font-bold">User data</h3>
          <p class="text-sm text-gray-600">
            Quo laboriosam quas saepe sunt alias delectus ducimus quidem natus, suscipit id aliquid consectetur.
            Voluptate officiis iusto rem.
          </p>
          <a href="" class="bg-[#cff245] px-4 py-2 text-black rounded-xl mr-auto">
            Get Started
          </a>
        </div>
        <div
          class="col-span-1 min-h-[500px] flex flex-col gap-4 items-left bg-white rounded-3xl p-8 relative overflow-hidden">
          <h3 class="text-xl font-bold">Data Collection</h3>
          <p class="text-sm text-gray-600">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro magni laudantium maxime, quo laboriosam quas
            saepe sunt alias delectus ducimus quidem natus.
          </p>
          <a href="" class="bg-[#cff245] px-4 py-2 text-black rounded-xl mr-auto">
            Get Started
          </a>
          <div class="absolute w-full left-0 bottom-0 flex">
            <img src="{{ asset('sendit/imgs/hero-black.png') }}" class="max-w-[80%] ml-auto" alt="">
          </div>
        </div>
        <div class="col-span-2 flex flex-col gap-4 items-center bg-white rounded-3xl p-10 md:p-20">
          <h3 class="text-xl font-bold">Your data</h3>
          <p class="text-md text-gray-600 text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi rem et inventore doloribus laborum, quae
            obcaecati maiores consectetur quam. Dolores exercitationem repellat !
          </p>
          <a href="" class="bg-[#cff245] px-4 py-2 text-black rounded-xl">
            Get Started
          </a>
        </div>
      </div>

    </div>
  </section>
  <section class="px-8 py-20 bg-[#0d0e11]">
    <div class="flex flex-col gap-16 items-center mx-auto w-full max-w-3xl">
      <h2 class="text-5xl font-semibold tracking-tighter text-center text-white">
        And More<br>
        Tools to use
      </h2>
      <div class="flex flex-wrap justify-center gap-2 w-full">
        {{-- he usado un range, el problema es que siempre sera el mismo rando y no estioy cambiando los titulos, hay que ver mas tarde--}}
        @foreach (range(1, 8) as $numero)
        <x-sendit.tool-card :numero="$numero" />            
        @endforeach        
      </div>
    </div>
  </section>
  <section class="px-8 py-20 bg-[#f6f7fa] rounded-3xl">
    <div class="h-full mx-auto max-w-5xl">
      <div class="mx-auto max-w-5xl flex flex-col lg:flex-row gap-10 justify-between w-full">
        {{ $slot }}
      </div>
    </div>
  </section>
  <section class="px-8 py-20 bg-[#0d0e11]">
    <div class="h-full mx-auto max-w-5xl">
      <div class="mx-auto max-w-7xl px-4l lg:text-center sm:px-6 lg:px-8 pb-10">
        <div class="max-w-3xl mx-auto lg:max-w-none">
          <h2 class="text-5xl font-semibold tracking-tighter text-white text-center">
            Level up your <span class="lg:block">development experience</span>
          </h2>
        </div>
      </div>
      <div class="items-start gap-2 mx-auto items-center mt-12 flex flex-col lg:grid lg:grid-cols-3">
        {{-- vuelvo a guardar los valores en el array arriba, al principio lo hice manualmente pasando cada dato al props pero he pensado que realmente si ddespeus quiero añadir mas, es mas faicl solo cambiarlo de un lado y que se cambie automaticamente --}}
        @foreach ($planes as $plan)
            <x-sendit.precios-card :nombre="$plan['nombre']" :precio="$plan['precio']" :descripcion="$plan['descripcion']" :tiempo="$plan['tiempo']" :lista="$plan['lista']">
              <x-slot:footer>
                  <button type="button">Elegir plan</button>
              </x-slot:footer>    
            </x-sendit.precios-card>        
        @endforeach        
      </div>
    </div>
  </section>
  <section class="py-20 bg-[#f6f7fa] rounded-3xl">
    <div class="h-full max-w-5xl mx-auto">
      <div class="flex flex-col gap-12">
    <div>
        <h2 class="font-semibold tracking-tighter text-5xl text-center">
            FAQ
        </h2>
        <p class="mx-auto mt-4 text-sm text-gray-600 text-center">
            Frequent questions &amp; answers
        </p>
    </div>
    <div class="flex flex-col mx-auto max-w-2xl gap-6 text-base text-gray-400 w-full px-4">
     @foreach ($faqs as $faq)
    {{-- hago uso de un array que he declarado arriba como $faqs, siguiendo el ejemplo de marcapersonal como haciamos en clase --}}
    <x-sendit.faq :pregunta="$faq['pregunta']" :respuesta="$faq['respuesta']"/>
    @endforeach
    </div>
</div>
        </div>
  </section>    

