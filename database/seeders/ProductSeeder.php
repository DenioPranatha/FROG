<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //PRODUCT
        // <!-- 1 -->
        Product::create([
            'event_id' => 1,
            'category_id' => 1,
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
            'category_id' => 1,
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
            'category_id' => 1,
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
            'category_id' => 1,
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
            'category_id' => 1,
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
            'category_id' => 1,
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
            'category_id' => 1,
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
            'category_id' => 1,
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
            'category_id' => 1,
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
            'category_id' => 2,
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
            'category_id' => 4,
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
            'category_id' => 10,
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
            'category_id' => 4,
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
            'category_id' => 4,
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
            'category_id' => 5,
            'name' => 'Jedai Bangkok',
            'stock' => 831,
            'description' => 'Jepit Badai Thailand, Ukuran panjang 5 cm. Produk random gigi /cakar. Material plastik solid hard tidak mudah pecah. Kualitas nomor satu, Cengkaraman jepitnya kuat dan mengigit rambut. Produk original import dari Bangkok Thailand. Ukuran Reguler bukan Medium atau Mini Poni. Berkualitas Original terjamin tidak tipu tipu. Produk dikirim random gerigi 6 atau 10 sesuai dengan stok.',
            'price' => 24000,
            'modal' => 16000,
            'image' => 'product-15.jpg'
        ]);

        // <!-- // Product 16 -->
        Product::create([
            'event_id' => 1,
            'category_id' => 5,
            'name' => 'Bando Rambut',
            'stock' => 921,
            'description' => 'Bando mutiara korea 1 pcs, bando tidak bergerigi, full mutiara terlihat elegan. Multifungsi, bisa dipakai anak-anak maupun dewas. Bando ini sangat kuat dan tidak mudah patah serta sangat kuat menahan rambut. ',
            'price' => 24000,
            'modal' => 16000,
            'image' => 'product-16.jpg'
        ]);

        // <!-- // Product 17 -->
        Product::create([
            'event_id' => 1,
            'category_id' => 6,
            'name' => 'Netflix Premium',
            'stock' => 1300,
            'description' => 'Sewa Netflix Bulanan Full Garansi! Mau pakai langganan Netflix tapi mahal?? Ga usah khawatir skrg kamu bisa sewa Netflix bulanan yang jauh lebih MURAH. Keuntungan : 1 Profile 1 User dan Live support 24 jam  (berlaku pada 1 hari yang sama). ',
            'price' => 2500,
            'modal' => 1750,
            'image' => 'product-17.jpg'
        ]);

        // <!-- // Product 18 -->
        Product::create([
            'event_id' => 1,
            'category_id' => 6,
            'name' => 'WeTV',
            'stock' => 1400,
            'description' => 'Langganan WeTV Legal dan Bergaransi. Hanya 15000/bulan untuk menikmati aplikasi WeTV dengan nyaman. Silahkan langsung diorder, dan kami akan langsung memprosesnya. Selamat berbelanja !',
            'price' => 15000,
            'modal' => 10500,
            'image' => 'product-18.jpg'
        ]);

        // <!-- // Product 19 -->
        Product::create([
            'event_id' => 1,
            'category_id' => 6,
            'name' => 'HBO Go Premium',
            'stock' => 185,
            'description' => 'Mau nonton HBO GO ? cepat pesan sebelum kehabisan. Akun HBO GO Legal bergaransi dan murah. Kalian pesan langsung kami proses. Ada jaminan keberhasilan akun lohh ! Ayo segera belanja ! ',
            'price' => 11700,
            'modal' => 9000,
            'image' => 'product-19.jpg'
        ]);

        // <!-- // Product 20 -->
        Product::create([
            'event_id' => 1,
            'category_id' => 6,
            'name' => 'IFLIX Premium',
            'stock' => 102,
            'description' => 'Sewa IFLIX Premium VIP, bebas iklan, unduh cepat, akses smua device dan bisa download. Harga terjangkau tanpa ada batasan device apapun. Segera pesan sebelum kehabisan! ',
            'price' => 10000,
            'modal' => 7000,
            'image' => 'product-20.jpg'
        ]);

        // <!-- // Product 21 -->
        Product::create([
            'event_id' => 1,
            'category_id' => 8,
            'name' => 'Boxer Tartan',
            'stock' => 60,
            'description' => 'Celana Ini Berbahankan Kain SEMIWOOL, Motif Kolor  Rib polos Yang lebih Modis ',
            'price' => 11700,
            'modal' => 9000,
            'image' => 'product-21.jpg'
        ]);

        // <!-- // Product 22 -->
        Product::create([
            'event_id' => 5,
            'category_id' => 4,
            'name' => 'Gempi Oversize',
            'stock' => 596,
            'description' => 'Gempi Oversize Colorpop Shirt Bahan Katun Poly Fit L, Detail Ukuran :LINGKAR DADA ; 132CM, PANJANG BAJU : 60CM, PANJANG LENGAN : 54CM',
            'price' => 11700,
            'modal' => 9000,
            'image' => 'product-22.jpg'
        ]);


        // <!-- // Product 23 -->
        Product::create([
            'event_id' => 5,
            'category_id' => 8,
            'name' => 'Vella Blouse',
            'stock' => 900,
            'description' => 'Vella Blouse CRINCLE Bahan PREMIUM CEY AIRFLOW CRINKLE Fit XL, Detail Uku`ran : LINGKAR DADA : 110CM, PANJANG BAJU :  65CM, PANJANG BELAKANG : 77CM, PANJANG LENGAN : 54Cm ',
            'price' => 52500,
            'modal' => 35000,
            'image' => 'product-23.jpg'
        ]);

        // <!-- // Product 24 -->
        Product::create([
            'event_id' => 5,
            'category_id' => 4,
            'name' => 'Aimel Dress',
            'stock' => 380,
            'description' => 'Aimel Dress Aimel Fishtail Maxi Dress Bahan Katun Poly, Detail Ukuran :LINGKAR DADA : 100CM,  PANJANG BAJU : 133CM, PANJANG LENGAN : 58CM ',
            'price' => 52500,
            'modal' => 35000,
            'image' => 'product-24.jpg'
        ]);

        // <!-- // Product 25 -->
        Product::create([
            'event_id' => 5,
            'category_id' => 4,
            'name' => 'Dexy Shirt',
            'stock' => 450,
            'description' => 'Aimel DressAimel Fishtail Maxi Dress Bahan Katun Poly, Detail Ukuran :LINGKAR DADA : 100CM,  PANJANG BAJU : 133CM, PANJANG LENGAN : 58CM',
            'price' => 31500,
            'modal' => 21000,
            'image' => 'product-25.jpg'
        ]);

        // Product 26
        Product::create([
            'event_id' => 5,
            'category_id' => 4,
            'name' => 'Cantika Blouse',
            'stock' => 500,
            'description' => 'Cantika Blouse / Cantika Top Bahan Katun Poly Fit L, Detail Ukuran : LINGKAR DADA : 100CM,  PANJANG BAJU : 65CM ',
            'price' => 40500,
            'modal' => 27000,
            'image' => 'product-26.jpg'
        ]);

        // <!-- // Product 27 -->
        Product::create([
            'event_id' => 6,
            'category_id' => 4,
            'name' => 'Seorina Shirt',
            'stock' => 230,
            'description' => 'Seorina Shirt XXL Bahan Katun Poly Fit L, Detail Ukuran : LINGKAR DADA : 134CM,  PJ DEPAN : 48 CM,  PJ BELAKANG : 63 CM ',
            'price' => 45000,
            'modal' => 30000,
            'image' => 'product-27.jpg'
        ]);

        // <!-- // Product 28 -->
        Product::create([
            'event_id' => 6,
            'category_id' => 4,
            'name' => 'Curly Knit',
            'stock' => 180,
            'description' => 'Curly Inner Knit Longsleeve Bahan Rajut, Detail Ukuran : LINGKAR DADA : 80-120CM,  PANJANG BAJU : 56CM, PANJANG LENGAN : 51CM',
            'price' => 67500,
            'modal' => 45000,
            'image' => 'product-28.jpg'
        ]);

        // <!-- // Product 29 -->
        Product::create([
            'event_id' => 6,
            'category_id' => 4,
            'name' => 'Dysh Oversize',
            'stock' => 670,
            'description' => 'Dysh Oversize Blouse Bahan LADY CRUSH IMPORT, LINGKAR DADA : 100CM, PANJANG BAJU : 47CM, PANJANG LENGAN : 50CM ',
            'price' => 46500,
            'modal' => 31000,
            'image' => 'product-29.jpg'
        ]);

        // <!-- // Product 30 -->
        Product::create([
            'event_id' => 6,
            'category_id' => 4,
            'name' => 'Lolly Shirt',
            'stock' => 410,
            'description' => 'Lolly Oversize Jumbo Shirt Bahan Katun Poly, Detail Ukuran : LINGKAR DADA : 120CM,  PANJANG BAJU : 58CM',
            'price' => 30000,
            'modal' => 20000,
            'image' => 'product-30.jpg'
        ]);

        // <!-- // Product 31 -->
        Product::create([
            'event_id' => 6,
            'category_id' => 9,
            'name' => 'Kripik Beling',
            'stock' => 120,
            'description' => 'Kira keripik kaca terbuat dri olahan singkong, Berat kemasan 200gram',
            'price' => 30000,
            'modal' => 20000,
            'image' => 'product-31.jpg'
        ]);

        // <!-- // Product 32 -->
        Product::create([
            'event_id' => 7,
            'category_id' => 11,
            'name' => 'Kardus',
            'stock' => 300,
            'description' => 'produk tidak hancur dan packing tidak penyok
            Sudah meliputi dus, bubble wrap, dan label fragile',
            'price' => 3750,
            'modal' => 2500,
            'image' => 'product-32.jpg'
        ]);

        // <!-- // Product 33 -->
        Product::create([
            'event_id' => 7,
            'category_id' => 1,
            'name' => 'Keripik ayam',
            'stock' => 400,
            'description' => 'keripsus olahan usus diolah dengan higenis bersih tidak bau. rasanya enak gurih kriuk, berat kemasan 100 gram',
            'price' => 25500,
            'modal' => 17000,
            'image' => 'product-33.jpg'
        ]);

        // <!-- // Product 34 -->
        Product::create([
            'event_id' => 7,
            'category_id' => 9,
            'name' => 'pilus sakura',
            'stock' => 287,
            'description' => 'Pilus ajusan, berat bersih 250 gram',
            'price' => 27000,
            'modal' => 18000,
            'image' => 'product-34.jpg'
        ]);

        // <!-- // Product 35 -->
        Product::create([
            'event_id' => 7,
            'category_id' => 9,
            'name' => 'sale pisang',
            'stock' => 365,
            'description' => 'Terbuat dari olahan pisang, Berat bersih 250 gram',
            'price' => 28500,
            'modal' => 19000,
            'image' => 'product-35.jpg'
        ]);

        // <!-- // Product 36 -->
        Product::create([
            'event_id' => 8,
            'category_id' => 9,
            'name' => 'gurilem',
            'stock' => 421,
            'description' => 'Kerupuk girilem pedas gurih, berat bersih 150gram',
            'price' => 25500,
            'modal' => 17000,
            'image' => 'product-36.jpg'
        ]);

        // <!-- // Product 37 -->
        Product::create([
            'event_id' => 8,
            'category_id' => 1,
            'name' => 'cireng pedas',
            'stock' => 332,
            'description' => 'keripik cireng pedas, rasa cikruh daun jeruk, berat kemasan 250 gram',
            'price' => 27000,
            'modal' => 18000,
            'image' => 'product-37.jpg'
        ]);

        // <!-- // Product 38 -->
        Product::create([
            'event_id' => 8,
            'category_id' => 1,
            'name' => 'basreng stik',
            'stock' => 456,
            'description' => 'basreng stik pedas daun jeruk, berat bersih 250gram',
            'price' => 30000,
            'modal' => 20000,
            'image' => 'product-38.jpg'
        ]);

        // <!-- // Product 39 -->
        Product::create([
            'event_id' => 8,
            'category_id' => 1,
            'name' => 'basreng asin',
            'stock' => 213,
            'description' => 'basreng stik asin gurih, berat bersih 250gram',
            'price' => 30000,
            'modal' => 20000,
            'image' => 'product-39.jpg'
        ]);

        // <!-- // Product 40 -->
        Product::create([
            'event_id' => 9,
            'category_id' => 9,
            'name' => 'keripik pisang',
            'stock' => 307,
            'description' => 'Terbuat dari olahan pisang, Berat bersih 250 gram',
            'price' => 30000,
            'modal' => 20000,
            'image' => 'product-40.jpg'
        ]);

        // <!-- // Product 41 -->
        Product::create([
            'event_id' => 9,
            'category_id' => 11,
            'name' => 'Loose Leaf B5',
            'stock' => 866,
            'description' => 'Kertas Binder Loose leaf B5 by bukuqu - Cream paper, DETAIL PRODUK :Ukuran B5 (18.2 x 25.7 cm), Bahan Bookpaper warna cream, Adem dimata, Super Ringan, 50 lembar, 26 holes, Jarak antar garis 7mm',
            'price' => 22500,
            'modal' => 15000,
            'image' => 'product-41.jpg'
        ]);

        // <!-- // Product 42 -->
        Product::create([
            'event_id' => 9,
            'category_id' => 11,
            'name' => 'Loose Leaf A5',
            'stock' => 112,
            'description' => 'Kertas Natural Bookpaper berwarna cream seperti kertas novel. Bookpaper adalah bahan kertas import dari Finlandia di produksi oleh storaenzo (silahkan googling bookpaper storaenzo). Kertas binder Loose Leaf A5 50 Lembar - Bookpaper 90gsm, DETAIL PRODUK : Ukuran A5 (148 x 210 mm), 50 lembar, 20 holes',
            'price' => 18000,
            'modal' => 12000,
            'image' => 'product-42.jpg'
        ]);

        // <!-- // Product 43 -->
        Product::create([
            'event_id' => 9,
            'category_id' => 11,
            'name' => 'Notebook',
            'stock' => 138,
            'description' => 'Digunakan untuk loose leaf B5, Sudah dapat 2 mika untuk depan+belakang, Binder Clip : 26 holes, Ketebalan: 0.7 mm, Diameter ring: 1.5 cm,',
            'price' => 28500,
            'modal' => 19000,
            'image' => 'product-43.jpg'
        ]);

        // <!-- // Product 44 -->
        Product::create([
            'event_id' => 9,
            'category_id' => 11,
            'name' => 'Ring Binder',
            'stock' => 3168,
            'description' => 'Cocok sekali untuk kamu yang suka DIY, lebih kreatif dan lebih hemat, Spesifikasi :30 Ring maksimal A4, Untuk B5 tinggal potong jadi 26 Ring, Untuk A5 tinggal potong jadi 20 Ring, Untuk lubang 6 juga bisa, Bisa di buka tutup kembali, Pilihan warna banyak, Bahan plastik, Maksimal 40-50 lembar, jika kertas bindernya 80gsm bisa lebih dari 50 lembar , Ring diameter sekitar 17 mm',
            'price' => 9000,
            'modal' => 6000,
            'image' => 'product-44.jpg'
        ]);

        // <!-- // Product 45 -->
        Product::create([
            'event_id' => 9,
            'category_id' => 11,
            'name' => 'Bukuqu',
            'stock' => 2034,
            'description' => 'Cocok sekali untuk kamu yang suka DIY, lebih kreatif dan lebih hemat, Spesifikasi : 30 Ring maksimal A4 , Untuk B5 tinggal potong jadi 26 Ring, Untuk A5 tinggal potong jadi 20 Ring, Untuk lubang 6 juga bisa, Bisa di buka tutup kembali, Pilihan warna banyak, Bahan plastik, Maksimal 40-50 lembar, jika kertas bindernya 80gsm bisa lebih dari 50 lembar, Ring diameter sekitar 17 mm',
            'price' => 75000,
            'modal' => 50000,
            'image' => 'product-45.jpg'
        ]);

        // <!-- // Product 46 -->
        Product::create([
            'event_id' => 10,
            'category_id' => 11,
            'name' => 'Kertas Binder',
            'stock' => 936,
            'description' => 'Kertas Binder Loose leaf B5 by bukuqu, DETAIL PRODUK :Ukuran B5 (18,2 x 25,7 cm), 100 gsm, Kertas Putih, 50 lembar, 26 lubang, untuk varian garis 6mm',
            'price' => 12000,
            'modal' => 8000,
            'image' => 'product-46.jpg'
        ]);

        // <!-- // Product 47 -->
        Product::create([
            'event_id' => 10,
            'category_id' => 7,
            'name' => 'Sticker jurnal',
            'stock' => 83,
            'description' => 'Stiker Journal tema Galaxy, Sticker Journal, Size: Below 44mm*44mm, Bahan : Stiker, Perkiraan isi : 45-50 pcs, Kegunaan : Journal, diary, planner, scrapbook, DIY Craft',
            'price' => 21000,
            'modal' => 14000,
            'image' => 'product-47.jpg'
        ]);

        // <!-- // Product 48 -->
        Product::create([
            'event_id' => 10,
            'category_id' => 11,
            'name' => 'Planner Jurnal',
            'stock' => 474,
            'description' => 'Basic notebook dengan pilihan warna yang beragam. Kini journaling tidak perlu lagi mahal. Basic notebook ini adalah paket lengkap solusi dari berbagai kendala kamu ketika ingin mulai journaling dimana biasanya notebook journaling itu mahal, tidak fountain pen friendly, pilihan warnanya itu-itu aja. Yuk segera coba dan miliki notebooknya.',
            'price' => 60000,
            'modal' => 40000,
            'image' => 'product-48.jpg'
        ]);

        // <!-- // Product 49 -->
        Product::create([
            'event_id' => 10,
            'category_id' => 7,
            'name' => 'Sticker bullet',
            'stock' => 1499,
            'description' => 'Stiker Journal tema Angkasa, Sticker Journal, Size: Below 44mm*44mm, Bahan : Stiker, Perkiraan isi : 45-50 pcs, Kegunaan : Journal, diary, planner, scrapbook, DIY Craft',
            'price' => 15000,
            'modal' => 10000,
            'image' => 'product-49.jpg'
        ]);

        // <!-- // Product 50 -->
        Product::create([
            'event_id' => 10,
            'category_id' => 11,
            'name' => 'Binder HVS',
            'stock' => 762,
            'description' => 'Kertas Binder Loose leaf by bukuqu, DETAIL PRODUK : Ukuran A5 (148 x 210 mm), 50 lembar, 20 holes, kertas 100 gsm',
            'price' => 15000,
            'modal' => 10000,
            'image' => 'product-50.jpg'
        ]);

        // <!-- // Product 51 -->
        Product::create([
            'event_id' => 11,
            'category_id' => 4,
            'name' => 'Baju Atasan',
            'stock' => 400,
            'description' => 'MOTIF SABLON KUALITAS PREMIUM,TIDAK LENGKET DAN TIDAK LUNTUR SAAT DI CUCI, BAJU GIRLS LENGAN PANJANG MASA KINI,KEREN DAN TERLARIS, PRODUK PRODUKSI KOMPEKSI SENDIRI,JAHITAN SANGAT RAPIH DAN HALUS, NYAMAN UNTUK DI GUNAKAN, GOOD QUALITY, FASHIONABLE',
            'price' => 57000,
            'modal' => 38000,
            'image' => 'product-51.jpg'
        ]);

        // <!-- // Product 52 -->
        Product::create([
            'event_id' => 11,
            'category_id' => 4,
            'name' => 'Baju Trendy',
            'stock' => 500,
            'description' => 'BAJU LOGO NY GIRL, DIDESIGN MENGGUNAKAN BAHAN MATT BABYTERRY, MOTIF BORDIR KEREN KUALITAS PREMIUM, MODEL LOGO KEREN DAN TRENDY MASA KINI, BADAN DAN LENGAN PAKAI MANSET BAHAN RIB, GOOD QUALITY, FASHIONABLE, BAHAN LEMBUT,ADEM,TEBAL DAN NYAMAN DIPAKAI',
            'price' => 55000,
            'modal' => 37000,
            'image' => 'product-52.jpg'
        ]);

        // <!-- // Product 53 -->
        Product::create([
            'event_id' => 11,
            'category_id' => 4,
            'name' => 'Baju Atasan',
            'stock' => 128,
            'description' => 'BAHAN MATT BABYTERRY LEMBUT DAN TEBAL, MOTIF SABLON KUALITAS PREMIUM,TIDAK LENGKET DAN TIDAK MUDAH LUNTUR, BAJU ATASAN CEWEK/COWOK MASA KINI DAN TERLARIS, PRODUK PRODUKSI KOMPEKSI SENDIRI,JAHITAN SANGAT RAPIH DAN HALUS, JAHITAN MANGKOK DAN RANTAI, GOOD QUALITY, FASHIONABLE',
            'price' => 57000,
            'modal' => 38000,
            'image' => 'product-53.jpg'
        ]);

        // <!-- // Product 54 -->
        Product::create([
            'event_id' => 11,
            'category_id' => 4,
            'name' => 'Baju gold Rush',
            'stock' => 350,
            'description' => 'BAHAN BABYTERRY LEMBUT,HALUS , BAHAN TEBAL DAN NYAMAN SAAT DI PAKAI, MOTIF SABLON KUALITAS PREMIUM, JAHITAN RAPIH DAN TIDAK LUNTUR, PRODUK SESUAI DI FOTO, MODEL KEREN DAN TRENDY MASA KINI, FASHIONABLE, GOOD QUALITY',
            'price' => 52500,
            'modal' => 35000,
            'image' => 'product-54.jpg'
        ]);

        // <!-- // Product 55 -->
        Product::create([
            'event_id' => 11,
            'category_id' => 4,
            'name' => 'Baju NYC',
            'stock' => 340,
            'description' => 'BAJU ATASAN CEWEK LENGAN PANJANG MASA KINI, BAHAN MATT BABYTERRY LEMBUT DAN TEBAL, MOTIF SABLON KUALITAS PREMIUM, TIDAK LENGKET DAN TIDAK MUDAH LUNTUR, JAHITAN SANGAT RAPIH DAN HALUS, BAHAN LEMBUT,ADEM DAN NYAMAN UNTUK DI GUNAKAN, GOOD QUALITY, FASHIONABLE',
            'price' => 64500,
            'modal' => 43000,
            'image' => 'product-55.jpg'
        ]);

        // <!-- // Product 56 -->
        Product::create([
            'event_id' => 12,
            'category_id' => 4,
            'name' => 'Baju polos',
            'stock' => 126,
            'description' => 'BAJU TRENDY POLOS, PRODUKSI KONVEKSI SENDIRI DENGAN KUALITAS TERJAGA, DIDESIGN MENGGUNAKAN BAHAN MATT BABYTERRY, MOTIF POLOS TRENDY TERBARU, JAHITAN RAPI DAN HALUS, GOOD QUALITY, FASHIONABLE, BAHAN TEBAL-HALUS DAN NAYAMA SAAT DIPAKAI',
            'price' => 55000,
            'modal' => 37000,
            'image' => 'product-56.jpg'
        ]);

        // <!-- // Product 57 -->
        Product::create([
            'event_id' => 12,
            'category_id' => 4,
            'name' => 'Baju ZLQ',
            'stock' => 212,
            'description' => 'BAHAN MATT BABYTERRY LEMBUT, MOTIF SABLON KUALITAS PREMIUM, GOOD QUALITY, LENGAN DAN BADAN ADA BAN RIB, FASHIONABLE, BAHAN LEMBUT,ADEM DAN NYAMAN DIPAKAI',
            'price' => 67500,
            'modal' => 45000,
            'image' => 'product-57.jpg'
        ]);

        // <!-- // Product 58 -->
        Product::create([
            'event_id' => 12,
            'category_id' => 4,
            'name' => 'Baju LVTT',
            'stock' => 225,
            'description' => 'BAHAN MATT BABYTERRY LEMBUT, MOTIF SABLON KUALITAS PREMIUM, GOOD QUALITY, LENGAN DAN BADAN ADA BAN RIB, FASHIONABLE, BAHAN LEMBUT,ADEM DAN NYAMAN DIPAKAI',
            'price' => 57000,
            'modal' => 38000,
            'image' => 'product-58.jpg'
        ]);

        // <!-- // Product 59 -->
        Product::create([
            'event_id' => 12,
            'category_id' => 4,
            'name' => 'Baju Tussy',
            'stock' => 340,
            'description' => 'BAHAN MATT BABYTERRY LEMBUT, MOTIF SABLON KUALITAS PREMIUM, GOOD QUALITY, LENGAN DAN BADAN ADA BAN RIB, FASHIONABLE, BAHAN LEMBUT,ADEM DAN NYAMAN DIPAKAI',
            'price' => 60000,
            'modal' => 40000,
            'image' => 'product-59.jpg'
        ]);

        // <!-- // Product 60 -->
        Product::create([
            'event_id' => 12,
            'category_id' => 4,
            'name' => 'Baju Behappy',
            'stock' => 123,
            'description' => 'BAJU TRENDY BEHAPPY, PRODUKSI KONVEKSI SENDIRI DENGAN KUALITAS TERJAGA, DIDESIGN MENGGUNAKAN BAHAN MATT BABYTERRY, MOTIF SABLON KUALITAS PREMIUM, MODEL KEREN MASA KINI, JAHITAN RAPI DAN HALUS, GOOD QUALITY, BAHAN TEBAL-HALUS DAN NYAMAN SAAT DIPAKAI',
            'price' => 63000,
            'modal' => 42000,
            'image' => 'product-60.jpg'
        ]);

        // <!-- // Product 61 -->
        Product::create([
            'event_id' => 12,
            'category_id' => 6,
            'name' => 'Kinemaster',
            'stock' => 300,
            'description' => '100% guaranteed stable working and safe with no virus, Detailed and easy instructions given for install the apps and start use, If not working else replace product or full refund, High Quality Apps with no bugs and smooth to use',
            'price' => 25500,
            'modal' => 17000,
            'image' => 'product-61.jpg'
        ]);

        // <!-- // Product 62 -->
        Product::create([
            'event_id' => 13,
            'category_id' => 6,
            'name' => 'Tenorshare',
            'stock' => 200,
            'description' => '100% guaranteed stable working and safe with no virus, Detailed and easy instructions given for install the apps and start use, If not working else replace product or full refund, High Quality Apps with no bugs and smooth to use',
            'price' => 75000,
            'modal' => 50000,
            'image' => 'product-62.jpg'
        ]);

        // <!-- // Product 63 -->
        Product::create([
            'event_id' => 13,
            'category_id' => 6,
            'name' => 'ToonMe',
            'stock' => 320,
            'description' => '100% guaranteed stable working and safe with no virus, Detailed and easy instructions given for install the apps and start use, If not working else replace product or full refund, High Quality Apps with no bugs and smooth to use',
            'price' => 13500,
            'modal' => 9000,
            'image' => 'product-63.jpg'
        ]);

        // <!-- // Product 64 -->
        Product::create([
            'event_id' => 13,
            'category_id' => 6,
            'name' => 'Spotify',
            'stock' => 120,
            'description' => '100% guaranteed stable working and safe with no virus, Detailed and easy instructions given for install the apps and start use, If not working else replace product or full refund, High Quality Apps with no bugs and smooth to use',
            'price' => 30000,
            'modal' => 20000,
            'image' => 'product-64.jpg'
        ]);

        // <!-- // Product 65 -->
        Product::create([
            'event_id' => 13,
            'category_id' => 6,
            'name' => 'Adobe XD',
            'stock' => 140,
            'description' => '100% guaranteed stable working and safe with no virus, Detailed and easy instructions given for install the apps and start use, If not working else replace product or full refund, High Quality Apps with no bugs and smooth to use',
            'price' => 21000,
            'modal' => 14000,
            'image' => 'product-65.jpg'
        ]);

        // <!-- // Product 66 -->
        Product::create([
            'event_id' => 13,
            'category_id' => 6,
            'name' => 'The Sims',
            'stock' => 100,
            'description' => '100% guaranteed stable working and safe with no virus, Detailed and easy instructions given for install the apps and start use, If not working else replace product or full refund, High Quality Apps with no bugs and smooth to use',
            'price' => 21000,
            'modal' => 14000,
            'image' => 'product-66.jpg'
        ]);

        // <!-- // Product 67 -->
        Product::create([
            'event_id' => 14,
            'category_id' => 6,
            'name' => 'Inshot',
            'stock' => 80,
            'description' => '100% guaranteed stable working and safe with no virus, Detailed and easy instructions given for install the apps and start use, If not working else replace product or full refund, High Quality Apps with no bugs and smooth to use',
            'price' => 37500,
            'modal' => 25000,
            'image' => 'product-67.jpg'
        ]);

        // <!-- // Product 68 -->
        Product::create([
            'event_id' => 14,
            'category_id' => 6,
            'name' => 'InDesign',
            'stock' => 60,
            'description' => '100% guaranteed stable working and safe with no virus, Detailed and easy instructions given for install the apps and start use, If not working else replace product or full refund, High Quality Apps with no bugs and smooth to use',
            'price' => 30000,
            'modal' => 20000,
            'image' => 'product-68.jpg'
        ]);

        // <!-- // Product 69 -->
        Product::create([
            'event_id' => 14,
            'category_id' => 6,
            'name' => 'Premiere ',
            'stock' => 200,
            'description' => '100% guaranteed stable working and safe with no virus, Detailed and easy instructions given for install the apps and start use, If not working else replace product or full refund, High Quality Apps with no bugs and smooth to use',
            'price' => 21000,
            'modal' => 14000,
            'image' => 'product-69.jpg'
        ]);

        // <!-- // Product 70 -->
        Product::create([
            'event_id' => 14,
            'category_id' => 6,
            'name' => 'Capcut',
            'stock' => 123,
            'description' => '100% guaranteed stable working and safe with no virus, Detailed and easy instructions given for install the apps and start use, If not working else replace product or full refund, High Quality Apps with no bugs and smooth to use',
            'price' => 28500,
            'modal' => 19000,
            'image' => 'product-70.jpg'
        ]);

        // <!-- // Product 71 -->
        Product::create([
            'event_id' => 14,
            'category_id' => 8,
            'name' => 'Celana Joger',
            'stock' => 1000,
            'description' => 'detail produk :  bahan flecee tebal , menggunakan karet pinggang dan tali menggunakan di pinggang , jahitan rapih standar distro ,bagian pinggang menggunakan rib dan menggunakan karet 4cm super elastis lengkap dengan tali',
            'price' => 97500,
            'modal' => 65000,
            'image' => 'product-71.jpg'
        ]);

        // <!-- // Product 72 -->
        Product::create([
            'event_id' => 15,
            'category_id' => 8,
            'name' => 'Celana Joger',
            'stock' => 800,
            'description' => 'selamat datang dan belanja di toko kami, Spesifikasi Produk : , Cocok Untuk Pria dan Wanita , Bahan : Baby Terry  gramasi 240, Mengggunakan RIBKaret pada pinggang dan bagian bawah kaki, Menggunakan Tali Pinggang. Cara Perawatan :  Gunakan detergen yang lembut , Jangan gunakan pemutih , Setrika suhu rendah',
            'price' => 36000,
            'modal' => 24000,
            'image' => 'product-72.jpg'
        ]);

        // <!-- // Product 73 -->
        Product::create([
            'event_id' => 15,
            'category_id' => 8,
            'name' => 'Celana Training',
            'stock' => 765,
            'description' => 'selamat datang dan belanja di toko kami, Spesifikasi Produk : , Cocok Untuk Pria dan Wanita , Bahan : Baby Terry  gramasi 240, Mengggunakan RIBKaret pada pinggang dan bagian bawah kaki, Menggunakan Tali Pinggang. Cara Perawatan :  Gunakan detergen yang lembut , Jangan gunakan pemutih , Setrika suhu rendah',
            'price' => 60000,
            'modal' => 40000,
            'image' => 'product-73.jpg'
        ]);

        // <!-- // Product 74 -->
        Product::create([
            'event_id' => 15,
            'category_id' => 8,
            'name' => 'Celana Sport',
            'stock' => 450,
            'description' => 'Spesifikasi Produk : Cocok Untuk Pria dan Wanita , Bahan : Baby Terry  gramasi 240, Mengggunakan RIBKaret pada pinggang dan bagian bawah kaki, Menggunakan Tali Pinggang. Cara Perawatan :  Gunakan detergen yang lembut , Jangan gunakan pemutih , Setrika suhu rendah',
            'price' => 52500,
            'modal' => 35000,
            'image' => 'product-74.jpg'
        ]);

        // <!-- // Product 75 -->
        Product::create([
            'event_id' => 15,
            'category_id' => 8,
            'name' => 'Joger Slimpit',
            'stock' => 320,
            'description' => 'selamat datang dan belanja di toko kami, Spesifikasi Produk : , Cocok Untuk Pria dan Wanita , Bahan : Baby Terry  gramasi 240, Mengggunakan RIBKaret pada pinggang dan bagian bawah kaki, Menggunakan Tali Pinggang. Cara Perawatan :  Gunakan detergen yang lembut , Jangan gunakan pemutih , Setrika suhu rendah',
            'price' => 75000,
            'modal' => 50000,
            'image' => 'product-75.jpg'
        ]);

        // <!-- // Product 76 -->
        Product::create([
            'event_id' => 15,
            'category_id' => 8,
            'name' => 'Celana Micy',
            'stock' => 432,
            'description' => 'selamat datang dan belanja di toko kami, Spesifikasi Produk : , Cocok Untuk Pria dan Wanita , Bahan : Baby Terry  gramasi 240, Mengggunakan RIBKaret pada pinggang dan bagian bawah kaki, Menggunakan Tali Pinggang. Cara Perawatan :  Gunakan detergen yang lembut , Jangan gunakan pemutih , Setrika suhu rendah',
            'price' => 108000,
            'modal' => 72000,
            'image' => 'product-76.jpg'
        ]);

        // <!-- // Product 77 -->
        Product::create([
            'event_id' => 16,
            'category_id' => 8,
            'name' => 'Celana 2Style',
            'stock' => 127,
            'description' => 'selamat datang dan belanja di toko kami, Spesifikasi Produk : , Cocok Untuk Pria dan Wanita , Bahan : Baby Terry  gramasi 240, Mengggunakan RIBKaret pada pinggang dan bagian bawah kaki, Menggunakan Tali Pinggang. Cara Perawatan :  Gunakan detergen yang lembut , Jangan gunakan pemutih , Setrika suhu rendah',
            'price' => 81000,
            'modal' => 54000,
            'image' => 'product-77.jpg'
        ]);

        // <!-- // Product 78 -->
        Product::create([
            'event_id' => 16,
            'category_id' => 8,
            'name' => 'Joger Polos',
            'stock' => 654,
            'description' => 'selamat datang dan belanja di toko kami, Spesifikasi Produk : , Cocok Untuk Pria dan Wanita , Bahan : Baby Terry  gramasi 240, Mengggunakan RIBKaret pada pinggang dan bagian bawah kaki, Menggunakan Tali Pinggang. Cara Perawatan :  Gunakan detergen yang lembut , Jangan gunakan pemutih , Setrika suhu rendah',
            'price' => 69000,
            'modal' => 46000,
            'image' => 'product-78.jpg'
        ]);

        // <!-- // Product 79 -->
        Product::create([
            'event_id' => 16,
            'category_id' => 8,
            'name' => 'Joger Pants',
            'stock' => 321,
            'description' => 'selamat datang dan belanja di toko kami, Spesifikasi Produk : , Cocok Untuk Pria dan Wanita , Bahan : Baby Terry  gramasi 240, Mengggunakan RIBKaret pada pinggang dan bagian bawah kaki, Menggunakan Tali Pinggang. Cara Perawatan :  Gunakan detergen yang lembut , Jangan gunakan pemutih , Setrika suhu rendah',
            'price' => 42000,
            'modal' => 28000,
            'image' => 'product-79.jpg'
        ]);

        // <!-- // Product 80 -->
        Product::create([
            'event_id' => 16,
            'category_id' => 8,
            'name' => 'Celana Cargo',
            'stock' => 120,
            'description' => 'selamat datang dan belanja di toko kami, Spesifikasi Produk : , Cocok Untuk Pria dan Wanita , Bahan : Baby Terry  gramasi 240, Mengggunakan RIBKaret pada pinggang dan bagian bawah kaki, Menggunakan Tali Pinggang. Cara Perawatan :  Gunakan detergen yang lembut , Jangan gunakan pemutih , Setrika suhu rendah',
            'price' => 88500,
            'modal' => 59000,
            'image' => 'product-80.jpg'
        ]);

        // <!-- // Product 81 -->
        Product::create([
            'event_id' => 16,
            'category_id' => 4,
            'name' => 'Baju NYK',
            'stock' => 1000,
            'description' => 'BAHAN MATT BABYTERRY, , MOTIF BORDIR PREMIUM, BAHAN LEMBUT,HALUS DAN NYAMAN DIPAKAI',
            'price' => 48000,
            'modal' => 32000,
            'image' => 'product-81.jpg'
        ]);

        // <!-- // Product 82 -->
        Product::create([
            'event_id' => 17,
            'category_id' => 4,
            'name' => 'Kemeja Zerones',
            'stock' => 500,
            'description' => 'BAHAN JEANS TEBAL LEMBUT, SATU UKURAN FIT M/L, MOTIF WASH ORIGINAL KEREN, BAHAN TEBAL,LEMBUT DAN NYAMAN DIPAKAI, KANTONG AKTIF DEPAN KIRI KANAN',
            'price' => 82500,
            'modal' => 55000,
            'image' => 'product-82.jpg'
        ]);

        // <!-- // Product 83 -->
        Product::create([
            'event_id' => 17,
            'category_id' => 4,
            'name' => 'Kaos CNN',
            'stock' => 348,
            'description' => 'BAHAN MATT BABYTERRY, , MOTIF BORDIR PREMIUM, BAHAN LEMBUT,HALUS DAN NYAMAN DIPAKAI',
            'price' => 60000,
            'modal' => 40000,
            'image' => 'product-83.jpg'
        ]);

        // <!-- // Product 84 -->
        Product::create([
            'event_id' => 17,
            'category_id' => 4,
            'name' => 'Baju Hongster',
            'stock' => 423,
            'description' => 'BAHAN MATT BABYTERRY, , MOTIF BORDIR PREMIUM, BAHAN LEMBUT,HALUS DAN NYAMAN DIPAKAI',
            'price' => 54000,
            'modal' => 36000,
            'image' => 'product-84.jpg'
        ]);

        // <!-- // Product 85 -->
        Product::create([
            'event_id' => 17,
            'category_id' => 4,
            'name' => 'Baju Vogue',
            'stock' => 128,
            'description' => 'BAHAN MATT BABYTERRY, , MOTIF BORDIR PREMIUM, BAHAN LEMBUT,HALUS DAN NYAMAN DIPAKAI',
            'price' => 58500,
            'modal' => 39000,
            'image' => 'product-85.jpg'
        ]);

        // <!-- // Product 86 -->
        Product::create([
            'event_id' => 17,
            'category_id' => 4,
            'name' => 'Baju Pirate',
            'stock' => 678,
            'description' => 'BAHAN MATT BABYTERRY, , MOTIF BORDIR PREMIUM, BAHAN LEMBUT,HALUS DAN NYAMAN DIPAKAI',
            'price' => 55500,
            'modal' => 37000,
            'image' => 'product-86.jpg'
        ]);

        // <!-- // Product 87 -->
        Product::create([
            'event_id' => 18,
            'category_id' => 4,
            'name' => 'Baju Socuper',
            'stock' => 432,
            'description' => 'BAHAN MATT BABYTERRY, , MOTIF BORDIR PREMIUM, BAHAN LEMBUT,HALUS DAN NYAMAN DIPAKAI',
            'price' => 57000,
            'modal' => 38000,
            'image' => 'product-87.jpg'
        ]);

        // <!-- // Product 88 -->
        Product::create([
            'event_id' => 18,
            'category_id' => 4,
            'name' => 'Kaos Odega',
            'stock' => 215,
            'description' => 'BAHAN MATT BABYTERRY, , MOTIF BORDIR PREMIUM, BAHAN LEMBUT,HALUS DAN NYAMAN DIPAKAI',
            'price' => 57000,
            'modal' => 38000,
            'image' => 'product-88.jpg'
        ]);

        // <!-- // Product 89 -->
        Product::create([
            'event_id' => 18,
            'category_id' => 4,
            'name' => 'Kaos Great',
            'stock' => 222,
            'description' => 'BAHAN MATT BABYTERRY, , MOTIF BORDIR PREMIUM, BAHAN LEMBUT,HALUS DAN NYAMAN DIPAKAI',
            'price' => 60000,
            'modal' => 40000,
            'image' => 'product-89.jpg'
        ]);

        // <!-- // Product 90 -->
        Product::create([
            'event_id' => 18,
            'category_id' => 4,
            'name' => 'Baju Wizz',
            'stock' => 125,
            'description' => 'BAHAN MATT BABYTERRY, , MOTIF BORDIR PREMIUM, BAHAN LEMBUT,HALUS DAN NYAMAN DIPAKAI',
            'price' => 63000,
            'modal' => 42000,
            'image' => 'product-90.jpg'
        ]);

        // <!-- // Product 91 -->
        Product::create([
            'event_id' => 19,
            'category_id' => 1,
            'name' => 'Keripik Kaca',
            'stock' => 123,
            'description' => 'FREE PACKING KARDUS,BUBBLE WARP ( UNTUK BARANG YANG RAPUH ) DAN STIKER/LAKBAN FRAGILE , READY STOCK NO OPEN PO, KEMASAN PLASTIK BENING POLOS TEBAL, KUALITAS PRODUK PREMIUM, HALAL 1000 %, EXP DIJAMIN LAMA (KARENA SETIAP HARI PRODUK SELALU BARU), FOTO YANG DIGUNAKAN ADALAH FOTO ASLI BUKAN DARI GOOGLE,SELALU DI CEKING SEBELUM DIKIRIM',
            'price' => 15000,
            'modal' => 10000,
            'image' => 'product-91.jpg'
        ]);

        // <!-- // Product 92 -->
        Product::create([
            'event_id' => 19,
            'category_id' => 1,
            'name' => 'Snack gurih',
            'stock' => 143,
            'description' => 'FREE PACKING KARDUS,BUBBLE WARP ( UNTUK BARANG YANG RAPUH ) DAN STIKER/LAKBAN FRAGILE , READY STOCK NO OPEN PO, KEMASAN PLASTIK BENING POLOS TEBAL, KUALITAS PRODUK PREMIUM, HALAL 1000 %, EXP DIJAMIN LAMA (KARENA SETIAP HARI PRODUK SELALU BARU), FOTO YANG DIGUNAKAN ADALAH FOTO ASLI BUKAN DARI GOOGLE,SELALU DI CEKING SEBELUM DIKIRIM',
            'price' => 15000,
            'modal' => 10000,
            'image' => 'product-92.jpg'
        ]);

        // <!-- // Product 93 -->
        Product::create([
            'event_id' => 19,
            'category_id' => 9,
            'name' => 'snack manis',
            'stock' => 156,
            'description' => 'FREE PACKING KARDUS,BUBBLE WARP ( UNTUK BARANG YANG RAPUH ) DAN STIKER/LAKBAN FRAGILE , READY STOCK NO OPEN PO, KEMASAN PLASTIK BENING POLOS TEBAL, KUALITAS PRODUK PREMIUM, HALAL 1000 %, EXP DIJAMIN LAMA (KARENA SETIAP HARI PRODUK SELALU BARU), FOTO YANG DIGUNAKAN ADALAH FOTO ASLI BUKAN DARI GOOGLE,SELALU DI CEKING SEBELUM DIKIRIM',
            'price' => 15000,
            'modal' => 10000,
            'image' => 'product-93.jpg'
        ]);

        // <!-- // Product 94 -->
        Product::create([
            'event_id' => 19,
            'category_id' => 1,
            'name' => 'snack pedas',
            'stock' => 187,
            'description' => 'FREE PACKING KARDUS,BUBBLE WARP ( UNTUK BARANG YANG RAPUH ) DAN STIKER/LAKBAN FRAGILE , READY STOCK NO OPEN PO, KEMASAN PLASTIK BENING POLOS TEBAL, KUALITAS PRODUK PREMIUM, HALAL 1000 %, EXP DIJAMIN LAMA (KARENA SETIAP HARI PRODUK SELALU BARU), FOTO YANG DIGUNAKAN ADALAH FOTO ASLI BUKAN DARI GOOGLE,SELALU DI CEKING SEBELUM DIKIRIM',
            'price' => 120000,
            'modal' => 80000,
            'image' => 'product-94.jpg'
        ]);

        // <!-- // Product 95 -->
        Product::create([
            'event_id' => 19,
            'category_id' => 9,
            'name' => 'kue sus',
            'stock' => 190,
            'description' => 'FREE PACKING KARDUS,BUBBLE WARP ( UNTUK BARANG YANG RAPUH ) DAN STIKER/LAKBAN FRAGILE , READY STOCK NO OPEN PO, KEMASAN PLASTIK BENING POLOS TEBAL, KUALITAS PRODUK PREMIUM, HALAL 1000 %, EXP DIJAMIN LAMA (KARENA SETIAP HARI PRODUK SELALU BARU), FOTO YANG DIGUNAKAN ADALAH FOTO ASLI BUKAN DARI GOOGLE,SELALU DI CEKING SEBELUM DIKIRIM',
            'price' => 18000,
            'modal' => 12000,
            'image' => 'product-95.jpg'
        ]);

        // <!-- // Product 96 -->
        Product::create([
            'event_id' => 19,
            'category_id' => 9,
            'name' => 'snack lengkap',
            'stock' => 100,
            'description' => 'FREE PACKING KARDUS,BUBBLE WARP ( UNTUK BARANG YANG RAPUH ) DAN STIKER/LAKBAN FRAGILE , READY STOCK NO OPEN PO, KEMASAN PLASTIK BENING POLOS TEBAL, KUALITAS PRODUK PREMIUM, HALAL 1000 %, EXP DIJAMIN LAMA (KARENA SETIAP HARI PRODUK SELALU BARU), FOTO YANG DIGUNAKAN ADALAH FOTO ASLI BUKAN DARI GOOGLE,SELALU DI CEKING SEBELUM DIKIRIM',
            'price' => 12000,
            'modal' => 8000,
            'image' => 'product-96.jpg'
        ]);

        // <!-- // Product 97 -->
        Product::create([
            'event_id' => 20,
            'category_id' => 1,
            'name' => 'stik basreng',
            'stock' => 80,
            'description' => 'FREE PACKING KARDUS,BUBBLE WARP ( UNTUK BARANG YANG RAPUH ) DAN STIKER/LAKBAN FRAGILE , READY STOCK NO OPEN PO, KEMASAN PLASTIK BENING POLOS TEBAL, KUALITAS PRODUK PREMIUM, HALAL 1000 %, EXP DIJAMIN LAMA (KARENA SETIAP HARI PRODUK SELALU BARU), FOTO YANG DIGUNAKAN ADALAH FOTO ASLI BUKAN DARI GOOGLE,SELALU DI CEKING SEBELUM DIKIRIM',
            'price' => 15000,
            'modal' => 10000,
            'image' => 'product-97.jpg'
        ]);

        // <!-- // Product 98 -->
        Product::create([
            'event_id' => 20,
            'category_id' => 1,
            'name' => 'snack asin',
            'stock' => 212,
            'description' => 'FREE PACKING KARDUS,BUBBLE WARP ( UNTUK BARANG YANG RAPUH ) DAN STIKER/LAKBAN FRAGILE , READY STOCK NO OPEN PO, KEMASAN PLASTIK BENING POLOS TEBAL, KUALITAS PRODUK PREMIUM, HALAL 1000 %, EXP DIJAMIN LAMA (KARENA SETIAP HARI PRODUK SELALU BARU), FOTO YANG DIGUNAKAN ADALAH FOTO ASLI BUKAN DARI GOOGLE,SELALU DI CEKING SEBELUM DIKIRIM',
            'price' => 22500,
            'modal' => 15000,
            'image' => 'product-98.jpg'
        ]);

        // <!-- // Product 99 -->
        Product::create([
            'event_id' => 20,
            'category_id' => 1,
            'name' => 'snack pedas',
            'stock' => 156,
            'description' => 'FREE PACKING KARDUS,BUBBLE WARP ( UNTUK BARANG YANG RAPUH ) DAN STIKER/LAKBAN FRAGILE , READY STOCK NO OPEN PO, KEMASAN PLASTIK BENING POLOS TEBAL, KUALITAS PRODUK PREMIUM, HALAL 1000 %, EXP DIJAMIN LAMA (KARENA SETIAP HARI PRODUK SELALU BARU), FOTO YANG DIGUNAKAN ADALAH FOTO ASLI BUKAN DARI GOOGLE,SELALU DI CEKING SEBELUM DIKIRIM',
            'price' => 22500,
            'modal' => 15000,
            'image' => 'product-99.jpg'
        ]);

        // <!-- // Product 100 -->
        Product::create([
            'event_id' => 20,
            'category_id' => 1,
            'name' => 'snack pedas',
            'stock' => 178,
            'description' => 'FREE PACKING KARDUS,BUBBLE WARP ( UNTUK BARANG YANG RAPUH ) DAN STIKER/LAKBAN FRAGILE , READY STOCK NO OPEN PO, KEMASAN PLASTIK BENING POLOS TEBAL, KUALITAS PRODUK PREMIUM, HALAL 1000 %, EXP DIJAMIN LAMA (KARENA SETIAP HARI PRODUK SELALU BARU), FOTO YANG DIGUNAKAN ADALAH FOTO ASLI BUKAN DARI GOOGLE,SELALU DI CEKING SEBELUM DIKIRIM',
            'price' => 18000,
            'modal' => 12000,
            'image' => 'product-100.jpg'
        ]);

        // <!-- // Product 101 -->
        Product::create([
            'event_id' => 21,
            'category_id' => 11,
            'name' => 'plastik roll',
            'stock' => 960,
            'description' => 'Dipergunakan untuk tempat umum, seperti restoran, keluarga, hotel-hotelan. plastik sampah gulungan point break, cocok dalam rumah tangga, lebih praktis dan lebih bersih. Kantong plastik sampah point break bisa digunakan untuk penyimpanan sampah dan juga bisa digunakan untuk kantong plastik kemasan biasa.',
            'price' => 18000,
            'modal' => 12000,
            'image' => 'product-101.jpg'
        ]);

        // <!-- // Product 102 -->
        Product::create([
            'event_id' => 21,
            'category_id' => 11,
            'name' => 'Tempelan',
            'stock' => 1000,
            'description' => 'Nama: Tempelan Kuat Tempelan Tanpa Paku & Bor u/ Rak Sabun Kamar Mandi dll',
            'price' => 4500,
            'modal' => 3000,
            'image' => 'product-102.jpg'
        ]);

        // <!-- // Product 103 -->
        Product::create([
            'event_id' => 21,
            'category_id' => 11,
            'name' => 'Payung UV',
            'stock' => 520,
            'description' => 'Nama: Payung UV Payung Nivil Perlindungan Matahari Payung Tiga Kali Lipat, Size: panjang saat ditarik: 68.8cm, diamater sekitar: 96cm',
            'price' => 40500,
            'modal' => 27000,
            'image' => 'product-103.jpg'
        ]);

        // <!-- // Product 104 -->
        Product::create([
            'event_id' => 21,
            'category_id' => 11,
            'name' => 'Cermin nordik',
            'stock' => 414,
            'description' => 'Cermin Portable Ini Sangat Cocok Bagi wanita / Anak-anak Yg Suka Merias Wajah. Bentuk Dan Ukurannya Tidak Begitu Besar Sehingga Dapat dibawa Kemana-mana. Cermin Ini Dapat Diletakkan Di Meja Kantor Anda, Dirumah, Kamar, DLL Sesuai Dengan Keinginan Anda. ',
            'price' => 15000,
            'modal' => 10000,
            'image' => 'product-104.jpg'
        ]);

        // <!-- // Product 105 -->
        Product::create([
            'event_id' => 21,
            'category_id' => 11,
            'name' => 'Kaca Rias',
            'stock' => 320,
            'description' => 'FREE PACKING KARDUS,BUBBLE WARP ( UNTUK BARANG YANG RAPUH ) DAN STIKER/LAKBAN FRAGILE , READY STOCK NO OPEN PO, KEMASAN PLASTIK BENING POLOS TEBAL, KUALITAS PRODUK PREMIUM, HALAL 1000 %, EXP DIJAMIN LAMA (KARENA SETIAP HARI PRODUK SELALU BARU), FOTO YANG DIGUNAKAN ADALAH FOTO ASLI BUKAN DARI GOOGLE,SELALU DI CEKING SEBELUM DIKIRIM',
            'price' => 15000,
            'modal' => 10000,
            'image' => 'product-105.jpg'
        ]);

        // <!-- // Product 106 -->
        Product::create([
            'event_id' => 22,
            'category_id' => 11,
            'name' => 'Payung Korea',
            'stock' => 121,
            'description' => 'Nama: Payung Lipat Bermotif Kotak2',
            'price' => 39000,
            'modal' => 26000,
            'image' => 'product-106.jpg'
        ]);

        // <!-- // Product 107 -->
        Product::create([
            'event_id' => 22,
            'category_id' => 11,
            'name' => 'Wiper Jendela',
            'stock' => 321,
            'description' => 'Nama: Wiper Pembersi Kaca, Bahan: plastik+silikon',
            'price' => 6000,
            'modal' => 4000,
            'image' => 'product-107.jpg'
        ]);

        // <!-- // Product 108 -->
        Product::create([
            'event_id' => 22,
            'category_id' => 11,
            'name' => 'Gantungan Rak',
            'stock' => 322,
            'description' => 'Nama: Rak Sudut Serbaguna Rak Sabun Tempel Rak Tempel Dinding Segitiga',
            'price' => 45000,
            'modal' => 30000,
            'image' => 'product-108.jpg'
        ]);

        // <!-- // Product 109 -->
        Product::create([
            'event_id' => 22,
            'category_id' => 11,
            'name' => 'Spon Mandi',
            'stock' => 123,
            'description' => 'spon mandi sangat di perlukan untuk menghemat sabun cair anda dan mandi jadi lebih bersih.',
            'price' => 12000,
            'modal' => 8000,
            'image' => 'product-109.jpg'
        ]);

        // <!-- // Product 110 -->
        Product::create([
            'event_id' => 22,
            'category_id' => 11,
            'name' => 'Rak Besi',
            'stock' => 198,
            'description' => 'Nama:  New Rak Besi Rak Kamar Mandi Rak Besi Tempel Tanpa Bor Rak Penyimpanan',
            'price' => 21000,
            'modal' => 14000,
            'image' => 'product-110.jpg'
        ]);

        // <!-- // Product 111 -->
        Product::create([
            'event_id' => 23,
            'category_id' => 5,
            'name' => 'Emas Korea',
            'stock' => 420,
            'description' => 'Warna Emas, Emas Mawar, Bahan: 100% titanium, stainless steel, kualitas terjamin, Desain yang indah, modis dan kasual, dan kasual',
            'price' => 40500,
            'modal' => 27000,
            'image' => 'product-111.jpg'
        ]);

        // <!-- // Product 112 -->
        Product::create([
            'event_id' => 23,
            'category_id' => 5,
            'name' => 'Kalung Fuji',
            'stock' => 345,
            'description' => 'Warna: Emas, Emas Mawar, Perak, Bahan: 100% titanium, baja tahan karat, zirkon, Desain, cantik, modis dan santai',
            'price' => 45000,
            'modal' => 30000,
            'image' => 'product-112.jpg'
        ]);

        // <!-- // Product 113 -->
        Product::create([
            'event_id' => 23,
            'category_id' => 5,
            'name' => 'Gelang layer',
            'stock' => 432,
            'description' => 'Warna: emas,emas mawar, Ukuran: 16cm + 5cm (rantai ekstensi), Bahan: titanium,stainless steel',
            'price' => 39000,
            'modal' => 26000,
            'image' => 'product-113.jpg'
        ]);

        // <!-- // Product 114 -->
        Product::create([
            'event_id' => 23,
            'category_id' => 5,
            'name' => 'Cincin wanita',
            'stock' => 124,
            'description' => 'Warna: emas, perak, Ukuran: No.6 US, No.7 US, No.8 US, Bahan: titanium,stainless steel',
            'price' => 30000,
            'modal' => 20000,
            'image' => 'product-114.jpg'
        ]);

        // <!-- // Product 115 -->
        Product::create([
            'event_id' => 23,
            'category_id' => 5,
            'name' => 'Gelang kaki',
            'stock' => 482,
            'description' => 'Warna: Emas, Emas Mawar, Perak, Bahan: 100% titanium, baja tahan karat, zirkon, Desain, cantik, modis dan santai',
            'price' => 30000,
            'modal' => 20000,
            'image' => 'product-115.jpg'
        ]);

        // <!-- // Product 116 -->
        Product::create([
            'event_id' => 24,
            'category_id' => 5,
            'name' => 'Kalung wanita',
            'stock' => 135,
            'description' => 'Nama:  New Rak Besi Rak Kamar Mandi Rak Besi Tempel Tanpa Bor Rak Penyimpanan',
            'price' => 33000,
            'modal' => 22000,
            'image' => 'product-116.jpg'
        ]);

        // <!-- // Product 117 -->
        Product::create([
            'event_id' => 24,
            'category_id' => 5,
            'name' => 'Kalung Kristal',
            'stock' => 352,
            'description' => 'Warna: Emas, Emas Mawar, Perak, Bahan: 100% titanium, baja tahan karat, zirkon, Desain, cantik, modis dan santai',
            'price' => 57000,
            'modal' => 38000,
            'image' => 'product-117.jpg'
        ]);

        // <!-- // Product 118 -->
        Product::create([
            'event_id' => 24,
            'category_id' => 5,
            'name' => 'Kalung wanita',
            'stock' => 442,
            'description' => 'Nama:  New Rak Besi Rak Kamar Mandi Rak Besi Tempel Tanpa Bor Rak Penyimpanan',
            'price' => 36000,
            'modal' => 24000,
            'image' => 'product-118.jpg'
        ]);

        // <!-- // Product 119 -->
        Product::create([
            'event_id' => 24,
            'category_id' => 5,
            'name' => 'Kalung wanita',
            'stock' => 124,
            'description' => 'Warna: Emas, Emas Mawar, Perak, Bahan: 100% titanium, baja tahan karat, zirkon, Desain, cantik, modis dan santai',
            'price' => 33000,
            'modal' => 22000,
            'image' => 'product-119.jpg'
        ]);

        // <!-- // Product 120 -->
        Product::create([
            'event_id' => 24,
            'category_id' => 5,
            'name' => 'Cincin berlian',
            'stock' => 111,
            'description' => 'Warna: Emas, Emas Mawar, Perak, Bahan: 100% titanium, baja tahan karat, zirkon, Desain, cantik, modis dan santai',
            'price' => 36000,
            'modal' => 24000,
            'image' => 'product-120.jpg'
        ]);

        // <!-- // Product 121 -->
        Product::create([
            'event_id' => 25,
            'category_id' => 3,
            'name' => 'Cola',
            'stock' => 50,
            'description' => 'Barang 100% ORI dari pabriknya dan disimpan didalam suhu terbaik sehingga produk fresh untuk dikonsumsi oleh para konsumen',
            'price' => 52500,
            'modal' => 35000,
            'image' => 'product-121.jpg'
        ]);

        // <!-- // Product 122 -->
        Product::create([
            'event_id' => 25,
            'category_id' => 3,
            'name' => 'Milku',
            'stock' => 196,
            'description' => 'Milku merupakan sumber 5 Vitamin, 4 Mineral dan memenuhi 25% kebutuhan kalsium harian. Ini juga mengandung protein dan karbohidrat sehingga menjadi pilihan tepat untuk memenuhi kebutuhan Gizi untuk anak-anak dan orang dewasa juga.',
            'price' => 6000,
            'modal' => 4000,
            'image' => 'product-122.jpg'
        ]);

        // <!-- // Product 123 -->
        Product::create([
            'event_id' => 25,
            'category_id' => 3,
            'name' => 'Teh Pucuk',
            'stock' => 40,
            'description' => 'TEH PUCUK Harum Jasmine merupakan minuman teh persembahan Teh Pucuk dengan aroma jasmine yang menyegarkan untuk Anda. Minuman teh ini dibuat dari daun teh yang berkualitas dan menggunakan bagian pucuk daun teh untuk menghasilkan cita rasa teh terbaik. ',
            'price' => 94500,
            'modal' => 63000,
            'image' => 'product-123.jpg'
        ]);

        // <!-- // Product 124 -->
        Product::create([
            'event_id' => 25,
            'category_id' => 3,
            'name' => 'Teh Pucuk',
            'stock' => 150,
            'description' => 'TEH PUCUK Harum Jasmine merupakan minuman teh persembahan Teh Pucuk dengan aroma jasmine yang menyegarkan untuk Anda. Minuman teh ini dibuat dari daun teh yang berkualitas dan menggunakan bagian pucuk daun teh untuk menghasilkan cita rasa teh terbaik. ',
            'price' => 6000,
            'modal' => 4000,
            'image' => 'product-124.jpg'
        ]);


        // <!-- // Product 125 -->
        Product::create([
            'event_id' => 25,
            'category_id' => 3,
            'name' => 'Cola',
            'stock' => 50,
            'description' => 'NAMA PRODUK : COCA-COLA ZERO 390ML LUSINAN/1 DUS ( 1 LUSIN), NET/ PET : 390ML',
            'price' => 7500,
            'modal' => 5000,
            'image' => 'product-125.jpg'
        ]);

        // <!-- // Product 126 -->
        Product::create([
            'event_id' => 26,
            'category_id' => 3,
            'name' => 'Cola',
            'stock' => 200,
            'description' => 'Coca Cola Botol PET Minuman Menyegarkan - 250ml',
            'price' => 7500,
            'modal' => 5000,
            'image' => 'product-126.jpg'
        ]);

        // <!-- // Product 127 -->
        Product::create([
            'event_id' => 26,
            'category_id' => 3,
            'name' => 'Cola',
            'stock' => 60,
            'description' => 'Coca Cola Botol PET Minuman Menyegarkan - 250ml',
            'price' => 84000,
            'modal' => 56000,
            'image' => 'product-127.jpg'
        ]);

        // <!-- // Product 128 -->
        Product::create([
            'event_id' => 26,
            'category_id' => 3,
            'name' => 'Milku',
            'stock' => 120,
            'description' => 'Milku adalah pilihan produk yang baik serta tepat untuk diminum sehari-hari, Milku dapat dengan mudah disimpan di rumah, karena tidak memerlukan pendingin apapun sampai botol dibuka.',
            'price' => 52500,
            'modal' => 35000,
            'image' => 'product-128.jpg'
        ]);

        // <!-- // Product 129 -->
        Product::create([
            'event_id' => 26,
            'category_id' => 3,
            'name' => 'Freshtea',
            'stock' => 100,
            'description' => 'NAMA PRODUK = FRESTEA, JENIS BARANG= TEH SIAP MINUM, NET/ BERAT = 350 ML',
            'price' => 42000,
            'modal' => 28000,
            'image' => 'product-129.jpg'
        ]);

        // <!-- // Product 130 -->
        Product::create([
            'event_id' => 26,
            'category_id' => 3,
            'name' => 'Fanta',
            'stock' => 120,
            'description' => 'NAMA PRODUK : FANTA, PET/NET : 250ML, DIJUAL PERBOTOL/ SATUAN',
            'price' => 7500,
            'modal' => 5000,
            'image' => 'product-130.jpg'
        ]);

        // <!-- // Product 131 -->
        Product::create([
            'event_id' => 27,
            'category_id' => 5,
            'name' => 'Baseball Cap',
            'stock' => 70,
            'description' => 'Topi Fashion Wanita Import Korean Style',
            'price' => 45000,
            'modal' => 30000,
            'image' => 'product-131.jpg'
        ]);

        // <!-- // Product 132 -->
        Product::create([
            'event_id' => 27,
            'category_id' => 5,
            'name' => 'Topi Pantai',
            'stock' => 300,
            'description' => 'Topi Pantai Pita Bunga Vintage Import',
            'price' => 30000,
            'modal' => 20000,
            'image' => 'product-132.jpg'
        ]);

        // <!-- // Product 133 -->
        Product::create([
            'event_id' => 27,
            'category_id' => 5,
            'name' => 'Kaos Kaki',
            'stock' => 150,
            'description' => 'Bahan: Kain Spandek + Polyester Breathable',
            'price' => 3300,
            'modal' => 2200,
            'image' => 'product-133.jpg'
        ]);

        // <!-- // Product 134 -->
        Product::create([
            'event_id' => 27,
            'category_id' => 5,
            'name' => 'topi baseball',
            'stock' => 300,
            'description' => 'Ukuran 1size adjustable untuk lingkar kepala : 54-62 +/- 1cm, Tinggi : 12cm, Panjang Visor/Lidah : 7cm, Berat : 200gram',
            'price' => 61500,
            'modal' => 41000,
            'image' => 'product-134.jpg'
        ]);

        // <!-- // Product 135 -->
        Product::create([
            'event_id' => 27,
            'category_id' => 5,
            'name' => 'Topi Wanita',
            'stock' => 200,
            'description' => 'Berat = 95Gram, Lingkar Kepala = 19 cm, Diameter Topi = 35 cm',
            'price' => 30000,
            'modal' => 20000,
            'image' => 'product-135.jpg'
        ]);

        // <!-- // Product 136 -->
        Product::create([
            'event_id' => 28,
            'category_id' => 5,
            'name' => 'Baseball Hat',
            'stock' => 120,
            'description' => 'Topi Baseball Hat Always, Ada adjustable strap di bagian belakang topi',
            'price' => 60000,
            'modal' => 40000,
            'image' => 'product-136.jpg'
        ]);

        // <!-- // Product 137 -->
        Product::create([
            'event_id' => 28,
            'category_id' => 5,
            'name' => 'Baseball Cap',
            'stock' => 212,
            'description' => 'Baseball cap : Topi Baseball Topi Pria Topi Snapback',
            'price' => 60000,
            'modal' => 40000,
            'image' => 'product-137.jpg'
        ]);

        // <!-- // Product 138 -->
        Product::create([
            'event_id' => 28,
            'category_id' => 5,
            'name' => 'Topi Visor',
            'stock' => 222,
            'description' => 'Topi Visor Lipat Wanita Anti UV Import, Cadar dijahit jadi satu dengan topi',
            'price' => 28500,
            'modal' => 19000,
            'image' => 'product-138.jpg'
        ]);

        // <!-- // Product 139 -->
        Product::create([
            'event_id' => 28,
            'category_id' => 5,
            'name' => 'Baseball Cap',
            'stock' => 200,
            'description' => 'Baseball cap : NEW YORK - Topi Baseball Topi Pria Topi Snapback',
            'price' => 60000,
            'modal' => 40000,
            'image' => 'product-139.jpg'
        ]);

        // <!-- // Product 140 -->
        Product::create([
            'event_id' => 28,
            'category_id' => 5,
            'name' => 'Topi baseball',
            'stock' => 120,
            'description' => 'Topi Baseball Bintang Pria with Adjustable Strap',
            'price' => 42000,
            'modal' => 28000,
            'image' => 'product-140.jpg'
        ]);

        // <!-- // Product 141 -->
        Product::create([
            'event_id' => 29,
            'category_id' => 8,
            'name' => 'Celana Pendek',
            'stock' => 400,
            'description' => 'Bahan: Katun Jeans, Kuat dan rapi, Nyaman dipakai, Tidak mudah luntur',
            'price' => 39000,
            'modal' => 26000,
            'image' => 'product-141.jpg'
        ]);

        // <!-- // Product 142 -->
        Product::create([
            'event_id' => 29,
            'category_id' => 4,
            'name' => 'Setelan tie',
            'stock' => 120,
            'description' => 'Bahan Tidak Merawang, Bahan Adem , Tali Serut (Busui), Daun Oblong, Lengan karet',
            'price' => 30000,
            'modal' => 20000,
            'image' => 'product-142.jpg'
        ]);

        // <!-- // Product 143 -->
        Product::create([
            'event_id' => 29,
            'category_id' => 4,
            'name' => 'setelan tie',
            'stock' => 400,
            'description' => 'Bahan Tidak Merawang, Bahan Adem , Tali Serut (Busui), Daun Oblong, Lengan karet',
            'price' => 54000,
            'modal' => 36000,
            'image' => 'product-143.jpg'
        ]);

        // <!-- // Product 144 -->
        Product::create([
            'event_id' => 29,
            'category_id' => 4,
            'name' => 'setelan tie',
            'stock' => 300,
            'description' => 'Bahan Tidak Merawang, Bahan Adem , Tali Serut (Busui), Daun Oblong, Lengan karet',
            'price' => 69000,
            'modal' => 46000,
            'image' => 'product-144.jpg'
        ]);

        // <!-- // Product 145 -->
        Product::create([
            'event_id' => 29,
            'category_id' => 8,
            'name' => 'celana pendek',
            'stock' => 250,
            'description' => 'Bahan:Katun Jeans, Kuat dan rapi, Nyaman dipakai, Tidak mudah luntur',
            'price' => 24000,
            'modal' => 16000,
            'image' => 'product-145.jpg'
        ]);

        // <!-- // Product 146 -->
        Product::create([
            'event_id' => 30,
            'category_id' => 4,
            'name' => 'Setelan tie',
            'stock' => 180,
            'description' => 'Bahan Tidak Merawang, Bahan Adem , Tali Serut (Busui), Daun Oblong, Lengan karet',
            'price' => 63000,
            'modal' => 42000,
            'image' => 'product-146.jpg'
        ]);

        // <!-- // Product 147 -->
        Product::create([
            'event_id' => 30,
            'category_id' => 4,
            'name' => 'Jumbo setelan',
            'stock' => 231,
            'description' => 'Material Bahan KATUN Rayon yang Adem Dan Tidak Nrawang',
            'price' => 82500,
            'modal' => 55000,
            'image' => 'product-147.jpg'
        ]);

        // <!-- // Product 148 -->
        Product::create([
            'event_id' => 30,
            'category_id' => 8,
            'name' => 'Celana Distro',
            'stock' => 212,
            'description' => 'Bahan:Katun Jeans, Kuat dan rapi, Nyaman dipakai, Tidak mudah luntur',
            'price' => 30000,
            'modal' => 20000,
            'image' => 'product-148.jpg'
        ]);

        // <!-- // Product 149 -->
        Product::create([
            'event_id' => 30,
            'category_id' => 4,
            'name' => 'Setelan Set',
            'stock' => 111,
            'description' => 'Material Bahan KATUN Rayon yang Adem Dan Tidak Nrawang',
            'price' => 60000,
            'modal' => 40000,
            'image' => 'product-149.jpg'
        ]);

        // <!-- // Product 150 -->
        Product::create([
            'event_id' => 30,
            'category_id' => 8,
            'name' => 'Celana distro',
            'stock' => 190,
            'description' => 'Bahan:Katun Jeans, Kuat dan rapi, Nyaman dipakai, Tidak mudah luntur',
            'price' => 30000,
            'modal' => 20000,
            'image' => 'product-150.jpg'
        ]);

        // <!-- // Product 151 -->
        Product::create([
            'event_id' => 31,
            'category_id' => 10,
            'name' => 'Hoodie Pria',
            'stock' => 400,
            'description' => 'Sweater yang saya jual adalah pilihan yang sempurna untuk menambahkan lapisan hangat dalam gaya berpakaian Anda. Dengan desain yang menarik, kualitas bahan yang baik, dan berbagai pilihan warna, sweater ini dapat menjadi penambah gaya yang trendi dan fungsional dalam koleksi pakaian Anda.',
            'price' => 72000,
            'modal' => 48000,
            'image' => 'product-151.jpg'
        ]);

        // <!-- // Product 152 -->
        Product::create([
            'event_id' => 31,
            'category_id' => 10,
            'name' => 'Crewneck Pria',
            'stock' => 320,
            'description' => 'Sweater yang saya jual adalah pilihan yang sempurna untuk menambahkan lapisan hangat dalam gaya berpakaian Anda. Dengan desain yang menarik, kualitas bahan yang baik, dan berbagai pilihan warna, sweater ini dapat menjadi penambah gaya yang trendi dan fungsional dalam koleksi pakaian Anda.',
            'price' => 61500,
            'modal' => 41000,
            'image' => 'product-152.jpg'
        ]);


        // <!-- // Product 153 -->
        Product::create([
            'event_id' => 31,
            'category_id' => 10,
            'name' => 'Hoodie Pria',
            'stock' => 245,
            'description' => 'Sweater yang saya jual adalah pilihan yang sempurna untuk menambahkan lapisan hangat dalam gaya berpakaian Anda. Dengan desain yang menarik, kualitas bahan yang baik, dan berbagai pilihan warna, sweater ini dapat menjadi penambah gaya yang trendi dan fungsional dalam koleksi pakaian Anda.',
            'price' => 75000,
            'modal' => 50000,
            'image' => 'product-153.jpg'
        ]);


        // <!-- // Product 154 -->
        Product::create([
            'event_id' => 31,
            'category_id' => 10,
            'name' => 'Sweeter distro',
            'stock' => 232,
            'description' => 'Sweater yang saya jual adalah pilihan yang sempurna untuk menambahkan lapisan hangat dalam gaya berpakaian Anda. Dengan desain yang menarik, kualitas bahan yang baik, dan berbagai pilihan warna, sweater ini dapat menjadi penambah gaya yang trendi dan fungsional dalam koleksi pakaian Anda.',
            'price' => 75000,
            'modal' => 50000,
            'image' => 'product-154.jpg'
        ]);


        // <!-- // Product 155 -->
        Product::create([
            'event_id' => 31,
            'category_id' => 10,
            'name' => 'Crewneck vanset',
            'stock' => 128,
            'description' => 'Sweater yang saya jual adalah pilihan yang sempurna untuk menambahkan lapisan hangat dalam gaya berpakaian Anda. Dengan desain yang menarik, kualitas bahan yang baik, dan berbagai pilihan warna, sweater ini dapat menjadi penambah gaya yang trendi dan fungsional dalam koleksi pakaian Anda.',
            'price' => 61500,
            'modal' => 41000,
            'image' => 'product-155.jpg'
        ]);


        // <!-- // Product 156 -->
        Product::create([
            'event_id' => 32,
            'category_id' => 10,
            'name' => 'hoodie hardy',
            'stock' => 320,
            'description' => 'Sweater yang saya jual adalah pilihan yang sempurna untuk menambahkan lapisan hangat dalam gaya berpakaian Anda. Dengan desain yang menarik, kualitas bahan yang baik, dan berbagai pilihan warna, sweater ini dapat menjadi penambah gaya yang trendi dan fungsional dalam koleksi pakaian Anda.',
            'price' => 75000,
            'modal' => 50000,
            'image' => 'product-156.jpg'
        ]);


        // <!-- // Product 157 -->
        Product::create([
            'event_id' => 32,
            'category_id' => 10,
            'name' => 'crewneck good',
            'stock' => 333,
            'description' => 'Sweater yang saya jual adalah pilihan yang sempurna untuk menambahkan lapisan hangat dalam gaya berpakaian Anda. Dengan desain yang menarik, kualitas bahan yang baik, dan berbagai pilihan warna, sweater ini dapat menjadi penambah gaya yang trendi dan fungsional dalam koleksi pakaian Anda.',
            'price' => 60000,
            'modal' => 40000,
            'image' => 'product-157.jpg'
        ]);


        // <!-- // Product 158 -->
        Product::create([
            'event_id' => 32,
            'category_id' => 10,
            'name' => 'sweater pria',
            'stock' => 221,
            'description' => 'Sweater yang saya jual adalah pilihan yang sempurna untuk menambahkan lapisan hangat dalam gaya berpakaian Anda. Dengan desain yang menarik, kualitas bahan yang baik, dan berbagai pilihan warna, sweater ini dapat menjadi penambah gaya yang trendi dan fungsional dalam koleksi pakaian Anda.',
            'price' => 61500,
            'modal' => 41000,
            'image' => 'product-158.jpg'
        ]);


        // <!-- // Product 159 -->
        Product::create([
            'event_id' => 32,
            'category_id' => 10,
            'name' => 'hoodie keren',
            'stock' => 432,
            'description' => 'Sweater yang saya jual adalah pilihan yang sempurna untuk menambahkan lapisan hangat dalam gaya berpakaian Anda. Dengan desain yang menarik, kualitas bahan yang baik, dan berbagai pilihan warna, sweater ini dapat menjadi penambah gaya yang trendi dan fungsional dalam koleksi pakaian Anda.',
            'price' => 75000,
            'modal' => 50000,
            'image' => 'product-159.jpg'
        ]);


        // <!-- // Product 160 -->
        Product::create([
            'event_id' => 32,
            'category_id' => 10,
            'name' => 'sweater nasa',
            'stock' => 212,
            'description' => 'Sweater yang saya jual adalah pilihan yang sempurna untuk menambahkan lapisan hangat dalam gaya berpakaian Anda. Dengan desain yang menarik, kualitas bahan yang baik, dan berbagai pilihan warna, sweater ini dapat menjadi penambah gaya yang trendi dan fungsional dalam koleksi pakaian Anda.',
            'price' => 57000,
            'modal' => 38000,
            'image' => 'product-160.jpg'
        ]);


        // <!-- // Product 161 -->
        Product::create([
            'event_id' => 34,
            'category_id' => 11,
            'name' => 'Tisu Jolly',
            'stock' => 363,
            'description' => 'Jolly Facial Tisu merupakan salah satu varian tissue wajah yang lembut dan sejuk. Terbuat dari 100% serat alami (Virgin Plantation Pulp) yang membuatnya lembut dan nyaman di kulit, serta diproses secara higienis untuk menghasilkan tissue halus berkualitas tinggi bagi keluarga Anda.',
            'price' => 42000,
            'modal' => 28000,
            'image' => 'product-161.jpg'
        ]);

        // <!-- // Product 162 -->
        Product::create([
            'event_id' => 34,
            'category_id' => 9,
            'name' => 'Yupi Box',
            'stock' => 200,
            'description' => 'Terbuat dari gelatin sapi, yang membuat teksturnya jauh lebih lembut dibandingkan permen lain sehingga produk jauh lebih mudah dibentuk. Hingga kini gummy jelly tersedia dalam berbagai bentuk yang berbeda dari buah-buahan, hewan, dan lainnya. ',
            'price' => 18000,
            'modal' => 12000,
            'image' => 'product-162.jpg'
        ]);

        // <!-- // Product 163 -->
        Product::create([
            'event_id' => 34,
            'category_id' => 9,
            'name' => 'Kue Soes',
            'stock' => 300,
            'description' => 'Duosus adalah kue soes-kue soes kering mini produksi CV. Seribu Satu - Kab. Langkat, Sumatera Utara. Satu dari sekian produk snack murah yg membanjiri pasar2 grosir di Bandung. ',
            'price' => 4500,
            'modal' => 3000,
            'image' => 'product-163.jpg'
        ]);

        // <!-- // Product 164 -->
        Product::create([
            'event_id' => 34,
            'category_id' => 2,
            'name' => 'Naraya Oat',
            'stock' => 420,
            'description' => 'Oat Choco Naraya selain merupakan snack yang rasanya enak, ternyata juga mengandung banyak manfaat. Oat choco Naraya ini meskipun bentuknya kecil namun mempunyai khasiat yang besar. ',
            'price' => 48000,
            'modal' => 32000,
            'image' => 'product-164.jpg'
        ]);

        // <!-- // Product 165 -->
        Product::create([
            'event_id' => 34,
            'category_id' => 2,
            'name' => 'Sosis Kanzler',
            'stock' => 100,
            'description' => 'Sosis Kanzler dikenal sebagai sosis premium yang terbuat dari daging sapi premium yang bebas MSG dan tanpa pewarna buatan. Sosis Kanzler Singles terbuat dari daging premium pilihan sehingga pada daging lebih terasa dan menghasilkan tekstur yang lembut.',
            'price' => 13500,
            'modal' => 9000,
            'image' => 'product-165.jpg'
        ]);

        // <!-- // Product 166 -->
        Product::create([
            'event_id' => 36,
            'category_id' => 1,
            'name' => 'Tricks ',
            'stock' => 190,
            'description' => 'Biskuit Kentang Tricks, Kemasan box isi 10 sachet @ 20 gram. per sachet isi 5 keping',
            'price' => 15000,
            'modal' => 10000,
            'image' => 'product-166.jpg'
        ]);

        // <!-- // Product 167 -->
        Product::create([
            'event_id' => 36,
            'category_id' => 11,
            'name' => 'Dus and wrap',
            'stock' => 220,
            'description' => 'Utk Bubble Warp hanya barang" tertentu ya yg bisa di bubble contoh (botol beling, minuman cair spt susu"an)',
            'price' => 3000,
            'modal' => 2000,
            'image' => 'product-167.jpg'
        ]);

        // <!-- // Product 168 -->
        Product::create([
            'event_id' => 36,
            'category_id' => 9,
            'name' => 'momogi Stick',
            'stock' => 140,
            'description' => 'Momogi adalah makanan ringan berbentuk stick dan berongga bagian tengah. Berhastag MOw MOw laGI, nikmatnya coklat yang manis dan legit, ditambah dengan kerenyahan stick MOMOGI.',
            'price' => 15000,
            'modal' => 10000,
            'image' => 'product-168.jpg'
        ]);

        // <!-- // Product 169 -->
        Product::create([
            'event_id' => 36,
            'category_id' => 11,
            'name' => 'Tisu Jolly',
            'stock' => 167,
            'description' => 'Tissue Jolly terbuat dari 100% serat alami (virgin plantation pulp) dan diproses secara higenis sehingga menghasilkan tissue halus yang berkualitas tinggi bagi keluarga anda. dengan bahan dasar yang lembut dan kuat (tidak mudah sobek).',
            'price' => 37500,
            'modal' => 2500,
            'image' => 'product-169.jpg'
        ]);

        // <!-- // Product 170 -->
        Product::create([
            'event_id' => 36,
            'category_id' => 9,
            'name' => 'Pocky Wafer',
            'stock' => 189,
            'description' => 'Pocky cemilan trend sepanjang masa dari Jepang yg terkenal seantero dunia. Diciptakan oleh Ezaki Glico Co Ltd - Japan pada tahun 1962. Berupa biskuit seperti pretzel yg renyah dan enak berbentuk stik dgn salut coklat yg berkelas. ',
            'price' => 7500,
            'modal' => 5000,
            'image' => 'product-170.jpg'
        ]);

        // <!-- // Product 171 -->
        Product::create([
            'event_id' => 36,
            'category_id' => 7,
            'name' => 'Sticker Metal',
            'stock' => 100,
            'description' => 'Bahan : Vinyl , Daya rekat Kuat',
            'price' => 15000,
            'modal' => 10000,
            'image' => 'product-171.jpg'
        ]);

        // <!-- // Product 172 -->
        Product::create([
            'event_id' => 37,
            'category_id' => 7,
            'name' => 'Sticker Metal',
            'stock' => 200,
            'description' => 'Bahan : Vinyl , Daya rekat Kuat ',
            'price' => 16500,
            'modal' => 11000,
            'image' => 'product-172.jpg'
        ]);

        // <!-- // Product 173 -->
        Product::create([
            'event_id' => 37,
            'category_id' => 7,
            'name' => 'Sticker Indie',
            'stock' => 300,
            'description' => 'Bahan : Vinyl , Daya rekat Kuat',
            'price' => 12000,
            'modal' => 8000,
            'image' => 'product-173.jpg'
        ]);

        // <!-- // Product 174 -->
        Product::create([
            'event_id' => 37,
            'category_id' => 7,
            'name' => 'Sticker Matern',
            'stock' => 100,
            'description' => 'Bahan : Vinyl , Daya rekat Kuat  ',
            'price' => 9000,
            'modal' => 6000,
            'image' => 'product-174.jpg'
        ]);

        // <!-- // Product 175 -->
        Product::create([
            'event_id' => 37,
            'category_id' => 7,
            'name' => 'Sticker Distro',
            'stock' => 200,
            'description' => 'Bahan : Vinyl , Daya rekat Kuat ',
            'price' => 9000,
            'modal' => 6000,
            'image' => 'product-175.jpg'
        ]);

        // <!-- // Product 176 -->
        Product::create([
            'event_id' => 38,
            'category_id' => 7,
            'name' => 'Sticker Metal',
            'stock' => 300,
            'description' => 'Bahan : Vinyl , Daya rekat Kuat  ',
            'price' => 6000,
            'modal' => 4000,
            'image' => 'product-176.jpg'
        ]);

        // <!-- // Product 177 -->
        Product::create([
            'event_id' => 38,
            'category_id' => 7,
            'name' => 'Sticker hype',
            'stock' => 400,
            'description' => 'Bahan : Vinyl , Daya rekat Kuat  ',
            'price' => 16500,
            'modal' => 11000,
            'image' => 'product-177.jpg'
        ]);

        // <!-- // Product 178 -->
        Product::create([
            'event_id' => 38,
            'category_id' => 7,
            'name' => 'Poster Metal',
            'stock' => 120,
            'description' => 'Bahan : Vinyl , Daya rekat Kuat ',
            'price' => 15000,
            'modal' => 10000,
            'image' => 'product-178.jpg'
        ]);

        // <!-- // Product 179 -->
        Product::create([
            'event_id' => 38,
            'category_id' => 7,
            'name' => 'Sticker Band',
            'stock' => 120,
            'description' => 'sudah digunting, Anti air, Laminasi Glossy ',
            'price' => 18000,
            'modal' => 12000,
            'image' => 'product-179.jpg'
        ]);

        // <!-- // Product 180 -->
        Product::create([
            'event_id' => 38,
            'category_id' => 7,
            'name' => 'Sticker Pack ',
            'stock' => 40,
            'description' => 'Sticker Maternal disaster 1 pack isi 20 sticker ',
            'price' => 12000,
            'modal' => 8000,
            'image' => 'product-180.jpg'
        ]);

        // <!-- // Product 181 -->
        Product::create([
            'event_id' => 39,
            'category_id' => 5,
            'name' => 'Light Liquid ',
            'stock' => 100,
            'description' => 'Yzs lightening liquid foundation yang terasa ringan natural dan nyaman digunakan sehari-hari dengan micronice bright pigmen mencerahkan dan jadikan kulit tampak lebih halus tahan lama hingga 12 jam.',
            'price' => 19500,
            'modal' => 13000,
            'image' => 'product-181.jpg'
        ]);


        // <!-- // Product 182 -->
        Product::create([
            'event_id' => 39,
            'category_id' => 5,
            'name' => 'Scraft Slayer ',
            'stock' => 120,
            'description' => 'Gaya: hip hop, Kain: Katun, Teknologi pemrosesan: menjahit, pekerjaan tangan ',
            'price' => 15000,
            'modal' => 10000,
            'image' => 'product-182.jpg'
        ]);


        // <!-- // Product 183 -->
        Product::create([
            'event_id' => 39,
            'category_id' => 5,
            'name' => 'Korea Bando ',
            'stock' => 130,
            'description' => 'Product Category: Headwear, Bahan: kain, Ukuran : Adjustable Elastic, Style: Korean Korean / Korean style',
            'price' => 27000,
            'modal' => 18000,
            'image' => 'product-183.jpg'
        ]);


        // <!-- // Product 184 -->
        Product::create([
            'event_id' => 39,
            'category_id' => 5,
            'name' => 'Hairband',
            'stock' => 140,
            'description' => 'Cocok untuk di gunakan setiap hari ataupun bahkan untuk party dan juga sangat cocok buat kado ataupun souvenir. , Bando ini Cocok di kalangan anak-anak muda maupun anak kecil.',
            'price' => 12000,
            'modal' => 8000,
            'image' => 'product-184.jpg'
        ]);


        // <!-- // Product 185 -->
        Product::create([
            'event_id' => 39,
            'category_id' => 5,
            'name' => 'Simu Cream',
            'stock' => 150,
            'description' => 'Fungal acne Friendlym, Cepat meresap, ringan dan dingin dengan SPF tinggi, Mengandung ekstrak alami untuk kulit, Antioksidan & Melembabkan',
            'price' => 18000,
            'modal' => 12000,
            'image' => 'product-185.jpg'
        ]);


        // <!-- // Product 186 -->
        Product::create([
            'event_id' => 40,
            'category_id' => 5,
            'name' => 'Tas Wanita',
            'stock' => 160,
            'description' => 'bahan tas kami terbuat dari bahan pu asli import, jangan mudah tertipu dg tas yg lain ',
            'price' => 121500,
            'modal' => 81000,
            'image' => 'product-186.jpg'
        ]);


        // <!-- // Product 187 -->
        Product::create([
            'event_id' => 40,
            'category_id' => 5,
            'name' => 'Bando import',
            'stock' => 170,
            'description' => 'Bando ini Cocok di kalangan anak-anak muda maupun anak kecil.',
            'price' => 25500,
            'modal' => 17000,
            'image' => 'product-187.jpg'
        ]);


        // <!-- // Product 188 -->
        Product::create([
            'event_id' => 40,
            'category_id' => 5,
            'name' => 'Bando Lucu ',
            'stock' => 180,
            'description' => 'Terbuat dari Bahan campuran berkualitas , Satin Velvet Premium, Bando super lucu unik dan imut, cocok untuk dipakaikan ke anak maupun dewasa loh., Free size bisa untuk anak-anak atau dewasa pakai.',
            'price' => 25500,
            'modal' => 17000,
            'image' => 'product-188.jpg'
        ]);


        // <!-- // Product 189 -->
        Product::create([
            'event_id' => 40,
            'category_id' => 5,
            'name' => 'Hairband',
            'stock' => 190,
            'description' => 'Product Category: Headwear, Bahan: mewah, Gaya: kartun, Ukuran : Adjustable Elastic, Berat: sekitar 35g, Style: Korean Korean / Korean style',
            'price' => 15000,
            'modal' => 10000,
            'image' => 'product-189.jpg'
        ]);


        // <!-- // Product 190 -->
        Product::create([
            'event_id' => 40,
            'category_id' => 5,
            'name' => 'Aircushion',
            'stock' => 200,
            'description' => 'Bahan : sponge, Package ：1 set Professional Aircushion Puff',
            'price' => 7500,
            'modal' => 5000,
            'image' => 'product-190.jpg'
        ]);


        // <!-- // Product 191 -->
        Product::create([
            'event_id' => 41,
            'category_id' => 9,
            'name' => 'Sus Coklat',
            'stock' => 500,
            'description' => 'Besar Harapan kami sampai ke lokasi tujuan kaka dengan kondisi baik dan utuh.isi coklat lebih banyak dan lumer',
            'price' => 40500,
            'modal' => 27000,
            'image' => 'product-191.jpg'
        ]);

        // <!-- // Product 192 -->
        Product::create([
            'event_id' => 41,
            'category_id' => 9,
            'name' => 'Coco Crunch',
            'stock' => 432,
            'description' => 'Coco Crunch`',
            'price' => 22500,
            'modal' => 15000,
            'image' => 'product-192.jpg'
        ]);

        // <!-- // Product 193 -->
        Product::create([
            'event_id' => 41,
            'category_id' => 1,
            'name' => 'Stik Balado',
            'stock' => 69,
            'description' => 'PRODUK YANG KAMI JUAL 100% BARU',
            'price' => 22500,
            'modal' => 15000,
            'image' => 'product-193.jpg'
        ]);

        // <!-- // Product 194 -->
        Product::create([
            'event_id' => 41,
            'category_id' => 1,
            'name' => 'Keripik Kaca',
            'stock' => 248,
            'description' => 'Besar Harapan kami sampai ke lokasi tujuan kaka dengan kondisi baik dan utuh',
            'price' => 45000,
            'modal' => 30000,
            'image' => 'product-194.jpg'
        ]);

        // <!-- // Product 195 -->
        Product::create([
            'event_id' => 41,
            'category_id' => 9,
            'name' => 'Coco Crunch',
            'stock' => 256,
            'description' => 'Besar Harapan kami sampai ke lokasi tujuan kaka dengan kondisi baik dan utuh.Sereal coklat untuk anak2 bisa ditambahkan susu atau dimakan langsung',
            'price' => 42000,
            'modal' => 28000,
            'image' => 'product-195.jpg'
        ]);

        // <!-- // Product 196 -->
        Product::create([
            'event_id' => 42,
            'category_id' => 9,
            'name' => 'nyam nyam',
            'stock' => 124,
            'description' => 'Besar Harapan kami sampai ke lokasi tujuan kaka dengan kondisi baik dan utuh.nyamnyam buat campuran minuman sama makanan biskuit dan coklat',
            'price' => 22500,
            'modal' => 15000,
            'image' => 'product-196.jpg'
        ]);

        // <!-- // Product 197 -->
        Product::create([
            'event_id' => 42,
            'category_id' => 9,
            'name' => 'Makaroni ',
            'stock' => 24,
            'description' => 'Besar Harapan kami sampai ke lokasi tujuan kaka dengan kondisi baik dan utuh.Makaroni Spiral merupakan pengembangan jenis cemilan berbahan pasta yang berbentuk spiral dengan rasa pedas manis. Makaroni memang cemilan yang gak pernah membosankan, selain rasa yang bikin nagih cemilan ini juga sangat terjangkau soal harga. Enak ka:)',
            'price' => 52500,
            'modal' => 35000,
            'image' => 'product-197.jpg'
        ]);

        // <!-- // Product 198 -->
        Product::create([
            'event_id' => 42,
            'category_id' => 9,
            'name' => 'Makaroni',
            'stock' => 134,
            'description' => 'Besar Harapan kami sampai ke lokasi tujuan kaka dengan kondisi baik dan utuh.Makaroni Spiral merupakan pengembangan jenis cemilan berbahan pasta yang berbentuk spiral dengan rasa pedas manis. Makaroni memang cemilan yang gak pernah membosankan, selain rasa yang bikin nagih cemilan ini juga sangat terjangkau soal harga. Enak ka:)',
            'price' => 52500,
            'modal' => 35000,
            'image' => 'product-198.jpg'
        ]);

        // <!-- // Product 199 -->
        Product::create([
            'event_id' => 42,
            'category_id' => 9,
            'name' => 'Pilus Jagung',
            'stock' => 56,
            'description' => 'Untuk keripik atau produk yang mudah hancur lainnya walaupun sudah dipacking dengan bubblewrap dan kardus masih bisa kemungkinan hancur karena proses pengiriman, produk yang mudah hancur tidak bisa sampai ke tangan pembeli dalam keadaan utuh 100%. Jadi mohon pengertiannya kalau hancur sedikit WAJAR. ',
            'price' => 27000,
            'modal' => 18000,
            'image' => 'product-199.jpg'
        ]);

        // <!-- // Product 200 -->
        Product::create([
            'event_id' => 42,
            'category_id' => 9,
            'name' => 'Pilus Jagung',
            'stock' => 240,
            'description' => 'Untuk keripik atau produk yang mudah hancur lainnya walaupun sudah dipacking dengan bubblewrap dan kardus masih bisa kemungkinan hancur karena proses pengiriman, produk yang mudah hancur tidak bisa sampai ke tangan pembeli dalam keadaan utuh 100%. Jadi mohon pengertiannya kalau hancur sedikit WAJAR. ',
            'price' => 22500,
            'modal' => 15000,
            'image' => 'product-200.jpg'
        ]);

        // <!-- // Product 201 -->
        Product::create([
            'event_id' => 43,
            'category_id' => 4,
            'name' => 'Kaos native',
            'stock' => 100,
            'description' => 'Kaos distro Native8 model casual dengan desain yang beragam, unik dan berbeda dengan yang lain. Menggunakan bahan katun yang berkualitas tinggi, nyaman dipakai untuk melengkapi hari harimu. ',
            'price' => 57000,
            'modal' => 38000,
            'image' => 'product-201.jpg'
        ]);


        // <!-- // Product 202 -->
        Product::create([
            'event_id' => 43 ,
            'category_id' => 4,
            'name' => 'Kaos People',
            'stock' => 110,
            'description' => 'Kaos distro Native8 model casual dengan desain yang beragam, unik dan berbeda dengan yang lain. Menggunakan bahan katun yang berkualitas tinggi, nyaman dipakai untuk melengkapi hari harimu. ',
            'price' => 72000,
            'modal' => 48000,
            'image' => 'product-202.jpg'
        ]);


        // <!-- // Product 203 -->
        Product::create([
            'event_id' => 43,
            'category_id' => 4,
            'name' => 'Kaos Native8',
            'stock' => 120,
            'description' => 'Kaos distro Native8 model casual dengan desain yang beragam, unik dan berbeda dengan yang lain. Menggunakan bahan katun yang berkualitas tinggi, nyaman dipakai untuk melengkapi hari harimu. ',
            'price' => 72000,
            'modal' => 48000,
            'image' => 'product-203.jpg'
        ]);


        // <!-- // Product 204 -->
        Product::create([
            'event_id' => 43,
            'category_id' => 4,
            'name' => 'Kaos Distro',
            'stock' => 130,
            'description' => 'Kaos distro Native8 model casual dengan desain yang beragam, unik dan berbeda dengan yang lain. Menggunakan bahan katun yang berkualitas tinggi, nyaman dipakai untuk melengkapi hari harimu. ',
            'price' => 72000,
            'modal' => 48000,
            'image' => 'product-204.jpg'
        ]);


        // <!-- // Product 205 -->
        Product::create([
            'event_id' => 43,
            'category_id' => 4,
            'name' => 'Kaos Forest',
            'stock' => 140,
            'description' => 'Kaos distro Native8 model casual dengan desain yang beragam, unik dan berbeda dengan yang lain. Menggunakan bahan katun yang berkualitas tinggi, nyaman dipakai untuk melengkapi hari harimu. ',
            'price' => 57000,
            'modal' => 38000,
            'image' => 'product-205.jpg'
        ]);


        // <!-- // Product 206 -->
        Product::create([
            'event_id' => 43,
            'category_id' => 4,
            'name' => 'Kaos Chill',
            'stock' => 150,
            'description' => 'Kaos distro Native8 model casual dengan desain yang beragam, unik dan berbeda dengan yang lain. Menggunakan bahan katun yang berkualitas tinggi, nyaman dipakai untuk melengkapi hari harimu. ',
            'price' => 67500,
            'modal' => 45000,
            'image' => 'product-206.jpg'
        ]);


        // <!-- // Product 207 -->
        Product::create([
            'event_id' => 44,
            'category_id' => 4,
            'name' => 'Kaos Surf',
            'stock' => 160,
            'description' => 'Kaos distro Native8 model casual dengan desain yang beragam, unik dan berbeda dengan yang lain. Menggunakan bahan katun yang berkualitas tinggi, nyaman dipakai untuk melengkapi hari harimu.',
            'price' => 72000,
            'modal' => 48000,
            'image' => 'product-207.jpg'
        ]);


        // <!-- // Product 208 -->
        Product::create([
            'event_id' => 44,
            'category_id' => 4,
            'name' => 'Kaos Stay',
            'stock' => 170,
            'description' => 'Kaos distro Native8 model casual dengan desain yang beragam, unik dan berbeda dengan yang lain. Menggunakan bahan katun yang berkualitas tinggi, nyaman dipakai untuk melengkapi hari harimu.',
            'price' => 67500,
            'modal' => 45000,
            'image' => 'product-208.jpg'
        ]);


        // <!-- // Product 209 -->
        Product::create([
            'event_id' => 44,
            'category_id' => 4,
            'name' => 'Kaos Locals',
            'stock' => 180,
            'description' => 'Kaos distro Native8 model casual dengan desain yang beragam, unik dan berbeda dengan yang lain. Menggunakan bahan katun yang berkualitas tinggi, nyaman dipakai untuk melengkapi hari harimu.',
            'price' => 57000,
            'modal' => 38000,
            'image' => 'product-209.jpg'
        ]);


        // <!-- // Product 210 -->
        Product::create([
            'event_id' => 44,
            'category_id' => 4,
            'name' => 'Kaos Distro',
            'stock' => 190,
            'description' => 'Kaos distro Native8 model casual dengan desain yang beragam, unik dan berbeda dengan yang lain. Menggunakan bahan katun yang berkualitas tinggi, nyaman dipakai untuk melengkapi hari harimu. ',
            'price' => 57000,
            'modal' => 38000,
            'image' => 'product-210.jpg'
        ]);


        // <!-- // Product 211 -->
        Product::create([
            'event_id' => 44,
            'category_id' => 4,
            'name' => 'Kemeja Pria',
            'stock' => 200,
            'description' => 'Kemeja Polos yang Best Seller dengan bahan katun poplin yang premium sehingga nyaman sekali dipakai, tidak panas dan cocok banget untuk pilihan anda beraktivitas sehari-hari, dengan warna warna yang minimalis, anda akan terlihat lebih fresh dan stylish. ',
            'price' => 22500,
            'modal' => 15000,
            'image' => 'product-211.jpg'
        ]);

        // <!-- // Product 212 -->
        Product::create([
            'event_id' => 44,
            'category_id' => 8,
            'name' => 'Celana Bahan',
            'stock' => 190,
            'description' => 'CELANA PANJANG KANTOR PRIA MODEL SLIMFIT ',
            'price' => 82500,
            'modal' => 55000,
            'image' => 'product-212.jpg'
        ]);

        // <!-- // Product 213 -->
        Product::create([
            'event_id' => 44,
            'category_id' => 8,
            'name' => 'Kaos Distro',
            'stock' => 190,
            'description' => 'Bahan jatoh, potongan slimfit. Jadi selalu terlihat mewah.  Cocok untuk segala aktifitas formal maupun casual',
            'price' => 82500,
            'modal' => 55000,
            'image' => 'product-213.jpg'
        ]);

        // <!-- // Product 214 -->
        Product::create([
            'event_id' => 45,
            'category_id' => 8,
            'name' => 'Celana Kantor',
            'stock' => 170,
            'description' => 'CELANA PANJANG KANTOR PRIA MODEL SLIMFIT ',
            'price' => 82500,
            'modal' => 55000,
            'image' => 'product-214.jpg'
        ]);

        // <!-- // Product 215 -->
        Product::create([
            'event_id' => 45,
            'category_id' => 8,
            'name' => 'Celana Kantor',
            'stock' => 160,
            'description' => 'CELANA PANJANG KANTOR PRIA MODEL SLIMFIT',
            'price' => 82500,
            'modal' => 55000,
            'image' => 'product-215.jpg'
        ]);

        // <!-- // Product 216 -->
        Product::create([
            'event_id' => 45,
            'category_id' => 8,
            'name' => 'Celana Pendek',
            'stock' => 150,
            'description' => 'Spesifikasi : Celana Pendek Kargo, Bahan Cotton NON Strecht, Jenis Celana Pendek Kargo ',
            'price' => 22500,
            'modal' => 15000,
            'image' => 'product-216.jpg'
        ]);

        // <!-- // Product 217 -->
        Product::create([
            'event_id' => 45,
            'category_id' => 8,
            'name' => 'Celana Kantor',
            'stock' => 140,
            'description' => 'Nyaman dipakai bahan katun non stretch untuk santai  dan untuk camp. terlihat casual & cool. Terbuat dari bahan poly-katun halus nyaman ',
            'price' => 82500,
            'modal' => 55000,
            'image' => 'product-217.jpg'
        ]);

        // <!-- // Product 218 -->
        Product::create([
            'event_id' => 45,
            'category_id' => 8,
            'name' => 'Celana Chino',
            'stock' => 130,
            'description' => 'Nyaman dipakai bahan katun non stretch untuk santai  dan untuk camp. terlihat casual & cool. Terbuat dari bahan poly-katun halus nyaman ',
            'price' => 22500,
            'modal' => 15000,
            'image' => 'product-218.jpg'
        ]);

        // <!-- // Product 219 -->
        Product::create([
            'event_id' => 45,
            'category_id' => 8,
            'name' => 'Celana Formal',
            'stock' => 120,
            'description' => 'Nyaman dipakai bahan katun non stretch untuk santai  dan untuk camp. terlihat casual & cool. Terbuat dari bahan poly-katun halus nyaman ',
            'price' => 82500,
            'modal' => 55000,
            'image' => 'product-219.jpg'
        ]);

        // <!-- // Product 220 -->
        Product::create([
            'event_id' => 45,
            'category_id' => 8,
            'name' => 'Celana Cargo',
            'stock' => 110,
            'description' => 'Nyaman dipakai bahan katun non stretch untuk santai  dan untuk camp. terlihat casual & cool. Terbuat dari bahan poly-katun halus nyaman ',
            'price' => 22500,
            'modal' => 15000,
            'image' => 'product-220.jpg'
        ]);

        // <!-- // Product 221 -->
        Product::create([
            'event_id' => 45,
            'category_id' => 10,
            'name' => 'Sweater polos',
            'stock' => 100,
            'description' => 'Sweater yang cocok untuk sista and agan yang selalu mengikuti trend kekinian dan juga fashionable karna bahan lembut juga tidak mudah kusut tentunya menambah kesan rapih',
            'price' => 67500,
            'modal' => 45000,
            'image' => 'product-221.jpg'
        ]);

        // <!-- // Product 222 -->
        Product::create([
            'event_id' => 33,
            'category_id' => 10,
            'name' => 'Crewneck',
            'stock' => 99,
            'description' => 'Sweater yang cocok untuk sista and agan yang selalu mengikuti trend kekinian dan juga fashionable karna bahan lembut juga tidak mudah kusut tentunya menambah kesan rapih ',
            'price' => 60000,
            'modal' => 40000,
            'image' => 'product-222.jpg'
        ]);

        // <!-- // Product 223 -->
        Product::create([
            'event_id' => 33,
            'category_id' => 10,
            'name' => 'Sweater Basic',
            'stock' => 100,
            'description' => 'Sweater yang cocok untuk sista and agan yang selalu mengikuti trend kekinian dan juga fashionable karna bahan lembut juga tidak mudah kusut tentunya menambah kesan rapih ',
            'price' => 57000,
            'modal' => 38000,
            'image' => 'product-223.jpg'
        ]);

        // <!-- // Product 224 -->
        Product::create([
            'event_id' => 33,
            'category_id' => 10,
            'name' => 'Dinos Hoodie',
            'stock' => 102,
            'description' => 'Sweater yang cocok untuk sista and agan yang selalu mengikuti trend kekinian dan juga fashionable karna bahan lembut juga tidak mudah kusut tentunya menambah kesan rapih',
            'price' => 72000,
            'modal' => 48000,
            'image' => 'product-224.jpg'
        ]);

        // <!-- // Product 225 -->
        Product::create([
            'event_id' => 33,
            'category_id' => 10,
            'name' => 'R Venck',
            'stock' => 105,
            'description' => 'Sweater yang cocok untuk sista and agan yang selalu mengikuti trend kekinian dan juga fashionable karna bahan lembut juga tidak mudah kusut tentunya menambah kesan rapih ',
            'price' => 57000,
            'modal' => 38000,
            'image' => 'product-225.jpg'
        ]);

        // <!-- // Product 226 -->
        Product::create([
            'event_id' => 33,
            'category_id' => 10,
            'name' => 'Combie Sweater',
            'stock' => 108,
            'description' => 'Sweater yang cocok untuk sista and agan yang selalu mengikuti trend kekinian dan juga fashionable karna bahan lembut juga tidak mudah kusut tentunya menambah kesan rapih',
            'price' => 63000,
            'modal' => 42000,
            'image' => 'product-226.jpg'
        ]);

        // <!-- // Product 227 -->
        Product::create([
            'event_id' => 33,
            'category_id' => 10,
            'name' => 'Sweater Hoodie',
            'stock' => 108,
            'description' => 'Sweater yang cocok untuk sista and agan yang selalu mengikuti trend kekinian dan juga fashionable karna bahan lembut juga tidak mudah kusut tentunya menambah kesan rapih ',
            'price' => 63000,
            'modal' => 42000,
            'image' => 'product-227.jpg'
        ]);

        // <!-- // Product 228 -->
        Product::create([
            'event_id' => 33,
            'category_id' => 10,
            'name' => 'Lotso Sweater',
            'stock' => 200,
            'description' => 'Sweater yang cocok untuk sista and agan yang selalu mengikuti trend kekinian dan juga fashionable karna bahan lembut juga tidak mudah kusut tentunya menambah kesan rapih',
            'price' => 66000,
            'modal' => 44000,
            'image' => 'product-228.jpg'
        ]);

        // <!-- // Product 229 -->
        Product::create([
            'event_id' => 33,
            'category_id' => 10,
            'name' => 'Jaket Zipper',
            'stock' => 130,
            'description' => 'Sweater yang cocok untuk sista and agan yang selalu mengikuti trend kekinian dan juga fashionable karna bahan lembut juga tidak mudah kusut tentunya menambah kesan rapih',
            'price' => 82500,
            'modal' => 55000,
            'image' => 'product-229.jpg'
        ]);

        // <!-- // Product 230 -->
        Product::create([
            'event_id' => 33,
            'category_id' => 10,
            'name' => 'Jaker Croope',
            'stock' => 230,
            'description' => 'Sweater yang cocok untuk sista and agan yang selalu mengikuti trend kekinian dan juga fashionable karna bahan lembut juga tidak mudah kusut tentunya menambah kesan rapih',
            'price' => 66000,
            'modal' => 44000,
            'image' => 'product-230.jpg'
        ]);
    // PRODUCT
    }
}
