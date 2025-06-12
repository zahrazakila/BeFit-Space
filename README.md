# 🏋️‍♀️ Be-Fit Space – Sistem Manajemen Gym Modern

<p align="center">
  <img src="https://raw.githubusercontent.com/zahrazakila/BeFit-Space/main/public/img/logo.png" width="150" alt="Be-Fit Space Logo">
</p>

<p align="center">
  <strong>Platform web modern untuk mengelola operasional gym, membership, dan interaksi digital dengan member.</strong>
</p>

<hr>

## 🔍 Tentang Proyek

**Be-Fit Space** adalah aplikasi web berbasis **Laravel 11** yang dikembangkan untuk mendigitalisasi manajemen gym. Menggunakan **Tailwind CSS** dan **Alpine.js**, aplikasi ini menghadirkan antarmuka yang dinamis, responsif, dan ramah pengguna.

Proyek ini terbagi menjadi dua bagian utama:
- **Halaman publik**: untuk promosi dan informasi gym.
- **Dashboard pengguna dan admin**: untuk manajemen data dan interaksi digital.

---

## 🚀 Fitur Unggulan

### 🔓 Untuk Pengguna
- **Landing Page & Informasi Umum**  
  Tampilan modern yang menyajikan informasi gym, layanan, dan kontak.
  
- **Pendaftaran & Pembelian Paket Membership**  
  Alur pendaftaran lengkap yang terintegrasi dengan sistem pembayaran.

- **Integrasi Midtrans (Sandbox)**  
  Mendukung berbagai metode pembayaran secara online dan real-time.

- **Dashboard Member**  
  Member bisa memantau status membership, histori pembayaran, dan masa berlaku.

- **QR Code Akses Masuk**  
  Otomatisasi akses masuk gym dengan QR code unik yang bisa diunduh dan dibagikan.

### 🛠️ Untuk Admin
- **Dashboard Statistik**  
  Menampilkan data seperti pendapatan, jumlah member aktif, dan statistik pendaftar baru.

- **Manajemen Membership**  
  Melihat dan mengelola data seluruh member terdaftar.

- **Manajemen Paket**  
  CRUD untuk paket-paket langganan gym.

- **Manajemen Lead Free Trial**  
  Melihat dan menindaklanjuti form pendaftar free trial.

---

## 🧰 Teknologi yang Digunakan

- **Backend**: Laravel 11, PHP 8.2+
- **Frontend**: Tailwind CSS, Alpine.js
- **Database**: MySQL
- **Asset Bundler**: Vite
- **Payment Gateway**: Midtrans (Sandbox)
- **QR Code**: NPM package `qrcode`

---

## 🛠️ Panduan Instalasi (Localhost)

### 📋 Prasyarat
- PHP 8.2+
- Composer
- Node.js & NPM
- MySQL
- Git & Ngrok

### 1. Clone Repository
```bash
git clone https://github.com/zahrazakila/BeFit-Space.git
cd BeFit-Space
````

### 2. Install Dependensi

```bash
composer install
npm install
```

### 3. Setup File Environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Dapatkan API Key Midtrans

1. Daftar di [Midtrans Sandbox](https://dashboard.sandbox.midtrans.com/register)
2. Buka **Settings > Access Keys**
3. Tambahkan ke `.env`:

```env
MIDTRANS_MERCHANT_ID=...
MIDTRANS_CLIENT_KEY=...
MIDTRANS_SERVER_KEY=...
MIDTRANS_IS_PRODUCTION=false
MIDTRANS_IS_SANITIZED=true
MIDTRANS_IS_3DS=true
```

### 5. Konfigurasi Database

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=befit_space
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Jalankan Migrasi & Seeder

```bash
php artisan migrate --seed
```

### 7. Jalankan Server & Ngrok

**Terminal 1**:

```bash
php artisan serve
```

**Terminal 2**:

```bash
ngrok http 8000
```

Salin URL HTTPS dari Ngrok.

### 8. Konfigurasi Webhook Midtrans

1. Masuk ke Dashboard Midtrans.
2. Buka **Settings > Configuration**
3. Isi **Payment Notification URL**:

```
https://xxxxxx.ngrok-free.app/api/midtrans/notification
```

4. Klik **Save**.

### 9. Jalankan Vite

**Terminal 3**:

```bash
npm run dev
```

---

## 🔐 Akun Admin Default

| Email                                       | Password |
| ------------------------------------------- | -------- |
| [admin@befit.test](mailto:admin@befit.test) | password/password123 |

---

## 📄 Lisensi

Proyek ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).

---
