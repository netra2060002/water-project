CREATE TABLE 'orders' (
  'id' int(11) NOT NULL, 
  'clients_name' varchar(55) NOT NULL,
  'clients_address' varchar(55) NOT NULL,
  'Rate' varchar(55) NOT NULL,
  'Amount' int(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `orders` ('id','clients_name', 'clients_address', 'Rate', 'Amount') VALUES
(1,'Rajjwal Ghising', 'Ratnapark', '$1.5', 15),
(2,'Aakash Subba', 'Sanothimi', '$1.5', 188),
(3,'Saphal Rajaura', 'Bode', '$1.5', 187),
(4,'Netra Ram Mahato', 'Dillibazar', '$1.5', 178),
(5,'Asmita Bhandari', 'Ratnapark', '$1.5', 12),
(6,'Trinetra Mahato', 'Raksaul', '$1.5', 420),
