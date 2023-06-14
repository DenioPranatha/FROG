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
    }
}
