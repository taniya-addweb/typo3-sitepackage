CREATE TABLE tx_slider_domain_model_slider (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    title varchar(255) DEFAULT '' NOT NULL,
    description text DEFAULT '' NOT NULL,
    images text DEFAULT '' NOT NULL,
    captions text DEFAULT '' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) DEFAULT '0' NOT NULL,
    PRIMARY KEY (uid)
);

