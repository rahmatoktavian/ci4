CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`id`, `username`, `password`, `tipe`) VALUES
(1, 'petugas', '670489f94b6997a870b148f74744ee5676304925', 'staff'),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'administrator');