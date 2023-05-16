<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>How to Generate QR Code in Laravel 9</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container mt-4">

        {{-- <div class="card">
            <div class="card-header">
                <h2>Simple1 QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9') !!}
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Color QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9') !!}
            </div>
        </div> --}}

        {{-- // QrCode::email($to, $subject, $body); --}}
        {{ QrCode::email('faisalqasim876@gmail.com', 'faisalqasim876@gmail.com', 'faisalqasim876@gmail.com') }}
        <br>
        <br>
        <br>

        {{-- //Fills in the to address --}}
        {{ QrCode::email('faisalqasim876@gmail.com') }}
        <br>
        <br>
        <br>

        {{-- //Fills in the to address, subject, and body of an e-mail. --}}
        {{ QrCode::email('faisalqasim876@gmail.com', 'This is the subject.', 'This is the message body.') }}
        <br>
        <br>
        <br>
        {{-- //Fills in just the subject and body of an e-mail. --}}
        {{ QrCode::email(null, 'This is the subject.', 'This is the message body.') }}

        
{{-- <div class="visible-print text-center">
    <h1>\ - QR Code Generator Example</h1>
     
    {!! QrCode::size(250)->generate('FaisalDev'); !!}
     
    <p>example by FaisalDev.</p>
</div> --}}

        {{-- Helpers For Generate Different QR Codes
BitCoin
This helper generates a scannable bitcoin to send payments.

QrCode::BTC($address, $amount);

//Sends a 0.334BTC payment to the address
QrCode::BTC('bitcoin address', 0.334);

//Sends a 0.334BTC payment to the address with some optional arguments
QrCode::size(500)->BTC('address', 0.0034, [
    'label' => 'my label',
    'message' => 'my message',
    'returnAddress' => 'https://www.returnaddress.com'
]);
E-Mail
This helper generates an e-mail QRcode that is able to fill in the e-mail address, subject, and body:

QrCode::email($to, $subject, $body);

//Fills in the to address
QrCode::email('foo@bar.com');

//Fills in the to address, subject, and body of an e-mail.
QrCode::email('foo@bar.com', 'This is the subject.', 'This is the message body.');

//Fills in just the subject and body of an e-mail.
QrCode::email(null, 'This is the subject.', 'This is the message body.');
Geo
This helper generates latitude and longitude that a phone can read and opens the location in Google Maps or a similar app.

QrCode::geo($latitude, $longitude);

QrCode::geo(37.822214, -122.481769);
Phone Number
This helper generates a QR code that can be scanned and then dials a number.

QrCode::phoneNumber($phoneNumber);

QrCode::phoneNumber('555-555-5555');
QrCode::phoneNumber('1-800-Laravel');
SMS (Text Messages)
This helper makes SMS messages that can be prefilled with the send-to address and body of the message:

QrCode::SMS($phoneNumber, $message);

//Creates a text message with the number filled in.
QrCode::SMS('555-555-5555');

//Creates a text message with the number and message filled in.
QrCode::SMS('555-555-5555', 'Body of the message');
WiFi
This helper makes scannable QR codes that can connect a phone to a WiFi network:

QrCode::wiFi([
    'encryption' => 'WPA/WEP',
    'ssid' => 'SSID of the network',
    'password' => 'Password of the network',
    'hidden' => 'Whether the network is a hidden SSID or not.'
]);

//Connects to an open WiFi network.
QrCode::wiFi([
    'ssid' => 'Network Name',
]);

//Connects to an open, hidden WiFi network.
QrCode::wiFi([
    'ssid' => 'Network Name',
    'hidden' => 'true'
]);

//Connects to a secured WiFi network.
QrCode::wiFi([
    'ssid' => 'Network Name',
    'encryption' => 'WPA',
    'password' => 'myPassword'
]);
 --}}

    </div>
</body>

</html>
