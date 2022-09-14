<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Woven Totebag White',
                'image' => "https://images.unsplash.com/photo-1588122698107-836d3c39704c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80",
                'qty' => 132,
                'price' => 450000,
                'description' => "Merk : LOVA <br>
                    Ukuran : P 44cm X T 24cm X L 14cm <br>
                    Kondisi : Baru 100% <br>
                    Bahan : Sintetis Mira <br>
                    Terdiri dari 1 ruang besar memakai furing dan terdapat 1 slot kecil dibagian dalam untuk penutup menggunakan resleting <br>
                    REAL PICT 100% <br><br>
                    Barang ready stock silahkan tambah ke troli <br>
                    Produk ini dapat dibayar di tempat (CASH ON DELIVERY) <br>
                    Pembayaran dibawah jam 3 dikirim di hari yang sama <br>
                    Estimasi pengiriman 2-7 hari kerja (tergantung ekspedisi) <br>
                    Segala bentuk perubahan order melalui chat tidak dapat kami proses, kami akan melakukan pengiriman sesuai variasi pada saat checkout.
                "
            ],
            [
                'name' => 'Sepatu Wanita Call It Spring Cassidee Bootse',
                'image' => "https://images.unsplash.com/photo-1561909848-977d0617f275?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80",
                'qty' => 54,
                'price' => 1459000,
                'description' => "
                - Solid tone slip on ankle boots <br>
                - Synthetic upper <br>
                - Synthetic insole <br>
                - Synthetic outsole <br>
                - Round toe <br>
                - Slip on <br>
                - Shaft height: 11cm <br>
                "
            ],
            [
                'name' => 'Puricia PURICIA GAMIS TALITA DARK BROWN',
                'image' => "https://images.unsplash.com/photo-1573412753872-11954690e93c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=587&q=80",
                'qty' => 101,
                'price' => 159900,
                'description' => "
                - Dress muslim desain A-line cut <br>
                - Kombinasi warna putih dan cokelat <br>
                - Unlined <br>
                - Kancing atas <br>
                - Detail tali ikat <br>
                - Material poliester tidak transparan, ringan dan tidak stretch <br>
                "
            ],
            [
                'name' => 'MAYBELLINE Sensational Cushion Matte CM14 SUNSET AFFAIR',
                'image' => "https://api.watsons.co.id/medias/zoom-front-24767.jpg?context=bWFzdGVyfGltYWdlc3w3MDUxM3xpbWFnZS9qcGVnfGg0Mi9oMmEvMTA0MzQ0NjQyMTkxNjYvV1RDSUQtMjQ3NjctZnJvbnQuanBnfGFjOTg2OTY1ZGUyYjUwMGNlZjdjNGU0MTM3ZmY0MjlkODFlODU2MzI4YWVkNTg4Y2UzMzNhZDllYjdkNTRmMTQ",
                'qty' => 46,
                'price' => 95900,
                'description' => "
                MAYBELLINE Sensational Cushion Matte CM14 SUNSET AFFAIR 6.4ml <br>
                BARU! Maybelline Cushion Matte adalah Lip Cream dengan hasil demi-matte yang ringan & nyaman. Mengandung Vitamin E yang membuat bibirmu sehat, sehingga kamu mempunyai #CushionComfortLip <br><br>

                Hasil Akhir: Demi Matte<br>
                Formula:<br>
                - Infused with Vit.E: Mengandung vitamin E yang melembabkan untuk bibir yang sehat dan halus<br>
                - Demi-Matte Finish: Hasil akhir yang matte yang berdimensi, tidak bikin kering dan nyaman dipakai seharian<br>
                - Whipped Pigment: Teksur yang ringan, tidak lengket seperti tidak memakai apapun di bibir<br><br>

                Packaging: Tabung 6.4 ml yang terlihat trendy yang transparent sehingga memperlihatkan warna secara real, dilengkapi dengan aplikator<br>
                Tersedia dalam 6 pilihan warna nude yang sesuai skintone wanita Indonesia: <br>
                - CM06 URBAN SPICE (Bright Brownish Nude) - NA11211300316 <br>
                - CM07 LIPS ON PULSE (Brownish Pink) - NA11211300317 <br>
                - CM17 CHESNUT ON POINT (Light Brownish Nude) - NA11211300314 <br>
                - CM15 PINK ADDICTION (Mauve Pink) - NA11211300318 <br>
                - CM16 MAUVE COUTURE (Berry Pink) - NA11211300315 <br>
                - CM14 SUNSET AFFAIR (Deep Brownish Nude) - NA11211300319 <br>
                "
            ],
            [
                'name' => 'BIODERMA Atoderm PP Baume - Lotion 200ml',
                'image' => "https://api.watsons.co.id/medias/zoom-front-58802.jpg?context=bWFzdGVyfGZyb250L3pvb218NTczNzR8aW1hZ2UvanBlZ3xmcm9udC96b29tL2gwYi9oMDgvOTIyOTAzOTEwODEyNi5qcGd8YTc0YzUzNmFiODUwNzAyNDg3MjIxOGZjMjljZDE1OTU0YWQwODQzYmViYTI0MDk3OGM4MzY2YWM2MWNlYjNmNA",
                'qty' => 68,
                'price' => 385000,
                'description' => "
                BIODERMA Atoderm PP Baume - Lotion 200ml <br>
                Atoderm pp baume adalah pelembap tubuh dan wajah untuk kulit sangat kering hingga atopik dengan tekstur krim yang memberi nutrisi dan rasa nyaman bagi kulit selama 24 jam. Diresepkan oleh ahli dermatologi atau dokter spesialis kulit. Cocok untuk digunakan seluruh anggota keluarga (anak-anak diatas usia 3 tahun). Mengembalikan kelembaban alami kulit dan mengurangi ketidaknyamanan pada kulit. <br><br>

                Directions <br>
                Oleskan tipis-tipis pada kulit yang kering, sesekali atau dua kali dalam sehari. <br><br>

                Suitable For <br>
                Allergen Free Natural Oil Free Paraben Free <br>
                "
            ],
            [
                'name' => 'Avenoo Sooth & Calm Moist Lotion 354ml',
                'image' => "https://api.watsons.co.id/medias/zoom-front-19825.jpg?context=bWFzdGVyfGZyb250L3pvb218NDQ1MTh8aW1hZ2UvanBlZ3xmcm9udC96b29tL2g1Mi9oMDUvOTIxODIyOTIwNzA3MC5qcGd8NDcwODk2MzVmODk2MGFlZGQxZTBmYTQ0YmFiZmJjMTIzMjE2NThlMDA2Y2NiZjJiZWIzZTg2ODZiNmQ2ODI5Yw",
                'qty' => 98,
                'price' => 275000,
                'description' => "
                    Aveeno soothing and calming moisturizing lotion merupakan losion pelembap yang melindungi dan melembapkan, kulit tampak lebih sehat dengan kelembapan 24 jam. Wangi lavender, chamomile, dan minyak ylang ylang membantu menenangkan dan membuat relax. <br>
                    Kandungan prebiotic oat membantu memelihara keseimbangan microbiome pada kulit. Microbiome sendiri memiliki peranan penting untuk menjaga dan melindungi lapisan kulit. <br><br>

                    Manfaat : <br>
                    • Teruji klinis untuk kulit sensitif <br>
                    • Kelembapan hingga 24 jam <br>
                    • Untuk kulit ekstra kering dan sensitif <br>
                    • Menjaga keseimbangan microbiome kulit <br>
                    • Tanpa alkohol <br>
                    • Wangi lavender, chamomile, dan minyak ylang ylang membantu menenangkan dan membuat relax <br><br>

                    Directions <br>
                    Gunakan lotion secara lutin pada seluruh tubuh terutama diarea yang mudah kering seperti lutut, siku dan lain-lainnya. <br><br>

                    Ingredients <br>
                    Water, glycerin, distearyldimonium chloride, petrolatum, isopropyl palmitate, cetyl alcohol, dimethicone, avena sativa (oat) kernel flour, benzyl alcohol, fragrance, sodium chloride. <br>
                "
            ],
            [
                'name' => 'Tas Wanita ELLA BAG',
                'image' => "https://jimshoneyofficial.com/uploads/all/yMqmvBLEZEQUATPxSg839CkA69o5zCPP7I8ntc46.jpg",
                'qty' => 15,
                'price' => 159500,
                'description' => "
                Elegance is Beauty that never Fades ? <br>
                Ella bag  adalah cerminan keeleganan para wanita <br>
                Dengan design yg klasik dan bermaterial  kulit sintetis grade A, serta kombinasi Gold tone metal dan kulit menjadikan Ella bag terlihat sangat menawan dan menjadi incaran #JHLAdies <br>
                Free Exclusive box setiap pembelian Ella Bag <br>
                Sangat cocok untuk menghadiahi orang terkasih atau menjadi koleksi pribadi mu? <br>
                Shop Now? <br>
                Dont regret it later! <br>
                Detail <br>
                Size : 15x21x6cm <br>
                Weight : 650gr (with box) <br>
                "
            ],
            [
                'name' => 'Jam Tangan Unisex JT 8138',
                'image' => "https://jimshoneyofficial.com/uploads/all/B0qZOszsgBJSwU2ww2VdMRF8SmanyySfexCSHxRi.jpg",
                'qty' => 28,
                'price' => 250000,
                'description' => "
                PERFECT FOR YOU AND FOR HIM! introducing Jims Honey Timepiece 8138 – couple series. <br>
                Jam tangan terbaik untuk kamu dan si dia. Dengan strap stainless yang kokoh dan mewah, memberikan tingkat durabilitas yang tinggi pada Jims Honey timepiece 8138. <br>
                It’s perfect for you and for him, so go get yours now and get one for him too. Jam tangan couple-an <br>
                Details : <br>
                Diameter M (male) : 4 cm <br>
                Diameter L (ladies) : 2,8 cm <br>
                Berat : 300 gr <br>
                Packanging : wooden box <br>
                "
            ],

        ];

        DB::table('products')->insert($products);
    }
}
