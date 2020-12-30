-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2020 pada 10.14
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_library`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `adminId` int(255) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`adminId`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `BooksId` int(11) NOT NULL,
  `BooksTitle` varchar(100) NOT NULL,
  `Authors` varchar(100) NOT NULL,
  `Edition` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`BooksId`, `BooksTitle`, `Authors`, `Edition`, `Status`) VALUES
(1, 'Struktur Data', 'Profesor Hajime', '2010', 'Available'),
(2, 'Teknologi Informasi', 'Profesor Budi Baniadil', '2012', 'Available'),
(3, 'Sistem Informasi', 'Profesor Giant', '2001', 'Not Available'),
(6, 'Statistika', 'Fredy Gambling', '2015', 'Available'),
(7, 'Bahasa Inggris', 'Dominic Vyper', '2020', 'Available');

-- --------------------------------------------------------

--
-- Struktur dari tabel `borrow`
--

CREATE TABLE `borrow` (
  `borrowId` int(255) NOT NULL,
  `adminId` int(10) NOT NULL,
  `BooksId` int(11) NOT NULL,
  `StudentName` varchar(25) NOT NULL,
  `id_student` int(11) NOT NULL,
  `bookName` varchar(30) NOT NULL,
  `borrowDate` varchar(12) NOT NULL,
  `returnDate` varchar(12) NOT NULL,
  `fine` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `borrow`
--

INSERT INTO `borrow` (`borrowId`, `adminId`, `BooksId`, `StudentName`, `id_student`, `bookName`, `borrowDate`, `returnDate`, `fine`) VALUES
(23, 0, 2, 'Fred Rodiguez', 2020001, 'Teknologi Informasi', '2020-12-15', '18/12/2020', 'Paid'),
(24, 2, 1, 'Fred Rodiguez', 2020001, 'Struktur Data', '2020-12-02', '5/12/2020', 'Paid'),
(25, 1, 7, 'Fred Rodiguez', 2020001, 'Bahasa Inggris', '2020-12-23', '26/12/2020', '0'),
(26, 1, 3, 'Scott McTominay', 2020002, 'Sistem Informasi', '2020-12-21', '24/12/2020', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_student` int(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `StudentName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_student`, `password`, `StudentName`, `email`) VALUES
(2020001, 'fred', 'Fred Rodiguez', 'fred@gmail.com'),
(2020002, 'scott', 'Scott McTominay', 'scott@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BooksId`);

--
-- Indeks untuk tabel `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrowId`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_student`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `BooksId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrowId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_student` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020004;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
