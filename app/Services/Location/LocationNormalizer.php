<?php

namespace App\Services\Location;

class LocationNormalizer
{
    /**
     * Dictionary keyword lokasi -> nama provinsi kanonik.
     *
     * Digunakan untuk mengubah lokasi lowongan yang berupa free text
     * menjadi nama provinsi yang konsisten.
     *
     * Indonesia memiliki 38 provinsi.
     *
     * Catatan:
     * - "Remote" dipertahankan sebagai kategori khusus, bukan provinsi.
     * - Keyword dibuat lowercase karena normalize() juga mengubah
     *   input menjadi lowercase.
     * - Keyword yang lebih spesifik diletakkan sebelum keyword yang
     *   berpotensi ambigu.
     */
    protected array $provinceKeywords = [

        /*
        |--------------------------------------------------------------------------
        | DKI Jakarta
        |--------------------------------------------------------------------------
        */
        'DKI Jakarta' => [
            'dki jakarta',
            'jakarta',
            'jakarta pusat',
            'jakarta utara',
            'jakarta barat',
            'jakarta timur',
            'jakarta selatan',
            'kepulauan seribu',
        ],

        /*
        |--------------------------------------------------------------------------
        | Jawa Barat
        |--------------------------------------------------------------------------
        */
        'Jawa Barat' => [
            'jawa barat',
            'bandung',
            'kabupaten bandung',
            'bandung barat',
            'bekasi',
            'bogor',
            'cianjur',
            'cimahi',
            'cirebon',
            'depok',
            'garut',
            'indramayu',
            'karawang',
            'kuningan',
            'majalengka',
            'pangandaran',
            'purwakarta',
            'subang',
            'sukabumi',
            'sumedang',
            'tasikmalaya',
            'banjar',
            'ciamis',
        ],

        /*
        |--------------------------------------------------------------------------
        | Jawa Tengah
        |--------------------------------------------------------------------------
        */
        'Jawa Tengah' => [
            'jawa tengah',
            'semarang',
            'surakarta',
            'solo',
            'magelang',
            'pekalongan',
            'tegal',
            'salatiga',
            'klaten',
            'banyumas',
            'banjarnegara',
            'batang',
            'blora',
            'boyolali',
            'brebes',
            'cilacap',
            'demak',
            'grobogan',
            'jepara',
            'karanganyar',
            'kebumen',
            'kendal',
            'kudus',
            'pati',
            'pemalang',
            'purbalingga',
            'purworejo',
            'rembang',
            'semarang',
            'sragen',
            'sukoharjo',
            'temanggung',
            'wonogiri',
            'wonosobo',
        ],

        /*
        |--------------------------------------------------------------------------
        | Jawa Timur
        |--------------------------------------------------------------------------
        */
        'Jawa Timur' => [
            'jawa timur',
            'surabaya',
            'malang',
            'kediri',
            'madiun',
            'batu',
            'mojokerto',
            'probolinggo',
            'pasuruan',
            'sidoarjo',
            'gresik',
            'jember',
            'tulungagung',
            'blitar',
            'banyuwangi',
            'bangkalan',
            'b bojonegoro',
            'bojonegoro',
            'bondowoso',
            'jombang',
            'lamongan',
            'lumajang',
            'magetan',
            'nganjuk',
            'ngawi',
            'pacitan',
            'pamekasan',
            'ponorogo',
            'sampang',
            'situbondo',
            'sumenep',
            'trenggalek',
            'tuban',
        ],

        /*
        |--------------------------------------------------------------------------
        | DI Yogyakarta
        |--------------------------------------------------------------------------
        */
        'DI Yogyakarta' => [
            'di yogyakarta',
            'd.i. yogyakarta',
            'daerah istimewa yogyakarta',
            'yogyakarta',
            'jogja',
            'bantul',
            'gunungkidul',
            'gunung kidul',
            'kulon progo',
            'sleman',
        ],

        /*
        |--------------------------------------------------------------------------
        | Banten
        |--------------------------------------------------------------------------
        */
        'Banten' => [
            'banten',
            'tangerang',
            'tangerang selatan',
            'tangsel',
            'serang',
            'cilegon',
            'lebak',
            'pandeglang',
        ],

        /*
        |--------------------------------------------------------------------------
        | Bali
        |--------------------------------------------------------------------------
        */
        'Bali' => [
            'bali',
            'denpasar',
            'badung',
            'bangli',
            'buleleng',
            'gianyar',
            'jembrana',
            'karangasem',
            'klungkung',
            'tabanan',
        ],

        /*
        |--------------------------------------------------------------------------
        | Nusa Tenggara Barat
        |--------------------------------------------------------------------------
        */
        'Nusa Tenggara Barat' => [
            'nusa tenggara barat',
            'ntb',
            'mataram',
            'bima',
            'dompu',
            'lombok barat',
            'lombok tengah',
            'lombok timur',
            'lombok utara',
            'sumbawa',
            'sumbawa barat',
        ],

        /*
        |--------------------------------------------------------------------------
        | Nusa Tenggara Timur
        |--------------------------------------------------------------------------
        */
        'Nusa Tenggara Timur' => [
            'nusa tenggara timur',
            'ntt',
            'kupang',
            'alor',
            'belu',
            'ende',
            'flores timur',
            'lembata',
            'malaka',
            'manggarai',
            'manggarai barat',
            'manggarai timur',
            'nagekeo',
            'ngada',
            'rote ndao',
            'sabu raijua',
            'sikka',
            'sumba barat',
            'sumba barat daya',
            'sumba tengah',
            'sumba timur',
            'timor tengah selatan',
            'timor tengah utara',
        ],

        /*
        |--------------------------------------------------------------------------
        | Aceh
        |--------------------------------------------------------------------------
        */
        'Aceh' => [
            'aceh',
            'nanggroe aceh darussalam',
            'banda aceh',
            'sabang',
            'langsa',
            'lhokseumawe',
            'subulussalam',
            'aceh barat',
            'aceh barat daya',
            'aceh besar',
            'aceh jaya',
            'aceh selatan',
            'aceh singkil',
            'aceh tamiang',
            'aceh tengah',
            'aceh tenggara',
            'aceh timur',
            'aceh utara',
            'bener meriah',
            'bireuen',
            'gayo lues',
            'nagan raya',
            'pidie',
            'pidie jaya',
            'simeulue',
        ],

        /*
        |--------------------------------------------------------------------------
        | Sumatera Utara
        |--------------------------------------------------------------------------
        */
        'Sumatera Utara' => [
            'sumatera utara',
            'sumatra utara',
            'medan',
            'binjai',
            'pematangsiantar',
            'pematang siantar',
            'sibolga',
            'tanjungbalai',
            'tanjung balai',
            'tebing tinggi',
            'padangsidimpuan',
            'padang sidempuan',
            'gunungsitoli',
            'nias',
            'deli serdang',
            'langkat',
            'karo',
            'simalungun',
            'tapanuli utara',
            'tapanuli tengah',
            'tapanuli selatan',
            'toba',
            'asahan',
            'batu bara',
            'dairi',
            'humbang hasundutan',
            'labuhanbatu',
            'labuhanbatu selatan',
            'labuhanbatu utara',
            'mandailing natal',
            'nias barat',
            'nias selatan',
            'nias utara',
            'pakpak bharat',
            'samosir',
            'serdang bedagai',
        ],

        /*
        |--------------------------------------------------------------------------
        | Sumatera Barat
        |--------------------------------------------------------------------------
        */
        'Sumatera Barat' => [
            'sumatera barat',
            'sumatra barat',
            'padang',
            'bukittinggi',
            'padang panjang',
            'payakumbuh',
            'sawahlunto',
            'solok',
            'pariaman',
            'agam',
            'dharmasraya',
            'kepulauan mentawai',
            'limapuluh kota',
            'lima puluh kota',
            'pasaman',
            'pasaman barat',
            'pesisir selatan',
            'sijunjung',
            'solok selatan',
            'tanah datar',
        ],

        /*
        |--------------------------------------------------------------------------
        | Riau
        |--------------------------------------------------------------------------
        */
        'Riau' => [
            'riau',
            'pekanbaru',
            'dumai',
            'bengkalis',
            'indragiri hilir',
            'indragiri hulu',
            'kampar',
            'kepulauan meranti',
            'kuantan singingi',
            'pelalawan',
            'rokan hilir',
            'rokan hulu',
            'siak',
        ],

        /*
        |--------------------------------------------------------------------------
        | Kepulauan Riau
        |--------------------------------------------------------------------------
        */
        'Kepulauan Riau' => [
            'kepulauan riau',
            'kepri',
            'batam',
            'tanjungpinang',
            'tanjung pinang',
            'bintan',
            'karimun',
            'kepulauan anambas',
            'lingga',
            'natuna',
        ],

        /*
        |--------------------------------------------------------------------------
        | Jambi
        |--------------------------------------------------------------------------
        */
        'Jambi' => [
            'jambi',
            'kota jambi',
            'sungai penuh',
            'kerinci',
            'batanghari',
            'bungo',
            'muaro jambi',
            'merangin',
            'sarolangun',
            'tanjung jabung barat',
            'tanjung jabung timur',
            'tebo',
        ],

        /*
        |--------------------------------------------------------------------------
        | Sumatera Selatan
        |--------------------------------------------------------------------------
        */
        'Sumatera Selatan' => [
            'sumatera selatan',
            'sumatra selatan',
            'palembang',
            'lubuklinggau',
            'lubuk linggau',
            'pagar alam',
            'prabumulih',
            'banyuasin',
            'empat lawang',
            'lahat',
            'muara enim',
            'musi banyuasin',
            'musi rawas',
            'musi rawas utara',
            'ogan ilir',
            'ogan komering ilir',
            'ogan komering ulu',
            'ogan komering ulu selatan',
            'ogan komering ulu timur',
            'penukal abab lematang ilir',
        ],

        /*
        |--------------------------------------------------------------------------
        | Kepulauan Bangka Belitung
        |--------------------------------------------------------------------------
        */
        'Kepulauan Bangka Belitung' => [
            'kepulauan bangka belitung',
            'bangka belitung',
            'babel',
            'pangkalpinang',
            'pangkal pinang',
            'bangka',
            'bangka barat',
            'bangka selatan',
            'bangka tengah',
            'belitung',
            'belitung timur',
        ],

        /*
        |--------------------------------------------------------------------------
        | Bengkulu
        |--------------------------------------------------------------------------
        */
        'Bengkulu' => [
            'bengkulu',
            'kota bengkulu',
            'bengkulu selatan',
            'bengkulu tengah',
            'bengkulu utara',
            'kaur',
            'kepahiang',
            'lebong',
            'muko muko',
            'mukomuko',
            'rejang lebong',
            'seluma',
        ],

        /*
        |--------------------------------------------------------------------------
        | Lampung
        |--------------------------------------------------------------------------
        */
        'Lampung' => [
            'lampung',
            'bandar lampung',
            'bandar-lampung',
            'metro',
            'lampung barat',
            'lampung selatan',
            'lampung tengah',
            'lampung timur',
            'lampung utara',
            'mesuji',
            'pesawaran',
            'pesisir barat',
            'pringsewu',
            'tanggamus',
            'tulang bawang',
            'tulang bawang barat',
            'way kanan',
        ],

        /*
        |--------------------------------------------------------------------------
        | Kalimantan Barat
        |--------------------------------------------------------------------------
        */
        'Kalimantan Barat' => [
            'kalimantan barat',
            'kalbar',
            'pontianak',
            'singkawang',
            'bengkayang',
            'kapuas hulu',
            'kayong utara',
            'ketapang',
            'kubu raya',
            'landak',
            'melawi',
            'mempawah',
            'sambas',
            'sanggau',
            'sekadau',
            'sintang',
        ],

        /*
        |--------------------------------------------------------------------------
        | Kalimantan Tengah
        |--------------------------------------------------------------------------
        */
        'Kalimantan Tengah' => [
            'kalimantan tengah',
            'kalteng',
            'palangka raya',
            'palangkaraya',
            'barito selatan',
            'barito timur',
            'barito utara',
            'gunung mas',
            'kapuas',
            'katingan',
            'kotawaringin barat',
            'kotawaringin timur',
            'lamandau',
            'murung raya',
            'pulang pisau',
            'seruyan',
            'sukamara',
        ],

        /*
        |--------------------------------------------------------------------------
        | Kalimantan Selatan
        |--------------------------------------------------------------------------
        */
        'Kalimantan Selatan' => [
            'kalimantan selatan',
            'kalsel',
            'banjarmasin',
            'banjarbaru',
            'banjar',
            'balangan',
            'barito kuala',
            'hulu sungai selatan',
            'hulu sungai tengah',
            'hulu sungai utara',
            'kotabaru',
            'tabalong',
            'tanah bumbu',
            'tanah laut',
            'tapin',
        ],

        /*
        |--------------------------------------------------------------------------
        | Kalimantan Timur
        |--------------------------------------------------------------------------
        */
        'Kalimantan Timur' => [
            'kalimantan timur',
            'kaltim',
            'samarinda',
            'balikpapan',
            'bontang',
            'berau',
            'kutai barat',
            'kutai kartanegara',
            'kutai timur',
            'mahakam ulu',
            'paser',
            'penajam paser utara',
        ],

        /*
        |--------------------------------------------------------------------------
        | Kalimantan Utara
        |--------------------------------------------------------------------------
        */
        'Kalimantan Utara' => [
            'kalimantan utara',
            'kaltara',
            'tarakan',
            'bulungan',
            'malinau',
            'nunukan',
            'tana tidung',
        ],

        /*
        |--------------------------------------------------------------------------
        | Sulawesi Utara
        |--------------------------------------------------------------------------
        */
        'Sulawesi Utara' => [
            'sulawesi utara',
            'sulut',
            'manado',
            'bitung',
            'kotamobagu',
            'tomohon',
            'bolaang mongondow',
            'bolaang mongondow selatan',
            'bolaang mongondow timur',
            'bolaang mongondow utara',
            'kepulauan sangihe',
            'kepulauan siau tagulandang biaro',
            'kepulauan talaud',
            'minahasa',
            'minahasa selatan',
            'minahasa tenggara',
            'minahasa utara',
        ],

        /*
        |--------------------------------------------------------------------------
        | Sulawesi Tengah
        |--------------------------------------------------------------------------
        */
        'Sulawesi Tengah' => [
            'sulawesi tengah',
            'sulteng',
            'palu',
            'banggai',
            'banggai kepulauan',
            'banggai laut',
            'buol',
            'donggala',
            'morowali',
            'morowali utara',
            'parigi moutong',
            'poso',
            'sigi',
            'tojo una-una',
            'toli-toli',
        ],

        /*
        |--------------------------------------------------------------------------
        | Sulawesi Selatan
        |--------------------------------------------------------------------------
        */
        'Sulawesi Selatan' => [
            'sulawesi selatan',
            'sulsel',
            'makassar',
            'parepare',
            'palopo',
            'bantaeng',
            'barru',
            'bone',
            'bulukumba',
            'enrekang',
            'gowa',
            'jeneponto',
            'kepulauan selayar',
            'luwu',
            'luwu timur',
            'luwu utara',
            'maros',
            'pangkajene dan kepulauan',
            'pinrang',
            'sidenreng rappang',
            'sinjai',
            'soppeng',
            'takalar',
            'tana toraja',
            'toraja utara',
            'wajo',
        ],

        /*
        |--------------------------------------------------------------------------
        | Sulawesi Tenggara
        |--------------------------------------------------------------------------
        */
        'Sulawesi Tenggara' => [
            'sulawesi tenggara',
            'sultra',
            'kendari',
            'baubau',
            'bau bau',
            'bombana',
            'buton',
            'buton selatan',
            'buton tengah',
            'buton utara',
            'kolaka',
            'kolaka timur',
            'kolaka utara',
            'konawe',
            'konawe kepulauan',
            'konawe selatan',
            'konawe utara',
            'muna',
            'muna barat',
            'wakatobi',
        ],

        /*
        |--------------------------------------------------------------------------
        | Gorontalo
        |--------------------------------------------------------------------------
        */
        'Gorontalo' => [
            'gorontalo',
            'kota gorontalo',
            'boalemo',
            'bone bolango',
            'gorontalo utara',
            'pohuwato',
        ],

        /*
        |--------------------------------------------------------------------------
        | Sulawesi Barat
        |--------------------------------------------------------------------------
        */
        'Sulawesi Barat' => [
            'sulawesi barat',
            'sulbar',
            'mamuju',
            'majene',
            'mamasa',
            'mamuju tengah',
            'mamuju utara',
            'pasangkayu',
            'polewali mandar',
        ],

        /*
        |--------------------------------------------------------------------------
        | Maluku
        |--------------------------------------------------------------------------
        */
        'Maluku' => [
            'maluku',
            'ambon',
            'tual',
            'buru',
            'buru selatan',
            'kepulauan aru',
            'maluku barat daya',
            'maluku tengah',
            'maluku tenggara',
            'seram bagian barat',
            'seram bagian timur',
            'kepulauan tanimbar',
        ],

        /*
        |--------------------------------------------------------------------------
        | Maluku Utara
        |--------------------------------------------------------------------------
        */
        'Maluku Utara' => [
            'maluku utara',
            'malut',
            'ternate',
            'tidore',
            'tidore kepulauan',
            'halmahera barat',
            'halmahera tengah',
            'halmahera timur',
            'halmahera selatan',
            'halmahera utara',
            'kepulauan sula',
            'pulau morotai',
            'pulau taliabu',
        ],

        /*
        |--------------------------------------------------------------------------
        | Papua
        |--------------------------------------------------------------------------
        */
        'Papua' => [
            'provinsi papua',
            'papua',
            'jayapura',
            'kepulauan yapen',
            'keerom',
            'mamberamo raya',
            'sarmi',
            'supiori',
            'waropen',
        ],

        /*
        |--------------------------------------------------------------------------
        | Papua Barat
        |--------------------------------------------------------------------------
        */
        'Papua Barat' => [
            'papua barat',
            'manokwari',
            'manokwari selatan',
            'pegunungan arfak',
            'fak fak',
            'fakfak',
            'teluk bintuni',
            'teluk wondama',
        ],

        /*
        |--------------------------------------------------------------------------
        | Papua Barat Daya
        |--------------------------------------------------------------------------
        */
        'Papua Barat Daya' => [
            'papua barat daya',
            'sorong',
            'kota sorong',
            'sorong selatan',
            'raja ampat',
            'maybrat',
            'tambrauw',
        ],

        /*
        |--------------------------------------------------------------------------
        | Papua Tengah
        |--------------------------------------------------------------------------
        */
        'Papua Tengah' => [
            'papua tengah',
            'nabire',
            'mimika',
            'paniai',
            'puncak jaya',
            'puncak',
            'dogiyai',
            'intan jaya',
            'deiyai',
        ],

        /*
        |--------------------------------------------------------------------------
        | Papua Pegunungan
        |--------------------------------------------------------------------------
        */
        'Papua Pegunungan' => [
            'papua pegunungan',
            'jayawijaya',
            'lanny jaya',
            'nduga',
            'pegungungan bintang',
            'pegunungan bintang',
            'tolikara',
            'yahukimo',
            'yalimo',
            'mamberamo tengah',
        ],

        /*
        |--------------------------------------------------------------------------
        | Papua Selatan
        |--------------------------------------------------------------------------
        */
        'Papua Selatan' => [
            'papua selatan',
            'merauke',
            'asmat',
            'boven digoel',
            'mappi',
        ],

        /*
        |--------------------------------------------------------------------------
        | Remote
        |--------------------------------------------------------------------------
        |
        | Bukan provinsi, tetapi dipertahankan sebagai kategori lokasi khusus.
        |--------------------------------------------------------------------------
        */
        'Remote' => [
            'remote',
            'work from home',
            'work-from-home',
            'wfh',
            'fully remote',
            'remote working',
            'remote work',
        ],
    ];

    /**
     * Normalisasi teks lokasi bebas menjadi nama provinsi kanonik.
     *
     * Return:
     * - nama provinsi
     * - "Remote" untuk lowongan remote
     * - null jika lokasi tidak dikenali
     */
    public function normalize(?string $rawLocation): ?string
    {
        if (! $rawLocation) {
            return null;
        }

        $normalized = strtolower(trim($rawLocation));

        foreach ($this->provinceKeywords as $province => $keywords) {
            foreach ($keywords as $keyword) {
                if (str_contains($normalized, strtolower($keyword))) {
                    return $province;
                }
            }
        }

        return null;
    }

    /**
     * Return daftar semua provinsi/kategori lokasi yang dikenal.
     */
    public function knownProvinces(): array
    {
        return array_keys($this->provinceKeywords);
    }
}