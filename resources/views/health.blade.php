@extends('layouts.main_layout')

@section('title', 'Health & Safety')

@section('content')
    <div class="px-4 md:px-96 bg-black md:pt-36 pt-12 pb:12">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- First div - takes 50% -->
            <div class="md:w-1/2 w-full">
                <img src="{{ asset('assets/safe.jpg') }}" class="h-full w-full object-cover" alt="landing page image"/>
            </div>

            <!-- Second div - takes 50% -->
            <div class="md:w-1/2 w-full flex flex-col gap-4">
                <h1 class="text-4xl font-bold text-white">Safety Management</h1>
                <p class="text-white">
                    Our Board of Directors and Staff are totally committed to
                    the implementation and continuous improvement of the
                    WORKS ELECTRICAL AND ENGINEERING GENERAL
                    Integrated Management Systems governing our Health,
                    Safety, Environmental and Quality Codes of Practice.
                    <br>
                    <br>
                    These
                    systems are living standard that are continually reviewed
                    and improved in line with industry’s best practice.
                    Moreover, the guarantee of the health and safety of our
                    employees and of all those effected by our construction
                    operations are an absolute pre-requisite to conducting any
                    work at any time. We have developed our systems and
                    procedures over the years based on these ethics.
                    <br>
                    <br>
                    As a result of this approach and investment, implementation
                    of our environmental policy is strongly supported by our
                    Board of Directors and through the empowerment of all of our
                    employees.

                    <br>
                    <br>
                    The Management System Committee coordinates the network
                    of environmental correspondents. Organizes technical
                    working groups bringing together experts from each business
                    line and guides the team overall environmental actions and
                    policies.

                    <br>
                    <br>
                    We are proud of our management systems,
                    which have been developed and constantly improved. They
                    are an integral part of our management activity and are
                    implemented through a comprehensive set of procedures and
                    controls.
                </p>
            </div>
        </div>
    </div>
@endsection
