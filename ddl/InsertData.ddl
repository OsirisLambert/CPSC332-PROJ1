INSERT INTO PROFESSOR
VALUES('100000000', 'Adam Da', 'Department Chair', 'Male', 'PH.D.', '100000.00',
'101 S Brea Blvd', 'Brea', 'CA', '92821','680','6346523');

INSERT INTO PROFESSOR
VALUES('200000000', 'Anita Mica', 'Professor', 'Female', 'PH.D.', '80000.00',
'4699 E 3rd St', 'Los Angeles', 'CA', '90022','323','5467243');

INSERT INTO PROFESSOR
VALUES('300000000', 'Bob Lee', 'Lecturer', 'Male', 'MS', '70000.00',
'2000 N Stunderbaker Rd', 'Long Beach', 'CA', '90815','562','3412855');

INSERT INTO PROFESSOR
VALUES('400000000', 'Luis Gates', 'Department Chair', 'Male', 'PH.D.', '100000.00',
'460 N Anaheim Blvd', ' Anaheim', 'CA', '92805','714','5542634');

INSERT INTO DEPARTMENT
VALUES('100', '100000000', '6262624567','CS-522','Department of Computer Science');

INSERT INTO DEPARTMENT
VALUES('200', '400000000', '6262629315','E-100','Department of Civil and Environmental Engineering');

INSERT INTO COURSE
VALUES('1000', '100', 'Starting Out W/c++, early Objects',
'Introduction to Programming','3',NULL);

INSERT INTO COURSE
VALUES('1001','100','Starting Out W/c++, early Objects',
'Object-Oriented Programming', '3', '1000');

INSERT INTO COURSE
VALUES('2000','200','Vector Mechanics for Engineers: Static and Dynamic',
'Static','3',NULL);

INSERT INTO COURSE
VALUES('2001','200','Surveying principles and applications',
'Engineering Surveying', '3', '2000');

INSERT INTO STUDENT
VALUES('893464561','100','Earl','Neil','1934 E Taft Ave, Orange, CA, 92865',
'8123264875');

INSERT INTO STUDENT
VALUES('893463217','100','Kane','Bruce','19001 Tonner Canyon Rd, Brea, CA, 92821',
'3654875462');

INSERT INTO STUDENT
VALUES('893469824','100','Nash','Francis','1659 W Foothill Blvd, Upland, CA, 91786',
'9824653175');

INSERT INTO STUDENT
VALUES('893466784','100','Gail','Wendy','12505 N Mainstreet, Rancho Cucamonga, CA, 91739',
'9054876295');

INSERT INTO STUDENT
VALUES('893466445','200','Abby','Grace','2601 W Orangethrope Ave, Fullerton, CA, 92833',
'9093645787'); 

INSERT INTO STUDENT
VALUES('893464521','200','Ed','Robert','15729 Downey Ave, Paramount, CA, 90723',
'3567895444');

INSERT INTO STUDENT
VALUES('893463229','200','Tania','Taylor','1 Chandler Ranch Road, Rolling Hills Estates, CA, 90274',
'3499964587');

INSERT INTO STUDENT
VALUES('893463589','200','Faith','Athena','8329 Laurel Canyon Blvd, Sun Valley, CA, 91352',
'3698527414');

INSERT INTO SECTION
VALUES('13646','1000','100000000','CS-101','50','MoWe','1:00PM','1:50PM');

INSERT INTO SECTION
VALUES('13465','1000','200000000','CS-102','50','MoWe','3:00PM','3:50PM');

INSERT INTO SECTION
VALUES('13768','1001','300000000','CS-201','40','TuTh','11:00AM','12:00PM');

INSERT INTO SECTION
VALUES('14425','2000','400000000','E-202','30','TuTh','1:00PM','1:50PM');
INSERT INTO SECTION
VALUES('12389','2000','400000000','E-202','30','MoWe','1:00PM','1:50PM');

INSERT INTO SECTION
VALUES('17534','2001','400000000','E-205','60','MoWe','3:00PM','3:50PM');

INSERT INTO ENROLLMENT
VALUES('893464561','13646','1000','A');

INSERT INTO ENROLLMENT
VALUES('893464561','13768','1001','A');

INSERT INTO ENROLLMENT
VALUES('893464561','14425','2000','B-');

INSERT INTO ENROLLMENT
VALUES('893464561','17534','2001','A-');

INSERT INTO ENROLLMENT
VALUES('893463217','13465','1000','B+');

INSERT INTO ENROLLMENT
VALUES('893469824','13465','1000','A-');

INSERT INTO ENROLLMENT
VALUES('893466445','14425','2000','C');

INSERT INTO ENROLLMENT
VALUES('893466445','17534','2001','C+');

INSERT INTO ENROLLMENT
VALUES('893464521','12389','2000','B');

INSERT INTO ENROLLMENT
VALUES('893463229','14425','2000','A');

INSERT INTO ENROLLMENT
VALUES('893466784','13646','1000','B');

INSERT INTO ENROLLMENT
VALUES('893463589','14425','2000','B-');

INSERT INTO ENROLLMENT
VALUES('893463589','17534','2001','B');

INSERT INTO ENROLLMENT
VALUES('893464521','17534','2001','B');

INSERT INTO ENROLLMENT
VALUES('893463217','17534','2000','A');

INSERT INTO ENROLLMENT
VALUES('893463217','17534','2001','A');

INSERT INTO ENROLLMENT
VALUES('893463589','13465','1000','B');

INSERT INTO ENROLLMENT
VALUES('893463589','13768','1001','B+');

INSERT INTO ENROLLMENT
VALUES('893466445','13646','1000','A');

INSERT INTO ENROLLMENT
VALUES('893466445','13768','1001','A-');

INSERT INTO MINIOR
VALUES('100','893466445');

INSERT INTO MINIOR
VALUES('100','893463589');

INSERT INTO MINIOR
VALUES('200','893464561');

INSERT INTO MINIOR
VALUES('200','893463217');





