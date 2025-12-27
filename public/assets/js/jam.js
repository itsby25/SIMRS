// Fungsi untuk memperbarui jam
function updateJam() {
    // 1. Buat objek Date baru untuk mendapatkan waktu saat ini
    const sekarang = new Date();

    // 2. Ambil jam, menit, dan detik
    let jam = sekarang.getHours();
    let menit = sekarang.getMinutes();
    let detik = sekarang.getSeconds();

    // 3. Tambahkan '0' di depan jika angka < 10 (untuk format 01, 02, dst.)
    jam = jam < 10 ? "0" + jam : jam;
    menit = menit < 10 ? "0" + menit : menit;
    detik = detik < 10 ? "0" + detik : detik;

    // 4. Gabungkan menjadi format waktu (HH:MM:SS)
    const waktuString = `${jam}:${menit}:${detik}`;

    // 5. Tampilkan waktu ke elemen HTML dengan ID 'jamDigital'
    document.getElementById("jamDigital").innerHTML = waktuString;
}

// Panggil fungsi updateJam() segera setelah halaman dimuat
updateJam();

// Panggil fungsi updateJam() setiap 1000 milidetik (1 detik)
setInterval(updateJam, 1000);
