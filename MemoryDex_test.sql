create database MemoryDex;
use MemoryDex;
#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Roles
#------------------------------------------------------------

CREATE TABLE Roles(
        id   Int NOT NULL ,
        name Varchar (50) NOT NULL
	,CONSTRAINT Roles_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
        id       Int  Auto_increment  NOT NULL ,
        name     Varchar (50) NOT NULL ,
        password Varchar (50) NOT NULL ,
        id_Roles Int NOT NULL
	,CONSTRAINT Users_PK PRIMARY KEY (id)

	,CONSTRAINT Users_Roles_FK FOREIGN KEY (id_Roles) REFERENCES Roles(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Game
#------------------------------------------------------------

CREATE TABLE Game(
        id       Int  Auto_increment  NOT NULL ,
        score    Int NOT NULL ,
        id_Users Int NOT NULL
	,CONSTRAINT Game_PK PRIMARY KEY (id)

	,CONSTRAINT Game_Users_FK FOREIGN KEY (id_Users) REFERENCES Users(id)
)ENGINE=InnoDB;



insert into Roles(id,name)
Values("1","admin"),
("2","gamer");

insert into Users(name,password,id_Roles)
values("admin","0000","1");