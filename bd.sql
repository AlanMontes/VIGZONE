create database VigZone;
use VigZone;


CREATE TABLE usuarios (
  id_usuario int(10) primary key not null unique auto_increment,
  usuario varchar(17) NOT NULL,
  nombre varchar(40) NOT NULL,
  contrasena varchar(12) NOT NULL,
  email varchar(40) NOT NULL,
  tipo varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE juegos (
  id_juego int(10) primary key not null unique auto_increment,
  nombre varchar(40) NOT NULL,
  tipo varchar (20) NOT NULL,
  precio int(10) NOT NULL,
  marca varchar(30) NOT NULL,
  imagen varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Usuarios
INSERT INTO `usuarios` (`id_usuario`,`usuario`, `nombre`, `contrasena`, `email`, `tipo`) VALUES
(1, 'Jetix','José Pablo Aguirre', 'Jp4gu1rr3', 'josepabloaguirre02@gmail.com', 'admin');
INSERT INTO `usuarios` (`id_usuario`,`usuario`, `nombre`, `contrasena`, `email`, `tipo`) VALUES
(2, 'Gobo','Fernanda Isabel Vazquez', 'Fiv45qu3z', 'solofervazquez@gmail.com', 'admin');
INSERT INTO `usuarios` (`id_usuario`,`usuario`, `nombre`, `contrasena`, `email`, `tipo`) VALUES
(3, 'Shawn','Alan Jesús Montes', 'Ajm0nt35', 'alanjesusmontes@gmail.com', 'admin');
INSERT INTO `usuarios` (`id_usuario`,`usuario`, `nombre`, `contrasena`, `email`, `tipo`) VALUES
(4, 'Sil','Lissette Ibarra', 'Lim1r4nd4', 'lissetteibarra@gmail.com', 'admin');
INSERT INTO `usuarios` (`id_usuario`,`usuario`, `nombre`, `contrasena`, `email`, `tipo`) VALUES
(5, 'Maro','Omar Quiñonez', 'Omqu1ñ0n3z', 'omarquiñonez@gmail.com', 'cliente');
INSERT INTO `usuarios` (`id_usuario`,`usuario`, `nombre`, `contrasena`, `email`, `tipo`) VALUES
(6, 'Leyha','Yahel Adrián Mendoza', 'Yam3nd0z4', 'yaheladrianmendoza@gmail.com', 'cliente');
INSERT INTO `usuarios` (`id_usuario`,`usuario`, `nombre`, `contrasena`, `email`, `tipo`) VALUES
(7, 'Hisará','Alexia Sarahí Mireles', 'Asm1r31e5', 'alexiasarahimireles@gmail.com', 'cliente');
--

INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(1, 'MARIO RABBIDS SPARKS OF HOPE','NUEVO', '1299', 'Nintendo', 'marior');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(2, 'BAYONETTA 3','NUEVO', '1349', 'Nintendo', 'bayonetta');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(3, 'FIFA 23','NUEVO', '999', 'Nintendo', 'fifa23');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(4, 'SPLATOON','NUEVO', '1287', 'Nintendo', 'splatoon');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(5, 'POKEMON DIAMOND','NUEVO', '1299', 'Nintendo', 'pokemon');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(6, 'MARIO KART 8 DELUXE','NUEVO', '1249', 'Nintendo', 'mariok');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(7, 'SUPER SMASH BROS','NUEVO', '1287', 'Nintendo', 'smash');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(8, 'MINECRAFT','NUEVO', '799', 'Nintendo', 'minecraft');

INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(9, 'MODERN WARFARE II','NUEVO', '1609', 'PlayStation', 'mw');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(10, 'GOTHAM KNIGHTS','NUEVO', '1471', 'PlayStation', 'gp');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(11, 'HOT WHEELS UNLEASHED','NUEVO', '399', 'PlayStation', 'hotwheels');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(12, 'THE LAST OF US PART 1','NUEVO', '1199', 'PlayStation', 'last');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(13, 'GRAN TURISMO 7','NUEVO', '1049', 'PlayStation', 'gran');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(14, 'SPIDER MAN MILES MORALES','NUEVO', '1299', 'PlayStation', 'spider');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(15, 'RATCHET AND CLANK RIFT','NUEVO', '1199', 'PlayStation', 'ratchet');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(16, 'RAINBOW SIX EXTRACTION','NUEVO', '1199', 'PlayStation', 'rainbow');

INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(17, 'MODERN WARFARE II','NUEVO', '1709', 'Xbox', 'callofduty');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(18, 'HALO INFINITE','NUEVO', '999', 'Xbox', 'halo');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(19, 'GOTHAM KNIGHTS','NUEVO', '1489', 'Xbox', 'gotham');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(20, 'ELDEN RING','NUEVO', '1299', 'Xbox', 'elden');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(21, 'JUST DANCE 2022','NUEVO', '899', 'Xbox', 'justdance');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(22, 'GRAND THEFT AUTO V','NUEVO', '720', 'Xbox', 'grand');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(23, 'NBA 2k21','NUEVO', '899', 'Xbox', 'nba');
INSERT INTO `juegos` (`id_juego`,`nombre`,`tipo`, `precio`, `marca`, `imagen`) VALUES
(24, 'BATTLEFIELD 2042','NUEVO', '1999', 'Xbox', 'battle');

CREATE TABLE IF NOT EXISTS carro (
  id_juego int(10) primary key not null unique auto_increment,
  nombre varchar(40) NOT NULL,
  cantidad varchar (20) NOT NULL,
  precio int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



