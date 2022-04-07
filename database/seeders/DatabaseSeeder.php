<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
        ]);

        Post::create([
            'judul' => 'RESOLUSI JIHAD, HARI SANTRI BERDEDIKASI UNTUK NEGERI',
            'isi' => '<p>Setiap tanggal 22 Oktober diperingati hari santri nasional, di tahun 2021 ini berbeda dengan tahun-tahun sebelumnya dikarenakan pendemi Covid-19 yang setiap waktu semakin tinggi angka penyebarannya. Tetapi, melalui protokol kesehatan yang ketat dengan tetap memakai masker baik peserta maupun petugas upacara, hal ini tidak mengurangi semangat para santri melaksanakan upacara dengan tertib dan khidmat. Pondok Pesantren Amanatul Ummah tetap melaksanakan upacara dengan serangkaian kegiatan lainnya untuk memperingati Hari Santri Nasional 2021 ini. </p>
            <p>Upacara Hari Santri Nasional ini diadakan pada hari Jumat tanggal 22 Oktober 2021 di lapangan KH. Abdullah Pondok Pesantren Amanatul Ummah Pacet Mojokerto. Upacara ini diikuti oleh seluruh santri dan Staff Dewan Guru dari berbagai lembaga PP. Amanatul Ummah Pacet yakni; IKHAC, MAI, MBI, SMABP, MTS, SMPBP, dan HIKMATUL AMANAH. Upacara dimulai pukul 09.00 dan dipimpin langsung oleh pengasuh kita Prof. Dr. K.H. Asep Saifuddin Chalim, M.A. </p>

            <p>Upacara Hari Santri Nasional ini dirayakan dengan sangat meriah. Tidak seperti upacara pada umumnya. Petugas upacara kali ini berkolaborasi dengan berbagai lembaga diantaranya; MAI, SMABP, SMPBP, dan MTS. Khususnya, pasukan pengibar bendera, penampilan variasi formasi, dan paduan suara dari lembaga MAI dan SMABP. Menariknya lagi, upacara ini diiringi oleh MAXC Chord Drumband dari lembaga MAI Amanatul Ummah. </p>

            <p>Pada saat menyanyikan lagu mars NU “Yalal Wathon” terdapat penurunan banner yang bergambar Romo Kyai Asep beserta Koordinatornya yang mana itu adalah hasil kreativitas santri MAI dan SMABP. Setelah upacara berlangsung, terdapat penampilan ekstrakurikuler dari beberapa lembaga antara lain yaitu Drumband dengan iringan lagu Mars NU dari lembaga MAI, Tarian Kreasi dari lembaga SMABP, Tarian Kreasi dari lembaga MAI, dan yang terakhir adalah penampilan variasi formasi paskibra SMPBP. Sebagai santri Indonesia kita harus bangga dengan predikat santri yang melekat pada diri kita karena tidak semua orang dapat menjadi santri.</p>
            <p>“ Derita Kami Untuk Negeri, Doa kami tetap abadi.”

            </p>',
            'kategori' => 'Santri',
            'tag' => 'MAI',
            'author_id' => 1,
            'slug' => 'Setiap-tanggal-22-Oktober',
            'foto' =>'foto_post/yai.jpg'
        ]);

    }
}
