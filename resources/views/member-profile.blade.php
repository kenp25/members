@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Personnal Information</h1>
            <div>
                name: {{$member->getFullName()}}
            </div>
            <div>
                sex: {{ $member->sex }}
            </div>
            <div>
                Date of Birth: {{ $member->dob }}
            </div>
            <div>
                Education: {{ $member->education_level }}
            </div>
            <div>
                Phone: {{ $member->phone }}
            </div>
            <div>
                Email: {{ $member->email }}
            </div>
            <div>
                Address: {{ $member->address }}
            </div>
            <div>
                Best Time to reach you: {{ $member->time_to_reach_you }}
            </div>
        </div>

        <div class="row">
            <h1>Guardian Information</h1>
            <div>
                name: {{ $member->guardian->name }}
            </div>

            <div>
                email: {{ $member->guardian->email }}
            </div>

            <div>
                address: {{ $member->guardian->address }}
            </div>
        </div>

        <div class="row">
            <h1>Referee Information</h1>
            <div>
                name: {{ $member->referee->name }}
            </div>

            <div>
                email: {{ $member->referee->email }}
            </div>

            <div>
                address: {{ $member->referee->address }}
            </div>
        </div>
    </div>


@endsection