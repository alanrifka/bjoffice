-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Feb 2024 pada 02.52
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bjoffice`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `idstatus` int(225) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`idstatus`, `keterangan`) VALUES
(1, 'Pending'),
(2, 'Verifikasi'),
(3, 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbagian`
--

CREATE TABLE `tbbagian` (
  `idbagian` varchar(12) NOT NULL,
  `bagian` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbbagian`
--

INSERT INTO `tbbagian` (`idbagian`, `bagian`) VALUES
('B00001', 'IT dan Pelaporan'),
('B00002', 'Kasi Marketing Kredit Umum I'),
('B00003', 'Kasi Operasional'),
('B00004', 'Kasi Marketing Kredit umum II'),
('B00005', 'Kasi Admin dan Analis'),
('B00006', 'Kasi Legal'),
('B00007', 'Kasi Remedial'),
('B00008', 'Kasi Marketing Funding'),
('B00009', 'Kasi Operasional KC'),
('B00010', 'Kasi Marketing Kredit Pegawai I'),
('B00011', 'Kasi Marketing Kredit Pegawai II'),
('B00012', 'Kasi Admin Kredit Pegawai'),
('B00013', 'Kasi Akuntansi dan SDM'),
('B00014', 'Kasi Umum'),
('B00015', 'Kasi Sekretariat'),
('B00016', 'Kasi SKK SKMR dan UKK APU-PPT PP SPM'),
('B00017', 'Kabag SKAI'),
('B00018', 'Kabag SDM dan UMUM'),
('B00019', 'Kepala Cabang Utama'),
('B00020', 'Kepala Cabang'),
('B00021', 'Direktur Operasional Dan Bisnis'),
('B00022', 'Direktur Kepatuhan SDM dan UMUM'),
('B00023', 'Direktur Utama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdisposisi`
--

CREATE TABLE `tbdisposisi` (
  `iddisposisi` int(225) NOT NULL,
  `tujuandisposisi` varchar(225) NOT NULL,
  `tgldisposisi` datetime(6) NOT NULL,
  `bataswaktu` date NOT NULL,
  `catatan` mediumtext NOT NULL,
  `idsuratmasuk` int(225) NOT NULL,
  `iduser` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbsuratkeluar`
--

CREATE TABLE `tbsuratkeluar` (
  `idsuratkeluar` int(12) NOT NULL,
  `nosuratkeluar` varchar(12) NOT NULL,
  `noreg` varchar(12) NOT NULL,
  `tujuansurat` varchar(225) NOT NULL,
  `isi` mediumtext NOT NULL,
  `klasifikasi` varchar(225) NOT NULL,
  `tglsuratkeluar` date NOT NULL,
  `keterangan` mediumtext NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbsuratkeluar`
--

INSERT INTO `tbsuratkeluar` (`idsuratkeluar`, `nosuratkeluar`, `noreg`, `tujuansurat`, `isi`, `klasifikasi`, `tglsuratkeluar`, `keterangan`, `file`) VALUES
(4, '8686', '6868', 'HHH', 'HHK', 'Sangat Rahasia', '2024-01-31', 'JGJGJGJGHJ', ''),
(5, '767', '775', 'aaa', 'aaa', 'Sangat Rahasia', '2024-01-31', 'asas', ''),
(6, '', '', '', '', '', '2024-01-31', 'hh', ''),
(7, '656', '3232', 'jjxvxzv', 'xvxvzxv', 'Sangat Rahasia', '2024-01-31', 'zxvxv', ''),
(8, '777', '77', 'kkkk', 'kkk', 'Sangat Rahasia', '2024-02-07', 'kkkkkk', ''),
(9, '8888', '8888', '888', '888', 'Rahasia', '2024-02-06', '88888', 'SO NOV 2023 web.pdf'),
(10, '22', '22', '22', '22', 'Sangat Rahasia', '2024-02-15', '222', 'Formulir Aktivasi Akun 0001.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbsuratmasuk`
--

CREATE TABLE `tbsuratmasuk` (
  `idsuratmasuk` int(12) NOT NULL,
  `nosurat` varchar(12) NOT NULL,
  `noreg` varchar(12) NOT NULL,
  `asalsurat` varchar(225) NOT NULL,
  `isi` mediumtext NOT NULL,
  `klasifikasi` varchar(225) NOT NULL,
  `derajat` varchar(225) NOT NULL,
  `tglsurat` date NOT NULL,
  `tglterima` date NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `status_surat` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbsuratmasuk`
--

INSERT INTO `tbsuratmasuk` (`idsuratmasuk`, `nosurat`, `noreg`, `asalsurat`, `isi`, `klasifikasi`, `derajat`, `tglsurat`, `tglterima`, `keterangan`, `status_surat`, `file`) VALUES
(1, '535', '5353', 'gdg', 'gdgd', 'Rahasia', 'segera', '2024-01-31', '2024-01-31', 'sgsg', 'Surat Masuk', 'materi website.pdf'),
(2, '788', '6868', 'nmmbm', 'bmb', 'Rahasia', 'biasa', '2024-01-31', '2024-01-31', 'fgh', 'Surat Masuk', 'Pakta Integritas Helpiati Tarigan .pdf'),
(3, '90080', '78678', 'bbmbv', 'cxvzxv', 'Rahasia', 'segera', '2024-01-31', '2024-01-31', 'xvxzvxvv', 'Surat Masuk', 'ktp.pdf'),
(4, '4T44', 'TETET', 'GDGD', 'DGGD', 'Rahasia', 'segera', '2024-01-31', '2024-01-31', 'DGDGDG', 'Surat Masuk', 'disposisi.pdf'),
(5, '888', '868', '6868', 'BFBC', 'Rahasia', 'biasa', '2024-01-31', '2024-01-31', 'XBBCB', 'Surat Masuk', 'form dispo terbaru.pdf'),
(6, '13', '13', '13', 'dfdfd', 'Sangat Rahasia', 'segera', '2024-02-01', '2024-02-01', 'sdsds', 'Surat Masuk', 'IDeb - ALAN RIFKA RUSTIANTORO.pdf'),
(7, '353', '3535', 'bbbb', 'bbb', 'Sangat Rahasia', 'segera', '2024-02-06', '2024-02-07', 'ggg', 'Surat Masuk', 'SO NOV 2023 web.pdf'),
(8, '123', '123', 'gjjjjj', 'jjjj', 'Sangat Rahasia', 'segera', '2024-02-07', '2024-02-07', 'jjjj', 'Surat Masuk', 'Formulir Aktivasi Akun 0001.pdf'),
(9, '55', '55', 'p3adk', '55', 'Sangat Rahasia', 'segera', '2024-02-13', '2024-02-13', '555', 'Surat Masuk', 'IDeb - ALAN RIFKA RUSTIANTORO.pdf'),
(10, '22', '22', 'bpbd', '22', 'Rahasia', 'segera', '2024-02-13', '2024-02-13', '22', 'Surat Masuk', 'kepada Dirut Bank Jogja.pdf'),
(11, '77', '77', 'bpbd', '77', 'Sangat Rahasia', 'segera', '2024-02-13', '2024-02-13', '777', 'Surat Masuk', 'form dispo terbaru.pdf'),
(12, '66', '66', '66', '66', 'Rahasia', 'segera', '2024-02-15', '2024-02-15', '666', 'Surat Masuk', 'IDeb - ALAN RIFKA RUSTIANTORO.pdf'),
(13, '44', '44', '44', '44', 'Sangat Rahasia', 'segera', '2024-02-15', '2024-02-15', '444', 'Surat Masuk', 'SO NOV 2023 web.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` varchar(10) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `nama`, `username`, `password`, `level`) VALUES
('K00001', 'superadmin', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'superadmin'),
('K00002', 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
('K00003', 'direksi', 'direksi', '18a5726d8227b237064ecef7d1f4e634', 'direksi'),
('K00004', 'alan', 'alan', '02558a70324e7c4f269c69825450cec8', 'superadmin'),
('K00005', 'jeki', 'jeki', 'fd764cfad74526761d41de9353ef0f70', 'direksi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indeks untuk tabel `tbbagian`
--
ALTER TABLE `tbbagian`
  ADD PRIMARY KEY (`idbagian`);

--
-- Indeks untuk tabel `tbdisposisi`
--
ALTER TABLE `tbdisposisi`
  ADD PRIMARY KEY (`iddisposisi`);

--
-- Indeks untuk tabel `tbsuratkeluar`
--
ALTER TABLE `tbsuratkeluar`
  ADD PRIMARY KEY (`idsuratkeluar`);

--
-- Indeks untuk tabel `tbsuratmasuk`
--
ALTER TABLE `tbsuratmasuk`
  ADD PRIMARY KEY (`idsuratmasuk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbsuratkeluar`
--
ALTER TABLE `tbsuratkeluar`
  MODIFY `idsuratkeluar` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbsuratmasuk`
--
ALTER TABLE `tbsuratmasuk`
  MODIFY `idsuratmasuk` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
