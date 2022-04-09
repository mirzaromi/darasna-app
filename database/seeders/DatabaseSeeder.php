<?php

namespace Database\Seeders;

use App\Models\Author;
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

        Author::create([
            'nama' => 'Zinedine Zidane',
        ]);

        Post::create([
            'judul' => 'Menangis ketika Ditinggal Mati',
            'isi' => '<p>Ditinggal mati kerabat, sahabat, dan orang-orang yang dicintai memang bisa menimbulkan kesedihan yang teramat dalam. Akan tetapi, sebagai seorang mukmin, kita wajib menerima segala ketetapan Allah Ta&rsquo;ala tersebut. Sehingga, kita pun terhindar dari sikap marah, jengkel, dan tidak rida dengan takdir tersebut. Meskipun demikian, sebagai manusia biasa, wajar saja jika kita ingin menangis meneteskan air mata sebagai tanda sedihnya hati kita dengan berpulangnya kerabat atau sahabat yang kita cintai. Dari sahabat Anas bin Malik radhiyallahu &lsquo;anhu, beliau berkata,</p>

            <p>شَهِدْنَا بِنْتًا لِرَسُولِ اللَّهِ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ، قَالَ: وَرَسُولُ اللَّهِ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ جَالِسٌ عَلَى القَبْرِ، قَالَ: فَرَأَيْتُ عَيْنَيْهِ تَدْمَعَانِ، قَالَ: فَقَالَ: &laquo;هَلْ مِنْكُمْ رَجُلٌ لَمْ يُقَارِفِ اللَّيْلَةَ؟&raquo; فَقَالَ أَبُو طَلْحَةَ: أَنَا، قَالَ: &laquo;فَانْزِلْ&raquo; قَالَ: فَنَزَلَ فِي قَبْرِهَا</p>
            
            <p>&ldquo;Kami menyaksikan pemakaman putri Nabi shallallahu &lsquo;alaihi wasallam.&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) berkata, &ldquo;Dan saat itu Rasulullah shallallahu &lsquo;alaihi wasallam duduk di sisi liang lahat.&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) berkata, &ldquo;Lalu aku melihat kedua mata beliau mengucurkan air mata.&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) berkata, &ldquo;Maka beliau bertanya, &ldquo;Siapakah di antara kalian yang malam tadi tidak berhubungan (dengan istrinya)?&rdquo; Abu Thalhah berkata, &ldquo;Aku.&rdquo; Beliau berkata, &ldquo;Turunlah engkau ke lahat!&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) &nbsp;berkata, &ldquo;Maka, beliau pun ikut turun ke dalam kuburnya.&rdquo; (HR. Bukhari no. 1285)</p>
            
            <p>Terdapat beberapa faedah yang dapat diambil dari hadis di atas sebagaimana penjelasan berikut ini.</p>
            
            <p>Baca Juga: Beriman terhadap Datangnya Kematian</p>
            
            <p>Faedah pertama<br />
            Hadis di atas menunjukkan bolehnya menangis ketika ada saudara atau kerabat atau sahabat yang meninggal dunia dengan syarat tangisan tersebut tidak diiringi dengan meninggikan suara, merobek-robek kerah baju, atau menampar-nampar pipi, dan sejenisnya. Karena perbuatan tersebut menunjukkan keluh kesah, rasa marah, jengkel, dan tidak rida dengan takdir yang telah Allah Ta&rsquo;ala tetapkan dan juga merupakan perbuatan (ciri khas) orang-orang jahiliah terdahulu.</p>
            
            <p>Diriwayatkan dari sahabat &lsquo;Abdullah bin Mas&rsquo;ud radhiyallahu &lsquo;anhu, Nabi shallallahu &lsquo;alaihi wasallam bersabda,</p>
            
            <p>لَيْسَ مِنَّا مَنْ ضَرَبَ الْخُدُودَ، أَوْ شَقَّ الْجُيُوبَ، أَوْ دَعَا بِدَعْوَى الْجَاهِلِيَّةِ</p>
            
            <p>&ldquo;Bukan dari golongan kami siapa yang menampar-nampar pipi, merobek-robek kerah baju, dan menyeru dengan seruan jahiliah (meratap).&rdquo; (HR. Bukhari no. 1294 dan Muslim no. 103)</p>
            
            <p>Dari sahabat &lsquo;Abdullah bin Umar radhiyallahu &lsquo;anhuma berkata, &ldquo;Ketika Sa&rsquo;ad bin Ubadah sedang sakit, Nabi shallallahu &lsquo;alaihi wasallam menjenguknya bersama &lsquo;Abdurrahman bin &lsquo;Auf, Saad bin Abu Waqqash, dan &lsquo;Abdullah bin Mas&rsquo;ud radhiyallahu &lsquo;anhum. Ketika beliau menemuinya, beliau mendapatinya sedang dikerumuni oleh keluarganya. Beliau bertanya,</p>
            
            <p>قَدْ قَضَى</p>
            
            <p>&ldquo;Apakah ia sudah meninggal?&rdquo;</p>
            
            <p>Mereka menjawab, &ldquo;Belum, wahai Rasulullah.&rdquo;</p>
            
            <p>Lalu, Nabi shallallahu &lsquo;alaihi wasallam menangis. Ketika orang-orang melihat Nabi shallallahu &lsquo;alaihi wasallam menangis, mereka pun turut menangis.</p>
            
            <p>Beliau shallallahu &lsquo;alaihi wasallam bersabda,</p>
            
            <p>أَلاَ تَسْمَعُونَ إِنَّ اللَّهَ لاَ يُعَذِّبُ بِدَمْعِ العَيْنِ، وَلاَ بِحُزْنِ القَلْبِ، وَلَكِنْ يُعَذِّبُ بِهَذَا &ndash; وَأَشَارَ إِلَى لِسَانِهِ &ndash; أَوْ يَرْحَمُ، وَإِنَّ المَيِّتَ يُعَذَّبُ بِبُكَاءِ أَهْلِهِ عَلَيْهِ</p>
            
            <p>&ldquo;Tidakkah kalian mendengar bahwa Allah tidak mengazab dengan sebab tangisan air mata, tidak pula dengan sebab hati yang bersedih, namun Dia mengazab dengan ini.&rdquo; Lalu beliau menunjuk lidahnya, atau dirahmati (karena lisan itu) dan sesungguhnya mayat itu diazab disebabkan tangisan keluarganya kepadanya.&rdquo; (HR. Bukhari no. 1304 dan Muslim no. 924)</p>
            
            <p>Bolehnya menangis ketika ditinggal mati kerabat juga ditunjukkan oleh Rasulullah shallallahu &lsquo;alaihi wasallam ketika ditinggal mati putranya, Ibrahim. Dari sahabat Anas bin Malik radhiyallahu &lsquo;anhu, beliau berkata, &ldquo;Kami bersama Rasulullah shallallahu &lsquo;alaihi wasallam mendatangi Abu Saif Al-Qaiyn yang (istrinya) telah mengasuh dan menyusui Ibrahim (putra Nabi shallallahu &lsquo;alaihi wasallam). Lalu Rasulullah shallallahu &lsquo;alaihi wasallam mengambil Ibrahim dan menciumnya.</p>
            
            <p>Setelah itu, pada kesempatan yang lain, kami mengunjunginya, sedangkan Ibrahim telah meninggal. Hal ini menyebabkan kedua mata Rasulullah shallallahu &lsquo;alaihi wasallam berlinang air mata. Lalu &lsquo;Abdurrahman bin &lsquo;Auf radhiyallahu &lsquo;anhu berkata kepada beliau, &ldquo;Mengapa Anda menangis, wahai Rasulullah?&rdquo; Beliau menjawab,</p>
            
            <p>يَا ابْنَ عَوْفٍ إِنَّهَا رَحْمَةٌ</p>
            
            <p>&ldquo;Wahai Ibnu &lsquo;Auf, sesungguhnya ini adalah rahmat (tangisan kasih sayang).&rdquo;</p>
            
            <p>Beliau lalu melanjutkan dengan kalimat yang lain dan bersabda,</p>
            
            <p>إِنَّ العَيْنَ تَدْمَعُ، وَالقَلْبَ يَحْزَنُ، وَلاَ نَقُولُ إِلَّا مَا يَرْضَى رَبُّنَا، وَإِنَّا بِفِرَاقِكَ يَا إِبْرَاهِيمُ لَمَحْزُونُونَ</p>
            
            <p>&ldquo;Kedua mata boleh mencucurkan air mata, hati boleh bersedih, hanya kita tidaklah mengatakan, kecuali apa yang diridai oleh Rabb kita. Dan kami dengan perpisahan ini wahai Ibrahim pastilah bersedih.&rdquo; (HR. Bukhari no. 1303 dan Muslim no. 2315)</p>
            
            <p>Baca Juga: Hukum Mengumumkan Kematian Seseorang</p>
            
            <p>Faedah kedua<br />
            Kandungan hadis di atas menunjukkan bahwa yang sesuai dengan sunah adalah orang yang menurunkan jenazah perempuan ke liang lahat adalah laki-laki yang pada malam harinya tidak berhubungan badan dengan istrinya, meskipun laki-laki tersebut adalah laki-laki ajnabi (laki-laki yang bukan mahram). Karena dalam hadis di atas, Abu Thalhah radhiyallahu &lsquo;anhu adalah orang yang menurunkan jenazah putri Rasulullah shallallahu &lsquo;alaihi wasallam ke dalam lahat, padahal beliau bukan mahram bagi putri Rasulullah shallallahu &lsquo;alaihi wasallam.</p>
            
            <p>Al-Hafidz Ibnu Hajar rahimahullah berkata, &ldquo;Hadis tersebut menunjukkan bolehnya bagi laki-laki untuk memasukkan jenazah perempuan ke dalam kuburnya, karena laki-laki lebih kuat untuk mengerjakan hal itu dibandingkan perempuan.&ldquo; (Fathul Baari, 3: 159)</p>
            
            <p>Faedah ketiga<br />
            Hadis tersebut menunjukkan bahwa adanya nasihat atau ceramah ketika memakamkan jenazah tidaklah dituntunkan secara terus-menerus setiap kali memakamkan jenazah. Hal ini karena Nabi shallallahu &lsquo;alaihi wasallam duduk di samping makam dan tidak memberikan ceramah nasihat kepada sahabat yang ikut hadir. Yang dikenal atau tersebar (ma&rsquo;ruf) dari sunah Nabi shallallahu &lsquo;alaihi wasallam adalah beliau lebih banyak diam serta menyibukkan diri dengan merenung dan memikirkan kondisi ketika itu (kematian). Demikianlah di antara petunjuk salaf setelah Nabi shallallahu &lsquo;alaihi wasallam, dan cukuplah kematian itu sebagai sebaik-baik peringatan dan nasihat. (Lihat Mushannaf Ibnu Abi Syaibah, 3: 274 dan Ahkaamul Maqaabir, hal. 398)</p>
            
            <p>Akan tetapi, jika dalam kondisi tersebut ada di antara hadirin yang berilmu menyampaikan sedikit nasihat ringkas (singkat) yang berisi tentang motivasi agar manusia menyiapkan diri menghadapi kematian, memperingatkan bahwa kematian itu sangat dekat dengan kita, juga mengingatkan bahwa amal akan dihisab pada hari kiamat, tentu ini juga sebuah kebaikan. Akan tetapi, yang perlu diperhatikan adalah tidak menjadikan hal semacam ini sebagai suatu kebiasaan.</p>
            
            <p>Hal ini sebagaimana dalam sebuah hadis yang diriwayatkan dari sahabat Ali radhiyallahu &lsquo;anhu, beliau berkata, &ldquo;Kami pernah berada di dekat kuburan Baqi&rsquo; Al-Ghorqad. Nabi shallallahu &lsquo;alaihi wasallam mendatangi kami, lalu beliau duduk. Kami pun ikut duduk di dekat beliau. Beliau membawa sebuah tongkat kecil yang dengan tongkat itu beliau memukul-mukul permukaan tanah dan mengorek-ngoreknya, seraya berkata,</p>
            
            <p>مَا مِنْكُمْ مِنْ أَحَدٍ، مَا مِنْ نَفْسٍ مَنْفُوسَةٍ إِلَّا كُتِبَ مَكَانُهَا مِنَ الجَنَّةِ وَالنَّارِ، وَإِلَّا قَدْ كُتِبَ شَقِيَّةً أَوْ سَعِيدَةً</p>
            
            <p>&ldquo;Tidak ada seorang pun dari kalian dan juga tidak satu pun jiwa yang bernafas, melainkan telah ditentukan tempatnya di surga atau di neraka dan sudah ditentukan jalan sengsaranya atau bahagianya.&rdquo; (HR. Bukhari no. 1362 dan Muslim no. 2647)</p>
            
            <p>Faedah keempat<br />
            Hadis tersebut menunjukkan bolehnya duduk di samping makam ketika memakamkan jenazah, dengan syarat bahwa hal itu tidak membuat sempit orang-orang yang sedang memakamkan jenazah atau merusak makam yang ada di sekitarnya. Hal ini ditunjukkan oleh hadis yang diriwayatkan dari sahabat Ali radhiyallahu &lsquo;anhu di atas.</p>',
            'kategori' => 'Santri',
            'tag' => 'MAI',
            'author_id' => 1,
            'slug' => 'menangis-ketika-ditinggal-mati',
            'foto' =>'/assets/image/fotooo.png'
        ]);
        
        Post::create([
            'judul' => 'Menangis ketika Ditinggal Mati',
            'isi' => '<p>Ditinggal mati kerabat, sahabat, dan orang-orang yang dicintai memang bisa menimbulkan kesedihan yang teramat dalam. Akan tetapi, sebagai seorang mukmin, kita wajib menerima segala ketetapan Allah Ta&rsquo;ala tersebut. Sehingga, kita pun terhindar dari sikap marah, jengkel, dan tidak rida dengan takdir tersebut. Meskipun demikian, sebagai manusia biasa, wajar saja jika kita ingin menangis meneteskan air mata sebagai tanda sedihnya hati kita dengan berpulangnya kerabat atau sahabat yang kita cintai. Dari sahabat Anas bin Malik radhiyallahu &lsquo;anhu, beliau berkata,</p>

            <p>شَهِدْنَا بِنْتًا لِرَسُولِ اللَّهِ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ، قَالَ: وَرَسُولُ اللَّهِ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ جَالِسٌ عَلَى القَبْرِ، قَالَ: فَرَأَيْتُ عَيْنَيْهِ تَدْمَعَانِ، قَالَ: فَقَالَ: &laquo;هَلْ مِنْكُمْ رَجُلٌ لَمْ يُقَارِفِ اللَّيْلَةَ؟&raquo; فَقَالَ أَبُو طَلْحَةَ: أَنَا، قَالَ: &laquo;فَانْزِلْ&raquo; قَالَ: فَنَزَلَ فِي قَبْرِهَا</p>
            
            <p>&ldquo;Kami menyaksikan pemakaman putri Nabi shallallahu &lsquo;alaihi wasallam.&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) berkata, &ldquo;Dan saat itu Rasulullah shallallahu &lsquo;alaihi wasallam duduk di sisi liang lahat.&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) berkata, &ldquo;Lalu aku melihat kedua mata beliau mengucurkan air mata.&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) berkata, &ldquo;Maka beliau bertanya, &ldquo;Siapakah di antara kalian yang malam tadi tidak berhubungan (dengan istrinya)?&rdquo; Abu Thalhah berkata, &ldquo;Aku.&rdquo; Beliau berkata, &ldquo;Turunlah engkau ke lahat!&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) &nbsp;berkata, &ldquo;Maka, beliau pun ikut turun ke dalam kuburnya.&rdquo; (HR. Bukhari no. 1285)</p>
            
            <p>Terdapat beberapa faedah yang dapat diambil dari hadis di atas sebagaimana penjelasan berikut ini.</p>
            
            <p>Baca Juga: Beriman terhadap Datangnya Kematian</p>
            
            <p>Faedah pertama<br />
            Hadis di atas menunjukkan bolehnya menangis ketika ada saudara atau kerabat atau sahabat yang meninggal dunia dengan syarat tangisan tersebut tidak diiringi dengan meninggikan suara, merobek-robek kerah baju, atau menampar-nampar pipi, dan sejenisnya. Karena perbuatan tersebut menunjukkan keluh kesah, rasa marah, jengkel, dan tidak rida dengan takdir yang telah Allah Ta&rsquo;ala tetapkan dan juga merupakan perbuatan (ciri khas) orang-orang jahiliah terdahulu.</p>
            
            <p>Diriwayatkan dari sahabat &lsquo;Abdullah bin Mas&rsquo;ud radhiyallahu &lsquo;anhu, Nabi shallallahu &lsquo;alaihi wasallam bersabda,</p>
            
            <p>لَيْسَ مِنَّا مَنْ ضَرَبَ الْخُدُودَ، أَوْ شَقَّ الْجُيُوبَ، أَوْ دَعَا بِدَعْوَى الْجَاهِلِيَّةِ</p>
            
            <p>&ldquo;Bukan dari golongan kami siapa yang menampar-nampar pipi, merobek-robek kerah baju, dan menyeru dengan seruan jahiliah (meratap).&rdquo; (HR. Bukhari no. 1294 dan Muslim no. 103)</p>
            
            <p>Dari sahabat &lsquo;Abdullah bin Umar radhiyallahu &lsquo;anhuma berkata, &ldquo;Ketika Sa&rsquo;ad bin Ubadah sedang sakit, Nabi shallallahu &lsquo;alaihi wasallam menjenguknya bersama &lsquo;Abdurrahman bin &lsquo;Auf, Saad bin Abu Waqqash, dan &lsquo;Abdullah bin Mas&rsquo;ud radhiyallahu &lsquo;anhum. Ketika beliau menemuinya, beliau mendapatinya sedang dikerumuni oleh keluarganya. Beliau bertanya,</p>
            
            <p>قَدْ قَضَى</p>
            
            <p>&ldquo;Apakah ia sudah meninggal?&rdquo;</p>
            
            <p>Mereka menjawab, &ldquo;Belum, wahai Rasulullah.&rdquo;</p>
            
            <p>Lalu, Nabi shallallahu &lsquo;alaihi wasallam menangis. Ketika orang-orang melihat Nabi shallallahu &lsquo;alaihi wasallam menangis, mereka pun turut menangis.</p>
            
            <p>Beliau shallallahu &lsquo;alaihi wasallam bersabda,</p>
            
            <p>أَلاَ تَسْمَعُونَ إِنَّ اللَّهَ لاَ يُعَذِّبُ بِدَمْعِ العَيْنِ، وَلاَ بِحُزْنِ القَلْبِ، وَلَكِنْ يُعَذِّبُ بِهَذَا &ndash; وَأَشَارَ إِلَى لِسَانِهِ &ndash; أَوْ يَرْحَمُ، وَإِنَّ المَيِّتَ يُعَذَّبُ بِبُكَاءِ أَهْلِهِ عَلَيْهِ</p>
            
            <p>&ldquo;Tidakkah kalian mendengar bahwa Allah tidak mengazab dengan sebab tangisan air mata, tidak pula dengan sebab hati yang bersedih, namun Dia mengazab dengan ini.&rdquo; Lalu beliau menunjuk lidahnya, atau dirahmati (karena lisan itu) dan sesungguhnya mayat itu diazab disebabkan tangisan keluarganya kepadanya.&rdquo; (HR. Bukhari no. 1304 dan Muslim no. 924)</p>
            
            <p>Bolehnya menangis ketika ditinggal mati kerabat juga ditunjukkan oleh Rasulullah shallallahu &lsquo;alaihi wasallam ketika ditinggal mati putranya, Ibrahim. Dari sahabat Anas bin Malik radhiyallahu &lsquo;anhu, beliau berkata, &ldquo;Kami bersama Rasulullah shallallahu &lsquo;alaihi wasallam mendatangi Abu Saif Al-Qaiyn yang (istrinya) telah mengasuh dan menyusui Ibrahim (putra Nabi shallallahu &lsquo;alaihi wasallam). Lalu Rasulullah shallallahu &lsquo;alaihi wasallam mengambil Ibrahim dan menciumnya.</p>
            
            <p>Setelah itu, pada kesempatan yang lain, kami mengunjunginya, sedangkan Ibrahim telah meninggal. Hal ini menyebabkan kedua mata Rasulullah shallallahu &lsquo;alaihi wasallam berlinang air mata. Lalu &lsquo;Abdurrahman bin &lsquo;Auf radhiyallahu &lsquo;anhu berkata kepada beliau, &ldquo;Mengapa Anda menangis, wahai Rasulullah?&rdquo; Beliau menjawab,</p>
            
            <p>يَا ابْنَ عَوْفٍ إِنَّهَا رَحْمَةٌ</p>
            
            <p>&ldquo;Wahai Ibnu &lsquo;Auf, sesungguhnya ini adalah rahmat (tangisan kasih sayang).&rdquo;</p>
            
            <p>Beliau lalu melanjutkan dengan kalimat yang lain dan bersabda,</p>
            
            <p>إِنَّ العَيْنَ تَدْمَعُ، وَالقَلْبَ يَحْزَنُ، وَلاَ نَقُولُ إِلَّا مَا يَرْضَى رَبُّنَا، وَإِنَّا بِفِرَاقِكَ يَا إِبْرَاهِيمُ لَمَحْزُونُونَ</p>
            
            <p>&ldquo;Kedua mata boleh mencucurkan air mata, hati boleh bersedih, hanya kita tidaklah mengatakan, kecuali apa yang diridai oleh Rabb kita. Dan kami dengan perpisahan ini wahai Ibrahim pastilah bersedih.&rdquo; (HR. Bukhari no. 1303 dan Muslim no. 2315)</p>
            
            <p>Baca Juga: Hukum Mengumumkan Kematian Seseorang</p>
            
            <p>Faedah kedua<br />
            Kandungan hadis di atas menunjukkan bahwa yang sesuai dengan sunah adalah orang yang menurunkan jenazah perempuan ke liang lahat adalah laki-laki yang pada malam harinya tidak berhubungan badan dengan istrinya, meskipun laki-laki tersebut adalah laki-laki ajnabi (laki-laki yang bukan mahram). Karena dalam hadis di atas, Abu Thalhah radhiyallahu &lsquo;anhu adalah orang yang menurunkan jenazah putri Rasulullah shallallahu &lsquo;alaihi wasallam ke dalam lahat, padahal beliau bukan mahram bagi putri Rasulullah shallallahu &lsquo;alaihi wasallam.</p>
            
            <p>Al-Hafidz Ibnu Hajar rahimahullah berkata, &ldquo;Hadis tersebut menunjukkan bolehnya bagi laki-laki untuk memasukkan jenazah perempuan ke dalam kuburnya, karena laki-laki lebih kuat untuk mengerjakan hal itu dibandingkan perempuan.&ldquo; (Fathul Baari, 3: 159)</p>
            
            <p>Faedah ketiga<br />
            Hadis tersebut menunjukkan bahwa adanya nasihat atau ceramah ketika memakamkan jenazah tidaklah dituntunkan secara terus-menerus setiap kali memakamkan jenazah. Hal ini karena Nabi shallallahu &lsquo;alaihi wasallam duduk di samping makam dan tidak memberikan ceramah nasihat kepada sahabat yang ikut hadir. Yang dikenal atau tersebar (ma&rsquo;ruf) dari sunah Nabi shallallahu &lsquo;alaihi wasallam adalah beliau lebih banyak diam serta menyibukkan diri dengan merenung dan memikirkan kondisi ketika itu (kematian). Demikianlah di antara petunjuk salaf setelah Nabi shallallahu &lsquo;alaihi wasallam, dan cukuplah kematian itu sebagai sebaik-baik peringatan dan nasihat. (Lihat Mushannaf Ibnu Abi Syaibah, 3: 274 dan Ahkaamul Maqaabir, hal. 398)</p>
            
            <p>Akan tetapi, jika dalam kondisi tersebut ada di antara hadirin yang berilmu menyampaikan sedikit nasihat ringkas (singkat) yang berisi tentang motivasi agar manusia menyiapkan diri menghadapi kematian, memperingatkan bahwa kematian itu sangat dekat dengan kita, juga mengingatkan bahwa amal akan dihisab pada hari kiamat, tentu ini juga sebuah kebaikan. Akan tetapi, yang perlu diperhatikan adalah tidak menjadikan hal semacam ini sebagai suatu kebiasaan.</p>
            
            <p>Hal ini sebagaimana dalam sebuah hadis yang diriwayatkan dari sahabat Ali radhiyallahu &lsquo;anhu, beliau berkata, &ldquo;Kami pernah berada di dekat kuburan Baqi&rsquo; Al-Ghorqad. Nabi shallallahu &lsquo;alaihi wasallam mendatangi kami, lalu beliau duduk. Kami pun ikut duduk di dekat beliau. Beliau membawa sebuah tongkat kecil yang dengan tongkat itu beliau memukul-mukul permukaan tanah dan mengorek-ngoreknya, seraya berkata,</p>
            
            <p>مَا مِنْكُمْ مِنْ أَحَدٍ، مَا مِنْ نَفْسٍ مَنْفُوسَةٍ إِلَّا كُتِبَ مَكَانُهَا مِنَ الجَنَّةِ وَالنَّارِ، وَإِلَّا قَدْ كُتِبَ شَقِيَّةً أَوْ سَعِيدَةً</p>
            
            <p>&ldquo;Tidak ada seorang pun dari kalian dan juga tidak satu pun jiwa yang bernafas, melainkan telah ditentukan tempatnya di surga atau di neraka dan sudah ditentukan jalan sengsaranya atau bahagianya.&rdquo; (HR. Bukhari no. 1362 dan Muslim no. 2647)</p>
            
            <p>Faedah keempat<br />
            Hadis tersebut menunjukkan bolehnya duduk di samping makam ketika memakamkan jenazah, dengan syarat bahwa hal itu tidak membuat sempit orang-orang yang sedang memakamkan jenazah atau merusak makam yang ada di sekitarnya. Hal ini ditunjukkan oleh hadis yang diriwayatkan dari sahabat Ali radhiyallahu &lsquo;anhu di atas.</p>',
            'kategori' => 'Santri',
            'tag' => 'MAI',
            'author_id' => 1,
            'slug' => 'menangis-ketika-ditinggal-mati-2',
            'foto' =>'/assets/image/fotooo.png'
        ]);
        Post::create([
            'judul' => 'Menangis ketika Ditinggal Mati',
            'isi' => '<p>Ditinggal mati kerabat, sahabat, dan orang-orang yang dicintai memang bisa menimbulkan kesedihan yang teramat dalam. Akan tetapi, sebagai seorang mukmin, kita wajib menerima segala ketetapan Allah Ta&rsquo;ala tersebut. Sehingga, kita pun terhindar dari sikap marah, jengkel, dan tidak rida dengan takdir tersebut. Meskipun demikian, sebagai manusia biasa, wajar saja jika kita ingin menangis meneteskan air mata sebagai tanda sedihnya hati kita dengan berpulangnya kerabat atau sahabat yang kita cintai. Dari sahabat Anas bin Malik radhiyallahu &lsquo;anhu, beliau berkata,</p>

            <p>شَهِدْنَا بِنْتًا لِرَسُولِ اللَّهِ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ، قَالَ: وَرَسُولُ اللَّهِ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ جَالِسٌ عَلَى القَبْرِ، قَالَ: فَرَأَيْتُ عَيْنَيْهِ تَدْمَعَانِ، قَالَ: فَقَالَ: &laquo;هَلْ مِنْكُمْ رَجُلٌ لَمْ يُقَارِفِ اللَّيْلَةَ؟&raquo; فَقَالَ أَبُو طَلْحَةَ: أَنَا، قَالَ: &laquo;فَانْزِلْ&raquo; قَالَ: فَنَزَلَ فِي قَبْرِهَا</p>
            
            <p>&ldquo;Kami menyaksikan pemakaman putri Nabi shallallahu &lsquo;alaihi wasallam.&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) berkata, &ldquo;Dan saat itu Rasulullah shallallahu &lsquo;alaihi wasallam duduk di sisi liang lahat.&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) berkata, &ldquo;Lalu aku melihat kedua mata beliau mengucurkan air mata.&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) berkata, &ldquo;Maka beliau bertanya, &ldquo;Siapakah di antara kalian yang malam tadi tidak berhubungan (dengan istrinya)?&rdquo; Abu Thalhah berkata, &ldquo;Aku.&rdquo; Beliau berkata, &ldquo;Turunlah engkau ke lahat!&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) &nbsp;berkata, &ldquo;Maka, beliau pun ikut turun ke dalam kuburnya.&rdquo; (HR. Bukhari no. 1285)</p>
            
            <p>Terdapat beberapa faedah yang dapat diambil dari hadis di atas sebagaimana penjelasan berikut ini.</p>
            
            <p>Baca Juga: Beriman terhadap Datangnya Kematian</p>
            
            <p>Faedah pertama<br />
            Hadis di atas menunjukkan bolehnya menangis ketika ada saudara atau kerabat atau sahabat yang meninggal dunia dengan syarat tangisan tersebut tidak diiringi dengan meninggikan suara, merobek-robek kerah baju, atau menampar-nampar pipi, dan sejenisnya. Karena perbuatan tersebut menunjukkan keluh kesah, rasa marah, jengkel, dan tidak rida dengan takdir yang telah Allah Ta&rsquo;ala tetapkan dan juga merupakan perbuatan (ciri khas) orang-orang jahiliah terdahulu.</p>
            
            <p>Diriwayatkan dari sahabat &lsquo;Abdullah bin Mas&rsquo;ud radhiyallahu &lsquo;anhu, Nabi shallallahu &lsquo;alaihi wasallam bersabda,</p>
            
            <p>لَيْسَ مِنَّا مَنْ ضَرَبَ الْخُدُودَ، أَوْ شَقَّ الْجُيُوبَ، أَوْ دَعَا بِدَعْوَى الْجَاهِلِيَّةِ</p>
            
            <p>&ldquo;Bukan dari golongan kami siapa yang menampar-nampar pipi, merobek-robek kerah baju, dan menyeru dengan seruan jahiliah (meratap).&rdquo; (HR. Bukhari no. 1294 dan Muslim no. 103)</p>
            
            <p>Dari sahabat &lsquo;Abdullah bin Umar radhiyallahu &lsquo;anhuma berkata, &ldquo;Ketika Sa&rsquo;ad bin Ubadah sedang sakit, Nabi shallallahu &lsquo;alaihi wasallam menjenguknya bersama &lsquo;Abdurrahman bin &lsquo;Auf, Saad bin Abu Waqqash, dan &lsquo;Abdullah bin Mas&rsquo;ud radhiyallahu &lsquo;anhum. Ketika beliau menemuinya, beliau mendapatinya sedang dikerumuni oleh keluarganya. Beliau bertanya,</p>
            
            <p>قَدْ قَضَى</p>
            
            <p>&ldquo;Apakah ia sudah meninggal?&rdquo;</p>
            
            <p>Mereka menjawab, &ldquo;Belum, wahai Rasulullah.&rdquo;</p>
            
            <p>Lalu, Nabi shallallahu &lsquo;alaihi wasallam menangis. Ketika orang-orang melihat Nabi shallallahu &lsquo;alaihi wasallam menangis, mereka pun turut menangis.</p>
            
            <p>Beliau shallallahu &lsquo;alaihi wasallam bersabda,</p>
            
            <p>أَلاَ تَسْمَعُونَ إِنَّ اللَّهَ لاَ يُعَذِّبُ بِدَمْعِ العَيْنِ، وَلاَ بِحُزْنِ القَلْبِ، وَلَكِنْ يُعَذِّبُ بِهَذَا &ndash; وَأَشَارَ إِلَى لِسَانِهِ &ndash; أَوْ يَرْحَمُ، وَإِنَّ المَيِّتَ يُعَذَّبُ بِبُكَاءِ أَهْلِهِ عَلَيْهِ</p>
            
            <p>&ldquo;Tidakkah kalian mendengar bahwa Allah tidak mengazab dengan sebab tangisan air mata, tidak pula dengan sebab hati yang bersedih, namun Dia mengazab dengan ini.&rdquo; Lalu beliau menunjuk lidahnya, atau dirahmati (karena lisan itu) dan sesungguhnya mayat itu diazab disebabkan tangisan keluarganya kepadanya.&rdquo; (HR. Bukhari no. 1304 dan Muslim no. 924)</p>
            
            <p>Bolehnya menangis ketika ditinggal mati kerabat juga ditunjukkan oleh Rasulullah shallallahu &lsquo;alaihi wasallam ketika ditinggal mati putranya, Ibrahim. Dari sahabat Anas bin Malik radhiyallahu &lsquo;anhu, beliau berkata, &ldquo;Kami bersama Rasulullah shallallahu &lsquo;alaihi wasallam mendatangi Abu Saif Al-Qaiyn yang (istrinya) telah mengasuh dan menyusui Ibrahim (putra Nabi shallallahu &lsquo;alaihi wasallam). Lalu Rasulullah shallallahu &lsquo;alaihi wasallam mengambil Ibrahim dan menciumnya.</p>
            
            <p>Setelah itu, pada kesempatan yang lain, kami mengunjunginya, sedangkan Ibrahim telah meninggal. Hal ini menyebabkan kedua mata Rasulullah shallallahu &lsquo;alaihi wasallam berlinang air mata. Lalu &lsquo;Abdurrahman bin &lsquo;Auf radhiyallahu &lsquo;anhu berkata kepada beliau, &ldquo;Mengapa Anda menangis, wahai Rasulullah?&rdquo; Beliau menjawab,</p>
            
            <p>يَا ابْنَ عَوْفٍ إِنَّهَا رَحْمَةٌ</p>
            
            <p>&ldquo;Wahai Ibnu &lsquo;Auf, sesungguhnya ini adalah rahmat (tangisan kasih sayang).&rdquo;</p>
            
            <p>Beliau lalu melanjutkan dengan kalimat yang lain dan bersabda,</p>
            
            <p>إِنَّ العَيْنَ تَدْمَعُ، وَالقَلْبَ يَحْزَنُ، وَلاَ نَقُولُ إِلَّا مَا يَرْضَى رَبُّنَا، وَإِنَّا بِفِرَاقِكَ يَا إِبْرَاهِيمُ لَمَحْزُونُونَ</p>
            
            <p>&ldquo;Kedua mata boleh mencucurkan air mata, hati boleh bersedih, hanya kita tidaklah mengatakan, kecuali apa yang diridai oleh Rabb kita. Dan kami dengan perpisahan ini wahai Ibrahim pastilah bersedih.&rdquo; (HR. Bukhari no. 1303 dan Muslim no. 2315)</p>
            
            <p>Baca Juga: Hukum Mengumumkan Kematian Seseorang</p>
            
            <p>Faedah kedua<br />
            Kandungan hadis di atas menunjukkan bahwa yang sesuai dengan sunah adalah orang yang menurunkan jenazah perempuan ke liang lahat adalah laki-laki yang pada malam harinya tidak berhubungan badan dengan istrinya, meskipun laki-laki tersebut adalah laki-laki ajnabi (laki-laki yang bukan mahram). Karena dalam hadis di atas, Abu Thalhah radhiyallahu &lsquo;anhu adalah orang yang menurunkan jenazah putri Rasulullah shallallahu &lsquo;alaihi wasallam ke dalam lahat, padahal beliau bukan mahram bagi putri Rasulullah shallallahu &lsquo;alaihi wasallam.</p>
            
            <p>Al-Hafidz Ibnu Hajar rahimahullah berkata, &ldquo;Hadis tersebut menunjukkan bolehnya bagi laki-laki untuk memasukkan jenazah perempuan ke dalam kuburnya, karena laki-laki lebih kuat untuk mengerjakan hal itu dibandingkan perempuan.&ldquo; (Fathul Baari, 3: 159)</p>
            
            <p>Faedah ketiga<br />
            Hadis tersebut menunjukkan bahwa adanya nasihat atau ceramah ketika memakamkan jenazah tidaklah dituntunkan secara terus-menerus setiap kali memakamkan jenazah. Hal ini karena Nabi shallallahu &lsquo;alaihi wasallam duduk di samping makam dan tidak memberikan ceramah nasihat kepada sahabat yang ikut hadir. Yang dikenal atau tersebar (ma&rsquo;ruf) dari sunah Nabi shallallahu &lsquo;alaihi wasallam adalah beliau lebih banyak diam serta menyibukkan diri dengan merenung dan memikirkan kondisi ketika itu (kematian). Demikianlah di antara petunjuk salaf setelah Nabi shallallahu &lsquo;alaihi wasallam, dan cukuplah kematian itu sebagai sebaik-baik peringatan dan nasihat. (Lihat Mushannaf Ibnu Abi Syaibah, 3: 274 dan Ahkaamul Maqaabir, hal. 398)</p>
            
            <p>Akan tetapi, jika dalam kondisi tersebut ada di antara hadirin yang berilmu menyampaikan sedikit nasihat ringkas (singkat) yang berisi tentang motivasi agar manusia menyiapkan diri menghadapi kematian, memperingatkan bahwa kematian itu sangat dekat dengan kita, juga mengingatkan bahwa amal akan dihisab pada hari kiamat, tentu ini juga sebuah kebaikan. Akan tetapi, yang perlu diperhatikan adalah tidak menjadikan hal semacam ini sebagai suatu kebiasaan.</p>
            
            <p>Hal ini sebagaimana dalam sebuah hadis yang diriwayatkan dari sahabat Ali radhiyallahu &lsquo;anhu, beliau berkata, &ldquo;Kami pernah berada di dekat kuburan Baqi&rsquo; Al-Ghorqad. Nabi shallallahu &lsquo;alaihi wasallam mendatangi kami, lalu beliau duduk. Kami pun ikut duduk di dekat beliau. Beliau membawa sebuah tongkat kecil yang dengan tongkat itu beliau memukul-mukul permukaan tanah dan mengorek-ngoreknya, seraya berkata,</p>
            
            <p>مَا مِنْكُمْ مِنْ أَحَدٍ، مَا مِنْ نَفْسٍ مَنْفُوسَةٍ إِلَّا كُتِبَ مَكَانُهَا مِنَ الجَنَّةِ وَالنَّارِ، وَإِلَّا قَدْ كُتِبَ شَقِيَّةً أَوْ سَعِيدَةً</p>
            
            <p>&ldquo;Tidak ada seorang pun dari kalian dan juga tidak satu pun jiwa yang bernafas, melainkan telah ditentukan tempatnya di surga atau di neraka dan sudah ditentukan jalan sengsaranya atau bahagianya.&rdquo; (HR. Bukhari no. 1362 dan Muslim no. 2647)</p>
            
            <p>Faedah keempat<br />
            Hadis tersebut menunjukkan bolehnya duduk di samping makam ketika memakamkan jenazah, dengan syarat bahwa hal itu tidak membuat sempit orang-orang yang sedang memakamkan jenazah atau merusak makam yang ada di sekitarnya. Hal ini ditunjukkan oleh hadis yang diriwayatkan dari sahabat Ali radhiyallahu &lsquo;anhu di atas.</p>',
            'kategori' => 'Santri',
            'tag' => 'MAI',
            'author_id' => 1,
            'slug' => 'menangis-ketika-ditinggal-mati-3',
            'foto' =>'/assets/image/fotooo.png'
        ]);
        Post::create([
            'judul' => 'Menangis ketika Ditinggal Mati',
            'isi' => '<p>Ditinggal mati kerabat, sahabat, dan orang-orang yang dicintai memang bisa menimbulkan kesedihan yang teramat dalam. Akan tetapi, sebagai seorang mukmin, kita wajib menerima segala ketetapan Allah Ta&rsquo;ala tersebut. Sehingga, kita pun terhindar dari sikap marah, jengkel, dan tidak rida dengan takdir tersebut. Meskipun demikian, sebagai manusia biasa, wajar saja jika kita ingin menangis meneteskan air mata sebagai tanda sedihnya hati kita dengan berpulangnya kerabat atau sahabat yang kita cintai. Dari sahabat Anas bin Malik radhiyallahu &lsquo;anhu, beliau berkata,</p>

            <p>شَهِدْنَا بِنْتًا لِرَسُولِ اللَّهِ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ، قَالَ: وَرَسُولُ اللَّهِ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ جَالِسٌ عَلَى القَبْرِ، قَالَ: فَرَأَيْتُ عَيْنَيْهِ تَدْمَعَانِ، قَالَ: فَقَالَ: &laquo;هَلْ مِنْكُمْ رَجُلٌ لَمْ يُقَارِفِ اللَّيْلَةَ؟&raquo; فَقَالَ أَبُو طَلْحَةَ: أَنَا، قَالَ: &laquo;فَانْزِلْ&raquo; قَالَ: فَنَزَلَ فِي قَبْرِهَا</p>
            
            <p>&ldquo;Kami menyaksikan pemakaman putri Nabi shallallahu &lsquo;alaihi wasallam.&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) berkata, &ldquo;Dan saat itu Rasulullah shallallahu &lsquo;alaihi wasallam duduk di sisi liang lahat.&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) berkata, &ldquo;Lalu aku melihat kedua mata beliau mengucurkan air mata.&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) berkata, &ldquo;Maka beliau bertanya, &ldquo;Siapakah di antara kalian yang malam tadi tidak berhubungan (dengan istrinya)?&rdquo; Abu Thalhah berkata, &ldquo;Aku.&rdquo; Beliau berkata, &ldquo;Turunlah engkau ke lahat!&rdquo; Dia (Anas bin Malik radhiyallahu &lsquo;anhu) &nbsp;berkata, &ldquo;Maka, beliau pun ikut turun ke dalam kuburnya.&rdquo; (HR. Bukhari no. 1285)</p>
            
            <p>Terdapat beberapa faedah yang dapat diambil dari hadis di atas sebagaimana penjelasan berikut ini.</p>
            
            <p>Baca Juga: Beriman terhadap Datangnya Kematian</p>
            
            <p>Faedah pertama<br />
            Hadis di atas menunjukkan bolehnya menangis ketika ada saudara atau kerabat atau sahabat yang meninggal dunia dengan syarat tangisan tersebut tidak diiringi dengan meninggikan suara, merobek-robek kerah baju, atau menampar-nampar pipi, dan sejenisnya. Karena perbuatan tersebut menunjukkan keluh kesah, rasa marah, jengkel, dan tidak rida dengan takdir yang telah Allah Ta&rsquo;ala tetapkan dan juga merupakan perbuatan (ciri khas) orang-orang jahiliah terdahulu.</p>
            
            <p>Diriwayatkan dari sahabat &lsquo;Abdullah bin Mas&rsquo;ud radhiyallahu &lsquo;anhu, Nabi shallallahu &lsquo;alaihi wasallam bersabda,</p>
            
            <p>لَيْسَ مِنَّا مَنْ ضَرَبَ الْخُدُودَ، أَوْ شَقَّ الْجُيُوبَ، أَوْ دَعَا بِدَعْوَى الْجَاهِلِيَّةِ</p>
            
            <p>&ldquo;Bukan dari golongan kami siapa yang menampar-nampar pipi, merobek-robek kerah baju, dan menyeru dengan seruan jahiliah (meratap).&rdquo; (HR. Bukhari no. 1294 dan Muslim no. 103)</p>
            
            <p>Dari sahabat &lsquo;Abdullah bin Umar radhiyallahu &lsquo;anhuma berkata, &ldquo;Ketika Sa&rsquo;ad bin Ubadah sedang sakit, Nabi shallallahu &lsquo;alaihi wasallam menjenguknya bersama &lsquo;Abdurrahman bin &lsquo;Auf, Saad bin Abu Waqqash, dan &lsquo;Abdullah bin Mas&rsquo;ud radhiyallahu &lsquo;anhum. Ketika beliau menemuinya, beliau mendapatinya sedang dikerumuni oleh keluarganya. Beliau bertanya,</p>
            
            <p>قَدْ قَضَى</p>
            
            <p>&ldquo;Apakah ia sudah meninggal?&rdquo;</p>
            
            <p>Mereka menjawab, &ldquo;Belum, wahai Rasulullah.&rdquo;</p>
            
            <p>Lalu, Nabi shallallahu &lsquo;alaihi wasallam menangis. Ketika orang-orang melihat Nabi shallallahu &lsquo;alaihi wasallam menangis, mereka pun turut menangis.</p>
            
            <p>Beliau shallallahu &lsquo;alaihi wasallam bersabda,</p>
            
            <p>أَلاَ تَسْمَعُونَ إِنَّ اللَّهَ لاَ يُعَذِّبُ بِدَمْعِ العَيْنِ، وَلاَ بِحُزْنِ القَلْبِ، وَلَكِنْ يُعَذِّبُ بِهَذَا &ndash; وَأَشَارَ إِلَى لِسَانِهِ &ndash; أَوْ يَرْحَمُ، وَإِنَّ المَيِّتَ يُعَذَّبُ بِبُكَاءِ أَهْلِهِ عَلَيْهِ</p>
            
            <p>&ldquo;Tidakkah kalian mendengar bahwa Allah tidak mengazab dengan sebab tangisan air mata, tidak pula dengan sebab hati yang bersedih, namun Dia mengazab dengan ini.&rdquo; Lalu beliau menunjuk lidahnya, atau dirahmati (karena lisan itu) dan sesungguhnya mayat itu diazab disebabkan tangisan keluarganya kepadanya.&rdquo; (HR. Bukhari no. 1304 dan Muslim no. 924)</p>
            
            <p>Bolehnya menangis ketika ditinggal mati kerabat juga ditunjukkan oleh Rasulullah shallallahu &lsquo;alaihi wasallam ketika ditinggal mati putranya, Ibrahim. Dari sahabat Anas bin Malik radhiyallahu &lsquo;anhu, beliau berkata, &ldquo;Kami bersama Rasulullah shallallahu &lsquo;alaihi wasallam mendatangi Abu Saif Al-Qaiyn yang (istrinya) telah mengasuh dan menyusui Ibrahim (putra Nabi shallallahu &lsquo;alaihi wasallam). Lalu Rasulullah shallallahu &lsquo;alaihi wasallam mengambil Ibrahim dan menciumnya.</p>
            
            <p>Setelah itu, pada kesempatan yang lain, kami mengunjunginya, sedangkan Ibrahim telah meninggal. Hal ini menyebabkan kedua mata Rasulullah shallallahu &lsquo;alaihi wasallam berlinang air mata. Lalu &lsquo;Abdurrahman bin &lsquo;Auf radhiyallahu &lsquo;anhu berkata kepada beliau, &ldquo;Mengapa Anda menangis, wahai Rasulullah?&rdquo; Beliau menjawab,</p>
            
            <p>يَا ابْنَ عَوْفٍ إِنَّهَا رَحْمَةٌ</p>
            
            <p>&ldquo;Wahai Ibnu &lsquo;Auf, sesungguhnya ini adalah rahmat (tangisan kasih sayang).&rdquo;</p>
            
            <p>Beliau lalu melanjutkan dengan kalimat yang lain dan bersabda,</p>
            
            <p>إِنَّ العَيْنَ تَدْمَعُ، وَالقَلْبَ يَحْزَنُ، وَلاَ نَقُولُ إِلَّا مَا يَرْضَى رَبُّنَا، وَإِنَّا بِفِرَاقِكَ يَا إِبْرَاهِيمُ لَمَحْزُونُونَ</p>
            
            <p>&ldquo;Kedua mata boleh mencucurkan air mata, hati boleh bersedih, hanya kita tidaklah mengatakan, kecuali apa yang diridai oleh Rabb kita. Dan kami dengan perpisahan ini wahai Ibrahim pastilah bersedih.&rdquo; (HR. Bukhari no. 1303 dan Muslim no. 2315)</p>
            
            <p>Baca Juga: Hukum Mengumumkan Kematian Seseorang</p>
            
            <p>Faedah kedua<br />
            Kandungan hadis di atas menunjukkan bahwa yang sesuai dengan sunah adalah orang yang menurunkan jenazah perempuan ke liang lahat adalah laki-laki yang pada malam harinya tidak berhubungan badan dengan istrinya, meskipun laki-laki tersebut adalah laki-laki ajnabi (laki-laki yang bukan mahram). Karena dalam hadis di atas, Abu Thalhah radhiyallahu &lsquo;anhu adalah orang yang menurunkan jenazah putri Rasulullah shallallahu &lsquo;alaihi wasallam ke dalam lahat, padahal beliau bukan mahram bagi putri Rasulullah shallallahu &lsquo;alaihi wasallam.</p>
            
            <p>Al-Hafidz Ibnu Hajar rahimahullah berkata, &ldquo;Hadis tersebut menunjukkan bolehnya bagi laki-laki untuk memasukkan jenazah perempuan ke dalam kuburnya, karena laki-laki lebih kuat untuk mengerjakan hal itu dibandingkan perempuan.&ldquo; (Fathul Baari, 3: 159)</p>
            
            <p>Faedah ketiga<br />
            Hadis tersebut menunjukkan bahwa adanya nasihat atau ceramah ketika memakamkan jenazah tidaklah dituntunkan secara terus-menerus setiap kali memakamkan jenazah. Hal ini karena Nabi shallallahu &lsquo;alaihi wasallam duduk di samping makam dan tidak memberikan ceramah nasihat kepada sahabat yang ikut hadir. Yang dikenal atau tersebar (ma&rsquo;ruf) dari sunah Nabi shallallahu &lsquo;alaihi wasallam adalah beliau lebih banyak diam serta menyibukkan diri dengan merenung dan memikirkan kondisi ketika itu (kematian). Demikianlah di antara petunjuk salaf setelah Nabi shallallahu &lsquo;alaihi wasallam, dan cukuplah kematian itu sebagai sebaik-baik peringatan dan nasihat. (Lihat Mushannaf Ibnu Abi Syaibah, 3: 274 dan Ahkaamul Maqaabir, hal. 398)</p>
            
            <p>Akan tetapi, jika dalam kondisi tersebut ada di antara hadirin yang berilmu menyampaikan sedikit nasihat ringkas (singkat) yang berisi tentang motivasi agar manusia menyiapkan diri menghadapi kematian, memperingatkan bahwa kematian itu sangat dekat dengan kita, juga mengingatkan bahwa amal akan dihisab pada hari kiamat, tentu ini juga sebuah kebaikan. Akan tetapi, yang perlu diperhatikan adalah tidak menjadikan hal semacam ini sebagai suatu kebiasaan.</p>
            
            <p>Hal ini sebagaimana dalam sebuah hadis yang diriwayatkan dari sahabat Ali radhiyallahu &lsquo;anhu, beliau berkata, &ldquo;Kami pernah berada di dekat kuburan Baqi&rsquo; Al-Ghorqad. Nabi shallallahu &lsquo;alaihi wasallam mendatangi kami, lalu beliau duduk. Kami pun ikut duduk di dekat beliau. Beliau membawa sebuah tongkat kecil yang dengan tongkat itu beliau memukul-mukul permukaan tanah dan mengorek-ngoreknya, seraya berkata,</p>
            
            <p>مَا مِنْكُمْ مِنْ أَحَدٍ، مَا مِنْ نَفْسٍ مَنْفُوسَةٍ إِلَّا كُتِبَ مَكَانُهَا مِنَ الجَنَّةِ وَالنَّارِ، وَإِلَّا قَدْ كُتِبَ شَقِيَّةً أَوْ سَعِيدَةً</p>
            
            <p>&ldquo;Tidak ada seorang pun dari kalian dan juga tidak satu pun jiwa yang bernafas, melainkan telah ditentukan tempatnya di surga atau di neraka dan sudah ditentukan jalan sengsaranya atau bahagianya.&rdquo; (HR. Bukhari no. 1362 dan Muslim no. 2647)</p>
            
            <p>Faedah keempat<br />
            Hadis tersebut menunjukkan bolehnya duduk di samping makam ketika memakamkan jenazah, dengan syarat bahwa hal itu tidak membuat sempit orang-orang yang sedang memakamkan jenazah atau merusak makam yang ada di sekitarnya. Hal ini ditunjukkan oleh hadis yang diriwayatkan dari sahabat Ali radhiyallahu &lsquo;anhu di atas.</p>',
            'kategori' => 'Santri',
            'tag' => 'MAI',
            'author_id' => 1,
            'slug' => 'menangis-ketika-ditinggal-mati-4',
            'foto' =>'/assets/image/fotooo.png'
        ]);
    }
}
