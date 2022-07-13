create database if not exists escola_manha;
use escola_manha;
create table if not exists responsavel_financeiro(
	codigo_responsavel_financeiro int,
    nome varchar(50) not null,
    cpf char(14) not null,
    primary key(codigo_responsavel_financeiro)
);
create table if not exists formacoes(
	codigo_formacao int,
    nome varchar(50) not null,
    primary key(codigo_formacao)
);
create table if not exists professores(
	chapa char(4),
    nome varchar(50) not null,
    primary key(chapa)
);
create table if not exists turmas(
	codigo_turma mediumint,
    filial tinyint not null,
    turno char(1) not null,
    primary key(codigo_turma)
);
create table if not exists professores_formacoes(
	chapa_professor char(4),
    codigo_formacao int,
    primary key(chapa_professor,codigo_formacao),
    constraint fk_chapa_professor foreign key (chapa_professor) references professores(chapa),
    constraint fk_codigo_formacao foreign key (codigo_formacao) references formacoes(codigo_formacao)
);
create table if not exists disciplinas(
	codigo_disciplina smallint primary key,
    nome varchar(45) not null,
    sala char(3) not null,
    chapa_professor char(4) not null,
    codigo_turma mediumint not null,
    constraint fk_professor_disciplina foreign key (chapa_professor) references professores(chapa),
    constraint fk_turma_disciplina foreign key (codigo_turma) references turmas(codigo_turma)
);
create table if not exists alunos(
	ra int,
    nome varchar(50) not null,
    genero char(1) null,
    rua varchar(50) not null,
    numero varchar(6) not null,
    bairro varchar(40) not null,
    codigo_responsavel_financeiro int null,
    codigo_turma mediumint not null,
    primary key (ra),
    constraint fk_aluno_responsavel foreign key (codigo_responsavel_financeiro) references responsavel_financeiro(codigo_responsavel_financeiro),
    constraint fk_aluno_turma foreign key (codigo_turma) references turmas(codigo_turma)
);