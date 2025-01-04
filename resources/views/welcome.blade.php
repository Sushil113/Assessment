@extends('include.master')

@section('title', 'Dashboard')

@section('content')

<!-- card box div -->
<div class="grid grid-cols-4 gap-4 mb-6">
    <div class="bg-white p-4 shadow rounded flex items-center">
        <div class="flex-shrink-0 bg-blue-100 p-2 rounded-full">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.2886 17.1304C13.2886 14.3261 15.525 12.0435 18.2726 12.0435C19.7636 12.0435 21.0841 12.7174 22 13.7609V7.02174C22 6.36957 21.4888 5.84783 20.8498 5.84783H16.377V5.15217C16.377 3.95652 15.4185 3 14.2684 3H9.68903C8.51757 3 7.5804 3.97826 7.5804 5.15217V5.84783H3.15016C2.51118 5.84783 2 6.36957 2 7.02174V19.8261C2 20.4783 2.51118 21 3.15016 21H15.0351C13.9702 20.0652 13.2886 18.6739 13.2886 17.1304ZM8.87966 5.13043C8.87966 4.67391 9.24175 4.30435 9.68903 4.30435H14.2684C14.7157 4.30435 15.0777 4.67391 15.0777 5.13043V5.82609H8.87966V5.13043Z" fill="#2D74FF" />
                <path d="M12 12H22V20C22 20.5523 21.5523 21 21 21H12V12Z" fill="#2D74FF" />
            </svg>

        </div>
        <div class="ml-4">
            <div class="text-gray-500">Open Deals</div>
            <div class="text-lg font-semibold">1000</div>
        </div>
    </div>

    <div class="bg-white p-4 shadow rounded flex items-center">
        <div class="flex-shrink-0 bg-blue-100 p-2 rounded-full">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.0532 16.879C13.0532 14.1246 15.243 11.8826 17.9333 11.8826C19.3932 11.8826 20.6862 12.5445 21.583 13.5694V6.95019C21.583 6.30961 21.0825 5.79716 20.4568 5.79716H16.0772V5.11388C16.0772 3.9395 15.1387 3 14.0126 3H9.52871C8.38167 3 7.46405 3.96086 7.46405 5.11388V5.79716H3.12618C2.50052 5.79716 2 6.30961 2 6.95019V19.5267C2 20.1673 2.50052 20.6797 3.12618 20.6797H14.7633C13.7206 19.7616 13.0532 18.395 13.0532 16.879ZM8.73621 5.09253C8.73621 4.64413 9.09075 4.28114 9.52871 4.28114H14.0126C14.4505 4.28114 14.8051 4.64413 14.8051 5.09253V5.77581H8.73621V5.09253Z" fill="#E73152" />
                <path d="M18.0168 20.9999C15.827 20.9999 14.0334 19.1636 14.0334 16.9216C14.0334 14.6796 15.827 12.8433 18.0168 12.8433C20.2066 12.8433 22.0001 14.6796 22.0001 16.9216C22.0001 19.1636 20.2066 20.9999 18.0168 20.9999ZM18.0168 13.7401C16.2858 13.7401 14.8885 15.1707 14.8885 16.943C14.8885 18.7152 16.2858 20.1458 18.0168 20.1458C19.7478 20.1458 21.1451 18.7152 21.1451 16.943C21.1451 15.1707 19.7478 13.7401 18.0168 13.7401Z" fill="#E73152" />
                <path d="M19.8727 16.7509H18.3919V14.9359C18.3919 14.7438 18.2251 14.573 18.0374 14.573C17.8497 14.573 17.6829 14.7438 17.6829 14.9359V17.1139C17.6829 17.3061 17.8497 17.4769 18.0374 17.4769H19.8727C20.0603 17.4769 20.2272 17.3061 20.2272 17.1139C20.2272 16.9217 20.0603 16.7509 19.8727 16.7509Z" fill="#E73152" />
            </svg>
        </div>
        <div class="ml-4">
            <div class="text-gray-500">Pending Deals</div>
            <div class="text-lg font-semibold">50</div>
        </div>
    </div>

    <div class="bg-white p-4 shadow rounded flex items-center">
        <div class="flex-shrink-0 bg-blue-100 p-2 rounded-full">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.89471 11.6372C12.2168 11.6372 14.1052 9.78123 14.1052 7.49901C14.1052 5.21679 12.2168 3.36081 9.89471 3.36081C7.57261 3.36081 5.6842 5.21679 5.6842 7.49901C5.6842 9.78123 7.57261 11.6372 9.89471 11.6372ZM11.4736 12.6718H8.31576C4.83262 12.6718 2 15.4557 2 18.8791V21.5H9.89471H17.7894V18.8791C17.7894 15.4557 14.9568 12.6718 11.4736 12.6718Z" fill="#F38D15" />
                <path d="M17.3727 10.6523C18.0138 9.57848 18.2906 8.33208 18.1632 7.0934C17.9748 5.24777 16.9263 3.61628 15.2127 2.5L14.0495 4.22356C15.2274 4.9912 15.9442 6.08472 16.0685 7.30031C16.1252 7.86524 16.0534 8.43551 15.8582 8.9698C15.6631 9.50409 15.3494 9.98902 14.94 10.3895L13.6853 11.6227L15.3885 12.1141C19.8432 13.3969 19.8948 17.8 19.8948 17.8444H22C22 15.9936 20.9937 12.3769 17.3727 10.6523Z" fill="#F38D15" />
            </svg>
        </div>
        <div class="ml-4">
            <div class="text-gray-500">Active Partners</div>
            <div class="text-lg font-semibold">180</div>
        </div>
    </div>

    <div class="bg-white p-4 shadow rounded flex items-center">
        <div class="flex-shrink-0 bg-blue-100 p-2 rounded-full">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.3313 10.3313C12.6319 10.3313 14.4969 8.46624 14.4969 6.16563C14.4969 3.86501 12.6319 2 10.3313 2C8.03066 2 6.16565 3.86501 6.16565 6.16563C6.16565 8.46624 8.03066 10.3313 10.3313 10.3313Z" fill="#14C25A" />
                <path d="M14.9801 13.7304L15.0634 13.2388C15.0909 13.0743 15.0682 12.9052 14.9984 12.7537C14.9286 12.6021 14.8148 12.4751 14.6718 12.3891C13.4095 11.6164 11.964 11.1941 10.4843 11.1659C9.00449 11.1376 7.54394 11.5044 6.25304 12.2283C4.96215 12.9523 3.88758 14.0073 3.14003 15.2846C2.39247 16.562 1.99895 18.0156 2 19.4956V21.1619C2.00064 21.3826 2.08862 21.5942 2.24472 21.7503C2.40083 21.9064 2.61236 21.9944 2.83313 21.995H12.8306C13.0273 21.9946 13.2177 21.9252 13.3684 21.7988C13.5192 21.6725 13.6208 21.4971 13.6554 21.3035L13.7554 20.7203C13.3722 20.1826 13.0997 19.574 12.9537 18.9301C12.8078 18.2861 12.7913 17.6195 12.9053 16.9691C13.0192 16.3187 13.2614 15.6975 13.6175 15.1415C13.9737 14.5855 14.4369 14.1058 14.9801 13.7304Z" fill="#14C25A" />
                <path d="M17.8293 13.6638C16.725 13.6652 15.6663 14.1046 14.8854 14.8854C14.1045 15.6663 13.6652 16.725 13.6637 17.8294C13.6657 18.3806 13.7731 18.9264 13.9803 19.4373C14.2708 20.1333 14.7447 20.7375 15.3515 21.1854C15.9583 21.6333 16.6753 21.9082 17.426 21.9807C18.1767 22.0532 18.9331 21.9207 19.6144 21.5972C20.2957 21.2738 20.8765 20.7715 21.2949 20.1439C21.7133 19.5164 21.9535 18.7871 21.9901 18.0338C22.0266 17.2804 21.858 16.5313 21.5023 15.8662C21.1467 15.2011 20.6172 14.645 19.9703 14.2572C19.3235 13.8693 18.5835 13.6642 17.8293 13.6638ZM19.254 19.254C19.096 19.4089 18.8836 19.4956 18.6624 19.4956C18.4412 19.4956 18.2289 19.4089 18.0709 19.254L17.2378 18.4209C17.0843 18.2621 16.9978 18.0503 16.9962 17.8294V16.9963C16.9962 16.7753 17.084 16.5634 17.2402 16.4071C17.3965 16.2509 17.6084 16.1631 17.8293 16.1631C18.0503 16.1631 18.2622 16.2509 18.4184 16.4071C18.5747 16.5634 18.6624 16.7753 18.6624 16.9963V17.4878L19.254 18.071C19.4101 18.2283 19.4976 18.4409 19.4976 18.6625C19.4976 18.8841 19.4101 19.0967 19.254 19.254Z" fill="#14C25A" />
            </svg>
        </div>
        <div class="ml-4">
            <div class="text-gray-500">Pending Partners</div>
            <div class="text-lg font-semibold">72</div>
        </div>
    </div>
</div>

<!-- search and filter div -->
<div class="flex justify-between items-center p-4 bg-white shadow rounded mb-6">
  <div class="flex items-center border rounded px-3 py-2 w-80">
    <input
      type="text"
      placeholder="Search by keywords"
      class="w-full border-none outline-none text-gray-600"
    />
    <span class="material-icons-outlined text-gray-400">search</span>
  </div>

  <div class="border rounded px-4 py-2 flex items-center text-gray-600 cursor-pointer">
    <span>Filter by Date</span>
    <span class="material-icons-outlined ml-2">expand_more</span>
  </div>
</div>

<!-- table div -->
<div class="bg-white shadow rounded p-4">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="border-b">
                <th class="p-2">Sr. No</th>
                <th class="p-2">Invoice Number</th>
                <th class="p-2">Company Name</th>
                <th class="p-2">Contact Name</th>
                <th class="p-2">Phone Number</th>
                <th class="p-2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b">
                <td class="p-2">1</td>
                <td class="p-2">#qc59243071</td>
                <td class="p-2">Toyota Motor Corp</td>
                <td class="p-2">Takehiko Hachi Rui</td>
                <td class="p-2">+81 9876543210</td>
                <td class="p-2 flex space-x-2">
                    <button class="text-blue-500 hover:text-blue-600">View</button>
                    <button class="text-gray-500 hover:text-gray-600">Edit</button>
                    <button class="text-red-500 hover:text-red-600">Delete</button>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
@endsection