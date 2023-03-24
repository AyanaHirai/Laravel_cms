<!-- resources/views/books.blade.php -->
<x-app-layout>

    <!--ヘッダー[START]-->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <form action="{{ route('user_index') }}" method="GET" class="w-full max-w-lg">
                <x-button class="bg-gray-100 text-gray-900">{{ __('Dashboard') }}</x-button>
            </form>
        </h2>
        <!--スキルテストに飛ぶ-->
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin:5px">
            <form action="{{ route('skill_test.index') }}" method="GET" class="w-full max-w-lg">
                <x-button class="bg-gray-100 text-gray-900">{{ __('Skill Test') }}</x-button>
            </form>
        </h2>
    </x-slot>
    <!--ヘッダー[END]-->
            
        <!-- バリデーションエラーの表示に使用-->
       <x-errors id="errors" class="bg-blue-500 rounded-lg">{{$errors}}</x-errors>
        <!-- バリデーションエラーの表示に使用-->
    
    <!--全エリア[START]-->
    <div class="flex bg-gray-100">


        <div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">
            
             <!-- ユーザー閲覧 -->
            @if (count($users) > 0)
                @foreach ($users as $user)
                    <x-collection id="{{ $user->id }}">{{ $user->name }}</x-collection>
                @endforeach
            @endif
        </div>

    
    <div>
        {{ $users->links()}}
    </div>

</div>
 <!--全エリア[END]-->

</x-app-layout>
