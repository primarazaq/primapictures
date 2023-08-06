<!doctype html>
<html class="scroll-smooth">

<head>
    @include('components/head')
</head>
<style>
    
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
<body>
    <header
        class="bg-white fixed top-0 left-0 w-full h-[69px] flex items-center border-b-2 z-50 transition duration-500 ease-in-out">
        @include('components/navbar-order')
    </header>
    <section class="container my-52 mx-auto">
        <div class=" flex-row text-center">
            <div class=" space-y-10 scale-125">
                @if ($transaksi->status == "1" || $transaksi->status == "2")
                <h1 class="font-bold">Pembayaran Berhasil !</h1>
                <div>
                    <div class="success-checkmark">
                        <div class="check-icon">
                          <span class="icon-line line-tip"></span>
                          <span class="icon-line line-long"></span>
                          <div class="icon-circle"></div>
                          <div class="icon-fix"></div>
                        </div>
                    </div>
                    <p class="mt-5 ml-2">Periksa email anda untuk melihat bukti pembayaran dari transaksi !</p>
                </div>
                <div>
                    <button class="w-fit mt-3 bg-primary text-white px-10 py-[2px] font-semibold inline-block tracking-[2px] text-[13px] uppercase rounded-full shadow-sm hover:shadow-md hover:bg-white hover:text-primary transform hover:scale-110 duration-500 ease-in-out shadow-black">Kembali</button>
                </div>
                @else
                <h1 class="font-bold">Pembayaran Gagal !</h1>
                <div>
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
                    <p class=" -mb-4">Silahkan lakukan pemesanan kembali !</p>
                </div>
                <div>
                    <a href="/order">
                    <button class="w-fit mt-3 bg-red text-white px-10 py-[2px] font-semibold inline-block tracking-[2px] text-[13px] uppercase rounded-full shadow-sm hover:shadow-md hover:bg-rose-500 hover:text-white transform hover:scale-110 duration-500 ease-in-out shadow-black">Coba Lagi</button>
                    </a>
                </div>
                @endif
            </div>
        </div>
        </div>

    </section>
    @include('components/footer')
</body>


</html>
