<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    
    
        
        <!--スキルテスト結果表示-->
        <p class="font-semibold text-xl text-gray-800 leading-tight" style="text-align:center">
            {{ __('スキルテスト結果') }}
        </p>
        
        <div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">
            @csrf
            
            @if (count($skill_tests) > 0)
                @foreach ($skill_tests as $skill_test)
                    <x-collection id="question-{{ $skill_test->id }}">{{ $skill_test->question }} . {{ $skill_test->answer }}</x-collection>
                @endforeach
            @endif
        </div>
    
    <!--<div class="py-12">-->
    <!--    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">-->
    <!--        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">-->
    <!--            <div class="max-w-xl">-->
    <!--                @include('profile.partials.update-profile-information-form')-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">-->
    <!--            <div class="max-w-xl">-->
    <!--                @include('profile.partials.update-password-form')-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">-->
    <!--            <div class="max-w-xl">-->
    <!--                @include('profile.partials.delete-user-form')-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
</x-app-layout>
