<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
    
                <a href="/">
                    <img class="w-36" src="{{ asset('img/ewallet-logo.png')}} " alt="Logo">
                </a>
                <p class="text-lg">
                    Welcome to E-Wallet dashboard, E-Wallet will manage your income and expenses by saving it with no charge and feel how easy to manage your personal finance and payment.
                </p>
                    
                </table>
            </div>
        </div>
</x-app-layout>
