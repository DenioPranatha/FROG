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
    }
}
