@extends('layouts.main')

@section('content')
    <div id="about">
        <h3>About us</h3>
        <p>Larafake is a super cool company and you should love us.</p>
        <h4>Our stakeholders:</h4>
        <ul>
            
                @foreach($stakeholders as $stakeholder)
                    <li>
                        @if($loop->first)
                            {{ $stakeholder." - CEO" }};
                        @else
                            {{ $stakeholder }};
                        @endif
                    </li>
                @endforeach
            
        </ul>
    </div>
@endsection