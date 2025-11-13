@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="bg-white rounded-xl shadow-sm p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">
            Welcome to Your Dashboard
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Projects Card -->
            <div class="bg-indigo-50 p-6 rounded-lg">
                <div class="flex items-center mb-4">
                    <i data-feather="folder" class="text-indigo-600 mr-3"></i>
                    <h3 class="text-lg font-semibold text-gray-800">Projects</h3>
                </div>
                <p class="text-gray-600">Manage your current projects and tasks</p>
                <a href="/dashboard/projects" class="mt-4 inline-flex items-center text-indigo-600 hover:text-indigo-800">
                    View all <i data-feather="arrow-right" class="ml-1 w-4 h-4"></i>
                </a>
            </div>

            <!-- Notes Card -->
            <div class="bg-blue-50 p-6 rounded-lg">
                <div class="flex items-center mb-4">
                    <i data-feather="file-text" class="text-blue-600 mr-3"></i>
                    <h3 class="text-lg font-semibold text-gray-800">Notes</h3>
                </div>
                <p class="text-gray-600">Access your important notes and documents</p>
                <a href="/dashboard/notes" class="mt-4 inline-flex items-center text-blue-600 hover:text-blue-800">
                    View all <i data-feather="arrow-right" class="ml-1 w-4 h-4"></i>
                </a>
            </div>

            <!-- Analytics Card -->
            <div class="bg-green-50 p-6 rounded-lg">
                <div class="flex items-center mb-4">
                    <i data-feather="activity" class="text-green-600 mr-3"></i>
                    <h3 class="text-lg font-semibold text-gray-800">Analytics</h3>
                </div>
                <p class="text-gray-600">Track your productivity and progress</p>
                <a href="/dashboard/analytics" class="mt-4 inline-flex items-center text-green-600 hover:text-green-800">
                    View all <i data-feather="arrow-right" class="ml-1 w-4 h-4"></i>
                </a>
            </div>

        </div>
    </div>
</div>
@endsection