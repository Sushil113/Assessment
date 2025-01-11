@extends('include.master')

@section('title', 'Dashboard')

@section('content')

<div>
    <div class="card-box bg-white p-6 shadow rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Assessment</h1>
        <p class="mb-2">All pages are available in English and Japanese for translation.</p>
        <p class="mb-2">Currently, only two pages are functional:</p>
        <ul class="list-disc pl-6 mb-2">
            <li>Invoice > Business Partner Inquiry</li>
            <li>Invoice > Transaction History</li>
        </ul>
        <p class="mb-2">A "Generate Report" button is available for creating and downloading PDF reports.</p>
        <p class="mb-2">In the Business Partner Inquiry table, only the "View Details" (eye) button is operational.</p>
        <p class="mb-2">The Personal Detail modal is currently static and non-functional.</p>
    </div>
</div>
@endsection