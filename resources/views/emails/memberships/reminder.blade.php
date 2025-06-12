<x-mail::message>
    # Pengingat Membership Akan Segera Berakhir

    Halo **{{ $userName }}**,

    Semoga hari Anda menyenangkan!

    Kami ingin memberitahukan bahwa membership **{{ $packageName }}** Anda di BeFit Space akan segera berakhir.
    Detail membership Anda:
    - Tanggal Berakhir: **{{ $endDate }}**
    - Sisa Hari: **{{ $remainingDays }} hari lagi**

    Jangan biarkan semangat kebugaran Anda terputus! Anda bisa memperpanjang membership Anda untuk terus menikmati semua
    fasilitas dan kelas yang kami tawarkan.

    <x-mail::button :url="$renewalLink" color="success">
        Perpanjang Membership Sekarang
    </x-mail::button>

    Jika Anda memiliki pertanyaan atau membutuhkan bantuan terkait perpanjangan membership, jangan ragu untuk
    menghubungi tim support kami.

    Terima kasih telah menjadi bagian dari komunitas BeFit Space!

    Salam Sehat,
    Tim {{ config('app.name') }}
</x-mail::message>
