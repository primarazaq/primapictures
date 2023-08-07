<div>
    <form action="{{ route('verify') }}" method="post">
        @csrf
        <label for="verification_code" class="text-sm">Kode Verifikasi</label>
        <div class="mb-2 text-lg">
            <input class="rounded-lg border-primary bg-white px-6 py-2 text-left shadow-lg backdrop-blur-md" type="text" name="verification_code" placeholder="Kode Verifikasi" autofocus/>
        </div>
        <div class="mt-8 flex justify-center text-lg text-black">
            <button type="submit" class="rounded-3xl bg-primary px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-white hover:text-primary">Verifikasi</button>
        </div>
    </form>
</div>
