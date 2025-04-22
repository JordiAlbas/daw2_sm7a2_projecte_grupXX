use mysql;
create user 'administrador'@'localhost' identified by "FjeClot24#";
create database liga;
use liga;
grant all privileges on liga.* to 'administrador'@'localhost';
