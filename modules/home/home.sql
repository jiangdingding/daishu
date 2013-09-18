CREATE TABLE IF NOT EXISTS `{home}` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(11) NOT NULL DEFAULT '0' COMMENT '����վ��',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '�û�����',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '����',
  `status` int(2) NOT NULL DEFAULT '0' COMMENT '״̬',
  `order` int(11) NOT NULL DEFAULT '0' COMMENT '����',
  `hits` int(11) NOT NULL DEFAULT '0' COMMENT '�������',
  `litpic` varchar(255) NOT NULL DEFAULT '' COMMENT '����ͼ',
  `flag` varchar(50) NOT NULL COMMENT '����',
  `source` varchar(50) NOT NULL COMMENT '��Դ',
  `publish` varchar(50) NOT NULL  COMMENT '����ʱ��',

  `xiaoqu` varchar(50) NOT NULL DEFAULT '' COMMENT 'С��',
  `shi` varchar(10) NOT NULL DEFAULT '' COMMENT '��',
  `ting` varchar(10) NOT NULL DEFAULT '' COMMENT '��',
  `wei` varchar(10) NOT NULL DEFAULT '' COMMENT '��',
  `louceng` varchar(10) NOT NULL DEFAULT '' COMMENT '¥��',
  `zonglouceng` varchar(10) NOT NULL DEFAULT '' COMMENT '��¥��',
  `loupan` varchar(10) NOT NULL DEFAULT '' COMMENT '¥��',
  `zhucegongsi` varchar(10) NOT NULL DEFAULT '' COMMENT '�Ƿ�ע�ṫ˾',
  `mianji` varchar(10) NOT NULL DEFAULT '' COMMENT '���',
  `mianji1` varchar(10) NOT NULL DEFAULT '' COMMENT '�������1',
  `mianji2` varchar(10) NOT NULL DEFAULT '' COMMENT '�������2',
  `fangshi` varchar(10) NOT NULL DEFAULT '' COMMENT '���ⷽʽ',
  `leixing` varchar(10) NOT NULL DEFAULT '' COMMENT '����',
  `zhuangxiu` varchar(10) NOT NULL DEFAULT '' COMMENT 'װ��',
  `chaoxiang` varchar(10) NOT NULL DEFAULT '' COMMENT '����',
  `zujin` varchar(10) NOT NULL DEFAULT '' COMMENT '���',
  `jiage` varchar(10) NOT NULL DEFAULT '' COMMENT '�ۼ�',
  `jiage1` varchar(10) NOT NULL DEFAULT '' COMMENT '�����ۼ�1',
  `jiage2` varchar(10) NOT NULL DEFAULT '' COMMENT '�����ۼ�2',
  `jiageleixing` varchar(10) NOT NULL DEFAULT '' COMMENT '�۸�����',
  `lishijingying` varchar(10) NOT NULL DEFAULT '' COMMENT '��ʷ��Ӫ',
  `jibenqingkuang` varchar(10) NOT NULL DEFAULT '' COMMENT '�������',
  `diduan` varchar(10) NOT NULL DEFAULT '' COMMENT '�ض�',
  `diduan1` varchar(10) NOT NULL DEFAULT '' COMMENT '�ض�1',
  `diduan2` varchar(10) NOT NULL DEFAULT '' COMMENT '�ض�2',
  `fukuan` varchar(10) NOT NULL DEFAULT '' COMMENT '���ʽ',
  `linjin` varchar(10) NOT NULL DEFAULT '' COMMENT '�ٽ�',
  `peizhi` varchar(50) NOT NULL DEFAULT '' COMMENT '����',
  `tupian` varchar(250) NOT NULL DEFAULT '' COMMENT 'ͼƬ',
  `xianxingbie` varchar(250) NOT NULL DEFAULT '' COMMENT '�����Ա�',
  `chuzufangjian` varchar(250) NOT NULL DEFAULT '' COMMENT '���ⷿ��',
  `chuzuleixing` varchar(250) NOT NULL DEFAULT '' COMMENT '��������',
  `content` varchar(255) NOT NULL DEFAULT '' COMMENT '����˵��',


  `lianxiren` varchar(50) NOT NULL DEFAULT '' COMMENT '��ϵ��',
  `dianhua` varchar(50) NOT NULL DEFAULT '' COMMENT '�绰',
  `qq` varchar(50) NOT NULL DEFAULT '' COMMENT 'qq',
  `province` varchar(20) default NULL COMMENT 'ʡ��',
  `city` varchar(20) default NULL COMMENT '����',
  `area` varchar(20) default NULL COMMENT '��',


  `addtime` varchar(50) NOT NULL DEFAULT '',
  `addip` varchar(50) NOT NULL DEFAULT '',
  `updatetime` varchar(50) NOT NULL DEFAULT '',
  `updateip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;