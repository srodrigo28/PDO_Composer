create database if not exists db_pdo 
    default character set utf8
    default collate utf8_general_ci;
    
use db_pdo;

create table if not exists tb_modalidades(
    id int auto_increment not null primary key,
    modalidade varchar(255) not null unique,
    mensalidade decimal(5,2)
) default character set utf8 default collate utf8_general_ci;
use db_pdo;

--altera o campo para not null
alter table tb_modalidades modify column mensalidade decimal(5,2) not null;

create table if not exists tb_alunos(
    id int auto_increment not null primary key,
    nome varchar(255) not null,
    tel varchar(20) not null,
    email varchar(255) not null unique,
    modalidade int not null
) default character set utf8 default collate utf8_general_ci;

--Adiciona chave extrangeira 
alter table tb_alunos add foreign key (modalidade) references tb_modalidades(id);

--Inserção dados tabela modalidades
insert into tb_modalidades values
('Zumba', '89,90'),
('Musculação', '101,90'),
('Aeróbica', '69,90'),
('MMA', '189,90'),
('Muay-Thai', '120,90');

--Inserindo na tabela tb_alunos

insert into tb_alunos values
(default, 'Maria Julia' , '(11) 3288-6060', 'mj@gmail.com', '3'),
(default, 'Ricardo Nascimento' , '(11) 3288-6060', 'r.sousa@gmail.com', '2'),
(default, 'André Luis' , '(11) 3288-6060', 'aluis@terra.com', '1'),
(default, 'Ana Silva' , '(11) 3288-6060', 'asilva@hotmail.com', '4'),
(default, 'Beto Sousa' , '(11) 3288-6060', 'btsousa@gmail.com', '5');

--Join tabelas
select tb_alunos.nome, tb_modalidades.modalidade from tb_alunos join tb_modalidades
on tb_modalidades.id = tb_alunos.modalidade order by modalidade;

select tb_alunos.nome, tb_modalidades.modalidade from tb_alunos join tb_modalidades
on tb_modalidades.id = tb_alunos.modalidade order by modalidade;

select tb_alunos.nome, tb_modalidades.modalidade from tb_alunos join tb_modalidades
on tb_modalidades.id = tb_alunos.modalidade order by nome;

select tb_alunos.nome, tb_modalidades.modalidade from tb_alunos join tb_modalidades
on tb_modalidades.id = tb_alunos.modalidade where tb_modalidades.modalidade = 'Aeróbica';

select tb_alunos.nome, tb_modalidades.modalidade from tb_alunos join tb_modalidades
on tb_modalidades.id = tb_alunos.modalidade where tb_alunos.nome = 'Beto Sousa';

select tb_alunos.nome, tb_alunos.tel, tb_modalidades.modalidade from tb_alunos join tb_modalidades
on tb_modalidades.id = tb_alunos.modalidade where tb_alunos.nome = 'Beto Sousa';

select tb_alunos.nome, tb_alunos.tel, tb_modalidades.modalidade, tb_modalidades.mensalidade from tb_alunos join tb_modalidades
on tb_modalidades.id = tb_alunos.modalidade where tb_alunos.nome = 'Beto Sousa';
















