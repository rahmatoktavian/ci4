CREATE TABLE `petugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO petugas (id, nama) VALUES
(1, 'petugas'),
(2, 'petugas2');

ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `user `ADD petugas_id INT NULL AFTER tipe;
ALTER TABLE `user` ADD  CONSTRAINT user_petugas_id FOREIGN KEY (petugas_id) REFERENCES petugas(id) ON DELETE RESTRICT ON UPDATE RESTRICT;

UPDATE user SET petugas_id = '1' WHERE user.id = 1;
INSERT INTO `user` (`username`, `password`, `tipe`, `petugas_id`) VALUES ('petugas2', SHA1('petugas2'), 'staff', '2')