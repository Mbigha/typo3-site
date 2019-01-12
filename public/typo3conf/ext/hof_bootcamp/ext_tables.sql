#
# Table structure for table 'tx_hofbootcamp_domain_model_day'
#
CREATE TABLE tx_hofbootcamp_domain_model_day (

	date date DEFAULT NULL,
	day_number int(11) DEFAULT '0' NOT NULL,
	times_slots int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_hofbootcamp_domain_model_timeslot'
#
CREATE TABLE tx_hofbootcamp_domain_model_timeslot (

	day int(11) unsigned DEFAULT '0' NOT NULL,

	time_range varchar(255) DEFAULT '' NOT NULL,
	sessions int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_hofbootcamp_domain_model_session'
#
CREATE TABLE tx_hofbootcamp_domain_model_session (

	timeslot int(11) unsigned DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	description text,
	max_participants int(11) DEFAULT '0' NOT NULL,
	start datetime DEFAULT NULL,
	end datetime DEFAULT NULL,
	location int(11) unsigned DEFAULT '0',
	speakers int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_hofbootcamp_domain_model_speaker'
#
CREATE TABLE tx_hofbootcamp_domain_model_speaker (

	title varchar(255) DEFAULT '' NOT NULL,
	first_name varchar(255) DEFAULT '' NOT NULL,
	last_name varchar(255) DEFAULT '' NOT NULL,
	organisation varchar(255) DEFAULT '' NOT NULL,
	url varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	image int(11) unsigned NOT NULL default '0',

);

#
# Table structure for table 'tx_hofbootcamp_domain_model_location'
#
CREATE TABLE tx_hofbootcamp_domain_model_location (

	room varchar(255) DEFAULT '' NOT NULL,
	max_participants int(11) DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_hofbootcamp_domain_model_timeslot'
#
CREATE TABLE tx_hofbootcamp_domain_model_timeslot (

	day int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_hofbootcamp_domain_model_session'
#
CREATE TABLE tx_hofbootcamp_domain_model_session (

	timeslot int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_hofbootcamp_session_speaker_mm'
#
CREATE TABLE tx_hofbootcamp_session_speaker_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
