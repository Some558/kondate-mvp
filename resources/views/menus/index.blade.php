<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            献立一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($menu)
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-gray-700 mb-4">月曜日の献立</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="bg-green-100 p-4 rounded-lg shadow">
                                    <h4 class="font-bold text-green-800 mb-2">メインメニュー</h4>
                                    <p class="text-green-700">{{ $menu->dishes->where('type', 'main')->first()->name }}</p>
                                </div>
                                <div class="bg-blue-100 p-4 rounded-lg shadow">
                                    <h4 class="font-bold text-blue-800 mb-2">サイドメニュー 1</h4>
                                    <p class="text-blue-700">{{ $menu->dishes->where('type', 'sub1')->first()->name }}</p>
                                </div>
                                <div class="bg-purple-100 p-4 rounded-lg shadow">
                                    <h4 class="font-bold text-purple-800 mb-2">サイドメニュー 2</h4>
                                    <p class="text-purple-700">{{ $menu->dishes->where('type', 'sub2')->first()->name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-4">
                            <a href="{{ route('menus.edit', $menu) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                編集
                            </a>
                            <form action="{{ route('menus.destroy', $menu) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:border-red-700 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150" onclick="return confirm('Are you sure you want to delete this menu?')">
                                    消去
                                </button>
                            </form>
                        </div>
                    @else
                        <p class="text-gray-600 mb-4">月曜日の献立を考えましょう！</p>
                        <a href="{{ route('menus.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                            献立作成
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>