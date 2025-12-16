<x-layout >
  <div class="bg-white grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
        
    
        <div class=" bg-black rounded-xl shadow p-2 hover:scale-105 hover:bg-gray-900">
            <h2 class="text-xl font-bold text-gray-200 mb-4 text-center">
                Homens x Mulheres
            </h2>
            <div id="genderChart"></div>
        </div>
        <div class="bg-black rounded-xl shadow p-2 hover:scale-105 hover:bg-gray-900">
            <h2 class="text-xl font-bold text-gray-200 mb-4 text-center">
                Faixa etária
            </h2>
            <div id="ageGroupChart"></div>
        </div>

    </div>
  <div class="relative flex flex-col w-full h-full text-gray-700 bg-white shadow-md ">
    <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
      <div class="flex items-center justify-between gap-8 mb-8">
        <div>
          <h5
            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
            Hall de membros
          </h5>
          <p class="block mt-1 font-sans text-base antialiased font-normal leading-relaxed text-gray-300">
            Veja as informações de cada membro
          </p>
        </div>
        <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
          <button
            class="select-none rounded-lg border border-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button">
            <a href="/home">Home</a>
          </button>
          
          <button
            class="flex select-none items-center gap-3 rounded-lg bg-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
              stroke-width="2" class="w-4 h-4">
              <path
                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
              </path>
            </svg>
            <a href="{{route('member.create')}}">Add member</a>
          </button>
        </div>
      </div>
      <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
        <div class="block w-full overflow-hidden md:w-max">
          <nav>
            <ul role="tablist" class="relative flex flex-row p-1 rounded-lg bg-blue-gray-50 bg-opacity-60">
              <li role="tab"
                class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center bg-transparent cursor-pointer select-none text-white"
                data-value="all">
                <div class="z-20 text-inherit">
                  Total : {{$members->total()}}
                </div>
                <div class="absolute inset-0 z-10 h-full bg-green-400 rounded-md shadow"></div>
              </li>
              <li role="tab"
                class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center bg-transparent cursor-pointer select-none text-blue-gray-900"
                data-value="monitored">
                <div class="z-20 text-inherit">
                  &nbsp;&nbsp;Monitored&nbsp;&nbsp;
                </div>
              </li>
              <li role="tab"
                class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center bg-transparent cursor-pointer select-none text-blue-gray-900"
                data-value="unmonitored">
                <div class="z-20 text-inherit">
                  &nbsp;&nbsp;Unmonitored&nbsp;&nbsp;
                </div>
              </li>
            </ul>
          </nav>
        </div>
        
      </div>
    </div>
    <livewire:members-table/>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        fetch("{{ route('dashboard.data') }}")
            .then(res => res.json())
            .then(data => {
                new ApexCharts(document.querySelector('#genderChart'), {
                    chart: { type: 'donut', height: 200 },
                    series: [data.genders.male, data.genders.female],
                    labels: ['Homens', 'Mulheres'],
                    colors: ['#0036EB', '#EB01CD'],
                    legend: {
                      position: 'left',
                    },
                    responsive: [{ breakpoint: 640, options: { chart: { width: '80%' }, legend: { position: 'bottom' } } }],
                    stroke: {
                      show: true,
                      width: 0.8 
                    }

        }).render();
                
                new ApexCharts(document.querySelector('#ageGroupChart'), {

                  chart: { type: 'donut', height: 200},
                  series: [data.ageGroup.old, data.ageGroup.adult, data.ageGroup.young, data.ageGroup.child],
                  labels: ['Idosos 55+', 'Adultos 25+', 'Jovens 12+', 'Crianças'],
                  colors: ['#20C048', '#32964B', '#366B43', '#00EB39'],
                  legend: {
                    position: 'left',
                  },
                  responsive: [{ breakpoint: 640, options: { chart: { width: '80%' }, legend: { position: 'bottom' } } }],
                  stroke: {
                    show: true,
                    width: 0.8 
                  }
                 }).render();
                });
                
    </script>

</x-layout>