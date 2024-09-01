<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            献立編集
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('menus.update', $menu) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="main_dish" class="block text-indigo-700 text-xl font-bold mb-4">メインメニュー:</label>
                            <input type="text" name="main_dish" id="main_dish" value="{{ $menu->dishes->where('type', 'main')->first()->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="sub_dish1" class="block text-indigo-700 text-xl font-bold mb-4">サイドメニュー 1:</label>
                            <input type="text" name="sub_dish1" id="sub_dish1" value="{{ $menu->dishes->where('type', 'sub1')->first()->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-6">
                            <label for="sub_dish2" class="block text-indigo-700 text-xl font-bold mb-4">サイドメニュー 2:</label>
                            <input type="text" name="sub_dish2" id="sub_dish2" value="{{ $menu->dishes->where('type', 'sub2')->first()->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                献立を更新する
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>