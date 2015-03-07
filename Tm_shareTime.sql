create database shareTime;

use shareTime;

create table user
(id int unsigned not null auto_increment primary key,
 name char(16) not null,
 photo longblob not null,
 phone varchar(13) not null,
 password char(40) not null,
 contacts char(200) not null
);

create table activity
(id int unsigned not null auto_increment primary key,
 content text,
 inner_user_id char(200)

);

create table invatation
(id int unsigned not null auto_increment primary key,
 sender_id int unsigned not null,
 receiver_id char(200),
 content text,
 send_time date not null
);

grant select,insert,update,delete,index,alter,create
      on shareTime.*
      to 'Turingmachine'
      identified by 'o1a9rOcO)X';

flush privileges;