<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class QRCodeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function upload(Request $request)
    {
        // Validate the uploaded image
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the uploaded image
        $imagePath = $request->file('photo')->store('photos', 'public');
        $imageUrl = asset('storage/' . $imagePath);

        // Generate the QR code with the image URL
        $qrCode = new QrCode($imageUrl);
        $writer = new PngWriter();
        
        // Instead of writeFile(), we use writeString() to get the image as a string
        $qrCodeData = $writer->write($qrCode);

        // Save the QR code image to a file
        $qrCodePath = 'qrcodes/' . time() . '.png';
        file_put_contents(public_path($qrCodePath), $qrCodeData->getString());

        // Return the view with the uploaded image and generated QR code
        return view('upload', compact('imageUrl', 'qrCodePath'));
    }
}
