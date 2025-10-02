@extends('layouts.app')

@section('title', 'Мой аккаунт')

@section('content')
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold mb-6">Мой аккаунт</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-lg font-semibold mb-4">Информация о профиле</h3>
                <div class="space-y-2">
                    <p><strong>Имя:</strong> {{ $user->first_name }}</p>
                    <p><strong>Фамилия:</strong> {{ $user->last_name }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Зарегистрирован:</strong> {{ $user->created_at->format('d.m.Y') }}</p>
                </div>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-lg font-semibold mb-4">Действия</h3>
                <div class="space-y-3">
                    <a href="{{ route('profile.edit') }}"
                       class="block w-full bg-blue-500 text-white text-center py-2 px-4 rounded hover:bg-blue-600">
                        Редактировать профиль
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="block w-full bg-gray-500 text-white text-center py-2 px-4 rounded hover:bg-gray-600">
                            Выйти
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
