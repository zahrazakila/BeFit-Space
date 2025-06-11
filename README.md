# 🏋️‍♀️ Befit Space – Web Aplikasi Gym & Kebugaran

**Befit Space** adalah platform web berbasis Laravel yang dirancang untuk memudahkan pengelolaan aktivitas gym dan kebugaran secara digital. Aplikasi ini membantu pengguna untuk melihat jadwal kelas, mendaftar sesi latihan, memantau progres kebugaran, dan terhubung dengan instruktur secara efisien.

## 🚀 Fitur Utama

* 🔒 **Autentikasi Pengguna:** Registrasi, login, dan manajemen akun yang aman.
* 📅 **Paket Latihan:** Lihat berbagai macam paket jenis latihan.
* 💳 **Paket Membership:** Sistem pembelian paket keanggotaan gym.
* 📨 **Notifikasi & Reminder:** Pengingat otomatis untuk tagihan yang akan datang.
* 🧘 **Dashboard Admin:** Kelola pengguna, instruktur, kelas, dan transaksi dengan mudah.

## 🛠️ Teknologi yang Digunakan

* **Backend:** Laravel 11
* **Frontend:** Blade + TailwindCSS 
* **Database:** SQLite
* **Authentication:** Laravel Jetstream
* **Deployment:** Coming Soon

## 🧑‍💻 Instalasi Lokal

Langkah-langkah untuk menjalankan proyek ini secara lokal:

```bash
# 1. Clone repositori
git clone https://github.com/username/befit-space.git
cd befit-space

# 2. Install dependencies
composer install
npm install && npm run dev

# 3. Copy file env dan generate key
cp .env.example .env
php artisan key:generate

# 4. Setup database
php artisan migrate --seed

# 5. Jalankan server lokal
php artisan serve
```

## 🗂️ Struktur Folder Penting

```
app/
├── Models/           # Model database
├── Http/
│   ├── Controllers/  # Logika kontroler
│   └── Middleware/   # Middleware custom
resources/views/      # Halaman blade (UI)
routes/web.php        # Routing aplikasi
```

## ✅ Roadmap Pengembangan

* [x] Sistem registrasi & login
* [x] Fitur jadwal kelas
* [x] Dashboard admin & user
* [x] Integrasi pembayaran online
* [x] Mobile responsive view
