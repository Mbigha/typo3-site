#
# Table structure for table 'tx_bootcamp2_domain_model_timeslot'
#
CREATE TABLE tx_bootcamp2_domain_model_timeslot (

	day int(11) unsigned DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	day date DEFAULT NULL,
	sessions int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_bootcamp2_domain_model_session'
#
CREATE TABLE tx_bootcamp2_domain_model_session (

	timeslot int(11) unsigned DEFAULT '0' NOT NULL,

	title varchar(255) DEFAULT '' NOT NULL,
	description text,
	speakers int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_bootcamp2_domain_model_speaker'
#
CREATE TABLE tx_bootcamp2_domain_model_speaker (

	name varchar(255) DEFAULT '' NOT NULL,
	speakers int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_bootcamp2_domain_model_day'
#
CREATE TABLE tx_bootcamp2_domain_model_day (

	title date DEFAULT NULL,
	day_number int(11) DEFAULT '0' NOT NULL,
	timeslots int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_bootcamp2_domain_model_session'
#
CREATE TABLE tx_bootcamp2_domain_model_session (

	timeslot int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_bootcamp2_session_speaker_mm'
#
CREATE TABLE tx_bootcamp2_session_speaker_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_bootcamp2_domain_model_timeslot'
#
CREATE TABLE tx_bootcamp2_domain_model_timeslot (

	day int(11) unsigned DEFAULT '0' NOT NULL,

);
