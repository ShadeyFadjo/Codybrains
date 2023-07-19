create database codybrains;
use codybrains;


create table poste (
	idPoste int AUTO_INCREMENT PRIMARY KEY,
	nomposte varchar(50) 
)engine=innodb;

insert into poste (nomposte) values ('gardien'),('jardinier');
insert into poste (nomposte) values ('stagiaire IT'),('receptionniste');

create table utilisateur (
	idUtilisateur int AUTO_INCREMENT PRIMARY KEY,
	matricule varchar(20) not null,
	nom varchar(50) not null,
	prenoms varchar(150) not null,
	dateembauche date not null,
	idposte int, 
	email varchar(50),
	code varchar(20),
	datelastmodif date,
	suppr boolean default false,
	co boolean default false,
	FOREIGN KEY (idposte) REFERENCES poste(idPoste)
)engine=innodb;

create view vutilisateursactifs as 
	select utilisateur.*,poste.nomposte from utilisateur join poste on poste.idposte=utilisateur.idposte where utilisateur.suppr=false;

create view vutilisateursinactifs as 
	select utilisateur.*,poste.nomposte from utilisateur join poste on poste.idposte=utilisateur.idposte where utilisateur.suppr=true;

create view vutilisateursconnectes as 
	select utilisateur.*,poste.nomposte from utilisateur join poste on poste.idposte=utilisateur.idposte where utilisateur.suppr=false and utilisateur.co=true;
