<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## SIAKAD - Lara

Website SISTEM Informasi Akademik berbasis **LARAVEL 9** sebelumnya saya sudah buat juga yang versi nodejs + react, cuma belum lengkap, silahkan kalian lihat juga jika ingin belajar, fitur sama saja nantinya yang hanya berbeda dalam penggunaan teknologi bahasa yang saya gunakan, yang dibuat sedemikian rupa, untuk saya belajar, dan ini semua open source, bisa kalian kembangkan kembali, fitur sementara yang sudah saya kerjakan, yaitu:

- Job Search ( Scraping website Glints ).
- Zoom Meeting.
- Authentication ( Register, Login, Verify Email, Forgot Password )

SIAKAD masih dalam **tahap pengembangan**, karena ini basicnya untuk saya mempelajari hal baru, update terbaru, baik itu php framework dan js framework.

## Instalasi

Untuk dapat kalian gunakan SIAKAD - LARA ini silahkan kalian ketikan perintah dibawah ini.
```sh
$ composer install
```
```sh
$ composer update
```

## Setting Enviroment

Berikut kalian setting terlebih dahulu, seperti yang saya sudah jelaskan diatas, bahwa fitur di SIAKAD ini ada Zoom Meeting dan Authentication menggunakan verify email dimana dibutuhkan sebuah **SMTP** untuk dapat mengirim sebuah email, beserta membuat zoom meeting maka ikuti langkah nya.

- Untuk SMTP belajar kalian silahkan gunakan [mailtrap](https://mailtrap.io/) agar mempunyai API KEY 
- Untuk mendapatkan akses API KEY Zoom, silahkan kalian registrasi / login zoom, lalu kebagian menu **Advance** - **App Marketplace** - **Build JWT** kemudian akan muncul API KEY beserta SECRET KEY dan untuk Library saya menggunakan [MacsiDigital](https://github.com/MacsiDigital/laravel-zoom) silahkan baca karena dokumentasinya yang cukup lengkap.

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=YOUR_USERNAME
MAIL_PASSWORD=YOUR_PASSWORD
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="no-reply@youremail.sch.id"
MAIL_FROM_NAME="${APP_NAME}"
```

Kemudian kalian letakkan dan buat env api key untuk zoom, letakkan paling bawah agar tidak bingung
```env
ZOOM_CLIENT_KEY="YOUR_API_KEY"
ZOOM_CLIENT_SECRET="YOUR_SECRET_KEY"
```

### Migration

Setelah kalian selesai semua setting, silahkan kalian migration menggunakan perintah dibawah ini di terminal kalian.

```sh
$ php artisan migrate
```

### Running

Kemudian kalian jalankan perintah dibawah ini untuk menjalankan program di local project kalian.
```sh
$ npm run dev
```

Tambah terminal lagi untuk menjalankan artisan serve
```sh
$ php artisan serve
```

Silahkan kalian akses url projectnya sesuai local kalian, kemudian registrasi user baru dan jangan lupa verif email terlebih dahulu, email nanti dikirim ke mailtrap sesuai arahan saya sebelumnya, jika kalian nantinya ingin gunakan di online, silahkan gunakan smtp dari penyedia hosting.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
