create database videomate;

use videomate;

create table usuarios(
	id int not null primary key auto_increment,
    email varchar(500) not null,
    senha varchar(500) not null,
    nome varchar(100) not null,
    apelido varchar(50) not null
);

create table videos(
	id int not null primary key auto_increment,
    id_usuario int not null,
    id_youtube int not null,
    titulo varchar(50) not null,
    descricao varchar(1000) not null,
    tags varchar(1000) not null,
    inicio_hora int null,
    inicio_minuto int null,
    inicio_segundo int null,
    fim_hora int null,
    fim_minuto int null,
    fim_segundo int null,
    foreign key fk_usuario(id_usuario) references usuarios(id)
);

create table playlists(
	id int not null primary key auto_increment,
    id_usuario int not null,
    nome varchar(50) not null,
    foreign key fk_usuario(id_usuario) references usuarios(id)
);

create table playlistsvideos(
	id int not null primary key auto_increment,
	id_playlist int not null,
    id_video int not null,
    foreign key fk_playlist(id_playlist) references playlists(id),
    foreign key fk_video(id_video) references videos(id)
);
