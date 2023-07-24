@extends('admin.admin')
@section('content')

<style>
    [x-cloak] {
        display: none;
    }
</style>

{{-- breadcrumb --}}
<nav class="flex bg-white mb-4 text-black py-3 px-5 rounded-lg justify-between" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            <a href="" class=" text-black hover:text-primary inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
                Admin
            </a>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                Riwayat Pesanan
            </div>
        </li>
    </ol>
    <ol class="inline-flex items-center space-x-1 md:space-x-3 text-xs cursor-default">
        <li class="inline-flex items-center">
                Keterangan :
        </li>
        <li class="inline-flex items-center">
            <div class="block w-4 h-4 bg-green-100 border-gray-800 border mr-2"></div>
                Wedding
        </li>
        <li class="inline-flex items-center">
            <div class="block w-4 h-4 bg-yellow-100 border-gray-800 border mr-2"></div>
                Event
        </li>
        <li class="inline-flex items-center">
            <div class="block w-4 h-4 bg-blue-100 border-gray-800 border mr-2"></div>
                Personal
        </li>
    </ol>
</nav>
{{-- <div class="antialiased sans-serif bg-gray-100 h-screen"> --}}
<div class="-mt-28 z-0" x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
    <div class=" mx-auto px-4 py-2 md:py-24">
          
        <div class="bg-white rounded-lg shadow overflow-hidden">

            <div class="flex items-center justify-between py-2 px-6">
                <div>
                    <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                    <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                </div>
                <div class="border rounded-lg px-1" style="padding-top: 2px;">
                    <button 
                        type="button"
                        class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 items-center" 
                        :class="{'cursor-not-allowed opacity-25': month == 0 }"
                        :disabled="month == 0 ? true : false"
                        @click="month--; getNoOfDays()">
                        <svg class="h-6 w-6 text-gray-500 inline-flex leading-none"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>  
                    </button>
                    <div class="border-r inline-flex h-6"></div>		
                    <button 
                        type="button"
                        class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex items-center cursor-pointer hover:bg-gray-200 p-1" 
                        :class="{'cursor-not-allowed opacity-25': month == 11 }"
                        :disabled="month == 11 ? true : false"
                        @click="month++; getNoOfDays()">
                        <svg class="h-6 w-6 text-gray-500 inline-flex leading-none"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>									  
                    </button>
                </div>
            </div>	

            <div class="-mx-1 -mb-1">
                <div class="flex flex-wrap" style="margin-bottom: -40px;">
                    <template x-for="(day, index) in DAYS" :key="index">	
                        <div style="width: 14.26%" class="px-2 py-2">
                            <div
                                x-text="day" 
                                class="text-gray-600 text-sm uppercase tracking-wide font-bold text-center"></div>
                        </div>
                    </template>
                </div>

                <div class="flex flex-wrap border-t border-1 ">
                    <template x-for="blankday in blankdays">
                        <div 
                            style="width: 14.28%; height: 120px"
                            class="text-center border-r border-b px-4 pt-2"	
                        ></div>
                    </template>	
                    <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">	
                        <div style="width: 14.28%; height: 120px" class="px-4 pt-2 border-r border-b">
                            <div
                                x-text="date"
                                class="inline-flex w-6 h-6 items-center justify-center cursor-default text-center leading-none rounded-full transition ease-in-out duration-100"
                                :class="{'bg-primary text-white hover:bg-secondary': isToday(date) == true, 'text-gray-700': isToday(date) == false }"	
                            ></div>
                            <div style="height: 80px;" class="overflow-y-auto mt-1">
                                <template x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">	
                                    <div
                                        class="px-2 py-1 rounded-lg mt-1 overflow-hidden border"
                                        :class="{
                                            'border-blue-200 text-blue-800 bg-blue-100': event.event_theme === 'blue',
                                            'border-rose-200 text-rose-800 bg-rose-200': event.event_theme === 'red',
                                            'border-yellow-200 text-yellow-800 bg-yellow-100': event.event_theme === 'yellow',
                                            'border-green-200 text-green-800 bg-green-100': event.event_theme === 'green',
                                            'border-purple-200 text-purple-800 bg-purple-100': event.event_theme === 'purple'
                                        }"
                                    >
                                        <p x-text="event.event_title" style="white-space: normal;" class="text-sm truncate leading-tight"></p>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}

<script>
    const MONTH_NAMES = ['Januari', 'Februari', 'Marert', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    const DAYS = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

    function app() {
        return {
            month: '',
            year: '',
            no_of_days: [],
            blankdays: [],
            days: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],

            events: [
                @foreach($jadwal as $item)
                {
                    event_date: '{{ \Carbon\Carbon::parse($item->tgl_acara)->format("Y-m-d") }}',
                    event_title: `{{ \Carbon\Carbon::parse($item->tgl_acara)->format("H:i") }} | ${'{{ $item->lokasi }}'} (${'{{ $item->wilayah }}'}) | ${'{{ $item->nama_plg }}'} ${'{{ $item->hp_plg }}'}`,
                    event_theme: '{{ $item->kategori == "Wedding" ? "green" : ($item->kategori == "Event" ? "yellow" : "blue") }}'
                },
                @endforeach
            ],
            event_title: '',
            event_date: '',
            event_theme: 'blue',

            themes: [
                {
                    value: "blue",
                    label: "Blue Theme"
                },
                {
                    value: "red",
                    label: "Red Theme"
                },
                {
                    value: "yellow",
                    label: "Yellow Theme"
                },
                {
                    value: "green",
                    label: "Green Theme"
                },
                {
                    value: "purple",
                    label: "Purple Theme"
                }
            ],

            initDate() {
                let today = new Date();
                this.month = today.getMonth();
                this.year = today.getFullYear();
                this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
            },

            isToday(date) {
                const today = new Date();
                const d = new Date(this.year, this.month, date);

                return today.toDateString() === d.toDateString() ? true : false;
            },

            getNoOfDays() {
                let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                // find where to start calendar day of week
                let dayOfWeek = new Date(this.year, this.month).getDay();
                let blankdaysArray = [];
                for ( var i=1; i <= dayOfWeek; i++) {
                    blankdaysArray.push(i);
                }

                let daysArray = [];
                for ( var i=1; i <= daysInMonth; i++) {
                    daysArray.push(i);
                }
                
                this.blankdays = blankdaysArray;
                this.no_of_days = daysArray;
            }
        }
    }
</script>
</div>
@endsection

