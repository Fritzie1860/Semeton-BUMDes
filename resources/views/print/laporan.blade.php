<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <style>
        P {
            margin-bottom: 3px;
        }

        table {
            width: 100%;
            margin-top: -15;
            border-collapse: collapse;

        }

        td {
            border: 1px solid black;
        }

        tr {
            text-align: center;
            max-height: 30px;
            height: 5px;
        }

        h3 {
            float: left;
            font-size: 12;
            font-weight: lighter;
            /* margin-bottom: auto; */
        }

        @page {
            size: auto;
            margin: 5mm;
        }

        /* Kop Surat */
        .kop {
            border-bottom: 5px solid black;
        }

        .rangkasurat {
            width: 980px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
        }

        .tengah {
            text-align: center;
        }

        /* isi */
        .isi {
            text-align: center;
        }
    </style>

    <title>print</title>

    <!-- Normalize or reset CSS with your favorite library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>
        @page {
            size: A4;
            margin: 15mm 15mm 15mm 15mm;
        }
    </style>
</head>

<body class="A4">

    <section class="sheet padding-20mm" style="height: auto;">
        <table width="100%" class="kop">
            <tr>
                <td style="border:none;" width="30%">
                    <img src={{ asset('images/logo_dark.png') }} style="height:120px; width:120px; " alt="Your Picture">
                </td>
                <td width="70%" class="tengah" style="border:none;">
                    <center>
                        <p style="margin-bottom: -5px; font-size: 14px; font-weight:700 ">
                            BADAN USAHA MILIK DESA PUTRI NYALE KUTA
                        </p>
                        <p style="margin-bottom: -5px; font-size: 14px; font-weight:700 ">
                            DESA KUTA KECAMATAN PUJUT KABUPATEN LOMBOK TENGAH
                        </p>
                        <p style="margin-bottom: -5px; font-size: 12px;">
                            Alamat : Jln.Pariwisata Kuta – Sengkol,Desa Kuta Kec,Pujut Kab.Lombok Tengah
                        </p>
                    </center>
                </td>
            </tr>
        </table>
        <center>
            <br>
            <p style="margin-bottom: -5px; font-size: 18px; font-weight:900; margin-bottom: 25px;">
                LAPORAN KEUANGAN BUMDES
            </p>
        </center>

        <p style="margin-bottom: -5px; font-size: 12px; font-weight:700 ">
            1. BADAN USAHA MILIK DESA PUTRI NYALE KUTA
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            a. Modal awal tahun 2018 &emsp;&emsp;&emsp;&emsp;= Rp. 102.000.000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            b. Hasil percetakan &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&nbsp; = Rp. 0
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            c. Pengeluaran &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&nbsp; = Rp. 0
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            d. Total pendapatan tahun 2020 &emsp;&ensp;&nbsp; = Rp. 0
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            e. Jadi untung bersih percetakan = Rp. 0
        </p>

        <p style="margin-bottom: -5px; font-size: 12px; font-weight:700 ">
            2. UNIT USAHA SIMPEN PINJAM
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            a. Modal awal = Rp.38.000.000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            b. Pendapatan bunga dari Tahun 2019 s/d 2020 = Rp.7,382,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            c. Perputaran modal sampai saat ini sebesar = Rp. 95,300,000
        </p>

        <p style="margin-bottom: -5px; font-size: 12px; font-weight:700 ">
            3. UNIT USAHA PERDAGANGAN GAS ELPIJI 3 KG
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            a. Modal awal = Rp. 84,300,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            b. Pembelian Pick Up = Rp. 57,500,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            c. Pembelian Tong Gas Elpiji 3 Kg = Rp. 28,800,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            d. Hasil penjualan 2020 = Rp. 5,512,500
        </p>

        <p style="margin-bottom: -5px; font-size: 12px; font-weight:700 ">
            4. Unit Usaha Budidaya Ayam KUB
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            a. Modal awal = Rp. 11,655,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            b. Harga pembelian = Rp. 12,900,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            c. Harga penjualan 2020 = Rp. 27,780,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            d. Biaya Pakan = Rp. 12.005,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            e. Biaya kandang = Rp. 1,855,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            f. Jadi di unit usaha Ayam KUB mengalami ke untungan sebesar
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 25px; margin-bottom: 3px">
            = harga jual – (harga pembelian + biaya)
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 25px; margin-bottom: 3px">
            = Rp. 27,780,000 – (12,900,000 + 12.005,000 + 1,855,000 )
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 25px; margin-bottom: 3px">
            = Rp. 1,020,000
        </p>

        <p style="margin-bottom: -5px; font-size: 12px; font-weight:700 ">
            5. Unit usaha pengelolaan homestay
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            a. Modal awal = Rp. 117,500,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            b. Hasil jasa sewa homestay = Rp. 9,000,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            c. Biaya honor clening service = Rp. 2,000,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            d. Pendapatan unit usaha Homestay = Rp. 7,000,000
        </p>

        <p style="margin-bottom: -5px; font-size: 12px; font-weight:700 ">
            6. Unit usaha pengelolaan sampah
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            a. Modal awal = Rp.3,000,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            b. Pendapatan jasa angkut sampah = Rp. 3,280,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            c. Biaya oprasional angkut sampah = Rp. 970,000
        </p>
        <p style="margin-bottom: -5px; font-size: 12px; padding-left: 10px; margin-bottom: 3px">
            d. Honor karyawan 9 orang = Rp. 2,310,000
        </p>

        <center>
            <br>
            <p style="margin-bottom: -5px; font-size: 18px; font-weight:900; margin-bottom: 25px;">
                TOTAL KEUNTUNGAN TAHUN 2020
            </p>
        </center>
        <table>
            <tbody>
                <tr>
                    <td colspan="3" width="511">
                        <p><strong>TOTAL KEUNTUNGAN /PENDAPATAN BUMDES</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="57">
                        <p><strong>A.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>&nbsp;</strong></p>
                    </td>
                    <td width="305">
                        <p><strong>PENDAPATAN HASIL USAHA BUMDES</strong></p>
                    </td>
                    <td width="149">
                       
                    </td>
                </tr>
                <tr>
                    <td width="57">
                        <p><strong>1</strong></p>
                    </td>
                    <td width="305">
                        <p><strong>Unit Usaha Percetakan</strong></p>
                       
                    </td>
                    <td width="149">
                        <p><strong>Rp. 0</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="57">
                        <p><strong>2</strong></p>
                    </td>
                    <td width="305">
                        <p><strong>Unit Usaha Simpen Pinjam</strong></p>
                       
                    </td>
                    <td width="149">
                        <p><strong>Rp. 7,382,000</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="57">
                        <p><strong>3</strong></p>
                    </td>
                    <td width="305">
                        <p><strong>Unit Usaha Perdagangan Gas Elpiji 3 Kg</strong></p>
                       
                    </td>
                    <td width="149">
                        <p><strong>Rp. 5,512,500</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="57">
                        <p><strong>4</strong></p>
                    </td>
                    <td width="305">
                        <p><strong>Unit Usaha Budidaya Ayam Kub</strong></p>
                    </td>
                    <td width="149">
                        <p><strong>Rp. 1,020,000</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="57">
                        <p><strong>5</strong></p>
                    </td>
                    <td width="305">
                        <p><strong>Unit Usaha Pengelolaan Homestay</strong></p>
                    </td>
                    <td width="149">
                        <p><strong>Rp.&nbsp;&nbsp;&nbsp; 7,000,000</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="57">
                        <p><strong>6</strong></p>
                    </td>
                    <td width="305">
                        <p><strong>Unit Usaha Pengelolaan Sampah</strong></p>
                       
                    </td>
                    <td width="149">
                        <p><strong>Rp.&nbsp;&nbsp; 0</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="57">
                        <p><strong>B.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>&nbsp;</strong></p>
                    </td>
                    <td width="305">
                        <p><strong>PENDAPATAN LAINYA</strong></p>
                    </td>
                    <td width="149">
                       
                    </td>
                </tr>
                <tr>
                    <td width="57">
                       
                    </td>
                    <td width="305">
                        <p><strong>Bunga Bank</strong></p>
                    </td>
                    <td width="149">
                        <p><strong>Rp. 190.804</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="57">
                        <p><strong>&nbsp;&nbsp; C.</strong></p>
                    </td>
                    <td width="305">
                        <p><strong>PENDAPATAN KOTOR</strong></p>
                    </td>
                    <td width="149">
                        <p><strong>Rp. 21.105.304</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="57">
                       
                    </td>
                    <td width="305">
                        <p><strong>Biaya ATK</strong></p>
                    </td>
                    <td width="149">
                        <p><strong>Rp, 640,000</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="57">
                       
                    </td>
                    <td width="305">
                        <p><strong>Pajak Bunga Bang Dan Administrasi</strong></p>
                    </td>
                    <td width="149">
                        <p><strong>Rp.100.718</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="57">
                        <p><strong>&nbsp;D.</strong></p>
                    </td>
                    <td width="305">
                        <p><strong>TOTAL BIAYA</strong></p>
                    </td>
                    <td width="149">
                        <p><strong>Rp. 740.718</strong></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="362">
                        <p><strong>TOTAL PENDAPATAN BERSIH (C-D)</strong></p>
                    </td>
                    <td width="149">
                        <p><strong>Rp. 20.364.586</strong></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <center>
            <br>
            <p style="margin-bottom: -5px; font-size: 18px; font-weight:900; margin-bottom: 25px;">
                PEMBAGIAN HASIL USAHA
            </p>
        </center>
        <p style="margin-bottom: -5px; font-size: 12px; font-weight:700 ">
            Alokasi pembagian keuntungan BUMDES sebagai berikut:
        </p>
        <br>
        <table class="m-2">
            <tbody>
                <tr>
                    <td colspan="2" width="518">
                        <p><strong>PEMBAGIAN KEUNTUNGAN</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="319">
                        <p><strong>PADes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( 20%&nbsp; )</strong></p>
                    </td>
                    <td width="198">
                        <p><strong>Rp. &nbsp;4.072.917,2</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="319">
                        <p><strong>Insentif / Honor Pengurus&nbsp;&nbsp;&nbsp;&nbsp; (30%)</strong></p>
                    </td>
                    <td width="198">
                        <p><strong>Rp. 6.109.375,8</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="319">
                        <p><strong>Dana
                                Sosial&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                (5%)</strong></p>
                    </td>
                    <td width="198">
                        <p><strong>Rp. 1.018.229,30</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="319">
                        <p><strong>Penyertaan Modal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ( 40 % )</strong></p>
                    </td>
                    <td width="198">
                        <p><strong>Rp. 8.145.834,4</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="319">
                        <p><strong>Biaya Operasional&nbsp;&nbsp;&nbsp; (5 %)</strong></p>
                    </td>
                    <td width="198">
                        <p><strong>Rp. 1.018.229,30</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="319">
                        <p><strong>Jumlah</strong></p>
                    </td>
                    <td width="198">
                        <p><strong>Rp. 20.364.586</strong></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p>&nbsp;</p>

<br><br><br><br> 

        <center>
            <br>
            <p style="margin-bottom: -5px; font-size: 18px; font-weight:900; margin-bottom: 25px;">
                PERMODALAN BUMDES PUTRI NYALE
            </p>
        </center>
        <p style="margin-bottom: -5px; font-size: 12px; font-weight:700 ">
            Permodalan
        </p>
        <br>
        <table>
            <tbody>
                <tr>
                    <td rowspan="3" width="39">
                        <p><strong>No</strong></p>
                    </td>
                    <td rowspan="3" width="91">
                        <p><strong>Tahun Penyertaan Modal</strong></p>
                    </td>
                    <td colspan="5" width="466">
                        <p><strong>Jumlah penyertaan</strong></p>
                    </td>
                    <td width="42">
                        <p><strong>Ket</strong></p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" width="96">
                        <p><strong>Pemerintah Desa(Rp)</strong></p>
                    </td>
                    <td colspan="4" width="370">
                        <p><strong>bantuan</strong></p>
                    </td>
                    <td width="42">
                       
                    </td>
                </tr>
                <tr>
                    <td width="92">
                        <p><strong>Pemerintah Pusat (Rp)</strong></p>
                    </td>
                    <td width="92">
                        <p><strong>Pemerintah Prov.(Rp)</strong></p>
                    </td>
                    <td width="92">
                        <p><strong>Pemerintah Kabu(Rp)</strong></p>
                    </td>
                    <td width="93">
                        <p><strong>Lainnya(Rp) Laba Bersih</strong></p>
                    </td>
                    <td width="42">
                       
                    </td>
                </tr>
                <tr>
                    <td width="39">
                        <p><strong>1</strong></p>
                    </td>
                    <td width="91">
                        <p><strong>2018</strong></p>
                    </td>
                    <td width="96">
                        <p><strong>140.000.000</strong></p>
                    </td>
                    <td width="92">
                       
                    </td>
                    <td width="92">
                       
                    </td>
                    <td width="92">
                       
                    </td>
                    <td width="93">
                       
                    </td>
                    <td width="42">
                       
                    </td>
                </tr>
                <tr>
                    <td width="39">
                        <p><strong>2</strong></p>
                    </td>
                    <td width="91">
                        <p><strong>2019</strong></p>
                    </td>
                    <td width="96">
                        <p><strong>179.000.000</strong></p>
                    </td>
                    <td width="92">
                        <p><strong>50.000.000</strong></p>
                    </td>
                    <td width="92">
                       
                    </td>
                    <td width="92">
                       
                    </td>
                    <td width="93">
                       
                    </td>
                    <td width="42">
                       
                    </td>
                </tr>
                <tr>
                    <td width="39">
                        <p><strong>3</strong></p>
                    </td>
                    <td width="91">
                        <p><strong>2020</strong></p>
                    </td>
                    <td width="96">
                        <p><strong>&nbsp; 20.000.000</strong></p>
                    </td>
                    <td width="92">
                       
                    </td>
                    <td width="92">
                       
                    </td>
                    <td width="92">
                       
                    </td>
                    <td width="93">
                       
                    </td>
                    <td width="42">
                       
                    </td>
                </tr>
                <tr>
                    <td width="39">
                        <p><strong>4</strong></p>
                    </td>
                    <td width="91">
                        <p><strong>2020</strong></p>
                    </td>
                    <td width="96">
                       
                    </td>
                    <td width="92">
                       
                    </td>
                    <td width="92">
                       
                    </td>
                    <td width="92">
                       
                    </td>
                    <td width="93">
                        <p><strong>&nbsp;8.145.834,4</strong></p>
                    </td>
                    <td width="42">
                       
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="130">
                        <p><strong>Total</strong></p>
                    </td>
                    <td width="96">
                        <p><strong>339.000.000</strong></p>
                    </td>
                    <td width="92">
                        <p><strong>50.000.000</strong></p>
                    </td>
                    <td width="92">
                       
                    </td>
                    <td width="92">
                       
                    </td>
                    <td width="93">
                        <p><strong>8.145.834,4</strong></p>
                    </td>
                    <td width="42">
                       
                    </td>
                </tr>
                <tr>
                    <td colspan="2" width="130">
                        <p><strong>Total Akumulatif</strong></p>
                    </td>
                    <td colspan="5" width="466">
                        <p><strong>Rp.397.145.834</strong></p>
                    </td>
                    <td width="42">
                       
                    </td>
                </tr>
            </tbody>
        </table>
        <p>&nbsp;</p>



    </section>
</body>

</html>
