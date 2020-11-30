-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2020 pada 12.01
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `write`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_about`
--

CREATE TABLE `tabel_about` (
  `id_about` int(11) NOT NULL,
  `about` mediumtext NOT NULL,
  `imgabout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_about`
--

INSERT INTO `tabel_about` (`id_about`, `about`, `imgabout`) VALUES
(1, '<h3 style=\"text-align:justify\"><strong>Nama Saya :</strong></h3>\r\n\r\n<p>Muhammad Budy Hartanto</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>NIM :</strong></h3>\r\n\r\n<p style=\"text-align:justify\">18090050</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>Kelas&nbsp; :</strong></h3>\r\n\r\n<p style=\"text-align:justify\">5D</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', 'a3d2b488d237836451899f751745d9d6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_akses`
--

CREATE TABLE `tabel_akses` (
  `id_akses` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_akses`
--

INSERT INTO `tabel_akses` (`id_akses`, `id_profil`, `id_menu`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 1, 14),
(15, 1, 15),
(16, 2, 1),
(17, 2, 2),
(18, 2, 3),
(19, 2, 4),
(20, 2, 5),
(21, 2, 11),
(22, 2, 12),
(23, 2, 13),
(24, 2, 14),
(25, 2, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_berita`
--

CREATE TABLE `tabel_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` mediumtext NOT NULL,
  `imgberita` varchar(255) NOT NULL,
  `penulis` varchar(128) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_berita`
--

INSERT INTO `tabel_berita` (`id_berita`, `judul`, `isi`, `imgberita`, `penulis`, `tanggal`) VALUES
(7, 'Luffy Melawan Kaido', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>\r\n', '642aa2ee880ff4eba2bc6a3424f41b48.jpg', 'UtsWp', '2020-10-28'),
(8, 'Di Tangan Yang Lain', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>\r\n', 'f93e940b2430a0c37ac5642645bbba93.jpg', 'UtsWp', '2020-10-28'),
(9, 'Naruto Dan Onepiece', '<p>Membaca manga di era modern ini bisa dilakukan tidak hanya melalui bentuk fisik bukunya saja, tapi juga melalui perangkat mobile yang digunakan sehari-hari. Diantara banyak perangkat yang memungkinkan orang membaca dengan nyaman dan mudah adalah iPad dan tablet Android yang memiliki ukuran layar lebih besar. Tapi beberapa orang juga menggunakan iPhone mereka untuk melakukan hal ini.</p>\r\n\r\n<p>Bagi para pengguna perangkat iOS dan Android yang suka membaca manga namun masih bingung aplikasi apa saja yang menyediakan layanan ini, <em>Tech In Asia</em> merangkum beberapa aplikasi yang dapat menampung kegiatan mengasyikkan ini.</p>\r\n', '1aa092e01fc7224aec13b8da1577ba71.jpg', 'Write', '2020-11-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_config`
--

CREATE TABLE `tabel_config` (
  `id_config` int(11) NOT NULL,
  `webname` varchar(128) NOT NULL,
  `imgheader` varchar(255) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `copyright` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_config`
--

INSERT INTO `tabel_config` (`id_config`, `webname`, `imgheader`, `alamat`, `email`, `telpon`, `facebook`, `instagram`, `twitter`, `youtube`, `copyright`) VALUES
(1, 'Write', '466fe11e85a5cb8d25d10d98f3373844.jpg', 'Tegal, Jawa Tengah, Indonesia', 'tamustahir@gmail.com', '0876-8768-0977', '#', '#', '#', '#', 'Write');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_counter`
--

CREATE TABLE `tabel_counter` (
  `id_counter` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `angka` int(11) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_counter`
--

INSERT INTO `tabel_counter` (`id_counter`, `judul`, `angka`, `icon`) VALUES
(1, 'Manga', 978, 'fas fa-book-open'),
(2, 'Anime', 929, 'fas fa-video'),
(3, 'Arc', 45, 'fas fa-file-signature');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_crew`
--

CREATE TABLE `tabel_crew` (
  `id_crew` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `urutan` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `imgcrew` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_crew`
--

INSERT INTO `tabel_crew` (`id_crew`, `nama`, `jabatan`, `urutan`, `facebook`, `instagram`, `twitter`, `youtube`, `imgcrew`) VALUES
(1, 'Monkey D luffy', 'Kapten', 1, '#', '#', '#', '#', 'bc58113c0ce2f4636a6a63d45ac149de.jpg'),
(2, 'Roronoa Zoro', 'Wakil Kapten', 2, '#', '#', '#', '#', '4bada111d0b516d8fcb997f4b3f74110.jpg'),
(3, 'Vinsmoke Sanji', 'Koki', 3, '#', '#', '#', '#', '2888804bcb8af43b2296486b1885301c.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_menu`
--

CREATE TABLE `tabel_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `dropdown` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  `aktif` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_menu`
--

INSERT INTO `tabel_menu` (`id_menu`, `menu`, `url`, `icon`, `dropdown`, `urutan`, `aktif`) VALUES
(1, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt', 0, 1, 'Yes'),
(2, 'Manajemen User', '#', 'fas fa-fw fa-user', 0, 2, 'Yes'),
(3, 'Menu', 'menu', '', 2, 1, 'Yes'),
(4, 'Profil', 'profil', '', 2, 1, 'Yes'),
(5, 'User', 'user', '', 2, 2, 'Yes'),
(11, 'Config', 'config', 'fa fa-cogs', 0, 3, 'Yes'),
(12, 'Biodata', 'about', 'far fa-address-card', 0, 4, 'Yes'),
(13, 'Blog', 'berita', 'fas fa-newspaper', 0, 5, 'Yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_profil`
--

CREATE TABLE `tabel_profil` (
  `id_profil` int(11) NOT NULL,
  `profil` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_profil`
--

INSERT INTO `tabel_profil` (`id_profil`, `profil`) VALUES
(2, 'UtsWp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `aktif` varchar(3) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `id_profil`, `username`, `password`, `nama_user`, `aktif`, `foto`) VALUES
(4, 0, 'UtsWp', 'superadmin', 'UtsWp', 'Uts', ''),
(5, 2, 'Write', '$2y$10$3Crh8is1ilxrT8pqSKYZTeRfKUI0Cr5yum2GPvb11Zguhm1pZpGTu', 'Write', 'Yes', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_about`
--
ALTER TABLE `tabel_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `tabel_akses`
--
ALTER TABLE `tabel_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indeks untuk tabel `tabel_berita`
--
ALTER TABLE `tabel_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tabel_config`
--
ALTER TABLE `tabel_config`
  ADD PRIMARY KEY (`id_config`);

--
-- Indeks untuk tabel `tabel_counter`
--
ALTER TABLE `tabel_counter`
  ADD PRIMARY KEY (`id_counter`);

--
-- Indeks untuk tabel `tabel_crew`
--
ALTER TABLE `tabel_crew`
  ADD PRIMARY KEY (`id_crew`);

--
-- Indeks untuk tabel `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tabel_profil`
--
ALTER TABLE `tabel_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_about`
--
ALTER TABLE `tabel_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_akses`
--
ALTER TABLE `tabel_akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tabel_berita`
--
ALTER TABLE `tabel_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tabel_config`
--
ALTER TABLE `tabel_config`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_counter`
--
ALTER TABLE `tabel_counter`
  MODIFY `id_counter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_crew`
--
ALTER TABLE `tabel_crew`
  MODIFY `id_crew` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tabel_profil`
--
ALTER TABLE `tabel_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
