<!doctype html>
<html class="scroll-smooth">

<head>
    @include('components/head')
</head>
<body>
    <header
        class="bg-white fixed top-0 left-0 w-full h-[69px] flex items-center border-b-2 z-50 transition duration-500 ease-in-out">
        @include('components/navbar-order')
    </header>
    <section class="container my-40 mx-auto">
        <div class=" flex lg:flex-row">
            <div class="-mt-24 sm:mt-10 lg:-mt-20 overflow-hidden">
                @switch($transaksi->status)
                    @case(1)
                        SUKSES
                        @break
                    @case(2)
                        SUKSES
                        @break
                    @case(3)
                        PENDING
                        @break
                    @case(4)
                        DITOLAK
                        @break
                    @case(5)
                        CANCEL
                        @break
                    @case(6)
                        EXPIRED
                        @break
                    @case(7)
                        WAITING FOR PAYMENT
                        @break
                        
                @endswitch
            </div>
        </div>
        </div>

    </section>
    @include('components/footer')
</body>


</html>
