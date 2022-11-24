<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
{{--                        <div class="flex justify-between items-center py-4 bg-white dark:bg-gray-800">--}}

{{--                            <label for="table-search" class="sr-only">Search</label>--}}
{{--                            <div class="relative">--}}
{{--                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">--}}
{{--                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"--}}
{{--                                         fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path fill-rule="evenodd"--}}
{{--                                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"--}}
{{--                                              clip-rule="evenodd"></path>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                                <input type="text" id="table-search-users"--}}
{{--                                       class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"--}}
{{--                                       placeholder="Search for users">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Անուն
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Ազգանուն
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Էլ․ հասցե
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)

                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td scope="row"
                                        class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="text-base font-semibold">{{ $contact->first_name }}</div>
                    </div>
                    </th>
                    <td class="py-4 px-6">
                        <div class="text-base font-semibold">{{ $contact->last_name }}</div>
                    </td>
                    <td class="py-4 px-6">
                        <div class="text-base font-semibold">{{ $contact->email }}</div>
                    </td>
                    </tr>
                    @endforeach

                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
