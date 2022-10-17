CREATE TABLE peminjaman (
  id int(11) NOT NULL,
  nama varchar(50) NOT NULL,
  tanggal date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO peminjaman (id, nama, tanggal) VALUES
(1, 'Loki', '2022-10-01'),
(2, 'Deadpool', '2022-10-05');
(3, 'Stephen Strange', '2022-10-07');
