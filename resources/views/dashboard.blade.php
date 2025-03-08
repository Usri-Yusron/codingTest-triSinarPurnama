<x-app-layout>
    <div class="mt-10">
        <div class="w-full px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 font-bold text-center">
                    <p>Hai {{ Auth::user()->name }}, Selamat betugas 😎</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 md:flex flex-row">
        <div class="md:basis-1/3 px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 pt-6 text-gray-900 text-center">
                    <p>Daftar tugasmu ada disini👇</p>
                </div>
                <div class="px-6 pt-2">
                    <div class="border-t border-gray-300 "></div>
                </div>
                <div class="flex flex-row justify-between px-6 pt-6 text-gray-900">
                    @foreach ($orders as $item)
                        @if ($item == null)
                            <div class="p-6 text-gray-900 text-center">
                                <p>Yeayy...Belum ada tugas yang diberikan</p>
                            </div>
                        @endif
                        <div>
                            <p>ID Tugas</p>
                            <p>Task</p>
                            <p>Quantity</p>
                            <p>Deadline</p>
                            <p>Status</p>
                        </div>
                        <div>
                            <p>{{ $item->id }}</p>
                            <p>{{ $item->product_name }}</p>
                            <p>{{ $item->quantity }}</p>
                            <p>{{ $item->due_date }}</p>
                            <p>{{ $item->status }}</p>
                        </div>
                        <div class="border-t border-gray-300 "></div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="mt-5 md:mt-0 basis-2/3 w-full px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    {{ __('Daftar tugasmu ada disini👇') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
