create table patient (p_id integer UNSIGNED NOT NULL AUTO_INCREMENT,p_name varchar(20) NOT NULL,p_email varchar(50) NOT NULL UNIQUE,p_phone varchar(15) NOT NULL,p_gender char(1),p_dob date,p_height integer,p_weight integer,p_password_hash varchar(40) NOT NULL,p_password_salt varchar(40),ec_id integer UNSIGNED,PRIMARY KEY(p_id));

create table prescription(pres_id integer UNSIGNED NOT NULL AUTO_INCREMENT,diagnosis varchar(50) ,symptoms varchar(50),test_needed varchar(50) ,medication varchar(50) ,p_id integer UNSIGNED NOT NULL,PRIMARY KEY(pres_id));

create table doctor(d_id integer UNSIGNED NOT NULL AUTO_INCREMENT,d_name varchar(20) NOT NULL,d_password_hash varchar(20) NOT NULL,d_email varchar(50) UNIQUE NOT NULL,d_phone varchar(15) ,d_address varchar(50) ,d_qualification varchar(20) NOT NULL,d_dob date ,PRIMARY KEY(d_id));

create table test(test_id integer NOT NULL AUTO_INCREMENT,test_name varchar(20) NOT NULL,test_result varchar(50) ,test_report varchar(50),p_id integer UNSIGNED NOT NULL,d_id integer UNSIGNED,pres_id integer UNSIGNED ,hs_id integer UNSIGNED NOT NULL,PRIMARY KEY(test_id));

create table emergency_contact(ec_id integer UNSIGNED NOT NULL AUTO_INCREMENT,ec_name varchar(20) NOT NULL,ec_phone varchar(15),PRIMARY KEY(ec_id));

create table chamber(c_id integer UNSIGNED NOT NULL AUTO_INCREMENT,c_name varchar(20) NOT NULL,c_timing datetime ,c_address varchar(50),c_phone varchar(15) ,d_id integer UNSIGNED NOT NULL,h_id integer UNSIGNED ,PRIMARY KEY(c_id));

create table hospital(h_id integer UNSIGNED NOT NULL AUTO_INCREMENT,h_name varchar(20) NOT NULL,h_location varchar(50) ,PRIMARY KEY(h_id)); 

create table hospital_staff(hs_id integer UNSIGNED NOT NULL AUTO_INCREMENT,hs_name varchar(20) NOT NULL,hs_email varchar(50) UNIQUE NOT NULL,hs_password_hash varchar(20) NOT NULL, h_id integer UNSIGNED NOT NULL,PRIMARY KEY(hs_id));


alter table patient add constraint fk1 foreign key(ec_id) references emergency_contact(ec_id);

alter table prescription add constraint fk2 foreign key(p_id) references patient(p_id);

alter table test add constraint fk3 foreign key(p_id) references patient(p_id);

alter table test add constraint fk4 foreign key(d_id) references doctor(d_id);

alter table test add constraint fk5 foreign key(pres_id) references prescription(pres_id);

alter table test add constraint fk6 foreign key(hs_id) references hospital_staff(hs_id);

alter table chamber add constraint fk7 foreign key(d_id)references doctor(d_id);

alter table chamber add constraint fk8 foreign key(h_id) references hospital(h_id);

alter table hospital_staff add constraint fk9 foreign key(h_id) references hospital(h_id); 