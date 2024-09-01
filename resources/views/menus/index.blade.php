<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            献立一覧
        </h2>
    </x-slot>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.9.96/css/materialdesignicons.min.css" rel="stylesheet">


    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-8 bg-white border-b border-gray-200">
                    @if($menu)
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-indigo-700 mb-6">月曜日の献立</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="bg-indigo-50 p-6 rounded-lg shadow-md transition duration-300 ease-in-out hover:shadow-lg">
                                    <div class="flex items-center mb-3">
                                        <i class="mdi mdi-rice text-2xl text-indigo-600 mr-2"></i>
                                        <h4 class="font-bold text-indigo-900">メインメニュー</h4>
                                    </div>
                                    <p class="text-gray-800 text-lg">{{ $menu->dishes->where('type', 'main')->first()->name }}</p>
                                </div>
                                <div class="bg-indigo-50 p-6 rounded-lg shadow-md transition duration-300 ease-in-out hover:shadow-lg">
                                    <div class="flex items-center mb-3">
                                        <i class="mdi mdi-food-variant text-2xl text-indigo-600 mr-2"></i>
                                        <h4 class="font-bold text-indigo-900">サイドメニュー 1</h4>
                                    </div>
                                    <p class="text-gray-800 text-lg">{{ $menu->dishes->where('type', 'sub1')->first()->name }}</p>
                                </div>
                                <div class="bg-indigo-50 p-6 rounded-lg shadow-md transition duration-300 ease-in-out hover:shadow-lg">
                                    <div class="flex items-center mb-3">
                                        <i class="mdi mdi-food-apple text-2xl text-indigo-600 mr-2"></i>
                                        <h4 class="font-bold text-indigo-900">サイドメニュー 2</h4>
                                    </div>
                                    <p class="text-gray-800 text-lg">{{ $menu->dishes->where('type', 'sub2')->first()->name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-4 mt-8">
                            <a href="{{ route('menus.edit', $menu) }}" class="inline-flex items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                編集
                            </a>
                            <form action="{{ route('menus.destroy', $menu) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center px-6 py-3 bg-red-600 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150" onclick="return confirm('この献立を削除してもよろしいですか？')">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    削除
                                </button>
                            </form>
                        </div>
                    @else
                        <div class="text-center py-12">
                            <p class="text-gray-600 mb-6 text-lg">月曜日の献立をまだ考えていません。新しい献立を作成しましょう！</p>
                            <a href="{{ route('menus.create') }}" class="inline-flex items-center px-6 py-3 bg-green-600 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                献立作成
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>