@extends('layouts.template2')
@section('content')
<style>
    body {
        background-image: url("{{ asset('images/t.jpg') }}");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        color: #fff; /* Text color */
    }

    .btn-bottom {
        position: absolute;
        bottom: 20px; /* Adjust this value to your preferred distance from the bottom */
        left: 53%;
        transform: translateX(-50%);
        padding: 10px 20px;
        background-color: #28a745; /* Button background color (btn-success) */
        color: #fff; /* Text color */
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease-in-out;
    }

    .btn-bottom:hover {
        background-color: #218838; /* Hover state background color */
    }

    /* Flex container */
    .flex-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        text-align: center;
        border: 2px solid #ccc; /* Border */
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.8); /* Decreased transparency in the box shadow */
        padding: 20px; /* Add padding */
        background-color: rgba(66,87 ,104 , 0.3);
    }

    /* Style headings */
    h1, h2, h3 {
        color: #fff; /* Text color */
    }

    /* Style paragraphs */
    p {
        margin: 0 0 20px 0;
    }

    /* Style lists */
    ul, ol {
        text-align: left;
        margin-left: 20px;
    }

    /* Style list items */
    li {
        margin-bottom: 5px;
    }
    #service{
        position: relative;
        right:70px;
    }
    #contact{
        position: relative;
        right:35px;
    }
</style>
<div class="flex-container">
    <h1>Welcome to John's Bike Service</h1>

    <p>At John's Bike Service, we are dedicated to providing top-notch bicycle maintenance and repair services to keep
        your ride in pristine condition. With a team of skilled technicians and a passion for cycling, we strive to ensure
        that every bike that leaves our shop is in the best possible shape. Whether you're a casual rider or a dedicated
        cyclist, we've got you covered.</p>

    <h1 id="service">Our Services</h1>

    <ol>
        <li>
            <h3>Basic Tune-Up</h3>
            <ul>
                <li>Adjusting gears and brakes</li>
                <li>Lubricating drivetrain</li>
                <li>Safety inspection</li>
            </ul>
        </li>
        <li>
            <h3>Comprehensive Overhaul</h3>
            <ul>
                <li>Complete disassembly and cleaning</li>
                <li>Bearing inspection and replacement</li>
                <li>Drive system optimization</li>
                <li>Wheel truing</li>
            </ul>
        </li>
        <!-- Add the rest of the services as needed -->
    </ol>

    <h2>Why Choose John's Bike Service?</h2>

    <ul>
        <li>Expertise: Our technicians are experienced cyclists with a deep understanding of various bike makes and models.</li>
        <li>Quality Assurance: We use only high-quality parts and follow industry best practices to ensure your bike performs at its best.</li>
        <li>Personalized Service: We take the time to understand your specific needs and customize our services accordingly.</li>
        <li>Timely Turnaround: We understand the importance of getting back on your bike quickly, and we work efficiently to minimize downtime.</li>
        <li>Competitive Pricing: We offer transparent pricing and strive to provide the best value for your investment.</li>
        <li>Community-Focused: We're not just a service shop; we're a part of the local cycling community, and we're here to support riders of all levels.</li>
    </ul>
    <h2><a href="{{route('contact')}}" id="contact">Contact Us</a></h2>

    

    <a href="{{ route('service.create') }}" class="btn btn-bottom">Book Now</a>
</div>
@endsection
