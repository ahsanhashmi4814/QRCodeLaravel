Run commands  step by step

1-  composer create-project --prefer-dist laravel/laravel qr-code-project
2-  composer require endroid/qr-code
3-  composer require intervention/image
4-  php artisan storage:link
5-  php artisan serve

Visit http://localhost:8000 in your browser. You should see the upload form.

Upload an image, and after submitting, you’ll see the uploaded image and the generated QR code.

