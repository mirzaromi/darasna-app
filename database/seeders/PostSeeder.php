<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=4 ; $i++) { 

            Post::create([
                'judul' => 'Tanya Jawab Seputar Akidah',
                'isi' => '<p>Berikut ini adalah tanya jawab seputar masalah akidah, bersama Syaikh Muhammad bin Sulaiman At-Tamimi rahimahullah.</p>
    
                <p>Apakah Makna &ldquo;Rabb&rdquo;?</p>
                
                <p>Jawab:</p>
                
                <p>Maknanya adalah Penguasa, Yang Berhak Disembah, Yang Mengatur, dan hanya Dia yang berhak diibadahi.</p>
                
                <p>***</p>
                
                <p>Apakah Perbedaan Tauhid Rububiyah dan Tauhid Uluhiyah?</p>
                
                <p>Jawab:</p>
                
                <p>Tauhid rububiyah: mengesakan Allah terkait perbuatan Allah Subhanahu wa Ta&rsquo;ala, seperti mencipta, memberi rezeki, menghidupkan, mematikan, menurunkan hujan, menumbuhkan tetumbuhan, dan mengatur segala urusan.<br />
                Tauhid uluhiyah: mengesakan Allah terkait perbuatan seorang hamba kepada Rabb-nya, seperti berdoa, khauf (takut), raja&rsquo; (berharap), tawakal, inabah (taubat), raghbah (berharap), rahbah (takut), nadzar, istighatsah (berdoa ketika dilanda kesulitan), dan jenis lain dari ragam ibadah.<br />
                ***</p>
                
                <p>Untuk apakah Allah Subhanahu wa Ta&rsquo;ala mengutus Muhammad shallallahu &lsquo;alaihi wa sallam?</p>
                
                <p>Jawab:</p>
                
                <p>Untuk mengajak para hamba agar beribadah kepada Allah Subhanahu wa Ta&rsquo;ala semata&ndash;tiada sekutu bagi-Nya&ndash;serta agar mereka tidak menyekutukan Allah Subhanahu wa Ta&rsquo;ala dengan sesembahan lain.<br />
                Untuk melarang peribadatan kepada sesama makhluk, seperti malaikat, para nabi, orang saleh, batu, dan pohon.<br />
                وَمَا أَرْسَلْنَا مِن قَبْلِكَ مِن رَّسُولٍ إِلَّا نُوحِي إِلَيْهِ أَنَّهُ لَا إِلَهَ إِلَّا أَنَا فَاعْبُدُونِ</p>
                
                <p>&ldquo;Dan Kami tidak mengutus seorang rasul pun sebelum kamu melainkan Kami wahyukan kepadanya bahwa tidak ada sesembahan (yang berhak disembah) melainkan Aku, maka sembahlah Aku.&rdquo; (Q.s. Al-Anbiya:25)</p>
                
                <p>وَلَقَدْ بَعَثْنَا فِي كُلِّ أُمَّةٍ رَّسُولاً أَنِ اعْبُدُواْ اللّهَ وَاجْتَنِبُواْ الطَّاغُوتَ</p>
                
                <p>&ldquo;Dan sesungguhnya Kami telah mengutus rasul untuk tiap umat (agar menyerukan), &lsquo;Sembahlah Allah (saja), dan jauhilah Thaghut itu&rsquo;&hellip;.&rdquo; (Q.s. An-Nahl:36)</p>
                
                <p>وَاسْأَلْ مَنْ أَرْسَلْنَا مِن قَبْلِكَ مِن رُّسُلِنَا أَجَعَلْنَا مِن دُونِ الرَّحْمَنِ آلِهَةً يُعْبَدُونَ</p>
                
                <p>&ldquo;Dan tanyakanlah kepada rasul-rasul Kami yang telah Kami utus sebelummu, &lsquo;Adakah Kami menentukan tuhan-tuhan untuk disembah selain Allah Yang Maha Pemurah?&rsquo;&rdquo; (Q.s. Az-Zukhruf:45)</p>
                
                <p>وَمَا خَلَقْتُ الْجِنَّ وَالْإِنسَ إِلَّا لِيَعْبُدُونِ</p>
                
                <p>&ldquo;Dan Aku tidak menciptakan jin dan manusia melainkan supaya mereka mengabdi kepada-Ku.&rdquo; (Q.s. Adz-Dzariyat:56)</p>
                
                <p>Dengan demikian, bisa diketahui bahwa tujuan Allah Subhanahu wa Ta&rsquo;ala menciptakan makhluk-Nya adalah supaya mereka beribadah dan bertauhid kepada-Nya. Lalu Dia mengutus rasul-rasul kepada para hamba-Nya agar mereka memerintahkan hal itu.</p>
                
                <p>***</p>
                
                <p>Apakah perkara terpenting yang Allah perintahkan? Apa pula perkara terpenting yang Allah larang?</p>
                
                <p>Jawab:</p>
                
                <p>Perkara terpenting yang Allah Subhanahu wa Ta&rsquo;ala perintahkan adalah mengesakan Allah Subhanahu wa Ta&rsquo;ala dalam beribadah kepada-Nya.<br />
                Larangan terbesar yang Allah Subhanahu wa Ta&rsquo;ala peringatkan adalah syirik, yaitu menyeru dzat lain bersama Allah Subhanahu wa Ta&rsquo;ala atau menyerahkan sebagian macam ibadah kepada selain Allah Subhanahu wa Ta&rsquo;ala. Barang siapa yang menyerahkan satu bentuk ibadah kepada selain Allah Subhanahu wa Ta&rsquo;ala berarti dia telah menjadikannya sesembahan dan dia telah menyekutukan Allah Subhanahu wa Ta&rsquo;ala dengan selain-Nya, atau menujukan sebagian dari macam-macam ibadah tersebut kepada selain Allah Subhanahu wa Ta&rsquo;ala.<br />
                ***</p>
                
                <p>Apakah makna &ldquo;al-urwatul wutsqa&rdquo; (tali yang sangat kuat)?</p>
                
                <p>Jawab:</p>
                
                <p>Maknanya adalah &ldquo;la ilaha illallah&rdquo;.</p>
                
                <p>La ilaha: nafi; menunjukkan penolakan terhadap seluruh sesembahan selain Allah.<br />
                Illallah: itsbat; menunjukkan penetapan bahwa seluruh ibadah hanya berhak untuk Allah.<br />
                ***</p>
                
                <p>Perbuatan apakah yang paling utama sesudah mengucap dua kalimat syahadat?</p>
                
                <p>Jawab:</p>
                
                <p>Yang paling utama adalah mendirikan shalat lima waktu.</p>
                
                <p>Syarat-syarat shalat yang terpenting:</p>
                
                <p>Islam.<br />
                Berakal.<br />
                Tamyiz.<br />
                Menghilangkan hadats.<br />
                Menghilangkan najis.<br />
                Menutup aurat.<br />
                Menghadap kiblat.<br />
                Telah masuk waktunya.<br />
                Berniat (dalam hati; tanpa perlu dilafalkan dengan lisan, red.).<br />
                Rukun-rukun shalat:</p>
                
                <p>Berdiri apabila mampu.<br />
                Takbiratul ihram.<br />
                Membaca surat Al-Fatihah.<br />
                Rukuk.<br />
                Bangkit dari rukuk.<br />
                Sujud di atas tujuh anggota badan (dahi, kedua telapak tangan, jari-jemari kaki kanan dan kaki kiri, hidung, serta bibir).<br />
                Bangkit dari sujud.<br />
                Duduk di antara dua sujud.<br />
                Tuma&rsquo;ninah (melaksanakan dengan tenang) dalam semua rukun ini.<br />
                Tertib.<br />
                Tasyahud akhir.<br />
                Duduk tasyahud akhir.<br />
                Salawat kepada Nabi shalallahu &lsquo;alaihi wa sallam.<br />
                Salam.<br />
                Kewajiban-kewajiban dalam shalat:</p>
                
                <p>Semua takbir selain takbiratul ihram.<br />
                Membaca &ldquo;subhana rabbiyal &lsquo;azhim&rdquo; (atau doa-rukuk lainnya, red.) ketika rukuk.<br />
                Ucapan &ldquo;sami&rsquo;allahu li man hamidah&rdquo; bagi imam dan orang yang shalat sendirian.<br />
                Doa &ldquo;rabbana wa lakal hamdu&rdquo; bagi imam, makmum, dan orang yang shalat sendirian.<br />
                Doa &ldquo;subhana rabbiyal a&rsquo;la&rdquo; (atau doa-sujud lainnya, red.) ketika sujud.<br />
                Ucapan &ldquo;rabbighfirli&rdquo; ketika duduk di antara dua sujud.<br />
                Tasyahud awal.<br />
                Duduk ketika tasyahud awal.<br />
                Adapun selain perincian di atas maka hal tersebut adalah sunnah, baik berupa ucapan maupun perbuatan.</p>
                
                <p>***</p>
                
                <p>Apa kewajibanku jika Allah Subhanahu wa Ta&rsquo;ala memerintahkan suatu perkara kepadaku?</p>
                
                <p>Jawab:</p>
                
                <p>Mengilmuinya.<br />
                Mencintainya.<br />
                Bertekad untuk mengamalkannya.<br />
                Mengerjakannya.<br />
                Mengerjakan hal yang disyariatkan tersebut dengan ikhlas dan benar (sesuai tuntunan Rasulullah shallallahu &lsquo;alaihi wa sallam, red.).<br />
                Berhati-hati terhadap segala hal yang dapat membatalkan amalan tersebut.<br />
                Istiqamah di atasnya.<br />
                ***</p>
                
                <p>Manakah yang lebih utama: orang miskin yang bersabar atau orang kaya yang bersyukur?</p>
                
                <p>Jawab:</p>
                
                <p>Adapun perihal si kaya dan si miskin serta orang yang bersabar dan orang yang bersyukur, keduanya termasuk kaum mukminin yang paling utama. Yang paling afdal di antara keduanya adalah yang paling bertakwa kepada Allah.</p>
                
                <p>إِنَّ أَكْرَمَكُمْ عِندَ اللَّهِ أَتْقَاكُمْ</p>
                
                <p>&ldquo;Orang yang paling mulia di antara kalian di sisi Allah ialah orang yang paling bertakwa di antara kalian.&rdquo; (Q.s. Al-Hujurat:13)</p>
                
                <p>***</p>
                
                <p>Tuliskanlah nasihat untukku!</p>
                
                <p>Jawab:</p>
                
                <p>Pertama kali yang aku nasihatkan kepadamu adalah hendaknya engkau memperhatikan segala ajaran yang dibawa oleh Rasulullah shallallahu &lsquo;alaihi wa sallam dari sisi Allah Tabaraka wa Ta&rsquo;ala. Sesungguhnya beliau shallallahu &lsquo;alaihi wa sallam membawa dari sisi Allah Subhananu wa Ta&rsquo;ala segala sesuatu yang dibutuhkan manusia.</p>
                
                <p>Tidaklah ada sesuatu pun yang bisa mendekatkan diri mereka kepada Allah Subhanahu wa Ta&rsquo;ala dan surga-Nya, melainkan telah beliau shallallahu &lsquo;alaihi wa sallam perintahkan. Tidak pula ada sesuatu pun yang bisa menjauhkan mereka dari Allah Subhanahu wa Ta&rsquo;ala, kecuali beliau shallallahu &lsquo;alaihi wa sallam telah melarang mereka darinya.</p>
                
                <p>Allah Subhanahu wa Ta&rsquo;ala telah menegakkan hujjah kepada makhluk-Nya hingga hari kiamat. Jadi, tidak ada alasan lagi bagi seorang pun di hadapan Allah Subhanahu wa Ta&rsquo;ala, sesudah diutusnya Muhammad shalallahu &lsquo;alaih wa sallam.</p>
                
                <p>Allah Subhanahu wa Ta&rsquo;ala berfirman tentang beliau shalallahu &lsquo;alaih wa sallam dan para rasul,</p>
                
                <p>إِنَّا أَوْحَيْنَا إِلَيْكَ كَمَا أَوْحَيْنَا إِلَى نُوحٍ وَالنَّبِيِّينَ مِن بَعْدِهِ وَأَوْحَيْنَا إِلَى إِبْرَاهِيمَ وَإِسْمَاعِيلَ وَإِسْحَاقَ وَيَعْقُوبَ وَالأَسْبَاطِ وَعِيسَى وَأَيُّوبَ وَيُونُسَ وَهَارُونَ وَسُلَيْمَانَ وَآتَيْنَا دَاوُودَ زَبُوراً</p>
                
                <p>&ldquo;Sesungguhnya Kami telah memberi wahyu kepadamu sebagaimana Kami telah memberi wahyu kepada Nuh dan nabi-nabi setelahnya, dan Kami telah memberi wahyu (pula) kepada Ibrahim, Ismail, Ishaq, Ya&rsquo;qub, anak cucunya, Isa, Ayyub, Yunus, Harun, dan Sulaiman. Kami juga memberikan Zabur kepada Daud.&rdquo; (Q.s. An-Nisa&rsquo;:165)</p>
                
                <p>Hingga firman-Nya,</p>
                
                <p>لِئَلاَّ يَكُونَ لِلنَّاسِ عَلَى اللّهِ حُجَّةٌ بَعْدَ الرُّسُلِ وَكَانَ اللّهُ عَزِيزاً حَكِيماً</p>
                
                <p>&ldquo;&hellip; Agar tidak ada alasan bagi manusia membantah Allah sesudah diutusnya rasul-rasul itu. Dan Allah Mahaperkasa lagi Mahabijaksana.&rdquo; (Q.s. An-Nisa&rsquo;:165)</p>
                
                <p>**</p>
                
                <p>Diringkas dari buku 50 Soal Jawab Seputar Aqidah (Judul Asli: Dalailut Tauhid), karya Muhammad bin Sulaiman At-Tamimi. Pustaka Al-Minhaj, Jawa Tengah.</p>
                
                <p>*) Penyuntingan oleh redaksi www.muslimah.or.id</p>',
                'kategori' => 'AKIDAH',
                'tag' => 'MAI',
                'author_id' => rand(1,4),
                'slug' => 'tanya-jawab-seputar-akidah-'. $i,
                'foto' =>'/assets/image/tanya jawab akidah.png',
                'view' => rand(1,1000),
                
            ]);

            sleep(2);
        }
        for ($i=1; $i<=4 ; $i++) { 

            Post::create([
                'judul' => 'Puasa Untuk Anak',
                'isi' => '<p>&nbsp;Hukum puasa Ramadhan untuk anak menurut sejumlah ulama adalah sah dan dihukumi sunnah. Sedangkan bagi Muslim yang sudah dewasa, balig, berakal dan sehat wajib menjalankan Puasa Ramadhan. &nbsp;</p>

                <p>Kewajiban menjalankan puasa Ramadhan itu tertuang dalam Alquran, Surat Al Baqarah ayat 183.</p>
                
                <p>BACA JUGA:<br />
                Hukum Puasa Ramadhan tapi Belum Mandi Wajib<br />
                يَا أَيُّهَا الَّذِينَ آمَنُوا كُتِبَ عَلَيْكُمُ الصِّيَامُ كَمَا كُتِبَ عَلَى الَّذِينَ مِنْ قَبْلِكُمْ لَعَلَّكُمْ تَتَّقُونَ</p>
                
                <p>Artinya: Hai orang-orang yang beriman, diwajibkan atas kalian berpuasa sebagaimana diwajibkan atas orang-orang sebelum kalian agar kalian bertakwa,&quot;. (QS. Al Baqarah: 183).</p>
                
                <p>Melalui ayat ini Allah SWT ber-khitab kepada orang-orang mukmin dari kalangan umat ini dan memerintahkan kepada mereka berpuasa, yaitu menahan diri dari makan dan minum serta bersenggama dengan niat yang ikhlas karena Allah Swt.&nbsp;</p>
                
                <p>Karena di dalam berpuasa terkandung hikmah membersihkan jiwa, menyucikannya serta membebaskannya dari endapan-endapan yang buruk (bagi kesehatan tubuh) dan akhlak-akhlak yang rendah.</p>
                
                <p>Dikutip dari laman Tanya-Jawab Pustaka Ilmu Sunni Salafiyah-KTB, puasa Ramadhan untuk anak kecil atau anak belum baligh tidak wajib akan tetapi menjadi sunnah. Hukum puasanya anak kecil bila tamyiz hukumnya sah dan dihukumi sunnah.</p>
                
                <p>Bagi orang tua jika anaknya menjalankan puasa di Bulan Ramadhan akan mendapatkan pahala. Amal taatnya anak yang belum baligh dicatat di buku catatan amal kedua orang tuanya.&nbsp;</p>
                
                <p>Setelah balig, pahala tersebut diperoleh oleh anak tersebut dan juga kedua orang dua mendapatkan pahala yang sama bila amal taat atas petunjuk atau perintah kedua orang tuanya.&nbsp;</p>',
                'kategori' => 'HUKUM',
                'tag' => 'MAI',
                'author_id' => rand(1,4),
                'slug' => 'puasa-untuk-anak-'. $i,
                'foto' =>'/assets/image/hukum puasa untuk anak.png',
                'view' => rand(1,1000),
                
            ]);

            sleep(2);
        }
        for ($i=1; $i<=4 ; $i++) { 

            Post::create([
                'judul' => 'Sejarah Islam',
                'isi' => '<p>Islam telah begitu lama hadir di bumi. Dengan demikian, tentu saja ada banyak sekali tokoh Islam yang telah tercatat dalam sejarah. Tidak hanya yang ada di seluruh penjuru dunia, namun juga yang berasal dari Indonesia.</p>

                <p><br />
                &nbsp;<br />
                Tidak hanya laki-laki tetapi juga yang bergender perempuan. Nah, untuk mengetahui siapa saja tokoh hebat tersebut, simak ulasannya berikut ini.</p>
                
                <p>Tokoh Islam Teladan Dalam Perjalanan Panjang Sejarah Islam<br />
                Sepanjang Sejarah Islam, tentu saja sudah banyak sekali tokoh yang patut di teladani. Nah, kali ini akan di bahas beberapa tokoh muslim dalam beberapa kategori sebagai berikut.</p>
                
                <p>Tokoh islam dunia</p>
                
                <p>1. Khulafaur Rasyidin</p>
                
                <p>Ada banyak sekali tokoh Muslim yang sangat patut di teladani di masa Rasulullah di sepanjangs ejarah Islam ini. Dan yang sangat terkenal diantaranya tentu saja adalah khukafaur Rasyidin.</p>
                
                <p>Ke empat khalifah ini tidak hanya kompeten dan teladan di bidang keagamaan dan kepemimpinan, tetapi juga sangat dekat serta begitu mencintai Rasulullah.</p>
                
                <p>2. Tokoh Muslim di bidang keilmuan</p>
                
                <p><br />
                &nbsp;<br />
                Di bidang keilmuan, pada masa setelah kepemimpinan Khulafaur Rasyidin, khususnya di masa Daulah Bani Abbasiyah.</p>
                
                <p>Dalam sejarah Islam sudah di nyatakan bahwa kala itu banyak sekali penemuan dalam bidang keilmuan. Bahkan, Islam yang ada di dunia Timur pernah menjadi salah satu kiblat pengetahuan dunia sehingga tokohnya pun bisa disebut tokoh Islam dunia.</p>
                
                <p>Sedangkan tokoh-tokoh terkenalmnya adalah seperti Ibnu Sina di bidang kedokteran dan filsafat dan alkhawarizmi di bidang Matematika dengan teori Al-Jabarnya. Selain itu ada juga nama dari Jabir Bin Hayyan sebagai ahli fisika. Di samping itu masih ada lagi Al-Kindi yang merupakan seorang filsuf dan masih banyak lagi yang lainnya.</p>
                
                <p>3. Pemimpin Islam sebagai tokoh muslim bersejarah</p>
                
                <p>Tidak hanya dalam bidang keilmuan, ternyata ada banyak pemimpin Islam yang megukir sejarah besar hingga menjadi tokoh tak terlupakan.</p>
                
                <p>Diantaranya seperti Abu Ja&rsquo;far Al-Mansyur yang merupakan juru taktik berdirinya daulah Bani Abbasiyah. Kemudian ada juga seorang pahlawan Islam bernama Nuruddin Zanki yang berhasil mengusir tentara salib dari Palestina di masanya.</p>
                
                <p>Setelah generai Nuruddin Zanki, baru munculah Sholahuddin Al-Ayubi yang begitu terkenal sebagai pembebas Yerussalem dan berhasil menjadi panglima hebat dengan ekspansi wilayah yang tinggi.</p>
                
                <p>Namun, sejarah juga perlu mencatat bahwa keberhasilan Shalahuddin ini tidak lepas dari peran dan bimbingan yang senantiasa di berikan oleh Nuruddin Zanki, yang merupakan seniornya.</p>
                
                <p>Tokoh Islam Di Nusantara<br />
                Sebagaimana di ketahui Islam telah menyebar keseluruh wilayah di Indonesia. Perkembangan islam di Indonesia berlangsung selama berabad-abad dan masih menjadi agama terbesar hingga saat ini.</p>
                
                <p>Sejauh ini, tentu saja sangat banyak tokoh Islam Nusantara yang masuk dalam daftar tokoh penting. baik dalam pengembangan Islam di Nusantara sendiri, maupun dalam jasanya terhadap Nusantara selama tinggal di tanah ini.</p>
                
                <p>Jika berbicara lebih lanjut tentang tokoh islam di Nunsatara, khususnya untuk pulau jawa, tentu saja yang sangat terkenal adalah Walisongo.</p>
                
                <p>Walisongo ini merupakan kumpulan 9 wali yang menyebarkan Islam di tanah Jawa. Mereka juga lah yang telah membantu Raden Patah untuk merebut tanah Majapahit hingga akhirnya berdirilah kesultanan Demak.</p>
                
                <p><br />
                Tokoh Islam Indonesia</p>
                
                <p>&nbsp;<br />
                Selain Walisongo, tentu saja masih banyak lagi tokoh Islam setelah da sebelum itu. Katakan saja seperti raja-raja Islam dan orang-orang yang telah ikut andil dalam persiapan kemerdekaan Indonesia. Bahkan, predisen RI yang pertama bisa juga di sebut dengan salah satu tokoh Nasional dalam Islam.</p>
                
                <p>Dalam hal intelektual keagamaan, masih ada lagi tokoh Islam yang sangat berperngaruh dalam berbagai bidang.</p>
                
                <p>Contohnya saja HAMKA yang merupakan mufasir terkenal dengan tafsir Al-Azharnya di masa itu. Termasuk juga Qurasih Shihab yang berhasil menerbitkan tafsir Mishbah dan memudahkan umat Islam di Indonesia memperljari Ilmu Tafsir.</p>
                
                <p>Selanjutnya, untuk generasi akhir-akhir di semua bidang, masih ada lagi tokoh Islam Indonesia yang sangat terkenal yakni KH. Abdurrahman Wahid yang biasa di kenal dengn Gus Dur.</p>
                
                <p>Beliau adalah salah satu tokoh multi talenta yang memiliki banyak keahlian dan begitu teladan. Beliau juga merupakan contoh muslim yang tak pandang apa pun terhadap sebuah keadilan.</p>
                
                <p>Tokoh Islam Modern<br />
                Di masa modern ini, ada beberapa tokoh Islam yang telah melakukan pembaharuan. Dan kali ini ada beberapa nama yang masuk daftar tokoh Islam Modern ternama sebagaimana berikut.</p>
                
                <p>1. Muhammad Abdul Wahab</p>
                
                <p>Tokoh pembaharuan Islam yang pertama adalah Muhammad Abdul Wahab. Beliau adalah yang berasal dari Makkah dengan .beragam ajarannya.</p>
                
                <p>2. Jamaluddin Al Afghani</p>
                
                <p>Tokoh selanjutnya ini juga memiliki sumbangan penting bagi dunia Islam modern. Diantaranya adalah gagasannya yang mampu mengilhami kaum muslimi di Iran, Meski, Turki, dan India.</p>
                
                <p>3. Muhammad Abduh</p>
                
                <p>Muhammad Abduh ini merupakan guru dari seorang pembaharu muslim juga bernama Rasyid Ridha. Dalam perjalannya, mereka sempat berkunjung ke Eropa di beberapa negara. Mereka pun begitu terkesan dengan perjalanan tersebut.</p>
                
                <p>4. Toha Husein</p>
                
                <p>Tokoh yang satu ini merupakan tokoh yang sangat mendukung gagasan dari Muhammad Ali Pasha. Dan berkaitan dengan modernisme, beliau sangatlah gigih di dalamnya.</p>
                
                <p>Tokoh Islam Wanita<br />
                Tidak hanya laki-laki yang merupakan orang-orang hebat dalam Sejarah Isalm. Sejauh ini, Anda perlu juga mengenal beberapa tokoh Islam wanita ternama sebagaimana berikut.</p>
                
                <p>1. Khadijah Binti Khuwaylid</p>
                
                <p>Khadijah adalah Istri pertamaaa Rasulullah yang merupakan wanita hebat dengan berbagai kemampuannya. Baliau mampu merupakan seorang pedagang yang sukses. Dan di masa kenabiannya, beliaulah yang setia mendampingi dan melindungi sang Rasul.</p>
                
                <p>2. Aisha Binti Abu Bakar</p>
                
                <p>Istri Rasulullah selanjutnya yang tidak kalah hebat adlaah Aisyah. Beliau memiliki kecerdasan yang sangat tinggi. Hingga beliau merupakan salah seorang perawi hadits yang terkenal.</p>
                
                <p>3. Rabi&rsquo;ah Al-Adawiyah</p>
                
                <p>Terakhir ada nama Rabi&rsquo;ah Aladawiyah. Beliau awalnya merupakan seorang budak yang telah bebas. Akan tetapi, beliau memiliki keahlian mistik yang tinggi. Beliau juga merupakan sufi yang ceritanya tentangnya tersohor di mana-mana.</p>
                
                <p>Tokoh Islam Liberal<br />
                Jika berbicara tentang tokoh Islam liberal, tidak dapat di pungkiri jika banyak sekali tokoh yang bisa masuk kriteria. Namun, kali ini hanya akan di bahas 3 tokoh terkenal diantaranya saja.</p>
                
                <p>1. Ali Abd Razaq</p>
                
                <p>Ali Abd Razaq ini, bagi orang muslim merupakan orang yang tidak jauh berbeda dari Mustafa Kemal At-Taturk. Bahkan mereka menganggap dia lebih buruk. Beliau juga telah menerbitkan buku-buku yang mendukung setiap tindakan Mustafa Kemal.</p>
                
                <p>2. Muhammad Arkoun</p>
                
                <p>Muhammad Arkoun adalah salah satu tokoh muslim liberal yang lahir di Afrika, tepatnya di Aljazair. Setelah proses pendidikannya sudah mencapai kesuksesannya hingga sudah banyak di undang di berbagai universitas di Prancis.</p>
                
                <p>3. Fazlur Rohman</p>
                
                <p>tokoh terakhir yang akan di bahas di sini adalah Fazlur Rohman. Kalau nama ini, tentu saja juga sangat lekat di dunia pendidikan Islam. Karya-karyanya yang bersangkutan dengan alqur&rsquo;an dan hadist. juga banyak sekali di gemari di dunia akademik.</p>
                
                <p>Demikian uraian tentang tokoh Islam dunia yang berpengaruh di dunia maupun di Indonesia. Tokoh-tokoh tersebut telah mengembangkan Islam menuju peradaban islam yang lebih baik hingga sampai saat ini Islam maju pesat.</p>',
                'kategori' => 'SEJARAH',
                'tag' => 'MAI',
                'author_id' => rand(1,4),
                'slug' => 'sejarah-islam-'. $i,
                'foto' =>'/assets/image/sejarah.png',
                'view' => rand(1,1000),
            ]);

            sleep(2);
        }
        for ($i=1; $i<=4 ; $i++) { 

            Post::create([
                'judul' => 'Tokoh Matematikawan Islam',
                'isi' => '<p>Matematika adalah warisan peradaban Islam yang sangat penting, disamping kedokteran, astronomi, optik, tekhnologi mesin, sejarah dan ilmu-ilmu keagamaan, yang justru dizaman modern kini umat Islam ketinggalan, memang suatu ironi. Matematika di era kejayaan peradaban Islam masa lampau merupakan kajian yang sangat penting. Hampir semua pemikir besar tempo dulu memiliki basic yang sangat kuat dalam bidang ini. Bahkan penemuan-penemuan dalam bidang ini sangat mengagumkan.</p>

                <p>Ahli matematika dalam peradaban islam biasanya juga ahli dalam ilmu-ilmu lainnya, termasuk ilmu keagamaan. Dan biasanya ahli matematika dalam peradaban islam juga merupakan ahli dalam astronomi, karena itu astronomi dan matematika merupakan kajian dan profesi yang menyatu. Karena itu biasanya ahli matematika adalah ahli dalam astronomi juga.</p>
                
                <p>Diantara intelektual yang berpengaruh dalam bidang ini (matematika) dalam peradaban islam klasik, antara lain:</p>
                
                <p>1. Al Khwarizmi<br />
                Perintis matematika muslim dan orang yang sangat pantas disebut sebagai bapak aljabar modern. Nama aslinya adalah Muhammad ibn Musa al Khwarizmi. Ia berasal dari Khwarizm (Khiva). Kadang orang keliru dalam menafsirkan suatu hasil hasil karya peradaban modern, yang selalu dianggap berasal dari barat. Jika kita menelusuri kata Aljabar itu berasal dari karya (buku tulisan karya) Al Khwarizmi yang bernama Hisab al jabir wal mukabalah (yang berarti pengutuhan kembali dan perbandingan atau yang kerennya dalam istilah sekarang Kalkulasi integral &amp; persamaan).<br />
                Bahkan istilah Alghorisme yang berarti sistem persepuluhan , merupakan ucapan orang barat terhadap nama Alkhwarizmi, karena alkwarizmi dianggap sebagai penemu dan pengembang sistem persepuluhan, dan dia dianggap sebagai penemu angka nol.<br />
                Salah satu karya alkhwarizmi yang terpenting adalah dialah yang menciptakan sistem aljabar. Penemuannya terhadap simbol-simbol bilangan 1 sampai dengan 9, dan angka nol (yang kemudian disebut sistem alghorisme) mampu memecahkan kesulitan-kesulitan simbolisasi yang masih menggunakan angka romawi. Suatu misal, jika hanya untuk bilangan angka 8, dalam angka romawi sama dengan VIII, jika angka 38 maka angka romawinya XXXVIII, maka orang akan kesulitan menggunakan angka romawi jika sudah jutaan.<br />
                Matematika yang dikembangkan dibarat sebelumnya adalah matematika Yunani yang kemudian dikembangkan oleh Romawi. Matematika Yunani adalah matematika murni, matematika untuk matematika, yang steril terhadap keperluan. Dalam penulisan bilangan mereka menggunakan huruf, dan tiap huruf melambangkan bilangan dan masih belum mengenal bilangan nol. Jadi matematika Yunani bersifat deduktif, penekanannya dilakukan dengan pembuktian yang bertingkat-tingkat, dimulai dari aksioma, postulat dan teorema.</p>
                
                <p>2. Abu Wafa al Bawzajani (w. 998 M)<br />
                Salah seorang ahli matematika muslim terbesar.. Ia dikenal sebagai ahli astronomi dan pengembang trigonometri (ilmu ukur sudut), dan orang yang pertama yang mengajukan beberapa rumus penting dalam trigonometri. Salah satu rumus yang didedikasikan kepadanya adalah Cos C= Cos a.cos b.</p>
                
                <p>3. Abu Kamil Syuja (abad 10 M)<br />
                Salah seorang ahli matematika muslim terbesar diabad pertengahan. Tidak banyak ang diketahui tentang kehidupannya, tetapi ia hidup setelah era Al Khwarizmi.<br />
                Melalui Leonard dari Pisa dan pengikut-pengikutnya, ia telah memberi pengaruh besar terhadap perkembangan aljabar dan geometri di Eropa.</p>
                
                <p>4. Al Jauhary (abad 9 M)<br />
                Seorang ahli matematika pada abad ke-9 M, seorang ahli geometer ang bekerja di Bayt al Hikmah (House of Wisdom), suatu lembaga ilmu pengetahuan yang dibangun Khalifah Al Ma&rsquo;mun dari dinasti Abbasiyah di baghdad.</p>
                
                <p>5. Al Khuyandi ( w. 390 H/ 1000 M)<br />
                Seorang ahli astronomi dan matematika, terutama geometri. Ia dikenal sebagai ahli kontruksi asturlab. Ia juga termasuk penemu handal sinus yang diistilahkan kaidah astronomis. Dalam bidang geometri perhatiannya mengarah pada resolusi atau penggunaan persamaan berpangkat tiga. Albiruni saintis besar muslim menyanjung Al Khuyandi sebagai cendekiawan ahwaz Zamanihi (tiada bandinganya dizamannya). Sedang Al Thusi menegaskan bahwa Abu Wahfa, Ibn Irak dan al Khuyandi merupakan 3 penulis besar ang memiliki peran besar dalam penemuan kaidah sinus atau kaidah astronomis.<br />
                Teori matematika Al Khuyandi mengilhami teori Fermat(Fermat&rsquo;s last theorm) yang dilontarkan Piere de Fermat pakar matematika asal perancis 600 tahun kemudian (w. 1665 M), suatu teori yang berupa teka-teki matematika yang pernah dilombakan dengan hadiah ratusan juta bagi yang sanggup membuktikannya.</p>
                
                <p>6. Khusiyar Ibn Laban (awal abad 11 M)<br />
                Seorang ahli matematika dan astronomi asal Persia, mahaguru kalkulus dan pengilham revolusi komputansi. karya andalannya diabadikan dalam 2 jiz, yaitu Jiz al Jami&rsquo; dan Jiz al Baligh, dan ang lainnya berjudul Usul Hisab al Hind, sebuah risalah mengenai aritmetika.<br />
                Kitab ushul Hisab al Hind, merupakan karya unggulannya ang memuat deskripsi pertama tentang perhitungan model India (Indian System of Calculation) , yaitu sistem numerasi berdasarkan posisi, yang artinya bahwa nilai atau harga angka-angkanya tergantung pada tempat atau posisinya dalam suatu bilangan. Sistem inilah yang kemudian mengilhami revolusi dalam hal cara atau metode komputasi yang digunakan dikawasan timur.</p>
                
                <p>7. Almajriti (w. 1007 M)<br />
                Seorang saintis asal Andalusia yang paling menonjol dizamannya, yang banyak memperkenalkan pengkajian sains, terutama kimia dan matematika.<br />
                Ia banyak menulis tentang aritmetika dagang dengan menerapkan komputasi, geometri dan aljabar pada masalah-masalah penjualan, hitung dagang dan perpajakan. Ia juga banyak menulis tentang pemecahan kebekuan matematika.</p>
                
                <p>8. Al Karaji (w.410 H/1019 M)<br />
                Pakar matematika asal Persia , ia menulis tentang teori pencabutan akar atau kalkulus mental. Karyanya banyak sekali tentang sains, diantaranya berjudul Al Badi&rsquo; fi al Hisab, dalam buku ini ia menulis secara rinci untuk pertama kalinya teori pencabutan akar kuadrat dari sebuah polinomial dengan suatu bilangan yang tidak diketahui.<br />
                Sedang dalam bukunya yang berjudul Al Kafi&rsquo; fi al hisab banyak membicarakan proses-proses kalkulus mental ang disebutnya Al Hawa&rsquo;i.</p>
                
                <p>9. Abu Nasr Mansur (w.1039 M)<br />
                Seorang ahli matematika asal persia ang diakini sebagai salah seorang penemu hukum sinus. Ia merupakan murid adri Abu Wafa&rsquo; dan guru dari ilmuwan besar, Al Biruni.<br />
                Albiruni menyebut Abu Nash mansur sebagai penemu beberapa bukti matematika.</p>
                
                <p>10. Al Khazin (abad 4 H/10 M)<br />
                Seorang ahli matematika dan astronom asal Khurasan yang hidup pada abad ke 4 H/ 10 M. Ia banyak menulis matematika dan astronomi. Ia adalah orang yang menawarkan konsep ang berbeda dengan Ptolomeus tentang peredaran matahari dan bumi. Ia mengkritik ptolomeus yang dinilainya gagal mengamati beberapa perubahan diameter matahari yang tampak sepanjang tahun (on the course of the years)</p>
                
                <p>11. Aljayani (abad 11 M)<br />
                Seorang penulis dan ahli matematika asal Andalusia (Spanyol Islam). Ia menulis komentar penting terhadap buku Element karya Euclid dan ia juga menulis karyanya dalam trigonometri speric (sperical trigonometry).</p>
                
                <p>12. Al Halili (abad 8 H/ 14 M)<br />
                Seorang pakar matematika dan astronomi. Ia banyak menghasilkan karya matematika dan astronomi ang berbobot tinggi. Ia berasal dari damaskus yang hidup pada abad ke 14 Masehi. Ia menjadi masyhur karena kemampuannya dalam menentukan arah kiblat dengan menyajikan garis-garis bujur dan garis-garis lintangnya dengan bantuan perhitungan rumit matematika. Tabel-tabel kiblatnya merupakan tabel trigonometrik canggih pertama. Ia berhasil mengkonfilasi sebuah tabel kiblat yang distandarkan pada sebuah rumusan canggih dan akurat. Hal ini menggambarkan kompetensi dan ketinggian otorotas kecendikiawannya dalam aljabar fungsi dan tekhnik-tekhnik komputansi.</p>
                
                <p>13. Al Kalasadi (abad 9 H/ 15 M)<br />
                Seorang pakar fiqih (hukum) dan juga pakar matematika yang inovatif asal Andalusia (Spanyol Islam), pencipta notasi pecahan modern. Komentarnya terhadap Takhlis Ibn Al Banna memuat suatu rumusantingkat tinggi untuk memperoleh akar kwadrat dengan kecermatan dan ketepatan yang nyaris sempurna.<br />
                Dalam notasi pecahan, dialah orang pertama yang menggunakan simbol-simbol seperti yang digunakan kini secara luas.</p>
                
                <p>14. Al Qushyi (abad 15 M)<br />
                Seorang saintis, ahli astronomi dan matematika. Ia lahir di Samarkand dan meninggal di Istambul. Ia menggantikan Qadi Zade &lsquo; Rumi sebagai direktur observatorium Samarkan yang didirikan oleh Ulugh Beg. Ia juga kemudian menjadi profesor dibidang sains di perguruan Aya shofia</p>
                
                <p>15. Al Battani (sekitar 850 &ndash; 923)<br />
                Seorang ahli astronomi dan matematikawan dari Arab. Al Battani lahir di Harran dekat Urfa. Salah satu pencapaiannya yang terkenal adalah tentang penentuan tahun matahari sebagai 365 hari, 5 jam, 46 menit dan 24 detik. Al Battani juga menemukan sejumlah persamaan trigonometri.</p>',
                'kategori' => 'TOKOH',
                'tag' => 'MAI',
                'author_id' => rand(1,4),
                'slug' => 'tokoh-maetmatikawan-islam-'. $i,
                'foto' =>'/assets/image/tokoh matematika islam.png',
                'view' => rand(1,1000),
                
            ]);

            sleep(2);
        }
        
    }
}
