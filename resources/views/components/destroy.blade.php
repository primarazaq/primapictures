<style>
    [x-cloak] {
        display: none !important;
    }
    
.sa {
  /* width: 140px;
  height: 140px;
  padding: 26px; */
  background-color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
}
.sa-error {
  border-radius: 50%;
  border: 4px solid #f75a5a;
  box-sizing: content-box;
  height: 80px;
  padding: 0;
  position: relative;
  background-color: #fff;
  width: 80px;
  animation: animateErrorIcon 0.5s;
}
.sa-error:after, .sa-error:before {
  background: #fff;
  content: "";
  height: 120px;
  position: absolute;
  transform: rotate(45deg);
  width: 60px;
}
.sa-error:before {
  border-radius: 40px 0 0 40px;
  width: 26px;
  height: 80px;
  top: -17px;
  left: 5px;
  transform-origin: 60px 60px;
  transform: rotate(-45deg);
}
.sa-error:after {
  border-radius: 0 120px 120px 0;
  left: 30px;
  top: -11px;
  transform-origin: 0 60px;
  transform: rotate(-45deg);
  animation: rotatePlaceholder 4.25s ease-in;
}
.sa-error-x {
  display: block;
  position: relative;
  z-index: 2;
}
.sa-error-placeholder {
  border-radius: 50%;
  border: 4px solid rgba(200, 0, 0, 0.2);
  box-sizing: content-box;
  height: 80px;
  left: -4px;
  position: absolute;
  top: -4px;
  width: 80px;
  z-index: 2;
}
.sa-error-fix {
  background-color: #fff;
  height: 90px;
  left: 28px;
  position: absolute;
  top: 8px;
  transform: rotate(-45deg);
  width: 5px;
  z-index: 1;
}
.sa-error-left, .sa-error-right {
  border-radius: 2px;
  display: block;
  height: 5px;
  position: absolute;
  z-index: 2;
  background-color: #d63434;
  top: 37px;
  width: 47px;
}
.sa-error-left {
  left: 17px;
  transform: rotate(45deg);
  animation: animateXLeft 0.75s;
}
.sa-error-right {
  right: 16px;
  transform: rotate(-45deg);
  animation: animateXRight 0.75s;
}

@keyframes rotatePlaceholder {
  0%, 5% {
    transform: rotate(-45deg);
  }
  100%, 12% {
    transform: rotate(-405deg);
  }
}
@keyframes animateErrorIcon {
  0% {
    transform: rotateX(100deg);
    opacity: 0;
  }
  100% {
    transform: rotateX(0deg);
    opacity: 1;
  }
}
@keyframes animateXLeft {
  0%, 65% {
    left: 82px;
    top: 95px;
    width: 0;
  }
  84% {
    left: 14px;
    top: 33px;
    width: 47px;
  }
  100% {
    left: 17px;
    top: 37px;
    width: 47px;
  }
}
@keyframes animateXRight {
  0%, 65% {
    right: 82px;
    top: 95px;
    width: 0;
  }
  84% {
    right: 14px;
    top: 33px;
    width: 47px;
  }
  100% {
    right: 16px;
    top: 37px;
    width: 47px;
  }
}
</style>
<div x-data="{ destroy: false }">
    <button @click="destroy =!destroy"
        class="block text-white bg-red hover:bg-rose-500 p-2 rounded-lg font-medium text-sm py-2 text-center transition-all" type="button">
        <svg version="1.1" class="w-5 fill-white" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 177.055 177.055"
            style="enable-background:new 0 0 177.055 177.055;" xml:space="preserve">
            <path
                d="M0.001,88.527c0,48.814,39.713,88.527,88.527,88.527c48.813,0,88.526-39.713,88.526-88.527S137.341,0,88.528,0
                                C39.714,0,0.001,39.713,0.001,88.527z M88.528,24.304c35.413,0,64.224,28.811,64.224,64.224c0,13.324-4.081,25.712-11.055,35.983
                                L52.544,35.359C62.816,28.385,75.204,24.304,88.528,24.304z M124.511,141.696c-10.272,6.974-22.659,11.055-35.983,11.055
                                c-35.413,0-64.223-28.811-64.223-64.224c0-13.324,4.081-25.711,11.054-35.983L124.511,141.696z" />
        </svg>
    </button>


    <div x-show="destroy"
        class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center"
        aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div
            class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div x-cloak @click="destroy = false" x-show="destroy"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-800 bg-opacity-60" aria-hidden="true"></div>

            <div x-cloak x-show="destroy" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">

                <div class="p-6 text-center">
                     <div class="sa mb-8">
                    <div class="sa-error">
                      <div class="sa-error-x">
                        <div class="sa-error-left"></div>
                        <div class="sa-error-right"></div>
                      </div>
                      <div class="sa-error-placeholder"></div>
                      <div class="sa-error-fix"></div>
                    </div>
                  </div>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin
                        menghapus buku ini?</h3>
                    <div class="flex justify-center">
                        <button @click="destroy = false" type="button"
                            class="text-gray-800 mr-8 bg-gray-100 rounded-3xl border border-gray-200 shadow-lg text-sm font-medium px-5 py-2.5  hover:shadow-md hover:bg-white hover:text-primary transform hover:scale-105 duration-300 ease-in-out">
                            Tidak
                        </button>
                        <form action="/admin/kelolajasa/{{ $data->id }}/destroy" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit"
                                class="inline-flex border-0 text-white bg-red hover:bg-rose-500 font-medium rounded-3xl text-sm transform hover:scale-105 duration-300 ease-in-out items-center px-5 py-2.5 text-center mr-2">
                                Ya, saya yakin
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
