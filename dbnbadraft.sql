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
(6, 'Scoot Henderson', 1.88, 88, '2004-01-03','Kell High School','2023',1,3,'POR','https://www.google.com/imgres?imgurl=https%3A%2F%2Fcdn.nba.com%2Fteams%2Fuploads%2Fsites%2F1610612757%2F2023%2F06%2Fhenderson_FC_060323.jpg&tbnid=Pui5kNUDa7E4yM&vet=12ahUKEwj206GZkuH_AhVuJrkGHaDrAFQQMygDegUIARDfAQ..i&imgrefurl=https%3A%2F%2Fwww.nba.com%2Fblazers%2Fnews%2Fscoot-henderson-makes-his-case-during-workout-in-portland&docid=QpoxjXssGdEQ6M&w=3000&h=1778&q=scoot%20henderson&client=opera-gx&ved=2ahUKEwj206GZkuH_AhVuJrkGHaDrAFQQMygDegUIARDfAQ');
(7, 'Kyrie Irving', 1.88, 88, '1992-03-23',' Duke Blue Devils','2011',1,1,'CLE','https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/6442.png&w=350&h=254');
(8, 'Paul George', 2.03, 99, '1990-05-02',' California State University, Fresno','2010',1,10,'IND','https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/4251.png&w=350&h=254');
