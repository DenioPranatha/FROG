<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // EVENT
        // <!-- 1 -->
        Event::create([
            'destination_id' => 1,
            'user_id' => 5,
            'name' => 'Charity Action of RTB',
            'slug' => 'Charity Action',
            'start_date' => '2023-06-23',
            'end_date' => '2023-07-20',
            'duration' => 28,
            'status' => 'accepted',
            'description' => 'Kami dari komunitas Rumah Talenta BCA mengadakan kegiatan amal untuk membantu adik-adik kita yang ada di beberapa panti asuhan terdekat. Tujuan dari event penggalangan dana ini adalah agar adik-adik kita yang tinggal di panti asuhan tersebut dapat terbantu dari sisi pagan pada bulan suci Ramadhan',
            'image' => 'event-1.jpg'
        ]);

        // <!-- 2 -->
        Event::create([
            'destination_id' => 18,
            'user_id' => 5,
            'name' => 'Pasaman Earthquake Fundraising',
            'slug' => 'Pasaman Earthquake',
            'start_date' => '2023-07-07',
            'end_date' => '2023-08-01',
            'duration' => 25,
            'status' => 'accepted',
            'description' => 'Kami dari komunitas peduli bencana ingin melakukan penggalangan dana atas terjadinya bencana alam gempa bumi di Pasamanan yang telah terjadi beberapa hari yang lalu. Tujuan penggalangan dana ini untuk membantu para warga yang terkena efek bencana alam tersebut seperti membantu memperbaiki kerusakan rumah mereka',
            'image' => 'event-2.jpg'
        ]);

        // <!-- 3 -->
        Event::create([
            'destination_id' => 9,
            'user_id' => 5,
            'name' => 'Bantu Mereka yang Kena Banjir Yuk',
            'slug' => 'Bantu Banjir Yuk',
            'start_date' => '2023-06-25',
            'end_date' => '2023-07-21',
            'duration' => 19,
            'status' => 'accepted',
            'description' => 'Kami dari komununitas CareOthers ingin membantu sanak saudara-saudari kita yang telah terkena bencala alam Banjir yang terjadi di Jakarta dini hari tadi. Hasil Penggalangan dana ini nantinya akan diberikan kepada mereka dalam rupa persedian makanan, pakaian, serta sedikit uang tunai.',
            'image' => 'event-3.jpg'
        ]);

        // <!-- 4 -->
        Event::create([
            'destination_id' => 15,
            'user_id' => 5,
            'name' => 'Longsor Puncak, Bogor',
            'slug' => 'Longsor Puncak',
            'start_date' => '2023-07-12',
            'end_date' => '2023-07-22',
            'duration' => 10,
            'status' => 'accepted',
            'description' => 'Kami dari pemuda sentul city berencana membantu para warga puncak Bogor sekitarnya yang telah dievakuasi karena terjadinya bencana longsor. Maka dengan itu, kami mengajak teman-teman sekalian untuk ikut bersama kami membantu saudara-saudari kita yang telah terkena longsor tersebut dengan melakukan penggalangan dana yang nantinya akan diserahkan kepada mereka.',
            'image' => 'event-4.jpg'
        ]);

        // <!-- 5 -->
        Event::create([
            'destination_id' => 1,
            'user_id' => 2,
            'name' => 'Care Taman Sukacita',
            'slug' => 'Care Taman Sukacita',
            'start_date' => '2023-06-17',
            'end_date' => '2023-07-10',
            'duration' => 21,
            'status' => 'accepted',
            'description' => 'Kami dari Frog community ingin melakukan penggalangan data yang bertujuan untuk membantu adik-adik kita yatim piatu untuk membeli berbagai perlengkapan sekolah yang mereka butuhkan, seperti berbagai alat tulis, buku catatan, serta buku pelajaran',
            'image' => 'event-5.jpg'
        ]);

        // <!-- 6 -->
        Event::create([
            'destination_id' => 1,
            'user_id' => 2,
            'name' => 'Peduli Panti Jompo Kasih Sayang',
            'slug' => 'Peduli Panti Jompo',
            'start_date' => '2023-07-01',
            'end_date' => '2023-07-29',
            'duration' => 28,
            'status' => 'accepted',
            'description' => 'Kami dari karang taruna desa selayang berkeinginan untuk membantu orang tua kita yang ada di panti jompo kasih sayang. Dengan bantuan kita bersama, semoga mereka dapat merasakan kebahagiaan dan rasa peduli dari kita. Dana yang telah terkumpul nantinya akan digunakan untuk memberikan pakaian kepada mereka',
            'image' => 'event-6.jpg'
        ]);

        // <!-- 7 -->
        Event::create([
            'destination_id' => 7,
            'user_id' => 3,
            'name' => 'Banjir Sungai Kapuas Kalteng',
            'slug' => 'Banjir Sungai Kapuas',
            'start_date' => '2023-03-23',
            'end_date' => '2023-04-20',
            'duration' => 28,
            'status' => 'accepted',
            'description' => 'Kami dari Osis SMA Negri 7 Tangsel akan melakukan gerakan untuk membantu saudara-saudari kita yang terkena bencana banjir sungai kapuas yang terjadi di Kalimantan Tengah. Kami berharap ketersedian kita semua untuk ikut serta melakukan penggalangan dana guna membantu saudara-saudari kiita disana',
            'image' => 'event-7.jpg'
        ]);

        // <!-- 8 -->
        Event::create([
            'destination_id' => 5,
            'user_id' => 3,
            'name' => 'Yuk Bantu Madrasah DTAAI-ITTIHAD',
            'slug' => 'Bantu Madrasah yuk',
            'start_date' => '2023-07-13',
            'end_date' => '2023-08-11',
            'duration' => 28,
            'status' => 'accepted',
            'description' => 'Kami dari Komunitas Pemuda Peduli Sesama Babakan Madang ingin melakukan penggalangan dana yang bertujuan untuk membantu adik-adik kita yang berada di Madrasah DTAAI-ITTIHAD untuk membelikan berbagai perlengkapan pembelajaran yang mereka butuhkan. Diharapkan kesidian kita semua untuk ikut berpartisipasi dalam penggalangan dana ini',
            'image' => 'event-8.jpg'
        ]);

        // <!-- 9 -->
        Event::create([
            'destination_id' => 8,
            'user_id' => 4,
            'name' => 'Gerakan Bantu Tanah Longsor Payung',
            'slug' => 'Longsor Payung',
            'start_date' => '2023-06-27',
            'end_date' => '2023-07-25',
            'duration' => 28,
            'status' => 'accepted',
            'description' => 'Kami dari Karang Taruna Serdang berkeingan untuk membantu saudara-saudari kita yang terkena dampak tanah longsong yang terjadi di payung.Diharapkan ketersediaan kita semua untuk menyukseskan penggalangan dana ini',
            'image' => 'event-9.jpg'
        ]);

        // <!-- 10 -->
        Event::create([
            'destination_id' => 10,
            'user_id' => 4,
            'name' => 'Gerakan Panti Asuhan Alqi Ceria',
            'slug' => 'Panti Alqi Ceria',
            'start_date' => '2023-06-30',
            'end_date' => '2023-07-24',
            'duration' => 24,
            'status' => 'accepted',
            'description' => 'Kami dari Mahasiswa Binus University melakukan penggalangan dana untuk membantu teman-teman kita yang berada di panti asuhan Alqi Cerita untuk membantu mereka melengkapi berbagai kebutuhan yang sekiranya mereka butuhkan',
            'image' => 'event-10.jpg'
        ]);

        // <!--  Event 11 -->

        Event::create([
            'destination_id' => 20,
            'user_id' => 1,
            'name' => 'SMA Charitas Charity Event',
            'slug' => 'SMA Charitas Charity',
            'start_date' => '2023-07-01',
            'end_date' => '2023-07-29',
            'duration' => 28,
            'status' => 'accepted',
            'description' => 'SMA Charitas ingin membangun aksi kepedulian sosial yang dapat berdampak bagi kesejahteraan masyarakat yang membutuhkan. Maka dari itu kami mengadakan acara penggalangan dana yang disebut SMA Charitas Charity Event. Pada Event ini, kami mengundang pada donatur sekalian untuk dapat bersama-sama berpartisipasi dalam kegiatan penggalangan dana ini, sehingga kita dapat berperan dalam membantu masyarakat sekitar yang membutuhkan.',
            'image' => 'event-11.jpg'
        ]);

        // <!-- Event 12 -->

        Event::create([
            'destination_id' => 12,
            'user_id' => 2,
            'name' => 'Gerakan Sosial Sunib Unversity',
            'slug' => 'Gerakan Sosial Sunib',
            'start_date' => '2023-07-10',
            'end_date' => '2023-08-07',
            'duration' => 28,
            'status' => 'accepted',
            'description' => 'Gerakan Sosial Sunib University merupakan suatu gerakan yang dicetus oleh seluruh mahasiswa Sunib untuk dapat membantu orang-orang yang membutuhkan. Meskipun begitu, kami sadar kami sendiri tidak akan cukup untuk memeriahkan aksi ini. Maka dari itu kami mengundang teman-teman sekalian untuk ikut berpartisipasi dalam event ini. Mari kita bersama membantu mereka yang membutuhkan!',
            'image' => 'event-12.jpg'
        ]);

        // <!--  Event 13 -->

        Event::create([
            'destination_id' => 11,
            'user_id' => 4,
            'name' => 'Bantuan Sosial Panti',
            'slug' => 'Bantuan Sosial Panti',
            'start_date' => '2023-04-29',
            'end_date' => '2023-05-20',
            'duration' => 21,
            'status' => 'accepted',
            'description' => 'Panti asuhan saat ini merupakan salah satu tempat yang sangat berpengaruh bagi mereka yang kehilangan orang yang dikasihi atau ditelantarkan. Maka dari itu kami selaku penyelenggara Bantuan Sosial Panti ingin mengajak saudara sekalian membantu mereka yang tinggal di panti untuk dapat memenuhi kebutuhan sehari-hari mereka, sehingga mereka dapat hidup layak dan berkecukupan.',
            'image' => 'event-13.jpg'
        ]);

        // <!--  Event 14 -->

        Event::create([
            'destination_id' => 13,
            'user_id' => 3,
            'name' => 'Gerakan Sosial SMP Ursula',
            'slug' => 'Sosial SMP Ursula',
            'start_date' => '2023-06-22',
            'end_date' => '2023-07-19',
            'duration' => 28,
            'status' => 'accepted',
            'description' => 'SMA Ursula saat ini sedang mengadakan gerakan sosial berskala nasional yang bertujuan untuk membantu teman-teman kita yang berkekurangan. Kami selaku penyelenggara mengajak saudara sekalian untuk ikut berpartisipasi dalam gerakan ini, sehingga semakin banyak teman-teman berkekurangan yang terbantu. ',
            'image' => 'event-14.jpg'
        ]);

        // <!--  Event 15 -->

        Event::create([
            'destination_id' => 19,
            'user_id' => 2,
            'name' => 'Bantuan Gempa Cianjur',
            'slug' => 'Bantuan Gempa Cianjur',
            'start_date' => '2023-07-10',
            'end_date' => '2023-08-02',
            'duration' => 22,
            'status' => 'accepted',
            'description' => 'Seperti yang kita ketahui, beberapa waktu lalu, Cianjur mengalami gempa yang berdampak pada sebagian warga di wilayah tersebut. Maka dari itu kami mengajak teman-teman semua untuk ikut menggalang dana bagi mereka yang terkena dampak bencana tersebut. Dana yang diberikan oleh teman-teman sekalian akan sepenuhnya disampaikan kepada mereka yang terdampak bencana di Cianjur ini.',
            'image' => 'event-15.jpg'
        ]);

        // <!--  Event 16 -->

        Event::create([
            'destination_id' => 28,
            'user_id' => 3,
            'name' => 'Peduli Banjir di Batu',
            'slug' => 'Peduli Banjir di Batu',
            'start_date' => '2023-04-15',
            'end_date' => '2023-05-13',
            'duration' => 28,
            'status' => 'accepted',
            'description' => 'Banjir di daerah Batu telah mengakibatkan banyak warga terkena dampaknya. Kami dari komunitas relawan banjir, mengadakan kegiatan penggalangan dana untuk membantu warga yang terkena dampak dari banjir tersebut. Maka dari itu sangat besar harapan kami untuk para donatur sekalian dapat berpartisipasi.',
            'image' => 'event-16.jpg'
        ]);

        // <!--  Event 17 -->

        Event::create([
            'destination_id' => 29,
            'user_id' => 3,
            'name' => 'Bantuan Longsor Desa Lau',
            'slug' => 'Longsor Desa Lau',
            'start_date' => '2023-06-30',
            'end_date' => '2023-07-22',
            'duration' => 23,
            'status' => 'accepted',
            'description' => 'Kami bagian dari komunitas relawan longsor mengadakan kegiatan penggalangan dana untuk bencana longsor yang terjadi di wilayah Desa Lau. Kami mengharapkan peran serta teman-teman sekalian dalam penggalangan dana ini, sehingga seluruh warga yang terdampak bencana tersebut dapat terbantu.',
            'image' => 'event-17.jpg'
        ]);

        // <!--  Event 18 -->

        Event::create([
            'destination_id' => 6,
            'user_id' => 4,
            'name' => 'Aksi Sosial Peduli Anak',
            'slug' => 'Sosial Peduli Anak',
            'start_date' => '2023-07-01',
            'end_date' => '2023-07-21',
            'duration' => 20,
            'status' => 'accepted',
            'description' => 'Anak merupakan aset bangsa yang sangat berharga. Kami dari kelompok peduli anak mengadakaan Aksi Sosial Peduli Anak yang berfokus pada pemenuhan kebutuhan dan pengembangan anak Indonesia. Kami berharap peran serta saudara sekalian dalam kegiatan ini, sehingga seluruh hasil dari penggalangan dana ini dapat dimanfaatkan secara maksimal untuk pemenuhan kebutuhan dan pengembangan anak Indonesia.',
            'image' => 'event-18.jpg'
        ]);

        // <!--  Event 19 -->

        Event::create([
            'destination_id' => 26,
            'user_id' => 4,
            'name' => 'Gerakan Indonesia Sehat',
            'slug' => 'Gerakan Sehat',
            'start_date' => '2023-07-05',
            'end_date' => '2023-08-01',
            'duration' => 26,
            'status' => 'accepted',
            'description' => 'Kami dari komunitas Indonesia Sehat mengadakan Gerakan Indonesia Sehat yang bertujuan untuk mewujudkan kesehatan bagi masyarakat Indonesia. Seluruh hasil dari gerakan ini nantinya akan digunakan untuk biaya pengobatan atau keperluan kesehatan mereka yang sedang terserang penyakit tertentu. ',
            'image' => 'event-19.jpg'
        ]);

        // <!--  Event 20 -->

        Event::create([
            'destination_id' => 30,
            'user_id' => 4,
            'name' => 'Aksi peduli HIV/AIDS',
            'slug' => 'Peduli HIV/AIDS',
            'start_date' => '2023-05-24',
            'end_date' => '2023-06-12',
            'duration' => 19,
            'status' => 'accepted',
            'description' => 'HIV/AIDS merupakan salah satu penyakit yang cukup berbahaya sekaligus sangat berdampak bagi kehidupan mereka yang terjangkit. Maka dari itu, kami dari organisasi peduli HIV/AIDS mengadakan aksi peduli HIV/AIDS untuk pemenuhan kebutuhan kesehatan sekaligus menunjang kehidupan mereka yang terdampak HIV/AIDS. Maka dari itu kami membutuhkan uluran tangan saudara sekalian untuk dapat menjangkau lebih banyak penderita HIV/AIDS',
            'image' => 'event-20.jpg'
        ]);

        // <!--  Event 21 -->

        Event::create([
            'destination_id' => 24,
            'user_id' => 1,
            'name' => 'Gerakan Sekolah Nusantara',
            'slug' => 'Gerakan Nusantara',
            'start_date' => '2023-06-30',
            'end_date' => '2023-07-20',
            'duration' => 20,
            'status' => 'accepted',
            'description' => '"Sekolah adalah jantung Bangsa, sebab disitulah penerus Bangsa di-didik". berkaca dari kutipan tersebut, kami ingin mengadakan Gerakan Sekolah Nusantara yang akan berfokus pada pembangunan dan perkembangan sekolah yang sudah rusak dan tidak layak digunakan. Hasil bantuan dari saudara-sekalian akan sepenuhnya disalurkan ke sekolah-sekolah tersebut.',
            'image' => 'event-21.jpg'
        ]);

        // <!--  Event 22 -->

        Event::create([
            'destination_id' => 21,
            'user_id' => 1,
            'name' => 'Bantuan untuk Panti Hanna',
            'slug' => 'Bantuan Panti Hanna',
            'start_date' => '2023-06-05',
            'end_date' => '2023-07-03',
            'duration' => 28,
            'status' => 'accepted',
            'description' => 'Panti Hanna menampung beberapa Lansia yang masih perlu bantuan untuk keberlangsungan hidupnya sehari-hari. Maka dari itu kami mendorong bapak-ibu sekalian untuk dapat tergerak membantu mereka, sehingga kebutuhan mereka dapat tetap terjaga di masa tua mereka.',
            'image' => 'event-22.jpg'
        ]);

        // <!--  Event 23 -->

        Event::create([
            'destination_id' => 17,
            'user_id' => 3,
            'name' => 'Gerakan Peduli Bibir Sumbing',
            'slug' => 'Peduli Bibir Sumbing',
            'start_date' => '2023-07-01',
            'end_date' => '2023-07-18',
            'duration' => 17,
            'status' => 'accepted',
            'description' => 'Kami dari Komunitas Sumbing Indonesia, mengajak saudara sekalian untuk berpartisipasi dalam Gerakan peduli Bibir Sumbing yang berskala Nasional ini. Bantuan dari saudara sekalian akan dialokasikan untuk operasi bibir sumbing masyarakat Indonesia.',
            'image' => 'event-23.jpg'
        ]);

        // <!--  Event 24 -->

        Event::create([
            'destination_id' => 27,
            'user_id' => 3,
            'name' => 'Aksi Kesehatan Mata Indonesia',
            'slug' => 'Aksi Kesehatan Mata',
            'start_date' => '2023-07-05',
            'end_date' => '2023-08-02',
            'duration' => 28,
            'status' => 'accepted',
            'description' => 'Mata merupakan salah satu jendela Dunia. Maka dari itu kami dari Komunitas Peduli Mata mengadakan Aksi Kesehatan Mata Indonesia yang bertujuan untuk mendorong kepedulian masyarakat terhadap kesehatan mata sekaligus untuk keperluan pengobatan mata masyarakat. Kami mengundang saudara sekalian untuk berpartisipasi dalam aksi ini.',
            'image' => 'event-24.jpg'
        ]);

        // <!--  Event 25 -->

        Event::create([
            'destination_id' => 22,
            'user_id' => 4,
            'name' => 'Bantuan Lansia Panti Jompo',
            'slug' => 'Bantuan Lansia',
            'start_date' => '2023-06-22',
            'end_date' => '2023-07-11',
            'duration' => 19,
            'status' => 'accepted',
            'description' => 'Kami dari komunitas peduli Lansia mengadakan kegiatan penggalangan dana untuk membantu memenuhi kebutuhan hidup Lansia di Panti Jompo. Bantuan dari saudara sekalian akan sepenuhnya disalurkan kepada para Lansia di Panti Jompo sehingga mereka dapat hidup layak dan berkecukupan.',
            'image' => 'event-25.jpg'
        ]);

        // <!--  Event 26 -->

        Event::create([
            'destination_id' => 25,
            'user_id' => 4,
            'name' => 'Yuk Bantu Anak Indonesia',
            'slug' => 'Bantu Anak Indonesia',
            'start_date' => '2023-07-18',
            'end_date' => '2023-08-05',
            'duration' => 17,
            'status' => 'accepted',
            'description' => 'Bantuan bagi Anak Indonesia bertujuan untuk membantu seluruh anak di Indonesia, secara khusus membantu sekolah tempat mereka menimba ilmu. Dana dari saudara sekalian akan digunakan sepenuhnya untuk pembangunan sekolah-sekolah yang telah rusak, sehingga anak-anak dapat menempuh pendidikan dengan lebih layak.',
            'image' => 'event-26.jpg'
        ]);

        // <!--  Event 27 -->

        Event::create([
            'destination_id' => 15,
            'user_id' => 2,
            'name' => 'Aksi Pemuda Peduli Indonesia',
            'slug' => 'Aksi Pemuda Peduli',
            'start_date' => '2023-06-14',
            'end_date' => '2023-07-03',
            'duration' => 19,
            'status' => 'accepted',
            'description' => 'Kami dari Kelompok Pemuda Indonesia mengadakan Aksi Pemuda Peduli Indonesia. Aksi ini bertujuan untuk membantu mereka yang membutuhkan di seluruh Indonesia, maka dari itu seluruh hasil dana dari aksi ini akan dialokasikan bagi mereka yang membutuhkan di seluruh Indonesia.',
            'image' => 'event-27.jpg'
        ]);

        // <!--  Event 28 -->

        Event::create([
            'destination_id' => 16,
            'user_id' => 2,
            'name' => 'Gerakan OMK Peduli',
            'slug' => 'Gerakan OMK Peduli',
            'start_date' => '2023-05-17',
            'end_date' => '2023-06-08',
            'duration' => 22,
            'status' => 'accepted',
            'description' => 'Gerakan OMK Peduli merupakan salah satu gerakan yang diadakan oleh Orang Muda Katolik yang bertujuan untuk membantu ereka yang kesulitan. Dana dan bantuan dari saudara sekalian akan dialokasikan sepenuhnya bagi mereka yang membutuhkan.',
            'image' => 'event-28.jpg'
        ]);

        // <!--  Event 29 -->

        Event::create([
            'destination_id' => 18,
            'user_id' => 3,
            'name' => 'Bantuan Bencana Gempa Sumbar',
            'slug' => 'Bencana Gempa Sumbar',
            'start_date' => '2023-06-19',
            'end_date' => '2023-07-03',
            'duration' => 14,
            'status' => 'accepted',
            'description' => 'Gempa di Sumbar telah berdampak kepada banyak masyarakat. Maka dari itu kami ingin mengadakan penggalangan dana untuk membantu mereka yang terdampak bencana gempa di Sumbar. Seluruh dana dari saudara sekalian akan langsung dialokasikan kepada mereka yang terdampak.',
            'image' => 'event-29.jpg'
        ]);

        // <!--  Event 30 -->

        Event::create([
            'destination_id' => 22,
            'user_id' => 3,
            'name' => 'Aksi Pelajar Peduli Lansia',
            'slug' => 'Pelajar Peduli Lansia',
            'start_date' => '2023-07-25',
            'end_date' => '2023-08-14',
            'duration' => 20,
            'status' => 'accepted',
            'description' => 'Kami dari Komunitas Pelajar Indonesia ingin mengadakan kegiatan Aksi Pelajar Peduli Lansia. Dimana seluruh dana hasil aksi ini akan dialokasikan untuk para Lansia yang tinggal di Panti Wredha atau Pnti Jompo. Dana terebut nantinya akan digunakan untuk pemenuhan kebutuhan para lansia tersebut.',
            'image' => 'event-30.jpg'
        ]);

        // <!--  Event 31 -->

        Event::create([
            'destination_id' => 5,
            'user_id' => 1,
            'name' => 'Peduli Sekolah Indonesia',
            'slug' => 'Peduli Sekolah',
            'start_date' => '2023-07-07',
            'end_date' => '2023-08-01',
            'duration' => 24,
            'status' => 'accepted',
            'description' => 'Saat ini sangat banyak Sekolah di Indonesia yang mengalami kerusakan yang cukup parah hingga menggangu pembelajaran siswa-siswi didalamnya. Maka dari itu kami mengajak teman-teman semua untuk ikut serta dalam penggalangan dana ini yang bertujuan untuk membantu sekolah di Indonesia yang mengalami kerusakan.',
            'image' => 'event-31.jpg'
        ]);

        // <!--  Event 32 -->

        Event::create([
            'destination_id' => 2,
            'user_id' => 1,
            'name' => 'Indonesia Peduli Panti',
            'slug' => 'Peduli Panti',
            'start_date' => '2023-05-29',
            'end_date' => '2023-06-24',
            'duration' => 26,
            'status' => 'accepted',
            'description' => 'Keprihatinan kami terhadap kondisi panti di Indonesia mendorong kami untuk mengadakan penggalangan dana ini yang bertujuan untuk memberikan bantuan kepada panti-panti yang ada Indonesia secara khusus untuk membantu para panti memenuhi kebutuhan hidup anak-anak panti.',
            'image' => 'event-32.jpg'
        ]);

        // <!--  Event 33 -->

        Event::create([
            'destination_id' => 23,
            'user_id' => 1,
            'name' => 'HIMTI Sunib Berbagi',
            'slug' => 'HIMTI Sunib Berbagi',
            'start_date' => '2023-07-02',
            'end_date' => '2023-07-30',
            'duration' => 28,
            'status' => 'accepted',
            'description' => 'HIMTI Sunib Kembali mengadakan penggalangan dana yang berfokus kepada kegiatan berbagi kepada mereka yang membutuhkan. Pada Event kali ini, kami secara khusus akan menyalurkan seluruh dana hasil penggalangan dan ini kepada Panti Wredha Graha Bina Asuh. Peran serta teman-teman sekalian akan sangat bermanfaat bagi mereka yang ada di panti tersebut.',
            'image' => 'event-33.jpg'
        ]);

        // <!--  Event 34 -->

        Event::create([
            'destination_id' => 14,
            'user_id' => 1,
            'name' => 'Bantuan Banjir Cissanggarung',
            'slug' => 'Banjir Cissanggarung',
            'start_date' => '2023-07-03',
            'end_date' => '2023-08-01',
            'duration' => 28,
            'status' => 'accepted',
            'description' => 'Saat ini Banjir di daerah Cissanggarung cukup berdampak bagi mereka yang tinggal di daerah tersebut. Maka dari itu kami mengadakan penggalangan dana untuk membantu mereka yang terdampak. Bantuan dari saudara sekalian akan disalurkan untuk pemenuhan kebutuhan air bersih dan kebutuhan sehar-hari para korban.',
            'image' => 'event-34.jpg'
        ]);

        // <!--  Event 35 -->

        Event::create([
            'destination_id' => 22,
            'user_id' => 2,
            'name' => 'Ayo Bantu Panti Agape!',
            'slug' => 'Bantu Panti Agape',
            'start_date' => '2023-07-01',
            'end_date' => '2023-07-22',
            'duration' => 21,
            'status' => 'accepted',
            'description' => 'Panti Agape menampung banyak anak-anak yang masih membutuhkan bantuan untuk kebutuhan sehari-harinya. Kami mengadakan aksi penggalangan dana ini secara khusus untuk membantu mereka yang ada di Panti Agape. Seluruh dana akan langsung dialokasikan ke Panti Agape untuk keperluan hidup sehari-hari.',
            'image' => 'event-35.jpg'
        ]);

        // <!--  Event 36 -->

        Event::create([
            'destination_id' => 20,
            'user_id' => 2,
            'name' => 'Karang taruna Berbgai',
            'slug' => 'Karang taruna Berbgai',
            'start_date' => '2023-06-23',
            'end_date' => '2023-07-18',
            'duration' => 26,
            'status' => 'accepted',
            'description' => 'Kami dari Perkumpulan Karang Taruna Indonesia mengadakan kegiatan berbagi untuk anak-anak di Panti As-Nashroh. seluruh dana dan hasil dari aksi ini akan sepenuhnya dialokasikan untuk kebutuhan mereka agar mereka bisa hidup dengan layak dan berkecukupan.',
            'image' => 'event-36.jpg'
        ]);

        // <!--  Event 37 -->

        Event::create([
            'destination_id' => 7,
            'user_id' => 3,
            'name' => 'Aksi Indonesia Berbagi',
            'slug' => 'Indonesia Berbagi',
            'start_date' => '2023-05-18',
            'end_date' => '2023-06-11',
            'duration' => 24,
            'status' => 'accepted',
            'description' => 'Pada event kali ini kami selaku panitia Aksi Indonesia Berbagi mengajak teman-teman sekalian untuk ikut berpartisipasi dalam event ini. Tujuan utama dari event ini adalah untuk menggalang dana bantuan  bagi mereka yang terdampak banjir Sungai Kapuas di daerang Kalimantan Tengah. Seluruh bantuan teman-teman akan disalurkan kepada mereka yang terdampak bencana banjir tersebut.',
            'image' => 'event-37.jpg'
        ]);

        // <!--  Event 38 -->

        Event::create([
            'destination_id' => 15,
            'user_id' => 4,
            'name' => 'Gerakan Peduli Sesama',
            'slug' => 'Gerakan Peduli Sesama',
            'start_date' => '2023-07-13',
            'end_date' => '2023-08-07',
            'duration' => 24,
            'status' => 'accepted',
            'description' => 'Tanah Longsor di Natuna telah mengakibatkan banyak warga disekitarnya terdampak. Maka dari itu kami mengadakan Gerakan Peduli Sesama yang bertujuan untuk menggalang dana bagi mereka yang terdampak longsor Natuna. Besar harapan kami akan partisipasi dari saudara-saudara sekalian.',
            'image' => 'event-38.jpg'
        ]);

        // <!--  Event 39 -->

        Event::create([
            'destination_id' => 21,
            'user_id' => 3,
            'name' => 'Mahasiswa Peduli Lansia',
            'slug' => 'Mahasiswa Peduli',
            'start_date' => '2023-06-19',
            'end_date' => '2023-07-17',
            'duration' => 28,
            'status' => 'accepted',
            'description' => 'Kami Komunitas Mahasiswa seluruh Indonesia mengadakan gerakan Mahasiswa Peduli Lansia. Dimana gerakan ini akan berfokus pada penggalangan dana yang ditujukan kepada Panti Jompo Hanna di Bogor. Seluruh hasil dari kegiatan ini akan sepenuhnya disalurkan kepada panti jompo tersebut.',
            'image' => 'event-39.jpg'
        ]);

        // <!--  Event 40 -->

        Event::create([
            'destination_id' => 4,
            'user_id' => 4,
            'name' => 'Peduli Panti Bhakti Abadi',
            'slug' => 'Peduli Panti Bhakti',
            'start_date' => '2023-06-27',
            'end_date' => '2023-07-19',
            'duration' => 22,
            'status' => 'accepted',
            'description' => 'Panti Bhakti Abadi telah menampung banyak lansia yang masih membutuhkan bantuan dana untuk memenuhi kebutuhan hidupnya. Maka dari itu kami mengadakan penggalangan dana Peduli Panti Bhakti Abadi, dimana seluruh dana nya akan disalurkan untuk pemenuhan kebutuhan hidup lansia di panti tersebut.',
            'image' => 'event-40.jpg'
        ]);

        // <!--  Event 41 -->

        Event::create([
            'destination_id' => 3,
            'user_id' => 2,
            'name' => 'Gerakan Panti Jompo Sejahtera',
            'slug' => 'Jompo Sejahtera',
            'start_date' => '2023-06-24',
            'end_date' => '2023-07-17',
            'duration' => 23,
            'status' => 'accepted',
            'description' => 'Terdapat banyak Panti Jompo yang masih membutuhkan bantuan dana untuk keberlangsungan hidup para lansia didalamnya. Berawal dari permasalahan tersebut, kami mengadakan Gerakan Panti Jompo Sejahtera yang akan berfokus dalam pemenuhan kebutuhan dan kesejahteraan para lansia yang tinggal di panti jompo seluruh Indonesia.',
            'image' => 'event-41.jpg'
        ]);

        // <!--  Event 42 -->

        Event::create([
            'destination_id' => 11,
            'user_id' => 2,
            'name' => 'Aksi Peduli Anak Yatim',
            'slug' => 'Peduli Anak Yatim',
            'start_date' => '2023-06-07',
            'end_date' => '2023-07-02',
            'duration' => 25,
            'status' => 'accepted',
            'description' => 'Aksi Peduli Anak Yatim merupakan suatu aksi penggalangan dana yang bertujuan utama untuk membantu anak-anak yatim yang tinggal di panti asuhan seluruh Indonesia. Hasil penggalangan dana pada aksi ini akan sepenuhnya digunakan untuk pemenuhan kebutuhan hidup para yatim yang tinggal di panti asuhan.',
            'image' => 'event-42.jpg'
        ]);

        // <!--  Event 43 -->

        Event::create([
            'destination_id' => 10,
            'user_id' => 1,
            'name' => 'BEM Charitas Peduli',
            'slug' => 'BEM Charitas Peduli',
            'start_date' => '2023-07-27',
            'end_date' => '2023-08-20',
            'duration' => 24,
            'status' => 'accepted',
            'description' => 'BEM Charitas mengadakan kegiatan penggalangan dana yang bertujuan untuk membantu mereka yang membutuhkan. Pada aksi kali ini kami BEM Charitas akan menyalurkan seluruh hasil dari kegiatan ini kepada panti asuhan Alqi Ceria. Dana tersebut akan digunakan untuk pemenuhan kebutuhan hidup anak-anak panti disana.',
            'image' => 'event-43.jpg'
        ]);

        // <!--  Event 44 -->

        Event::create([
            'destination_id' => 25,
            'user_id' => 1,
            'name' => 'Aksi Sekolah Sejahtera',
            'slug' => 'Sekolah Sejahtera',
            'start_date' => '2023-05-09',
            'end_date' => '2023-06-01',
            'duration' => 23,
            'status' => 'accepted',
            'description' => 'Aksi Sekolah Sejahtera merupakan aksi yang bertujuan untuk membantu sekolah-sekolah di Indonesia yang mengalami kerusakan. Aksi ini merupakan salah satu bukti peran nyata kepedulian kita terhadap pendidikan indonesia. Hasil dari aksi ini akan digunakan untuk renovasi sekolah yang rusak, sehingga seluruh siswa-siswi dapat menempuh pendidikan dengan baik.',
            'image' => 'event-44.jpg'
        ]);

        // <!--  Event 45 -->

        Event::create([
            'destination_id' => 6,
            'user_id' => 2,
            'name' => 'Peduli Pendidikan Indonesia',
            'slug' => 'Peduli Pendidikan',
            'start_date' => '2023-07-01',
            'end_date' => '2023-07-19',
            'duration' => 18,
            'status' => 'accepted',
            'description' => 'Pendidikan merupakan unsur yang penting bagi suatu bangsa. Salah satu pilar dari pendidikan adalah sekolah. Namun saat ini banyak sekolah di Indonesia yang sudah rusak dan tidak dapat digunakan dengan baik. Maka dari itu kami mengadakan aksi Peduli Pendidikan Indonesia yang bertujuan untuk membantu renovasi sekolah yang rusak.',
            'image' => 'event-45.jpg'
        ]);
    }
}
