<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnggotaPendidikansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('anggota_pendidikans')->delete();
        
        \DB::table('anggota_pendidikans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'jenis_id' => 2,
                'anggota_id' => 1,
                'dari' => '2007',
                'sampai' => '2013',
                'instansi' => 'SD Negeri 1 Tipar',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            1 => 
            array (
                'id' => 2,
                'jenis_id' => 3,
                'anggota_id' => 1,
                'dari' => '2013',
                'sampai' => '2016',
                'instansi' => 'SMP PGRI 46 CIBINONG',
                'jurusan' => NULL,
                'keterangan' => 'VII B, VIII B, IX B',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            2 => 
            array (
                'id' => 3,
                'jenis_id' => 4,
                'anggota_id' => 1,
                'dari' => '2016',
                'sampai' => '2019',
                'instansi' => 'SMK Negeri 1 Tanggeung',
                'jurusan' => 'Otomatisasi Tata Kelola Perkantoran',
                'keterangan' => 'Kelas OTKP 2',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            3 => 
            array (
                'id' => 4,
                'jenis_id' => 5,
                'anggota_id' => 1,
                'dari' => '2019',
                'sampai' => NULL,
                'instansi' => 'Universitas Sangga Buana YPKP Bandung',
                'jurusan' => 'S1 Teknik Infomatika',
                'keterangan' => 'Kelas A2 2019',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            4 => 
            array (
                'id' => 5,
                'jenis_id' => 2,
                'anggota_id' => 3,
                'dari' => '2008',
                'sampai' => '2014',
                'instansi' => 'SD NEGERI POGOR',
                'jurusan' => '-',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            5 => 
            array (
                'id' => 6,
                'jenis_id' => 2,
                'anggota_id' => 6,
                'dari' => '2005',
                'sampai' => '2011',
                'instansi' => 'SDN CIAKAR',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            6 => 
            array (
                'id' => 7,
                'jenis_id' => 3,
                'anggota_id' => 6,
                'dari' => '2011',
                'sampai' => '2014',
                'instansi' => 'SMPN 2 SINDANGBARANG',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            7 => 
            array (
                'id' => 8,
                'jenis_id' => 4,
                'anggota_id' => 6,
                'dari' => '2014',
                'sampai' => '2015',
                'instansi' => 'MA AR-ROCHMAH LEMBANG',
                'jurusan' => 'IPS',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            8 => 
            array (
                'id' => 9,
                'jenis_id' => 4,
                'anggota_id' => 6,
                'dari' => '2015',
                'sampai' => '2017',
                'instansi' => 'MAN 3 CIANJUR',
                'jurusan' => 'IPS',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
            9 => 
            array (
                'id' => 10,
                'jenis_id' => 5,
                'anggota_id' => 17,
                'dari' => '2019',
                'sampai' => NULL,
                'instansi' => 'Universitas Islam Negeri Sunan Gunung Djati Bandung',
                'jurusan' => 'Bahasa dan Sastra Arab',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            10 => 
            array (
                'id' => 11,
                'jenis_id' => 2,
                'anggota_id' => 30,
                'dari' => '2009',
                'sampai' => '2014',
                'instansi' => 'SD Negeri Rawasari',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            11 => 
            array (
                'id' => 12,
                'jenis_id' => 3,
                'anggota_id' => 30,
                'dari' => '2014',
                'sampai' => '2017',
                'instansi' => 'SMP Negeri 1 Pagelaran',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            12 => 
            array (
                'id' => 13,
                'jenis_id' => 4,
                'anggota_id' => 30,
                'dari' => '2017',
                'sampai' => '2020',
                'instansi' => 'SMK Negeri 1 Tanggeung',
            'jurusan' => 'Administrasi Perkantoran (AP)',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            13 => 
            array (
                'id' => 14,
                'jenis_id' => 5,
                'anggota_id' => 30,
                'dari' => '2020',
                'sampai' => '2024',
            'instansi' => 'Institut Pendidikan Dan Bahasa (IPB) INVADA Cirebon',
            'jurusan' => 'Pendidikan Guru Sekolah Dasar (PGSD)',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            14 => 
            array (
                'id' => 15,
                'jenis_id' => 5,
                'anggota_id' => 33,
                'dari' => '2019',
                'sampai' => '2023',
                'instansi' => 'Universitas Islam Negeri Sunan Gunung Djati Bandung',
                'jurusan' => 'Pendidikan Agama Islam',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            15 => 
            array (
                'id' => 16,
                'jenis_id' => 2,
                'anggota_id' => 39,
                'dari' => '2006',
                'sampai' => '2012',
                'instansi' => 'SDN Sumberjaya',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            16 => 
            array (
                'id' => 17,
                'jenis_id' => 3,
                'anggota_id' => 39,
                'dari' => '2012',
                'sampai' => '2015',
                'instansi' => 'MTsN 1 Tanggeung',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            17 => 
            array (
                'id' => 18,
                'jenis_id' => 4,
                'anggota_id' => 39,
                'dari' => '2015',
                'sampai' => '2018',
                'instansi' => 'MAN 3 CIANJUR',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            18 => 
            array (
                'id' => 19,
                'jenis_id' => 5,
                'anggota_id' => 39,
                'dari' => '2019',
                'sampai' => NULL,
            'instansi' => 'Institut Keguruan Ilmu Pendidikan (IKIP) Siliwangi Cimahi',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            19 => 
            array (
                'id' => 20,
                'jenis_id' => 2,
                'anggota_id' => 54,
                'dari' => '2009',
                'sampai' => '2014',
                'instansi' => 'SDN KARANG ANYAR',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            20 => 
            array (
                'id' => 21,
                'jenis_id' => 3,
                'anggota_id' => 54,
                'dari' => '2015',
                'sampai' => '2017',
                'instansi' => 'SMPN 1 CIJATI',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            21 => 
            array (
                'id' => 22,
                'jenis_id' => 4,
                'anggota_id' => 54,
                'dari' => '2018',
                'sampai' => '2021',
                'instansi' => 'SMKN 1 CIJATI',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'keterangan' => 'RPL 2',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            22 => 
            array (
                'id' => 23,
                'jenis_id' => 5,
                'anggota_id' => 54,
                'dari' => '2021',
                'sampai' => NULL,
                'instansi' => 'Universitas Suryakancana',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            23 => 
            array (
                'id' => 24,
                'jenis_id' => 5,
                'anggota_id' => 65,
                'dari' => '2022',
                'sampai' => '2026',
                'instansi' => 'Universitas Islam Nusantara',
                'jurusan' => 'Agroteknologi',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            24 => 
            array (
                'id' => 25,
                'jenis_id' => 5,
                'anggota_id' => 66,
                'dari' => '2022',
                'sampai' => '2026',
                'instansi' => 'Universitas pakuan Bogor',
                'jurusan' => 'Farmasi',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            25 => 
            array (
                'id' => 26,
                'jenis_id' => 5,
                'anggota_id' => 67,
                'dari' => '2021',
                'sampai' => NULL,
                'instansi' => 'Universitas Islam Negeri Sunan Gunung Djati Bandung',
                'jurusan' => 'Sejarah dan Peradaban Islam',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            26 => 
            array (
                'id' => 27,
                'jenis_id' => 2,
                'anggota_id' => 68,
                'dari' => '2006',
                'sampai' => '2012',
                'instansi' => 'SDN Sukaresmi',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            27 => 
            array (
                'id' => 28,
                'jenis_id' => 3,
                'anggota_id' => 68,
                'dari' => '2012',
                'sampai' => '2015',
                'instansi' => 'SMPN 3 TAKOKAK',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            28 => 
            array (
                'id' => 29,
                'jenis_id' => 4,
                'anggota_id' => 68,
                'dari' => '2016',
                'sampai' => '2019',
                'instansi' => 'SMA plus YASPIDA Sukabumi',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            29 => 
            array (
                'id' => 30,
                'jenis_id' => 5,
                'anggota_id' => 68,
                'dari' => '2019',
                'sampai' => '2023',
                'instansi' => 'Universitas Islam Negeri Sunan Gunung Djati Bandung',
                'jurusan' => 'Ekonomi Syariah',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            30 => 
            array (
                'id' => 31,
                'jenis_id' => 1,
                'anggota_id' => 69,
                'dari' => '2008',
                'sampai' => '2009',
                'instansi' => 'Paud Pepaya Cikadu',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            31 => 
            array (
                'id' => 32,
                'jenis_id' => 2,
                'anggota_id' => 69,
                'dari' => '2009',
                'sampai' => '2010',
                'instansi' => 'SD NEGERI CIKADU 1',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            32 => 
            array (
                'id' => 33,
                'jenis_id' => 2,
                'anggota_id' => 69,
                'dari' => '2010',
                'sampai' => '2015',
                'instansi' => 'SD CIDOMBA',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            33 => 
            array (
                'id' => 34,
                'jenis_id' => 3,
                'anggota_id' => 69,
                'dari' => '2015',
                'sampai' => '2018',
                'instansi' => 'SMP NEGERI 1 CIKADU',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            34 => 
            array (
                'id' => 35,
                'jenis_id' => 4,
                'anggota_id' => 69,
                'dari' => '2018',
                'sampai' => '2021',
                'instansi' => 'SMK NEGERI 1 CIKADU',
                'jurusan' => 'Otomatisasi dan Tata Kelola Perkantoran',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            35 => 
            array (
                'id' => 36,
                'jenis_id' => 5,
                'anggota_id' => 69,
                'dari' => '2021',
                'sampai' => NULL,
                'instansi' => 'Universitas Winaya Mukti',
                'jurusan' => 'Manajemen',
                'keterangan' => 'Fakultas Ekonomi dan Bisnis',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            36 => 
            array (
                'id' => 37,
                'jenis_id' => 5,
                'anggota_id' => 70,
                'dari' => '2021',
                'sampai' => NULL,
                'instansi' => 'Stisip Guna Nusantara Cianjur',
                'jurusan' => 'Ilmu pemerintahan',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            37 => 
            array (
                'id' => 38,
                'jenis_id' => 2,
                'anggota_id' => 71,
                'dari' => '2008',
                'sampai' => '2013',
                'instansi' => 'SD Negeri Layung Sari',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            38 => 
            array (
                'id' => 39,
                'jenis_id' => 3,
                'anggota_id' => 71,
                'dari' => '2013',
                'sampai' => '2016',
                'instansi' => 'MTsN 2 Cianjur',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            39 => 
            array (
                'id' => 40,
                'jenis_id' => 4,
                'anggota_id' => 71,
                'dari' => '2016',
                'sampai' => '2019',
                'instansi' => 'SMA Negeri 1 Cibinong',
                'jurusan' => 'Ilmu Pendidikan Sosial',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            40 => 
            array (
                'id' => 41,
                'jenis_id' => 2,
                'anggota_id' => 77,
                'dari' => '2007',
                'sampai' => '2013',
                'instansi' => 'MI AL-HUDA RAWAHANJA',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            41 => 
            array (
                'id' => 42,
                'jenis_id' => 3,
                'anggota_id' => 77,
                'dari' => '2013',
                'sampai' => '2016',
                'instansi' => 'MTS AL-HUDA RAWAHANJA',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            42 => 
            array (
                'id' => 43,
                'jenis_id' => 4,
                'anggota_id' => 77,
                'dari' => '2016',
                'sampai' => '2019',
                'instansi' => 'MAS AL-MANSHURIYAH',
                'jurusan' => 'IPA',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            43 => 
            array (
                'id' => 44,
                'jenis_id' => 6,
                'anggota_id' => 77,
                'dari' => '2019',
                'sampai' => '2020',
            'instansi' => 'AZHARY CENTER (DARUL AZHAR)',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            44 => 
            array (
                'id' => 45,
                'jenis_id' => 5,
                'anggota_id' => 77,
                'dari' => '2020',
                'sampai' => '2024',
                'instansi' => 'Universitas Muhammadiyah Bandung',
                'jurusan' => 'Psikologi',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            45 => 
            array (
                'id' => 46,
                'jenis_id' => 5,
                'anggota_id' => 79,
                'dari' => '2020',
                'sampai' => '2024',
                'instansi' => 'Universitas Islam Negeri Sunan Gunung Djati Bandung',
                'jurusan' => 'Bahasa dan Sastra Arab',
                'keterangan' => 'Kelas A',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            46 => 
            array (
                'id' => 47,
                'jenis_id' => 4,
                'anggota_id' => 79,
                'dari' => '2017',
                'sampai' => '2020',
                'instansi' => 'MAN 3 CIANJUR',
                'jurusan' => 'IPA',
                'keterangan' => 'Kelas IPA 2',
                'created_at' => '2023-02-11 00:40:12',
                'updated_at' => '2023-02-11 00:40:12',
            ),
            47 => 
            array (
                'id' => 48,
                'jenis_id' => 5,
                'anggota_id' => 80,
                'dari' => '2021',
                'sampai' => '2025',
                'instansi' => 'Stisip Guna Nusantara Cianjur',
                'jurusan' => 'Ilmu Pemerintahan',
                'keterangan' => '652012122077 Kelas A',
                'created_at' => '2023-02-11 00:40:13',
                'updated_at' => '2023-02-11 00:40:13',
            ),
            48 => 
            array (
                'id' => 49,
                'jenis_id' => 2,
                'anggota_id' => 80,
                'dari' => '2009',
                'sampai' => '2015',
                'instansi' => 'Mi Cijoho',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:13',
                'updated_at' => '2023-02-11 00:40:13',
            ),
            49 => 
            array (
                'id' => 50,
                'jenis_id' => 3,
                'anggota_id' => 80,
                'dari' => '2015',
                'sampai' => '2018',
                'instansi' => 'Mts Tanwirul Amin',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:13',
                'updated_at' => '2023-02-11 00:40:13',
            ),
            50 => 
            array (
                'id' => 51,
                'jenis_id' => 4,
                'anggota_id' => 80,
                'dari' => '2018',
                'sampai' => '2021',
                'instansi' => 'MA Tanwirul',
                'jurusan' => 'Ips',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:13',
                'updated_at' => '2023-02-11 00:40:13',
            ),
            51 => 
            array (
                'id' => 52,
                'jenis_id' => 5,
                'anggota_id' => 81,
                'dari' => '2020',
                'sampai' => '2024',
                'instansi' => 'Universitas Islam Negeri Sunan Gunung Djati Bandung',
                'jurusan' => 'Ilmu komunikasi hubungan masyarakat dan',
                'keterangan' => 'Kelas Humas 4C',
                'created_at' => '2023-02-11 00:40:13',
                'updated_at' => '2023-02-11 00:40:13',
            ),
            52 => 
            array (
                'id' => 53,
                'jenis_id' => 4,
                'anggota_id' => 81,
                'dari' => '2017',
                'sampai' => '2020',
                'instansi' => 'MAN 3 CIANJUR',
                'jurusan' => 'IPA',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:13',
                'updated_at' => '2023-02-11 00:40:13',
            ),
            53 => 
            array (
                'id' => 54,
                'jenis_id' => 3,
                'anggota_id' => 81,
                'dari' => '2013',
                'sampai' => '2016',
                'instansi' => 'SMP 1 CIBEBER',
                'jurusan' => '-',
                'keterangan' => 'Kelas F',
                'created_at' => '2023-02-11 00:40:13',
                'updated_at' => '2023-02-11 00:40:13',
            ),
            54 => 
            array (
                'id' => 55,
                'jenis_id' => 2,
                'anggota_id' => 81,
                'dari' => '2008',
                'sampai' => '2013',
                'instansi' => 'MI AL KHOERIYAH',
                'jurusan' => '-',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:13',
                'updated_at' => '2023-02-11 00:40:13',
            ),
            55 => 
            array (
                'id' => 56,
                'jenis_id' => 4,
                'anggota_id' => 85,
                'dari' => '2019',
                'sampai' => '2021',
                'instansi' => 'SMA Negri 1 Pasirkuda',
                'jurusan' => 'IPS',
                'keterangan' => NULL,
                'created_at' => '2023-02-11 00:40:13',
                'updated_at' => '2023-02-11 00:40:13',
            ),
        ));
        
        
    }
}