-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Des 2023 pada 08.07
-- Versi server: 5.7.24
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invitoon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chapter`
--

CREATE TABLE `chapter` (
  `komik_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `no_chapter` int(11) NOT NULL,
  `likes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chapter`
--

INSERT INTO `chapter` (`komik_id`, `chapter_id`, `no_chapter`, `likes`) VALUES
(1, 10001, 1, 11),
(1, 10002, 2, 13),
(1, 10003, 3, 16),
(2, 20001, 1, 12),
(7, 70001, 1, 17),
(10, 100000, 0, NULL),
(10, 100001, 1, 20),
(10, 100002, 2, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `chapter_id` int(11) NOT NULL,
  `gambar1` text NOT NULL,
  `gambar2` text NOT NULL,
  `gambar3` text NOT NULL,
  `gambar4` text NOT NULL,
  `gambar5` text NOT NULL,
  `gambar6` text NOT NULL,
  `gambar7` text NOT NULL,
  `gambar8` text NOT NULL,
  `gambar9` text NOT NULL,
  `gambar10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komik`
--

CREATE TABLE `komik` (
  `komik_id` int(11) NOT NULL,
  `judul_komik` varchar(50) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komik`
--

INSERT INTO `komik` (`komik_id`, `judul_komik`, `cover`, `genre`, `deskripsi`, `pengarang`, `tanggal`) VALUES
(1, 'Gundala Putra Petir', 'cover_gundala.jpg', 'Fantasi', 'Gundala adalah tokoh komik ciptaan Hasmi yang muncul pertama kali dalam komik Gundala Putra Petir pada tahun 1969. Genre komik adalah Fantasi. Jelas tampak pengaruh komik pahlawan super Amerika pada desain karakter maupun jenis kekuatannya, meskipun alur ceritanya bergaya Indonesia. Lokasi cerita sering digambarkan di kota Yogyakarta meskipun dalam filmnya pada tahun 1982 diceritakan berada di Jakarta. Gundala termasuk karakter komik yang cukup populer di Indonesia selain Si Buta dari Gua Hantu, Panji Tengkorak, dan Godam.', 'Hasmi', '2023-11-21 23:11:25'),
(2, 'Sri Asih', 'cover_SriAsih.jpg', 'Fantasi', 'Sri Asih adalah karakter adisatria (pahlawan super) ciptaan R. A. Kosasih.\r\nPertama kali rilis pada tahun 1954 di komik Sri Asih terbitan Penerbit Melodie, Bandung. Sri Asih adalah karakter adisatria pertama sekaligus adisatria perempuan pertama di Indonesia. Sri Asih adalah salah satu adisatria paling sakti di Jagat Bumilangit.', 'R.A. Kosasih', '2023-11-21 23:22:09'),
(3, 'Godam', 'Cover_Godam.jpeg', 'Fantasi', 'Seorang bayi dibuang oleh orang tuanya, panglima perang yang gagal kudeta, karena khawatir akan dibunuh oleh sang penguasa. Bayi itu ditemukan oleh sekelompok perampok dan diberi nama Godam. Setelah dewasa, Godam berpetualang sampai mendapatkan baju, jubah dan cincin sakti. Namun karena melanggar sumpah, Godam dihukum dengan dimasukkan ke dalam cincin sakti. Bapa Kebenaran kemudian memberikan cincin itu kepada Awang, seorang manusia bumi yang sederhana. Setiap kali Awang menggunakan cincin tersebut, ia akan berubah wujud menjadi Godam.', 'Widodo Noor Slamet', '2023-11-22 08:59:56'),
(4, 'Mandala', '156-9786024809133_MANDALA_-_GOLOK_SETAN.jpg', 'Fantasi', 'Menurut cerita legenda yang sudah turun temurun, ada sepasang golok sakti yang diciptakan oleh sepasang empu senjata ternama. Siapapun yang memiliki kedua bilah golok ini, akan menjadi pendekar terkuat di jagat persilatan. Namun, golok ini dikabarkan hilang dalam legendanya. Yang tersisa hanya kabar mengenai lokasinya, yang diketahui oleh setiap insan persilatan. Dan setiap tahun, para pendekar akan berkumpul di tempat ini, untuk saling bertarung hingga tersisaâ€¦', 'Mansyur Daman', '2023-11-26 21:44:39'),
(5, 'Aquanus', '206-Aquanus-Vol-2.jpg', 'Fantasi', 'Dhanus dilahirkan di planet Zyba, sebuah planet yang dihuni bangsa amfibi. Dhanus kemudian dibesarkan di bumi dan menjadi seorang superhero, Aquanus. Kediaman Aquanus, Pulau Berhala, sering menjadi tempat berkumpul rekan-rekan superheronya. Aquanus juga memiliki sebuah kapal selam berteknologi canggih.', 'Widodo Noor Slamet', '2023-11-26 21:55:46'),
(6, 'Si Buta dari Gua Hantu', '354-Si-Buta-Dari-Gua-Hantu-Cover.jpg', 'Fantasi', 'Si Buta Dari Gua Hantu Putih Hitam merupakah antologi komik yang menampilkan petualangan Barda Mandrawata setelah ia meninggalkan kampung halamannya di Banten, hingga sebelum ia beraksi dalam petualangannya di Rajamandala', 'Ganes Thiar Santosa', '2023-11-26 23:13:32'),
(7, 'The Wailing Perversion', '7-d70b218e-70d4-45e8-a8dd-da72351147d0.jpg', 'Aksi', 'Ananta, seorang prajurit barbar yang dikutuk oleh dewa iblis. Untuk menghukum inkarnasi sayap, yang mengubah nasibnya menjadi sebuah tragedi, dia tanpa henti berpesta dengan dewa iblis dalam kisah darah, keringat, daging, dan tulang yang mendambakan balas dendam.', 'Jodeon', '2023-12-03 22:37:25'),
(8, 'Evolution Frenzy', '16-frenzy.jpg', 'Aksi', 'Setelah Duan Fei meninggal di kehidupan sebelumnya, dia terlahir kembali dan kembali ke 20 tahun yang lalu, beberapa jam sebelum terkena virus. Penyesalan Duan Fei selama 20 tahun itu akhirnya dapat diatasi dengan menggunakan 20 tahun pengetahuannya dari kehidupan sebelumnya untuk mempersenjatai dirinya di dunia saat ini. Duan Fei, yang telah memperoleh pohon evolusi, terus meningkatkan kekuatannya. Meski dia satu-satunya yang selamat di kehidupan sebelumnya, kini dia menjadi pahlawan dunia di kehidupan ini', 'MOKF', '2023-12-03 23:09:01'),
(9, 'Fuuto Pi', '965-Fuuto Pi.jpg', 'Misteri', 'seorang detektif swasta bernama ShÅtarÅ Hidari bekerja di Kantor Detektif Narumi bersama rekannya, Raito \"Philip\" Sonozaki, satu-satunya orang yang selamat dari keluarga Sonozaki yang dapat mengakses Perpustakaan Gaia. Mereka berdua berubah menjadi Kamen Rider W, yang melindungi kota Futo dari Dopant, monster yang diciptakan oleh Gaia Memory. Mereka memecahkan kasus bersama atasan mereka, Akiko Narumi, yang biasa bergabung dalam penyelidikan mereka beserta suaminya, RyÅ« Terui, seorang anggota kepolisian sekaligus Kamen Rider Accel.', 'Riku Sanjo', '2023-12-03 23:35:56'),
(10, 'My Eternal Reign', '44-My Eternal Reign - Cover.jpg', 'Aksi', 'Dunia tiba-tiba diserang oleh fenomena dungeon. Umat manusia dapat mengatasi bencana ini berkat para Awakener yang dapat mengendalikan Kartu Gerbang yang muncul bersamaan dengan dungeon. Di tengah-tengah itu, Okita Hikaru, seseorang yang hampir tidak dapat memenuhi syarat sebagai Awakener, ditindas oleh Elite Awakener di sebuah perusahaan yang berurusan dengan penaklukan ruang bawah tanah sebagai sebuah bisnis. Suatu hari, setelah dia didorong ke ambang kematian oleh monster penjara bawah tanah yang ganas dan pengkhianatan yang keji, Okita memperoleh kekuatan di luar kemampuan manusia, kekuatan yang memungkinkannya untuk memanipulasi Kartu Gerbang tanpa batas. Okita, yang telah menjadi makhluk terkuat yang melampaui hukum dunia ini, tidak akan pernah mengakhiri serangan baliknya terhadap mereka yang telah menindasnya!', 'OTCL', '2023-12-05 14:51:10'),
(11, 'Life, Once Again!', '92-loa.jpg', 'Romantis', 'Apakah Anda ingin hidup sekali lagi dengan kehidupan yang damai dan normal seperti kebanyakan orang? Begitulah kehidupan yang saya jalani, dengan pekerjaan, pasangan yang tepat, dan keluarga yang saya cintai. Namun, ketika saya diberi tawaran untuk memulai hidup lagi, kegembiraan itu segera memudar. Kenangan dari kehidupan sebelumnya semakin lama semakin kabur, dan ketakutan tidak dapat bertemu dengan istri dan anak perempuan saya melanda saya. Lebih buruk lagi, ada kesempatan untuk mengejar mimpi masa lalu saya sebagai seorang aktor, sesuatu yang sudah saya lepaskan. Saya bertanya-tanya, jika saya menjalani hidup ini dengan cara yang berbeda, apakah saya akan kehilangan kesempatan bertemu dengan keluarga saya? Terjebak antara keluarga dan impian yang pernah saya tinggalkan, saya harus membuat pilihan yang sulit.', 'Wise Dragon', '2023-12-07 23:12:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `namadepan` varchar(50) NOT NULL,
  `namabelakang` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `namadepan`, `namabelakang`, `username`, `password`) VALUES
(1, 'Miftah', 'Adha', 'root', '12345678'),
(9, 'Miftah', 'Adha', 'Mynzuw', '$2y$10$FAb9a5spJPUArOzPaqsCQOS0Ye7v5ehyFxsD7hT/pb1eUX0YyXJKe'),
(11, 'Adha', 'Miftah', 'Kitsu', '$2y$10$F3EjoYMnqTCCxwIXbqNJlej.pcsW2vxpecKz2cft6wmVVOso8tO5G'),
(13, 'www', 'rrr', 'adwdads', '$2y$10$jSXzkjE4sY.Bu1m1W55bqeQ2ovDPp7yT1N1abSg5ZYoEUJUKS4QZe'),
(16, 'Ace', 'Ukiyo', 'Geats', '$2y$10$jVpRb62Q0WkF4T4yj7yatucUgmX/ZMP.APVqm6fBR5niPVL/DJIHO'),
(17, 'Miftah', 'Adha', 'geatsss', '1234P3mr0gr4m4nw3b.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`chapter_id`),
  ADD KEY `komik_id` (`komik_id`);

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD KEY `chapter_id` (`chapter_id`);

--
-- Indeks untuk tabel `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`komik_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komik`
--
ALTER TABLE `komik`
  MODIFY `komik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
