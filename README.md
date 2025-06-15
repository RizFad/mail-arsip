## Deskripsi :

<p>| Sistem Arsip Surat |</p>

sistem arsip surat sederhana dibuat untuk manajemen arsip surat masuk dan surat keluar pada perusahaan atau instansi.

## Demo Akun Project :

<h4>Administrator</h4>
<p>Email : admin@gmail.com</p>
<p>Password : admin123</p>

<h4>Leader</h4>
<p>Email : leader@gmail.com</p>
<p>Password : leader123</p>

<h4>Staff</h4>
<p>Email : staff@gmail.com</p>
<p>Password : staff123</p>

## Cara Install

1. **Clone Repository**

```bash
git clone https://github.com/RizFad/mail-arsip.git
cd mail-arsip
composer install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi Aplikasi**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan Aplikasi**

```bash
php artisan serve
```