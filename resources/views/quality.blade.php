@extends('layouts.main_layout')

@section('title', 'Quality')

@section('content')
    <div class="px-4 md:px-96 bg-black md:pt-36 pt-12 pb:12">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- First div - takes 50% -->
            <div class="md:w-1/2 w-full">
                <img src="{{ asset('assets/quality.jpg') }}" class="h-full w-full object-cover" alt="landing page image"/>
            </div>

            <!-- Second div - takes 50% -->
            <div class="md:w-1/2 w-full flex flex-col gap-4">
                <h1 class="text-4xl font-bold text-white">Quality Management</h1>
                <p class="text-white">
                    Quality is of paramount importance to all team members at
                    Qualiden Engineering Limited. We are continually evaluating
                    and improving the level of service we offer our clients. We
                    remain transparent to ensure that the reputation for quality on
                    which we pride ourselves is maintained and grown.
                    <br>
                    <br>
                    We are
                    committed to providing projects that are not just fit-for
                    purpose, but which exceed expectation in terms of quality to
                    build and its functionalities. Our reputation for both the
                    quality of our project management and finished projects is
                    achieved through our proven Quality Management System.

                    <br>
                    <br>

                    Our Quality System is an integral part of the company’s
                    management activity and is implemented through a
                    comprehensive set of procedures and controls.
                    Our Quality Management System follows six basic
                    Principles of Quality:
                    1. Provides for long-term quality control through
                    established processes and systems.
                    2. Nurtures and guides our Quality Culture through its
                    proven policies and procedures.
                    3. Successfully identifies and controls the quality,
                    standard and design as defined by our clients.
                    WORKS ELECTRICAL AND ENGINEERING GENERAL
                    4. Plans for Quality: Identifying measures of achieving
                    the required quality, including construction methods,
                    equipment, materials and personnel.
                    5. Insures for Quality: Encouraging that all parties “Work
                    Together to Deliver the Best – First Time”.
                    6. Provides for a process of continuous improvement.
                    Correcting any potential quality deficiencies that may
                    arise.

                    <br>
                    <br>
                    Our management structure and the responsibility of all our
                    employees is explained in detail in our Management
                    Manual.
                    Our Quality system is an integral part of our existing
                    management process which sets the high standards of co-
                    operation required by all members of staff to ensure that the
                    quality of service we provide to our clients is second to none.
                    The purpose of such a Quality System is to “get it right first
                    time every time”. Our Directors and Staff are committed to
                    driving this process actively to give our clients the satisfaction
                    of knowing that we will deliver exactly what we promise.
                </p>
            </div>
        </div>
    </div>
@endsection
