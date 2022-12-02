CREATE TABLE peminjaman (
  id int(11) NOT NULL,
  nama varchar(50) NOT NULL,
  tanggal date NOT NULL,
  petugas_id int(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE peminjaman ADD PRIMARY KEY (id);
ALTER TABLE peminjaman MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE peminjaman ADD CONSTRAINT peminjaman_petugas_id FOREIGN KEY (petugas_id) REFERENCES petugas(id) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO peminjaman (id, nama, tanggal) VALUES
(1, 'Loki', '2022-10-01', 1),
(2, 'Deadpool', '2022-10-05', 1),
(3, 'Namor', '2022-10-07', 2);

