CREATE TABLE people (
 id int IDENTITY(1,1),
 name varchar (200) not null,
 picture VARBINARY,
 height decimal(6,2),
 weight decimal(6,2),
 [gender]  nvarchar (255) not null CHECK ([gender] IN('m','f')),
 birthdate date not null,
 biography text,
 constraint pk_people2 PRIMARY key (id)
);

insert into people (name, picture, height, weight, gender, birthdate, biography)
values ('Ivan ', null, 175.35, 70.50, 'm', '1980-12-05', '' ),
         ('Petyr ', null, 175.35, 70.50, 'm', '1980-12-05', '' ),
         ('Pavel ', null, 175.35, 70.50, 'm', '1980-12-05', '' ),
         ('Mariya ', null, 175.35, 70.50, 'f', '1980-12-05', '' ),
         ('Stoyan ', null, 175.35, 70.50, 'm', '1980-12-05', '' );   