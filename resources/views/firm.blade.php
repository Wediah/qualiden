@extends('layouts.main_layout')

@section('title', 'Firm Profile')

@section('content')
    <div class="px-4 md:px-96 bg-black md:pt-36 pt-12 pb:12">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- First div - takes 50% -->
            <div class="md:w-1/2 w-full">
                <img src="{{ asset('assets/plant.jpg') }}" class="h-full w-full object-cover" alt="landing page image"/>
            </div>

            <!-- Second div - takes 50% -->
            <div class="md:w-1/2 w-full flex flex-col gap-4">
                <h1 class="text-4xl font-bold text-white">About Our Firm</h1>
                <p class="text-white">
                    The Company QUALIDEN ENGINEERING LIMITED was
                    founded in Accra, Ghana by two hard working Engineers with
                    vast amount of working experience in Civil Engineering,
                    General Construction works, Pipe works (HDPE Pipe welding
                    and Fittings, PVC and Steel), Engineering Chemicals, Water
                    Proofing and Concrete Protection. Since then, the company
                    has grown by undertaking some challenging projects and has
                    accumulated experiences, skills and know-how in design and
                    building solutions, project management services, building
                    trades and related engineering services with reputation.
                    <br>
                    Qualiden Engineering Limited takes on the role
                    of main and sub - contractors for small to medium size
                    projects. We perform project management services to
                    coordinate specialist trades for industrial and commercial
                    projects. We also provide design inputs and engineering
                    solutions as value-add services to our clients.
                    <br>
                    WORKS ELECTRICAL AND ENGINEERING GENERAL
                    We have a broad portfolio of successfully completed
                    projects across a range of sectors including Residential,
                    Restoration / Refurbishment, Hospitality, Commercial,
                    Industrial and Healthcare. We have built our reputation on our
                    client focus and hands-on approach. We are proud of the fact
                    that our workload comes from our ability to handle multiple
                    jobs with excellent results. We are a business that have a
                    strong reputation for a competitive edge and a reliable
                    execution of all projects undertaken. This is achieved through
                    our relentless attention to detail and an experienced team with
                    the drive and customer focus to ensure client satisfaction is
                    achieved on our projects.
                    <br>
                    We continue to invest in modern business practices and
                    management techniques in order to ensure that we remain
                    at the cutting edge of our industry. We continue to build on
                    our reputation with our focus firmly on growing the ability of
                    the business to deliver in new and innovative ways.
                    Our ambition and goals are to use our years of experience in
                    the industry to meet our client’s expectation.
                    To deliver quality projects and value for money to our
                    clients; our success and reputation today have been
                    testament to this wisdom. The company have a wealth of
                    experience in mixed-use developments, new build and
                    refurbishment, in design and build and traditional forms of
                    contracting.
                </p>
            </div>
        </div>
    </div>
@endsection
