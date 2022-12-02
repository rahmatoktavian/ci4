CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `petugas_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjaman_petugas_id` (`petugas_id`);