<?php
use SimpleSoftwareIO\QrCode\Facades\QrCode;

function qrcode($format = "png", $id)
{
    $user = \App\Models\Register::where('id', $id)->first();

    $qrCode = QrCode::size(100)->generate(
        'First Name: ' . $user->first_name . "\n" .
        'Last Name: ' . $user->last_name . "\n" .
        'Phone: ' . $user->phone_number . "\n" .
        'Gender: ' . $user->gender . "\n".
        'Date of entry: ' . $user->created_at->format('d-m-Y') . "\n"
    );

    if ($format == 'pdf') {
        $output = '<img src="data:image/png;base64,' . base64_encode($qrCode) . '">';
    } else {
        $output = $qrCode;
    }

    return $output;
}
