<!DOCTYPE html>
<html>
<head>
    <style>
        /* CSS styles go here */
        .email-container {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .email-content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-content">
            <h1>Hello,</h1>
            <p>New Service has been booked.</p>
            <h2>Details :</h2>
            <p>
               <strong>Vehicle Name :</strong> {{$service->vehicle_name}}                
            </p>
            <p>
            <strong>Customer Name :</strong> {{$service->user->name}} 
            </p>
            <p>
            <strong>Servicer Type :</strong> {{$service->service_type}} 
            </p>
             <p>Thanks,<br>{{ config('app.name') }}</p>

        </div>
    </div>
</body>
</html>
