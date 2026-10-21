<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2><b>{{ __("Consolidated accounts report - ") }}</b></h2>
                    <br />
                    <hr class="py-2" />
                    <div class="row">
                        <div class="col-3">
                            <div class="card text-center">
                                <div class="card-header">
                                    <h5 class="card-title">{{ __("Cash") }}</h5>
                                </div>
                                <div class="card-body">
                                    5$
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card text-center">
                                <div class="card-header">
                                    <h5 class="card-title">{{ __("Debit") }}</h5>
                                </div>
                                <div class="card-body">
                                    5$
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card text-center">
                                <div class="card-header">
                                    <h5 class="card-title">{{ __("Credit") }}</h5>
                                </div>
                                <div class="card-body">
                                    5$
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card text-center">
                                <div class="card-header">
                                    <h5 class="card-title">{{ __("Expenses") }}</h5>
                                </div>
                                <div class="card-body">
                                    5$
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
