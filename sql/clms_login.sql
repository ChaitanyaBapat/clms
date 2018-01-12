create database clms;
    create table clms_user_info (
    username varchar(20) primary key,
    email varchar(100) not null unique,
    password varchar(32) not null,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    mobile_number varchar(11) not null unique,
    last_seen timestamp not null,
    status int(1) not null
);
create table clms_login_faliure (
    email varchar(100) not null,
    last_attempt timestamp not null,
    attempts int(2) not null,
    FOREIGN key (email) REFERENCES clms_user_info(username)
    
);
create table clms_login_maintenance (
    username varchar(50) not null,
    attempt_time timestamp not null,
    status int(2) not null,
    remote_addr varchar(45) not null,
    http_x_forwarded_for varchar(45) not null
);
create user 'clms_login_select'@'localhost' identified by '';
grant select on clms.clms_user_info to 'clms_login_select'@'localhost';
grant select, insert, update on clms.clms_login_faliure to 'clms_login_select'@'localhost';
grant select, insert, update on clms.clms_login_maintenance to 'clms_login_select'@'localhost';
flush privileges;
-- 
