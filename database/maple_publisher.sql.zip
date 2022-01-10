-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2022 pada 14.34
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maple_publisher`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukuterbit`
--

CREATE TABLE `bukuterbit` (
  `id_buku` bigint(20) UNSIGNED NOT NULL,
  `judul_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_buku` enum('novel','senandika','puisi','cerpen','non-fiksi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `sinopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bukuterbit`
--

INSERT INTO `bukuterbit` (`id_buku`, `judul_buku`, `penulis`, `jenis_buku`, `tahun_terbit`, `sinopsis`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kala', 'Alya Nurfitri', 'novel', 2022, 'Terkadang, tidak semua hal dapat berjalan sesuai harapan. Tidak semua hal dapat bertahan sesuai harapan. Ditinggal pergi selamanya oleh orang-orang terdekat membuat Dellisa merasa bahwa dirinya adalah biang dari segala duka. Kedekatannya dengan orang baru malah menjadi hal yang paling Dellisa takutkan.\r\nSiapa sangka pacaran magang adalah salah satu jalan untuk melupakan seseorang? Dellisa dan seseorang yang ditemuinya saat kuliah, membuat sebuah perjanjian untuk saling menggenggam. Terdengar konyol dan tidak berperasaan. Mampukah lelaki itu membuat Dellisa luluh? Atau dia malah tersingkir dan menjadi asing di mata Dellisa? Atau mungkin, dia akan menyerah karena sulitnya mendapatkan hati Dellisa yang masih terjebak di masa silam?', '1641774632886.png', '2022-01-09 17:30:32', '2022-01-09 17:30:32'),
(2, 'A Cup of Tea', 'Gita Savitri', 'non-fiksi', 2020, '“Mulut lo nggak sesuai sama jilbab lo.“\r\n\r\n“Sekolah di Jerman tapi akhlaknya nol.“\r\n\r\n“Bad influencer! Di mana manner lo?!“\r\n\r\n“Halah banyak bacot lo. Dasar attention seeker!“\r\n\r\n“Lo nggak dididik dengan benar sama orang tua lo.“\r\n\r\nKita nggak butuh pisau untuk membunuh seseorang. Kata-kata yang ditujukan ke gue itu tentu bikin gue down. Semuanya ingin gue hilangkan dari ingatan, tapi nggak pernah berhasil. Nggak mengacuhkan omongan orang lain ternyata nggak mudah. Gue udah coba segala cara; self healing, curhat ke teman, curhat ke psikolog, semuanya. Namun, sampai sekarang kejadian itu masih terasa fresh di otak, seakan-akan baru kemarin menimpa gue.\r\n\r\nCyber bullying ini salah satu yang gue ceritakan di A Cup of Tea. Selain itu, gue menuliskan tentang perpisahan yang gue lewati, perjalanan yang mengubah diri, kehidupan setelah pernikahan, hingga kebahagiaan yang gue cari. Lewat buku ini gue berharap kita mendapat kekuatan untuk terus jalan, dan mencari untuk menemukan. “We are a fighter. Don’t let other people say otherwise.”', '1641775287955.jpg', '2022-01-09 17:41:27', '2022-01-10 05:35:50'),
(3, 'Bukan Buku Nikah', 'Ria Ricis', 'novel', 2020, 'Apakah cinta serumit itu? Jatuh, pergi, datang, patah, lalu kembali.\r\nTapi, yang aku tahu, cinta itu ....\r\n\r\nAwan:\r\nYang namanya perasaan, nggak bisa bohong. Apalagi, kalau sudah sayang. Mendapatkan hati kamu itu tidak mudah. Jadi, tidak mungkin kutinggalkan begitu saja. Aku hanya butuh waktu, hingga saatnya siap dengan kalimat, “Boleh, kah, aku menjadi pendamping dalam suka dan duka di hidupmu?”\r\n\r\nRangga:\r\nNggak ada alasan untuk laki-laki yang meninggalkan ketika diminta kepastian. Perempuan itu bukan wahana permainan. Yang dengan gampang datang lalu ditinggalkan. Jangan datang hanya memberikan pilihan. Karena perempuan itu bukan memberi pilihan, tapi kepastian.\r\n\r\nSaya berharap dengan siapa pun nanti saya berjodoh, saya ingin dia datang membawa kepastian. Bukan pamit dan meminta kesempatan.', '1641782708951.png', '2022-01-09 19:45:08', '2022-01-09 19:45:08'),
(4, 'Dongeng-dongeng yang Tak Utuh', 'Boy Candra', 'senandika', 2019, 'Selain di langit, Tuhan juga menciptakan surga\r\ndi tatap matamu dan di setiap ketidakwarasanku akan kamu.\r\n\r\ningatlah; aku adalah pelukan hangat\r\nyang kau ubah menjadi pipi yang basah.\r\n\r\nLalu,\r\n\r\n--berakhir patah.', '1641787114804.png', '2022-01-09 20:58:34', '2022-01-09 20:58:34'),
(5, 'Garis Waktu', 'Fiersa Besari', 'senandika', 2019, 'Pada sebuah garis waktu yang merangkak maju, akan ada saatnya kau bertemu dengan satu orang yang mengubah hidupmu untuk selamanya.\r\n\r\nPada sebuah garis waktu yang merangkak maju, akan ada saatnya kau terluka dan kehilangan pegangan.\r\n\r\nPada sebuah garis waktu yang merangkak maju, akan ada saatnya kau ingin melompat mundur pada titik-titik kenangan tertentu.\r\n\r\nMaka, ikhlaskan saja kalau begitu. Karena sesungguhnya, yang lebih menyakitkan dari melepaskan sesuatu adalah berpegangan pada sesuatu yang menyakitimu secara perlahan.', '1641792293960.png', '2022-01-09 22:24:53', '2022-01-10 05:35:28'),
(6, 'Geez & Ann', 'Rintik Sedu', 'novel', 2020, 'Berkisah tentang perjalanan sepasang anak muda yang tengah jatuh cinta dan menemukan arti sebuah komitmen. Ann merupakan sosok gadis mandiri yang selalu berkata apa adanya, jago meledek, dan menginginkan cinta yang dapat bertahan lama. Ia jatuh cinta dengan Geez, yang digambarkan sebagai laki-laki dambaan dengan sifatnya yang misterius. Pertemuan tidak sengaja mereka membawa keduanya berhadapan dengan berbagai masalah yang cukup pelik. Perjalanan cinta Geez dan Ann juga tak berjalan mulus. Geez dan Ann terlihat menyukai satu sama lain sebelum akhirnya Geez harus melanjutkan kuliah di luar negeri. Mereka harus menjalani hubungan jarak jauh. Sejak saat itu, hubungan keduanya menghadapi masalah yang terus bermunculan. Ann harus menghadapi tentangan keluarga, sakit hati, dan kebohongan dalam perjalanan kisah cinta mereka berdua.', '1641792483208.jpg', '2022-01-09 22:28:03', '2022-01-09 22:28:03'),
(7, 'Mantappu Jiwa', 'Jerome Polin', 'non-fiksi', 2019, '“Jadi ini buku latihan soal matematika ya, Jer?”\r\n\r\nBukan!\r\n\r\nKata orang, selama masih hidup, manusia akan terus menghadapi masalah demi masalah. Dan itulah yang akan kuceritakan dalam buku ini, yaitu bagaimana aku menghadapi setiap persoalan di dalam hidupku. Dimulai dari aku yang lahir dekat dengan hari meletusnya kerusuhan di tahun 1998, bagaimana keluargaku berusaha menyekolahkanku dengan kondisi ekonomi yang terbatas, sampai pada akhirnya aku berhasil mendapatkan beasiswa penuh S1 di Jepang.\r\n\r\nManusia tidak akan pernah lepas dari masalah hidup, betul. Tapi buku ini tidak hanya berisi cerita sedih dan keluhan ini-itu. Ini adalah catatan perjuanganku sebagai Jerome Polin Sijabat, pelajar Indonesia di Jepang yang iseng memulai petualangan di YouTube lewat chanel Nihongo Mantappu.', '1641792765376.png', '2022-01-09 22:32:45', '2022-01-09 22:32:45'),
(8, 'Catatan Senandika', 'Muhamad Ramdan', 'senandika', 2020, 'Di pojok selatan Jakarta, kau akan menemukannya. Tempat itu tak sepanas bagian Jakarta lainnya. Langit di sana sering berubah seolah mengikuti suasana hati penghuninya. Kau akan bisa menemukannya dengan mudah. Ada banyak rumah di sana. Orang menyebut tempat itu Blue Valley.\r\nRumah nomor 6 kedatangan penghuni baru. Cokelat dan berbulu. Hadiah untuk seorang anak laki-laki yang riang dan lucu. Bibir mungilnya selalu mengulas senyum yang dapat menghapus kesedihan dan menularkan keceriaan.\r\n\r\nNamun, kehidupan selalu punya kejutan. Rumah nomor 6 menyimpan kutukan. Gadis manis yang tinggal di sana perlahan kehilangan harapan. Pernikahan yang sudah direncanakan lambat laun berubah menjadi angan belaka. Prisma bertahan di ambang kehancuran. Dia menanggung semua luka untuk menemukan kembali yang telah hilang.', '1641793186648.png', '2022-01-09 22:39:46', '2022-01-09 22:39:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_05_180326_create_bukuterbit_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bukuterbit`
--
ALTER TABLE `bukuterbit`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bukuterbit`
--
ALTER TABLE `bukuterbit`
  MODIFY `id_buku` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
