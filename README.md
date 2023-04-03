<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Metode Pengembangan

Pada pengembangan ini menggunakan Sercices Repository Pattern :

Repository pattern adalah sebuah desain arsitektur pada aplikasi yang memisahkan kode yang berhubungan dengan basis data dan bisnis logic menjadi beberapa kelas atau interface yang terpisah. Repository pattern biasanya digunakan pada aplikasi yang kompleks atau besar dan memerlukan pengelolaan data yang lebih baik.

Dalam konteks Laravel, Repository pattern biasanya digunakan untuk memisahkan kode yang berhubungan dengan basis data dan bisnis logic pada Model. Repository pattern ini digunakan untuk mengakses data dari basis data dan melakukan operasi CRUD (Create, Read, Update, Delete) pada data tersebut.

Services, pada dasarnya, adalah kelas atau interface yang berisi bisnis logic atau algoritma yang lebih kompleks. Services biasanya digunakan untuk mengelola logika bisnis pada aplikasi seperti pembuatan, pembaharuan, atau penghapusan data.

Ketika menggabungkan Repository pattern dan Services pada Laravel, Repository pattern dapat digunakan untuk mengakses data dari basis data dan Services dapat digunakan untuk mengelola bisnis logic pada aplikasi. Dalam hal ini, Repository pattern bertanggung jawab untuk mengambil data dari basis data dan Services bertanggung jawab untuk melakukan operasi bisnis pada data tersebut.

Penggunaan Repository pattern dan Services pada Laravel memiliki keuntungan dalam memisahkan kode bisnis logic dan kode yang berhubungan dengan basis data, sehingga membuat kode menjadi lebih terorganisir dan mudah untuk dipelihara dan ditingkatkan. Selain itu, penggunaan Repository pattern dan Services juga mempermudah pengujian (testing) pada kode aplikasi karena dapat memisahkan antara pengujian pada kode bisnis logic dan pengujian pada kode yang berhubungan dengan basis data.


Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
