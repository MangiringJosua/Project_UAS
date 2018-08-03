-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Agu 2018 pada 22.35
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bintangraya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 'admin'),
('admin', 'admin'),
('admin1', 'admin1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `email`) VALUES
('aldo', 'aldo', 'aldo17ti@mahasiswa.pcr.ac.id'),
('sapar', 'sapar', 'sapar17ti@mahasiswa.pcr.ac.id'),
('josua', 'josua', 'josua17ti@mahasiswa.pce.ac.id'),
('111', '111', 'ass@g.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `nama_makanan` varchar(212) NOT NULL,
  `harga_makanan` int(212) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`nama_makanan`, `harga_makanan`) VALUES
('Rendang', 10000),
('Ayam Bumbu', 8000),
('Dendeng Balado', 9000),
('Asam Padeh', 9000),
('Dendeng Batoko', 9000),
('Ikan Balado', 8000),
('Ayam Bakar Padang', 10000),
('Cincang Daging', 10000),
('Gurame Asam Manis', 13000),
('Udang Saus Padang', 12000),
('Gulai Ikan Kakap', 15000),
('Ayam Bakar Manis', 8000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `meja`
--

CREATE TABLE `meja` (
  `orang` int(11) NOT NULL,
  `tgl` varchar(250) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `nm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `meja`
--

INSERT INTO `meja` (`orang`, `tgl`, `jam`, `nm`) VALUES
(2, '06/08/2018', '2:43 AM', 'Aldo Abrianto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sarant` varchar(250) NOT NULL,
  `id_saran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`nama`, `email`, `sarant`, `id_saran`) VALUES
('Aldo Abrianto', 'aldo17ti@mahasiswa.pcr.ac.id', 'Mantap gan', 6),
('Josua Mangiring', 'josua17ti@mahasiswa.pce.ac.id', 'mantul gan', 7),
('Syaparudin bs', 'syaparudhin17ti@mahasiswa.pcr.ac.id', 'lanjutkan gan', 8),
('aldo', 'aldo', 'aldo', 9),
('aaa', 'aa', 'aa', 10),
('adsa', 'asdas', 'dasd', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`) VALUES
(1, 'google', '104190554992526528772', 'Aldo', 'Abrianto', 'aldo17ti@mahasiswa.pcr.ac.id', '', 'en', 'https://lh5.googleusercontent.com/-4Me0jyAx-_8/AAAAAAAAAAI/AAAAAAAAAEI/MSivTy6Jksw/photo.jpg', '', '2018-08-02 18:17:53', '2018-08-02 19:41:02'),
(2, 'google', '104190554992526528772', 'Aldo', 'Abrianto', 'aldo17ti@mahasiswa.pcr.ac.id', '', 'en', 'https://lh5.googleusercontent.com/-4Me0jyAx-_8/AAAAAAAAAAI/AAAAAAAAAEI/MSivTy6Jksw/photo.jpg', '', '2018-08-02 18:24:34', '2018-08-02 19:41:02'),
(3, 'google', '104190554992526528772', 'Aldo', 'Abrianto', 'aldo17ti@mahasiswa.pcr.ac.id', '', 'en', 'https://lh5.googleusercontent.com/-4Me0jyAx-_8/AAAAAAAAAAI/AAAAAAAAAEI/MSivTy6Jksw/photo.jpg', '', '2018-08-02 18:24:59', '2018-08-02 19:41:02'),
(4, 'google', '107409546483865675109', 'Aldo', 'Abrianto', 'aldo.abrianto98@gmail.com', 'male', 'in', 'https://lh5.googleusercontent.com/-HKx0-iZmGQ4/AAAAAAAAAAI/AAAAAAAAED8/XYPl2JObqTI/photo.jpg', 'https://plus.google.com/107409546483865675109', '2018-08-02 20:04:50', '2018-08-02 22:20:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
