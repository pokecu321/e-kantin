# e-kantin 
adalah website milik smkn 1 boyolangu


untuk memulai
pastikan sudah mempunyai docker
jalankan

docker-compose up -d --build

penjelasan docker(ai)
syntax
1. Menjalankan & Membangun

    docker-compose up -d : Membangun dan menjalankan semua layanan (PHP & DB). Wajib dipakai saat pertama kali mulai.
    docker-compose up -d --build : Sama seperti di atas, tapi memaksa Docker menginstal ulang "jeroan" server (pakai ini jika kamu mengubah isi Dockerfile).

2. Mengontrol (Sehari-hari)

    docker-compose stop : Mematikan mesin sementara. RAM laptop jadi lega, tapi kontainer dan data tetap aman (Tutup Toko).
    docker-compose start : Menyalakan kembali mesin yang sudah di-stop. Sangat cepat (Buka Toko).
    docker-compose restart: Mematikan lalu menyalakan ulang secara otomatis.

3. Membersihkan
    docker-compose down : Menghapus semua kontainer dan jaringan proyek. Hati-hati: Data database hilang jika kamu tidak pakai fitur volumes.
    docker-compose down -v: Menghapus semuanya, TERMASUK data di dalam volume (Bersih total sampai akar).

4. Memantau

    docker-compose ps : Melihat daftar layanan yang sedang berjalan atau mati.
    docker-compose logs -f : Melihat catatan (log) error yang terjadi di server secara real-time.

Rekomendasi: Untuk ngoding sehari-hari, cukup gunakan stop dan start agar laptop tidak berat dan data aman.
======================================
| jangan jalanin docker-compose down |
======================================


jangan lupa untuk extension devcontainer



kalau php tidak jalan,jalanin 
apache2-foreground
ctrl + c untuk membuat php/apache berhenti



