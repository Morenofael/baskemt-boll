create database dbnbadraft;
create table players(
id INTEGER primary key NOT NULL AUTO_INCREMENT,
nome varchar(150) NOT NULL,
altura float NOT NULL,
peso int NOT NULL,
nascimento date NOT NULL,
universidade varchar(30) NOT NULL,
pickYear year NOT NULL,
pickRd int NOT NULL,
pickNum int NOT NULL,
pickTeam CHAR(3) not null,
fotoLink varchar(150) NOT NULL);

INSERT INTO `players` (`id`, `nome`, `altura`, `peso`, `nascimento`, `universidade`, `pickYear`, `pickRd`, `pickNum`, `pickTeam`, `fotoLink`) VALUES
(1, 'Nikola Jokic', 2.11, 129, '1995-02-19', '', '2014', 2, 41, 'DEN', 'https://cdn.nba.com/headshots/nba/latest/1040x760/203999.png'),
(2, 'LeBron James', 2.06, 113, '1984-12-30','St. Vincent St. Mary HS', '2003', 1, 1, 'MIA', './imagens/lebron-james.png'),
(3, 'Stephen Curry', 1.88, 83, '1988-03-14','Davidson', '2009', 1, 7, 'GSW', 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/3975.png'),
(4, 'Ja Morant', 1.91, 78, '1999-08-10','Murray St', '2019', 1, 2, 'MEM', 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/4279888.png')
(5, 'Jefferson Chaves', 1.95, 102, '1990-06-26',' Anglo-Americano','2012',1,1,'CHI','https://avatars.githubusercontent.com/u/1314923?v=4');