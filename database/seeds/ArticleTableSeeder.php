<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'Taman Nasional Baluran',
            'content' => 'Taman Nasional Baluran merupakan wisata alam di Situbondo yang mendapat julukan Africa van Java. Karena wisata alam tersebut memiliki padang savana yang luas. Nama dari Taman Nasional ini diambil dari nama gunung yang berada di daerah ini, yaitu Gunung Baluran. Taman nasional ini terdiri dari tipe vegetasi sabana, hutan mangrove, hutan musim, hutan pantai, hutan pegunungan bawah, hutan rawa dan hutan yang selalu hijau sepanjang tahun. Tipe vegetasi sabana mendominasi kawasan Taman Nasional Baluran yakni sekitar 40 persen dari total luas lahan.',
           'featured_image' => '/img/baluran.jpeg',
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

        DB::table('articles')->insert([
            'title' => 'Pantai Pasir Putih',
            'content' => 'Menyusuri Pantai Pasir Putih Situbondo membuat hati menjadi teduh. Pasirnya yang putih, airnya yang jernih dan gelombang ombak yang tidak terlalu besar membuat pantai ini menjadi sangat menyenangkan saat dikunjungi. Berbeda dengan pantai di laut selatan yang cenderung memiliki ombak besar, maka ombak di Pantai Pasir Putih ini lebih tenang, dan bahkan nyaris tidak berombak. Kondisi tersebut membuat pengunjung dapat menemukan berbagai petualangan bawah laut mengasyikkan di pantai tersebut. Pantai Pasir Putih sendiri memiliki topografi yang unik, dengan bentuknya yang melengkung ke arah laut. Dengan bentuknya yang melengkung serta hutan kehijauan di tepian, pantai ini menyuguhkan sebuah lanskap indah. Barisan pepohonan cemara udang, kelapa, serta deretan pepohonan jati memberikan udara sejuk dan menghadirkan ketenangan di kawasan pantai tersebut. Pada bagian hutan di pantai ini, pengunjung juga dapat melihat sejumlah satwa berkeliaran di pepohonan. Salah satunya adalah kera hitam, satwa yang kerap kali berebutan makanan di jalan masuk Pantai Pasir Putih. Suara kicauan burung juga terdengar sepanjang hari. Keberadaan hutan ini adalah salah satu pesona unik yang dimiliki Pantai Pasir Putih tersebut.',
           'featured_image' => '/img/pasirputih.jpg',
            
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

         DB::table('articles')->insert([
            'title' => 'Kampung Kerapu Situbondo',
            'content' => 'Wisata Jawa Timur selain pantai dan gunung, masih banyak yang lainnya. Dari beberapa museum, hingga penangkaran ikan seperti di Kampung Kerapu Situbondo. Yang tadinya penangkaran ikan tampak biasa saja, sekarang dilengkapi dermaga mini, untuk perahu pengunjung yang berlabuh. Dengan membangun dermaga yang berbeda, Keramba Ikan Kerapu Gundil Situbondo dapat Kamu jadikan alternatif pilihan ketika berwisata di Jawa Timur.',
           'featured_image' => '/img/kerapu.jpg',
            
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

           DB::table('articles')->insert([
            'title' => 'Pantai Pathek',
            'content' => 'Pantai Pathek terletak di Desa Gelung, Kecamatan Panarukan, Situbondo, Jawa Timur. Karenanya, pantai nelayan ini juga dikenal dengan nama Pantai Gelung. Lokasi geografisnya yang berada di jalur pantura, membuat Pantai Pathek kerap disinggahi para pengendara untuk sekadar beristirahat sambil melihat suasana pantai yang teduh. Sayangnya, Pantai Pathek tidak mendukung untuk kegiatan snorkeling, mengingat air di bibir pantainya yang keruh. Meski demikian, pantai ini menjadi spot favorit bagi para pemancing tradisional untuk melempar pancing. Dengan teknik merendam setengah badan di pantai, para pemancing tradisional banyak terlihat di siang hari. Menurut pengakuan salah seorang pemancing, hasil tangkapan ikan yang mereka dapat biasanya digunakan untuk konsumsi pribadi.',
            'featured_image' => '/img/pathek.jpg',
            
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);

            DB::table('articles')->insert([
            'title' => 'Kampung Blekok',
            'content' => 'Kampung Blekok adalah salah satu kawasan wisata alam berbasis konservasi yang ada di Dusun Pesisir, Desa Klatakan, Kecamatan Kendit, Kabupaten Situbondo. Kawasan tersebut, sejak tahun 2017, melalui Peraturan Bupati Situbondo tentang Konservasi Keanekaragaman Hayati, telah ditetapkan sebagai kawasan bakau yang dihuni oleh burung air jenis ardidae yang disebut burung blekok oleh masyarakat sekitar. Saat yang tepat untuk berkunjung ke Kampung Blekok adalah pukul 05.00 pagi, saat burung-burung pergi mencari makan. Juga pukul 17.00 sore saat burung-buurung pulang ke sangkar yang berada di hutan mangrove tersebut. Melalui jembatan kayu dan menara pandang, pengunjung bisa menyaksikan burung yang didominasi warna putih terbang dan hinggap di hutan mangrove di sepanjang pantai.',
           'featured_image' => '/img/blekok.png',
            
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
