@extends('layouts.main_layout')

@section('title', 'Mission & Vision')

@section('content')
    <div class="px-4 md:px-96 bg-black md:pt-36 pt-12 pb-12">
        <!-- Vision Section -->
        <div class="flex flex-col md:flex-row gap-6 mb-16">
            <!-- First div - takes 50% -->
            <div class="md:w-1/2 w-full">
                <img src="{{ asset('assets/site.jpg') }}" class="h-full w-full object-cover" alt="Vision image"/>
            </div>

            <!-- Second div - takes 50% -->
            <div class="md:w-1/2 w-full flex flex-col gap-4">
                <h1 class="text-4xl font-bold text-white mb-6">OUR VISION</h1>
                <p class="text-white text-lg leading-relaxed">
                    At Qualiden Engineering Limited, we envision establishing ourselves as the foremost choice for all construction and engineering services across Africa. Our vision is built on the foundation of becoming indispensable partners to our clients, where our involvement is seen not just as a service, but as a critical component of their success.
                    <br><br>
                    We aim to be the premier engineering and construction firm that clients instinctively turn to for their most challenging projects. Through consistent excellence, innovative solutions, and unwavering reliability, we strive to build a reputation where our name becomes synonymous with quality, integrity, and groundbreaking infrastructure development.
                    <br><br>
                    Our vision extends to creating lasting impacts on the communities we serve—building not just structures, but sustainable environments that enhance quality of life and drive economic growth. We see ourselves as catalysts for progress, contributing to the development of modern infrastructure that meets current needs while anticipating future demands.
                    <br><br>
                    In pursuit of this vision, we commit to continuously evolving our practices, embracing cutting-edge technologies, and fostering a culture of excellence that permeates every aspect of our operations. We will maintain our position at the forefront of the industry by anticipating market trends, understanding client needs before they're articulated, and delivering solutions that exceed expectations.
                    <br><br>
                    Ultimately, our vision is to build a legacy of excellence—where each project we undertake stands as a testament to our commitment to quality, innovation, and client satisfaction, and where our partnerships with clients grow stronger with each successful completion.
                </p>
            </div>
        </div>

        <!-- Mission Section -->
        <div class="flex flex-col md:flex-row-reverse gap-6">
            <!-- First div - takes 50% -->
            <div class="md:w-1/2 w-full">
                <img src="{{ asset('assets/team.jpg') }}" class="h-full w-full object-cover" alt="Mission image"/>
            </div>

            <!-- Second div - takes 50% -->
            <div class="md:w-1/2 w-full flex flex-col gap-4">
                <h1 class="text-4xl font-bold text-white mb-6">OUR MISSION</h1>
                <p class="text-white text-lg leading-relaxed">
                    At Qualiden Engineering Limited, our mission is to deliver exceptional construction and engineering solutions through a powerful combination of our dedicated people, focused expertise, and proven track record of successful project delivery. We exist to transform our clients' visions into reality while setting new standards for quality and innovation in the construction industry.
                    <br><br>
                    Our mission is built on three fundamental pillars that distinguish us as the preferred construction partner:
                    <br><br>
                    <span class="font-bold">Our People:</span> We invest in developing and retaining exceptional talent—highly skilled engineers, experienced project managers, dedicated craftsmen, and innovative thinkers who bring passion, expertise, and commitment to every project. Our team's collective knowledge, attention to detail, and problem-solving abilities form the backbone of our service delivery.
                    <br><br>
                    <span class="font-bold">Our Focus:</span> We maintain unwavering concentration on client objectives, project specifications, and industry best practices. Our focused approach ensures that every aspect of a project—from initial planning to final execution—receives the meticulous attention it deserves, resulting in outcomes that consistently meet or exceed expectations.
                    <br><br>
                    <span class="font-bold">Our Track Record:</span> With a proven history of successfully completed projects across various sectors, we demonstrate consistent reliability, quality craftsmanship, and timely delivery. Our portfolio of accomplishments serves as tangible evidence of our capability to handle complex challenges and deliver exceptional results.
                    <br><br>
                    We are committed to providing comprehensive engineering solutions that address both immediate project requirements and long-term sustainability considerations. Through transparent communication, ethical business practices, and results-oriented methodologies, we build lasting relationships founded on trust, mutual respect, and shared success.
                    <br><br>
                    Our mission extends beyond construction—we aim to create value for all stakeholders, contribute to community development, and advance the engineering profession through innovation, continuous improvement, and knowledge sharing.
                </p>
            </div>
        </div>
    </div>
@endsection
