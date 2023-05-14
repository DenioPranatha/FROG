<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CartDetail;
use App\Models\CartHeader;
use App\Models\Category;
use App\Models\Destination;
use App\Models\Event;
use App\Models\PaymentDetail;
use App\Models\PaymentHeader;
use App\Models\Product;
use App\Models\ProductCategory;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    // CART DETAIL
        // <!-- 1 -->
        CartDetail::create([
            'cart_header_id' => 1,
            'product_id' => 1,
            'qty' => 10
        ]);

        // <!-- 2 -->
        CartDetail::create([
            'cart_header_id' => 1,
            'product_id' => 2,
            'qty' => 20
        ]);

        // <!-- 3 -->
        CartDetail::create([
            'cart_header_id' => 1,
            'product_id' => 5,
            'qty' => 35
        ]);

        // <!-- 4 -->
        CartDetail::create([
            'cart_header_id' => 1,
            'product_id' => 7,
            'qty' => 1
        ]);


        // <!-- 5 -->
        CartDetail::create([
            'cart_header_id' => 2,
            'product_id' => 1,
            'qty' => 18
        ]);


        // <!-- 6 -->
        CartDetail::create([
            'cart_header_id' => 2,
            'product_id' => 5,
            'qty' => 20
        ]);

        // <!-- 7 -->
        CartDetail::create([
            'cart_header_id' => 2,
            'product_id' => 10,
            'qty' => 30
        ]);

        // <!-- 8 -->
        CartDetail::create([
            'cart_header_id' => 3,
            'product_id' => 4,
            'qty' => 50
        ]);

        // <!-- 9 -->
        CartDetail::create([
            'cart_header_id' => 3,
            'product_id' => 6,
            'qty' => 20
        ]);

        // <!-- 10 -->
        CartDetail::create([
            'cart_header_id' => 3,
            'product_id' => 7,
            'qty' => 10
        ]);

        // <!-- 11 -->
        CartDetail::create([
            'cart_header_id' => 4,
            'product_id' => 1,
            'qty' => 12
        ]);

        // <!-- 12 -->
        CartDetail::create([
            'cart_header_id' => 4,
            'product_id' => 3,
            'qty' => 18
        ]);

        // <!-- 13 -->
        CartDetail::create([
            'cart_header_id' => 5,
            'product_id' => 2,
            'qty' => 22
        ]);

        // <!-- 14 -->
        CartDetail::create([
            'cart_header_id' => 5,
            'product_id' => 4,
            'qty' => 30
        ]);

        // <!-- 15 -->
        CartDetail::create([
            'cart_header_id' => 5,
            'product_id' => 5,
            'qty' => 20
        ]);

        // <!-- 16 -->
        CartDetail::create([
            'cart_header_id' => 6,
            'product_id' => 4,
            'qty' => 30
        ]);

        // <!-- 17 -->
        CartDetail::create([
            'cart_header_id' => 7,
            'product_id' => 5,
            'qty' => 20
        ]);

        // <!-- 18 -->
        CartDetail::create([
            'cart_header_id' => 7,
            'product_id' => 6,
            'qty' => 20
        ]);
    // CART DETAIL

    // CART HEADER
        // <!-- 1 -->
        CartHeader::create([
            'user_id' => 1
        ]);

        // <!-- 2 -->
        CartHeader::create([
            'user_id' => 1
        ]);

        // <!-- 3 -->
        CartHeader::create([
            'user_id' => 2
        ]);

        // <!-- 4 -->
        CartHeader::create([
            'user_id' => 3
        ]);

        // <!-- 5 -->
        CartHeader::create([
            'user_id' => 4
        ]);

        // <!-- 6 -->
        CartHeader::create([
            'user_id' => 4
        ]);

        // <!-- 7 -->
        CartHeader::create([
            'user_id' => 4
        ]);
    // CART HEADER

    // CATEGORY
        // <!-- 1 -->
        Category::create([
            'name' => 'Bencana Alam'
        ]);

        // <!-- 2 -->
        Category::create([
            'name' => 'Panti Asuhan'
        ]);

        // <!-- 3 -->
        Category::create([
            'name' => 'Panti Jompo'
        ]);

        // <!-- 4 -->
        Category::create([
            'name' => 'Fasilitas Umum'
        ]);

        // <!-- 5 -->
        Category::create([
            'name' => 'Bantuan Kesehatan'
        ]);
    // CATEGORY

    // DESTINATION
        // <!-- 1  -->
        Destination::create([
            'category_id' => 2,
            'name' => 'Panti Asuhan Taman Sukacita',
            'description' => 'Berawal dari keprihatinan melihat banyaknya anak yang di pedalaman Aceh Selatan tidak bernasib baik diakibatkan factor Ekonomi, Broken Home dan sulitnya akses menuju ke sekolah sehingga menyebabkan anak terpaksa putus sekolah dan tidak menempuh pendidikan sama seperti anak-anak pada umumnya, di beberapa tempat yakni Pedalaman Aceh Selatan, Aceh Singkil, Pulau Nias. Itulah yang mendorong Pendiri yayasan ini yaitu Bapak Carles Paatulo Giawa untuk mendirikan lembaga pengasuhan sebagai Wadah pertolongan kepada generasi bangsa untuk menjembatani anak-anak asuh dan di sekolahkan di kota Medan. Saat ini terdapat 25 anak yatim/broken home yang sangat membutuhkan uluran tangan kasih dari saudara semua untuk kehidupan sehari-hari dan untuk pendidikan.',
            'image' => 'destination-1.jpg',
            'location' => 'Medan, Sumatera Utara',
            'link' => 'https://www.google.com/maps/search/Jl.+Jangka+No.+23+Kel.+Sei+Putih+Barat+Kec.+Medan+Petisah,+Kota+Madya+Medan/@3.5960844,98.6499605,15z/data=!3m1!4b1',
            'person_count' => 100,
            'contact' => '082246774919'
        ]);


        // <!-- 2 -->
        Destination::create([
            'category_id' => 2,
            'name' => 'Panti Asuhan Mizan Amanah',
            'description' => 'Panti asuhan Mizan Amanah Asrama Yatim Dan Dhuafa Panduraya merupakan panti asuhan yang berlokasi di Tegal Gundil, Bogor Utara. Panti ini berdiri sejak tahun 1995 dan puluhan anak kisaran usia 7 sampai 12 tahun. Keseharian anak-anak panti diisi dengan kegiatan belajar formal di pesantren pribadi dan sekolah umum, beribadah, mengaji Alquran, dll. Untuk biaya operasional, Panti asuhan Mizan Amanah Asrama Yatim Dan Dhuafa Panduraya mengandalkan donasi dari para donatur.',
            'image' => 'destination-2.jpg',
            'location' => 'Bogor, Jawa Barat',
            'link' => 'https://www.google.com/maps/search/Panti+Asuhan+Mizan+Amanah/@-6.2343413,107.0236068,12z/data=!3m1!4b1',
            'person_count' => 80,
            'contact' => '025183592778'
        ]);

        // <!-- 3 -->
        Destination::create([
            'category_id' => 3,
            'name' => 'Panti Jompo Kasih Sayang',
            'description' => 'Panti jompo Kasih Sayang yang berukuran 1800 meter, dihuni oleh 25 lansia yang diurusi oleh 7 pengurus. Kebanyakan lansia ini memang orang tidak mampu, terlantar, tuna netra dan ditemukan seorang diri tanpa adanya keluarga. Ditambah lagi, tak sedikit para lansia disini ditelantarkan oleh keluarga mereka. para pengurus dengan setia merawat para Lansia dengan keterbatasan yang ia miliki, hanya bermodalkan niat dan sebuah rumah untuk bisa menampung para lansia agar bisa hidup layak inilah yang dilakukan ibu yati seadanya, hanya untuk menolong para lansia yang di tinggalkan oleh keluarganya.',
            'image' => 'destination-3.jpg',
            'location' => 'Bekasi, Jawa Barat',
            'link' => 'https://www.google.com/maps/place/Panti+Jompo+Kasih+Sayang/@-6.2343413,107.0236068,17z/data=!3m1!4b1!4m6!3m5!1s0x2e698e968ff112df:0xb670c9679aa31287!8m2!3d-6.2343413!4d107.0236068!16s%2Fg%2F11gnr98c0z',
            'person_count' => 50,
            'contact' => '081712853814'
        ]);

        // <!-- 4 -->
        Destination::create([
            'category_id' => 3,
            'name' => 'Panti Jompo Bhakti Abadi',
            'description' => 'Lembaga Kesejahteraan Sosial Lanjut Usia (LKS-LU) / Panti Jompo BHAKTI ABADI tidak hanya melayani LANSIA didalam Lembaga (didalam Panti) tetapi juga berperan serta dalam membantu LANSIA yang berada disekitar Panti Jompo BHAKTI ABADI atau yang dikenal dengan istilah LANSIA BINAAN / Luar Lembaga. Ini merupakan wujud kepedulian LKS-LU BHAKTI ABADI terhadap LANSIA sekitar yang kurang mampu. Saat ini, Panti Jompo Bhakti Abadi memerlukan bantuan keuangan dari para donatur sekalian untuk kehidupan sehari-hari para lansia dan untuk keberlangsungan panti jompo ini.',
            'image' => 'destination-4.jpg',
            'location' => 'Jakarta Pusat, DKI Jakarta',
            'link' => 'https://www.google.com/maps/place/Yayasan+Bhakti+Abadi/@-6.1804494,106.8454789,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f44bdae9c6e5:0x46d40d3cd6a6d9a3!8m2!3d-6.1804494!4d106.8454789!16s%2Fg%2F11c5rqmhq6',
            'person_count' => 35,
            'contact' => '085770000045'
        ]);

        // <!-- 5 -->
        Destination::create([
            'category_id' => 4,
            'name' => 'Madrasah DTA Al-ITTIHAD',
            'description' => 'Kami percaya bahwa setiap siswa berhak atas fasilitas sekolah yang layak dan lengkap tanpa terkecuali. Namun kenyataannya masih banyak siswa di wilayah terpencil Indonesia yang belum mendapatkan hak tersebut dan menempati sekolah dengan kondisi atap yang rawan roboh, dinding sekolah yang rusak, bahkan sarana prasarana yang ada di sekolah pun belum memadai. Seperti siswa dan siswi di Madrasah DTA Al-ITTIHAD yang harus meliburkan mereka untuk sementara waktu sampai waktu yang belum ditentukan karena kondisi sekolah yang hancur dan belum menemui titik terang untuk direnovasi. Sekolah ini merupakan hasil dari gotong royong warga. Tetapi karena kondisi perekonomian warga yang terbatas membuat renovasi sekolah menjadi terhambat. ',
            'image' => 'destination-5.jpg',
            'location' => 'Kabupaten Bogor, Jawa Barat',
            'link' => 'https://www.google.com/maps/place/Madrasah+Ibtidaiyah+Swasta+Al+Ittihad/@-6.5551812,106.6957453,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69db663f048e1f:0x2f19fc78d68135a1!8m2!3d-6.5551812!4d106.6957453!16s%2Fg%2F11bc7sg0wy',
            'person_count' => 125,
            'contact' => '025186202851'
        ]);

        // <!-- 6 -->
        Destination::create([
            'category_id' => 4,
            'name' => 'MIS AT-TAQWA',
            'description' => 'Berdiri sejak tahun 2000, yang beralamat di Jl. K.H. Noer Alie, Ujung Harapan RT. 004 RW. 007, Kel. Bahagia, Kec. Babelan, Kab. Bekasi. Jumlah siswa di sekolah dasar tersebut hingga hari ini berjumlah sekirar 140 orang (kelas 1 sampai kelas 6), dengan jumlah guru honorer dan staff 14 orang (bukan PNS). Sejak didirikannya Sekolah Dasar tersebut hingga saat ini belum pernah mendapatkan renovasi baik sebagian bangunan maupun secara keseluruhan, selama ini jika ada kerusakan yang bersifat fatal seperti genteng bocor saja yang diperbaiki menggunakan dana BOS dari pemerintah. Supaya proses belajar mengajar ketika musim penghujan tiba para murid masih tetap bisa berjalan.',
            'image' => 'destination-6.jpg',
            'location' => 'Kabupaten Bogor, Jawa Barat',
            'link' => 'https://www.google.com/maps/search/MIS+AT-TAQWA/@-6.4512941,106.7066579,12z/data=!3m1!4b1',
            'person_count' => 150,
            'contact' => '083815433792'
        ]);

        // <!-- 7 -->
        Destination::create([
            'category_id' => 1,
            'name' => 'Banjir Sungai Kapuas Kalteng',
            'description' => 'Banjir Kapuas, Kalimantan Tengah meluas setelah hujan intensitas tinggi masih sering terjadi dan memicu luapan DAS Kapuas. Data per 1 April 2023 pukul 21.00 WIB, sebanyak 4.166 rumah di 14 desa terendam banjir dengan tinggi muka air 40-130 sentimeter. Adapun 14 desa tersebut berada di dua wilayah kecamatan yang rinciannya meliputi Desa Marapit, Desa Tapen, Desa Kota Baru, Desa Pujon, Desa Bajuh, Desa Penda Muntei, Desa Kayu Bulan, Desa Manis dan Desa Karukus di Kecamatan Kapuas Tengah. Donasi ini nantinya akan dialokasikan untuk membantu para warga yang terdampak banjir sungai kapuas, dimana alokasinya akan berupa bantuan sembako, pembangunan rumah sementara dan pembagian dana bantuan.',
            'image' => 'destination-7.jpg',
            'location' => 'Palangkaraya, Kalimantan Tengah',
            'link' => 'https://www.google.com/maps/place/BASARNAS+PALANGKA+RAYA/@-2.2502399,113.9385649,17z/data=!3m1!4b1!4m6!3m5!1s0x2de34d5831dbebc7:0x6f713a13c45f4594!8m2!3d-2.2502399!4d113.9385649!16s%2Fg%2F11trd28h_r',
            'person_count' => 220,
            'contact' => '085268326318'
        ]);

        // <!-- 8 -->
        Destination::create([
            'category_id' => 1,
            'name' => 'Tanah Longsor Desa Payung',
            'description' => 'Tanah longsor yang terjadi di Desa Payung, Kecamatan Rajagaluh pada Kamis (5/4/2023) mengakibatkan beberapa rumah di Blok Cimerang rusak. Beruntung, kerusakan yang terjadi tidak memakan korban jiwa. Meskipun begitu banyak warga yang terkena dampak dan kehilangan tempat tinggal. Donasi akan dialokasikan untuk pembangunan tempat tinggal sementara dan pembagian sembako untuk kehidupan sehari-hari masyarakat yang terdampak.',
            'image' => 'destination-8.jpg',
            'location' => 'Sumedang, Jawa Barat',
            'link' => 'https://www.google.com/maps/place/Kantor+SAR+Bandung/@-6.9664386,107.822654,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68ef01ff1a1eb5:0x919b8c8149327cef!8m2!3d-6.9664439!4d107.8252289!16s%2Fg%2F1hc7c0lty',
            'person_count' => 40,
            'contact' => '083824521467'
        ]);

        // <!-- 9 -->
        Destination::create([
            'category_id' => 1,
            'name' => 'Banjir Sungai Ciliwung',
            'description' => 'Banjir akibat luapan sungai Ciliwung terjadi pada tanggal 6 April 2023 yang mengakibatkan beberapa rumah warga terendam. Tidak hanya itu, masyarakat yuang terdampak juga mengalami krisis air bersih dan mengalami penyakit gatal-gatal dan pencernaan. Donasi dari anda sekalian akan digunakan untuk penyediaan air bersih bagi warga terdampak dan akan digunakan untuk biaya pengobatan warga yang terkena penyakit.',
            'image' => 'destination-9.jpg',
            'location' => 'Jakarta Pusat, DKI Jakarta',
            'link' => 'https://www.google.com/maps/place/Kantor+Pusat+Badan+SAR+Nasional/@-6.1571536,106.8398272,17z/data=!4m10!1m2!2m1!1sbasarnas+jakarta+pusat!3m6!1s0x2e69f5bf94c51703:0xf9e1ff8995cb81e4!8m2!3d-6.1571536!4d106.8420159!15sChZiYXNhcm5hcyBqYWthcnRhIHB1c2F0IgOIAQGSARFnb3Zlcm5tZW50X29mZmljZeABAA!16s%2Fg%2F11bz_28ddb',
            'person_count' => 250,
            'contact' => '082862538431'
        ]);

        // <!-- 10 -->
        Destination::create([
            'category_id' => 2,
            'name' => 'Panti Asuhan Alqi Ceria',
            'description' => 'Panti asuhan Alqi Ceria resmi berdiri sejak tahun 2008 ini dikelola oleh suami istri (Bapak Edi dan Ibu Maya.) Perjalanan mereka hingga mengelola yayasan panti asuhan dimulai pada tahun 1998 ketika masa krisis moneter sedang terjadi. Awalnya mereka pindah ke Bogor karena urusan pekerjaan, namun krisis moneter menyebabkan perusahaan tempat Edi bekerja gulung tikar. Setelah itu dengan susah payah ia berusaha menghidupi keluarga, dengan dibantu istrinya yang mengajar di sekolah-sekolah. Dengan latar belakang ingin beramal, Maya mulai mengajar di panti asuhan. Ia mengajari mereka untuk menjahit, mengaji, membuat sabun, dan keterampilan lainnya.',
            'image' => 'destination-10.jpg',
            'location' => 'Bogor, Jawa Barat',
            'link' => 'https://www.google.com/maps/place/Panti+Asuhan+Alqi+Ceria+(Akbar+ALQI)/@-6.5503862,106.818483,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69c6a9f7eb9067:0x4020f69e863fe7c2!8m2!3d-6.5503862!4d106.818483!16s%2Fg%2F11c3w0tznd',
            'person_count' => 45,
            'contact' => '021117079114'
        ]);

        // <!-- 11 -->
        Destination::create([
            'category_id' => 2,
            'name' => 'Panti Asuhan Pelangi Kasih',
            'description' => 'Orientasi kami adalah untuk mensejahterakan keluarga kurang mampu dengan menggunakan pendekatan belas kasih, berbasis solusi, dan berfokus pada teknologi, dalam mengembangkan keterampilan dan karakter disiplin masing-masing anggota keluarga, sambil bekerja sama dengan individu, pemerintah, dan badan lain yang memiliki visi serupa. Donasi dari teman-teman sekalian nantinya akan digunakan untuk kesejahteraan keluarga kurang mampu di panti asuhan kami',
            'image' => 'destination-11.jpg',
            'location' => 'Bogor, Jawa Barat',
            'link' => 'https://www.google.com/maps/place/Panti+Asuhan+Pelangi+Kasih+(+HOPE+Indonesia+)/@-6.6101343,106.8847427,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69c7c3d99b4b43:0xfdcfe1cdf0d3782b!8m2!3d-6.6101343!4d106.8847427!16s%2Fg%2F11cm041fcq',
            'person_count' => 122,
            'contact' => '021952384582'
        ]);

        // <!-- 12 -->
        Destination::create([
            'category_id' => 2,
            'name' => 'Panti Asuhan Kasih Abba',
            'description' => 'Berdiri pada tanggal 28 Mei 2011, oleh oleh Bapak Antonius Agus Supriyatmono dan diresmikan oleh Pastor Paroki BMV Katedral. RD Benyamin Sudarto. Pada waktu itu Panti asuhan Bhakti Kasih menempati rumah kontrak di Jalan Pabaton No. 49 dengan luas rumah 200 meter persegi. Saat itu jumlah anak asuh berjumlah 25 orang dan berjalannya waktu bertambah menjadi 36 orang. Donasi teman-teman akan digunakan untuk keperluan hidup sehari-hari anak asuh.',
            'image' => 'destination-12.jpg',
            'location' => 'Bogor, Jawa Barat',
            'link' => 'https://www.google.com/maps/place/panti+asuhan+Kasih+Abba/@-6.4032407,106.7242402,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69e8a1cc555503:0x71b4e980407944a1!8m2!3d-6.4032407!4d106.7242402!16s%2Fg%2F11gd3b79t1',
            'person_count' => 36,
            'contact' => '025183408279'
        ]);

        // <!-- 13 -->
        Destination::create([
            'category_id' => 2,
            'name' => 'Panti Asuhan Permata Kasih',
            'description' => 'Panti Asuhan Permata Hati awalnya didirikan 1 November 1986 dengan nama Yayasan Tenaga Kesejahteraan Sosial Sukarela (TKSS), oleh beberapa tenaga kerja sosial sukarela di Bogor yang tujuannya adalah membantu program pemerintah dalam bidang kesejahteraan sosial dan pendidikan keterampilan terutama bagi pemuda pemudi putus sekolah dan anak anak terlantar maupun bagi para ibu rumah tangga untuk menambah penghasilan keluarga dengan memberikan pendidikan keterampilan dan menyalurkan kerja seperti menjahit, memasak dan membuat kue, baby sitter dan menyablon.',
            'image' => 'destination-13.jpg',
            'location' => 'Bogor, Jawa Barat',
            'link' => 'https://www.google.com/maps/place/Rumah+Asuh+Anak+%26+Orang+Tua+Kasih+Abba/@-1.4834059,103.0674606,6z/data=!4m10!1m2!2m1!1sPanti+Asuhan+Permata+Kasih!3m6!1s0x2e69e8a0727271c1:0x4cb5d78ea72174f8!8m2!3d-6.4033348!4d106.7241807!15sChpQYW50aSBBc3VoYW4gUGVybWF0YSBLYXNpaFocIhpwYW50aSBhc3VoYW4gcGVybWF0YSBrYXNpaJIBHW5vbl9nb3Zlcm5tZW50YWxfb3JnYW5pemF0aW9umgEkQ2hkRFNVaE5NRzluUzBWSlEwRm5TVVJDTURjemMzUkJSUkFC4AEA!16s%2Fg%2F11bvv5g5sx',
            'person_count' => 39,
            'contact' => '025186596638'
        ]);

        // <!-- 14 -->
        Destination::create([
            'category_id' => 1,
            'name' => 'Banjir Sungai Cissanggarung',
            'description' => 'Sungai Cisanggarung di Kabupaten Brebes meluap dan merendam tiga desa di Kecamatan Losari. Ratusan rumah warga di sekitar daerah aliran sungai terendam banjir, ketiga  desa tersebut adalah Pekauman, Losari Lor, dan Losari Kidul. Donasi anda saat ini sangat dibutuhkan untuk membantu para korban terdampak',
            'image' => 'destination-14.jpg',
            'location' => 'Kabupaten Brebes, Jawa Tengah',
            'link' => 'https://docs.google.com/spreadsheets/d/1Mc-jNC2xcgkk9l6E23PGGV_3jNkX8XRrSZNZHNlwi84/edit#gid=2051562422',
            'person_count' => 138,
            'contact' => '081648392065'
        ]);

        // <!-- 15 -->
        Destination::create([
            'category_id' => 1,
            'name' => 'Tanah Longsor Natuna',
            'description' => 'Bencana tanah longsor kembali terjadi di Kecamatan Serasan, Kabupaten Natuna, Kepulauan Riau (Kepri). Sejauh ini korban meninggal dunia berjumlah 10 orang, 6 sudah teridentifikasi sedangkan 4 belum teridentifikasi. Pihak terkait menyebut masih ada 47 orang yang dinyatakan hilang, 5 luka berat dan 3 luka sedang. Selain itu data pengungsian ada sebanyak 1.216 yang tersebar di empat titik. Maka dari itu kami membutuhkan bantuan para donatur untuk membantu pihak-pihak yang terdampak.',
            'image' => 'destination-15.jpg',
            'location' => 'Kabupaten Natuna, Kepulauan Riau',
            'link' => 'https://www.google.com/maps/place/Badan+Penanggulangan+Bencana+Daerah+(BPBD)+Kabupaten+Natuna/@3.9518964,108.3826224,17z/data=!3m1!4b1!4m6!3m5!1s0x31ec697fd5807dc1:0xe313f1ec1d9e8999!8m2!3d3.9518964!4d108.3826224!16s%2Fg%2F11t51m_czp',
            'person_count' => 50,
            'contact' => '083812367289'
        ]);

        // <!-- 16 -->
        Destination::create([
            'category_id' => 2,
            'name' => 'Panti Asuhan Padang Bulan',
            'description' => 'Panti Asuhan Padang Bulan berlokasi di Kecamatan Medan Selayang, Kota Medan, Sumatera Utara. Panti ini merupakan yayasan panti asuhan yang bergerak dalam bidang sosial dan keagamaan. Panti asuhan ini dibentuk pada tahun 2011 dan terdapat 32 anak dari umur 8 bulan hingga 22 tahun serta 5 pengurus. Keseharian anak-anak panti diisi dengan kegiatan belajar formal di sekolah umum, beribadah, bermain, bersih-bersih, dll.',
            'image' => 'destination-16.jpg',
            'location' => 'Medan, Sumatera Utara',
            'link' => 'https://www.google.com/maps/place/Panti+Asuhan+Padang+Bulan/@3.5549413,98.6417695,17z/data=!3m1!4b1!4m6!3m5!1s0x30312fec62c8896d:0x6d8054859cda3e25!8m2!3d3.5549413!4d98.6417695!16s%2Fg%2F11c1nxhxvb',
            'person_count' => 32,
            'contact' => '082163908719'
        ]);

        // <!-- 17 -->
        Destination::create([
            'category_id' => 5,
            'name' => 'Operasi Bibir Sumbing Smile Train',
            'description' => 'Sebagian besar dari mereka tidak bisa makan dan bicara dengan benar serta sering kali tak mampu bersekolah atau melakukan pekerjaan. Jutaan anak di dunia menderita sumbing yang tak tertangani.',
            'image' => 'destination-17.jpg',
            'location' => 'Jakarta Pusat, DKI Jakarta',
            'link' => 'https://www.google.com/maps/place/Smile+Train+Indonesia/@-6.291286,106.8036422,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f6826ea5d7f7:0xdf46239708491bd4!8m2!3d-6.291286!4d106.8036422!16s%2Fg%2F11b5r940b9',
            'person_count' => 50,
            'contact' => '082175998082'
        ]);

        // <!-- 18 -->
        Destination::create([
            'category_id' => 1,
            'name' => 'Bantuan Rendang Gempa Sumbar',
            'description' => 'Rendang merupakan masakan siap saji yang tahan lama. Rendang ini akan bermanfaat bagi para korban gempa, dan semoga bantuan rendang ini bisa meringankan beban saudara-saudara kita yang dilanda bencana gempa',
            'image' => 'destination-18.jpg',
            'location' => 'Jakarta Timur, DKI Jakarta',
            'link' => 'https://www.google.com/maps/place/BPBD+Provinsi+Sumatera+Barat/@-0.9386643,100.325943,13z/data=!4m10!1m2!2m1!1sbnpb+sumbar!3m6!1s0x2fd4b93a0c91c4b3:0x6c22573b558a0894!8m2!3d-0.9386643!4d100.3609619!15sCgtibnBiIHN1bWJhcpIBEWdvdmVybm1lbnRfb2ZmaWNl4AEA!16s%2Fg%2F11btm9_z6h',
            'person_count' => 150,
            'contact' => '08121237573'
        ]);

        // <!-- 19 -->
        Destination::create([
            'category_id' => 1,
            'name' => 'Gempa Bumi Cianjur',
            'description' => 'Bantuan yang diberikan kepada korban gempa Cianjur berupa 150 paket sembako yang terdiri dari, beras, minyak goreng, gula, serta pakaian layak pakai yang terkumpul dari sumbangan',
            'image' => 'destination-19.jpg',
            'location' => 'Kabupaten Cianjur, Jawa Barat',
            'link' => 'https://www.google.com/maps/place/Jl.+Raya+Bandung+No.6,+Bojong,+Kec.+Karangtengah,+Kabupaten+Cianjur,+Jawa+Barat+43281/@-6.8014747,107.1764918,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68536a40705d57:0x33da95d00b4e4448!8m2!3d-6.8014747!4d107.1764918!16s%2Fg%2F11csgqlc00',
            'person_count' => 120,
            'contact' => '081287652345'
        ]);

        // <!-- 20 -->
        Destination::create([
            'category_id' => 2,
            'name' => 'Panti Asuhan An Nashroh',
            'description' => 'Panti asuhan di bawah asuhan Ust. M. Luthfi yang bergerak dalam mempersiapkan masa depan anak untuk menjadi generasi hafidz Al-Qur\'an dan penguasaan kitab kuning. Penguasaan kitab kuning diharapkan menjadi bekal para santri dimasa yang akan datang serta memiliki akhlaqul Karimah.',
            'image' => 'destination-20.jpg',
            'location' => 'Kabupaten Kubu Raya, Kalimantan Barat',
            'link' => 'https://www.google.com/maps/place/Jl.+Usaha+Bersama,+Sungai+Rengas,+Kec.+Sungai+Kakap,+Kabupaten+Kubu+Raya,+Kalimantan+Barat/@-0.0122753,109.2789845,17z/data=!3m1!4b1!4m6!3m5!1s0x2e1d5f53b9f3b59f:0xeaa3435fd3223192!8m2!3d-0.0122753!4d109.2789845!16s%2Fg%2F11cr_fss4h',
            'person_count' => 55,
            'contact' => '081281336070'
        ]);

        // <!-- 21 -->
        Destination::create([
            'category_id' => 2,
            'name' => 'Panti Wredha Hanna Bogor',
            'description' => 'Panti ini ditujukan untuk melayani para orang tua yang relatif secara ekonomi tidak mampu pada sekitaar tahun 1970an. Pada awalnya panti ini hanya diperuntukkan untuk kaum wanita saja namun dengan perkembangan yang ada dengan didirikannya bangunan baru pada tahun 2004, panti mulai dihuni juga oleh kaum pria. Kapasitas hunian saat ini adalah 25 orang. Walau dengan keterbatasan dana, panti ini cukup diminati dan biasanya terisi penuh. Secara umum kondisi kesehatan penghuni dapat dikatakan baik dan dapat mengurus dirinya sendiri, walaupun terdapat sejumlah penghuni yang harus dibantu karena sudah sangat tua atau pikun/jompo.',
            'image' => 'destination-21.jpg',
            'location' => 'Bogor, Jawa Barat',
            'link' => 'https://www.google.com/maps/place/Panti+Wredha+Hanna+Bogor/@-6.6262207,106.8117218,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69c5f8cc824b55:0x8488f73ebe3dd770!8m2!3d-6.6262207!4d106.8117218!16s%2Fg%2F11bxf59w22',
            'person_count' => 25,
            'contact' => '025183174196'
        ]);

        // <!-- 22 -->
        Destination::create([
            'category_id' => 3,
            'name' => 'Panti Jompo Pesona Agape Sejahtera',
            'description' => 'Panti Wreda Pesona Agape Sejahtera merupakan tempat tinggal bagi para Lansia untuk menikmati hari tua dengan damai, sehat, dan sejahtera. Kami sebagai pengelola berusaha untuk dapat membuat para lansia dapat hidup berkecukupan, maka dari itu kami membutuhkan bantuan donasi dari saudara-saudara sekalian untuk keperluan sehari-hari.',
            'image' => 'destination-22.jpg',
            'location' => 'Bogor Selatan, Jawa Barat',
            'link' => 'https://www.google.com/maps/place/Panti+Jompo+Pesona+Agape+Sejahtera/@-6.6282084,106.8091895,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69cf45d703d523:0x4ebe573f7fbc0fd9!8m2!3d-6.6282084!4d106.8091895!16s%2Fg%2F11k9q7zwzc',
            'person_count' => 58,
            'contact' => '082112353405'
        ]);

        // <!-- 23 -->
        Destination::create([
            'category_id' => 3,
            'name' => 'Panti Werdha Graha Bina Asuh',
            'description' => 'Yayasan Graha Bina Asuh didirikan pada Tanggal 04 Maret 2017 dengan Visi melakukan ibadah yang murni, dan Misi yang menyediakan tempat bernaung yang aman serta nyaman bagi kaum Lansia, dan menjalankan konsep “Rumah Sendiri” bagi kaum Lansia sehingga menghasilkan generasi Lansia yang sehat secara fisik,rohani dan psikis.',
            'image' => 'destination-23.jpg',
            'location' => 'Kabupaten Bogor, Jawa Barat',
            'link' => 'https://www.google.com/maps/place/Panti+Werdha+Graha+Bina+Asuh/@-6.4971195,106.7570775,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69c2e515fae1db:0xa9a0544dade684e9!8m2!3d-6.4971195!4d106.7570775!16s%2Fg%2F11bzrq1ps9',
            'person_count' => 62,
            'contact' => '025175946074'
        ]);

        // <!-- 24 -->
        Destination::create([
            'category_id' => 4,
            'name' => 'SDN Sindangkarsa',
            'description' => 'SD Negeri Sindangkarsa adalah salah satu satuan pendidikan dengan jenjang SD di TERITIH, Kec. Walantaka, Kota Serang, Banten. Dalam menjalankan kegiatannya, SD NEGERI SINDANGRAKSA berada di bawah naungan Kementerian Pendidikan dan Kebudayaan. Saat ini banyak ruang kelas di SD ini yang sangat menggangu pembelajarana siswa. Maka dari itu kami memohon bantuan dana dari para donatur sehingga renovasi kelas dapat dilakukan.',
            'image' => 'destination-24.jpg',
            'location' => 'Kabupaten Cianjur, Jawa Barat',
            'link' => 'https://www.google.com/maps/place/Sekolah+Dasar+Negeri+Sindangkarsa+2/@-6.4104698,106.8763314,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69eb0551ab7777:0x605e6e5b3358d152!8m2!3d-6.4104698!4d106.8763314!16s%2Fg%2F11bzt3blvt',
            'person_count' => 182,
            'contact' => '081563520302'
        ]);

        // <!-- 25 -->
        Destination::create([
            'category_id' => 4,
            'name' => 'SDN 2 Sambongrejo',
            'description' => 'Sekitar dua tahun tiga ruang kelas di SDN 2 Sambongrejo, Kecamatan Sambong, Kabupaten Blora, rusak parah. Akibatnya siswa terpaksa numpang belajar di rumah warga dengan kondisi apa adanya. Setelah peristiwa tersebut, sejak akhir 2021 siswa kelas III, IV, dan VI mereka belajar di rumah warga sekitar berlantai tanah. Para siswa yang sedang melaksanakan proses belajar mengajar ini sering berpindah tempat. Kondisi rumah yang ala kadarnya juga memengaruhi fokus siswa.',
            'image' => 'destination-25.jpg',
            'location' => 'Kabupatan Blora, Jawa Tengah',
            'link' => 'https://www.google.com/maps/place/SDN+2+SAMBONGREJO/@-7.1032522,111.5399298,17z/data=!3m1!4b1!4m6!3m5!1s0x2e77679fb60186b1:0x108b252fc7cd8559!8m2!3d-7.1032522!4d111.5399298!16s%2Fg%2F11h0_lmh21',
            'person_count' => 148,
            'contact' => '085290551845'
        ]);

        // <!-- 26 -->
        Destination::create([
            'category_id' => 5,
            'name' => 'Operasi Bibir Sumbing Malang',
            'description' => 'Donasi dari bapak ibu sekalian akan sangat membantu untuk keberlangsungan SDN ini agar para siswa dapat tetap belajar dengan fokus.',
            'image' => 'destination-26.jpg',
            'location' => 'Malang, Jawa Timur',
            'link' => 'https://www.google.com/maps/place/RSUD+LAWANG/@-7.8320536,112.6951128,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd7d4b4475b53ff:0x48f0ed00381acf6d!8m2!3d-7.8320536!4d112.6951128!16s%2Fg%2F1pzsgw_cb',
            'person_count' => 40,
            'contact' => '0821426338463'
        ]);

        // <!-- 27 -->
        Destination::create([
            'category_id' => 5,
            'name' => 'Berantas Kebutaan Akibat Katarak',
            'description' => 'Eyelink Foundation merupakan yayasan dari Eyelink yang menghimpun berbagai aktivitas sosial terkait kesehatan mata, khususnya berhubungan dengan misi pemberantasan kebutaan akibat gangguan mata. Telah melakukan operasi katarak secara gratis sebanyak 6000 mata selama lebih dari 12 tahun. Melalui campaign “Berantas Kebutaan Akibat Katarak” kami ingin menyelamatkan indonesia dari kebutaan akibat penyakit katarak. Kami ingin semua orang dapat melihat membantu penderita katarak yang tidak bisa mengakses fasilitas kesehatan agar dapat melihat keindahan dunia dengan jelas',
            'image' => 'destination-27.jpg',
            'location' => 'Gresik, Jawa Timus',
            'link' => 'https://www.google.com/maps/place/Eyelink+Group/@-7.1603609,112.614072,17z/data=!4m10!1m2!2m1!1sJL.+SUMATRA+107,+GKB+-+GRESIK!3m6!1s0x2e77fff2d0352cbb:0x3eca346820c9a43!8m2!3d-7.1603609!4d112.6162607!15sCh1KTC4gU1VNQVRSQSAxMDcsIEdLQiAtIEdSRVNJS5IBEGNvcnBvcmF0ZV9vZmZpY2XgAQA!16s%2Fg%2F11lgpg49k9',
            'person_count' => 150,
            'contact' => '081323111085'
        ]);

        // <!-- 28 -->
        Destination::create([
            'category_id' => 1,
            'name' => 'Banjir Bandang di Batu',
            'description' => 'Ini jadi duka bersama dan sudah sepatutnya kita bahu membahu untuk membantu para korban terdampak. Adapun bantuan yang diserahkan berupa sembako yang berisi kebutuhan pokok. Diantaranya beras kemasan 5 kg sejumlah 1500 kg, minyak goreng sejumlah 200 karton, mie instan sejumlah 200 karton, gula pasir sejumlah 1000 kg dan AMDK (air minum dalam kemasan) sejumlah 60 karton.',
            'image' => 'destination-28.jpg',
            'location' => 'Surabaya, Jawa Timur',
            'link' => 'https://www.google.com/maps/place/Jl.+Ahmad+Yani+No.242,+Gayungan,+Kec.+Gayungan,+Kota+SBY,+Jawa+Timur+60235/@-7.3364109,112.7292661,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd7fb45100b0867:0xd8e85b3f75e7b21d!8m2!3d-7.3364109!4d112.7292661',
            'person_count' => 110,
            'contact' => '0318294608'
        ]);

        // <!-- 29 -->
        Destination::create([
            'category_id' => 1,
            'name' => 'Tanah longsor Desa Lau Bawang',
            'description' => 'Walaupun tidak seberapa akan tetapi mari kita memberikan semangat, dukungan dan kami perduli dan berbagi terhadap warga korban Longsor,',
            'image' => 'destination-29.jpg',
            'location' => 'JKabupaten Karo, Sumatera Utara',
            'link' => 'https://www.google.com/maps/place/Jl.+Veteran+No.50,+Padang+MAS,+Kec.+Kabanjahe,+Kabupaten+Karo,+Sumatera+Utara+22111/@3.1044126,98.4950472,17z/data=!3m1!4b1!4m6!3m5!1s0x303101d2a12aa5b3:0x69d69a3bf886f0ef!8m2!3d3.1044126!4d98.4950472!16s%2Fg%2F11fmgbrrdc',
            'person_count' => 40,
            'contact' => '081187906767'
        ]);

        // <!-- 30 -->
        Destination::create([
            'category_id' => 5,
            'name' => 'Bantuan HIV/AIDS Yayasan VSE',
            'description' => 'Yayasan VSE berusaha semaksimal mungkin agar tidak ada lagi anak-anak yang terkena penyakit HIV/AIDS. Kami juga berorientasi untuk membantu pendanaan dari anak-anak yang butuh dana pengobatan khusus akibat penyakit HIV/AIDS. Selain itu, kami berharap dapat menjaga anak - anak untuk tetap memiliki semangat sembuh. Maka dari itu donasi dari saudara sekalian sangat diperlukan untuk mendukung gerakan ini.',
            'image' => 'destination-30.jpg',
            'location' => 'Jakarta Barat, DKI Jakarta',
            'link' => 'https://www.google.com/maps/place/Yayasan+Vina+Smart+Era+(Vina+Smart+Era+Foundation)/@-6.1555757,106.8034548,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f7c0f11ad391:0x4b76e32cd56aa612!8m2!3d-6.155581!4d106.8060297!16s%2Fg%2F11pq1djfxd',
            'person_count' => 200,
            'contact' => '081290401144'
        ]);
        // DESTINATION

    // EVENT
        // <!-- 1 -->
        Event::create([
            'destination_id' => 1,
            'user_id' => 1,
            'name' => 'Charity Action of RTB',
            'start_date' => '2023-03-23',
            'end_date' => '2023-04-20',
            'description' => 'Kami dari komunitas Rumah Talenta BCA mengadakan kegiatan amal untuk membantu adik-adik kita yang ada di beberapa panti asuhan terdekat. Tujuan dari event penggalangan dana ini adalah agar adik-adik kita yang tinggal di panti asuhan tersebut dapat terbantu dari sisi pagan pada bulan suci Ramadhan',
            'image' => 'event-1.jpg'
        ]);

        // <!-- 2 -->
        Event::create([
            'destination_id' => 18,
            'user_id' => 1,
            'name' => 'Pasaman Earthquake Fundraising',
            'start_date' => '2023-03-07',
            'end_date' => '2023-04-04',
            'description' => 'Kami dari komunitas peduli bencana ingin melakukan penggalangan dana atas terjadinya bencana alam gempa bumi di Pasamanan yang telah terjadi beberapa hari yang lalu. Tujuan penggalangan dana ini untuk membantu para warga yang terkena efek bencana alam tersebut seperti membantu memperbaiki kerusakan rumah mereka',
            'image' => 'event-2.jpg'
        ]);

        // <!-- 3 -->
        Event::create([
            'destination_id' => 9,
            'user_id' => 1,
            'name' => 'Bantu Mereka yang Kena Banjir Yuk!',
            'start_date' => '2023-01-01',
            'end_date' => '2023-01-29',
            'description' => 'Kami dari komununitas CareOthers ingin membantu sanak saudara-saudari kita yang telah terkena bencala alam Banjir yang terjadi di Jakarta dini hari tadi. Hasil Penggalangan dana ini nantinya akan diberikan kepada mereka dalam rupa persedian makanan, pakaian, serta sedikit uang tunai.',
            'image' => 'event-3.jpg'
        ]);

        // <!-- 4 -->
        Event::create([
            'destination_id' => 15,
            'user_id' => 2,
            'name' => 'Gess Puncak Longsor !!',
            'start_date' => '2023-02-12',
            'end_date' => '2023-02-22',
            'description' => 'Kami dari pemuda sentul city berencana membantu para warga puncak Bogor sekitarnya yang telah dievakuasi karena terjadinya bencana longsor. Maka dengan itu, kami mengajak teman-teman sekalian untuk ikut bersama kami membantu saudara-saudari kita yang telah terkena longsor tersebut dengan melakukan penggalangan dana yang nantinya akan diserahkan kepada mereka.',
            'image' => 'event-4.jpg'
        ]);

        // <!-- 5 -->
        Event::create([
            'destination_id' => 1,
            'user_id' => 2,
            'name' => 'Care Taman Sukacita',
            'start_date' => '2023-02-17',
            'end_date' => '2023-03-10',
            'description' => 'Kami dari Frog community ingin melakukan penggalangan data yang bertujuan untuk membantu adik-adik kita yatim piatu untuk membeli berbagai perlengkapan sekolah yang mereka butuhkan, seperti berbagai alat tulis, buku catatan, serta buku pelajaran',
            'image' => 'event-5.jpg'
        ]);

        // <!-- 6 -->
        Event::create([
            'destination_id' => 1,
            'user_id' => 2,
            'name' => 'Peduli Panti Jompo Kasih Sayang',
            'start_date' => '2023-04-01',
            'end_date' => '2023-04-29',
            'description' => 'Kami dari karang taruna desa selayang berkeinginan untuk membantu orang tua kita yang ada di panti jompo kasih sayang. Dengan bantuan kita bersama, semoga mereka dapat merasakan kebahagiaan dan rasa peduli dari kita. Dana yang telah terkumpul nantinya akan digunakan untuk memberikan pakaian kepada mereka',
            'image' => 'event-6.jpg'
        ]);

        // <!-- 7 -->
        Event::create([
            'destination_id' => 7,
            'user_id' => 3,
            'name' => 'Banjir Sungai Kapuas Kalteng',
            'start_date' => '2023-03-23',
            'end_date' => '2023-04-20',
            'description' => 'Kami dari Osis SMA Negri 7 Tangsel akan melakukan gerakan untuk membantu saudara-saudari kita yang terkena bencana banjir sungai kapuas yang terjadi di Kalimantan Tengah. Kami berharap ketersedian kita semua untuk ikut serta melakukan penggalangan dana guna membantu saudara-saudari kiita disana',
            'image' => 'event-7.jpg'
        ]);

        // <!-- 8 -->
        Event::create([
            'destination_id' => 5,
            'user_id' => 3,
            'name' => 'Yuk Bantu Madrasah DTAAI-ITTIHAD',
            'start_date' => '2023-04-13',
            'end_date' => '2023-05-11',
            'description' => 'Kami dari Komunitas Pemuda Peduli Sesama Babakan Madang ingin melakukan penggalangan dana yang bertujuan untuk membantu adik-adik kita yang berada di Madrasah DTAAI-ITTIHAD untuk membelikan berbagai perlengkapan pembelajaran yang mereka butuhkan. Diharapkan kesidian kita semua untuk ikut berpartisipasi dalam penggalangan dana ini',
            'image' => 'event-8.jpg'
        ]);

        // <!-- 9 -->
        Event::create([
            'destination_id' => 8,
            'user_id' => 4,
            'name' => 'Gerakan Bantu Tanah Longsor Payung',
            'start_date' => '2023-04-17',
            'end_date' => '2023-05-15',
            'description' => 'Kami dari Karang Taruna Serdang berkeingan untuk membantu saudara-saudari kita yang terkena dampak tanah longsong yang terjadi di payung.Diharapkan ketersediaan kita semua untuk menyukseskan penggalangan dana ini',
            'image' => 'event-9.jpg'
        ]);

        // <!-- 10 -->
        Event::create([
            'destination_id' => 10,
            'user_id' => 4,
            'name' => 'Gerakan Panti Asuhan Alqi Ceria',
            'start_date' => '2023-04-30',
            'end_date' => '2023-05-28',
            'description' => 'Kami dari Mahasiswa Binus University melakukan penggalangan dana untuk membantu teman-teman kita yang berada di panti asuhan Alqi Cerita untuk membantu mereka melengkapi berbagai kebutuhan yang sekiranya mereka butuhkan',
            'image' => 'event-10.jpg'
        ]);
    // EVENT

    // PAYMENT DETAIL
        // <!-- 1 -->
        PaymentDetail::create([
            'payment_header_id' => 1,
            'product_id' => 1,
            'qty' => 10,
            'item_price' => 2700,
            'item_modal' => 1800
        ]);

        // <!-- 2 -->
        PaymentDetail::create([
            'payment_header_id' => 1,
            'product_id' => 2,
            'qty' => 20,
            'item_price' => 11550,
            'item_modal' => 7700
        ]);

        // <!-- 3 -->
        PaymentDetail::create([
            'payment_header_id' => 1,
            'product_id' => 5,
            'qty' => 35,
            'item_price' => 11500,
            'item_modal' => 7700
        ]);

        // <!-- 4 -->
        PaymentDetail::create([
            'payment_header_id' => 1,
            'product_id' => 7,
            'qty' => 1,
            'item_price' => 11550,
            'item_modal' => 7700
        ]);

        // <!-- 5 -->
        PaymentDetail::create([
            'payment_header_id' => 2,
            'product_id' => 1,
            'qty' => 18,
            'item_price' => 2700,
            'item_modal' => 1800
        ]);

        // <!-- 6 -->
        PaymentDetail::create([
            'payment_header_id' => 2,
            'product_id' => 5,
            'qty' => 20,
            'item_price' => 11500,
            'item_modal' => 7700
        ]);

        // <!-- 7 -->
        PaymentDetail::create([
            'payment_header_id' => 2,
            'product_id' => 10,
            'qty' => 30,
            'item_price' => 5250,
            'item_modal' => 3500
        ]);

        // <!-- 8 -->
        PaymentDetail::create([
            'payment_header_id' => 3,
            'product_id' => 4,
            'qty' => 50,
            'item_price' => 10500,
            'item_modal' => 7000
        ]);

        // <!-- 9 -->
        PaymentDetail::create([
            'payment_header_id' => 3,
            'product_id' => 6,
            'qty' => 20,
            'item_price' => 11550,
            'item_modal' => 7700
        ]);

        // <!-- 10 -->
        PaymentDetail::create([
            'payment_header_id' => 3,
            'product_id' => 7,
            'qty' => 10,
            'item_price' => 11550,
            'item_modal' => 7700
        ]);

        // <!-- 11 -->
        PaymentDetail::create([
            'payment_header_id' => 4,
            'product_id' => 1,
            'qty' => 12,
            'item_price' => 2700,
            'item_modal' => 1800
        ]);

        // <!-- 12 -->
        PaymentDetail::create([
            'payment_header_id' => 4,
            'product_id' => 3,
            'qty' => 18,
            'item_price' => 23100,
            'item_modal' => 15400
        ]);

        // <!-- 13 -->
        PaymentDetail::create([
            'payment_header_id' => 4,
            'product_id' => 2,
            'qty' => 22,
            'item_price' => 23100,
            'item_modal' => 15400
        ]);
    // PAYMENT DETAIL

    // PAYMENT HEADER
        // <!-- 1 -->
        PaymentHeader::create([
            'user_id' => 1,
            'date' => '2023-05-05',
            'total_price' => 673800,
            'total_modal' => 449200
        ]);

        // <!-- 2 -->
        PaymentHeader::create([
            'user_id' => 2,
            'date' => '2023-05-08',
            'total_price' => 437100,
            'total_modal' => 291400
        ]);

        // <!-- 3 -->
        PaymentHeader::create([
            'user_id' => 3,
            'date' => '2023-05-09',
            'total_price' => 871500,
            'total_modal' => 581000
        ]);

        // <!-- 4 -->
        PaymentHeader::create([
            'user_id' => 4,
            'date' => '2023-05-10',
            'total_price' => 956400,
            'total_modal' => 637600
        ]);

        // <!-- 5 -->
        PaymentHeader::create([
            'user_id' => 1,
            'date' => '2023-05-10',
            'total_price' => 956400,
            'total_modal' => 364000
        ]);
    // PAYMENT HEADER

    // 
        // <!-- 1 -->
        Product::create([
            'event_id' => 1,
            'product_category_id' => 1,
            'name' => 'Makaroni Bantet',
            'stock' => 830,
            'description' => 'Makaroi bantet Khas Tasikmalaya yang disajikan untuk anda dengan rasa yang tidak akan mengecewakan, Makaroni BANTET tasikmalaya Varian Daun jeruk gurih Maknyuss. PRODUK READY',
            'price' => 2700,
            'modal' => 1800,
            'image' => 'product-1.jpg'
        ]);

        // <!-- 2 -->
        Product::create([
            'event_id' => 1,
            'product_category_id' => 1,
            'name' => 'Kerupuk Seblak',
            'stock' => 560,
            'description' => 'Kerupuk seblak daun jeruk isi 1/4 atau 250 gram DIJAMIN BIKIN NAGIHHHH Varian rasa Daun jeruk Nikmat di mulut. Semua cemilan yang saya ada InsyaAllah bikin nagih dan soal rasa gausah di ragukan lagi!!"',
            'price' => 11550,
            'modal' => 7700,
            'image' => 'product-2.jpg'
        ]);

        // <!-- 3 -->
        Product::create([
            'event_id' => 1,
            'product_category_id' => 1,
            'name' => 'Makaroni Jeruk',
            'stock' => 340,
            'description' => 'Makaroni bantet kemasan 500 gram atau 1/2 Kg. Soal rasa InsyaAllah tidak mengecewakan silahkan rasakan sensasi makaroni bantet dari kami. Tersedia rasa Daun jeruk yang nikmat.',
            'price' => 23100,
            'modal' => 15400,
            'image' => 'product-3.jpg'
        ]);

        // <!-- 4 -->
        Product::create([
            'event_id' => 1,
            'product_category_id' => 1,
            'name' => 'Kripik Usus',
            'stock' => 675,
            'description' => 'Kripik Usus tidak bau amis, menggunakan bubuk cabe asli dan rasa rempah kunyit nya kerasa banget pokoknya bumbu melimpah ruah dijamin rasa yang dijual di toko cemilan sartika tidak mengecewakan. Produk ready, stok produksi setiap hari & tangan pertama Home made. Dijamin bikin nagih. RASA PEDAS DAUN JERUK ISI 100 GR',
            'price' => 10500,
            'modal' => 7000,
            'image' => 'product-4.jpg'
        ]);

        // <!-- 5 -->
        Product::create([
            'event_id' => 1,
            'product_category_id' => 1,
            'name' => 'Makaroni Uril',
            'stock' => 235,
            'description' => 'ISI 250 GRAM / 1/4 KG Makaroni uril home made tidak keras ~  Kriuk bangett. Tersedia 3 varian rasa Asin gurih, Pedas gurih dan Ekstra pedas gurih. PRODUK READY, PENGEMASAN CEPAT',
            'price' => 11550,
            'modal' => 7700,
            'image' => 'product-5.jpg'
        ]);

        // <!-- 6 -->
        Product::create([
            'event_id' => 2,
            'product_category_id' => 1,
            'name' => 'Makaroni Daun ',
            'stock' => 172,
            'description' => '"Basreng yang super renyah + gurih dengan varian pedas dan original , pas bgt buat nemenin
            saat makan pake nasi anget"',
            'price' => 11550,
            'modal' => 7700,
            'image' => 'product-6.jpg'
        ]);

        // <!-- 7 -->
        Product::create([
            'event_id' => 2,
            'product_category_id' => 1,
            'name' => 'Makaroni Cikruh',
            'stock' => 543,
            'description' => 'Makaroni kriuk cikruh kemasan 250 gr dibuat home made jadi insyaAllah rasa tidak mengecewakan tidak keras sama sekali. Ada 3 rasa Ori gurih, Pedas gurih dan Extra pedas gurih',
            'price' => 11550,
            'modal' => 7700,
            'image' => 'product-7.jpg'
        ]);

        // <!-- 8 -->
        Product::create([
            'event_id' => 2,
            'product_category_id' => 1,
            'name' => 'Makaroni Kerang',
            'stock' => 274,
            'description' => 'ISI 250 Gram & 500 Gram, Insyaallah bikin nagih soal rasa gausah diraguin lagi. Tersedia 3 varian rasa, Asin gurih, Pedas gurih dan Ekstra pedas gurih. Produk Ready Pengemasan Cepat !',
            'price' => 11550,
            'modal' => 7700,
            'image' => 'product-8.jpg'
        ]);

        // <!-- 9 -->
        Product::create([
            'event_id' => 2,
            'product_category_id' => 1,
            'name' => 'Makaroni Mini',
            'stock' => 186,
            'description' => 'Makaroi kerang mini Khas Tasikmalaya yang disajikan untuk anda dengan rasa yang tidak akan mengecewakan produk tersedia dengan berbagai varian rasa.',
            'price' => 2625,
            'modal' => 1750,
            'image' => 'product-9.jpg'
        ]);

        // <!-- 10 -->
        Product::create([
            'event_id' => 3,
            'product_category_id' => 2,
            'name' => 'Cuanki Tahu',
            'stock' => 500,
            'description' => 'Sekarang bisa nikmatin bumbu yang pedas syeger gurih  kapanpun, paket cuanki instan abah isi 1paket cuanki: 3cuanki lidah, 4cuanki tahu, 10cuanki mini, bumbu abah, cabe bubuk abah, minyak bawang dan jeruk limo/purut (TERGANTUNG MUSIM). Rasakan sensasi nya , segera order produk selalu ready"',
            'price' => 5250,
            'modal' => 3500,
            'image' => 'product-10.jpg'
        ]);

        // <!-- 11 -->
        Product::create([
            'event_id' => 3,
            'product_category_id' => 4,
            'name' => 'Kaos Oblong',
            'stock' => 1000,
            'description' => 'Kaos polos basic V neck soft spandex bahan streck lembut dan adem. Tersedia ukuran S, M, L, dan XL. Model Body fit  cocok buat di pakai sehari-hari / outfit, bisa buat di sablon sendiri, buat dalaman di padukan dengan kemeja / jaket, buat seragam dan komunita',
            'price' => 23100,
            'modal' => 15400,
            'image' => 'product-11.jpg'
        ]);


        // <!-- 12 -->
        Product::create([
            'event_id' => 3,
            'product_category_id' => 10,
            'name' => 'Sweeter Hoodie',
            'stock' => 567,
            'description' => 'Sweeteer bahan Babbyterry adem dan nyaman dipakai. Motif sablon premium dan tidak mudah luntur saat dicuci. Produksi homemade dengan harga lebih terjangkau. Tersedia ukuran L dan XL',
            'price' => 47775,
            'modal' => 31850,
            'image' => 'product-12.jpg'
        ]);


        // <!-- 13 -->
        Product::create([
            'event_id' => 4,
            'product_category_id' => 4,
            'name' => 'Kaos V-Neck',
            'stock' => 1100,
            'description' => 'Kaos polos basic V neck soft spandex bahan streck lembut dan adem. Tersedia berbagai ukuran yang cocok untuk kamu. Model kaos ini adalah katun, sehingga adem untuk digunakan dengan motif v-neck.',
            'price' => 21000,
            'modal' => 14000,
            'image' => 'product-13.jpg'
        ]);
        // <!-- 14 -->
        Product::create([
            'event_id' => 4,
            'product_category_id' => 4,
            'name' => 'Kaos Polos',
            'stock' => 142,
            'description' => 'Kaos oblong dibuat dengan bahan yang sangat nyaman dipakai berkegiatan sehari-hari, saat olahraga maupun saat tidur. Dengan bahan halus dan lembut membuat singlet ini nyaman untuk dipakai dan juga tidak menyebabkan iritasi. Berbahan katun, anti gerah, anti lembab sehingga mudah menyerap keringat dan tentunya super nyaman banget dipakai. oblong pria ini dapat digunakan dari segala macam kalangan, dari mulai pria remaja hingga pria dewasa.',
            'price' => 19425,
            'modal' => 12950,
            'image' => 'product-14.jpg'
        ]);

        // <!-- 15 -->
        Product::create([
            'event_id' => 4,
            'product_category_id' => 5,
            'name' => 'Jedai Bangkok',
            'stock' => 831,
            'description' => 'Jepit Badai Thailand, Ukuran panjang 5 cm. Produk random gigi /cakar. Material plastik solid hard tidak mudah pecah. Kualitas nomor satu, Cengkaraman jepitnya kuat dan mengigit rambut. Produk original import dari Bangkok Thailand. Ukuran Reguler bukan Medium atau Mini Poni. Berkualitas Original terjamin tidak tipu tipu. Produk dikirim random gerigi 6 atau 10 sesuai dengan stok.',
            'price' => 24000,
            'modal' => 16000,
            'image' => 'product-15.jpg'
        ]);
    // PRODUCT

    // PRODUCT CATEGORY
        // <!-- 1 -->
        ProductCategory::create([
            'name' => 'Snack Asin'
        ]);

        // <!-- 2 -->
        ProductCategory::create([
            'name' => 'Makanan Berat'
        ]);

        // <!-- 3 -->
        ProductCategory::create([
            'name' => 'Minuman'
        ]);

        // <!-- 4 -->
        ProductCategory::create([
            'name' => 'Baju'
        ]);

        // <!-- 5 -->
        ProductCategory::create([
            'name' => 'Aksesoris'
        ]);

        // <!-- 6 -->
        ProductCategory::create([
            'name' => 'Premium'
        ]);


        // <!-- 7 -->
        ProductCategory::create([
            'name' => 'Sticker'
        ]);

        // <!-- 8 -->
        ProductCategory::create([
            'name' => 'Celana'
        ]);

        // <!-- 9 -->
        ProductCategory::create([
            'name' => 'Snack Manis'
        ]);

        // <!-- 10 -->
        ProductCategory::create([
            'name' => 'Hoodie / Jacket'
        ]);
    // PRODUCT CATEGORY

    // USER
        // <!-- 1 -->
        User::create([
            'username' => 'ardod',
            'email' => 'damarjatiardo@gmail.com',
            'phone' => '083891725775',
            'address' => 'Jl. Hartono Raya No.3, RT.003/RW.006, Tangerang',
            'password' => 'ardo1234'
        ]);

        // <!-- 2 -->
        User::create([
            'username' => 'deniop',
            'email' => 'deniopranatha@gmail.com',
            'phone' => '081232120178',
            'address' => 'Jl. Kartika Plaza, Kuta, Kabupaten Badung',
            'password' => 'denio1234'
        ]);

        // <!-- 3 -->
        User::create([
            'username' => 'nikolp',
            'email' => 'nicolefeliceee@gmail.com',
            'phone' => '081994097967',
            'address' => 'Jl. Kapt. A. Bakaruddin No.88, Kota Jambi',
            'password' => 'nikol1234'
        ]);

        // <!-- 4 -->
        User::create([
            'username' => 'riskyap',
            'email' => 'riskyaputra3004@gmail.com',
            'phone' => '081376092561',
            'address' => 'Jl. M. T. Haryono No.8, Kota Medan',
            'password' => 'riskya1234'
        ]);
    // USER



        // Event::create([
        //     'destination_id' => 2,
        //     'user_id' => 1,
        //     'name' => 'rtb bantu banjir',
        //     'start_date' => '2023-01-01',
        //     'end_date' => '2023-01-01',
        //     'description' => 'tes',
        //     'image' => 'tes.png'
        // ]);

        // Event::create([
        //     'destination_id' => 1,
        //     'user_id' => 1,
        //     'name' => 'bli bantu panti asuhan',
        //     'start_date' => '2023-01-29',
        //     'end_date' => '2023-01-01',
        //     'description' => 'tes',
        //     'image' => 'tes.png'
        // ]);

        // Event::create([
        //     'destination_id' => 1,
        //     'user_id' => 1,
        //     'name' => 'nicole3',
        //     'start_date' => '2023-01-29',
        //     'end_date' => '2023-01-29',
        //     'description' => 'tes',
        //     'image' => 'tes.png'
        // ]);

        // Category::create([
        //     'name' => 'bencana alam'
        // ]);

        // Category::create([
        //     'name' => 'panti asuhan'
        // ]);

        // Destination::create([
        //     'category_id' => 2,
        //     'name' => 'panti asuhan ceria',
        //     'description' => 'tes',
        //     'image' => 'tes.png',
        //     'location' => 'lokasi',
        //     'link' => 'asfdkhhaskdg.com',
        //     'person_count' => 1000,
        //     'contact' => '07858172'
        // ]);

        // Destination::create([
        //     'category_id' => 1,
        //     'name' => 'banjir cianjur',
        //     'description' => 'tes',
        //     'image' => 'tes.png',
        //     'location' => 'lokasi',
        //     'link' => 'asfdkhhaskdg.com',
        //     'person_count' => 50000,
        //     'contact' => '07858172'
        // ]);

        // Destination::create([
        //     'category_id' => 2,
        //     'name' => 'panti asuhan abc',
        //     'description' => 'tes',
        //     'image' => 'tes.png',
        //     'location' => 'lokasi',
        //     'link' => 'asfdkhhaskdg.com',
        //     'person_count' => 1000,
        //     'contact' => '07858172'
        // ]);

        // Destination::create([
        //     'category_id' => 1,
        //     'name' => 'banjir bandang',
        //     'description' => 'tes',
        //     'image' => 'tes.png',
        //     'location' => 'lokasi',
        //     'link' => 'asfdkhhaskdg.com',
        //     'person_count' => 50000,
        //     'contact' => '07858172'
        // ]);

        // PaymentDetail::create([
        //     'payment_header_id' => 1,
        //     'product_id' => 1,
        //     'qty' => 10,
        //     'item_price' => 10000,
        //     'item_modal' => 8000
        // ]);

        // PaymentDetail::create([
        //     'payment_header_id' => 2,
        //     'product_id' => 1,
        //     'qty' => 100,
        //     'item_price' => 10000,
        //     'item_modal' => 8000
        // ]);

        // ProductCategory::create([
        //     'name' => 'pakaian'
        // ]);

        // ProductCategory::create([
        //     'name' => 'makanan'
        // ]);

        // ProductCategory::create([
        //     'name' => 'kebutuhan rumah'
        // ]);

        // ProductCategory::create([
        //     'name' => 'snack'
        // ]);

        // ProductCategory::create([
        //     'name' => 'alat tulis'
        // ]);


    }
}
