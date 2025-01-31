@extends('include.master')

@section('title', 'Transaction History')

@section('content')

<!-- breadcrumbs div  -->
<div class="flex justify-between items-center p-4 bg-white shadow rounded mb-6">
    <x-breadcrumb :links="$breadcrumbs" />
</div>

<div class="p-6 bg-gray-50">

    <!-- filter div -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-lg font-semibold text-gray-700">Toyota Motor Corp</h1>
        <div class="border rounded px-4 py-2 flex items-center text-gray-600 cursor-pointer">
            <span>{{ __('messages.filter') }}</span>
            <span class="material-icons-outlined ml-2">expand_more</span>
        </div>
    </div>

    <!-- Line separator -->
    <div class="border-t-4 border-gray-200"></div>

    <!-- title for different types of transactions -->
    <div class="mt-6 mb-4 border-b border-gray-200">
        <nav class="flex space-x-8">
            <a href="#" class="text-blue-500 border-b-2 border-blue-500 pb-2 font-medium">{{ __('messages.all_type') }}</a>
            <a href="#" class="text-gray-600 hover:text-blue-500 pb-2">{{ __('messages.invoice') }}</a>
            <a href="#" class="text-gray-600 hover:text-blue-500 pb-2">{{ __('messages.estimate') }}</a>
            <a href="#" class="text-gray-600 hover:text-blue-500 pb-2">{{ __('messages.delivery_slip') }}</a>
            <a href="#" class="text-gray-600 hover:text-blue-500 pb-2">{{ __('messages.receipt') }}</a>
            <a href="#" class="text-gray-600 hover:text-blue-500 pb-2">{{ __('messages.contract') }}</a>
        </nav>
    </div>

    <!-- Table div-->
    <div class="overflow-x-auto border border-gray-200 rounded-lg">
        <table class="min-w-full bg-white divide-y divide-gray-200">
            <thead>
                <tr class="bg-gray-50 text-left">
                    <th class="px-4 py-3 text-sm font-semibold text-gray-600">{{ __('messages.sr_no') }}</th>
                    <th class="px-4 py-3 text-sm font-semibold text-gray-600">{{ __('messages.deposit_time') }}</th>
                    <th class="px-4 py-3 text-sm font-semibold text-gray-600">{{ __('messages.amount') }}</th>
                    <th class="px-4 py-3 text-sm font-semibold text-gray-600">{{ __('messages.deposit_date') }}</th>
                    <th class="px-4 py-3 text-sm font-semibold text-gray-600">{{ __('messages.billing_amount') }}</th>
                    <th class="px-4 py-3 text-sm font-semibold text-gray-600">{{ __('messages.status') }}</th>
                    <th class="px-4 py-3 text-sm font-semibold text-gray-600">{{ __('messages.action') }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ( $transactionData as $index => $data )
                <tr>
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $index + 1 }}</td>
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $data->deposit_time }}</td>
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $data->amount }}</td>
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $data->deposit_date }}</td>
                    <td class="px-4 py-3 text-sm text-gray-700">¥ {{ $data->billing_amount }}</td>
                    <td class="px-4 py-3 text-sm">
                        @if($data->status)
                        <span class="px-2 py-1 text-green-800 bg-green-100 rounded-full">{{ __('messages.paid') }}</span>
                        @else
                        <span class="px-2 py-1 text-red-800 bg-red-100 rounded-full">{{ __('messages.unpaid') }}</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <div class="flex space-x-2">
                            <button class="p-2 text-gray-500 hover:text-gray-800">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.25 12.5532H13.75C13.9625 12.5532 14.1407 12.4801 14.2847 12.3339C14.4287 12.1877 14.5005 12.007 14.5 11.7918C14.4995 11.5766 14.4275 11.3959 14.284 11.2497C14.1405 11.1035 13.9625 11.0304 13.75 11.0304H6.25C6.0375 11.0304 5.8595 11.1035 5.716 11.2497C5.5725 11.3959 5.5005 11.5766 5.5 11.7918C5.4995 12.007 5.5715 12.188 5.716 12.3347C5.8605 12.4814 6.0385 12.5542 6.25 12.5532ZM6.25 10.2691H13.75C13.9625 10.2691 14.1407 10.196 14.2847 10.0498C14.4287 9.9036 14.5005 9.7229 14.5 9.50769C14.4995 9.29247 14.4275 9.11177 14.284 8.96558C14.1405 8.8194 13.9625 8.74631 13.75 8.74631H6.25C6.0375 8.74631 5.8595 8.8194 5.716 8.96558C5.5725 9.11177 5.5005 9.29247 5.5 9.50769C5.4995 9.7229 5.5715 9.90386 5.716 10.0505C5.8605 10.1972 6.0385 10.2701 6.25 10.2691ZM6.25 7.98493H13.75C13.9625 7.98493 14.1407 7.91184 14.2847 7.76565C14.4287 7.61947 14.5005 7.43877 14.5 7.22355C14.4995 7.00833 14.4275 6.82763 14.284 6.68145C14.1405 6.53526 13.9625 6.46217 13.75 6.46217H6.25C6.0375 6.46217 5.8595 6.53526 5.716 6.68145C5.5725 6.82763 5.5005 7.00833 5.5 7.22355C5.4995 7.43877 5.5715 7.61972 5.716 7.76641C5.8605 7.91311 6.0385 7.98594 6.25 7.98493ZM4 15.5987C3.5875 15.5987 3.2345 15.4497 2.941 15.1518C2.6475 14.8538 2.5005 14.4952 2.5 14.076V4.93941C2.5 4.52066 2.647 4.1623 2.941 3.86435C3.235 3.56639 3.588 3.41716 4 3.41666H16C16.4125 3.41666 16.7657 3.56589 17.0597 3.86435C17.3537 4.16281 17.5005 4.52116 17.5 4.93941V16.7979C17.5 17.1405 17.347 17.3786 17.041 17.5121C16.735 17.6456 16.463 17.5915 16.225 17.3499L14.5 15.5987H4Z" fill="#8B8B8B" />
                                </svg>
                            </button>
                            <button class="p-2 text-gray-500 hover:text-gray-800">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 15C6.25 15 4.70139 14.4689 3.35417 13.4067C2.00694 12.3444 1.13194 10.9867 0.729167 9.33333C0.673611 9.125 0.715278 8.93416 0.854167 8.76083C0.993055 8.5875 1.18056 8.48666 1.41667 8.45833C1.63889 8.43055 1.84028 8.47222 2.02083 8.58333C2.20139 8.69444 2.32639 8.86111 2.39583 9.08333C2.72917 10.3333 3.41667 11.3542 4.45833 12.1458C5.5 12.9375 6.68055 13.3333 8 13.3333C9.625 13.3333 11.0036 12.7675 12.1358 11.6358C13.2681 10.5042 13.8339 9.12555 13.8333 7.5C13.8328 5.87444 13.2669 4.49611 12.1358 3.365C11.0047 2.23389 9.62611 1.66778 8 1.66667C7.04167 1.66667 6.14583 1.88889 5.3125 2.33333C4.47917 2.77778 3.77778 3.38889 3.20833 4.16667H4.66667C4.90278 4.16667 5.10083 4.24667 5.26083 4.40667C5.42083 4.56667 5.50056 4.76444 5.5 5C5.49944 5.23555 5.41944 5.43361 5.26 5.59417C5.10055 5.75472 4.90278 5.83444 4.66667 5.83333H1.33333C1.09722 5.83333 0.899444 5.75333 0.74 5.59333C0.580556 5.43333 0.500556 5.23555 0.5 5V1.66667C0.5 1.43056 0.58 1.23278 0.74 1.07333C0.9 0.913889 1.09778 0.833889 1.33333 0.833333C1.56889 0.832778 1.76694 0.912778 1.9275 1.07333C2.08806 1.23389 2.16778 1.43167 2.16667 1.66667V2.79167C2.875 1.90278 3.73972 1.21528 4.76083 0.729166C5.78194 0.243055 6.86167 0 8 0C9.04167 0 10.0175 0.198056 10.9275 0.594167C11.8375 0.990278 12.6292 1.52472 13.3025 2.1975C13.9758 2.87028 14.5106 3.66194 14.9067 4.5725C15.3028 5.48305 15.5006 6.45889 15.5 7.5C15.4994 8.54111 15.3017 9.51694 14.9067 10.4275C14.5117 11.3381 13.9769 12.1297 13.3025 12.8025C12.6281 13.4753 11.8364 14.01 10.9275 14.4067C10.0186 14.8033 9.04278 15.0011 8 15ZM8.83333 7.16666L10.9167 9.25C11.0694 9.40277 11.1458 9.59722 11.1458 9.83333C11.1458 10.0694 11.0694 10.2639 10.9167 10.4167C10.7639 10.5694 10.5694 10.6458 10.3333 10.6458C10.0972 10.6458 9.90278 10.5694 9.75 10.4167L7.41667 8.08333C7.33333 8 7.27083 7.90639 7.22917 7.8025C7.1875 7.69861 7.16667 7.59083 7.16667 7.47916V4.16667C7.16667 3.93055 7.24667 3.73278 7.40667 3.57333C7.56667 3.41389 7.76444 3.33389 8 3.33333C8.23555 3.33278 8.43361 3.41278 8.59417 3.57333C8.75472 3.73389 8.83444 3.93167 8.83333 4.16667V7.16666Z" fill="#8B8B8B" />
                                </svg>

                            </button>
                            <button class="p-2 text-gray-500 hover:text-gray-800">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.99984 8.33334C9.39707 8.33334 8.819 8.56162 8.39278 8.96795C7.96656 9.37427 7.72711 9.92537 7.72711 10.5C7.72711 11.0746 7.96656 11.6257 8.39278 12.0321C8.819 12.4384 9.39707 12.6667 9.99984 12.6667C10.6026 12.6667 11.1807 12.4384 11.6069 12.0321C12.0331 11.6257 12.2726 11.0746 12.2726 10.5C12.2726 9.92537 12.0331 9.37427 11.6069 8.96795C11.1807 8.56162 10.6026 8.33334 9.99984 8.33334ZM9.99984 14.1111C8.99523 14.1111 8.03177 13.7307 7.3214 13.0535C6.61104 12.3762 6.21196 11.4577 6.21196 10.5C6.21196 9.54228 6.61104 8.62378 7.3214 7.94657C8.03177 7.26935 8.99523 6.8889 9.99984 6.8889C11.0044 6.8889 11.9679 7.26935 12.6783 7.94657C13.3886 8.62378 13.7877 9.54228 13.7877 10.5C13.7877 11.4577 13.3886 12.3762 12.6783 13.0535C11.9679 13.7307 11.0044 14.1111 9.99984 14.1111ZM9.99984 5.08334C6.21196 5.08334 2.97711 7.32945 1.6665 10.5C2.97711 13.6706 6.21196 15.9167 9.99984 15.9167C13.7877 15.9167 17.0226 13.6706 18.3332 10.5C17.0226 7.32945 13.7877 5.08334 9.99984 5.08334Z" fill="#8B8B8B" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- pagination div -->
<div class="flex items-center justify-between p-4 pb-3">
    <div class="flex items-center space-x-2">
        <label for="rows-per-page" class="text-gray-500 text-sm">{{ __('messages.row_per_page') }}</label>
        <select id="rows-per-page" class="block w-16 p-2 text-sm border rounded-md focus:ring-blue-500 focus:border-blue-500">
            <option>5</option>
            <option>10</option>
            <option>20</option>
        </select>
    </div>

    <div class="flex items-center space-x-2">
        <button class="px-3 py-2 text-sm text-gray-500 bg-white border rounded-md hover:bg-gray-100 disabled:opacity-50" disabled>
            {{ __('messages.previous') }}
        </button>

        <button class="px-3 py-2 text-sm text-white bg-blue-500 border rounded-md">1</button>
        <button class="px-3 py-2 text-sm text-gray-500 bg-white border rounded-md hover:bg-gray-100">2</button>
        <span class="px-3 py-2 text-sm text-gray-500">...</span>
        <button class="px-3 py-2 text-sm text-gray-500 bg-white border rounded-md hover:bg-gray-100">11</button>

        <button class="px-3 py-2 text-sm text-gray-500 bg-white border rounded-md hover:bg-gray-100">
            {{ __('messages.next') }}
        </button>
    </div>
</div>

@endsection