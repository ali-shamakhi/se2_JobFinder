Karyab Project
=========

A Symfony project created on August 1, 2016, 4:12 pm by Mohammad Z


Karyab for Shahid Behehti University

Project Managers: Mahdi Fatemian & Mohammad ZamanZadeh


CREATE TABLE swdt_karjoo_extra (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, student_id VARCHAR(10) DEFAULT NULL, national_id VARCHAR(10) DEFAULT NULL, about LONGTEXT DEFAULT NULL, avatar VARCHAR(255) DEFAULT NULL, telephone VARCHAR(12) DEFAULT NULL, soldiering SMALLINT DEFAULT NULL, grade SMALLINT DEFAULT NULL, resume LONGTEXT DEFAULT NULL, website VARCHAR(255) DEFAULT NULL, is_student SMALLINT DEFAULT NULL, current_university VARCHAR(255) DEFAULT NULL, current_field VARCHAR(255) DEFAULT NULL, diplom_univesity VARCHAR(255) DEFAULT NULL, diplom_field VARCHAR(255) DEFAULT NULL, fogh_diplom_univesity VARCHAR(255) DEFAULT NULL, fogh_diplom_field VARCHAR(255) DEFAULT NULL, licanse_univesity VARCHAR(255) DEFAULT NULL, licanse_field VARCHAR(255) DEFAULT NULL, fogh_licanse_univesity VARCHAR(255) DEFAULT NULL, fogh_licanse_field VARCHAR(255) DEFAULT NULL, phd_univesity VARCHAR(255) DEFAULT NULL, phd_field VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_38BEC09CCB944F1A (student_id), UNIQUE INDEX UNIQ_38BEC09C36491297 (national_id), UNIQUE INDEX UNIQ_38BEC09CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE swdt_karfarma_extra (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, company_name VARCHAR(100) DEFAULT NULL, company_email VARCHAR(100) DEFAULT NULL, company_field VARCHAR(100) DEFAULT NULL, telephone VARCHAR(12) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, avatar VARCHAR(255) DEFAULT NULL, about LONGTEXT DEFAULT NULL, national_id VARCHAR(10) DEFAULT NULL, about_pic VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_68771A5F36491297 (national_id), UNIQUE INDEX UNIQ_68771A5FA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
ALTER TABLE swdt_karjoo_extra ADD CONSTRAINT FK_38BEC09CA76ED395 FOREIGN KEY (user_id) REFERENCES swdt_users (id);
ALTER TABLE swdt_karfarma_extra ADD CONSTRAINT FK_68771A5FA76ED395 FOREIGN KEY (user_id) REFERENCES swdt_users (id);
ALTER TABLE swdt_karfarma_extra ADD website VARCHAR(255) DEFAULT NULL;
ALTER TABLE swdt_advertises CHANGE co_operation co_operation LONGTEXT DEFAULT NULL COMMENT '(DC2Type:json_array)';
ALTER TABLE swdt_karjoo_extra ADD co_operation LONGTEXT DEFAULT NULL COMMENT '(DC2Type:json_array)';
ALTER TABLE swdt_advertises ADD expire_date DATE DEFAULT NULL;

#DROP INDEX UNIQ_9C94A5ECB944F1A ON swdt_users;
#DROP INDEX UNIQ_9C94A5E36491297 ON swdt_users;
ALTER TABLE swdt_users DROP telephone, DROP company_name, DROP company_email, DROP avatar, DROP address, DROP soldiering, DROP student_id, DROP grade, DROP national_id, DROP company_field, DROP about, DROP resume, DROP website, DROP is_student, DROP current_university, DROP current_field, DROP diplom_univesity, DROP diplom_field, DROP fogh_diplom_univesity, DROP fogh_diplom_field, DROP licanse_univesity, DROP licanse_field, DROP fogh_licanse_univesity, DROP fogh_licanse_field, DROP phd_univesity, DROP phd_field, DROP about_pic;



INSERT INTO swdt_karfarma_extra(website,user_id,company_name,company_email,company_field,telephone,address,avatar,about,national_id,about_pic) SELECT website,id,company_name,company_email,company_field,telephone,address,avatar,about,national_id,about_pic FROM swdt_users WHERE roles LIKE '%ROLE_KARFARMA%';


INSERT INTO `swdt_karjoo_extra`( `user_id`, `student_id`, `national_id`, `about`, `avatar`, `telephone`, `soldiering`, `grade`, `resume`, `website`, `is_student`, `current_university`, `current_field`, `diplom_univesity`, `diplom_field`, `fogh_diplom_univesity`, `fogh_diplom_field`, `licanse_univesity`, `licanse_field`, `fogh_licanse_univesity`, `fogh_licanse_field`, `phd_univesity`, `phd_field`) SELECT `id`, `student_id`, `national_id`, `about`, `avatar`, `telephone`, `soldiering`, `grade`, `resume`, `website`, `is_student`, `current_university`, `current_field`, `diplom_univesity`, `diplom_field`, `fogh_diplom_univesity`, `fogh_diplom_field`, `licanse_univesity`, `licanse_field`, `fogh_licanse_univesity`, `fogh_licanse_field`, `phd_univesity`, `phd_field` FROM swdt_users WHERE roles LIKE '%ROLE_KARJOO%';

coOperation json!!!!!!!! reset fields to


