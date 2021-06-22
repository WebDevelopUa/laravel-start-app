{{--Dashboard view--}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h3 class="m-3">Hi there!
            {{Auth::user()->name}}
        </h3>
        <h4>Total users:
            <span class="badge badge-success">  {{count($users )}}</span>
        </h4>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{--     Custom hardcoded text       --}}
                <h1 class="m-4">Bootstrap table</h1>
                {{-- Get data from Database: "sampledb", table: "users" using Eloquent ORM --}}
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created</th>
                    </tr>
                    </thead>
                    <tbody>

                    @php($i=1)
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at->diffForHumans()}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{--    <div class="py-12">--}}
    {{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
    {{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
    {{--                <x-jet-welcome/>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</x-app-layout>
