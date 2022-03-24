<?php
/* foreach if has similiar text thann it was! */

$libs = array (
    "bismillahirrahmanirrahim" =>  'بِسْمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ'
    , 'basmalah' => 'بَسْمَلَةْ'
    , 'allah' => 'اللَّه'
    , 'allahu' =>  'اللَّهُ'
    , 'allahi' => 'اللَّهِ',
    'dengan' => 'دَغَان',
    'atau' => 'اَتَوْ',
    'makan' =>  'مَكَانْ',
    'malam' => 'مَالَمْ',
    'dan' => 'دَانْ',
    'seperti' => 'سَفَرْتِيْ' ,
    'alhamdulillah' => 'اَلْحَمْدُلِلَّه' ,
    'alhamdulillahirabbilalamin' => 'اَلْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِيْنَ' ,
    'ingat' => 'إِغَاتْ' ,
    'saya' => 'سَيَا' ,
    'wasshalatu' => 'وَالصَّلَاةُ' ,
    'wassalamu' => 'وَالسَّلاَمُ' ,
    'alaa' => 'عَلَى' ,
    'sayyidi' => 'سَيِّدِ' ,
    'sayyidu' => 'سَيِّدُ' ,
    'almursalin'=> 'الْمُرْسَلِينْ',
    'ammabakdu' => 'اَمَّابَعْدُ',
    'wabakdu' => 'وَبَعْدُ',
    'abduhu' => 'عَبْدُهُ',
    'warasuluhu'
    => 'وَرَسُوْلُهُ'
    , 'waala'    => 'وَعَلَى'
    , 'ashabihi'    => 'اَصْحَابِهِ'
    , 'sahbihi'    => 'صَحْبِهِ'
    , 'ajmain'    => 'اَجْمَعِينْ'
    , 'catatan'    => 'جَتَاتَنْ'
    , 'ini'    => 'إِنِيْ'
    , 'merupakan'    => 'مَارُوْفَكَانْ'
    , 'terjemah'    => 'تَرْجَمَةْ'
    , 'dari'    => 'دَارِيْ'
    , 'kitab'    => 'كَتَابْ'
    , 'karya'    => 'كَرْيَا'
    , 'semoga'    => 'سَمُوْكَا'
    , 'usaha'    => 'اُوْسَهَا'
    , 'di'    => 'دِيْ'
    , 'shodaqah,'    => 'صَدَقَةْ'
    , 'perantara'    => 'فَارَنْتَارَا'
    , 'dalam'    => 'دَالَمْ'
    , 'dalamnya'    => 'دَالَمْيَا'
    , 'mendapat'    => 'مَنْدَافَةْ'
    , 'ridha'    => 'رِضَا'
    , 'rida'    => 'رِضَا'
    , 'subhanahu'    => 'سُبْحَانَهُ'
    , 'wataala'    => 'وَتَعَالَى'
    , 'diharapkan'    => 'دِيْ هَارَفْكَانْ'
    , 'bagi'    => 'بَاكِيْ'
    , 'pembaca'    => 'فَمْبَاجَا'
    , 'untuk'    => 'اُونْتُوكْ'
    , 'memberikan'    => 'مَامْبَارِيْكَانْ'
    , 'koreksi'    => 'كُوْرِكْسِيْ'
    , 'terhadap'    => 'تَرْهَدَفْ'
    , 'kesalahan'    => 'كَسَلَاهَانْ'
    , 'yang'    => 'يَاغْ'
    , 'ditemukan'    => 'دِيْ تَامُوْكَانْ'
    , 'baik'    => 'بَاهِيكْ'
    , 'luar'    => 'لُوَارْ'
    , 'memahami'    => 'مَامَهَامِيْ'
    , 'menerjemahkan'    => 'مَنَرْجَمَهْكَانْ'
    , 'penulis'    => 'فَانُوْلِسْ'
    , 'berkata'    => 'بَرْكَةَ'
    , 'keutamaan'    => 'كَائُوْتَمَائَنْ'
    , 'mencari'    => 'مَنْجَارِيْ'
    , 'ilmu'    => 'عِلْمُ'
    , 'rasulullah'    => 'رَسُوْلُ اللهْ'
    , 'rasul'    => 'رَسُولْ'
    , 'saw'    => 'ﷺ'
    , 'pernah'    => 'فَارْنَهْ'
    , 'bersabda'    => 'بَرْسَبْدَ'
    , 'sabda'    => 'سَبْدَ'
    , 'barang'    => 'بَارَغْ'
    , 'siapa'    => 'سِيَافَا'
    , 'sedang'    => 'سَدَاغْ'
    , 'bahwa'    => 'بَهْوَا'
    , 'merupakan'    => 'مَارُوْفَكَانْ'
    , 'suatu'    => 'سُوَاتُو'
    , 'kewajiban' => 'كَوَاجِبَانْ'
    , 'buletin'    => 'بُولَاتِنْ'
    , 'budiman'    => 'بُوْدِيْمَانْ'
    , 'memasuki'    => 'مَمَاسُوكِيْ'
    , 'budiman,'    => 'بُوْدِيْمَانْ،'
    , 'bulan'    => 'بُوْلَانْ'
    , 'ke-10'    => 'كَا-10'
    , 'tahun'    => 'تَاهُونْ'
    , 'suasana'    => 'سُوَاسَنَا'
    , 'kehidupan'    => 'كَهِيْدُوْفَانْ'
    , 'terasa'    => 'تَارَسَا'
    , 'lebih'    => 'لَابِيهْ'
    , 'lega'    => 'لَاكَا'
    , 'karena'    => 'كَارَانَا'
    , 'kekhawatiran'    => 'كَاخَوَتِيْرَانْ'
    , 'terhadap'    => 'تَارْهَدَفْ'
    , 'sudah'    => 'سُوْدَاهْ'
    , 'mulai'    => 'مُوْلَاهِيْ'
    , 'mereda'    => 'مَارَدَ'
    , 'itu'    => 'اِيْتُوْ'
    , 'hal-hal'    => 'حَلْ-حَلْ'
    , 'ditambah'    => 'دِيْ تَمْبَاهْ'
    , 'keyakinan'    => 'كَيَقِيْنَنْ'
    , 'masyarakat'    => 'مَشْيَرَكَةْ'
    , 'bersikap'    => 'بَارْسِيْكَافْ'
    , 'positif'    => 'بُوْسِتِفْ'
    , 'rata-rata'    => 'رَاتَا-رَاتَا'
    , 'melakukan'    => 'مَلَاكُوْكَانْ'
    , 'sementara'    => 'سَمَانْتَارَا'
    , 'para'    => 'فَارَا'
    , 'petani'    => 'فَتَانِيْ'
    , 'juga'    => 'جُوكَا'
    , 'gembira'    => 'كَامْبِيْرَا'
    , 'harga'    => 'حَرْكَا'
    , 'beberapa'    => 'بَبَارَافَا'
    , 'komoditi'    => 'كُوْمُودِيْتِيْ'
    , 'pertanian'    => 'بَارْتَنِيَانْ'
    , 'mengalami'    => 'مَغَالَامِيْ'
    , 'peningkatan'    => 'فَانِغَكَاتَنْ'
    , 'dialami'    => 'دِيْ اَلاَمِيْ'
    , 'sawit'    => 'سَوِتْ'
    , 'dimana'    => 'دِيْمَنَا'
    , 'kenaikan'    => 'كَنَاهِيْكَانْ'
    , 'pasar'    => 'فَاسَرْ'
    , 'dunia'    => 'دُنِيَا'
    , 'sehingga'    => 'سَهِغْكَا'
    , 'pendapatan'    => 'فَانْدَافَاتَنْ'
    , 'mereka'    => 'مَارِيْكَا'
    , 'jadi'    => 'جَادِيْ'
    , 'menjadi'    => 'مَنْجَادِيْ'
    , 'demikian'    => 'دَمِكِيَانْ'
    , 'sedemikian'    => 'سَدَمِكِيَانْ'
    , 'lain'    => 'لَاهِينْ'
    , 'lainnya'    => 'لَاهِينْيَا'
    , 'ditransaksikan'    => 'دِيْ تَرَنْسَكْسِيْكَانْ'
    , 'bursa'    => 'بُرْسَا'
    , 'berjangka'    => 'بَرْجَغْكَا'
    , 'pada'    => 'فَدَا'
    , 'hadir'    => 'حَضِرْ'
    , 'berita'    => 'بَارِيْتَا'
    , 'utama'    => 'اُوْتَمَا'
    , 'tentang'    => 'تَنْتَاغْ'
    , 'apa'    => 'اَفَا'
    , 'edisi'    => 'اِدِيْسِيْ'
    , 'boleh'    => 'بُوْلِهْ'
    , 'dianjurkan'    => 'دِيْ اَنْجُورْكَانْ'
    , 'tak'    => 'تَاكْ'
    , 'tidak'    => 'تِيْدَاكْ'
    , 'boleh'    => 'بُوْلِيهْ'
    , 'harus'    => 'هَارُوسْ'
    , 'dihindari'    => 'دِيْ هِنْدَارِيْ'
    , 'perdagangan'    => 'فَرْدَاكَاغَنْ'
    , 'hal'    => 'حَلْ'
    , 'perhatian'    => 'فَارْهَاتِيَانْ'
    , 'mengingatkan'    => 'مَاغِيْغَاتْكَانْ'
    , 'kerapkali'    => 'كَرَافْ كَالِيْ'
    , 'korban'    => 'كُرْبَانْ'
    , 'pelaku'    => 'فَلاَكُوْ'
    , 'ilegal'    => 'اِيْلِيكَالْ'
    , 'bosan'    => 'بُوْسَانْ'
    , 'terus'    => 'تَارُوسْ'
    , 'mengingat'    => 'مَاغِيْغَاتْ'
    , 'mengenai'    => 'مَاغَانَهِيْ'
    , 'diperhatikan'    => 'دِيْ فَرْهَاتِيْكَانْ'
    , 'transaksi'    => 'تَارَنْسَكْسِ'
    , 'menyimak'    => 'مَايِمَاكْ'
    , 'rubrik'    => 'رُبْرِيكْ'
    , 'wawancara'    => 'وَوَنْجَارَا'
    , 'khusus'    => 'خُصُوصْ'
    , 'kami'    => 'كَامِيْ'
    , 'ajak'    => 'اَجَاكْ'
    , 'menyimak'    => 'مَايِمَاكْ'
    , 'perbincangan'    => 'فَارْبِنْجَاغَنْ'
    , 'komisaris'    => 'كُوْمِسَارِسْ'
    , 'multilateral'    => 'مُلْتِيْ لَاتَرَالْ'
    , 'menginformasikan'    => 'مَاغْإِنْفُرْمَاسِيْكَانْ'
    , 'bagaimana'    => 'بَكَيْمَنَا'
    , 'pihaknya'    => 'فِهَاكْيَا'
    , 'pihak'    => 'فِحَاكْ'
    , 'sebagai'    => 'سَبَاكَيْ'
    , 'pialang'    => 'فِيَالاَغْ'
    , 'mengajak'    => 'مَغَاجَاكْ'
    , 'calon'    => 'جَالُونْ'
    , 'investor'    => 'إِنْفِسْتُورْ'
    , 'kabar'    => 'خَبَرْ'
    , 'sistem'    => 'سِسْتَامْ'
    , 'resi'    => 'رَسِ'
    , 'pertumbuhan'    => 'فَارْتُومْبُوْهَانْ'
    , 'sangat'    => 'سَاغَتْ'
    , 'sampai'    => 'سَامْفَايْ'
    , 'gudang'    => 'كُوْدَاغْ'
    , 'lelang'    => 'لِيْلَاغْ'
    , 'informasikan'    => 'اِنْفُرْمَاسِيْكَانْ'
    , 'baru'    => 'بَارُوْ'
    , 'pertama'    => 'فَارْتَمَا'
    , 'kali'    => 'كَالِيْ'
    , 'dilakukan'    => 'دِيْلَاكُوكَانْ'
    , 'oleh'    => 'اُوْلِيْه'
    , 'provinsi'    => 'فَرُوْفِنْسِيْ'
    , 'banten'    => 'بَانْتَانْ'
    , 'kuartal'    => 'كُوَرْتَالْ'
    , 'ketiga'    => '(3) كَـــــتِيْكَا'
    , 'memberi'    => 'مَامْبَارِيْ'
    , 'bisa'    => 'بِيْسَا'
    , 'penjualan'    => 'فَانْجُوَالَانْ'
    , 'anda'    => 'اَنْدَا'
    , 'hadirkan'    => 'حَضِرْكَنْ'
    , 'kehadiran'    => 'كَاحَضِرَانْ'
    , 'silakan'    => 'سِلَاكَنْ'
    , 'redaksi'    => 'رِيْدَاكْسِيْ'
    , 'kalangan'    => 'كَلَاغَنْ'
    , 'banyak'    => 'بَيَاكْ'
    , 'orang'    => 'عُوْرَاغْ'
    , 'cukup'    => 'جُوْكُفْ'
    , 'cerdas'    => 'جَارْدَاسْ'
    , 'sisi'    => 'سِسِيْ'
    , 'industri'    => 'اِنْدُسْتَارِيْ'
    , 'tumbuh'    => 'تُمْبُوهْ'
    , 'terlibat'    => 'تَارْلِيْبَاتْ'
    , 'makin'    => 'مَاكِيْن'
    , 'semakin'    => 'سَمَاكِينْ'
    , 'sehat'    => 'صِحَةْ'
    , 'berbagai'    => 'بَارْبَاكَيْ'
    , 'ke'    => 'كَا'
    , 'kontribusi'    => 'كُنْتَارِيْبُوْسِيْ'
    , 'berizin'    => 'بَرْاِزِنْ'
    , 'memiliki'    => 'مَامِلِكِ'
    , 'literasi'    => 'لِتَارَاسِيْ'
    , 'menyebut'    => 'مَايَبُوتْيَا'
    , 'menyebutnya'    => 'مَايَبُوتْيَا'
    , 'lupa'    => 'لُوْفَا'
    , 'ingin'    => 'اِغِنْ'
    , 'kepada'    => 'كَفَدَا'
    , 'perkembangan'    => 'فَارْكَمْبَاغَنْ'
    , 'biasa'    => 'بِيَاسَا'
    , 'upaya'    => 'اُفَيَا'
    , 'dianggap'    => 'دِيأَغْكَافْ'
    , 'biasanya'    => 'بِيَاسَيَا'
    , 'manfaat'    => 'مَنْفَعَةْ'
    , 'wilayah'    => 'وِلَايَةْ'
    , 'bodong'    => 'بُوْدُغْ'
    , 'dluha'    => 'ضُحَى'
    , 'duha'    => 'ضُحَى'
    , 'tarawih'    => 'تَرَاوِيحْ'
    , "i'tidal"    => 'اِعْتِدَالْ'
    , 'itidal'    => 'اِعْتِدَالْ'
    , 'junub'    => 'جُنُبْ'
    , 'mandi'    => 'مَانْدِيْ'
    , 'bangun'    => 'بَاغُنْ'
    , 'tidur'    => 'تِيْدُرْ'
    , 'sholat'    => 'صَلَاةْ'
    , 'salat'    => 'صَلَاةْ'
    , 'shalat'    => 'صَلَاةْ'
    , 'sujud'    => 'سُجُودْ'
    , 'rukuk'    => 'رُكُوعْ'
    , 'rakaat'    => 'رَكَعَاتْ'
    , 'haji'    => 'حَجِّ'
    , 'puasa'    => 'فُوَاسَ'
    , 'maka'    => 'مَكَ'
    , 'batal'    => 'بَطَلْ'
    , 'sah'    => 'صَحْ'
    , 'haram'    => 'حَرَامْ'
    , 'makruh'    => 'مَكْرُهْ'
    , 'sunnah'    => 'سُنَّةْ'
    , 'wajib'    => 'وَاجِبْ'
    , 'selalu'    => 'سَلَالُوْ'
    , 'setiap'    => 'سَاتِيَافْ'
    , 'bulannya'    => 'بُوْلَنْيَا'
    , 'tahunnya'    => 'تَاهُونْيَا'
    , 'harinya'    => 'هَارِيْيَا'
    , 'jamnya'    => 'جَامْيَا'
    , 'jam'    => 'جَامْ'
    , 'tanggal'    => 'تَغْكَالْ'
    , 'malamnya'    => 'مَالْمْيَا'
    , 'siangnya'    => 'سِيَاغْيَا'
    , 'paginya'    => 'فَاكِيْيَا'
    , 'sorenya'    => 'سُوْرِيْيَا'
    , 'agar'    => 'اَكَارْ'
    , 'selain'    => 'سَلَاهِينْ'
    , 'masukan'    => 'مَسُوْكَانْ'
    , 'pembahasan'    => 'فَمْبَاهَاسَنْ'
    , 'menarik'    => 'مَنَارِكْ'
    , 'hubungi'    => 'هُبُوغِيْ'
    , 'diwarnai'    => 'دِيْ وَارْنَاهِيْ'
    , 'tersebut'    => 'تَارْسَابُوتْ'
    , 'kegiatan'    => 'كَاكِيَاتَنْ'
    , 'munculnya'    => 'مُنْجُولْيَا'
    , 'sampaikan'    => 'سَامْفَيْكَانْ'
    , 'regulasi'    => 'رِيْكُولَاسِيْ'
    , 'perniagaan'    => 'فَارنِيَاكَائَنْ'
    , 'pentingnya'    => 'فَانْتِغْيَا'
    , 'dinginnya'    => 'دِغِنْيَا'
    , 'foto'    => 'فُوْتُوْ'
    , 'agenda'    => 'اَكِنْدَا'
    , 'terutama'    => 'تَارْاُوْتَمَا'
    , 'bidang'    => 'بِدَاغْ'
    , 'kasus'    => 'كَاسُسْ'
    , 'merugikan'    => 'مَارُوْكِيْكَانْ'
    , 'nasabah'    => 'نَسَبَحْ'
    , 'pengetahuan'    => 'فَغَاتَهُوَانْ'
    , 'edukasi'    => 'اِيْدُوْكَاسِيْ'
    , 'melalui'    => 'مَلَالُوْهِيْ'
    , 'shubuh'    => 'صُبُحْ'
    , 'subuh'    => 'صُبُحْ'
    , 'dhuhur'    => 'ظُهُرْ'
    , 'duhur'    => 'ظُهُرْ'
    , 'isya' => 'عشاء'
    , 'panas' => ''
    , 'panasnya' => ''
    , 'ganas' => ''


);
