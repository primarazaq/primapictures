<!-- component -->

<style>
    [x-cloak] {
        display: none !important;
    }
</style>
<div x-data="{ formEdit: false }">
    <button @click="formEdit =!formEdit" class="block bg-primary p-2 mr-3 rounded-lg text-white"
        style="height:36px; weight:49px; !important" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-white" viewBox="0 0 512 512">
            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path
                d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
        </svg>
    </button>

    <div x-show="formEdit"
        class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center"
        aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div
            class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div x-cloak @click="formEdit = false" x-show="formEdit"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-800 bg-opacity-60" aria-hidden="true"></div>

            <div x-cloak x-show="formEdit" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                <div class="flex items-center justify-between space-x-4">
                    <div class="bg-blue-700 w-36 p-1 rounded-full text-white mb-3 mr-4 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-white ml-2 mr-3" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                        </svg>
                        <div class="font-extrabold">
                            <p>Edit Buku</p>
                        </div>
                    </div>
                    <button @click="formEdit = false"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-mainclr rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                {{-- <form method="post" action="/admin/aturbuku/{{ $data->id_buku }}">
                    @method('put')
                    @csrf
                    <div class="p-5">
                        <div>
                            <label for="id_buku"
                                class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">Id Buku</label>
                            <input type="text" id="id_buku" name="id_buku"
                                class="@error('id_buku') invalid:border-red-500 @enderror mb-2 block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-mainclr focus:border-mainclr dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainclr dark:focus:border-mainclr "
                                autofocus required value="{{ old('id_buku', $data->id_buku) }}">
                            @error('id_buku')
                                <div class="text-red-500 text-xs font-medium">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="kategori"
                                class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">Kategori</label>
                            <input type="text" id="kategori" name="kategori"
                                class="@error('kategori') invalid:border-red-500 @enderror mb-2 block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-mainclr focus:border-mainclr dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainclr dark:focus:border-mainclr "
                                autofocus required value="{{ old('kategori', $data->kategori) }}">
                            @error('kategori')
                                <div class="text-red-500 text-xs font-medium">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="nama_buku"
                                class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                                Buku</label>
                            <input type="text" id="nama_buku" name="nama_buku"
                                class="@error('nama_buku') invalid:border-red-500 @enderror mb-2 block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-mainclr focus:border-mainclr dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainclr dark:focus:border-mainclr "
                                autofocus required value="{{ old('nama_buku', $data->nama_buku) }}">
                            @error('nama_buku')
                                <div class="text-red-500 text-xs font-medium">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="harga"
                                class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">Harga</label>
                            <input type="number" id="harga" name="harga"
                                class="@error('harga') invalid:border-red-500 @enderror mb-2 block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-mainclr focus:border-mainclr dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainclr dark:focus:border-mainclr "
                                autofocus required value="{{ old('harga', $data->harga) }}">
                            @error('harga')
                                <div class="text-red-500 text-xs font-medium">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="stok"
                                class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">Stok</label>
                            <input type="number" id="stok" name="stok"
                                class="@error('stok') invalid:border-red-500 @enderror mb-2 block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-mainclr focus:border-mainclr dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-mainclr dark:focus:border-mainclr"
                                required value="{{ old('stok', $data->stok) }}">
                            @error('stok')
                                <div class="text-red-500 text-xs font-medium">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="id_penerbit"
                                class="block w-fit text-sm font-medium text-gray-900 dark:text-gray-300">Penerbit</label>
                            <div class="id_penerbit">
                                <select name="id_penerbit" class="max-w-full w-96" required>
                                    <option>Pilih Penerbit</option>
                                    @foreach ($listpenerbit as $item)
                                        <option value="{{ $item->id_penerbit }}"
                                            @if ($data->id_penerbit == $item->id_penerbit) selected ="selected" @endif>
                                            {{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div>

                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200  dark:border-gray-600">
                        <button type="submit"
                            class="text-white mx-auto bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:bg-blue-500">Edit</button>
                    </div>
                </form> --}}

            </div>
        </div>
    </div>
</div>
