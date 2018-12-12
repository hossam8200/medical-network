https://www.webslesson.info/2018/08/how-to-make-product-filter-in-php-using-ajax.html


CREATE TABLE `medical` (
  `Service_id` int(20) NOT NULL,
  `Service` varchar(120) NOT NULL,
  `Service_name` varchar(120) NOT NULL,
  `service_price` decimal(8,2) ,
  `Service_phone1` int(20) ,
  `Service_phone2` int(20) ,
  `service_address` varchar(120) ,
  `Service_zone` varchar(100) NOT NULL,
  `doctor_grade` varchar(20) ,
  `service_image` varchar(100) ,
  `service_status` enum('0','1') NOT NULL COMMENT '0-active,1-inactive'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



INSERT INTO `medical` (`Service_id`, `Service`, `Service_name`, `service_price`, `Service_phone1`, `Service_phone2`, `service_address`, `Service_zone`, `doctor_grade`, `service_image`,`service_status`)
 VALUES
					   (1, '„” ‘›Ì', '„” ‘›Ì «·»œ—«ÊÌ',50,034284232, null, '‘«—⁄ „’ÿ›Ì «·‰Ã«— ñ Œ·› «»—«Ã ”ÌœÌ Ã«»— ”„ÊÕ… 3', '”„ÊÕ…',null,'image-1.jpeg','1')
					   (2, '„” ‘›Ì', 'Õ”«„ ·»œ—«ÊÌ',100,034284232, null, '‘«—⁄ „’ÿ›Ì «·‰Ã«— ñ Œ·› «»—«Ã ”ÌœÌ Ã«»— ”„ÊÕ… 3', '«·⁄Ã„Ï',null,'image-1.jpeg','1')
					   
					   
					   (2, '«·√ÿ›«·', 'Õ”«„ ·»œ—«ÊÌ',100,034284232, null, '‘«—⁄ „’ÿ›Ì «·‰Ã«— ñ Œ·› «»—«Ã ”ÌœÌ Ã«»— ”„ÊÕ… 3', '«·⁄Ã„Ï','','image-1.jpeg','1')
					   

					   
					   -- Indexes for table `product`
					   
					   
ALTER TABLE `medical`
  ADD PRIMARY KEY (`Service_id`);

  ALTER TABLE `medical`
  MODIFY `Service_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
 ------
 
 ------------------------------
 service >> product_prand
 Service_zone >> RAM
 doctor_grade >> Internal Storage
 
  <img src="image/'. $row['service_image'] .'" alt="" class="img-responsive" alt="" width="304" height="236">
  #Bootstrap CSS Images Reference

  https://www.w3schools.com/bootstrap/bootstrap_ref_css_images.asp
  
  #Bootstrap Text/Typography
https://www.w3schools.com/bootstrap/bootstrap_typography.asp
https://getbootstrap.com/docs/4.0/components/badge/

#Cards
https://getbootstrap.com/docs/4.0/components/card/

https://www.w3schools.com/howto/howto_css_cards.asp

===============================================================================================================================================================================

#New 2

#changes

 Service_zone > zone_id in table medical
 
 
CREATE TABLE `zone` (
`zone_id` int(20) ,
`zone_name` varchar(30) ,
PRIMARY KEY (zone_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8_general_ci;

CREATE TABLE `grade`(
`grade_id` int(20) ,
`grade_name` varchar(30) ,
PRIMARY KEY (grade_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8_general_ci;

CREATE TABLE `specialty`(
`specialty_id` int(20) ,
`specialty_name` varchar(50) ,
PRIMARY KEY (specialty_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8_general_ci;



CREATE TABLE `service`(
`service_id` int(20) ,
`service_name` varchar(30) ,
`specialty_id` int(20) ,
`grade_id` int(20) ,
`zone_id` int(20) ,
`service_price` decimal(8,2) ,
`service_phone1` varchar(20) ,
`service_phone2` varchar(20) ,
`service_address` varchar(120) ,
`service_status` enum('0','1') NOT NULL COMMENT '0-active,1-inactive',
`service_image` varchar(100) ,
PRIMARY KEY (service_id),
FOREIGN KEY (specialty_id) REFERENCES specialty(specialty_id)  ,
FOREIGN KEY (grade_id) REFERENCES grade(grade_id)  ,
FOREIGN KEY (zone_id) REFERENCES zone(zone_id)  
) ENGINE=MyISAM DEFAULT CHARSET=utf8_general_ci;






---------------------------------------------------
CREATE VIEW medical
AS 
SELECT  a.service_name, b.specialty_name,a.service_price,a.service_phone1,a.service_phone2,a.service_address,a.service_image,c.grade_name,d.zone_name
FROM service a, specialty b, grade c , zone  d
WHERE 
a.specialty_id = b.specialty_id
and
a.grade_id = c.grade_id
and 
a.zone_id = d.zone_id
and a.service_status ='1'



google maps

https://www.google.com/maps/place/12+‘«—⁄+«·ﬁ«÷Ï+«·›«÷·+«·√»—«ÂÌ„Ì…+«·√”ﬂ‰œ—Ì…


-------------------------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `user_details` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_type` enum('master','user') NOT NULL,
  `user_status` enum('Active','Inactive') NOT NULL,
   `emp_id` int(11) NOT NULL,
   
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_email`, `user_password`, `user_name`, `user_type`, `user_status`) VALUES
(1, 'john_smith@gmail.com', '$2y$10$0Yo2F.EetL3yhB8l6MNvcOH8AYNS0SuXLOoAQr1qXJa3uPASWV0NC', 'John Smith', 'master', 'Active'),
(2, 'donahuber@gmail.com', '$2y$10$Ex.JTn6Cu7lCHgaJoCBVeu0qer0cFp2X1qTIpPg2qfIkkuj3LjjMK', 'Dona L. Huber', 'user', 'Active'),
(3, 'roy_hise@gmail.com', '$2y$10$XlyVI9an5B6rHW3SS9vQpesJssKJxzMQYPbSaR7dnpWjDI5fpxJSS', 'Roy Hise', 'user', 'Active'),
(4, 'peter_goad@gmail.com', '$2y$10$n1B.FdHNwufTkmzp/pNqc.EiwjB8quQ1tBCEC7nkaldI5pS.et04e', 'Peter Goad', 'user', 'Active'),
(5, 'sarah_thomas@gmail.com', '$2y$10$s57SErOPlgkIZf1lxzlX3.hMt8LSSKaYig5rusxghDm7LW8RtQc/W', 'Sarah Thomas', 'user', 'Active'),
(6, 'edna_william@gmail.com', '$2y$10$mfMXnH.TCmg5tlYRhqjxu.ILly8s9.qsLKOpyxgUl6h1fZt6x/B5C', 'Edna William', 'user', 'Active'),
(8, 'john_parks@gmail.com', '$2y$10$WtsZUxIIz/N4NoIW0Db.pu0VfLWcPs6TyQ8SkpVHLDLGhdNOfALC.', 'John Park', 'user', 'Active'),
(10, 'peter_parker@gmail.com', '$2y$10$GoQvEZNTWEibo0FPK7h57eA5UsNkXfIdex1deGsW/CFIY8zqxyu2S', 'Mark Parker', 'user', 'Active');

--
-- Indexes for dumped tables
--