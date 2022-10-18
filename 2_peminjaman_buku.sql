CREATE TABLE peminjaman_buku (
  id int(11) NOT NULL,
  peminjaman_id int(11) NOT NULL,
  buku_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `peminjaman_buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjaman_id` (`peminjaman_id`),
  ADD KEY `buku_id` (`buku_id`);

ALTER TABLE `peminjaman_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;