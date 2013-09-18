DROP TABLE IF EXISTS `dw_account`;
CREATE TABLE `dw_account` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '�û�����',
  `total` decimal(11,2) default '0.00' COMMENT '�ʽ��ܶ�',
  `use_money` decimal(11,2) default '0.00',
  `no_use_money` decimal(11,2) default '0.00',
  `collection` decimal(11,2) default '0.00',
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_account_bank`;
CREATE TABLE `dw_account_bank` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '�û�ID',
  `account` varchar(100) default NULL COMMENT '�˺�',
  `bank` varchar(50) default NULL COMMENT '��������',
  `branch` varchar(100) default NULL COMMENT '֧��',
  `province` int(5) default '0' COMMENT 'ʡ��',
  `city` int(5) default '0' COMMENT '����',
  `area` int(5) default '0' COMMENT '��',
  `addtime` varchar(11) default NULL,
  `addip` varchar(15) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=gbk COMMENT='�����ʻ�';

DROP TABLE IF EXISTS `dw_account_cash`;
CREATE TABLE `dw_account_cash` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '�û�ID',
  `status` int(2) default '0' COMMENT '״̬',
  `account` varchar(50) default '0' COMMENT '�˺�',
  `bank` text COMMENT '��������',
  `branch` varchar(100) default NULL COMMENT '֧��',
  `total` int(20) default '0' COMMENT '�ܶ�',
  `credited` varchar(20) default '0' COMMENT '�����ܶ�',
  `fee` varchar(20) default '0' COMMENT '������',
  `verify_userid` int(11) default NULL,
  `verify_time` int(11) default NULL,
  `verify_remark` varchar(250) default NULL,
  `addtime` varchar(11) default NULL,
  `addip` varchar(15) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_ids` (`user_id`,`status`),
  KEY `user_idv` (`user_id`,`status`,`verify_userid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=gbk COMMENT='���ּ�¼';

DROP TABLE IF EXISTS `dw_account_log`;
CREATE TABLE `dw_account_log` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '�û�ID',
  `type` varchar(100) default NULL COMMENT '����',
  `total` decimal(11,2) default '0.00',
  `money` decimal(20,2) default NULL COMMENT '���',
  `use_money` decimal(10,2) default '0.00' COMMENT '���ý��',
  `no_use_money` decimal(10,2) default '0.00' COMMENT '������',
  `collection` decimal(11,2) default '0.00',
  `to_user` int(11) default NULL COMMENT '���׶Է�',
  `remark` varchar(250) default '0' COMMENT '��ע',
  `addtime` varchar(11) default NULL,
  `addip` varchar(15) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1376 DEFAULT CHARSET=gbk COMMENT='�ʽ��¼';

DROP TABLE IF EXISTS `dw_account_payment`;
CREATE TABLE `dw_account_payment` (
  `id` mediumint(9) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `nid` varchar(100) default NULL,
  `status` int(2) default '0',
  `style` int(2) default NULL,
  `config` longtext,
  `fee` int(10) default '0',
  `fee_type` int(2) default NULL,
  `max_money` int(10) default NULL,
  `max_fee` int(10) default NULL,
  `description` longtext,
  `order` smallint(3) unsigned default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_account_recharge`;
CREATE TABLE `dw_account_recharge` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `trade_no` varchar(20) default NULL COMMENT '������',
  `user_id` int(11) default '0' COMMENT '�û�ID',
  `status` int(2) default '0' COMMENT '״̬',
  `money` decimal(10,2) default '0.00' COMMENT '���',
  `payment` varchar(100) default NULL COMMENT '��������',
  `return` text,
  `type` varchar(10) default '0' COMMENT '����',
  `remark` varchar(250) default '0' COMMENT '��ע',
  `fee` varchar(10) default NULL,
  `verify_userid` int(11) default '0' COMMENT '�����',
  `verify_time` varchar(11) default NULL COMMENT '���ʱ��',
  `verify_remark` varchar(250) default '' COMMENT '��˱�ע',
  `addtime` varchar(11) default NULL,
  `addip` varchar(15) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_ids` (`user_id`,`status`),
  KEY `user_idp` (`user_id`,`payment`),
  KEY `user_idv` (`user_id`,`payment`,`verify_userid`)
) ENGINE=MyISAM AUTO_INCREMENT=182 DEFAULT CHARSET=gbk COMMENT='��ֵ��¼';

DROP TABLE IF EXISTS `dw_ad`;
CREATE TABLE `dw_ad` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nid` varchar(20) NOT NULL default '',
  `order` int(10) NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  `litpic` varchar(100) NOT NULL default '',
  `timelimit` int(2) NOT NULL default '0',
  `firsttime` varchar(20) NOT NULL default '',
  `endtime` varchar(20) NOT NULL default '',
  `content` text NOT NULL,
  `endcontent` text NOT NULL,
  `addtime` varchar(50) NOT NULL default '',
  `addip` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `dw_area`;
CREATE TABLE `dw_area` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `nid` varchar(50) default NULL,
  `pid` int(11) default NULL,
  `domain` varchar(100) default NULL,
  `order` int(11) default NULL,
  PRIMARY KEY  (`id`),
  KEY `nid` (`nid`),
  KEY `nidp` (`nid`,`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=3577 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_article`;
CREATE TABLE `dw_article` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0',
  `name` varchar(255) default NULL,
  `littitle` varchar(200) default NULL,
  `status` int(2) default '0',
  `litpic` varchar(255) default NULL,
  `flag` varchar(50) default NULL,
  `source` varchar(50) default NULL,
  `publish` varchar(50) default NULL,
  `is_jump` char(1) default NULL,
  `author` varchar(50) default NULL,
  `jumpurl` varchar(255) default NULL,
  `summary` varchar(255) default NULL,
  `province` varchar(20) default NULL COMMENT 'ʡ��',
  `city` varchar(20) default NULL COMMENT '����',
  `area` varchar(20) default NULL COMMENT '��',
  `content` text,
  `order` int(11) default '0',
  `hits` int(11) default '0',
  `comment` int(11) default '0',
  `is_comment` char(1) default NULL,
  `user_id` int(11) default '0',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_article_fields`;
CREATE TABLE `dw_article_fields` (
  `aid` int(11) unsigned NOT NULL default '0',
  `files` varchar(255) default NULL,
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_attestation`;
CREATE TABLE `dw_attestation` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '�û�����',
  `type_id` int(11) default '0' COMMENT '�ϴ�������',
  `name` varchar(255) default NULL,
  `status` int(2) default '0' COMMENT '��֤��״̬',
  `litpic` varchar(255) default NULL COMMENT '��֤��ͼƬ',
  `content` varchar(255) default NULL COMMENT '��֤�ļ��',
  `jifen` int(20) default '0' COMMENT '��֤�Ļ���',
  `pic` text,
  `pic2` varchar(100) default NULL,
  `pic3` varchar(100) default NULL,
  `verify_time` varchar(32) default NULL COMMENT '���ʱ��',
  `verify_user` int(11) default NULL COMMENT '�����',
  `verify_remark` varchar(250) default NULL COMMENT '��˱�ע',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `type_id` (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=284 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_attestation_type`;
CREATE TABLE `dw_attestation_type` (
  `type_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(50) default NULL COMMENT '��������',
  `order` varchar(10) default NULL,
  `status` int(2) default NULL,
  `jifen` int(20) default '0' COMMENT '����',
  `summary` varchar(200) default NULL COMMENT '���',
  `remark` varchar(200) default NULL COMMENT '��ע',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_bbs_credits`;
CREATE TABLE `dw_bbs_credits` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `creditscode` char(45) default NULL,
  `creditsname` char(45) default NULL,
  `postvar` int(11) default '0',
  `replyvar` int(11) default '0',
  `goodvar` int(11) default '0',
  `uploadvar` int(11) default '0',
  `downvar` int(11) default '0',
  `votevar` int(11) default '0',
  `isuse` tinyint(1) unsigned default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk ROW_FORMAT=FIXED;

DROP TABLE IF EXISTS `dw_bbs_dirtywords`;
CREATE TABLE `dw_bbs_dirtywords` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `word` char(45) default NULL,
  `replaceto` char(45) default NULL,
  `type` tinyint(3) unsigned default '0',
  `doaction` tinyint(1) unsigned default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk ROW_FORMAT=FIXED;

DROP TABLE IF EXISTS `dw_bbs_forums`;
CREATE TABLE `dw_bbs_forums` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned default NULL,
  `name` varchar(45) default NULL,
  `content` varchar(200) default NULL,
  `rules` text,
  `picurl` varchar(100) default NULL,
  `admins` varchar(255) default NULL,
  `today_num` int(10) unsigned default '0',
  `topics_num` int(10) unsigned default '0',
  `posts_num` int(10) unsigned default '0',
  `last_postname` varchar(45) default NULL,
  `last_postuser` varchar(45) default NULL,
  `last_postusername` varchar(30) default NULL,
  `last_posttime` int(10) unsigned default '0',
  `last_postid` int(10) unsigned default '0',
  `isverify` tinyint(1) unsigned default '0',
  `forumpass` varchar(45) default NULL,
  `forumusers` text,
  `forumgroups` text,
  `showtype` tinyint(1) unsigned default '0',
  `ishidden` tinyint(1) unsigned default '0',
  `order` int(10) unsigned default NULL,
  `keywords` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk ROW_FORMAT=FIXED;

DROP TABLE IF EXISTS `dw_bbs_posts`;
CREATE TABLE `dw_bbs_posts` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tid` int(10) unsigned default NULL,
  `istopic` tinyint(1) unsigned default '0',
  `fid` int(10) unsigned default '0',
  `user_id` int(10) unsigned default '0',
  `username` varchar(45) default NULL,
  `name` varchar(100) default NULL,
  `content` text,
  `edittime` int(10) unsigned default '0',
  `iscover` tinyint(1) unsigned default '0',
  `isverify` int(1) unsigned default '0',
  `verifydesc` varchar(255) default NULL,
  `addtime` varchar(11) default NULL,
  `addip` varchar(15) default NULL,
  PRIMARY KEY  (`id`),
  KEY `fid` (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=325 DEFAULT CHARSET=gbk ROW_FORMAT=DYNAMIC;

DROP TABLE IF EXISTS `dw_bbs_reward`;
CREATE TABLE `dw_bbs_reward` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tid` int(10) unsigned default '0',
  `userid` int(10) unsigned default '0',
  `bestid` int(10) unsigned default '0',
  `reward` int(10) unsigned default '0',
  `rewardcredits` varchar(8) default NULL,
  PRIMARY KEY  (`id`),
  KEY `tid` (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_bbs_settings`;
CREATE TABLE `dw_bbs_settings` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(30) default NULL,
  `nid` varchar(50) default NULL,
  `value` varchar(250) default NULL,
  `type` int(11) default '0',
  `style` int(2) default NULL,
  `status` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_bbs_topics`;
CREATE TABLE `dw_bbs_topics` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `fid` int(10) unsigned default '0',
  `user_id` int(10) unsigned default '0',
  `status` int(11) NOT NULL default '0',
  `username` varchar(45) default NULL,
  `name` varchar(45) default NULL,
  `content` text,
  `posttime` int(10) unsigned default '0',
  `edittime` int(10) unsigned default '0',
  `ordertime` int(10) unsigned default '0',
  `last_replytime` varchar(30) default NULL,
  `last_replyuser` int(11) default NULL,
  `last_replyusername` varchar(30) default NULL,
  `type` tinyint(1) unsigned default '0',
  `posts_num` int(10) unsigned default '0',
  `hits` int(10) unsigned default '0',
  `islock` tinyint(1) unsigned default '0',
  `isgood` tinyint(1) unsigned default '0',
  `istop` tinyint(1) unsigned default '0',
  `isalltop` tinyint(1) unsigned default '0',
  `stamp` tinyint(1) unsigned default '0',
  `isrecycle` tinyint(1) unsigned default '0',
  `credit` int(11) default NULL,
  `verifystate` tinyint(1) unsigned default '0',
  `verifydesc` varchar(255) default NULL,
  `isresolved` tinyint(1) unsigned default '0',
  `attachicon` varchar(45) default NULL,
  `highlight` varchar(20) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `topictype` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=301 DEFAULT CHARSET=gbk ROW_FORMAT=DYNAMIC;

DROP TABLE IF EXISTS `dw_borrow`;
CREATE TABLE `dw_borrow` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '����վ��',
  `user_id` int(11) default '0' COMMENT '�û�����',
  `name` varchar(255) default NULL COMMENT '����',
  `status` int(2) default '0' COMMENT '״̬',
  `order` int(11) default '0' COMMENT '����',
  `hits` int(11) default '0' COMMENT '�������',
  `litpic` varchar(255) default NULL COMMENT '����ͼ',
  `flag` varchar(50) default NULL COMMENT '����',
  `is_vouch` int(2) NOT NULL default '0',
  `type` varchar(50) NOT NULL default '',
  `view_type` int(11) NOT NULL default '0',
  `vouch_award` varchar(40) NOT NULL default '',
  `vouch_user` varchar(100) NOT NULL default '',
  `vouch_account` varchar(50) NOT NULL default '',
  `vouch_times` int(11) NOT NULL default '0',
  `source` varchar(50) default NULL COMMENT '��Դ',
  `publish` varchar(50) default NULL COMMENT '����ʱ��',
  `customer` varchar(11) default NULL COMMENT '�ͷ�',
  `number_id` varchar(50) default NULL,
  `verify_user` varchar(11) default NULL COMMENT '�����',
  `verify_time` varchar(50) default NULL COMMENT '�ͷ�',
  `verify_remark` varchar(255) default NULL,
  `repayment_user` int(11) default '0',
  `forst_account` varchar(50) default '0',
  `repayment_account` varchar(50) default NULL,
  `monthly_repayment` varchar(50) default NULL COMMENT 'ÿ�»����',
  `repayment_yesaccount` varchar(50) default '0',
  `repayment_yesinterest` int(11) NOT NULL default '0',
  `repayment_time` varchar(50) default NULL,
  `repayment_remark` varchar(250) default NULL,
  `success_time` varchar(50) default NULL,
  `end_time` varchar(50) default NULL,
  `payment_account` varchar(50) default NULL,
  `each_time` varchar(50) default NULL,
  `use` varchar(50) default NULL COMMENT '��;',
  `time_limit` varchar(50) default NULL COMMENT '�������',
  `style` varchar(50) default NULL COMMENT '���ʽ',
  `account` varchar(50) default NULL COMMENT '����ܽ��',
  `account_yes` varchar(10) default '0',
  `tender_times` varchar(11) default '0',
  `apr` decimal(18,2) default NULL COMMENT '������',
  `lowest_account` varchar(50) default NULL COMMENT '���Ͷ����',
  `most_account` varchar(50) default NULL COMMENT '���Ͷ���ܶ�',
  `valid_time` varchar(50) default NULL COMMENT '��Чʱ��',
  `award` varchar(50) default NULL COMMENT 'Ͷ�꽱��',
  `part_account` varchar(50) default NULL COMMENT '��̯�������',
  `funds` varchar(50) default NULL COMMENT '���������ı���',
  `is_false` varchar(50) default NULL COMMENT '���ʧ��ʱҲͬ������ ',
  `open_account` varchar(50) default NULL COMMENT '�����ҵ��ʻ��ʽ����',
  `open_borrow` varchar(50) default NULL COMMENT '�����ҵĽ���ʽ����',
  `open_tender` varchar(50) default NULL COMMENT '�����ҵ�Ͷ���ʽ����',
  `open_credit` varchar(50) default NULL COMMENT '�����ҵ����ö�����',
  `content` text COMMENT '��ϸ˵��',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_ids` (`user_id`,`status`),
  KEY `user_idst` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_borrow_amount`;
CREATE TABLE `dw_borrow_amount` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `type` varchar(20) NOT NULL default '',
  `account` int(11) NOT NULL default '0',
  `newaccount` decimal(11,0) default '0',
  `oldaccount` int(11) NOT NULL default '0',
  `status` int(11) default '0',
  `addtime` varchar(30) NOT NULL default '',
  `content` text NOT NULL,
  `remark` text NOT NULL,
  `verify_remark` varchar(255) default NULL,
  `verify_time` varchar(10) default NULL,
  `verify_user` int(11) default NULL,
  `addip` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_borrow_amountlog`;
CREATE TABLE `dw_borrow_amountlog` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `type` varchar(50) NOT NULL default '',
  `amount_type` varchar(50) NOT NULL default '',
  `account` decimal(11,2) NOT NULL default '0.00',
  `account_total` decimal(11,2) NOT NULL default '0.00',
  `account_use` decimal(11,2) NOT NULL default '0.00',
  `account_nouse` decimal(11,2) NOT NULL default '0.00',
  `remark` varchar(250) character set gbk NOT NULL default '',
  `addtime` varchar(50) NOT NULL default '',
  `addip` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `dw_borrow_amountlog1`;
CREATE TABLE `dw_borrow_amountlog1` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `type` varchar(50) NOT NULL default '',
  `amount_type` varchar(50) NOT NULL default '',
  `account` decimal(11,2) NOT NULL default '0.00',
  `account_total` decimal(11,2) NOT NULL default '0.00',
  `account_use` decimal(11,2) NOT NULL default '0.00',
  `account_nouse` decimal(11,2) NOT NULL default '0.00',
  `remark` varchar(250) character set gbk NOT NULL default '',
  `addtime` varchar(50) NOT NULL default '',
  `addip` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `dw_borrow_collection`;
CREATE TABLE `dw_borrow_collection` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '����վ��',
  `status` int(2) default '0',
  `order` int(2) default NULL,
  `tender_id` int(11) default '0' COMMENT '���id',
  `repay_time` varchar(50) default NULL COMMENT '���ƻ���ʱ��',
  `repay_yestime` varchar(50) default NULL COMMENT '�Ѿ�����ʱ��',
  `repay_account` varchar(50) default '0' COMMENT 'Ԥ�����',
  `repay_yesaccount` varchar(50) default '0' COMMENT 'ʵ�����',
  `interest` varchar(50) default '0',
  `capital` varchar(50) default '0',
  `late_days` int(11) NOT NULL default '0',
  `late_interest` varchar(11) NOT NULL default '0',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=450 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_borrow_line`;
CREATE TABLE `dw_borrow_line` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '����վ��',
  `user_id` int(11) default '0' COMMENT '�û�����',
  `name` varchar(255) default NULL COMMENT '����',
  `status` int(2) default '0' COMMENT '״̬',
  `order` int(11) default '0' COMMENT '����',
  `hits` int(11) default '0' COMMENT '�������',
  `litpic` varchar(255) default NULL COMMENT '����ͼ',
  `flag` varchar(50) default NULL COMMENT '����',
  `type` int(2) default '0' COMMENT '�������',
  `borrow_use` int(10) default '0' COMMENT '������;',
  `borrow_qixian` int(10) default '0' COMMENT '��������',
  `province` int(10) default '0' COMMENT 'ʡ��',
  `city` int(10) default '0' COMMENT '����',
  `area` int(10) default '0' COMMENT '����',
  `account` varchar(11) default NULL COMMENT '������',
  `content` text COMMENT '��ϸ˵��',
  `pawn` varchar(2) default NULL COMMENT '���޵�Ѻ',
  `tel` varchar(15) default NULL COMMENT '�绰',
  `sex` varchar(2) default NULL COMMENT '�Ա�',
  `xing` varchar(11) default NULL COMMENT '��',
  `verify_user` int(11) default NULL COMMENT '�����',
  `verify_time` varchar(50) default NULL COMMENT '���ʱ��',
  `verify_remark` varchar(255) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_borrow_repayment`;
CREATE TABLE `dw_borrow_repayment` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '����վ��',
  `status` int(2) default '0',
  `webstatus` int(2) NOT NULL default '0' COMMENT '��վ����',
  `order` int(2) default NULL,
  `borrow_id` int(11) default '0' COMMENT '���id',
  `repayment_time` varchar(50) default NULL COMMENT '���ƻ���ʱ��',
  `repayment_yestime` varchar(50) default NULL COMMENT '�Ѿ�����ʱ��',
  `repayment_account` varchar(50) default '0' COMMENT 'Ԥ�����',
  `repayment_yesaccount` varchar(50) default '0' COMMENT 'ʵ�����',
  `late_days` int(11) NOT NULL default '0',
  `late_interest` varchar(11) NOT NULL default '0',
  `interest` varchar(50) default '0',
  `capital` varchar(50) default '0',
  `forfeit` varchar(50) default '0' COMMENT '���ɽ�',
  `reminder_fee` varchar(50) default '0' COMMENT '���շ�',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_idb` (`borrow_id`),
  KEY `user_idubs` (`borrow_id`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_borrow_tender`;
CREATE TABLE `dw_borrow_tender` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '����վ��',
  `user_id` int(11) default '0' COMMENT '�û�����',
  `status` int(2) default '0' COMMENT '״̬',
  `borrow_id` int(11) default '0',
  `money` varchar(50) default NULL,
  `account` varchar(10) default '0',
  `repayment_account` varchar(50) default '0' COMMENT '�ܶ�',
  `interest` varchar(11) NOT NULL default '0',
  `repayment_yesaccount` varchar(50) default '0' COMMENT '�ѻ��ܶ�',
  `wait_account` varchar(11) default '0' COMMENT '�����ܶ�',
  `wait_interest` varchar(11) default '0' COMMENT '������Ϣ',
  `repayment_yesinterest` varchar(50) default '0' COMMENT '�ѻ���Ϣ',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_idb` (`borrow_id`),
  KEY `user_idub` (`user_id`,`borrow_id`),
  KEY `user_idubs` (`user_id`,`borrow_id`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=241 DEFAULT CHARSET=gbk COMMENT='�б�';

DROP TABLE IF EXISTS `dw_borrow_union`;
CREATE TABLE `dw_borrow_union` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '����վ��',
  `user_id` int(11) default '0' COMMENT '�û�����',
  `name` varchar(255) default NULL COMMENT '����',
  `status` int(2) default '0' COMMENT '״̬',
  `order` int(11) default '0' COMMENT '����',
  `hits` int(11) default '0' COMMENT '�������',
  `litpic` varchar(255) default NULL COMMENT '����ͼ',
  `range` varchar(255) default NULL COMMENT '��Ӫ��Χ',
  `content` text COMMENT '��˾���',
  `verify_remark` varchar(255) default NULL,
  `verify_time` varchar(10) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_borrow_vouch`;
CREATE TABLE `dw_borrow_vouch` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `borrow_id` int(11) NOT NULL default '0',
  `status` int(2) NOT NULL default '0',
  `account` varchar(20) NOT NULL default '',
  `vouch_account` decimal(11,2) NOT NULL default '0.00',
  `content` text character set gbk NOT NULL,
  `award_fund` varchar(10) character set gbk NOT NULL default '',
  `award_account` decimal(11,2) NOT NULL default '0.00',
  `addtime` varchar(50) NOT NULL default '',
  `addip` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `dw_borrow_vouch_collection`;
CREATE TABLE `dw_borrow_vouch_collection` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `status` int(2) default '0',
  `user_id` int(11) NOT NULL default '0',
  `borrow_id` int(11) NOT NULL default '0',
  `order` int(2) default NULL,
  `vouch_id` int(11) default '0' COMMENT '���id',
  `repay_time` varchar(50) default NULL COMMENT '���ƻ���ʱ��',
  `repay_yestime` varchar(50) default NULL COMMENT '�Ѿ�����ʱ��',
  `repay_account` varchar(50) default '0' COMMENT 'Ԥ�����',
  `repay_yesaccount` varchar(50) default '0' COMMENT 'ʵ�����',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_borrow_vouch_repayment`;
CREATE TABLE `dw_borrow_vouch_repayment` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `status` int(2) default '0',
  `user_id` int(11) NOT NULL default '0',
  `borrow_id` int(11) NOT NULL default '0',
  `order` int(2) default NULL,
  `repay_time` varchar(50) default NULL COMMENT '���ƻ���ʱ��',
  `repay_yestime` varchar(50) default NULL COMMENT '�Ѿ�����ʱ��',
  `repay_account` varchar(50) default '0' COMMENT 'Ԥ�����',
  `repay_yesaccount` varchar(50) default '0' COMMENT 'ʵ�����',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_cache`;
CREATE TABLE `dw_cache` (
  `id` int(11) NOT NULL auto_increment,
  `date` varchar(20) default NULL,
  `user_num` int(11) default NULL,
  `user_online_num` int(11) default '0',
  `user_online_time` varchar(30) default NULL,
  `last_user` varchar(20) default NULL,
  `bbs_first_visit` int(20) default '0',
  `bbs_topics_num` int(11) default NULL,
  `bbs_posts_num` int(11) default NULL,
  `bbs_today_topics` int(11) default NULL,
  `bbs_today_posts` int(11) default NULL,
  `bbs_yesterday_topics` int(11) default NULL,
  `bbs_yesterday_posts` int(11) default NULL,
  `bbs_most_topics` int(11) default NULL,
  `bbs_most_posts` int(11) default NULL,
  `borrow_account` varchar(11) default '0',
  `borrow_success` varchar(20) default '0',
  `borrow_num` int(10) default '0',
  `borrow_successnum` varchar(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_cms_article`;
CREATE TABLE `dw_cms_article` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0',
  `title` varchar(255) default NULL,
  `littitle` varchar(250) default NULL,
  `status` int(2) default '0',
  `litpic` varchar(255) default NULL,
  `flag` varchar(255) default NULL,
  `source` varchar(50) default NULL,
  `is_jump` int(1) default NULL,
  `author` varchar(255) default NULL,
  `jumpurl` varchar(255) default NULL,
  `summary` varchar(255) default NULL,
  `content` text,
  `order` int(11) default '0',
  `hits` int(11) default '0',
  `comment` int(11) default '0',
  `is_comment` int(1) default NULL,
  `user_id` int(11) default '0',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_cms_article_fields`;
CREATE TABLE `dw_cms_article_fields` (
  `aid` int(11) NOT NULL auto_increment,
  `article_id` int(11) default NULL,
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_comment`;
CREATE TABLE `dw_comment` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) default '0',
  `user_id` int(11) default NULL,
  `module_code` varchar(50) default NULL,
  `article_id` int(11) default NULL,
  `comment` text,
  `flag` varchar(30) default NULL COMMENT '��������',
  `order` varchar(10) default NULL COMMENT '����',
  `status` int(2) default NULL COMMENT '״̬',
  `addtime` varchar(30) default NULL COMMENT '���ʱ��',
  `addip` varchar(30) default NULL COMMENT '���ip',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_credit`;
CREATE TABLE `dw_credit` (
  `user_id` int(11) NOT NULL default '0' COMMENT '��ԱID',
  `value` int(11) default '0' COMMENT '������ֵ',
  `op_user` int(11) default NULL COMMENT '������',
  `addtime` int(11) default NULL COMMENT '���ʱ��',
  `addip` varchar(30) default NULL COMMENT '���IP',
  `updatetime` varchar(11) default NULL COMMENT '������ʱ��',
  `updateip` varchar(30) default NULL COMMENT '������ID',
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='��Ա����';

DROP TABLE IF EXISTS `dw_credit_log`;
CREATE TABLE `dw_credit_log` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL COMMENT '��ԱID',
  `type_id` int(11) default '0' COMMENT '��������ID',
  `op` tinyint(1) default '1' COMMENT '�䶯����,1:����,2:����',
  `value` int(11) default '0' COMMENT '�䶯������ֵ',
  `remark` text COMMENT '��ע',
  `op_user` int(11) default NULL COMMENT '������',
  `addtime` int(11) default NULL COMMENT '���ʱ��',
  `addip` varchar(30) default NULL COMMENT '���IP',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=483 DEFAULT CHARSET=gbk COMMENT='��Ա������־';

DROP TABLE IF EXISTS `dw_credit_rank`;
CREATE TABLE `dw_credit_rank` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) default NULL COMMENT '�ȼ�����',
  `rank` int(11) default '0' COMMENT '�ȼ�',
  `point1` int(11) default '0' COMMENT '��ʼ��ֵ',
  `point2` int(11) default '0' COMMENT '����ֵ',
  `pic` varchar(100) default NULL COMMENT 'ͼƬ',
  `remark` text COMMENT '��ע',
  `addtime` int(11) default NULL COMMENT '���ʱ��',
  `addip` varchar(30) default NULL COMMENT '���IP',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=gbk COMMENT='��Ա������־';

DROP TABLE IF EXISTS `dw_credit_type`;
CREATE TABLE `dw_credit_type` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) default NULL COMMENT '��������',
  `nid` varchar(50) default NULL COMMENT '���ִ���',
  `value` int(11) default '0' COMMENT '������ֵ',
  `cycle` tinyint(1) default '2' COMMENT '�������ڣ�1:һ��,2:ÿ��,3:�������,4:����',
  `award_times` tinyint(4) default NULL COMMENT '��������,0:����',
  `interval` int(11) default '1' COMMENT 'ʱ��������λ����',
  `remark` text COMMENT '��ע',
  `op_user` int(11) default NULL COMMENT '������',
  `addtime` int(11) default NULL COMMENT '���ʱ��',
  `addip` varchar(30) default NULL COMMENT '���IP',
  `updatetime` int(11) default NULL COMMENT '������ʱ��',
  `updateip` varchar(30) default NULL COMMENT '������ID',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idx_ct_nid` (`nid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gbk COMMENT='��������';

DROP TABLE IF EXISTS `dw_editor`;
CREATE TABLE `dw_editor` (
  `editor_id` int(11) NOT NULL auto_increment,
  `code` varchar(50) default NULL,
  `name` varchar(50) default NULL,
  `description` varchar(255) default NULL,
  `version` varchar(20) default NULL,
  `author` varchar(20) default NULL,
  `date` varchar(20) default NULL,
  `api` text,
  PRIMARY KEY  (`editor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_fee`;
CREATE TABLE `dw_fee` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) default NULL COMMENT '����',
  `nid` int(11) default NULL COMMENT '��ĿID',
  `value` varchar(30) default NULL COMMENT 'ֵ',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_fields`;
CREATE TABLE `dw_fields` (
  `fields_id` int(11) unsigned NOT NULL auto_increment,
  `code` varchar(50) default NULL,
  `name` varchar(50) default NULL,
  `nid` varchar(50) default NULL,
  `type` varchar(50) default NULL,
  `size` varchar(50) default NULL,
  `input` varchar(50) default NULL,
  `description` varchar(255) default NULL,
  `default` varchar(255) default NULL,
  `select` varchar(100) default NULL,
  `order` int(11) default '0',
  PRIMARY KEY  (`fields_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_flag`;
CREATE TABLE `dw_flag` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `nid` varchar(50) default NULL,
  `order` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_friends`;
CREATE TABLE `dw_friends` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '�û�',
  `friends_userid` int(11) default '0' COMMENT '����',
  `friends_username` varchar(50) default NULL,
  `status` int(2) default '0' COMMENT '״̬',
  `type` int(2) default '0' COMMENT '����',
  `content` varchar(255) default NULL COMMENT '����',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk COMMENT='����';

DROP TABLE IF EXISTS `dw_friends_request`;
CREATE TABLE `dw_friends_request` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '�û�',
  `friends_userid` int(11) default '0' COMMENT '����',
  `status` int(2) default '0' COMMENT '״̬',
  `type` int(2) default '0',
  `content` varchar(250) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk COMMENT='���Ѽ�¼';

DROP TABLE IF EXISTS `dw_help`;
CREATE TABLE `dw_help` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `type_id` int(11) default '0',
  `name` varchar(255) default NULL,
  `smallname` varchar(200) default NULL,
  `status` int(2) default '0',
  `litpic` varchar(255) default NULL,
  `flag` varchar(50) default NULL,
  `publish` varchar(50) default NULL,
  `is_jump` int(1) default NULL,
  `author` varchar(50) default NULL,
  `source` varchar(50) default NULL,
  `summary` varchar(255) default NULL,
  `province` varchar(20) default NULL COMMENT 'ʡ��',
  `city` varchar(20) default NULL COMMENT '����',
  `area` varchar(20) default NULL COMMENT '��',
  `jumpurl` varchar(255) default NULL,
  `content` text,
  `order` int(11) default '0',
  `hits` int(11) default '0',
  `comment` int(11) default '0',
  `is_comment` int(1) default NULL,
  `user_id` int(11) default '0',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_help_type`;
CREATE TABLE `dw_help_type` (
  `type_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `nid` varchar(50) default NULL,
  `pid` int(2) default '0',
  `order` int(11) default NULL,
  `status` int(11) default NULL,
  `content` text,
  `list_name` varchar(200) default NULL,
  `content_name` varchar(200) default NULL,
  `index_tpl` varchar(250) default NULL,
  `list_tpl` varchar(250) default NULL,
  `content_tpl` varchar(250) default NULL,
  `title` varchar(250) default NULL,
  `keywords` varchar(250) default NULL,
  `description` varchar(250) default NULL,
  `user_id` int(11) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_home`;
CREATE TABLE `dw_home` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '����վ��',
  `user_id` int(11) default '0' COMMENT '�û�����',
  `name` varchar(255) default NULL COMMENT '����',
  `status` int(2) default '0' COMMENT '״̬',
  `order` int(11) default '0' COMMENT '����',
  `hits` int(11) default '0' COMMENT '�������',
  `litpic` varchar(255) default NULL COMMENT '����ͼ',
  `flag` varchar(50) default NULL COMMENT '����',
  `source` varchar(50) default NULL COMMENT '��Դ',
  `publish` varchar(50) default NULL COMMENT '����ʱ��',
  `xiaoqu` varchar(50) default NULL COMMENT 'С��',
  `shi` varchar(10) default NULL COMMENT '��',
  `ting` varchar(10) default NULL COMMENT '��',
  `wei` varchar(10) default NULL COMMENT '��',
  `louceng` varchar(10) default NULL COMMENT '¥��',
  `zonglouceng` varchar(10) default NULL COMMENT '��¥��',
  `loupan` varchar(10) default NULL COMMENT '¥��',
  `zhucegongsi` varchar(10) default NULL COMMENT '�Ƿ�ע�ṫ˾',
  `mianji` varchar(10) default NULL COMMENT '���',
  `mianji1` varchar(10) default NULL COMMENT '�������1',
  `mianji2` varchar(10) default NULL COMMENT '�������2',
  `fangshi` varchar(10) default NULL COMMENT '���ⷽʽ',
  `leixing` varchar(10) default NULL COMMENT '����',
  `zhuangxiu` varchar(10) default NULL COMMENT 'װ��',
  `chaoxiang` varchar(10) default NULL COMMENT '����',
  `zujin` varchar(10) default NULL COMMENT '���',
  `jiage` varchar(10) default NULL COMMENT '�ۼ�',
  `jiage1` varchar(10) default NULL COMMENT '�����ۼ�1',
  `jiage2` varchar(10) default NULL COMMENT '�����ۼ�2',
  `jiageleixing` varchar(10) default NULL COMMENT '�۸�����',
  `lishijingying` varchar(10) default NULL COMMENT '��ʷ��Ӫ',
  `jibenqingkuang` varchar(10) default NULL COMMENT '�������',
  `diduan` varchar(10) default NULL COMMENT '�ض�',
  `diduan1` varchar(10) default NULL COMMENT '�ض�1',
  `diduan2` varchar(10) default NULL COMMENT '�ض�2',
  `fukuan` varchar(10) default NULL COMMENT '���ʽ',
  `linjin` varchar(10) default NULL COMMENT '�ٽ�',
  `peizhi` varchar(50) default NULL COMMENT '����',
  `tupian` varchar(250) default NULL COMMENT 'ͼƬ',
  `xianxingbie` varchar(250) default NULL COMMENT '�����Ա�',
  `chuzufangjian` varchar(250) default NULL COMMENT '���ⷿ��',
  `chuzuleixing` varchar(250) default NULL COMMENT '��������',
  `content` varchar(255) default NULL COMMENT '����˵��',
  `lianxiren` varchar(50) default NULL COMMENT '��ϵ��',
  `dianhua` varchar(50) default NULL COMMENT '�绰',
  `qq` varchar(50) default NULL COMMENT 'qq',
  `province` varchar(20) default NULL COMMENT 'ʡ��',
  `city` varchar(20) default NULL COMMENT '����',
  `area` varchar(20) default NULL COMMENT '��',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  `updatetime` varchar(50) default NULL,
  `updateip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_integral`;
CREATE TABLE `dw_integral` (
  `id` int(11) NOT NULL auto_increment,
  `site_id` int(11) default NULL,
  `name` varchar(100) default NULL COMMENT '��Ʒ����',
  `need` double default NULL COMMENT '�������',
  `number` int(11) default NULL COMMENT '����',
  `ex_number` int(11) default '0' COMMENT '�Ѷһ�����',
  `province` int(11) default NULL COMMENT '�ɶһ�ʡ��',
  `city` int(11) default NULL COMMENT '�ɶһ�����',
  `area` int(11) default NULL COMMENT '��',
  `litpic` varchar(100) default NULL COMMENT 'ͼƬ',
  `content` text COMMENT '��ϸ��Ϣ',
  `hits` int(11) default '0' COMMENT '�������',
  `top` int(11) default '0' COMMENT '������',
  `flag` varchar(30) default NULL COMMENT '��������',
  `order` varchar(10) default NULL COMMENT '����',
  `status` int(2) default NULL COMMENT '״̬',
  `addtime` varchar(30) default NULL COMMENT '���ʱ��',
  `addip` varchar(30) default NULL COMMENT '���ip',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_integral_convert`;
CREATE TABLE `dw_integral_convert` (
  `id` int(11) NOT NULL auto_increment,
  `integral_id` int(11) default NULL COMMENT '�һ���ƷID',
  `user_id` int(11) default NULL COMMENT '��ԱID',
  `number` int(11) default NULL COMMENT '����',
  `need` int(11) default NULL COMMENT '����Ҫ�Ļ���',
  `integral` int(11) default NULL COMMENT '�ܻ���',
  `status` int(2) default '0' COMMENT '״̬',
  `remark` varchar(200) default '' COMMENT '��ע',
  `addtime` varchar(30) default NULL COMMENT '���ʱ��',
  `addip` varchar(30) default NULL COMMENT '���ip',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_invest`;
CREATE TABLE `dw_invest` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '����վ��',
  `user_id` int(11) default '0' COMMENT '�û�����',
  `name` varchar(255) default NULL COMMENT '����',
  `status` int(2) default '0' COMMENT '״̬',
  `order` int(11) default '0' COMMENT '����',
  `hits` int(11) default '0' COMMENT '�������',
  `litpic` varchar(255) default NULL COMMENT '����ͼ',
  `flag` varchar(50) default NULL COMMENT '����',
  `source` varchar(50) default NULL COMMENT '��Դ',
  `publish` varchar(50) default NULL COMMENT '����ʱ��',
  `customer` int(11) default NULL COMMENT '�ͷ�',
  `verify_userid` int(11) default NULL COMMENT '�����',
  `verify_time` varchar(50) default NULL COMMENT '���ʱ��',
  `use` varchar(50) default NULL COMMENT '��;',
  `time_limit` varchar(50) default NULL COMMENT '�������',
  `style` varchar(50) default NULL COMMENT '���ʽ',
  `account` varchar(50) default NULL COMMENT '����ܽ��',
  `apr` varchar(50) default NULL COMMENT '������',
  `lowest_account` varchar(50) default NULL COMMENT '���Ͷ����',
  `most_account` varchar(50) default NULL COMMENT '���Ͷ���ܶ�',
  `valid_time` varchar(50) default NULL COMMENT '��Чʱ��',
  `award` varchar(50) default NULL COMMENT 'Ͷ�꽱��',
  `part_account` varchar(50) default NULL COMMENT '��̯�������',
  `funds` varchar(50) default NULL COMMENT '���������ı���',
  `is_false` varchar(50) default NULL COMMENT '���ʧ��ʱҲͬ������ ',
  `open_account` varchar(50) default NULL COMMENT '�����ҵ��ʻ��ʽ����',
  `open_borrow` varchar(50) default NULL COMMENT '�����ҵĽ���ʽ����',
  `open_tender` varchar(50) default NULL COMMENT '�����ҵ�Ͷ���ʽ����',
  `open_credit` varchar(50) default NULL COMMENT '�����ҵ����ö�����',
  `content` text COMMENT '��ϸ˵��',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_invite`;
CREATE TABLE `dw_invite` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `site_id` smallint(5) unsigned default '0',
  `status` smallint(2) unsigned default '0',
  `order` smallint(6) default '0',
  `flag` varchar(30) default '0',
  `type_id` smallint(5) unsigned default '0',
  `name` varchar(250) default NULL,
  `province` varchar(10) default NULL,
  `city` varchar(10) default NULL,
  `area` varchar(10) default NULL,
  `num` varchar(50) default NULL,
  `description` text,
  `demand` text,
  `hits` int(10) default '0',
  `addtime` int(10) default '0',
  `addip` varchar(20) default NULL,
  `uptime` int(10) default '0',
  `upip` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_invite_type`;
CREATE TABLE `dw_invite_type` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `typename` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_limitapp`;
CREATE TABLE `dw_limitapp` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '�û�����',
  `status` int(2) default '0' COMMENT '״̬',
  `order` int(11) default '0' COMMENT '����',
  `account` varchar(255) default NULL COMMENT 'Ҫ���ӵĶ��',
  `recommend_userid` varchar(255) default NULL COMMENT '�Ƽ���',
  `content` text COMMENT '��ϸ˵��',
  `other_content` text COMMENT '�����ط���ϸ˵��',
  `verify_userid` int(11) default NULL COMMENT '�����',
  `verify_time` varchar(50) default NULL COMMENT '���ʱ��',
  `verify_remark` varchar(50) default NULL COMMENT '��ע',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_linkage`;
CREATE TABLE `dw_linkage` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `status` smallint(2) unsigned default '0' COMMENT '״̬',
  `order` smallint(6) default '0' COMMENT '����',
  `type_id` smallint(5) unsigned default '0' COMMENT '����',
  `pid` varchar(30) default NULL COMMENT '��������',
  `name` varchar(250) default NULL COMMENT '��������',
  `value` varchar(250) default NULL COMMENT '������ֵ',
  `addtime` int(10) default '0',
  `addip` varchar(20) default NULL,
  PRIMARY KEY  (`id`),
  KEY `type_id` (`type_id`),
  KEY `type_ida` (`type_id`,`value`)
) ENGINE=MyISAM AUTO_INCREMENT=488 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_linkage_type`;
CREATE TABLE `dw_linkage_type` (
  `id` int(11) NOT NULL auto_increment,
  `order` smallint(6) default '0',
  `name` varchar(50) default NULL,
  `nid` varchar(50) default NULL,
  `addtime` int(10) default '0',
  `addip` varchar(20) default NULL,
  PRIMARY KEY  (`id`),
  KEY `nid` (`nid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_links`;
CREATE TABLE `dw_links` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `site_id` smallint(5) unsigned NOT NULL default '0',
  `status` smallint(2) unsigned NOT NULL default '0',
  `order` smallint(6) NOT NULL default '0',
  `flag` smallint(6) default NULL,
  `type_id` smallint(5) unsigned NOT NULL default '0',
  `url` char(60) NOT NULL default '',
  `webname` char(30) NOT NULL default '',
  `summary` char(200) NOT NULL default '',
  `linkman` char(50) NOT NULL default '',
  `email` char(50) NOT NULL default '',
  `logo` char(100) NOT NULL default '',
  `logoimg` char(100) NOT NULL default '',
  `province` char(10) NOT NULL default '',
  `city` char(10) NOT NULL default '',
  `area` char(10) NOT NULL default '',
  `hits` int(10) NOT NULL default '0',
  `addtime` int(10) NOT NULL default '0',
  `addip` char(20) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_links_type`;
CREATE TABLE `dw_links_type` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `typename` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_liuyan`;
CREATE TABLE `dw_liuyan` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(100) default NULL,
  `name` varchar(100) default NULL,
  `email` varchar(100) default NULL,
  `company` varchar(100) default NULL,
  `tel` varchar(100) default NULL,
  `fax` varchar(100) default NULL,
  `address` varchar(100) default NULL,
  `type` varchar(50) default NULL,
  `status` int(2) default '0',
  `litpic` varchar(255) default NULL,
  `content` text,
  `user_id` int(11) default '0',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  `reply` text,
  `reply_id` int(11) default '0',
  `replytime` varchar(50) default NULL,
  `replyip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_liuyan_set`;
CREATE TABLE `dw_liuyan_set` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `nid` varchar(100) default NULL,
  `value` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_message`;
CREATE TABLE `dw_message` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `sent_user` int(11) default '0' COMMENT '�����û�',
  `receive_user` int(11) default '0' COMMENT '�����û�',
  `name` varchar(255) default NULL COMMENT '����',
  `status` int(2) default '0' COMMENT '״̬',
  `type` varchar(50) default '0' COMMENT '����',
  `sented` varchar(2) default NULL,
  `deltype` int(2) default '0',
  `content` text COMMENT '����',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=771 DEFAULT CHARSET=gbk COMMENT='����Ϣ';

DROP TABLE IF EXISTS `dw_module`;
CREATE TABLE `dw_module` (
  `module_id` int(11) NOT NULL auto_increment,
  `code` varchar(50) default NULL,
  `name` varchar(50) default NULL,
  `description` varchar(255) default NULL,
  `default_field` varchar(200) default NULL,
  `content` text,
  `version` varchar(10) default NULL,
  `author` varchar(50) default NULL,
  `date` varchar(20) default NULL,
  `status` int(1) default NULL,
  `type` varchar(50) default NULL,
  `order` int(11) default NULL,
  `fields` int(2) default NULL,
  `purview` text,
  `remark` text,
  `issent` int(2) default NULL,
  `title_name` varchar(100) default NULL,
  `onlyone` int(2) default NULL,
  `index_tpl` varchar(50) default NULL,
  `list_tpl` varchar(50) default NULL,
  `content_tpl` varchar(50) default NULL,
  `search_tpl` varchar(100) default NULL,
  `article_status` int(2) default NULL,
  `visit_type` int(2) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`module_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_online`;
CREATE TABLE `dw_online` (
  `user_id` int(10) unsigned default '0',
  `username` varchar(45) default NULL,
  `type_id` varchar(10) default NULL,
  `tid` int(10) unsigned default '0',
  `fid` int(10) unsigned default '0',
  `atpage` varchar(30) default NULL,
  `ip` varchar(16) default NULL,
  `activetime` int(10) unsigned default '0',
  KEY `userid` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

DROP TABLE IF EXISTS `dw_payment`;
CREATE TABLE `dw_payment` (
  `id` mediumint(11) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `nid` varchar(100) default NULL,
  `status` smallint(3) unsigned default '0',
  `style` int(2) default NULL,
  `config` longtext,
  `fee_type` int(2) default NULL,
  `max_money` int(10) default NULL,
  `max_fee` int(10) default NULL,
  `description` longtext,
  `order` smallint(3) unsigned default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_payment_type`;
CREATE TABLE `dw_payment_type` (
  `id` mediumint(9) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `nid` varchar(100) default NULL,
  `type` varchar(30) default NULL,
  `description` longtext,
  `order` smallint(3) unsigned default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_remind`;
CREATE TABLE `dw_remind` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `nid` varchar(50) default NULL,
  `status` smallint(2) unsigned default '0' COMMENT '״̬',
  `order` smallint(6) default '0' COMMENT '����',
  `type_id` smallint(5) unsigned default '0' COMMENT '����',
  `message` smallint(2) unsigned default '0' COMMENT '����Ϣ',
  `email` smallint(2) unsigned default '0' COMMENT '����',
  `phone` smallint(2) unsigned default '0' COMMENT '�ֻ�',
  `addtime` int(10) default '0',
  `addip` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_remind_type`;
CREATE TABLE `dw_remind_type` (
  `id` int(11) NOT NULL auto_increment,
  `order` smallint(6) default '0',
  `name` varchar(50) default NULL,
  `nid` varchar(50) default NULL,
  `addtime` int(10) default '0',
  `addip` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_remind_user`;
CREATE TABLE `dw_remind_user` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `user_id` smallint(11) unsigned default NULL,
  `remind_id` smallint(5) unsigned default NULL,
  `message` smallint(2) unsigned default '0' COMMENT '����Ϣ',
  `email` smallint(2) unsigned default '0' COMMENT '����',
  `phone` smallint(2) unsigned default '0' COMMENT '�ֻ�',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_scrollpic`;
CREATE TABLE `dw_scrollpic` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `site_id` smallint(5) unsigned NOT NULL default '0',
  `status` smallint(2) unsigned NOT NULL default '0',
  `order` smallint(6) NOT NULL default '0',
  `flag` smallint(6) default NULL,
  `type_id` smallint(5) unsigned NOT NULL default '0',
  `url` char(60) NOT NULL default '',
  `name` char(100) NOT NULL default '',
  `pic` char(200) NOT NULL default '',
  `summary` char(250) NOT NULL default '',
  `hits` int(10) NOT NULL default '0',
  `addtime` int(10) NOT NULL default '0',
  `addip` char(20) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_scrollpic_type`;
CREATE TABLE `dw_scrollpic_type` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `typename` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_site`;
CREATE TABLE `dw_site` (
  `site_id` int(11) unsigned NOT NULL auto_increment,
  `code` varchar(50) default NULL,
  `name` varchar(255) default NULL,
  `nid` varchar(50) default NULL,
  `pid` int(2) default '0',
  `rank` varchar(50) default NULL,
  `url` varchar(255) default NULL,
  `aurl` varchar(255) default NULL,
  `isurl` varchar(2) default NULL,
  `order` int(11) default NULL,
  `status` int(11) default NULL,
  `style` varchar(2) default NULL,
  `litpic` varchar(50) default NULL,
  `content` text,
  `list_name` varchar(200) default NULL,
  `content_name` varchar(200) default NULL,
  `sitedir` varchar(200) default NULL,
  `visit_type` varchar(200) default NULL,
  `index_tpl` varchar(250) default NULL,
  `list_tpl` varchar(250) default NULL,
  `content_tpl` varchar(250) default NULL,
  `title` varchar(250) default NULL,
  `keywords` varchar(250) default NULL,
  `description` varchar(250) default NULL,
  `user_id` varchar(11) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`site_id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_system`;
CREATE TABLE `dw_system` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(30) default NULL,
  `nid` varchar(50) default NULL,
  `value` varchar(250) default NULL,
  `type` int(11) default '0',
  `style` int(2) default NULL,
  `status` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_upfiles`;
CREATE TABLE `dw_upfiles` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) default NULL COMMENT '����',
  `code` varchar(50) default NULL COMMENT 'ģ��',
  `aid` varchar(50) default NULL COMMENT '����ģ��id',
  `status` int(2) default '0' COMMENT '״̬',
  `user_id` int(11) NOT NULL default '0',
  `filetype` varchar(50) default NULL COMMENT '�ļ�����',
  `filename` varchar(100) default NULL COMMENT '�ļ�����',
  `filesize` int(10) default '0' COMMENT '�ļ���С',
  `fileurl` varchar(200) default NULL COMMENT '�ļ���ַ',
  `if_cover` int(2) default '0' COMMENT '�Ƿ����',
  `order` int(10) default '0' COMMENT '����',
  `hits` int(11) default '0' COMMENT '�������',
  `addtime` varchar(30) default NULL COMMENT '���ʱ��',
  `addip` varchar(30) default NULL COMMENT '���ip',
  `updatetime` varchar(30) default NULL COMMENT '�޸�ʱ��',
  `updateip` varchar(30) default NULL COMMENT '�޸�ip',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=388 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user`;
CREATE TABLE `dw_user` (
  `user_id` int(10) unsigned NOT NULL auto_increment,
  `type_id` int(11) default NULL,
  `order` int(11) default NULL,
  `purview` varchar(100) default NULL,
  `username` varchar(30) default NULL,
  `password` varchar(50) default NULL,
  `paypassword` varchar(50) default NULL,
  `islock` int(2) NOT NULL default '0',
  `invite_userid` varchar(11) default NULL COMMENT '�������',
  `invite_money` varchar(10) default '0' COMMENT '����ע�����',
  `real_status` varchar(2) default NULL,
  `card_type` varchar(10) default NULL,
  `card_id` varchar(50) default NULL,
  `card_pic1` varchar(150) default NULL,
  `card_pic2` varchar(150) default NULL,
  `nation` varchar(10) default NULL,
  `realname` varchar(20) default '',
  `integral` varchar(10) default NULL,
  `status` int(2) default '0',
  `avatar_status` int(2) default '0',
  `email_status` varchar(50) default NULL,
  `phone_status` varchar(50) default '0',
  `video_status` int(2) default '0' COMMENT '��Ƶ��֤',
  `scene_status` int(2) default '0' COMMENT '�ֳ���֤',
  `email` varchar(30) default NULL,
  `sex` varchar(10) default NULL,
  `litpic` varchar(250) default NULL,
  `tel` varchar(50) default NULL,
  `phone` varchar(50) default NULL,
  `qq` varchar(50) default NULL,
  `wangwang` varchar(100) default NULL,
  `question` varchar(10) default NULL,
  `answer` varchar(100) default NULL,
  `birthday` varchar(11) default NULL,
  `province` varchar(20) default NULL,
  `city` varchar(20) default NULL,
  `area` varchar(20) default NULL,
  `address` varchar(200) default NULL,
  `remind` text COMMENT '��������',
  `privacy` text COMMENT '��˽����',
  `logintime` int(11) default '0',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  `uptime` varchar(50) default NULL,
  `upip` varchar(50) default NULL,
  `lasttime` varchar(50) default NULL,
  `lastip` varchar(20) default NULL,
  PRIMARY KEY  (`user_id`),
  FULLTEXT KEY `purview` (`purview`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_amount`;
CREATE TABLE `dw_user_amount` (
  `id` int(11) unsigned NOT NULL auto_increment COMMENT '�����ָ����',
  `user_id` int(11) NOT NULL default '0',
  `credit` decimal(11,2) NOT NULL default '0.00',
  `credit_use` decimal(11,2) NOT NULL default '0.00',
  `credit_nouse` decimal(11,2) NOT NULL default '0.00',
  `borrow_vouch` decimal(11,2) NOT NULL default '0.00',
  `borrow_vouch_use` decimal(11,2) NOT NULL default '0.00',
  `borrow_vouch_nouse` decimal(11,2) NOT NULL default '0.00',
  `tender_vouch` decimal(11,2) NOT NULL default '0.00',
  `tender_vouch_use` decimal(11,2) NOT NULL default '0.00',
  `tender_vouch_nouse` decimal(11,2) NOT NULL default '0.00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_amountapply`;
CREATE TABLE `dw_user_amountapply` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `type` varchar(50) NOT NULL default '',
  `account` decimal(11,2) NOT NULL default '0.00',
  `account_new` decimal(11,2) default '0.00',
  `account_old` decimal(11,2) NOT NULL default '0.00',
  `status` int(11) default '0',
  `addtime` varchar(30) NOT NULL default '',
  `content` text NOT NULL,
  `remark` text NOT NULL,
  `verify_remark` varchar(255) default NULL,
  `verify_time` varchar(10) default NULL,
  `verify_user` int(11) default NULL,
  `addip` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_amountlog`;
CREATE TABLE `dw_user_amountlog` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `type` varchar(50) NOT NULL default '',
  `amount_type` varchar(50) NOT NULL default '',
  `account` decimal(11,2) NOT NULL default '0.00',
  `account_all` decimal(11,2) NOT NULL default '0.00',
  `account_use` decimal(11,2) NOT NULL default '0.00',
  `account_nouse` decimal(11,2) NOT NULL default '0.00',
  `remark` text NOT NULL,
  `addtime` varchar(50) NOT NULL default '',
  `addip` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_backup`;
CREATE TABLE `dw_user_backup` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '�û�����',
  `user_tel` varchar(50) NOT NULL default '',
  `user_email` varchar(50) NOT NULL default '',
  `user_phone` varchar(50) NOT NULL default '',
  `user_qq` varchar(50) NOT NULL default '',
  `user_address` varchar(50) NOT NULL default '',
  `user_nation` varchar(50) NOT NULL default '',
  `user_realname` varchar(50) NOT NULL default '',
  `name` varchar(255) default NULL COMMENT '����',
  `source` varchar(50) default NULL COMMENT '��Դ',
  `publish` varchar(50) default NULL COMMENT '����ʱ��',
  `marry` varchar(50) default NULL COMMENT '����',
  `child` varchar(10) default NULL COMMENT '��Ů',
  `education` varchar(10) default NULL COMMENT 'ѧ��',
  `income` varchar(10) default NULL COMMENT '����',
  `shebao` varchar(10) default NULL COMMENT '�籣',
  `shebaoid` varchar(50) default NULL COMMENT '�籣��',
  `housing` varchar(10) default NULL COMMENT 'ס������',
  `car` varchar(10) default NULL COMMENT '��',
  `late` varchar(10) default NULL COMMENT '����',
  `house_address` varchar(10) default NULL COMMENT '������ַ',
  `house_area` varchar(10) default NULL COMMENT '�������',
  `house_year` varchar(10) default NULL COMMENT '�������',
  `house_status` varchar(10) default NULL COMMENT '����',
  `house_holder1` varchar(10) default NULL COMMENT '��������Ȩ1',
  `house_holder2` varchar(10) default NULL COMMENT '��������Ȩ1',
  `house_right1` varchar(10) default NULL COMMENT '���ӷݶ�1',
  `house_right2` varchar(10) default NULL COMMENT '���ӷݶ�2',
  `house_loanyear` varchar(10) default NULL COMMENT '��������',
  `house_loanprice` varchar(10) default NULL COMMENT 'ÿ�¹���',
  `house_balance` varchar(10) default NULL COMMENT '�������',
  `house_bank` varchar(10) default NULL COMMENT '����',
  `company_name` varchar(10) default NULL COMMENT '��˾����',
  `company_type` varchar(10) default NULL COMMENT '��˾����',
  `company_industry` varchar(10) default NULL COMMENT '��˾��ҵ',
  `company_office` varchar(10) default NULL COMMENT '����ְλ',
  `company_jibie` varchar(10) default NULL COMMENT '��������',
  `company_worktime1` varchar(10) default NULL COMMENT '����ʱ��1',
  `company_worktime2` varchar(10) default NULL COMMENT '����ʱ��2',
  `company_workyear` varchar(10) default NULL COMMENT '��������',
  `company_tel` varchar(50) default NULL COMMENT '��˾�绰',
  `company_address` varchar(100) default NULL COMMENT '��˾��ַ',
  `company_weburl` varchar(100) default NULL COMMENT '��˾��վ',
  `company_reamrk` varchar(250) default NULL COMMENT '��˾��ע',
  `private_type` varchar(10) default NULL COMMENT '���',
  `private_date` varchar(10) default NULL COMMENT '����',
  `private_place` varchar(10) default NULL COMMENT '����',
  `private_rent` varchar(10) default NULL COMMENT '���',
  `private_term` varchar(10) default NULL COMMENT '����',
  `private_taxid` varchar(30) default NULL COMMENT '����˰��',
  `private_commerceid` varchar(50) default NULL COMMENT '���̵ǼǺ�',
  `private_income` varchar(100) default NULL COMMENT '����',
  `private_employee` varchar(100) default NULL COMMENT '��Ա',
  `finance_repayment` varchar(100) default NULL COMMENT 'ÿ���޵�Ѻ������',
  `finance_property` varchar(100) default NULL COMMENT '���з���',
  `finance_amount` varchar(100) default NULL COMMENT 'ÿ�·��ݰ��ҽ��',
  `finance_car` varchar(10) default NULL COMMENT '��������',
  `finance_caramount` varchar(100) default NULL COMMENT 'ÿ���������ҽ��',
  `finance_creditcard` varchar(100) default NULL COMMENT '���ÿ����',
  `mate_name` varchar(100) default NULL COMMENT '��ż����',
  `mate_salary` varchar(10) default NULL COMMENT 'н��',
  `mate_phone` varchar(100) default NULL COMMENT '�ֻ�',
  `mate_tel` varchar(100) default NULL COMMENT '�绰',
  `mate_type` varchar(10) default NULL COMMENT '��������',
  `mate_office` varchar(10) default NULL COMMENT '����ְλ',
  `mate_address` varchar(250) default NULL COMMENT '��ַ',
  `mate_income` varchar(100) default NULL COMMENT '����',
  `education_record` varchar(100) default NULL COMMENT 'ѧ��',
  `education_school` varchar(200) default NULL COMMENT 'ѧУ',
  `education_study` varchar(200) default NULL COMMENT 'רҵ',
  `education_time1` varchar(20) default NULL COMMENT 'ʱ��1',
  `education_time2` varchar(20) default NULL COMMENT 'ʱ��2',
  `tel` varchar(50) default NULL COMMENT '�绰',
  `phone` varchar(50) default NULL COMMENT '�ֻ�',
  `post` varchar(50) default NULL COMMENT '�ʱ�',
  `address` varchar(50) default NULL COMMENT '�ʱ�',
  `province` varchar(20) default NULL COMMENT 'ʡ��',
  `city` varchar(20) default NULL COMMENT '����',
  `area` varchar(20) default NULL COMMENT '��',
  `linkman1` varchar(50) default NULL COMMENT '��ϵ��1',
  `relation1` varchar(50) default NULL COMMENT '��ϵ1',
  `tel1` varchar(50) default NULL COMMENT '�绰1',
  `phone1` varchar(50) default NULL COMMENT '�ֻ�1',
  `linkman2` varchar(50) default NULL COMMENT '��ϵ��2',
  `relation2` varchar(50) default NULL COMMENT '��ϵ2',
  `tel2` varchar(50) default NULL COMMENT '�绰2',
  `phone2` varchar(50) default NULL COMMENT '�ֻ�2',
  `linkman3` varchar(50) default NULL COMMENT '��ϵ��3',
  `relation3` varchar(50) default NULL COMMENT '��ϵ3',
  `tel3` varchar(50) default NULL COMMENT '�绰3',
  `phone3` varchar(50) default NULL COMMENT '�ֻ�3',
  `msn` varchar(50) default NULL COMMENT 'MSN',
  `qq` varchar(50) default NULL COMMENT 'QQ',
  `wangwang` varchar(50) default NULL COMMENT 'WANGWANG',
  `ability` varchar(250) default NULL COMMENT '��������',
  `interest` varchar(250) default NULL COMMENT '���˰���',
  `others` varchar(250) default NULL COMMENT '����˵��',
  `experience` text COMMENT '��������',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  `updatetime` varchar(50) default NULL,
  `updateip` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `user_id_3` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_cache`;
CREATE TABLE `dw_user_cache` (
  `user_id` int(11) NOT NULL default '0',
  `kefu_userid` int(11) default NULL,
  `kefu_username` int(11) default NULL,
  `kefu_addtime` int(11) default NULL,
  `vip_status` int(2) default '0',
  `vip_remark` varchar(250) default NULL,
  `vip_money` varchar(100) default NULL,
  `vip_verify_remark` varchar(100) default NULL,
  `vip_verify_time` varchar(100) default NULL,
  `bbs_topics_num` int(11) default '0',
  `bbs_posts_num` int(11) default '0',
  `credit` int(11) default '0' COMMENT '����',
  `account` int(11) default '0' COMMENT '�ʻ��ܶ�',
  `account_use` int(11) default '0' COMMENT '���ý��',
  `account_nouse` int(11) default '0' COMMENT '������',
  `account_waitin` int(11) default '0' COMMENT '�����ܶ�',
  `account_waitintrest` int(11) default '0' COMMENT '������Ϣ',
  `account_intrest` int(11) default '0' COMMENT '��׬��Ϣ',
  `account_award` int(11) default '0' COMMENT 'Ͷ�꽱��',
  `account_payment` int(11) default '0' COMMENT '�����ܶ�',
  `account_expired` int(11) default '0' COMMENT '�����ܶ�',
  `account_waitvip` int(11) default '0' COMMENT 'vip���',
  `borrow_amount` int(11) default '3000' COMMENT '�����',
  `vouch_amount` int(11) NOT NULL default '0' COMMENT '�������',
  `borrow_loan` int(11) default '0' COMMENT '�ɹ����',
  `borrow_success` int(11) default '0' COMMENT '�ɹ����',
  `borrow_wait` int(11) default '0' COMMENT '�ȴ�����',
  `borrow_paymeng` int(11) default '0' COMMENT '�������',
  `friends_apply` int(11) default '0',
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_log`;
CREATE TABLE `dw_user_log` (
  `log_id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `query` varchar(50) default NULL,
  `url` varchar(200) default NULL,
  `result` varchar(100) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=571 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_sendemail_log`;
CREATE TABLE `dw_user_sendemail_log` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `status` int(2) default NULL,
  `title` varchar(250) default NULL,
  `type` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `user_id` int(11) default NULL,
  `msg` text,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=282 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_trend`;
CREATE TABLE `dw_user_trend` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `username` varchar(30) default NULL,
  `content` text,
  `addtime` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=gbk COMMENT='�û�������¼';

DROP TABLE IF EXISTS `dw_user_type`;
CREATE TABLE `dw_user_type` (
  `type_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `purview` text,
  `order` varchar(10) default NULL,
  `status` int(2) default NULL,
  `type` int(2) default NULL,
  `summary` varchar(200) default NULL,
  `remark` varchar(200) default NULL,
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_user_typechange`;
CREATE TABLE `dw_user_typechange` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `username` varchar(50) NOT NULL default '',
  `status` int(2) NOT NULL default '0',
  `old_type` varchar(10) NOT NULL default '',
  `new_type` varchar(10) NOT NULL default '',
  `content` varchar(255) NOT NULL default '',
  `addtime` varchar(20) NOT NULL default '',
  `addip` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `dw_user_visit`;
CREATE TABLE `dw_user_visit` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `visit_userid` int(11) default NULL,
  `addip` varchar(30) default NULL,
  `addtime` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_userinfo`;
CREATE TABLE `dw_userinfo` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `site_id` int(11) default '0' COMMENT '����վ��',
  `user_id` int(11) default '0' COMMENT '�û�����',
  `name` varchar(255) default NULL COMMENT '����',
  `status` int(2) default '0' COMMENT '״̬',
  `order` int(11) default '0' COMMENT '����',
  `hits` int(11) default '0' COMMENT '�������',
  `litpic` varchar(255) default NULL COMMENT '����ͼ',
  `flag` varchar(50) default NULL COMMENT '����',
  `source` varchar(50) default NULL COMMENT '��Դ',
  `publish` varchar(50) default NULL COMMENT '����ʱ��',
  `marry` varchar(50) default NULL COMMENT '����',
  `child` varchar(10) default NULL COMMENT '��Ů',
  `education` varchar(10) default NULL COMMENT 'ѧ��',
  `income` varchar(10) default NULL COMMENT '����',
  `shebao` varchar(10) default NULL COMMENT '�籣',
  `shebaoid` varchar(50) default NULL COMMENT '�籣��',
  `housing` varchar(10) default NULL COMMENT 'ס������',
  `car` varchar(10) default NULL COMMENT '��',
  `late` varchar(10) default NULL COMMENT '����',
  `house_address` varchar(10) default NULL COMMENT '������ַ',
  `house_area` varchar(10) default NULL COMMENT '�������',
  `house_year` varchar(10) default NULL COMMENT '�������',
  `house_status` varchar(10) default NULL COMMENT '����',
  `house_holder1` varchar(10) default NULL COMMENT '��������Ȩ1',
  `house_holder2` varchar(10) default NULL COMMENT '��������Ȩ1',
  `house_right1` varchar(10) default NULL COMMENT '���ӷݶ�1',
  `house_right2` varchar(10) default NULL COMMENT '���ӷݶ�2',
  `house_loanyear` varchar(10) default NULL COMMENT '��������',
  `house_loanprice` varchar(10) default NULL COMMENT 'ÿ�¹���',
  `house_balance` varchar(10) default NULL COMMENT '�������',
  `house_bank` varchar(10) default NULL COMMENT '����',
  `company_name` varchar(10) default NULL COMMENT '��˾����',
  `company_type` varchar(10) default NULL COMMENT '��˾����',
  `company_industry` varchar(10) default NULL COMMENT '��˾��ҵ',
  `company_office` varchar(10) default NULL COMMENT '����ְλ',
  `company_jibie` varchar(10) default NULL COMMENT '��������',
  `company_worktime1` varchar(10) default NULL COMMENT '����ʱ��1',
  `company_worktime2` varchar(10) default NULL COMMENT '����ʱ��2',
  `company_workyear` varchar(10) default NULL COMMENT '��������',
  `company_tel` varchar(50) default NULL COMMENT '��˾�绰',
  `company_address` varchar(100) default NULL COMMENT '��˾��ַ',
  `company_weburl` varchar(100) default NULL COMMENT '��˾��վ',
  `company_reamrk` varchar(250) default NULL COMMENT '��˾��ע',
  `private_type` varchar(10) default NULL COMMENT '���',
  `private_date` varchar(10) default NULL COMMENT '����',
  `private_place` varchar(10) default NULL COMMENT '����',
  `private_rent` varchar(10) default NULL COMMENT '���',
  `private_term` varchar(10) default NULL COMMENT '����',
  `private_taxid` varchar(30) default NULL COMMENT '����˰��',
  `private_commerceid` varchar(50) default NULL COMMENT '���̵ǼǺ�',
  `private_income` varchar(100) default NULL COMMENT '����',
  `private_employee` varchar(100) default NULL COMMENT '��Ա',
  `finance_repayment` varchar(100) default NULL COMMENT 'ÿ���޵�Ѻ������',
  `finance_property` varchar(100) default NULL COMMENT '���з���',
  `finance_amount` varchar(100) default NULL COMMENT 'ÿ�·��ݰ��ҽ��',
  `finance_car` varchar(10) default NULL COMMENT '��������',
  `finance_caramount` varchar(100) default NULL COMMENT 'ÿ���������ҽ��',
  `finance_creditcard` varchar(100) default NULL COMMENT '���ÿ����',
  `mate_name` varchar(100) default NULL COMMENT '��ż����',
  `mate_salary` varchar(10) default NULL COMMENT 'н��',
  `mate_phone` varchar(100) default NULL COMMENT '�ֻ�',
  `mate_tel` varchar(100) default NULL COMMENT '�绰',
  `mate_type` varchar(10) default NULL COMMENT '��������',
  `mate_office` varchar(10) default NULL COMMENT '����ְλ',
  `mate_address` varchar(250) default NULL COMMENT '��ַ',
  `mate_income` varchar(100) default NULL COMMENT '����',
  `education_record` varchar(100) default NULL COMMENT 'ѧ��',
  `education_school` varchar(200) default NULL COMMENT 'ѧУ',
  `education_study` varchar(200) default NULL COMMENT 'רҵ',
  `education_time1` varchar(20) default NULL COMMENT 'ʱ��1',
  `education_time2` varchar(20) default NULL COMMENT 'ʱ��2',
  `tel` varchar(50) default NULL COMMENT '�绰',
  `phone` varchar(50) default NULL COMMENT '�ֻ�',
  `post` varchar(50) default NULL COMMENT '�ʱ�',
  `address` varchar(50) default NULL COMMENT '�ʱ�',
  `province` varchar(20) default NULL COMMENT 'ʡ��',
  `city` varchar(20) default NULL COMMENT '����',
  `area` varchar(20) default NULL COMMENT '��',
  `linkman1` varchar(50) default NULL COMMENT '��ϵ��1',
  `relation1` varchar(50) default NULL COMMENT '��ϵ1',
  `tel1` varchar(50) default NULL COMMENT '�绰1',
  `phone1` varchar(50) default NULL COMMENT '�ֻ�1',
  `linkman2` varchar(50) default NULL COMMENT '��ϵ��2',
  `relation2` varchar(50) default NULL COMMENT '��ϵ2',
  `tel2` varchar(50) default NULL COMMENT '�绰2',
  `phone2` varchar(50) default NULL COMMENT '�ֻ�2',
  `linkman3` varchar(50) default NULL COMMENT '��ϵ��3',
  `relation3` varchar(50) default NULL COMMENT '��ϵ3',
  `tel3` varchar(50) default NULL COMMENT '�绰3',
  `phone3` varchar(50) default NULL COMMENT '�ֻ�3',
  `msn` varchar(50) default NULL COMMENT 'MSN',
  `qq` varchar(50) default NULL COMMENT 'QQ',
  `wangwang` varchar(50) default NULL COMMENT 'WANGWANG',
  `ability` varchar(250) default NULL COMMENT '��������',
  `interest` varchar(250) default NULL COMMENT '���˰���',
  `others` varchar(250) default NULL COMMENT '����˵��',
  `experience` text COMMENT '��������',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  `updatetime` varchar(50) default NULL,
  `updateip` varchar(50) default NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_vip_card`;
CREATE TABLE `dw_vip_card` (
  `id` int(11) NOT NULL auto_increment,
  `flag` varchar(30) default NULL COMMENT '��������',
  `order` varchar(10) default NULL COMMENT '����',
  `city` varchar(50) default NULL COMMENT '����',
  `serial_number` varchar(15) default NULL COMMENT 'VIP����',
  `batch` int(11) default NULL COMMENT '��������',
  `password` varchar(50) default NULL COMMENT '����',
  `create_time` int(11) default NULL COMMENT '����ʱ��',
  `start_date` int(11) default NULL COMMENT '��Ч�ڿ�ʼ����',
  `end_date` int(11) default NULL COMMENT '��Ч�ڽ�������',
  `is_up_end_date` tinyint(1) default '0' COMMENT '�Ƿ�����',
  `vct_name` varchar(40) default NULL COMMENT '��ֵ������',
  `month_num` tinyint(4) default NULL COMMENT '��Ч����',
  `open_time` int(11) default NULL COMMENT '����ʱ��',
  `status` tinyint(1) default '0' COMMENT '״̬:0:δ���1������2���ᣬ3ͣ��, 4���',
  `freeze_time` int(11) default NULL COMMENT '����ʱ��',
  `freeze_day` int(11) default NULL COMMENT '��������',
  `freeze_times` tinyint(4) default '0' COMMENT '�������',
  `stop_time` int(11) default NULL COMMENT 'ͣ��ʱ��',
  `stop_day` int(11) default NULL COMMENT 'ͣ������',
  `stop_times` tinyint(4) default '0' COMMENT 'ͣ������',
  `create_user` varchar(20) default NULL COMMENT '������',
  `remark` text COMMENT '��ע',
  `hits` int(11) default NULL COMMENT '�������',
  `addtime` varchar(30) default NULL COMMENT '���ʱ��',
  `addip` varchar(30) default NULL COMMENT '���ip',
  `updatetime` varchar(30) default NULL COMMENT '�޸�ʱ��',
  `updateip` varchar(30) default NULL COMMENT '�޸�ip',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idx_vip_sn` (`serial_number`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='VIP��';

DROP TABLE IF EXISTS `dw_vip_card_type`;
CREATE TABLE `dw_vip_card_type` (
  `id` int(11) NOT NULL auto_increment COMMENT '����ID',
  `name` varchar(40) default NULL COMMENT '��������',
  `month_num` tinyint(4) default NULL COMMENT '����',
  `addtime` varchar(30) default NULL COMMENT '���ʱ��',
  `addip` varchar(30) default NULL COMMENT '���ip',
  `updatetime` varchar(30) default NULL COMMENT '�޸�ʱ��',
  `updateip` varchar(30) default NULL COMMENT '�޸�ip',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `month_num_UNIQUE` (`month_num`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

DROP TABLE IF EXISTS `dw_vip_user`;
CREATE TABLE `dw_vip_user` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `card_number` varchar(15) default NULL COMMENT 'VIP����',
  `flag` varchar(30) default NULL COMMENT '��������',
  `order` varchar(10) default NULL COMMENT '����',
  `hits` int(11) default NULL COMMENT '�������',
  `addtime` varchar(30) default NULL COMMENT '���ʱ��',
  `addip` varchar(30) default NULL COMMENT '���ip',
  `updatetime` varchar(30) default NULL COMMENT '�޸�ʱ��',
  `updateip` varchar(30) default NULL COMMENT '�޸�ip',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `idx_vipu_u` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='VIP���û�';

DROP TABLE IF EXISTS `dw_yginfo`;
CREATE TABLE `dw_yginfo` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default '0' COMMENT '�û�ID',
  `status` int(2) default '0' COMMENT '״̬',
  `height` varchar(255) default NULL COMMENT '���',
  `minzu` varchar(255) default NULL COMMENT '����',
  `jiguan` varchar(255) default NULL COMMENT '����',
  `zhengzhi` varchar(255) default NULL COMMENT '������ò',
  `techang` varchar(255) default NULL COMMENT '�س�',
  `marray` varchar(255) default NULL COMMENT '���',
  `zhuanye` varchar(255) default NULL COMMENT 'רҵ',
  `xueli` varchar(255) default NULL COMMENT 'ѧ��',
  `idcard` varchar(255) default NULL COMMENT '���֤����',
  `zhiye` varchar(255) default NULL COMMENT 'ְҵ',
  `school` varchar(255) default NULL COMMENT 'ѧУ',
  `danwei` varchar(255) default NULL COMMENT '��λ',
  `dizhi` varchar(255) default NULL COMMENT '��ַ',
  `linkman` varchar(255) default NULL COMMENT '��ϵ��',
  `linktel` varchar(255) default NULL COMMENT '��ϵ�绰',
  `fuwu` text,
  `jianli` text,
  `liyou` varchar(255) default NULL COMMENT '��������',
  `verify_userid` int(11) default NULL COMMENT '�����',
  `verify_time` varchar(50) default NULL COMMENT '���ʱ��',
  `verify_remark` varchar(250) default NULL COMMENT '��˱�ע',
  `addtime` varchar(50) default NULL,
  `addip` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk COMMENT='�幤��Ϣ';

DROP TABLE IF EXISTS `dw_zixun_fields`;
CREATE TABLE `dw_zixun_fields` (
  `aid` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

