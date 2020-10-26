create database juegos;
use juegos;

create table t_juegos (id_juego int auto_increment, 
	TITULO varchar(150), 
	FECHA date, 
	NOTA float, 
    MEDIA float, 
    INO float,
    GA float,
    ME float,
    HI float,
    PE float,
    MU float,
    DU float,
    GR float,
    DI float,
    SO float,
    TR varchar(150),
    DIFICULTAD varchar(150),
	primary key(id_juego));
ALTER TABLE t_juegos CONVERT TO CHARACTER SET utf8;

insert into t_juegos (TITULO,FECHA,NOTA,MEDIA,INO,GA,ME,HI,PE,MU,DU,GR,DI,SO,TR,DIFICULTAD) values
													('Sekiro: Shadows Die Twice','2019-02-22',9.5,8.9,9,10,10,5,6,7,8,8,9,8,'T/V','Fija'),
                                                    ('Doom Eternal','2020-03-20',9.5,9.5,7,10,10,5,8,7,9,9,9,9,'T/V','Ultraviolencia (Dificil)'),
                                                    ('The Legend of Zelda: Breath of the Wild','2017-03-03',9.5,9.3,9,9,10,7,6,8,7,8,9,8,'T/V','Fija')
                                                    ('Horizon Zero Dawn','2020-08-07',9,9.2,7,9,8,8,8,9,9,8,9,8,'T/V','Dificil')
                                                    ("Hellblade: Senua's Sacrifice",'2017-08-08','9')
                                                    ; 