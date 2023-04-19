<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('logs')->delete();
        
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'log_date' => '2023-03-18 13:41:15',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.124.130.37","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.41"}',
            ),
            1 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'log_date' => '2023-03-18 16:37:33',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.124.242.96","user_agent":"Mozilla\\/5.0 (Linux; Android 12; M2010J19CG) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Mobile Safari\\/537.36"}',
            ),
            2 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'log_date' => '2023-03-18 16:42:50',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.124.242.96","user_agent":"Mozilla\\/5.0 (Linux; Android 12; M2010J19CG) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Mobile Safari\\/537.36"}',
            ),
            3 => 
            array (
                'id' => 8,
                'user_id' => 57,
                'log_date' => '2023-03-18 16:44:55',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.208.39","user_agent":"Mozilla\\/5.0 (Linux; Android 11; RMX2180) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/108.0.0.0 Mobile Safari\\/537.36"}',
            ),
            4 => 
            array (
                'id' => 9,
                'user_id' => 57,
                'log_date' => '2023-03-18 16:46:48',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.208.39","user_agent":"Mozilla\\/5.0 (Linux; Android 11; RMX2180) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/108.0.0.0 Mobile Safari\\/537.36"}',
            ),
            5 => 
            array (
                'id' => 10,
                'user_id' => 185,
                'log_date' => '2023-03-18 18:53:18',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.75.56","user_agent":"Mozilla\\/5.0 (Linux; Android 11; V2026) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/106.0.0.0 Mobile Safari\\/537.36"}',
            ),
            6 => 
            array (
                'id' => 11,
                'user_id' => 185,
                'log_date' => '2023-03-18 18:58:58',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.75.56","user_agent":"Mozilla\\/5.0 (Linux; Android 11; V2026) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/106.0.0.0 Mobile Safari\\/537.36"}',
            ),
            7 => 
            array (
                'id' => 12,
                'user_id' => 205,
                'log_date' => '2023-03-18 19:24:29',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.217.144","user_agent":"Mozilla\\/5.0 (Linux; Android 11; RMX3263) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.88 Mobile Safari\\/537.36"}',
            ),
            8 => 
            array (
                'id' => 13,
                'user_id' => 58,
                'log_date' => '2023-03-18 19:26:05',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.217.144","user_agent":"Mozilla\\/5.0 (Linux; Android 11; RMX3263) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.88 Mobile Safari\\/537.36"}',
            ),
            9 => 
            array (
                'id' => 14,
                'user_id' => 26,
                'log_date' => '2023-03-18 19:54:39',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.10.68.202","user_agent":"Mozilla\\/5.0 (Linux; Android 10; V2027) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/109.0.0.0 Mobile Safari\\/537.36"}',
            ),
            10 => 
            array (
                'id' => 15,
                'user_id' => 26,
                'log_date' => '2023-03-18 19:58:42',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.10.68.202","user_agent":"Mozilla\\/5.0 (Linux; Android 10; V2027) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/109.0.0.0 Mobile Safari\\/537.36"}',
            ),
            11 => 
            array (
                'id' => 16,
                'user_id' => 79,
                'log_date' => '2023-03-18 20:30:33',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.215.114","user_agent":"Mozilla\\/5.0 (Linux; Android 13; SM-A127F) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/104.0.0.0 Mobile Safari\\/537.36"}',
            ),
            12 => 
            array (
                'id' => 17,
                'user_id' => 79,
                'log_date' => '2023-03-18 20:35:29',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.215.114","user_agent":"Mozilla\\/5.0 (Linux; Android 13; SM-A127F) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/104.0.0.0 Mobile Safari\\/537.36"}',
            ),
            13 => 
            array (
                'id' => 18,
                'user_id' => 110,
                'log_date' => '2023-03-18 20:42:53',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.216.17","user_agent":"Mozilla\\/5.0 (Linux; Android 13; V2110) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/105.0.0.0 Mobile Safari\\/537.36"}',
            ),
            14 => 
            array (
                'id' => 19,
                'user_id' => 110,
                'log_date' => '2023-03-18 20:45:10',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.216.17","user_agent":"Mozilla\\/5.0 (Linux; Android 13; V2110) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/105.0.0.0 Mobile Safari\\/537.36"}',
            ),
            15 => 
            array (
                'id' => 20,
                'user_id' => 110,
                'log_date' => '2023-03-18 21:00:58',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.216.17","user_agent":"Mozilla\\/5.0 (Linux; Android 13; V2110) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/105.0.0.0 Mobile Safari\\/537.36"}',
            ),
            16 => 
            array (
                'id' => 21,
                'user_id' => 287,
                'log_date' => '2023-03-18 23:07:41',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"140.213.41.116","user_agent":"Mozilla\\/5.0 (Linux; Android 11; SM-A035F) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Mobile Safari\\/537.36"}',
            ),
            17 => 
            array (
                'id' => 22,
                'user_id' => 113,
                'log_date' => '2023-03-18 23:09:25',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.212.129","user_agent":"Mozilla\\/5.0 (Linux; Android 11; SM-A207F) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/110.0.0.0 Mobile Safari\\/537.36"}',
            ),
            18 => 
            array (
                'id' => 23,
                'user_id' => 110,
                'log_date' => '2023-03-18 23:14:03',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.216.17","user_agent":"Mozilla\\/5.0 (Linux; Android 13; V2110) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/105.0.0.0 Mobile Safari\\/537.36"}',
            ),
            19 => 
            array (
                'id' => 24,
                'user_id' => 57,
                'log_date' => '2023-03-19 00:50:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.210.0","user_agent":"Mozilla\\/5.0 (Linux; Android 11; RMX2180) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/108.0.0.0 Mobile Safari\\/537.36"}',
            ),
            20 => 
            array (
                'id' => 25,
                'user_id' => 1,
                'log_date' => '2023-03-19 00:55:24',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.124.242.82","user_agent":"Mozilla\\/5.0 (Linux; Android 12; M2010J19CG) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Mobile Safari\\/537.36"}',
            ),
            21 => 
            array (
                'id' => 26,
                'user_id' => 185,
                'log_date' => '2023-03-19 06:25:01',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.74.168","user_agent":"Mozilla\\/5.0 (Linux; Android 11; V2026) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/106.0.0.0 Mobile Safari\\/537.36"}',
            ),
            22 => 
            array (
                'id' => 27,
                'user_id' => 114,
                'log_date' => '2023-03-19 08:24:28',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.13","user_agent":"Mozilla\\/5.0 (Linux; U; Android 10; id-id; Redmi 9C Build\\/QP1A.190711.020) AppleWebKit\\/537.36 (KHTML, like Gecko) Version\\/4.0 Chrome\\/100.0.4896.127 Mobile Safari\\/537.36 XiaoMi\\/MiuiBrowser\\/13.22.1-gn"}',
            ),
            23 => 
            array (
                'id' => 28,
                'user_id' => 1,
                'log_date' => '2023-03-19 10:40:35',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.124.243.98","user_agent":"Mozilla\\/5.0 (Linux; Android 12; M2010J19CG) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Mobile Safari\\/537.36"}',
            ),
            24 => 
            array (
                'id' => 29,
                'user_id' => 93,
                'log_date' => '2023-03-19 10:41:32',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.248.18","user_agent":"Mozilla\\/5.0 (Linux; U; Android 12; id-id; Redmi Note 11 Build\\/SKQ1.211103.001) AppleWebKit\\/537.36 (KHTML, like Gecko) Version\\/4.0 Chrome\\/89.0.4389.116 Mobile Safari\\/537.36 XiaoMi\\/MiuiBrowser\\/13.6.0-gn"}',
            ),
            25 => 
            array (
                'id' => 30,
                'user_id' => 93,
                'log_date' => '2023-03-19 10:42:30',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.248.18","user_agent":"Mozilla\\/5.0 (Linux; U; Android 12; id-id; Redmi Note 11 Build\\/SKQ1.211103.001) AppleWebKit\\/537.36 (KHTML, like Gecko) Version\\/4.0 Chrome\\/89.0.4389.116 Mobile Safari\\/537.36 XiaoMi\\/MiuiBrowser\\/13.6.0-gn"}',
            ),
            26 => 
            array (
                'id' => 31,
                'user_id' => 93,
                'log_date' => '2023-03-19 10:45:11',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.248.18","user_agent":"Mozilla\\/5.0 (Linux; U; Android 12; id-id; Redmi Note 11 Build\\/SKQ1.211103.001) AppleWebKit\\/537.36 (KHTML, like Gecko) Version\\/4.0 Chrome\\/89.0.4389.116 Mobile Safari\\/537.36 XiaoMi\\/MiuiBrowser\\/13.6.0-gn"}',
            ),
            27 => 
            array (
                'id' => 32,
                'user_id' => 93,
                'log_date' => '2023-03-19 10:45:13',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.248.18","user_agent":"Mozilla\\/5.0 (Linux; U; Android 12; id-id; Redmi Note 11 Build\\/SKQ1.211103.001) AppleWebKit\\/537.36 (KHTML, like Gecko) Version\\/4.0 Chrome\\/89.0.4389.116 Mobile Safari\\/537.36 XiaoMi\\/MiuiBrowser\\/13.6.0-gn"}',
            ),
            28 => 
            array (
                'id' => 33,
                'user_id' => 1,
                'log_date' => '2023-03-20 10:09:06',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.13","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.44"}',
            ),
            29 => 
            array (
                'id' => 34,
                'user_id' => 1,
                'log_date' => '2023-03-20 10:21:51',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.13","user_agent":"Mozilla\\/5.0 (Linux; Android 12; M2010J19CG) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Mobile Safari\\/537.36"}',
            ),
            30 => 
            array (
                'id' => 35,
                'user_id' => 1,
                'log_date' => '2023-03-20 20:03:39',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.13","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.44"}',
            ),
            31 => 
            array (
                'id' => 36,
                'user_id' => 1,
                'log_date' => '2023-03-20 22:34:54',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.13","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.44"}',
            ),
            32 => 
            array (
                'id' => 37,
                'user_id' => 1,
                'log_date' => '2023-03-21 11:17:18',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.124.243.15","user_agent":"Mozilla\\/5.0 (Linux; Android 12; M2010J19CG) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Mobile Safari\\/537.36"}',
            ),
            33 => 
            array (
                'id' => 38,
                'user_id' => 110,
                'log_date' => '2023-03-21 11:35:25',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.214.40","user_agent":"Mozilla\\/5.0 (Linux; Android 13; V2110) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/105.0.0.0 Mobile Safari\\/537.36"}',
            ),
            34 => 
            array (
                'id' => 39,
                'user_id' => 57,
                'log_date' => '2023-03-21 12:09:11',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.5.216.190","user_agent":"Mozilla\\/5.0 (Linux; Android 11; RMX2180) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/108.0.0.0 Mobile Safari\\/537.36"}',
            ),
            35 => 
            array (
                'id' => 40,
                'user_id' => 114,
                'log_date' => '2023-03-21 14:20:50',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"112.215.208.53","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/107.0.0.0 Safari\\/537.36"}',
            ),
            36 => 
            array (
                'id' => 41,
                'user_id' => 1,
                'log_date' => '2023-03-21 19:06:38',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.124.207.50","user_agent":"Mozilla\\/5.0 (Linux; Android 12; M2010J19CG) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Mobile Safari\\/537.36"}',
            ),
            37 => 
            array (
                'id' => 42,
                'user_id' => 1,
                'log_date' => '2023-03-21 22:17:59',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.124.207.179","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.44"}',
            ),
            38 => 
            array (
                'id' => 43,
                'user_id' => 1,
                'log_date' => '2023-03-23 00:57:05',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.124.214.64","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.44"}',
            ),
            39 => 
            array (
                'id' => 44,
                'user_id' => 1,
                'log_date' => '2023-03-23 20:19:54',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.106.98","user_agent":"Mozilla\\/5.0 (Linux; Android 12; M2010J19CG) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Mobile Safari\\/537.36"}',
            ),
            40 => 
            array (
                'id' => 45,
                'user_id' => 1,
                'log_date' => '2023-03-24 03:53:37',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.106.98","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.44"}',
            ),
            41 => 
            array (
                'id' => 46,
                'user_id' => 1,
                'log_date' => '2023-03-24 03:54:30',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.106.98","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.44"}',
            ),
            42 => 
            array (
                'id' => 47,
                'user_id' => 1,
                'log_date' => '2023-03-24 04:05:50',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.106.98","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.44"}',
            ),
            43 => 
            array (
                'id' => 48,
                'user_id' => 1,
                'log_date' => '2023-03-24 05:43:16',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.106.98","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.44"}',
            ),
            44 => 
            array (
                'id' => 49,
                'user_id' => 1,
                'log_date' => '2023-03-24 05:44:10',
                'table_name' => 'users',
                'log_type' => 'create',
                'data' => '{"name":"Isep lutpi nur testing","email":"iseplutpinur8@gmail.com","username":"isep-lutpi-nur-testing20230324054410","active":1,"updated_at":"2023-03-23T22:44:10.000000Z","created_at":"2023-03-23T22:44:10.000000Z","id":288,"profile_photo_url":"https:\\/\\/ui-avatars.com\\/api\\/?name=I+l+n+t&color=7F9CF5&background=EBF4FF"}',
            ),
            45 => 
            array (
                'id' => 50,
                'user_id' => 1,
                'log_date' => '2023-03-24 05:44:10',
                'table_name' => 'anggotas',
                'log_type' => 'create',
                'data' => '{"nama":"Isep lutpi nur testing","angkatan":"2022","telepon":"+6285798132505","whatsapp":"85798132055","user_id":288,"updated_at":"2023-03-23T22:44:10.000000Z","created_at":"2023-03-23T22:44:10.000000Z","id":263}',
            ),
            46 => 
            array (
                'id' => 51,
                'user_id' => 1,
                'log_date' => '2023-03-24 05:44:10',
                'table_name' => 'pend_sensus',
                'log_type' => 'create',
                'data' => '{"nama":"Isep lutpi nur testing","angkatan":"2022","email":"iseplutpinur8@gmail.com","whatsapp":"85798132055","telepon":"+6285798132505","status":2,"keterangan":"Sudah dijadikan pengguna dengan email: iseplutpinur8@gmail.com dan password: 12345678","updated_at":"2023-03-23T22:44:10.000000Z","created_at":"2023-03-23T22:44:10.000000Z","id":14}',
            ),
            47 => 
            array (
                'id' => 52,
                'user_id' => 1,
                'log_date' => '2023-03-24 05:44:28',
                'table_name' => 'anggotas',
                'log_type' => 'delete',
                'data' => '{"id":"263","nomor_anggota":null,"nama":"Isep lutpi nur testing","tanggal_lahir":null,"jenis_kelamin":null,"angkatan":"2022","province_id":null,"regency_id":null,"district_id":null,"village_id":null,"alamat_lengkap":null,"bio":null,"profesi":null,"foto":null,"telepon":"+6285798132505","whatsapp":"85798132055","status":null,"user_id":"288","created_at":"2023-03-24 05:44:10","updated_at":"2023-03-24 05:44:10"}',
            ),
            48 => 
            array (
                'id' => 53,
                'user_id' => 1,
                'log_date' => '2023-03-24 05:44:28',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":"288","name":"Isep lutpi nur testing","email":"iseplutpinur8@gmail.com","foto":null,"username":"isep-lutpi-nur-testing20230324054410","email_verified_at":null,"password":"$2y$10$f4ZCyN7chIIKv51gaCmPyuq\\/magODOIUY30EtUXPYoK6QhSjR59ei","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":"2023-03-24 05:44:10","updated_at":"2023-03-24 05:44:10"}',
            ),
            49 => 
            array (
                'id' => 54,
                'user_id' => 1,
                'log_date' => '2023-03-24 05:45:52',
                'table_name' => 'notif_depan_atas',
                'log_type' => 'create',
                'data' => '{"nama":"Sensus Anggota","deskripsi":"Sensus anggota sedang dilakukan, untuk semua anggota maupun alumni karmapack yang belum tercatat pada Aplikasi Sistem Informasi Anggota. diharapkan untuk mengisi sensus","dari":"2023-03-23","sampai":null,"link":"https:\\/\\/karmapack.id\\/pendaftaran\\/sensus","link_nama":"Klik disini","updated_at":"2023-03-23T22:45:52.000000Z","created_at":"2023-03-23T22:45:52.000000Z","id":3}',
            ),
            50 => 
            array (
                'id' => 55,
                'user_id' => 1,
                'log_date' => '2023-03-24 05:46:05',
                'table_name' => 'notif_depan_atas',
                'log_type' => 'edit',
                'data' => '{"id":"1","nama":"Hi i\'m Astro","deskripsi":"Hi i\'m Astro","dari":"2022-08-02","sampai":"2022-10-01","link":"https:\\/\\/breached.to\\/User-mr-astroboy","link_nama":"Klik disini","created_at":"2022-08-08 22:37:14","updated_at":"2022-10-22 06:57:26"}',
            ),
            51 => 
            array (
                'id' => 56,
                'user_id' => 1,
                'log_date' => '2023-03-24 05:48:00',
                'table_name' => 'notif_depan_atas',
                'log_type' => 'edit',
                'data' => '{"id":"3","nama":"Sensus Anggota","deskripsi":"Sensus anggota sedang dilakukan, untuk semua anggota maupun alumni karmapack yang belum tercatat pada Aplikasi Sistem Informasi Anggota. diharapkan untuk mengisi sensus","dari":"2023-03-23","sampai":null,"link":"https:\\/\\/karmapack.id\\/pendaftaran\\/sensus","link_nama":"Klik disini","created_at":"2023-03-24 05:45:52","updated_at":"2023-03-24 05:45:52"}',
            ),
            52 => 
            array (
                'id' => 57,
                'user_id' => 1,
                'log_date' => '2023-03-24 06:11:19',
                'table_name' => 'artikel',
                'log_type' => 'edit',
            'data' => '{"id":"30","nama":"Peringatan Hari Hutan Internasional","slug":"peringatan-hari-hutan-internasional2022","foto":"\\/assets\\/artikel\\/peringatan16508596430.png","detail":"<p class=\\"MsoNormal\\" style=\\"text-align: center; margin-bottom: 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\n\\"Times New Roman\\";color:#222222;mso-fareast-language:IN\'><br><\\/span><img style=\\"width: 367.4px; height: 441.22px;\\" data-bs-filename=\\"276121008_719900469175542_1271108511653924704_n.webp\\" src=\\"\\/assets\\/artikel\\/peringatan16508596430.png\\"><p class=\\"MsoNormal\\" style=\\"text-align: center; margin-bottom: 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><img style=\\"width: 800px;\\" data-bs-filename=\\"Peringatan-Hari-Hutan-Internasional.gif\\" src=\\"\\/assets\\/artikel\\/peringatan16508596431.png\\"><br><\\/p><p class=\\"MsoNormal\\" style=\\"text-align: center; margin-bottom: 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\n\\"Times New Roman\\";color:#222222;mso-fareast-language:IN\'>Peringatan Hari Hutan\\nInternasional<\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\n\\"Times New Roman\\";color:#222222;mso-fareast-language:IN\'><p><br><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\n\\"Times New Roman\\";color:#222222;mso-fareast-language:IN\'><p><br><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>Sejak tahun 2012, Majelis Umum PBB telah menetapkan tanggal 21 Maret\\nsebagai peringatan Hari Hutan Internasional. Tahun 2022 bertema: &acirc;&#128;&#156;<i>Forests\\nand sustainable production and consumption<\\/i>&acirc;&#128;&#157;.<a name=\\"_ednref1\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_edn1\\"><span style=\\"color:#56C696\\">[i]<\\/span><\\/a>&nbsp;Tema\\ntersebut berarti seluruh pihak harus mengakhiri berbagai bentuk pola konsumsi\\ndan produksi yang tidak berkelanjutan sehingga berdampak negatif terhadap\\nkelestarian ekosistem hutan. Sudah saatnya, seluruh stakeholders turut\\nmemberikan dukungan yang nyata dan kredibel atas setiap upaya pengelolaan hutan\\nberkelanjutan yang telah dilaksanakan oleh negara dan masyarakat.<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>Peringatan Hari Hutan Internasional meningkatkan kesadaran akan pentingnya\\nekosistem hutan. Menurut laporan PBB berjudul &acirc;&#128;&#156;<a href=\\"https:\\/\\/www.un.org\\/esa\\/forests\\/wp-content\\/uploads\\/2021\\/04\\/Global-Forest-Goals-Report-2021.pdf\\"><span style=\\"color:#56C696\\">the Global Forest Goals Report 2021<\\/span><\\/a>&acirc;&#128;&#157;\\nditerbitkan oleh Departemen Ekonomi dan Urusan Sosial PBB (the UN Department of\\nEconomic and Social Affairs\\/ UN DESA), melalui Sekretariat Forum PBB tentang\\nHutan (United Nations Forum on Forests Secretariat\\/ UNFFS), luasan hutan di\\npermukaan daratan bumi saat ini, mencapai 4 miliar hektar, atau setara 31% dari\\nluas daratan di dunia.<a name=\\"_ednref2\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_edn2\\"><span style=\\"color:#56C696\\">[ii]<\\/span><\\/a>&nbsp;Seluruh\\nnegara di dunia didorong untuk melakukan upaya secara lokal, nasional dan\\ninternasional untuk melaksanakan kegiatan terkait upaya pelestarian ekosistem\\nhutan. Mengingat berbagai manfaat yang telah diberikan oleh ekosistem hutan,\\nantara lain yaitu:<a name=\\"_ednref3\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_edn3\\"><span style=\\"color:#56C696\\">[iii]<\\/span><\\/a><p><\\/p><\\/span><\\/p><ul type=\\"disc\\">\\n<li class=\\"MsoNormal\\" style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'>Sektor\\nkehutanan menciptakan lapangan kerja bagi sedikitnya 33 juta orang dan\\nhasil hutan digunakan oleh miliaran orang. Diperkirakan lebih dari\\nsetengah produksi ekonomi dunia (seperti PDB) bergantung pada jasa\\nekosistem, termasuk yang disediakan oleh hutan. Lebih dari setengah total\\npenduduk dunia diperkirakan menggunakan hasil hutan bukan kayu adalah\\npenunjang kesejahteraan dan sumber mata pencaharian masyarakat.<p><\\/p><\\/span><\\/li>\\n<li class=\\"MsoNormal\\" style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'>Hutan\\nsangat penting untuk kesehatan planet dan kesejahteraan manusia. Hutan\\nmenutupi hampir sepertiga dari permukaan tanah bumi dan menyediakan\\nbarang-barang seperti kayu, bahan bakar, makanan dan pakan ternak,\\nmembantu memerangi perubahan iklim, melindungi keanekaragaman hayati,\\ntanah, sungai dan waduk, dan berfungsi sebagai area di mana orang bisa\\ndekat dengan alam.<p><\\/p><\\/span><\\/li>\\n<li class=\\"MsoNormal\\" style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'>Menggunakan\\nhutan secara berkelanjutan akan membantu kita beralih ke ekonomi yang\\ndidasarkan atas bahan baku yang terbarukan, dapat digunakan kembali, dan\\ndapat didaur ulang. Kayu dapat digunakan untuk berbagai tujuan, dengan\\ndampak lingkungan yang lebih rendah daripada banyak bahan alternatif. Kayu\\nyang digunakan sekali dapat digunakan kembali dan didaur ulang, sehingga\\nmemperpanjang umurnya dan semakin mengurangi jejak materialnya.<p><\\/p><\\/span><\\/li>\\n<li class=\\"MsoNormal\\" style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'>Memperluas\\npenggunaan hasil hutan berkontribusi pada netralitas karbon. Ilmu pengetahuan\\ndan inovasi menghasilkan produk baru yang menarik dari kayu dan pohon,\\ntermasuk tekstil, makanan, bahan bangunan, kosmetik, biokimia, bioplastik,\\ndan obat-obatan. Mengganti bahan yang kurang berkelanjutan dengan kayu\\nterbarukan dan produk berbasis pohon dapat mengurangi jejak karbon.<p><\\/p><\\/span><\\/li>\\n<li class=\\"MsoNormal\\" style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'>Kayu\\nyang lestari adalah bahan penting untuk menghijaukan kota. Sektor bangunan\\ndan konstruksi bertanggung jawab atas hampir 40 persen emisi gas rumah\\nkaca terkait energi secara global. Inovasi memungkinkan penggunaan lebih\\nbanyak kayu di gedung-gedung tinggi dan infrastruktur lainnya, membantu\\n&acirc;&#128;&#156;menghijaukan&acirc;&#128;&#157; kota, karena kayu menyimpan karbon, membutuhkan lebih\\nsedikit energi untuk diproduksi daripada banyak bahan konstruksi lainnya,\\ndan menyediakan insulasi yang baik.<p><\\/p><\\/span><\\/li>\\n<li class=\\"MsoNormal\\" style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'>Hutan\\nsangat penting untuk menunjang produksi pangan. Jasa ekosistem hutan,\\nseperti habitat keanekaragaman hayati, pengaturan iklim, kualitas air dan\\ntanah, dan penyerbukan sangatlah penting untuk sistem pangan pertanian\\nberkelanjutan dan memberi makan populasi global yang terus bertambah.\\nSelain itu, lebih dari tiga perempat rumah tangga pedesaan di seluruh\\ndunia diperkirakan memanen makanan liar dari hutan dan lingkungan lainnya.<p><\\/p><\\/span><\\/li>\\n<li class=\\"MsoNormal\\" style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'>Diperlukan\\nlebih banyak tindakan untuk menghentikan deforestasi dan degradasi hutan.\\nSejak tahun 1990, dunia telah kehilangan 420 juta hektar hutan (lebih\\nbesar dari luas negara India), dan masih terjadi deforestasi seluas 10\\njuta hektar per\\/ tahun, terutama karena ekspansi lahan pertanian.\\nPengelolaan hutan secara lestari dapat mengurangi deforestasi dan\\ndegradasi, memulihkan lanskap yang terdegradasi, dan menyediakan lapangan\\nkerja dan material terbarukan bagi masyarakat.<p><\\/p><\\/span><\\/li>\\n<li class=\\"MsoNormal\\" style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'>Pilih\\nproduk kayu dari sumber yang legal dan berkelanjutan. Konsumen dapat\\nberkontribusi pada pemanfaatan hutan yang berkelanjutan dengan memilih\\nproduk kayu dengan label atau sertifikasi yang menegaskan bahwa produk\\ntersebut berasal dari sumber yang legal dan berkelanjutan.<p><\\/p><\\/span><\\/li>\\n<\\/ul><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>&nbsp;<\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"text-align: center; margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><img style=\\"width: 709.247px; height: 319.388px;\\" data-bs-filename=\\"Peringatan-Hari-Hutan-Internasional-2.jpg\\" src=\\"\\/assets\\/artikel\\/peringatan16508596432.png\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'><br><\\/span><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"margin-bottom: 11.25pt; text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><b><span style=\'font-size:10.5pt;\\nfont-family:\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";\\ncolor:#222222;mso-fareast-language:IN\'>Foto: sertifikasi ramah lingkungan untuk\\nproduk kehutanan, yang menjadi salah satu indikator bagi konsumen untuk\\nmenentukan hasil produksi hutan yang lestari.<\\/span><\\/b><span style=\'font-size:\\n10.5pt;font-family:\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";\\ncolor:#222222;mso-fareast-language:IN\'><p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>Selaras dengan hal tersebut, Sekretaris Jenderal PBB Ant&Atilde;&sup3;nio Guterres juga\\nmengungkapkan, bahwa hutan yang sehat sangat penting bagi manusia dan planet\\nini. Hutan berfungsi sebagai filter alami, menyediakan udara dan air bersih,\\ndan mereka adalah surga keanekaragaman hayati. Membantu mengatur iklim kita\\ndengan mempengaruhi pola curah hujan, mendinginkan daerah perkotaan dan\\nmenyerap sepertiga dari emisi gas rumah kaca. Hutan menjadi sumber mata\\npencaharian bagi banyak komunitas dan masyarakat adat, serta sumber dari\\nobat-obatan, makanan, sekaligus tempat perlindungan. Sayangnya, masih terjadi\\nkerusakan atau kehancuran hutan sekitar 10 juta hektar hutan setiap tahunnya.<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>Indonesia sebagai salah satu negara pemilik hutan terluas di dunia, sejak\\nera orde baru telah mengandalkan hutan sebagai penunjang pertumbuhan\\nekonominya. Karenanya kelestarian hutan menjadi suatu keniscayaan dalam upaya\\nmewujudkan pembangunan berkelanjutan di Indonesia. Menurut Laporan State Forest\\nIndonesian Tahun 2020, yang diterbitkan Kementerian Kehutanan dan Lingkungan\\nHidup bekerjasama dengan FAO (Food and Agriculture Organization) Perserikatan\\nBangsa-Bangsa, luasan kawasan di Indonesia yang ditetapkan sebagai Kawasan\\nHutan mencapai 120 Juta Ha, atau seluas 64 persen dari seluruh wilayah daratan\\nIndonesia. Karena letak geografisnya, Indonesia merupakan salah satu negara\\ndengan tingkat keanekaragaman hayati dan endemisitas yang sangat tinggi, serta\\nmemiliki tingkat keanekaragaman hayati yang lebih tinggi daripada negara lain\\ndi dunia.<a name=\\"_ednref4\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_edn4\\"><span style=\\"color:#56C696\\">[iv]<\\/span><\\/a><p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>Kawasan yang ditetapkan sebagai kawasan Hutan Produksi Indonesia seluas\\n68,8 juta hektar, dimana luasan kawasan yang telah diberikan konsesi mencapai\\n34,18 juta hektar, sedangkan sisanya 34,62 juta hektar belum dibebankan izin.<a name=\\"_ednref5\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_edn5\\"><span style=\\"color:#56C696\\">[v]<\\/span><\\/a>&nbsp;Sedangkan\\nmenurut Laporan Status Hutan dan Kehutanan Indonesia pada tahun 2018, luasan\\nkawasan hutan yang telah diberikan izin konsesi mencapai 30,7 Juta Hektar, dan\\nseluas 38,1 juta hektar sisanya belum dibebani izin apapun.<a name=\\"_ednref6\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_edn6\\"><span style=\\"color:#56C696\\">[vi]<\\/span><\\/a><p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>&nbsp;<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><img style=\\"width: 1113.2px;\\" data-bs-filename=\\"Peringatan-Hari-Hutan-Internasional-3.jpg\\" src=\\"\\/assets\\/artikel\\/peringatan16508596433.png\\"><br><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"margin-bottom: 11.25pt; text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><b><span style=\'font-size:10.5pt;\\nfont-family:\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";\\ncolor:#222222;mso-fareast-language:IN\'>Foto: Kayu bulat (<i>tangiable<\\/i>) yang\\nmasih menjadi tumpuan ekonomi hutan di Indonesia<\\/span><\\/b><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\n\\"Times New Roman\\";color:#222222;mso-fareast-language:IN\'><p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>Menurut data Statistik Produksi Kehutanan 2020 yang diterbitkan oleh BPS,\\npada tahun 2020 Hutan di Indonesia menghasilkan kayu bulat sebesar 61,02 juta\\nm&Acirc;&sup3;. Sebesar 68,39 persen produksi kayu bulat di Indonesia berasal dari Pulau\\nSumatra, mencapai 41,73 juta m&Acirc;&sup3;. Produksi kayu bulat terbesar adalah kayu\\nakasia sebanyak 32,114 juta m&Acirc;&sup3; (52,63 persen), kayu kelompok rimba campuran\\nsebanyak 20,655 juta m&Acirc;&sup3; (33,85 persen), kayu kelompok meranti sebanyak 4,795\\njuta m&Acirc;&sup3; (7,86 persen), kayu kelompok indah sebanyak 0,492 juta m&Acirc;&sup3; (0,81\\npersen), kayu kelompok eboni sebanyak 0,001 juta m&Acirc;&sup3; (0,00 persen), sedangkan\\nsisanya kayu lainnya sebanyak 2,961 juta m&Acirc;&sup3; (4,85 persen).<a name=\\"_ednref7\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_edn7\\"><span style=\\"color:#56C696\\">[vii]<\\/span><\\/a><p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>Sedangkan produksi kayu olahan pada tahun 2020, berupa chip dan partikel\\nsebesar 21,54 juta m&Acirc;&sup3; dan 12,33 juta ton, diikuti oleh bubur kayu sebesar 8,18\\njuta ton, kayu lapis sebesar 3,88 juta m&Acirc;&sup3;, kayu gergajian sebesar 3,72 juta m&Acirc;&sup3;,\\nveneer sebesar 2,04 juta m&Acirc;&sup3;, papan serat sebesar 0,69 juta m&Acirc;&sup3;, barecore sebesar\\n0,38 juta m&Acirc;&sup3;, moulding\\/dowel sebesar 0,28 juta m&Acirc;&sup3;, dan papan partikel sebesar\\n0,02 juta m&Acirc;&sup3;. Sedangkan sisa kayu olahan lainnya sebanyak 0,34 juta m&Acirc;&sup3; dan 0,03\\njuta ton. Sebagian besar produk kayu olahan dihasilkan di Pulau Sumatera dan\\nPulau Jawa. Produksi kayu olahan berupa chip &amp; partikel, bubur kayu, dan\\npapan serat sebagian besar berasal dari pulau Sumatera. Produksi kayu olahan\\ndengan jenis kayu lapis, kayu gergajian, veneer, barecore, dan moulding\\/ dowel\\nsebagian besar berasal dari pulau Jawa.<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>Kemudian untuk produk hasil hutan bukan kayu (HHBK) dengan jenis rotan,\\ngetah karet, dan sagu banyak yang berasal dari pulau Sumatera. Produksi hutan\\nbukan kayu dengan jenis bambu, getah pinus, daun kayu putih, gondorukem, madu,\\ndan terpentin sebagian besar berasal dari pulau Jawa. Sementara, sebagian besar\\nproduksi hutan bukan kayu dengan jenis sagu dan minyak kayu putih berasal dari\\npulau Maluku dan Papua.<a name=\\"_ednref8\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_edn8\\"><span style=\\"color:#56C696\\">[viii]<\\/span><\\/a><p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>Sampai saat ini, sebagian besar masyarakat Indonesia masih memiliki\\nketergantungan ekonomi terhadap potensi kawasan hutan. Sebanyak 25.800 desa,\\natau 34,1% dari total 74.954 desa di seluruh Indonesia, merupakan\\nwilayah-wilayah yang berbatasan langsung dengan kawasan hutan. Kawasan konservasi\\nterestrial seluas 22,1 juta hektar dikelilingi oleh 6.381 desa, dengan sebagian\\nbesar penduduknya memiliki ketergantungan terhadap sumberdaya alam untuk\\npemenuhan kebutuhan hidupnya.<a name=\\"_ednref9\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_edn9\\"><span style=\\"color:#56C696\\">[ix]<\\/span><\\/a><p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>Pengelolaan hutan yang lestari dan pemanfaatannya atas sumber daya adalah\\nkunci untuk memerangi perubahan iklim dan berkontribusi pada kemakmuran dan\\nkesejahteraan generasi sekarang dan mendatang. Hutan juga memainkan peran\\npenting dalam pengentasan kemiskinan dan dalam pencapaian Tujuan Pembangunan\\nBerkelanjutan (SDGs). Selain itu, Hutan, melalui jasa ekosistemnya, adalah\\nsolusi kunci berbasis alam untuk membangun kembali ekonomi global pascapandemi\\ndengan cara melestarikan alam, sambil mendorong pertumbuhan ekonomi.<a name=\\"_ednref10\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_edn10\\"><span style=\\"color:#56C696\\">[x]<\\/span><\\/a><p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"text-align: center; margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><img style=\\"width: 920px;\\" data-bs-filename=\\"Peringatan-Hari-Hutan-Internasional-4.png\\" src=\\"\\/assets\\/artikel\\/peringatan16508596434.png\\"><br><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"margin-bottom: 11.25pt; text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><b><span style=\'font-size:10.5pt;\\nfont-family:\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";\\ncolor:#222222;mso-fareast-language:IN\'>Tema Hari Hutan Internasional Tahun\\n2022, &acirc;&#128;&#156;Choose Sustainable Wood for People and Planet&acirc;&#128;&#157;<\\/span><\\/b><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\n\\"Times New Roman\\";color:#222222;mso-fareast-language:IN\'><p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>Seluruh manfaat dan upaya pengelolaan ekosistem hutan telah terangkum dalam\\nRencana Strategis PBB untuk Hutan 2017&acirc;&#128;&#147;2030 (The United Nations Strategic Plan\\nfor Forests 2017&acirc;&#128;&#147;2030) yang memberikan kerangka kerja global untuk tindakan\\npengelolaan seluruh jenis hutan secara berkelanjutan dan untuk menghentikan\\ndeforestasi dan degradasi hutan.<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>Rencana Strategis PBB untuk Hutan 2017-2030 dibuat dengan misi untuk\\nmempromosikan pengelolaan hutan lestari dan meningkatkan kontribusi hutan dan\\npohon ke Agenda 2030 untuk pembangunan berkelanjutan. Rencana tersebut juga\\nmenggariskan, bahwa untuk menciptakan dunia di mana hutan dapat memberikan\\nmanfaat ekonomi, sosial, lingkungan, dan budaya bagi generasi sekarang dan\\nmendatang, maka yang pertama dan utama, adalah dibutuhkan lebih banyak hutan.\\nSehingga berbagai anggapan yang mempertentangkan antara keberlanjutan pembangunan\\ndan kelestarian hutan, sehingga menciptakan pembenaran sebuah deforestasi,\\npatut dikaji kembali secara mendalam.<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>Inti dari Rencana Strategis adalah enam Tujuan Hutan Global (Global Forest\\nGoals\\/ GFGs) dan 26 target terkait yang bersifat sukarela dan universal. Enam\\nTujuan Hutan Global yang secara langsung mendukung Tujuan Pembangunan\\nBerkelanjutan PBB, mencakup:<a name=\\"_ednref11\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_edn11\\"><span style=\\"color:#56C696\\">[xi]<\\/span><\\/a><p><\\/p><\\/span><\\/p><ol start=\\"1\\" type=\\"1\\">\\n<li class=\\"MsoNormal\\" style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'>Membalikkan\\nkehilangan tutupan hutan di seluruh dunia melalui pengelolaan hutan\\nlestari, termasuk perlindungan, restorasi, aforestasi dan reboisasi, dan\\nmeningkatkan upaya untuk mencegah degradasi hutan dan berkontribusi pada\\nupaya dunia untuk mengatasi perubahan iklim.<p><\\/p><\\/span><\\/li>\\n<li class=\\"MsoNormal\\" style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'>Meningkatkan\\nmanfaat ekonomi, sosial dan lingkungan berbasis hutan, termasuk dengan\\nmeningkatkan mata pencaharian masyarakat yang bergantung pada hutan.<p><\\/p><\\/span><\\/li>\\n<li class=\\"MsoNormal\\" style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'>Meningkatkan\\nkawasan hutan lindung di seluruh dunia dan kawasan hutan yang dikelola\\nsecara lestari lainnya secara signifikan, serta proporsi hasil hutan dari\\nhutan yang dikelola secara lestari.<\\/span><\\/li><li class=\\"MsoNormal\\" style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'>Memobilisasi\\nsumber daya keuangan baru dan tambahan yang meningkat secara signifikan\\ndari semua sumber untuk pelaksanaan pengelolaan hutan lestari dan\\nmemperkuat kerjasama dan kemitraan ilmiah dan teknis.<p><\\/p><\\/span><\\/li>\\n<li class=\\"MsoNormal\\" style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'>Mempromosikan\\nkerangka tata kelola untuk menerapkan pengelolaan hutan lestari, termasuk\\nmelalui instrumen hutan PBB, dan meningkatkan kontribusi hutan pada Agenda\\n2030 untuk Pembangunan Berkelanjutan.<p><\\/p><\\/span><\\/li>\\n<li class=\\"MsoNormal\\" style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'>Meningkatkan\\nkerja sama, koordinasi, koherensi, dan sinergi dalam isu-isu terkait hutan\\ndi semua tingkatan, termasuk di dalam sistem Perserikatan Bangsa-Bangsa\\ndan di seluruh organisasi anggota Kemitraan Kolaboratif di Hutan, serta\\nlintas sektor dan pemangku kepentingan terkait.<\\/span><\\/li><\\/ol><p style=\\"color: rgb(34, 34, 34); line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><img style=\\"width: 1113.2px;\\" data-bs-filename=\\"Peringatan-Hari-Hutan-Internasional-5-1536x675.png\\" src=\\"\\/assets\\/artikel\\/peringatan16508596435.png\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";mso-fareast-language:IN\'><br><\\/span><\\/p><ol start=\\"1\\" type=\\"1\\">\\n<\\/ol><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><img style=\\"width: 1113.2px;\\" data-bs-filename=\\"Peringatan-Hari-Hutan-Internasional-6-1536x668.png\\" src=\\"\\/assets\\/artikel\\/peringatan16508596436.png\\"><br><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#222222;mso-fareast-language:\\nIN\'>Semoga peringatan Hari Hutan Internasional menjadi momentum untuk\\nmengingatkan kembali nilai dan manfaat keberadaan ekosistem hutan, sekaligus\\nmendorong komitmen atas pelestarian ekosistem hutan di seluruh dunia. Selamat\\nHari Hutan Internasional&acirc;&#128;&brvbar;<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><a name=\\"_edn1\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_ednref1\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#56C696;mso-fareast-language:\\nIN\'>[i]<\\/span><\\/a><span style=\'font-size:10.5pt;font-family:\\n\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";color:#222222;\\nmso-fareast-language:IN\'>&nbsp;Lihat dalam: (<a href=\\"https:\\/\\/www.fao.org\\/international-day-of-forests\\/en\\/\\"><span style=\\"color:#56C696\\">https:\\/\\/www.fao.org\\/international-day-of-forests\\/en\\/<\\/span><\\/a>)<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><a name=\\"_edn2\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_ednref2\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#56C696;mso-fareast-language:\\nIN\'>[ii]<\\/span><\\/a><span style=\'font-size:10.5pt;font-family:\\n\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";color:#222222;\\nmso-fareast-language:IN\'>&nbsp;United Nations Department of Economic and Social\\nAffairs, United Nations Forum on Forests Secretariat (2021). The Global Forest\\nGoals Report 2021<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><a name=\\"_edn3\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_ednref3\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#56C696;mso-fareast-language:\\nIN\'>[iii]<\\/span><\\/a><span style=\'font-size:10.5pt;font-family:\\n\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";color:#222222;\\nmso-fareast-language:IN\'>&nbsp;Lihat dalam: (<a href=\\"https:\\/\\/www.fao.org\\/international-day-of-forests\\/key-messages\\/en\\/\\"><span style=\\"color:#56C696\\">https:\\/\\/www.fao.org\\/international-day-of-forests\\/key-messages\\/en\\/<\\/span><\\/a>)<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><a name=\\"_edn4\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_ednref4\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#56C696;mso-fareast-language:\\nIN\'>[iv]<\\/span><\\/a><span style=\'font-size:10.5pt;font-family:\\n\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";color:#222222;\\nmso-fareast-language:IN\'>&nbsp;Ministry of environment and Forestry, republic\\nof Indonesia (2021), State Forest Indonesian Tahun 2020<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><a name=\\"_edn5\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_ednref5\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#56C696;mso-fareast-language:\\nIN\'>[v]<\\/span><\\/a><span style=\'font-size:10.5pt;font-family:\\n\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";color:#222222;\\nmso-fareast-language:IN\'>&nbsp;<i>Ibid.<\\/i><p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><a name=\\"_edn6\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_ednref6\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#56C696;mso-fareast-language:\\nIN\'>[vi]<\\/span><\\/a><span style=\'font-size:10.5pt;font-family:\\n\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";color:#222222;\\nmso-fareast-language:IN\'>&nbsp;Kementerian Lingkungan Hidup dan Kehutanan,\\n(2019), Status Hutan dan Kehutanan Indonesia Tahun 2018<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><a name=\\"_edn7\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_ednref7\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#56C696;mso-fareast-language:\\nIN\'>[vii]<\\/span><\\/a><span style=\'font-size:10.5pt;font-family:\\n\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";color:#222222;\\nmso-fareast-language:IN\'>&nbsp;Badan Pusat Statistik, &acirc;&#128;&#156;Statistik Produksi\\nKehutanan 2020&acirc;&#128;&#157;, dokumen dapat diakses di (<a href=\\"https:\\/\\/www.bps.go.id\\/publication\\/2021\\/07\\/30\\/d45441e7214b3c12c9653c45\\/statistik-produksi-kehutanan-2020.html\\"><span style=\\"color:#56C696\\">https:\\/\\/www.bps.go.id\\/publication\\/2021\\/07\\/30\\/d45441e7214b3c12c9653c45\\/statistik-produksi-kehutanan-2020.html<\\/span><\\/a>)<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><a name=\\"_edn8\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_ednref8\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#56C696;mso-fareast-language:\\nIN\'>[viii]<\\/span><\\/a><span style=\'font-size:10.5pt;font-family:\\n\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";color:#222222;\\nmso-fareast-language:IN\'>&nbsp;<i>Ibid.<\\/i><p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><a name=\\"_edn9\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_ednref9\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#56C696;mso-fareast-language:\\nIN\'>[ix]<\\/span><\\/a><span style=\'font-size:10.5pt;font-family:\\n\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";color:#222222;\\nmso-fareast-language:IN\'>&nbsp;Kementerian Lingkungan Hidup dan Kehutanan,\\n(2019), Status Hutan dan Kehutanan Indonesia Tahun 2018<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><a name=\\"_edn10\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_ednref10\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#56C696;mso-fareast-language:\\nIN\'>[x]<\\/span><\\/a><span style=\'font-size:10.5pt;font-family:\\n\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";color:#222222;\\nmso-fareast-language:IN\'>&nbsp;Lihat dalam: (<a href=\\"https:\\/\\/www.unep.org\\/resources\\/factsheet\\/investing-forests-build-back-better-greener\\"><span style=\\"color:#56C696\\">https:\\/\\/www.unep.org\\/resources\\/factsheet\\/investing-forests-build-back-better-greener<\\/span><\\/a>)<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\"><a name=\\"_edn11\\"><\\/a><a href=\\"https:\\/\\/pslh.ugm.ac.id\\/peringatan-hari-hutan-internasional\\/#_ednref11\\"><span style=\'font-size:10.5pt;font-family:\\"Helvetica\\",sans-serif;\\nmso-fareast-font-family:\\"Times New Roman\\";color:#56C696;mso-fareast-language:\\nIN\'>[xi]<\\/span><\\/a><span style=\'font-size:10.5pt;font-family:\\n\\"Helvetica\\",sans-serif;mso-fareast-font-family:\\"Times New Roman\\";color:#222222;\\nmso-fareast-language:IN\'>&nbsp;United Nations Department of Economic and Social\\nAffairs, United Nations Forum on Forests Secretariat (2021). The Global Forest\\nGoals Report 2021<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"margin-bottom: 11.25pt; line-height: 150%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\">\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n\\n<\\/p><p class=\\"MsoNormal\\"><p>&nbsp;<\\/p><\\/p><\\/p>\\n","excerpt":"Sejak tahun 2012, Majelis Umum PBB telah menetapkan tanggal 21 Maret sebagai peringatan Hari Hutan Internasional. Tahun 2022 bertema: \\u201cForests and sustainable production and consumption\\u201d","counter":"8","date":"2022-04-21","status":"1","created_at":"2022-04-25 04:07:23","updated_at":"2023-03-20 10:10:33","user_id":"1"}',
            ),
            53 => 
            array (
                'id' => 58,
                'user_id' => 1,
                'log_date' => '2023-03-24 11:58:48',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.106.167","user_agent":"Mozilla\\/5.0 (Linux; Android 12; M2010J19CG) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Mobile Safari\\/537.36"}',
            ),
            54 => 
            array (
                'id' => 59,
                'user_id' => 1,
                'log_date' => '2023-03-24 12:04:05',
                'table_name' => 'artikel',
                'log_type' => 'edit',
            'data' => '{"id":"34","nama":"Akses Jalan Cianjur Selatan Rusak Parah, Warga Tuntut Perbaikan","slug":"akses-jalan-cianjur-selatan-rusak-parah-warga-tuntut-perbaikan","foto":"\\/assets\\/artikel\\/akses-jala16508908150.png","detail":"<p style=\\"text-align: center; margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\"><img style=\\"width: 50%;\\" data-bs-filename=\\"IMG-20220219-WA0020.jpg\\" src=\\"\\/assets\\/artikel\\/akses-jala16508908150.png\\"><span style=\\"list-style: none; border: 0px; outline: none;\\"><br><\\/span><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\"><span style=\\"list-style: none; border: 0px; outline: none;\\">Cianjur<\\/span>&nbsp;&acirc;&#128;&#147; Kesal karena akses jalan provinsi di wilayah Cianjur selatan rusak parah, warga pun protes dengan menanami pohon pisang di sepanjang jalan dan menuntut adanya perbaikan.<\\/p><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">Pasalnya,&nbsp;<a href=\\"https:\\/\\/cianjurtoday.com\\/tag\\/jalan-provinsi\\" style=\\"list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;\\">jalan provinsi<\\/a>&nbsp;di Cianjur selatan mulai dari Kecamatan&nbsp;<a href=\\"https:\\/\\/cianjurtoday.com\\/tag\\/cilaku\\" style=\\"list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;\\">Cilaku<\\/a>&nbsp;hingga&nbsp;<a href=\\"https:\\/\\/cianjurtoday.com\\/tag\\/sindangbarang\\" style=\\"list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;\\">Sindangbarang<\\/a>&nbsp;tersebut merupakan akses vital kegiatan masyarakat.<\\/p><div class=\\"stream-item stream-item-in-post stream-item-inline-post aligncenter\\" style=\\"margin: 6px auto; list-style: none; border: 0px; outline: none; text-align: center; position: relative; z-index: 2; clear: both;\\"><\\/div><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">Kondisi&nbsp;<a href=\\"https:\\/\\/cianjurtoday.com\\/tag\\/jalan-rusak\\" style=\\"list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;\\">jalan rusak<\\/a>&nbsp;semakin parah saat hujan tiba, bahkan beberapa lokasi banyak badan jalan yang amblas dan sangat membahayakan. Mulai dari Kecamatan Cilaku, Cibeber, Campaka, Sukanagara, Pagelaran, Tanggeung, Cibinong, dan Sindangbarang.&nbsp;<\\/p><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">Salah seorang mahasiswa Cianjur, Agus Rama Tunggaraga mengatakan, aksi tanam pohon pisang di jalan provinsi ini sebagai bentuk protes masyarakat, akibat jalan rusak di wilayah Cianjur menuju selatan yang belum kunjung diperbaiki.<\\/p><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">&acirc;&#128;&#156;Saya asli orang Cianjur selatan, cape setiap pulang jalannya rusak begini. Makanya, saya bersama teman mahasiswa lainnya sengaja membuat aksi tanam pohon pisang di sepanjang jalan 8 kecamatan ini,&acirc;&#128;&#157; ujarnya kepada wartawan, Jumat (18\\/2\\/2022).&nbsp;<\\/p><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">Tak hanya itu, warga pun turut memasang foto Gubernur Jawa Barat, Ridwan Kamil dan membentangkan spanduk berisikan sejumlah ungkapan protes.<\\/p><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">Mulai desakan agar Gubernur segera melakukan perbaikan jalan hingga imbauan hati-hati pada masyarakat saat melintasi jalan, karena kondisinya yang rusak parah.&nbsp;<\\/p><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">&acirc;&#128;&#156;Sebagai gubernur, Ridwan Kamil harus bertanggungjawab terhadap pembangunan. Jangan hanya pencitraan di media sosial, tapi bangun yang benar infrastrukturnya. Kami sudah jenuh, jalan ke Cianjur selatan rusak parah, kami menuntut agar ada perbaikan dan pembangunan,&acirc;&#128;&#157; ungkapnya.&nbsp;<\\/p><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">Ia menegaskan, mahasiswa dan masyarakat Cianjur akan turun ke jalan menggelar aksi, jika Pemprov Jawa Barat tidak merespon tuntutan perbaikan jalan tersebut.&nbsp;<\\/p><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">&acirc;&#128;&#156;Jalan ini akses utama untuk banyak kegiatan masyarakat. Kalau tidak direspon, berarti Pemprov tidak memperhatikan pembangunan daerah. Kami akan turun ke jalan menggelar aksi,&acirc;&#128;&#157; tegasnya.&nbsp;<\\/p><h2 id=\\"h-jalan-cianjur-selatan-dibiarkan-rusak-bertahun-tahun\\" style=\\"margin-bottom: 0.5em; list-style: none; border: 0px; outline: none; overflow-wrap: break-word; line-height: 1.4;\\">Jalan Cianjur Selatan Dibiarkan Rusak Bertahun-tahun<\\/h2><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">Terpisah, warga Sindangbarang, H Abdul Rasyid menerangkan, akses jalan menuju Cianjur selatan memang sudah bertahun-tahun tidak ada perbaikan. Kalaupun ada, hanya sebatas penambalan dan biasanya tidak bertahan lama.<\\/p><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">&acirc;&#128;&#156;Sudah lama tidak ada perbaikan. Lupa saya, kapan terakhir jalan bagus. Karena sekarang kondisinya rusak parah,&acirc;&#128;&#157; imbuhnya.<\\/p><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">Ia menuturkan, kondisi jalan rusak tersebut sering menjadi penyebab kecelakaan bagi pengendara yang melintas.<\\/p><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">&acirc;&#128;&#156;Sering yang kecelakaan, apalagi saat hujan. Lubang jalan tidak terlihat karena tertutup genangan air,&acirc;&#128;&#157; tambahnya.<\\/p><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">Ia berharap, perbaikan akses jalan provinsi di Cianjur selatan tersebut segera mendapat perhatian pemerintah, agar bisa memberi rasa aman dan nyaman bagi pengguna jalan.<\\/p><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">&acirc;&#128;&#156;Saya berharap segera ada perbaikan, agar masyarakat bisa nyaman beraktivitas,&acirc;&#128;&#157; tutupnya.(ren\\/sis)<\\/p><p style=\\"margin-bottom: 25px; list-style: none; border: 0px; outline: none; line-height: 26px; overflow-wrap: break-word;\\">Sumber:&nbsp;<a href=\\"https:\\/\\/cianjurtoday.com\\/\\" style=\\"background-color: rgb(255, 255, 255); list-style: none; border: 0px; outline: none; transition: all 0.15s ease 0s;\\">CIANJURTODAY.COM<\\/a><\\/p><\\/p>\\n","excerpt":"Kesal karena akses jalan provinsi di wilayah Cianjur selatan rusak parah, warga pun protes dengan menanami pohon pisang di sepanjang jalan dan menuntut adanya perbaikan.","counter":"4","date":"2022-02-19","status":"1","created_at":"2022-04-25 12:46:55","updated_at":"2023-03-20 10:17:45","user_id":"1"}',
            ),
            55 => 
            array (
                'id' => 60,
                'user_id' => 1,
                'log_date' => '2023-03-24 12:05:40',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":"1","name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.com","foto":null,"username":"iseplutpinur","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"9SuJqGVrgZGtA1kcZ0hcynLhK2EWVTeuI8auCBXvoICNNVqFHWqT2riMNs51","created_at":null,"updated_at":"2023-03-16 15:02:39"}',
            ),
            56 => 
            array (
                'id' => 61,
                'user_id' => 1,
                'log_date' => '2023-03-24 12:05:53',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.106.167","user_agent":"Mozilla\\/5.0 (Linux; Android 12; M2010J19CG) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Mobile Safari\\/537.36"}',
            ),
            57 => 
            array (
                'id' => 62,
                'user_id' => 1,
                'log_date' => '2023-03-25 11:44:59',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.106.165","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.51"}',
            ),
            58 => 
            array (
                'id' => 63,
                'user_id' => 1,
                'log_date' => '2023-03-26 06:22:27',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.69.159","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.51"}',
            ),
            59 => 
            array (
                'id' => 64,
                'user_id' => 1,
                'log_date' => '2023-03-27 06:06:57',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.106.246","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.54"}',
            ),
            60 => 
            array (
                'id' => 65,
                'user_id' => 113,
                'log_date' => '2023-03-27 20:40:53',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.101.126","user_agent":"Mozilla\\/5.0 (Linux; Android 11; SM-A207F) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/110.0.0.0 Mobile Safari\\/537.36"}',
            ),
            61 => 
            array (
                'id' => 66,
                'user_id' => 1,
                'log_date' => '2023-03-27 20:57:53',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.97","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.54"}',
            ),
            62 => 
            array (
                'id' => 67,
                'user_id' => 113,
                'log_date' => '2023-03-27 22:32:29',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":"113","name":"Faisal Akbar","email":"faisal7794akbar@karmapack.id","foto":null,"username":"faisalakbar","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":"1","two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"8n3LtOXHvFOzVx7PzPUb35K3MNkrOqsKahYsLj28zpZbWHCtzY4v0HtI2Iio","created_at":"2023-03-16 16:19:35","updated_at":"2023-03-16 17:43:52"}',
            ),
            63 => 
            array (
                'id' => 68,
                'user_id' => 1,
                'log_date' => '2023-04-04 13:33:38',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"167.205.66.10","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.62"}',
            ),
            64 => 
            array (
                'id' => 69,
                'user_id' => 1,
                'log_date' => '2023-04-07 13:06:20',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"182.2.164.211","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/111.0.0.0 Safari\\/537.36 Edg\\/111.0.1661.62"}',
            ),
            65 => 
            array (
                'id' => 70,
                'user_id' => 1,
                'log_date' => '2023-04-11 22:42:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.161","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.34"}',
            ),
            66 => 
            array (
                'id' => 71,
                'user_id' => 1,
                'log_date' => '2023-04-12 14:50:01',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.85.134","user_agent":"Mozilla\\/5.0 (Linux; Android 12; M2010J19CG) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Mobile Safari\\/537.36"}',
            ),
            67 => 
            array (
                'id' => 72,
                'user_id' => 1,
                'log_date' => '2023-04-12 20:05:53',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.161","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            68 => 
            array (
                'id' => 73,
                'user_id' => 1,
                'log_date' => '2023-04-13 14:07:58',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.161","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            69 => 
            array (
                'id' => 74,
                'user_id' => 1,
                'log_date' => '2023-04-14 09:25:47',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.161","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            70 => 
            array (
                'id' => 75,
                'user_id' => 1,
                'log_date' => '2023-04-15 16:43:50',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.107.19","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.39"}',
            ),
            71 => 
            array (
                'id' => 76,
                'user_id' => 1,
                'log_date' => '2023-04-16 13:45:22',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.104.204","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.46"}',
            ),
            72 => 
            array (
                'id' => 77,
                'user_id' => 1,
                'log_date' => '2023-04-16 20:57:47',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.115.180","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.46"}',
            ),
            73 => 
            array (
                'id' => 78,
                'user_id' => 1,
                'log_date' => '2023-04-18 22:06:08',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"114.122.109.98","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/112.0.0.0 Safari\\/537.36 Edg\\/112.0.1722.48"}',
            ),
            74 => 
            array (
                'id' => 79,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:14:30',
                'table_name' => 'pengurus_periodes',
                'log_type' => 'edit',
                'data' => '{"id":1,"nama":"Kabinet Masagi","foto":"iconkabinet-ma20220425164938.png","dari":"2021","sampai":"2022","slug":"kabinet-masagi","slogan":"Ngabdi ka nagri bela ka nagara piken ngawujudkeun lemah nu sajati tur ngawangun cianjur pakidulan.","visi":"<p>\\"Terwujudnya KARMAPACK dan masyarakat Cianjur Kidul yang menjungjung tinggi nilai, dan\\r\\nnorma agama,\\r\\nsosial\\r\\nserta budaya lokal.\\"<\\/p>\\r\\n","misi":"<p>1. Meningkatkan pemahaman dan pengalaman keagamaan bagi anggota KARMAPACK dan masyarakat\\r\\nCianjru Kidul\\r\\n<br>\\r\\n2. Melakukan pengabdian kepada masyarakat<br>\\r\\n3. Menumbuhkan rasa cinta terhadap seni dan budaya kedaerahan<\\/p>\\r\\n","filosofi_logo":null,"status":0,"created_at":"2023-02-11 02:06:13","updated_at":"2023-02-18 17:39:38"}',
            ),
            75 => 
            array (
                'id' => 80,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:16:23',
                'table_name' => 'pengurus_periodes',
                'log_type' => 'create',
                'data' => '{"nama":"Situs ini masih dalam masa pengembangan.","slug":"situs-ini-masih-dalam-masa-pengembangan","dari":"2000","sampai":"2022","slogan":"slogan","status":0,"visi":"","misi":"","filosofi_logo":"","foto":"iconsitus-ini-20230420051623.jpg","updated_at":"2023-04-19T22:16:23.000000Z","created_at":"2023-04-19T22:16:23.000000Z","id":3}',
            ),
            76 => 
            array (
                'id' => 81,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:19:45',
                'table_name' => 'pengurus_periodes',
                'log_type' => 'delete',
                'data' => '{"id":3,"nama":"Situs ini masih dalam masa pengembangan.","foto":"iconsitus-ini-20230420051623.jpg","dari":"2000","sampai":"2022","slug":"situs-ini-masih-dalam-masa-pengembangan","slogan":"slogan","visi":"","misi":"","filosofi_logo":"","status":0,"created_at":"2023-04-20 05:16:23","updated_at":"2023-04-20 05:16:23"}',
            ),
            77 => 
            array (
                'id' => 82,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:40:46',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":82,"jabatan_id":63,"anggota_id":30,"created_at":"2023-02-11 02:06:14","updated_at":"2023-02-11 02:06:14"}',
            ),
            78 => 
            array (
                'id' => 83,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:40:46',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":83,"jabatan_id":63,"anggota_id":53,"created_at":"2023-02-11 02:06:14","updated_at":"2023-02-11 02:06:14"}',
            ),
            79 => 
            array (
                'id' => 84,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:40:46',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":84,"jabatan_id":63,"anggota_id":54,"created_at":"2023-02-11 02:06:14","updated_at":"2023-02-11 02:06:14"}',
            ),
            80 => 
            array (
                'id' => 85,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:40:46',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":85,"jabatan_id":63,"anggota_id":55,"created_at":"2023-02-11 02:06:14","updated_at":"2023-02-11 02:06:14"}',
            ),
            81 => 
            array (
                'id' => 86,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:40:46',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":86,"jabatan_id":63,"anggota_id":56,"created_at":"2023-02-11 02:06:14","updated_at":"2023-02-11 02:06:14"}',
            ),
            82 => 
            array (
                'id' => 87,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:40:46',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":87,"jabatan_id":63,"anggota_id":57,"created_at":"2023-02-11 02:06:14","updated_at":"2023-02-11 02:06:14"}',
            ),
            83 => 
            array (
                'id' => 88,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:40:46',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"30","jabatan_id":"63","updated_at":"2023-04-19T22:40:46.000000Z","created_at":"2023-04-19T22:40:46.000000Z","id":116}',
            ),
            84 => 
            array (
                'id' => 89,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:40:46',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"53","jabatan_id":"63","updated_at":"2023-04-19T22:40:46.000000Z","created_at":"2023-04-19T22:40:46.000000Z","id":117}',
            ),
            85 => 
            array (
                'id' => 90,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:40:46',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"54","jabatan_id":"63","updated_at":"2023-04-19T22:40:46.000000Z","created_at":"2023-04-19T22:40:46.000000Z","id":118}',
            ),
            86 => 
            array (
                'id' => 91,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:40:46',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"55","jabatan_id":"63","updated_at":"2023-04-19T22:40:46.000000Z","created_at":"2023-04-19T22:40:46.000000Z","id":119}',
            ),
            87 => 
            array (
                'id' => 92,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:40:46',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"56","jabatan_id":"63","updated_at":"2023-04-19T22:40:46.000000Z","created_at":"2023-04-19T22:40:46.000000Z","id":120}',
            ),
            88 => 
            array (
                'id' => 93,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:40:46',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"57","jabatan_id":"63","updated_at":"2023-04-19T22:40:46.000000Z","created_at":"2023-04-19T22:40:46.000000Z","id":121}',
            ),
            89 => 
            array (
                'id' => 94,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:07',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":116,"jabatan_id":63,"anggota_id":30,"created_at":"2023-04-20 05:40:46","updated_at":"2023-04-20 05:40:46"}',
            ),
            90 => 
            array (
                'id' => 95,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:07',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":117,"jabatan_id":63,"anggota_id":53,"created_at":"2023-04-20 05:40:46","updated_at":"2023-04-20 05:40:46"}',
            ),
            91 => 
            array (
                'id' => 96,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:07',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":118,"jabatan_id":63,"anggota_id":54,"created_at":"2023-04-20 05:40:46","updated_at":"2023-04-20 05:40:46"}',
            ),
            92 => 
            array (
                'id' => 97,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:07',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":119,"jabatan_id":63,"anggota_id":55,"created_at":"2023-04-20 05:40:46","updated_at":"2023-04-20 05:40:46"}',
            ),
            93 => 
            array (
                'id' => 98,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:07',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":120,"jabatan_id":63,"anggota_id":56,"created_at":"2023-04-20 05:40:46","updated_at":"2023-04-20 05:40:46"}',
            ),
            94 => 
            array (
                'id' => 99,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:07',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":121,"jabatan_id":63,"anggota_id":57,"created_at":"2023-04-20 05:40:46","updated_at":"2023-04-20 05:40:46"}',
            ),
            95 => 
            array (
                'id' => 100,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:07',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"30","jabatan_id":"63","updated_at":"2023-04-19T22:41:07.000000Z","created_at":"2023-04-19T22:41:07.000000Z","id":122}',
            ),
            96 => 
            array (
                'id' => 101,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:07',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"53","jabatan_id":"63","updated_at":"2023-04-19T22:41:07.000000Z","created_at":"2023-04-19T22:41:07.000000Z","id":123}',
            ),
            97 => 
            array (
                'id' => 102,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:07',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"54","jabatan_id":"63","updated_at":"2023-04-19T22:41:07.000000Z","created_at":"2023-04-19T22:41:07.000000Z","id":124}',
            ),
            98 => 
            array (
                'id' => 103,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:07',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"55","jabatan_id":"63","updated_at":"2023-04-19T22:41:07.000000Z","created_at":"2023-04-19T22:41:07.000000Z","id":125}',
            ),
            99 => 
            array (
                'id' => 104,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:07',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"56","jabatan_id":"63","updated_at":"2023-04-19T22:41:07.000000Z","created_at":"2023-04-19T22:41:07.000000Z","id":126}',
            ),
            100 => 
            array (
                'id' => 105,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:07',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"57","jabatan_id":"63","updated_at":"2023-04-19T22:41:07.000000Z","created_at":"2023-04-19T22:41:07.000000Z","id":127}',
            ),
            101 => 
            array (
                'id' => 106,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:13',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":122,"jabatan_id":63,"anggota_id":30,"created_at":"2023-04-20 05:41:07","updated_at":"2023-04-20 05:41:07"}',
            ),
            102 => 
            array (
                'id' => 107,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:13',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":123,"jabatan_id":63,"anggota_id":53,"created_at":"2023-04-20 05:41:07","updated_at":"2023-04-20 05:41:07"}',
            ),
            103 => 
            array (
                'id' => 108,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:13',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":124,"jabatan_id":63,"anggota_id":54,"created_at":"2023-04-20 05:41:07","updated_at":"2023-04-20 05:41:07"}',
            ),
            104 => 
            array (
                'id' => 109,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:13',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":125,"jabatan_id":63,"anggota_id":55,"created_at":"2023-04-20 05:41:07","updated_at":"2023-04-20 05:41:07"}',
            ),
            105 => 
            array (
                'id' => 110,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:13',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":126,"jabatan_id":63,"anggota_id":56,"created_at":"2023-04-20 05:41:07","updated_at":"2023-04-20 05:41:07"}',
            ),
            106 => 
            array (
                'id' => 111,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:13',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":127,"jabatan_id":63,"anggota_id":57,"created_at":"2023-04-20 05:41:07","updated_at":"2023-04-20 05:41:07"}',
            ),
            107 => 
            array (
                'id' => 112,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:13',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"30","jabatan_id":"63","updated_at":"2023-04-19T22:41:13.000000Z","created_at":"2023-04-19T22:41:13.000000Z","id":128}',
            ),
            108 => 
            array (
                'id' => 113,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:13',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"53","jabatan_id":"63","updated_at":"2023-04-19T22:41:13.000000Z","created_at":"2023-04-19T22:41:13.000000Z","id":129}',
            ),
            109 => 
            array (
                'id' => 114,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:13',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"54","jabatan_id":"63","updated_at":"2023-04-19T22:41:13.000000Z","created_at":"2023-04-19T22:41:13.000000Z","id":130}',
            ),
            110 => 
            array (
                'id' => 115,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:13',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"55","jabatan_id":"63","updated_at":"2023-04-19T22:41:13.000000Z","created_at":"2023-04-19T22:41:13.000000Z","id":131}',
            ),
            111 => 
            array (
                'id' => 116,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:13',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"56","jabatan_id":"63","updated_at":"2023-04-19T22:41:13.000000Z","created_at":"2023-04-19T22:41:13.000000Z","id":132}',
            ),
            112 => 
            array (
                'id' => 117,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:13',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"57","jabatan_id":"63","updated_at":"2023-04-19T22:41:13.000000Z","created_at":"2023-04-19T22:41:13.000000Z","id":133}',
            ),
            113 => 
            array (
                'id' => 118,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:41',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":128,"jabatan_id":63,"anggota_id":30,"created_at":"2023-04-20 05:41:13","updated_at":"2023-04-20 05:41:13"}',
            ),
            114 => 
            array (
                'id' => 119,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:41',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":129,"jabatan_id":63,"anggota_id":53,"created_at":"2023-04-20 05:41:13","updated_at":"2023-04-20 05:41:13"}',
            ),
            115 => 
            array (
                'id' => 120,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:41',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":130,"jabatan_id":63,"anggota_id":54,"created_at":"2023-04-20 05:41:13","updated_at":"2023-04-20 05:41:13"}',
            ),
            116 => 
            array (
                'id' => 121,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:41',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":131,"jabatan_id":63,"anggota_id":55,"created_at":"2023-04-20 05:41:13","updated_at":"2023-04-20 05:41:13"}',
            ),
            117 => 
            array (
                'id' => 122,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:41',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":132,"jabatan_id":63,"anggota_id":56,"created_at":"2023-04-20 05:41:13","updated_at":"2023-04-20 05:41:13"}',
            ),
            118 => 
            array (
                'id' => 123,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:41',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":133,"jabatan_id":63,"anggota_id":57,"created_at":"2023-04-20 05:41:13","updated_at":"2023-04-20 05:41:13"}',
            ),
            119 => 
            array (
                'id' => 124,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:41',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"30","jabatan_id":"63","updated_at":"2023-04-19T22:41:41.000000Z","created_at":"2023-04-19T22:41:41.000000Z","id":134}',
            ),
            120 => 
            array (
                'id' => 125,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:41',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"53","jabatan_id":"63","updated_at":"2023-04-19T22:41:41.000000Z","created_at":"2023-04-19T22:41:41.000000Z","id":135}',
            ),
            121 => 
            array (
                'id' => 126,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:41',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"54","jabatan_id":"63","updated_at":"2023-04-19T22:41:41.000000Z","created_at":"2023-04-19T22:41:41.000000Z","id":136}',
            ),
            122 => 
            array (
                'id' => 127,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:41',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"55","jabatan_id":"63","updated_at":"2023-04-19T22:41:41.000000Z","created_at":"2023-04-19T22:41:41.000000Z","id":137}',
            ),
            123 => 
            array (
                'id' => 128,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:41',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"56","jabatan_id":"63","updated_at":"2023-04-19T22:41:41.000000Z","created_at":"2023-04-19T22:41:41.000000Z","id":138}',
            ),
            124 => 
            array (
                'id' => 129,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:41:41',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"57","jabatan_id":"63","updated_at":"2023-04-19T22:41:41.000000Z","created_at":"2023-04-19T22:41:41.000000Z","id":139}',
            ),
            125 => 
            array (
                'id' => 130,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:44:38',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":134,"jabatan_id":63,"anggota_id":30,"created_at":"2023-04-20 05:41:41","updated_at":"2023-04-20 05:41:41"}',
            ),
            126 => 
            array (
                'id' => 131,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:44:38',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":135,"jabatan_id":63,"anggota_id":53,"created_at":"2023-04-20 05:41:41","updated_at":"2023-04-20 05:41:41"}',
            ),
            127 => 
            array (
                'id' => 132,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:44:38',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":136,"jabatan_id":63,"anggota_id":54,"created_at":"2023-04-20 05:41:41","updated_at":"2023-04-20 05:41:41"}',
            ),
            128 => 
            array (
                'id' => 133,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:44:38',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":137,"jabatan_id":63,"anggota_id":55,"created_at":"2023-04-20 05:41:41","updated_at":"2023-04-20 05:41:41"}',
            ),
            129 => 
            array (
                'id' => 134,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:44:38',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":138,"jabatan_id":63,"anggota_id":56,"created_at":"2023-04-20 05:41:41","updated_at":"2023-04-20 05:41:41"}',
            ),
            130 => 
            array (
                'id' => 135,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:44:38',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'delete',
                'data' => '{"id":139,"jabatan_id":63,"anggota_id":57,"created_at":"2023-04-20 05:41:41","updated_at":"2023-04-20 05:41:41"}',
            ),
            131 => 
            array (
                'id' => 136,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:44:38',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"30","jabatan_id":"63","updated_at":"2023-04-19T22:44:38.000000Z","created_at":"2023-04-19T22:44:38.000000Z","id":140}',
            ),
            132 => 
            array (
                'id' => 137,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:44:38',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"53","jabatan_id":"63","updated_at":"2023-04-19T22:44:38.000000Z","created_at":"2023-04-19T22:44:38.000000Z","id":141}',
            ),
            133 => 
            array (
                'id' => 138,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:44:38',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"54","jabatan_id":"63","updated_at":"2023-04-19T22:44:38.000000Z","created_at":"2023-04-19T22:44:38.000000Z","id":142}',
            ),
            134 => 
            array (
                'id' => 139,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:44:38',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"55","jabatan_id":"63","updated_at":"2023-04-19T22:44:38.000000Z","created_at":"2023-04-19T22:44:38.000000Z","id":143}',
            ),
            135 => 
            array (
                'id' => 140,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:44:38',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"56","jabatan_id":"63","updated_at":"2023-04-19T22:44:38.000000Z","created_at":"2023-04-19T22:44:38.000000Z","id":144}',
            ),
            136 => 
            array (
                'id' => 141,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:44:38',
                'table_name' => 'pengurus_anggotas',
                'log_type' => 'create',
                'data' => '{"anggota_id":"57","jabatan_id":"63","updated_at":"2023-04-19T22:44:38.000000Z","created_at":"2023-04-19T22:44:38.000000Z","id":145}',
            ),
            137 => 
            array (
                'id' => 142,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:05',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":1,"name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.com","foto":null,"username":"iseplutpinur","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"PIkbbqCffBYt0omRaXxKTHqxql6qlKeNUHMmElWi9sKJoAqdMU0TH94jxLnW","created_at":null,"updated_at":"2023-03-16 15:02:39"}',
            ),
            138 => 
            array (
                'id' => 143,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:05',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":17,"name":"NITA HALIMATUSSA\\u2019DIYAH","email":"nita_halimatus_syadiah@karmapack.id","foto":null,"username":"nita-hasa","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:44:47"}',
            ),
            139 => 
            array (
                'id' => 144,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:05',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":19,"name":"ABDUL MUHLIS","email":"abdul_muhlis@karmapack.id","foto":null,"username":"abdul_muhlis","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:46:56"}',
            ),
            140 => 
            array (
                'id' => 145,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:05',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":21,"name":"SUKIRMAN MAULANA","email":"sukirman_maulana@karmapack.id","foto":null,"username":"ukir","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:43:22"}',
            ),
            141 => 
            array (
                'id' => 146,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:05',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":22,"name":"DEWI","email":"dewi@karmapack.id","foto":null,"username":"2019dewi","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:29:15"}',
            ),
            142 => 
            array (
                'id' => 147,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:05',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":23,"name":"WIWIT AWALIYAH","email":"wiwit_awaliyah@karmapack.id","foto":null,"username":"wiwit_awaliyah","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:35:32"}',
            ),
            143 => 
            array (
                'id' => 148,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:05',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":24,"name":"SAEPUL ROHMAN","email":"saepul_rohman@karmapack.id","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:05:22"}',
            ),
            144 => 
            array (
                'id' => 149,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:05',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":26,"name":"HILMI FITRIANI","email":"hilmifuaidah0201@gmail.com","foto":null,"username":"hilmiff","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"jx1NL0GzRJMyD6YcurTcVCjY2ZQmaSbqt9FvDBjpi4m0SCpZTLr6MlkqvTCg","created_at":null,"updated_at":"2023-03-18 19:56:40"}',
            ),
            145 => 
            array (
                'id' => 150,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:05',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":27,"name":"SAMSUL MA\'ARIP","email":"samsul_maarip@karmapack.id","foto":null,"username":"samsul_m","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:22:57"}',
            ),
            146 => 
            array (
                'id' => 151,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:05',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":30,"name":"WAHID NURSIDIK","email":"wahid_nursidik@karmapack.id","foto":null,"username":"wahid_nursidik","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:25:14"}',
            ),
            147 => 
            array (
                'id' => 152,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":32,"name":"SALAFIA AL ZAHRA FAUZIA","email":"salafia_al_zahra_fauzia@karmapack.id","foto":null,"username":"salafiaazf","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:12:23"}',
            ),
            148 => 
            array (
                'id' => 153,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":33,"name":"YUSI YUSFITA","email":"yusi_yusfita@karmapack.id","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-10-01 14:54:52"}',
            ),
            149 => 
            array (
                'id' => 154,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":34,"name":"CUCU MARYAM NURPADILAH","email":"cucu_maryam_nurfadilah@karmapack.id","foto":null,"username":"cucumaryamnurpadilah","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-29 18:27:48"}',
            ),
            150 => 
            array (
                'id' => 155,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":35,"name":"RIFKI ALFAIZAR","email":"rifki_alfaizar@karmapack.id","foto":null,"username":"rifki_alfaizar","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:02:11"}',
            ),
            151 => 
            array (
                'id' => 156,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":43,"name":"MUHAMMAD CAHYADI","email":"muhammad_cahyadi@karmapack.id","foto":null,"username":"muhammad_cahyadi","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:52:06"}',
            ),
            152 => 
            array (
                'id' => 157,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":45,"name":"SRI AYUNI WAHYUDIN","email":"sri_ayuni_wahyudin@karmapack.id","foto":null,"username":"sri_ayuni_wahyudin","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:13:43"}',
            ),
            153 => 
            array (
                'id' => 158,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":46,"name":"ENCEP ABDUL HAKIM","email":"encep_abdul_hakim@karmapack.id","foto":null,"username":"ncepkazama27","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:02:44"}',
            ),
            154 => 
            array (
                'id' => 159,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":51,"name":"RURI C. HETIAWATI","email":"ruri_c_hetiawati@karmapack.id","foto":null,"username":"ruri_c_hetiawati","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:32:42"}',
            ),
            155 => 
            array (
                'id' => 160,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":54,"name":"APRILIA UTAMI HERDI","email":"aprilia_utami_herdi@karmapack.id","foto":null,"username":"aprilia_utami_herdi","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:03:07"}',
            ),
            156 => 
            array (
                'id' => 161,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":57,"name":"NU\\u2019MAN BASIR","email":"numanbasir253@gmail.com","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"qFENcieaBhFscP9bAXaWoMLt4ecrVtz9nPqqTW1Vcy8uNMo3HR4g2houlGsV","created_at":null,"updated_at":"2023-03-18 16:45:36"}',
            ),
            157 => 
            array (
                'id' => 162,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":58,"name":"MAULANA YUSUF","email":"maulyusuf246@gmail.com","foto":null,"username":"maulana_yusuf","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2023-03-18 19:27:30"}',
            ),
            158 => 
            array (
                'id' => 163,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":63,"name":"M SYAHRUL RAMADHAN","email":"m_syahrul_ramdan@karmapack.id","foto":null,"username":"m_syahrul_ramadhan","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:51:21"}',
            ),
            159 => 
            array (
                'id' => 164,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":64,"name":"ILHAM FAOZ","email":"ilham_faoz@karmapack.id","foto":null,"username":"ilham_faoz","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:12:42"}',
            ),
            160 => 
            array (
                'id' => 165,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":65,"name":"ADRIAN SYAMSYUL RAMLI","email":"adrian_samsul_ramli@karmapack.id","foto":null,"username":"adrian_syamsyul_ramli","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:30:41"}',
            ),
            161 => 
            array (
                'id' => 166,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":68,"name":"YUSUF MUGHNI","email":"yusuf_mughni@karmapack.id","foto":null,"username":"yusuf_mugni","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:22:14"}',
            ),
            162 => 
            array (
                'id' => 167,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":69,"name":"SITI SUROH HOLISOH","email":"siti_suroh_holisoh@karmapack.id","foto":null,"username":"siti_suroh_holisoh","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:28:05"}',
            ),
            163 => 
            array (
                'id' => 168,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":72,"name":"SRI HASTUTI","email":"sri_hastuti@karmapack.id","foto":null,"username":"sri_hastuti","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:26:36"}',
            ),
            164 => 
            array (
                'id' => 169,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":73,"name":"DERIS KUSNAEDI","email":"deris_kusnaedi@karmapack.id","foto":null,"username":"deris_kusnaedi","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:27:40"}',
            ),
            165 => 
            array (
                'id' => 170,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":74,"name":"Feri Firmansyah","email":"feryfirmansyah280@karmapack.id","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-10-24 10:22:51"}',
            ),
            166 => 
            array (
                'id' => 171,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":75,"name":"NISYARA SEPTIARANI SUKMA","email":"nisyara_septiarani_sukma@karmapack.id","foto":null,"username":"nisyara","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:25:16"}',
            ),
            167 => 
            array (
                'id' => 172,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":76,"name":"SITI NURJAMILAH","email":"siti_nurjamilah@karmapack.id","foto":null,"username":"jemi","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:09:19"}',
            ),
            168 => 
            array (
                'id' => 173,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":77,"name":"PUPUNG RUSTIKA","email":"pupung_rustika@karmapack.id","foto":null,"username":"pupung_rustika","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:25:56"}',
            ),
            169 => 
            array (
                'id' => 174,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":78,"name":"HASBI ABDUL HUSAIN","email":"hasbi_abdul_husain@karmapack.id","foto":null,"username":"hasbi_abdul_husain","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:22:52"}',
            ),
            170 => 
            array (
                'id' => 175,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":79,"name":"NUR HASAN","email":"hnur60443@gmail.com","foto":null,"username":"nurhasan","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"fSxtf2rPwLQQbxz0899Amo0M1ErOYweKMtdkN79SUb7CPl9VV9zAiaGgmB3n","created_at":null,"updated_at":"2023-03-18 20:33:38"}',
            ),
            171 => 
            array (
                'id' => 176,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":80,"name":"ARSILA KHAIRUNNISA","email":"arsila_khairunnisa@karmapack.id","foto":null,"username":"arsila_khairunnisa","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:29:24"}',
            ),
            172 => 
            array (
                'id' => 177,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":81,"name":"Sofy Tri Alfiani","email":"trifyalfiani@karmapack.id","foto":null,"username":"sofy","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:15:49"}',
            ),
            173 => 
            array (
                'id' => 178,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":82,"name":"Ragil JS Munster","email":"ragilsaputra211998@gmail.com","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$DsI7ChQu4aIwEwc0CTlCnO66pBuIukicAIA\\/oIKwHD4AIGzIHmHZO","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:18:37"}',
            ),
            174 => 
            array (
                'id' => 179,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":83,"name":"MUHAMMAD IMAN NURJAMAN","email":"muhammad_iman_nurjaman@karmapack.id","foto":null,"username":"m_iman_nurjaman","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:19:36"}',
            ),
            175 => 
            array (
                'id' => 180,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":84,"name":"Moh Indra Sukmara Esma","email":"Mohindra.Sukmaraesma29@gmail.com","foto":null,"username":"moh_indra_sukmara_esma","email_verified_at":null,"password":"$2y$10$VDWYFdw4u68s9nvOp7G8A.HunvtPJWsi0eIWD6VFnn8lT7U5vEQzq","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:15:39"}',
            ),
            176 => 
            array (
                'id' => 181,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":85,"name":"MUHAMMAD RAIHAN RAHMAN","email":"muhammad_raihan@karmapack.id","foto":null,"username":"m_raihan_rahman","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:16:47"}',
            ),
            177 => 
            array (
                'id' => 182,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":86,"name":"IMAT ROHIMAT","email":"imat_rohimat@karmapack.id","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-12-04 14:07:45"}',
            ),
            178 => 
            array (
                'id' => 183,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":87,"name":"Alvirda Damayanti Anwari","email":"alfirda_damayanti@karmapack.id","foto":null,"username":"alvirdada","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:37:09"}',
            ),
            179 => 
            array (
                'id' => 184,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":89,"name":"SILVIA ANGGRAENI","email":"silvia_anggraeni@karmapack.id","foto":null,"username":"silviaanggrnii","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:35:23"}',
            ),
            180 => 
            array (
                'id' => 185,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":90,"name":"AI YETI KOKOM KOMALASARI","email":"ai_yeti_kokom_komalasari@karmapack.id","foto":null,"username":"ai_yeti","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:38:45"}',
            ),
            181 => 
            array (
                'id' => 186,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":91,"name":"SIPA PUSPITA SARI","email":"sipapuspita620@gmail.com","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$DsI7ChQu4aIwEwc0CTlCnO66pBuIukicAIA\\/oIKwHD4AIGzIHmHZO","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-07 11:43:35"}',
            ),
            182 => 
            array (
                'id' => 187,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":92,"name":"ADE MUNAWAR","email":"ade_munawar@karmapack.id","foto":null,"username":"ade_munawar","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:50:36"}',
            ),
            183 => 
            array (
                'id' => 188,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":93,"name":"ABDUL AZIZ","email":"azizalhazkil24@gmail.com","foto":null,"username":"abdul_aziz","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"GJn4SEMcEYrKSjFByQB6A66lwjozGNjd4RYrmgesb2dRxP8OTopLhEV8MAg1","created_at":null,"updated_at":"2023-03-19 10:42:11"}',
            ),
            184 => 
            array (
                'id' => 189,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":94,"name":"GUSAERI","email":"gusaeri@karmapack.id","foto":null,"username":"gusaeri","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:56:04"}',
            ),
            185 => 
            array (
                'id' => 190,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":95,"name":"M. FAISHAL","email":"m_faishal@karmapack.id","foto":null,"username":"m_faishal","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:58:08"}',
            ),
            186 => 
            array (
                'id' => 191,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":96,"name":"NASRIATUL HAMIDAH","email":"nasriatulhamidah12@gmail.com","foto":null,"username":"nasiratul_hamidah","email_verified_at":null,"password":"$2y$10$DHRAQsNhXq6LEcSKHlr.2ejnw04g9NS39HT2gpsNa0TXWDv1ge37m","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:58:51"}',
            ),
            187 => 
            array (
                'id' => 192,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":97,"name":"NENG NURHASANAH","email":"neng_nurhasanah@karmapack.id","foto":null,"username":"nengnurhasanah","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:56:39"}',
            ),
            188 => 
            array (
                'id' => 193,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":98,"name":"SOLEHUDIN","email":"solehudin@karmapack.id","foto":null,"username":"solehudin","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:59:34"}',
            ),
            189 => 
            array (
                'id' => 194,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":99,"name":"AHMAD DIMYATI RIDWAN","email":"dimyatiridwanahmad@gmail.com","foto":null,"username":"ahmaddimyatiridwan16","email_verified_at":null,"password":"$2y$10$DsI7ChQu4aIwEwc0CTlCnO66pBuIukicAIA\\/oIKwHD4AIGzIHmHZO","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:44:12"}',
            ),
            190 => 
            array (
                'id' => 195,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":100,"name":"ELISA PUTRI ANGGRAENI","email":"elisa_putri_anggraeni@karmapack.id","foto":null,"username":"elisot","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2023-03-17 20:21:34"}',
            ),
            191 => 
            array (
                'id' => 196,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":101,"name":"WIDI AYUNI MAULIDIA","email":"widi@karmapack.id","foto":null,"username":"widimailcom","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:47:51"}',
            ),
            192 => 
            array (
                'id' => 197,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":106,"name":"RAMLAN HIDAYAT","email":"ramlan_hidayat@karmapack.id","foto":null,"username":"ramlan_hidayat","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 01:49:15"}',
            ),
            193 => 
            array (
                'id' => 198,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":108,"name":"AJENG KARTINI","email":"ajeng_kartini@karmapack.id","foto":null,"username":"ajeng_kartini_pcy","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:08:49"}',
            ),
            194 => 
            array (
                'id' => 199,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":109,"name":"M. ILHAM FAISAL","email":"ilham_faisal_debo@karmapack.id","foto":null,"username":"m_ilham_faisal","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:06:30"}',
            ),
            195 => 
            array (
                'id' => 200,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":110,"name":"RISMAWANTI AWALIAH S","email":"rismawas1073@gmail.com","foto":null,"username":"rismawannti","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"7ZKL26mR4eWPIfRSAOMa9zPaUCD51bORjbFqCP78NONGlUnRCUicgIQjV3Sx","created_at":null,"updated_at":"2023-03-18 20:44:26"}',
            ),
            196 => 
            array (
                'id' => 201,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":111,"name":"THIA RAMADHANI AMIN","email":"thia_ramadhani_amin@karmapack.id","foto":null,"username":"thia_ramadhani_amin","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":null,"updated_at":"2022-09-01 02:04:45"}',
            ),
            197 => 
            array (
                'id' => 202,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":114,"name":"Engkon Abdul Gani","email":"ukonag04@gmail.com","foto":null,"username":"engkon-abdul-gani20230316162922","email_verified_at":null,"password":"$2y$10$Lz80zGpWXp5XtuH9kmCMDO6FH1lKzO8v6EMgzxC6L\\/5Vz0udA.smi","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"DEoeCQOlOFCCaxMVqmJidEJAzWWUQ9cewGhUDAigAkh0b4AkBEGdY78VKD7l","created_at":"2023-03-16 16:29:23","updated_at":"2023-03-16 16:29:23"}',
            ),
            198 => 
            array (
                'id' => 203,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:50:06',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":185,"name":"Dian Nopiandi","email":"diannopiandi150995@gmail.com","foto":null,"username":"diannopiandi","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"kTq4Otx1xhLpNz1Ap8g9wrBCnzszTL92u8gh8rL6h0JaDeDD6o90UKbdGqQs","created_at":"2023-03-17 23:45:54","updated_at":"2023-03-18 18:56:09"}',
            ),
            199 => 
            array (
                'id' => 204,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:51:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":403,"parent_id":null,"title":"Laporan","icon":"fas fa-book","route":null,"sequence":47,"active":1,"type":1,"created_at":"2022-08-18 18:54:07","updated_at":"2023-02-19 20:36:03"}',
            ),
            200 => 
            array (
                'id' => 205,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:51:30',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":403,"updated_at":"2023-04-19T22:51:30.000000Z","created_at":"2023-04-19T22:51:30.000000Z","id":1230}',
            ),
            201 => 
            array (
                'id' => 206,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:51:30',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":4,"menu_id":403,"updated_at":"2023-04-19T22:51:30.000000Z","created_at":"2023-04-19T22:51:30.000000Z","id":1231}',
            ),
            202 => 
            array (
                'id' => 207,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:51:30',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":5,"menu_id":403,"updated_at":"2023-04-19T22:51:30.000000Z","created_at":"2023-04-19T22:51:30.000000Z","id":1232}',
            ),
            203 => 
            array (
                'id' => 208,
                'user_id' => 1,
                'log_date' => '2023-04-20 05:51:30',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":6,"menu_id":403,"updated_at":"2023-04-19T22:51:30.000000Z","created_at":"2023-04-19T22:51:30.000000Z","id":1233}',
            ),
            204 => 
            array (
                'id' => 209,
                'user_id' => 1,
                'log_date' => '2023-04-20 06:35:28',
                'table_name' => 'artikel',
                'log_type' => 'edit',
            'data' => '{"id":40,"nama":"DISKUSI PUBLIK","slug":"diskusi-publik","foto":"\\/assets\\/artikel\\/diskusi-pu16789612170.png","detail":"<div class=\\"_a9zs\\" style=\'display: inline; color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \\"Segoe UI\\", Roboto, Helvetica, Arial, sans-serif;\'><img data-bs-filename=\\"330374136_875625676874459_7239910307577273849_n.webp\\" style=\\"width: 640.4px;\\" src=\\"\\/assets\\/artikel\\/diskusi-pu16789612170.png\\"><br><div class=\\"_a9zs\\" style=\'display: inline; color: rgb(38, 38, 38); font-family: -apple-system, BlinkMacSystemFont, \\"Segoe UI\\", Roboto, Helvetica, Arial, sans-serif;\'>Alhamdulillah hirobbil alamin diskusi publik dengan tema \\"Peran Mahasiswa dan Pelajar dalam Mengawal Demokrasi\\" dalam rangka memperingati hari ulang tahun Karmapack ke-18 telah selesai dilaksanakan.<br><br>kami ucapkan terimakasih kepada semua pihak yang telah terlibat dalam kegiatan ini. Sampai jumpa di kegiatan selanjutnya &eth;&#159;&#145;&#139;&eth;&#159;&#145;&#139;<br><br>18 Tahun KARMAPACK<br>\\"Meningkatkan Semangat, Menguatkan Persaudaraan \\"<br><br>11 Februari 2023<br><br>HALING KU AING!<br><br>Instagram :&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz notranslate _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/orda_karmapack\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline;\\">@orda_karmapack<\\/a><br>Facebook : Orda Karmapack<br>__________________________<br><a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/ordakarmapack\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#ordakarmapack<\\/a>&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/karmapack\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#karmapack<\\/a>&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/karmapack2022\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#karmapack2022<\\/a>&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/kabinetsabilulungan\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#kabinetsabilulungan<\\/a>&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/halingkuaing\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#halingkuaing<\\/a>&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/harlah\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#harlah<\\/a>&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/harlahkarmapack18\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#harlahkarmapack18<\\/a>&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/harlahkarmapackke18\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#harlahkarmapackke18<\\/a>&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/orda\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#orda<\\/a>&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/cianjur\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#cianjur<\\/a>&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/cianjurkidul\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#cianjurkidul<\\/a>&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/diskusi\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#diskusi<\\/a>&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/diskusipublik\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#diskusipublik<\\/a>&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/mahasiswa\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#mahasiswa<\\/a>&nbsp;<a class=\\"x1i10hfl xjbqb8w x6umtig x1b1mbwd xaqea5y xav7gou x9f619 x1ypdohk xt0psk2 xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x16tdsg8 x1hl2dhg xggy1nq x1a2a7pz  _aa9_ _a6hd\\" href=\\"https:\\/\\/www.instagram.com\\/explore\\/tags\\/pelajar\\/\\" role=\\"link\\" tabindex=\\"0\\" style=\\"cursor: pointer; text-align: inherit; outline: none; border-width: 0px; border-style: initial; border-color: initial; -webkit-tap-highlight-color: transparent; list-style: none; touch-action: manipulation; display: inline; overflow-wrap: break-word;\\">#pelajar<\\/a><\\/div><\\/div>\\r\\n","excerpt":"Alhamdulillah hirobbil alamin diskusi publik dengan tema \\"Peran Mahasiswa dan Pelajar dalam Mengawal Demokrasi\\" dalam rangka memperingati hari ulang tahun Karmapack ke-18 telah selesai dilaksanakan.","counter":186,"date":"2023-02-11","status":1,"created_at":"2023-03-16 17:06:57","updated_at":"2023-04-19 04:46:56","user_id":1}',
            ),
            205 => 
            array (
                'id' => 210,
                'user_id' => 1,
                'log_date' => '2023-04-20 06:38:31',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":1,"name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.com","foto":"iseplutpinur20230316150353.png","username":"iseplutpinur","email_verified_at":null,"password":"$2y$10$qsdfd1sVrKFffagRNWzGve3m7kvJv.cfkgWquP7Bw04yZBIyyMcXu","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"PIkbbqCffBYt0omRaXxKTHqxql6qlKeNUHMmElWi9sKJoAqdMU0TH94jxLnW","created_at":null,"updated_at":"2023-04-20 05:50:05"}',
            ),
            206 => 
            array (
                'id' => 211,
                'user_id' => 1,
                'log_date' => '2023-04-20 06:38:31',
                'table_name' => 'anggotas',
                'log_type' => 'edit',
                'data' => '{"id":1,"nomor_anggota":null,"nama":"Isep Lutpi Nur","tanggal_lahir":"2000-08-10","jenis_kelamin":"laki-laki","angkatan":"2019","province_id":"32","regency_id":"3203","district_id":"3203051","village_id":"3203051006","alamat_lengkap":"Jl. Tipar, Rt 23\\/Rw 12 Dekat SD Negeri 1 Tipar","bio":"Gajah mati meninggalkan gading, harimau mati meninggalkan belang, manusia mati meninggalkan nama.","profesi":"Pelajar\\/Mahasiswa","foto":"iseplutpinur20230316150353.png","telepon":"085798132505","whatsapp":"85798132505","status":"ANGGOTA BIASA","user_id":1,"created_at":"2023-02-11 00:40:11","updated_at":"2023-03-16 15:03:53"}',
            ),
        ));
        
        
    }
}