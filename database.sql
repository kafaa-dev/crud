-- phpMyAdmin SQL Dump ing
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 19. Oktober 2020 jam 18:28
-- Versi Server: 5.1.36
-- Versi PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `id_pesanan` varchar(12) NOT NULL,
  `nm_pengirim` varchar(50) NOT NULL,
  `nm_penerima` varchar(50) NOT NULL,
  `nm_barang` varchar(100) NOT NULL,
  `jasa_kirim` text NOT NULL,
  `harga` bigint(19) NOT NULL,
  `jumlah_beli` int(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nm_pengirim`, `nm_penerima`, `nm_barang`, `jasa_kirim`, `harga`, `jumlah_beli`, `alamat`) VALUES
('PSN000000002', 'Edy H', 'Silitonga', 'Drone Pakai Baterai Jam', 'ESL Express', 100000, 9, 'Jl Perniagaan Kota 13 Jakarta Barat'),
('PSN000000003', 'Widya', 'Ningsih', 'Rambut Harimau Palsu', 'Shopee Express', 11, 7, 'Jl Angkasa Pura 9 Kemayoran Jakarta Pusat'),
('PSN000000005', 'Heriyanto', 'Syahid', 'Aksesoris Motor', 'Pos Indonesia', 13500450, 1, 'Jl Kawi Kawi Atas No 39 Jakarta Pusat'),
('PSN000000006', 'Bunda Fitri', 'Azzam', 'Baju Doraemon', 'TIKI Reguler', 25000000, 3, 'Jl Raya Hankam No 39 Ujung Aspal Pondok Gede Bekasi Jawa Barat'),
('PSN000000007', 'Azma Tsabita', 'Lala Tobing SH', 'Buku PLBJ', 'JNE Trucking', 2147483647, 4, 'Jl Johar Baru V Percetakan Negara Jakarta Pusat'),
('PSN000000008', 'Arsala Diinul Haqq', 'Hafizh', 'Pancing Ikan Lele', 'Sicepat Express', 12000000, 9, 'Jl Kawi Kawi Bawah 78 Percetakan Negara Jakarta Pusat'),
('PSN000000009', 'Indah', 'Prastyawati', 'Pizza Hut Pedes Manis Pahit', 'GRAB Instant', 125000, 3, 'Jl Rawamanangun 9 Pemuda Jakarta Timur'),
('PSN000000010', 'Thei', 'Mangkulangitbumi', 'Tahu Tempe Bacem', 'Sicepat Express', 45000, 1, 'Jl Dempo 9 Ilir 3 Palembang'),
('PSN000000011', 'Parto', 'Wiryo', 'Sepeda Gunung Meletus', 'J&T Reguler', 33500000, 2, 'Jl Hang Tuah 7 Koja Jakarta Utara');
