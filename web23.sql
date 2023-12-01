-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 29 Nov 2023 pada 16.47
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web23`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(3) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `subjudul` varchar(30) NOT NULL,
  `tgl` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gbr` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabel untuk menyimpan berita ';

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `subjudul`, `tgl`, `gbr`, `isi`) VALUES
(1, 'Lorem Ipsum Part 1', 'Neque porro quisquam est qui d', '2023-09-29 14:37:24', 'gbr.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu mollis sapien, id dictum leo. Proin molestie viverra lorem ut mollis. Aliquam maximus orci et neque tempus, a convallis ante porta. Proin dapibus suscipit nisi, vel suscipit neque tristique sed. Mauris commodo turpis et ornare pretium. Duis non dui sapien. Praesent molestie mi nunc, sit amet sagittis leo rutrum fringilla. In enim quam, scelerisque eget tincidunt eget, tempus et turpis. Curabitur a mollis nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>\r\n\r\n<p>Suspendisse porttitor mi id ullamcorper tempor. Nulla ut commodo diam, et lacinia elit. Integer ac nisi sit amet arcu malesuada bibendum sed vitae dolor. Curabitur consequat fermentum felis, in ullamcorper ante accumsan quis. Maecenas vestibulum mi eu lacus euismod ullamcorper. In dignissim enim gravida, consectetur ex in, tempor ex. Aliquam nec hendrerit orci, vel condimentum felis. Mauris eu mollis nisi. Duis nec dolor et elit rutrum commodo at in urna. Nullam non enim in tortor hendrerit egestas.</p>\r\n\r\n<p>Ut et dui nec mi sagittis efficitur. Integer bibendum eu metus ut interdum. Nam ut velit eu lacus congue posuere. In dignissim accumsan sapien, vitae iaculis dolor varius faucibus. Sed non suscipit elit. Vivamus vestibulum neque turpis, quis vulputate purus pellentesque a. Praesent tincidunt tortor ut nisi viverra, vel varius augue aliquam.</p>'),
(2, 'Lorem Ipsum Part 2', 'There is no one who loves pain', '2023-09-29 14:42:32', 'gbr.jpg', '<p>Sed sodales tempor pretium. Ut tristique ultricies mauris et convallis. Maecenas rhoncus volutpat lacus a pellentesque. Integer id tincidunt metus. In faucibus lacus venenatis pellentesque fermentum. Vestibulum at ornare massa, sed semper nulla. Vivamus imperdiet imperdiet elit non euismod. Praesent vehicula massa a placerat maximus. Phasellus id est purus. Quisque vitae tortor velit. Vivamus sodales nibh in iaculis malesuada.</p>\r\n\r\n<p>Etiam sit amet malesuada magna. Integer ac lectus nisl. Praesent sed imperdiet purus. Proin id nisl at mauris pharetra consequat nec in eros. Duis et laoreet arcu. Proin non tempus felis. Nam vel erat varius leo fringilla molestie a ac dolor. Quisque tempor arcu purus, vel tristique nunc sodales quis.</p>\r\n\r\n<p>Nam blandit pulvinar sapien ut ultrices. Vivamus in eros vehicula, ullamcorper tortor nec, convallis risus. Nullam id mollis risus. Vivamus ac commodo nunc. Vestibulum posuere libero est, quis euismod quam bibendum vel. Nullam ultrices massa sapien, et sagittis ipsum facilisis venenatis. Praesent at consequat urna. Sed id quam quis tortor rhoncus dictum nec sit amet dui. Quisque iaculis volutpat velit, ut iaculis risus aliquet id. Quisque et augue ut enim auctor ornare nec sed lacus. Nunc vulputate ullamcorper consequat. Aenean mollis ligula eget risus elementum consequat. Donec vitae luctus sapien.</p>\r\n\r\n<p>Vestibulum pulvinar dictum vehicula. Proin eget luctus sapien. Donec congue nec erat quis placerat. Proin vitae elit at tellus pellentesque dictum vel viverra enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In non sem nec dolor vulputate efficitur. Vivamus ornare nisl et consectetur eleifend. Donec quis rutrum massa. Cras condimentum diam et dolor consequat, et sodales justo ullamcorper. Vestibulum id vehicula nulla. Sed porta erat sit amet libero vestibulum convallis. Nam rutrum est suscipit placerat convallis. Nulla facilisi. Pellentesque.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komik`
--

CREATE TABLE `komik` (
  `id` int(11) NOT NULL,
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

INSERT INTO `komik` (`id`, `judul_komik`, `cover`, `genre`, `deskripsi`, `pengarang`, `tanggal`) VALUES
(1, 'Gundala Putra Petir', 'cover_gundala.jpg', 'Fantasi', 'Gundala adalah tokoh komik ciptaan Hasmi yang muncul pertama kali dalam komik Gundala Putra Petir pada tahun 1969. Genre komik adalah Fantasi. Jelas tampak pengaruh komik pahlawan super Amerika pada desain karakter maupun jenis kekuatannya, meskipun alur ceritanya bergaya Indonesia. Lokasi cerita sering digambarkan di kota Yogyakarta meskipun dalam filmnya pada tahun 1982 diceritakan berada di Jakarta. Gundala termasuk karakter komik yang cukup populer di Indonesia selain Si Buta dari Gua Hantu, Panji Tengkorak, dan Godam.', 'Hasmi', '2023-11-21 23:11:25'),
(2, 'Sri Asih', 'cover_SriAsih.jpg', 'Fantasi', 'Sri Asih adalah karakter adisatria (pahlawan super) ciptaan R. A. Kosasih.\r\nPertama kali rilis pada tahun 1954 di komik Sri Asih terbitan Penerbit Melodie, Bandung. Sri Asih adalah karakter adisatria pertama sekaligus adisatria perempuan pertama di Indonesia. Sri Asih adalah salah satu adisatria paling sakti di Jagat Bumilangit.', 'R.A. Kosasih', '2023-11-21 23:22:09'),
(3, 'Godam', 'Cover_Godam.jpeg', 'Fantasi', 'Bumi Langit', 'Ical', '2023-11-22 08:59:56'),
(4, 'Mandala', '156-9786024809133_MANDALA_-_GOLOK_SETAN.jpg', 'Fantasi', 'Menurut cerita legenda yang sudah turun temurun, ada sepasang golok sakti yang diciptakan oleh sepasang empu senjata ternama. Siapapun yang memiliki kedua bilah golok ini, akan menjadi pendekar terkuat di jagat persilatan. Namun, golok ini dikabarkan hilang dalam legendanya. Yang tersisa hanya kabar mengenai lokasinya, yang diketahui oleh setiap insan persilatan. Dan setiap tahun, para pendekar akan berkumpul di tempat ini, untuk saling bertarung hingga tersisaâ€¦', 'Mansyur Daman', '2023-11-26 21:44:39'),
(5, 'Aquanus', '206-Aquanus-Vol-2.jpg', 'Fantasi', 'Dhanus dilahirkan di planet Zyba, sebuah planet yang dihuni bangsa amfibi. Dhanus kemudian dibesarkan di bumi dan menjadi seorang superhero, Aquanus. Kediaman Aquanus, Pulau Berhala, sering menjadi tempat berkumpul rekan-rekan superheronya. Aquanus juga memiliki sebuah kapal selam berteknologi canggih.', 'Widodo Noor Slamet', '2023-11-26 21:55:46'),
(6, 'Si Buta dari Gua Hantu', '354-Si-Buta-Dari-Gua-Hantu-Cover.jpg', 'Fantasi', 'Si Buta Dari Gua Hantu Putih Hitam merupakah antologi komik yang menampilkan petualangan Barda Mandrawata setelah ia meninggalkan kampung halamannya di Banten, hingga sebelum ia beraksi dalam petualangannya di Rajamandala', 'Ganes Thiar Santosa', '2023-11-26 23:13:32');

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
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `komik`
--
ALTER TABLE `komik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
