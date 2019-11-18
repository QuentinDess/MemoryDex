create database MemoryDex;
use MemoryDex;
#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        id           Int  Auto_increment  NOT NULL ,
        name         Varchar (50) NOT NULL ,
        password     Varchar (50) NOT NULL ,
        discriminant Varchar (50) NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Admin
#------------------------------------------------------------

CREATE TABLE Admin(
        id           Int NOT NULL ,
        name         Varchar (50) NOT NULL ,
        password     Varchar (50) NOT NULL ,
        discriminant Varchar (50) NOT NULL
	,CONSTRAINT Admin_PK PRIMARY KEY (id)

	,CONSTRAINT Admin_User_FK FOREIGN KEY (id) REFERENCES User(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Gamer
#------------------------------------------------------------

CREATE TABLE Gamer(
        id           Int NOT NULL ,
        name         Varchar (50) NOT NULL ,
        password     Varchar (50) NOT NULL ,
        discriminant Varchar (50) NOT NULL
	,CONSTRAINT Gamer_PK PRIMARY KEY (id)

	,CONSTRAINT Gamer_User_FK FOREIGN KEY (id) REFERENCES User(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: SessionGame
#------------------------------------------------------------

CREATE TABLE SessionGame(
        id       Int  Auto_increment  NOT NULL ,
        time     Time NOT NULL ,
        id_Gamer Int NOT NULL
	,CONSTRAINT SessionGame_PK PRIMARY KEY (id)

	,CONSTRAINT SessionGame_Gamer_FK FOREIGN KEY (id_Gamer) REFERENCES Gamer(id)
)ENGINE=InnoDB;

insert into User(name,password,discriminant)
values("admin","0000","admin");