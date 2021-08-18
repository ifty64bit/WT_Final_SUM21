/*user table*/
Create TABLE `user`(
    id int(10) not null PRIMARY KEY AUTO_INCREMENT,
    username varchar(20) not null,
    fname varchar(20) not null,
    lname varchar(20) not null,
    email varchar(50) not null,
    password varchar(20) not null,

    status varchar(20) not null,
)

ALTER TABLE `user`
ADD status varchar(20) not null

/*user about*/
Create TABLE `about_user`(
    id int(10) not null PRIMARY KEY,
    house varchar(10) not null,
    road varchar(10) not null,
    block varchar(10) not null,
    division varchar(20) not null,
    district varchar(20) not null,
    gender varchar(10) not null,
    birth date,
    phone int(15),
    FOREIGN KEY(id) REFERENCES `user`(id)
);

/*user family*/
Create TABLE `family_user`(
    id int(10) not null PRIMARY KEY,
    father_name varchar(50) not null,
    father_nid int(30) not null,
    father_addr varchar(50) not null,
    father_occu varchar(50),
    mother_name varchar(50) not null,
    mother_nid int(30) not null,
    mother_addr varchar(50) not null,
    mother_occu varchar(50),
    FOREIGN KEY(id) REFERENCES `user`(id)
);

/*Nomenee*/
Create TABLE `nominee_user`(
    id int(10) not null PRIMARY KEY,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    nominee_nid int(50) not null,
    father_name varchar(50) not null,
    father_nid int(50) not null,
    mother_name varchar(50) not null,
    mother_nid int(50) not null,
    addr varchar(100) not null,
    phone int(15) not null,
    occu varchar(50) not null,
    FOREIGN KEY(id) REFERENCES `user`(id)
);

CREATE TABLE account(
    user_id int(10) not null PRIMARY KEY,
    acc_number int(20) not null AUTO_INCREMENT,
    acc_type varchar(50) not null,
    tran_limit int(50) not null,
    with_limit int(50) not null,
    balance int(50) not null DEFAULT 0,
    FOREIGN KEY(user_id) REFERENCES `user`(id),
    KEY(acc_number)
)

CREATE Table parents(
    id int(10) PRIMARY KEY,
    father_name varchar(50),
    father_nid int(20),
    father_addr varchar(50),
    father_occu varchar(50),
    mother_name varchar(50),
    mother_nid int(20),
    mother_addr varchar(50),
    mother_occu varchar(50),
    FOREIGN KEY(id) REFERENCES `user`(id)
)

CREATE TABLE transaction(
    id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    t_from varchar(50) not null,
    ammount int(100) NOT NULL,
    t_to varchar(50) NOT NULL,
    t timestamp
)

CREATE Table message(
	id int(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    sender_name varchar(50) NOT NULL,
    sender_level varchar(20) NOT NULL,
    receiver varchar(50) NOT NULL,
    type varchar(100) NOT NULL,
    subject varchar(500) NOT NULL,
    message text NOT NULL,
    t DATETIME
)

CREATE TABLE cheque(
    c_number int(100) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    issued_by varchar(50) NOT NULL,
    asso_acc int(100) NOT NULL,
    issued_for varchar(50) NOT NULL,
    issue_t DATETIME
)

CREATE TABLE loan (
    id int(100) PRIMARY KEY AUTO_INCREMENT,
    type varchar(50),
    issued_by varchar(50),
    asso_acc int(100),
    amount int(100)
)

CREATE TABLE admin(
	id int(100) PRIMARY KEY AUTO_INCREMENT,
    username varchar(50) not null,
    password varchar(100) not null,
    first_name varchar(50) not null,
    last_name varchar(50) not null,
    salary int(100) not null
)

INSERT INTO `user`(username,fname,lname,email,password,status) VALUES('ifty','ifthe','kharul','ifty64bit@gmail.com','who am i','Pending')
SELECT id from `user` where username = 'ifty';
INSERT INTO account(user_id,acc_type,tran_limit,with_limit) VALUES(1,'bla bla', 10000,1000)
INSERT INTO about_user(id,house,road,block,division,district,gender,birth,phone) VALUES(1,'145', 'bla bla','C','Chittagong','Comilla','Male','07-11-2000','01715266721')
INSERT INTO nominee_user(id,first_name,last_name,nominee_nid,father_name,father_nid,mother_name,mother_nid,addr,phone,occu) VALUES(1,'bla bla','bla bla',154464641,'gerg',12587451,'sacesf',145448488,'fafeasfef',12345874587,'dhaka bkaadw')

SELECT * FROM `user`,about_user,account,nominee_user,parents
where `user`.id=about_user.id and about_user.id=account.user_id and account.user_id = nominee_user.id and nominee_user.id=parents.id