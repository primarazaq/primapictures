<style>
    [x-cloak] { 
        display: none !important;
     }

     /**
 * Extracted from: SweetAlert
 * Modified by: Istiak Tridip
 */
.success-checkmark {
  width: 80px;
  height: 115px;
  margin: 0 auto;

  .check-icon {
    width: 80px;
    height: 80px;
    position: relative;
    border-radius: 50%;
    box-sizing: content-box;
    border: 4px solid #4caf50;

    &::before {
      top: 3px;
      left: -2px;
      width: 30px;
      transform-origin: 100% 50%;
      border-radius: 100px 0 0 100px;
    }

    &::after {
      top: 0;
      left: 30px;
      width: 60px;
      transform-origin: 0 50%;
      border-radius: 0 100px 100px 0;
      animation: rotate-circle 4.25s ease-in;
    }

    &::before,
    &::after {
      content: "";
      height: 100px;
      position: absolute;
      background: #ffffff;
      transform: rotate(-45deg);
    }

    .icon-line {
      height: 5px;
      background-color: #4caf50;
      display: block;
      border-radius: 2px;
      position: absolute;
      z-index: 10;

      &.line-tip {
        top: 46px;
        left: 14px;
        width: 25px;
        transform: rotate(45deg);
        animation: icon-line-tip 0.75s;
      }

      &.line-long {
        top: 38px;
        right: 8px;
        width: 47px;
        transform: rotate(-45deg);
        animation: icon-line-long 0.75s;
      }
    }

    .icon-circle {
      top: -4px;
      left: -4px;
      z-index: 10;
      width: 80px;
      height: 80px;
      border-radius: 50%;
      position: absolute;
      box-sizing: content-box;
      border: 4px solid rgba(76, 175, 80, 0.5);
    }

    .icon-fix {
      top: 8px;
      width: 5px;
      left: 26px;
      z-index: 1;
      height: 85px;
      position: absolute;
      transform: rotate(-45deg);
      background-color: #ffffff;
    }
  }
}

@keyframes rotate-circle {
  0% {
    transform: rotate(-45deg);
  }
  5% {
    transform: rotate(-45deg);
  }
  12% {
    transform: rotate(-405deg);
  }
  100% {
    transform: rotate(-405deg);
  }
}

@keyframes icon-line-tip {
  0% {
    width: 0;
    left: 1px;
    top: 19px;
  }
  54% {
    width: 0;
    left: 1px;
    top: 19px;
  }
  70% {
    width: 50px;
    left: -8px;
    top: 37px;
  }
  84% {
    width: 17px;
    left: 21px;
    top: 48px;
  }
  100% {
    width: 25px;
    left: 14px;
    top: 45px;
  }
}

@keyframes icon-line-long {
  0% {
    width: 0;
    right: 46px;
    top: 54px;
  }
  65% {
    width: 0;
    right: 46px;
    top: 54px;
  }
  84% {
    width: 55px;
    right: 0px;
    top: 35px;
  }
  100% {
    width: 47px;
    right: 8px;
    top: 38px;
  }
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
  border: 4px solid #f27474;
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
  background-color: #f27474;
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
<div x-data="{ detailRiwayat: false }">
  <button @click="detailRiwayat =!detailRiwayat" class="bottom-0 p-2 rounded-full px-12 py-1 text-base font-normal text-white bg-primary hover:shadow-md hover:border-1 hover:border-black hover:text-white hover:scale-105 duration-300 ease-in-out hover:bg-secondary" type="button">
    <span>Lihat</span>
</button>

    <div x-show="detailRiwayat" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex overflow-x-hidden fixed w-full md:inset-0 justify-center items-center">
            <div x-cloak @click="detailRiwayat = false" x-show="detailRiwayat" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-800 bg-opacity-60" aria-hidden="true"
            ></div>

            <div x-cloak x-show="detailRiwayat" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl"
            >
            <div class="flex items-center justify-between space-x-4">
              <div class="bg-primary w-fit p-1 rounded-full text-white mb-3 mr-5 px-4 flex">
                  <div class="font-medium">
                      <p> No Transaksi : {{ $data->id_transaksi }}</p>
                  </div>
              </div>
              <button @click="detailRiwayat = false"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-mainclr rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                  </svg>
              </button>
          </div>
                <div class="p-6 text-center">
                  @if ($data->status == 'success' || $data->status == 'settlement')
                  <div class="success-checkmark">
                    <div class="check-icon">
                      <span class="icon-line line-tip"></span>
                      <span class="icon-line line-long"></span>
                      <div class="icon-circle"></div>
                      <div class="icon-fix"></div>
                    </div>
                    <p class="font-bold mt-5 ml-2">SUKSES !</p>
                  </div>
                  @elseif ($data->status == 'pending')
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
                  <p class="font-bold -mt-3 -mb-4">GAGAL !</p>
                  @endif
                    
                {{-- <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin keluar dari sistem?</h3>
                 --}}
                 <div>
                  <table class="w-full flex justify-center mt-7 ">
                    <tbody class="text-start text-sm">
                      <tr>
                        <td>Tanggal Transaksi</td>
                        <td>:</td>
                        <td >{{ $data->tgl_transaksi }}</td>
                      </tr>
                      <tr>
                        <td>Metode Pembayaran</td>
                        <td>:</td>
                        <td>{{ $data->payment_type }}</td>
                      </tr>
                      <tr>
                        <td>Total Pembayaran</td>
                        <td>:</td>
                        <td>@currency($data->total_harga)</td>
                      </tr>
                      <tr class="border-t-2 border-t-slate-100">
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Nama Pelanggan</td>
                        <td>:</td>
                        <td>{{ $data->nama_plg }}</td>
                      </tr>
                      <tr>
                        <td>Email Pelanggan</td>
                        <td>:</td>
                        <td class="text-xs">{{ $data->email_plg }}</td>
                      </tr>
                      <tr>
                        <td>No. Hp Pelanggan</td>
                        <td>:</td>
                        <td>{{ $data->hp_plg }}</td>
                      </tr>
                      <tr>
                        <td>Tanggal Acara</td>
                        <td>:</td>
                        <td>{{ $data->tgl_acara }}</td>
                      </tr>
                      <tr>
                        <td>Wilayah Acara</td>
                        <td>:</td>
                        <td>{{ $data->wilayah }}</td>
                      </tr>
                      <tr>
                        <td>Lokasi Acara</td>
                        <td>:</td>
                        <td>{{ $data->lokasi }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <hr>
                 

                  <div class="flex justify-center">
                    <button @click="detailRiwayat = false" type="button" class="px-16 text-black py-2 shadow-lg rounded-full font-normal bg-white hover:shadow-md hover:border-1 hover:border-black hover:bg-white hover:text-primary transform hover:scale-105 duration-300 ease-in-out translate-y-5">
                        Tutup
                    </button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

