-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 04 月 10 日 07:24
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `shetuan`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL auto_increment,
  `admin_name` varchar(50) default NULL,
  `admin_pwd` varchar(50) default NULL,
  `admin_email` varchar(50) default NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pwd`, `admin_email`) VALUES
(1, 'admin', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- 表的结构 `bbs`
--

CREATE TABLE `bbs` (
  `bbs_id` int(11) NOT NULL auto_increment,
  `bbs_top` varchar(50) default NULL,
  `bbs_content` longtext,
  `bbs_date` date default NULL,
  `bbs_writer` varchar(50) default NULL,
  `bbs_toid` int(11) default '0',
  `bbs_jb` int(11) default NULL,
  PRIMARY KEY  (`bbs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=62 ;

--
-- 导出表中的数据 `bbs`
--

INSERT INTO `bbs` (`bbs_id`, `bbs_top`, `bbs_content`, `bbs_date`, `bbs_writer`, `bbs_toid`, `bbs_jb`) VALUES
(36, '某某理工学院学生社团管理章程', '<DIV align=center><B>第一章 总则</B></DIV>\r\n<DIV align=left><B>第一条</B><B>&nbsp;&nbsp;</B>学生社团作为学校学生组织的管理体制，为促进和保障学生社团积极健康的发展，进一步活跃校园文化生活，培养全面发展的高素质人才，特制定本条例。</DIV>\r\n<DIV align=left><B>第二条</B><B>&nbsp;&nbsp;</B>学生社团是由我校在籍本专科生、研究生，按照资源的原则组织和参加的群众性学生组织。</DIV>\r\n<DIV align=left><B>第三条</B><B>&nbsp;&nbsp;</B>学生社团应在坚持四项基本原则，遵守国家法律法规和校规的基础上，以丰富校园文化生活，弘扬校园旋律为根本宗旨。坚持以马克思列宁主义、毛泽东思想、邓小平理论、“三个代表”重要思想和科学发展观为指导思想，利用课余时间，创造性开展理论教育、科技创新、文化体育等丰富多彩的活动，按照自我教育、自我管理、自我服务的要求，突出思想性、学术性知识性、趣味性，提高我校学生综合素质，为同学的全面成才服务。</DIV>\r\n<DIV align=center><B>第二章 社团的发展、申请成立、注册及评级</B></DIV>\r\n<DIV align=left><B>第四条</B><B>&nbsp;&nbsp;</B>社团的发展应是我校在籍本专科、研究生五人以上，基于共同的兴趣爱好和目的，且能自觉遵守本条例的各项规定，可发起社团。</DIV>\r\n<DIV align=left><B>第五条</B><B>&nbsp;&nbsp;&nbsp;</B>社团的申请及成立</DIV>\r\n<DIV align=left>1．起草社团章程。其中包括社团的名称、目的、性质、任务、组织机构、会员利益和义务及指导老师等。要有清楚的说明和详细的规定，并提交社团前期活动的策划，章程应与社团的日常工作基本保持一致。</DIV>\r\n<DIV align=left>2．成立理论学术性质社团，须由发起人向本校团委提出书面申请，文体性社团向社团管理中心提出书面申请。</DIV>\r\n<DIV align=left>3．社团发起人在校学生社团管理中心领取《某某理工学院社团注册表》（一式三份），认真填写后，分别交与校团委，社团管理中心，隶属部门。由校团委和校学生社团管理中心按其发起和筹备情况来决定是否批准成立。</DIV>\r\n<DIV align=left>4．经校团委和校学生社团管理中心同意后，学生社团按要求在校学生社团管理中心进行注册登记，校团委有权对该社团注册情况进行复查。</DIV>\r\n<DIV align=left>5．学生社团负责人需经社团正式确认，方可正式开展工作，否则将视为非法组织，校团委及校学生社团管理中心有权对其活动干涉。</DIV>\r\n<DIV align=left><B>第六条</B><B> </B><B>社团的注册及评级</B></DIV>\r\n<DIV align=left>1．学生社团应在每学期开学后两星期内到校学生社团管理中心进行学期注册，凡逾期不进行注册的，由校学生社团管理中心报请校团委批准责令其注册或重组。</DIV>\r\n<DIV align=left>2．&nbsp;校团委和校学生社团管理中心将于每年6月进行社团评级工作，所有社团经过评选，将分为校一级，二级，三级社团。一级社团为学校优秀社团，工作业绩突出，影响力大，校团委将对其活动经费给予指导和支持；二级社团为学校发展良好社团，工作业绩和影响力一般，需要加强；三级社团为学校一般社团，发展力不足，影响力小，需要改进。</DIV>\r\n<DIV align=center><B>第三章 社团招新</B></DIV>\r\n<DIV align=left><B>第七条</B> 为更好的满足同学们的需要，同时也为了社团的正常运作，各社团在每学年初统一进行招新，招新的时间为每学年开始后的第二周。如有特殊情况，经校学生社团管理中心批准后，自定时间招新。</DIV>\r\n<DIV align=left><B>第八条</B><B>&nbsp;&nbsp;&nbsp;</B>社团招新前要做好准备工作，如本社团的展示、宣传等工作。</DIV>\r\n<DIV align=center><B>第四章 社团活动的举办</B></DIV>\r\n<DIV align=left><B>第九条</B><B>&nbsp;&nbsp;&nbsp;</B>学校社团必须在宪法，各项法规和校规校纪许可的范围内开展活动，各社团活动应自觉接受校学生社团管理中心的监督，服从学校全局工作的安排。</DIV>\r\n<DIV align=left><B>第十条</B><B>&nbsp;&nbsp;&nbsp;</B>学生社团常规性内部活动，如训练，定期例会等，可自行进行。理论、学术性社团常规活动，社团领导必须参加，涉及社团外学生参加的较大型活动必须于活动前向校学生社团管理中心提出书面申请，并附详细的活动书面策划书。</DIV>\r\n<DIV align=left><B>第十一条 </B>活动审批过程登记：社团负责人必须在校学生社团管理中心办公室进行活动登记，注明活动具体时间、地点、活动名称、到场嘉宾及负责人，到校学生社团管理中心办公室填写《某某理工学院学生社团举办大型活动登记表》（一式三份），如果社团活动要求到教室或室外场地，需要校团委《举办大型活动场所使用登记表》（一式三份）。无以上手续此活动不记入评选优秀社团。审批：由校学生社团管理中心主主任提出申请，校团委书记审批。备案：活动审批完之后，活动社团需将《活动登记》和《活动场所登记表》各一张交校学生社团管理中心办公室备案。举办活动：举办活动要按策划书进行，不得随意加入新内容，尤其是理论性和文艺演出活动，必须完全按照审批的活动秩序进行，不得临时添加内容。</DIV>\r\n<DIV align=left><B>第十二条</B> 活动举办过程中校学生社团管理中心派监察员进行监察，由社团负责人填写一份《社团活动情况调查表》，并在三天内上交校学生社团管理中心秘书部，附带活动相关照片或资料。。</DIV>\r\n<DIV align=left><B>第十三条 </B>对于涉及校外人员参加的活动，必须获得校团委的批准，并注意安全措施，校学生社团管理中心派人维持秩序。</DIV>\r\n<DIV align=center><B>第五章 社长的任免</B></DIV>\r\n<DIV align=left><B>第十四条</B> 社长由社团内部选举产生，经校学生社团管理中心认可。各社团社长任期至少三个月。对于三个月内未举行活动的社团，校学生社团管理中心有权更换负责人或解散该社团。</DIV>\r\n<DIV align=left><B>第十五条</B> 社团新旧社长更换，应有原社长提出书面申请辞职，经校学生社团管理中心负责人认可。</DIV>\r\n<DIV align=center><B>第六章 社团自办刊物</B></DIV>\r\n<DIV align=left><B>第十六条</B> 学生社团对于活动成果需要出版宣传的，可采取与社会现有出版权的刊物联合办刊的形式进行，没有与社会现有出版刊物合作条件或能力的，可考虑将每年评选的优秀作品集中出版作品集，出版作品必须遵守国家宪法，各项法律法规及校规校纪，必须与社团章程、社团宗旨相一致。学术类的作品要求讲求科学性，严谨性和思想性。需要出版的作品初审权在社团指导教师。在社会有权刊物上发表的作品审查权在社办刊物，在学校出版的作品集审查权在校团委，未经审查和登记的社团作品不得出版。</DIV>\r\n<DIV align=left><B>第十七条</B> 社团活动经费原则由社团自行解决，如有其他情况，需书&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 面材料报校团委商议解决。 </DIV>\r\n<DIV align=center><B>第七章 社团财务管理</B></DIV>\r\n<DIV align=left><B>第十八条 </B>社团财务报销制度及会员管理具体按《社团财务制度及会员费管理办法》实施。</DIV>\r\n<DIV align=left><B>第十九条</B> 社团举行的盈利性活动，学生社团管理中心将对其进行财&nbsp; 务审核。</DIV>\r\n<DIV align=left><B>第二十条</B> 社团活动收入须用于社团的发展支出，校学生社团管理中心所得管理费须用于社团的管理，评优和活动支持专项费用。社团经费支出由校团委审批，受校学生社团管理中心监督。</DIV>\r\n<DIV align=center><B>第八章 社团的注销</B></DIV>\r\n<DIV align=left><B>第二十一条 </B>社团组织机构瘫痪或由各种问题影响活动开展不能解决的，可向校学生社团管理中心提交注销申请，最终由校团委同意批准。</DIV>\r\n<DIV align=left><B>第二十二条 </B>对思想上有严重问题并拒绝接受校团委，校学生社团管理中心领导的社团，以及长期不服从校学生社团管理中心或校相关部门管理或屡教不改的社团，校学生社团管理中心报请校团委批准后，有权将其解散，注销。</DIV>\r\n<DIV align=left><B>第二十三条</B> 被注销的社团不得开展任何活动。如被注销的社团人开展活动，校学生社团管理中心将报请校团委采取行政干预或处罚。</DIV>\r\n<DIV align=center><B>第九章</B><B> </B><B>附则</B></DIV>\r\n<DIV align=left><B>第二十五条</B> 本条例适用于某某理工学院在册的各类学生社团。</DIV>\r\n<DIV align=left><B>第二十六条</B> 本条例的最终解释权归校团委、校学生团管理中心。</DIV>\r\n<DIV align=left>&nbsp;</DIV>\r\n<DIV align=left>&nbsp;</DIV>\r\n<DIV align=left>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 某某理工学院团委</DIV>\r\n<DIV align=left>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;校学生社团管理中心</DIV>\r\n<DIV align=left>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2008年3月26日</DIV>', '2011-04-08', '社团管理中心', 0, 1),
(37, '某某理工学院社团先进干部干事评选办法', '<DIV align=left>某某理工学院各学生社团：</DIV>\r\n<DIV align=left>2008-2009学年，我校各学生社团组织在学校党委的正确领导下，在校团委的指导下，团结带领全体社团成员，拓新有为，紧密围绕学校中心工作，重点加强了学生社团活动，在校园文化建设、社会实践活动和文化艺术活动等方面取得了可喜成绩，极大体现了我校社团勇创精品、蒸蒸日上的精神风貌。</DIV>\r\n<DIV align=left>为进一步促进我院学生社团的建设，加强对学生社团的管理，提高社团活动质量，增强学生社团与人的功能，根据《某某理工学院学生社团管理条例》，校团委和社团管理中心在各学生社团中开展了社团评优及社团先进个人评优工作。</DIV>\r\n<DIV align=left>为总结交流各级学生社团一年来各项工作开展情况，表彰先进，校团委决定对各社团2008年度工作进行全面总结考核，同时，对一年工作中涌现出的先进集体和个人进行评比表彰，现将有关事宜通知如下：</DIV>\r\n<DIV align=left>一、评选原 则：公平、公开、公正、择优。</DIV>\r\n<DIV align=left>二、评选对象: 社团优秀学生干部、社团优秀学生干事。</DIV>\r\n<DIV align=left>三、评选内容和条件：</DIV>\r\n<DIV align=left>1、社团优秀学生干部</DIV>\r\n<DIV align=left>&nbsp;&nbsp; 1、为社团主要负责人，所在社团未被取消评优资格；</DIV>\r\n<DIV align=left>2、坚持四项基本原则，遵守学校各项规章制度，模范遵守学生社团各项制度；</DIV>\r\n<DIV align=left>3、热爱学生社团，积极参与学生社团工作，按时出席社团管理中心召开的会议，认真完成校团委及社团管理中心布置的各项任务；</DIV>\r\n<DIV align=left>4、任职期间，学生社团活动正常有序，并有一定的影响力，广大会员及同学反映良好；</DIV>\r\n<DIV align=left>5、积极组织参加社团活动，有较强的组织协调能力，在学生中能起模范带头作用；</DIV>\r\n<DIV align=left>6、无被学校纪律处分，被学校、学院通报批评等不良记录；</DIV>\r\n<DIV align=left>7、学习成绩要求在全年级中上水平，无不及格科目。</DIV>\r\n<DIV align=left>2、社团 优秀 学生干事：</DIV>\r\n<DIV align=left>&nbsp;1、坚持四项基本原则，遵守学校各项规章制度，遵守学生社团各项制度；</DIV>\r\n<DIV align=left>&nbsp;&nbsp;&nbsp; 2、热爱学生社团，积极参与学生社团工作，按时出席社团召开的会议，认真完成主席团及部长布置的各项任务；</DIV>\r\n<DIV align=left>&nbsp; 3、积极参加社团活动，活动中认真负责，表现优异。</DIV>\r\n<DIV align=left>&nbsp; 4、无被学校纪律处分，被学校、学院通报批评等不良记录；</DIV>\r\n<DIV align=left>&nbsp; 5、学习成绩要求在全年级中上水平，无不及格科目。</DIV>', '2011-04-08', '社团管理中心', 0, 1),
(38, '某某理工学院十佳社团及优秀社团公告', '<DIV align=left>\r\n<DIV align=left><FONT size=3>某某理工学院十佳社团：</FONT></DIV>&nbsp;&nbsp; 西陆文学社</DIV>\r\n<DIV align=left>&nbsp; &nbsp;知行协会</DIV>\r\n<DIV align=left>&nbsp;&nbsp; 某某理工学院爱心助学协会</DIV>\r\n<DIV align=left>&nbsp;&nbsp; 某某理工学院胡杨志愿社团</DIV>\r\n<DIV align=left>&nbsp;&nbsp; 心灵阳光协会</DIV>\r\n<DIV align=left>&nbsp;&nbsp; 516轮滑协会</DIV>\r\n<DIV align=left>&nbsp;&nbsp; 心雨话剧团</DIV>\r\n<DIV align=left>&nbsp;&nbsp; 某某理工学院爱心社</DIV>\r\n<DIV align=left>&nbsp;&nbsp; 某某理工学院演讲与辩论协会</DIV>\r\n<DIV align=left>&nbsp;&nbsp; “挑战杯”学术中心</DIV>\r\n<DIV align=left><FONT size=3>先进集体：</FONT></DIV>\r\n<DIV align=left>&nbsp;&nbsp; 某某理工学院广播站</DIV>\r\n<DIV align=left>&nbsp;&nbsp; 某某理工学院国旗护卫队</DIV>\r\n<DIV align=left>&nbsp;&nbsp; 某某理工学院军乐团</DIV>\r\n<DIV align=left>&nbsp;&nbsp; 广播站</DIV>\r\n<DIV align=left>&nbsp;&nbsp; 菜园网</DIV>\r\n<DIV align=left><FONT size=3>优秀社团：</FONT></DIV>\r\n<DIV align=left>&nbsp;&nbsp; 竹苑文学社</DIV>\r\n<DIV align=left>&nbsp;&nbsp; 自行车协会</DIV>\r\n<DIV align=left><FONT size=3>最具人气社团（网上评选结果）：</FONT></DIV>\r\n<DIV align=left>知行协会</DIV>', '2011-04-08', '社团管理中心', 0, 1),
(39, '某某理工学院社团优秀干部及干事公告', '<DIV align=left>某某理工学院社团优秀干部：</DIV>\r\n<DIV align=left>&nbsp; 爱心社：张倩</DIV>\r\n<DIV align=left>&nbsp; 计算机协会：郭瑞祥</DIV>\r\n<DIV align=left>&nbsp; 爱心助学协会：杜见岳士文</DIV>\r\n<DIV align=left>广播站：谭鹏飞</DIV>\r\n<DIV align=left>&nbsp; 资本市场协会：王琦</DIV>\r\n<DIV align=left>&nbsp; 知行协会：祁连昌</DIV>\r\n<DIV align=left>&nbsp; 华影青猫动漫社：木拉提</DIV>\r\n<DIV align=left>&nbsp; 西陆文学社：高雨阳周佳</DIV>\r\n<DIV align=left>&nbsp; 菜园网：伊斯坎代尔张倩</DIV>\r\n<DIV align=left>&nbsp; 心灵阳光协会：陈长璐金高杰 </DIV>\r\n<DIV align=left>&nbsp; 心雨话剧团：朱柏霖万婧</DIV>\r\n<DIV align=left>&nbsp; 丹青艺术协会：付超杨淇而</DIV>\r\n<DIV align=left>&nbsp; 516轮滑协会：费洪邺</DIV>\r\n<DIV align=left>&nbsp; 书画摄影协会：赵宗超王伟</DIV>\r\n<DIV align=left>&nbsp; 心理驿站：陆峰</DIV>\r\n<DIV align=left>&nbsp; 自行车协会：赵文林</DIV>\r\n<DIV align=left>&nbsp; 知爱社：王萌</DIV>\r\n<DIV align=left>&nbsp; 记者团：方婷婷&nbsp; 王杨</DIV>\r\n<DIV align=left>&nbsp; 心灵阳光协会（工商分会）：王春丽</DIV>\r\n<DIV align=left>&nbsp; 风华乐坊：韩芳</DIV>\r\n<DIV align=left>&nbsp; 行者户外徒步社团：陈冉</DIV>\r\n<DIV align=left>&nbsp; 国旗护卫队：刘红强</DIV>\r\n<DIV align=left>&nbsp; 军乐团：孙海涛</DIV>\r\n<DIV align=left>&nbsp; 生活网：黄晔</DIV>\r\n<DIV align=left>&nbsp; 商学会：朱翔</DIV>\r\n<DIV align=left>&nbsp; 演讲与辩论协会：党署安付凡旗</DIV>\r\n<DIV align=left>&nbsp; 武术协会：宋灌润</DIV>\r\n<DIV align=left>&nbsp; 艺轩书画社：康超贤</DIV>\r\n<DIV align=left>某某理工学院社团优秀干事：</DIV>\r\n<DIV align=left>&nbsp; 爱心社：刘道敏</DIV>\r\n<DIV align=left>&nbsp; 计算机协会：徐浩然邹游</DIV>\r\n<DIV align=left>&nbsp; “挑战杯”学术中心：李兵&nbsp; 谈荣霞</DIV>\r\n<DIV align=left>&nbsp; 知爱社：王雨箬</DIV>\r\n<DIV align=left>&nbsp; 爱心助学协会：刘影</DIV>\r\n<DIV align=left>&nbsp; 华影青猫动漫社：李文军刘志鹏 段美玲</DIV>\r\n<DIV align=left>&nbsp; 菜园网：吴丽莎</DIV>\r\n<DIV align=left>&nbsp; 心灵阳光协会：李萍</DIV>\r\n<DIV align=left>&nbsp; 心雨话剧团：赵健韩森 黄世勇 胡文静</DIV>\r\n<DIV align=left>&nbsp; 516轮滑协会：明晏吉</DIV>\r\n<DIV align=left>&nbsp; 心理驿站（商）：梁亮</DIV>\r\n<DIV align=left>&nbsp; 心灵阳光协会（工商分会）：高玲</DIV>\r\n<DIV align=left>&nbsp; 大学生记者团：韩婷</DIV>\r\n<DIV align=left>&nbsp; 国旗护卫队：丁佳</DIV>\r\n<DIV align=left>&nbsp; 商学会：&nbsp; 柏璐</DIV>\r\n<DIV align=left>&nbsp; 博言大学生辩论协会：王帆</DIV>\r\n<DIV align=left>&nbsp; 广播站：刘杰</DIV>\r\n<DIV align=left>&nbsp; 资本市场协会：屈素真</DIV>\r\n<DIV align=left>&nbsp; 丹青艺术协会：刘清文</DIV>\r\n<DIV align=left>&nbsp; 风华乐坊：刘伟</DIV>\r\n<DIV align=left>&nbsp; 混音仙地：王冰</DIV>\r\n<DIV align=left>&nbsp; 行者户外徒步社团：吕雨青</DIV>\r\n<DIV align=left>&nbsp; 西陆文学社:&nbsp; 叶鹏</DIV>\r\n<DIV align=left>某某理工学院优秀团员：</DIV>\r\n<DIV align=left>&nbsp; 李龙、叶鹏、岳士文、邹游、王雨箬、肖甜甜、朱清华、吴吝、李子勇、杨菲、韩森</DIV>', '2011-04-08', '社团管理中心', 0, 1),
(40, '社团文化节安排', '<DIV align=left>&nbsp;&nbsp;&nbsp; 学生社团作为培养学生兴趣爱好、繁荣校园文化生活的第二课堂，正成为大学生丰富校园生活、参与学校活动、延伸求知领域、扩大交友范围的一种重要方式，各社团以其具有的思想性、艺术性、知识性、趣味性、多样性的多种形式吸引着广大青年学生积极参与其中。</DIV>\r\n<DIV align=left>我校社团自实行改制后，各类学生社团不断增多，并相继挂靠到各二级学院和教学职能部门，得到了更好的专业指导，找到了社团活动和专业学习的契合点。改制后，社团工作的重心逐渐转向精品社团的打造。</DIV>\r\n<DIV align=left><B>社团文化：</B></DIV>\r\n<DIV align=left>&nbsp;&nbsp;&nbsp; 大学生社团是促进校园文化建设、丰富学生第二课堂，开拓学生视野、锻炼学生才干的重要形式。<B></B></DIV>\r\n<DIV align=left><B>社团文化的特点：</B></DIV>\r\n<DIV align=left><STRONG>&nbsp;&nbsp;&nbsp;&nbsp; </STRONG>群体性、多样性、易感染性，社团文化的参与者主要是青年学生，他们对社团活动的自我实现愿望使其促成在某些问题上的认同。<B></B></DIV>\r\n<DIV align=left><B>社团文化的作用：</B></DIV>\r\n<DIV align=left>&nbsp;&nbsp;&nbsp;&nbsp; 文化导向的优劣，直接影响到受教育者的价值取向、行为方式及他们对教育思想的接受态度，社团文化在大学生生活中起着举足轻重的作用，加强对社团活动的引导和控制，既是为学校构造一个健康、活跃的文化氛围，也是为学生的自身教育设计一个当代意义上的隐性课程，使其受益终生。<B></B></DIV>\r\n<DIV align=left>活动时间</DIV>\r\n<DIV align=left><B>2009</B><B>年</B><B>4</B><B>月至</B><B>5</B><B>月</B></DIV>\r\n<DIV align=left>活动目的</DIV>\r\n<DIV align=left>要在本次届社团文化节活动中发动广大师生参与，发挥他们的积极性和创造性，逐步形成共同的价值观念和行为准则。</DIV>\r\n<DIV align=center>活动的宗旨</DIV>\r\n<DIV align=center>&nbsp; 青春·创新·求真·育人</DIV>\r\n<DIV align=left>活动对象</DIV>\r\n<DIV align=left>&nbsp;&nbsp; 某某理工学院15000余名学生及近两千余名教师作为本次活动的直接参与者及信息的接受者。</DIV>\r\n<DIV align=left>我们的优势</DIV>\r\n<DIV align=left>&nbsp;&nbsp;&nbsp; 本次活动通过基于广大学生的社团组织覆盖全校青年学生，活动内容涉及到每一位学生的第二课堂生活。我们吸引着他们的目光，分享着他们的喜怒哀乐，展示着他们自我张扬的缤纷生活。</DIV>\r\n<DIV align=left>可以让每一位学生都参与其中的活动——</DIV>\r\n<DIV align=left>活动方案</DIV>\r\n<DIV align=left>放飞的理想，跳跃的音符，灵动的舞姿在这里闪耀！</DIV>\r\n<DIV align=left>乘着微风，怀抱着梦，展开爱的翅膀，创造属于我们的天空！</DIV>\r\n<DIV align=left>让我们一起走进春天，实现梦想，谱写人生的乐章！</DIV>\r\n<DIV><B>一、开幕式：</B></DIV>\r\n<DIV>名称：某某理工学院大学生社团文化节开幕式暨颁奖仪式</DIV>\r\n<DIV>活动主题：展现青春活力，构建和谐校园</DIV>\r\n<DIV>时间：4月1日下午3：00</DIV>\r\n<DIV>地点：校俱乐部</DIV>\r\n<DIV><B>二、活动内容：</B></DIV>\r\n<DIV><B>（一）情牵线</B></DIV>\r\n<DIV>满载着一份份社团情，一份份人间爱，我们在这里连成一线，让风筝带我们飞向高空，展翅翱翔。<B></B></DIV>\r\n<DIV align=left>1、“点一盏心灯 你我共温暖”关注贫困儿童成长系列活动</DIV>\r\n<DIV align=left>承办：公益型社团，如爱心助学协会，爱心社等。</DIV>\r\n<DIV align=left>时间：4月某日</DIV>\r\n<DIV>2、“义工再行动”</DIV>\r\n<DIV>&nbsp; 承办：知行协会、社团管理中心等</DIV>\r\n<DIV>时间：4月某日</DIV>\r\n<DIV>3、第三届“拇指e族”短信文学大赛</DIV>\r\n<DIV>&nbsp; 承办：西路文学社等</DIV>\r\n<DIV>&nbsp; 时间：4月某日</DIV>\r\n<DIV align=left>4、“微笑成长,你我同行”主题晚会</DIV>\r\n<DIV>承办：心灵阳光协会心雨话剧团 军乐团等。</DIV>\r\n<DIV>协办单位：赞助商家</DIV>\r\n<DIV>&nbsp; &nbsp;时间：4月某日</DIV>\r\n<DIV align=left><B>（二）线乘风</B></DIV>\r\n<DIV align=left>乘着清风的翅膀，来到快乐的花园，豁然间发现春天已到，该是奋斗的季节。</DIV>\r\n<DIV>1、兰亭杯校园书画大展赛</DIV>\r\n<DIV>承办：丹青协会、视觉美工社等。 </DIV>\r\n<DIV>&nbsp;&nbsp; 时间：4月某日</DIV>\r\n<DIV>2、、“金狮献瑞舞九天 鸿运当头展鸿图” 民俗文化展演活动</DIV>\r\n<DIV>承办：武术协会、军乐团等</DIV>\r\n<DIV>&nbsp; 时间：4月某日</DIV>\r\n<DIV>3、“之春”辩论开幕赛</DIV>\r\n<DIV>&nbsp;&nbsp;&nbsp; 承办：辩论协会等</DIV>\r\n<DIV>时间：4月某日</DIV>\r\n<DIV>&nbsp; 4、<B>“武，影，红，梦”大型文艺晚会</B></DIV>\r\n<DIV><B>&nbsp;&nbsp; </B>承办单位：武术协会、心雨话剧团、青猫动漫社等</DIV>\r\n<DIV>&nbsp; 协办单位：赞助商家</DIV>\r\n<DIV>时间：4月某日</DIV>\r\n<DIV><B>（三）风飞蝶</B></DIV>\r\n<DIV>蝶儿，你去飞！请带着我们的勇气，承担我的希望，让世间看到我们的美丽。</DIV>\r\n<DIV>1、“舞林至尊”武林大会</DIV>\r\n<DIV>&nbsp; 承办：艺术类社团</DIV>\r\n<DIV>时间：5月某日</DIV>\r\n<DIV>2、古诗古文诵读大赛</DIV>\r\n<DIV>承办：西陆文学社等</DIV>\r\n<DIV>时间：5月某日</DIV>', '2011-04-08', '社团管理中心', 0, 1),
(41, '(图)爱心助学协会举办大学生模特大赛', '<P align=center><IMG style="WIDTH: 350px; HEIGHT: 230px" height=410 src="/edit/UploadFile/20114822352400.jpg" width=545 border=0></P>\r\n<P align=center><FONT face=Verdana>爱心助学协会大学生模特大赛图</FONT></P>', '2011-04-08', '某某理工学院爱心助学协会', 0, 1),
(42, '爱协即将举办大学生社会兼职招聘会', '<P><SPAN style="FONT-SIZE: 14pt; FONT-FAMILY: 宋体; mso-font-kerning: 1.0pt; mso-ascii-font-family: Arial; mso-bidi-font-family: Arial; mso-fareast-language: ZH-CN; mso-ansi-language: EN-US; mso-hansi-font-family: Arial; mso-bidi-language: AR-SA">时间：</SPAN><SPAN lang=EN-US style="FONT-SIZE: 14pt; FONT-FAMILY: Arial; mso-fareast-font-family: 宋体; mso-font-kerning: 1.0pt; mso-fareast-language: ZH-CN; mso-ansi-language: EN-US; mso-bidi-language: AR-SA">2011</SPAN><SPAN style="FONT-SIZE: 14pt; FONT-FAMILY: 宋体; mso-font-kerning: 1.0pt; mso-ascii-font-family: Arial; mso-bidi-font-family: Arial; mso-fareast-language: ZH-CN; mso-ansi-language: EN-US; mso-hansi-font-family: Arial; mso-bidi-language: AR-SA">年</SPAN><SPAN lang=EN-US style="FONT-SIZE: 14pt; FONT-FAMILY: Arial; mso-fareast-font-family: 宋体; mso-font-kerning: 1.0pt; mso-fareast-language: ZH-CN; mso-ansi-language: EN-US; mso-bidi-language: AR-SA">4</SPAN><SPAN style="FONT-SIZE: 14pt; FONT-FAMILY: 宋体; mso-font-kerning: 1.0pt; mso-ascii-font-family: Arial; mso-bidi-font-family: Arial; mso-fareast-language: ZH-CN; mso-ansi-language: EN-US; mso-hansi-font-family: Arial; mso-bidi-language: AR-SA">月</SPAN><SPAN lang=EN-US style="FONT-SIZE: 14pt; FONT-FAMILY: Arial; mso-fareast-font-family: 宋体; mso-font-kerning: 1.0pt; mso-fareast-language: ZH-CN; mso-ansi-language: EN-US; mso-bidi-language: AR-SA">19</SPAN><SPAN style="FONT-SIZE: 14pt; FONT-FAMILY: 宋体; mso-font-kerning: 1.0pt; mso-ascii-font-family: Arial; mso-bidi-font-family: Arial; mso-fareast-language: ZH-CN; mso-ansi-language: EN-US; mso-hansi-font-family: Arial; mso-bidi-language: AR-SA">日</SPAN></P>\r\n<P><SPAN style="FONT-SIZE: 14pt; FONT-FAMILY: 宋体; mso-font-kerning: 1.0pt; mso-ascii-font-family: Arial; mso-bidi-font-family: Arial; mso-fareast-language: ZH-CN; mso-ansi-language: EN-US; mso-hansi-font-family: Arial; mso-bidi-language: AR-SA">地点：</SPAN><SPAN style="FONT-SIZE: 14pt; FONT-FAMILY: 宋体; mso-font-kerning: 1.0pt; mso-ascii-font-family: Arial; mso-bidi-font-family: Arial; mso-fareast-language: ZH-CN; mso-ansi-language: EN-US; mso-hansi-font-family: Arial; mso-bidi-language: AR-SA">校小足球场</SPAN></P>\r\n<P><SPAN style="FONT-SIZE: 14pt; FONT-FAMILY: 宋体; mso-font-kerning: 1.0pt; mso-ascii-font-family: Arial; mso-bidi-font-family: Arial; mso-fareast-language: ZH-CN; mso-ansi-language: EN-US; mso-hansi-font-family: Arial; mso-bidi-language: AR-SA"></SPAN><SPAN style="FONT-SIZE: 14pt; FONT-FAMILY: 宋体; mso-font-kerning: 1.0pt; mso-ascii-font-family: Arial; mso-bidi-font-family: Arial; mso-fareast-language: ZH-CN; mso-ansi-language: EN-US; mso-hansi-font-family: Arial; mso-bidi-language: AR-SA">现场为我校同学提供上千个兼职和见习岗位</SPAN></P>', '2011-04-08', '某某理工学院爱心助学协会', 0, 0),
(43, '你心目中的优秀教师都有谁？', '<P>在某某理工学院上课一来接触了不少老师，你觉得谁讲课最好?</P>', '2011-04-08', 'ysw', 0, 0),
(45, '某某理工学院计算机哪个老师教课最好？', '某某理工学院计算机哪个老师教课最好？', '2011-04-08', 'cf', 0, 0),
(47, NULL, '闵东老师！！', '2011-04-08', 'ysw', 45, 0),
(48, NULL, '呵呵，都好！！！', '2011-04-08', 'yp', 45, 0),
(50, '我校第二届精品社团推介晚会', '<DIV align=left>10月30日晚，由校团委、社团管理中心联合举办的“我校第二届精品社团推介晚会”在俱乐部举行。1100个座位的俱乐部座无虚席。</DIV>', '2011-04-08', '社团管理中心', 0, 0),
(52, '请大家注意论坛文明用语', '<FONT face=Verdana>请大家注意论坛文明用语！！！！</FONT>', '2011-04-08', '管理员', 0, 0),
(54, NULL, '12312213321', '2012-01-03', '', 42, NULL),
(55, NULL, '123123213', '2012-01-03', '', 42, NULL),
(56, NULL, '12321321321', '2012-01-03', '测试23', 42, NULL),
(57, '123123', '', '2012-01-03', '测试23', NULL, 0),
(58, '123', '', '2012-01-03', '测试23', 0, 0),
(59, '213', '', '2012-01-03', '测试23', NULL, 0),
(60, '123', '213213', '2012-01-03', '测试23', 0, 0),
(61, '123', '123', '2012-01-13', '', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `hydsh`
--

CREATE TABLE `hydsh` (
  `hy_id` int(11) NOT NULL auto_increment,
  `hy_name` varchar(50) default NULL,
  `hy_sex` varchar(50) default NULL,
  `hy_phone` varchar(50) default NULL,
  `hy_address` varchar(50) default NULL,
  `hy_zy` varchar(50) default NULL,
  `hy_date` date default NULL,
  `hy_birthday` date default NULL,
  `hy_jl` longtext,
  `hy_number` varchar(50) default NULL,
  `hy_nch` varchar(50) default NULL,
  `hy_pwd` varchar(50) default NULL,
  `hy_zhw` varchar(50) default '待审',
  `hy_st` longtext,
  `hy_email` varchar(50) default NULL,
  PRIMARY KEY  (`hy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=33 ;

--
-- 导出表中的数据 `hydsh`
--

INSERT INTO `hydsh` (`hy_id`, `hy_name`, `hy_sex`, `hy_phone`, `hy_address`, `hy_zy`, `hy_date`, `hy_birthday`, `hy_jl`, `hy_number`, `hy_nch`, `hy_pwd`, `hy_zhw`, `hy_st`, `hy_email`) VALUES
(13, '岳士文', 'boy ', '15899129768', '020', '计算机学院', '2011-04-08', '1988-02-17', '读书，写作', '2007101184', 'ysw', '111222', '待审', '某某理工学院大学生军乐团,,,111', 'xcdysw2007@163.com'),
(14, '岳', 'boy ', '15899129768', '120', '计算机学院', '2011-04-08', '1988-02-17', '跑步，读史', '2007101000', 'yue', '111222', '待审', '', 'xcdysw2007@163.com'),
(15, '叶鹏', 'boy ', '15697864653', '111', '商务学院', '2011-04-08', '1988-01-01', '游戏', '2007101001', 'yp', '111222', '待审', ',', 'xcd@126.com'),
(16, '丁佳', 'boy ', '165326897684', '112', '会计学院', '2011-04-08', '1989-03-05', '锻炼', '2007101002', 'dj', '111222', '已审核', ',某某理工学院国旗护卫队', 'xcd@163.com'),
(17, '王兵峰', 'boy ', '15678963587', '114', '金融学院', '2011-04-08', '1988-03-14', '无', '2007101003', 'wbf', '111222', '待审', ',', 'xcd@126.com'),
(18, '王雨箬', 'boy ', '15566986245', '710', '统计信息学院', '2011-04-08', '1990-02-17', '无', '20071005', 'wyr', '111222', '待审', ',', 'xcd1@163.com'),
(19, '邹游', 'boy ', '16332147896', '711', '数学学院', '2011-04-08', NULL, '无', '20071006', 'zy', '111222', '待审', ',', 'xcd2@163.com'),
(20, '陈枫', 'boy ', '15199170994', '712', '计算机学院', '2011-04-08', '1988-12-03', '绘画', '20071007', 'cf', '111222', '已审', ',某某理工学院国旗护卫队,某某理工学院国旗护卫队', 'xcdysw1988@163.com'),
(21, '李斯', 'boy ', '13654897865', '120', '统计', '2011-04-08', '1988-03-11', '无', '2007101008', 'ls', '111222', '待审', ',社团管理中心', 'xcd3@163.com'),
(22, '周菲', 'girl', '13216547896', '714', '英语学院', '2011-04-08', '1988-03-26', '无', '20071010', 'zf', '111222', '待审', ',', 'xcd5@163.com'),
(23, '赵晓红', 'girl', '15698734567', '716', '英语学院', '2011-04-08', '1989-04-16', '听音乐', '2007101012', 'zxh', '111222', '待审', ',社团管理中心', 'xcdys@163.com'),
(24, '林志玲', 'girl', '15899129768', '718', '外国语学院', '2011-04-08', '1986-03-16', '逛街，购物。', '2007101016', 'lzl', '111222', '待审', ',', 'xcdysw2007@163.com'),
(25, '唐一菲', 'girl', '1598634987', '724', '财务管理', '2011-04-08', '1990-01-16', '无', '2007101019', 'tyf', '111222', '待审', ',社团管理中心', 'xcd5@163.com'),
(26, '李静', 'boy ', '3156378790', '131', '国际贸易学院', '2011-04-08', '1992-03-12', '无', '2007101030', 'lj', '111222', '待审', ',社团管理中心', 'xcdy1@126.com'),
(27, '王晓璐', 'girl', '44546797953', '730', '会计学院', '2011-04-08', '1993-02-18', '无', '2007101031', 'wxl', '111222', '待审', ',社团管理中心', 'xcdy2@126.com'),
(28, '兰繇', 'boy ', '46454687', '136', '经济系', '2011-04-08', '1968-03-16', '无', '2007101034', 'lz', '111222', '待审', ',', '112@67.com'),
(29, '111', 'boy ', '11212', '111', '111', '2011-04-09', NULL, '无', '111', '111', '111', '待审', NULL, 'sadd@163.com'),
(30, '11', 'boy ', '1244234', '21212', '212', '2011-04-09', '1988-01-17', '无', '111', '22', '22', '待审', ',', 'asdsa@132.com'),
(31, '测试', 'boy ', '189999', '23', '计算学院', '0000-00-00', '1983-08-17', '无啊飒飒飒飒飒飒飒飒飒飒飒飒飒飒', '2008777', 'ztest', '123456', '待审', ',某某理工学院资本市场协会,某某理工学院大学生军乐团', '55555555@qq.com'),
(32, '111', 'boy ', '1', '1', '111', '0000-00-00', '0000-00-00', '无1', '111', 'ztest2', '123456', '待审', ',ceshi', '1213@11.com');

-- --------------------------------------------------------

--
-- 表的结构 `hyinfor`
--

CREATE TABLE `hyinfor` (
  `hy_id` int(11) NOT NULL auto_increment,
  `hy_name` varchar(50) default NULL,
  `hy_sex` varchar(50) default NULL,
  `hy_phone` varchar(50) default NULL,
  `hy_address` varchar(50) default NULL,
  `hy_zy` varchar(50) default NULL,
  `hy_date` date default NULL,
  `hy_birthday` date default NULL,
  `hy_jl` longtext,
  `hy_number` varchar(50) default NULL,
  `hy_nch` varchar(50) default NULL,
  `hy_pwd` varchar(50) default NULL,
  `hy_zhw` varchar(50) default NULL,
  `hy_st` longtext,
  `hy_email` varchar(50) default NULL,
  PRIMARY KEY  (`hy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=14 ;

--
-- 导出表中的数据 `hyinfor`
--

INSERT INTO `hyinfor` (`hy_id`, `hy_name`, `hy_sex`, `hy_phone`, `hy_address`, `hy_zy`, `hy_date`, `hy_birthday`, `hy_jl`, `hy_number`, `hy_nch`, `hy_pwd`, `hy_zhw`, `hy_st`, `hy_email`) VALUES
(2, '兰繇', 'boy ', '46454687', '136', '经济系', '2011-04-08', '1968-03-16', '无', '2007101034', 'lz', '111222', '正式会员', '社团管理中心', '112@67.com'),
(3, '王兵峰', 'boy ', '15678963587', '114', '金融学院', '2011-04-08', '1988-03-14', '无', '2007101003', 'wbf', '111222', '正式会员', '社团管理中心', 'xcd@126.com'),
(4, '林志玲', 'girl', '15899129768', '718', '外国语学院', '2011-04-08', '1986-03-16', '逛街，购物。', '2007101016', 'lzl', '111222', '正式会员', '社团管理中心', 'xcdysw2007@163.com'),
(5, '叶鹏', 'boy ', '15697864653', '111', '商务学院', '2011-04-08', '1988-01-01', '游戏', '2007101001', 'yp', '111222', '正式会员', '社团管理中心', 'xcd@126.com'),
(6, '岳士文', 'boy ', '15899129768', '020', '计算机学院', '2011-04-08', '1988-02-17', '读书，写作', '2007101184', 'ysw', '111222', '正式会员', '社团管理中心', 'xcdysw2007@163.com'),
(7, '丁佳', 'boy ', '165326897684', '112', '会计学院', '2011-04-08', '1989-03-05', '锻炼', '2007101002', 'dj', '111222', '正式会员', '社团管理中心', 'xcd@163.com'),
(8, '邹游', 'boy ', '16332147896', '711', '数学学院', '2011-04-08', NULL, '无', '20071006', 'zy', '111222', '正式会员', '社团管理中心', 'xcd2@163.com'),
(9, '王雨箬', 'boy ', '15566986245', '710', '统计信息学院', '2011-04-08', '1990-02-17', '无', '20071005', 'wyr', '111222', '正式会员', '社团管理中心', 'xcd1@163.com'),
(10, '周菲', 'girl', '13216547896', '714', '英语学院', '2011-04-08', '1988-03-26', '无', '20071010', 'zf', '111222', '正式会员', '社团管理中心', 'xcd5@163.com'),
(13, '陈枫', 'boy ', '15199170994', '712', '计算机学院', '2012-01-13', '1988-12-03', '绘画', '20071007', 'cf', '111222', NULL, '某某理工学院国旗护卫队', 'xcdysw1988@163.com');

-- --------------------------------------------------------

--
-- 表的结构 `stinfor`
--

CREATE TABLE `stinfor` (
  `st_id` int(11) NOT NULL auto_increment,
  `st_name` varchar(50) default NULL,
  `st_jj` longtext,
  `st_date` date default NULL,
  `st_state` int(11) default NULL,
  `st_zhy` varchar(50) default NULL,
  `st_phone` varchar(50) default NULL,
  `st_ren` varchar(50) default NULL,
  `st_address` varchar(50) default NULL,
  `st_sex` varchar(50) default NULL,
  `st_email` varchar(50) default NULL,
  `st_pwd` varchar(50) default NULL,
  PRIMARY KEY  (`st_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=20 ;

--
-- 导出表中的数据 `stinfor`
--

INSERT INTO `stinfor` (`st_id`, `st_name`, `st_jj`, `st_date`, `st_state`, `st_zhy`, `st_phone`, `st_ren`, `st_address`, `st_sex`, `st_email`, `st_pwd`) VALUES
(7, '某某理工学院国旗护卫队', '   某某理工学院国旗护卫队是全校性的学生社团组织，遵守学校社团管理有关规定。在学校党委的领导下，由校团委、校武装部队对国旗护卫队的日常工作进行指导和监督。\r\n   某某理工学院国旗护卫队人员挑选是由我校国旗护卫队负责人一行进行，人员身高1.75米以上，仪表端庄的男生。他们思想觉悟高，政治意识强，积极上进，军事素质好。\r\n   某某理工学院国旗护卫队现由30人组成，分别为护旗手和升旗手。某某理工学院国旗护卫队是一支退伍军人和在军训中取得优异成绩、表现突出的大学生组成的特殊队伍。各个成员政治思想强，军事基础扎实，作风严谨，纪律严明。我校大学生国旗护卫队人员利用每天早操时间进行队列、形体训练及学习《中华人民共和国国旗法》。如有大型活动则利用晚自习时间进行强化训练。\r\n自成立以来，先后完成了我校重大节日，每周各院升国旗，每月初全校升国旗及代表我校参加新疆大学生运动会开幕式等活动、仪式80多场次。我校国旗护卫队积极参加学校组织的各项爱国主义教育活动并做出应有的贡献。在政治教育和军事训练中吃苦耐劳，体现了我校国旗护卫队的精神风貌。他们牢记“爱校”“爱疆”“爱国家”的宗旨，以建设一支高标准，高素质的军事化队伍为目标，以“团结、互助、友爱”为原则。我们会继续延续国旗护卫队的优良传统，牢记自己的责任，把崭新的面貌展现给大家。\r\n', '2011-04-08', 1, '会计学院', '156987635478', 'dj', '121', 'boy ', 'xcd1@163.com', '111222'),
(8, '丹青艺术书画爱好者协会', '   为了给广大学生营造一个融洽的文化氛围。也为了弘扬中国传统文化，培养广大同学的艺术修养，营造和谐融洽的校园文化氛围，陶冶情操，同时也为了促进爱好书法、绘画同学之间的相互学习交流，给广大书法、绘画爱好者之间创造一个提高的机会。在我院领导、辅导员的支持下，经过校团委的批准于2008年4月成立以书法、绘画为主的“丹青艺术协会”。协会以服务学生为宗旨，以积极健康向上的内容为基础，以协助宣传学校文件、配合学校为前提。\r\n   管理是根基，学术推动发展。每一届的优秀书画人才带动下一届发展，培养下一届书画新秀。不间断的循环对于社团起到了长期持续的发展，也正是如此，成就了一批批在管理与学术上独到的人才。\r\n   协会秉承学生社团“学术与管理相结合”的工作思路，以“笔墨传心、画卷怡情”为口号。在协会“立足书画，热心公益；强化责任，友情管理；面向会员，扩大影响”发展理念的指引下，着重抓好团队建设、学术建设、会员权益维护等工作，不断地向制度化、学术化、专业化迈进。\r\n', '2011-04-08', 1, '计算机学院', '15199140994', 'cf', '710', 'girl', 'xcdysw2007@163.com', '111222'),
(9, '某某理工学院爱心社', '   某某理工学院爱心社是由某某理工学院广大青年志愿者自愿、自发组织形成的学生团体。主要通过有组织的实践活动，不断提高大学生自身的社会主义道德素养和社会实践能力，宣扬爱心文化，倡导爱心风气，开展爱心事业，为广大学生提供一个奉献爱心的平台。本社团的一切活动均在某某理工学院校团委及社团管理中心的领导下进行，并严格遵守国家教育部门颁布的《高校学生行为准则》。活动以不影响学校正常的教学秩序为原则，为学校和社会服务。', '2011-04-08', 1, '统计系', '15963487965', 'wyr', '711', 'girl', 'xcd2@163.com', '111222'),
(10, '某某理工学院风华乐坊', '   某某理工学院风华乐坊成立于2009年3月份，是在校团委领导下，挂靠校团委一个学生艺术社团。自成立之初，本社团就本着“以音乐为桥梁，沟通你我心灵”；让音乐丰富无穷的魅力，让优美的音符谱写美丽的乐章，让动听的旋律融入我们美丽的校园。\r\n   本社团奉行给每个热爱音乐同学创造机会、让每一个同学得到提高、让每一名会员满意的原则，“以音乐为桥梁，沟通你我的心灵；让音乐做主，创建美丽和谐的校园的宗旨，让“金子”闪光，让“个性”飞扬的口号，激发学生对音乐尤其是中国的民乐的热爱，活跃校园气氛，以丰富学生的课余生活，配合学校建设良好的校园文化，“打造校园经典，领军校园文化”成为风华国乐坊的发展目标。\r\n', '2011-04-08', 1, '商务学院', '15639872654', 'zy', '712', 'girl', 'xcd3@126.com', '111222'),
(11, '某某理工学院胡杨志愿社团', '  弘扬“为西部服务”，一切为了边疆若势群体，服务社会，奉献爱心，推已及人，用知识和行动感动他人，知行合一，学与奉献合一，充分利用课余时间丰富大学生的精神文化生活，形成一种浓厚的学习气围。以宣传奉献爱心，帮助弱势群体为工作重点，走进民族团结，是各民族互相了解，互相帮助，推动社会和谐发展。力求通过社团成员的共同努力为帮助跟多的人贡献大学生的一份力量，薪火相传，开展社会公益活动，形成一种强烈的社会责任感。', '2011-04-08', 1, '商务学院', '1648935467', 'zf', '713', 'girl', 'xcd3@126.com', '111222'),
(12, '某某理工学院爱心助学协会', '   爱心助学协会是在校团委领导下的全校性学生组织，成立于2006年11月20日。本协会以服务同学、服务学校、奉献社会为宗旨，坚持积极引导、规范管理与素质教育相结合的原则，合理挖掘、设置校内勤工助学岗位，为在校大学生义务提供社会兼职服务，并且以扶贫济困、慈善为怀，帮助弱势群体为爱心主旨，积极倡导和引导大学生开展爱心活动。从成立自今，本协会开展了一系列的爱心、助学活动，如“爱心接力”、社会兼职招聘会、面试“霸主”等。而且多次承办了学校举办的大型文艺活动，如联想逸人组才艺赛、迎新晚会、大学生模特大赛、话剧表演赛等，为我校最为活跃的学生社团之一，于2007年12月底成功发行了《爱心助学报》。在2008年6月被评为某某理工学院2007-2008年度“十佳社团”，在2008年9月又承办了‘精品社团推介晚会’活动。在2009年4月19日成功举办了大学生社会兼职招聘会，现场为我校同学提供了上千个兼职和见习岗位，晨报、晚报等媒体前来采访。自成立至今，共为我校贫困提供了四千多个助学岗位。并多次开展社会爱心、公益活动。', '2011-04-08', 1, '金融学院', '15698763547', 'wbf', '130', 'boy ', 'xcd4@163.com', '111222'),
(14, '某某理工学院大学生军乐团', '2000年，某某理工学院走过了光辉的50年历程，在学校各级部门的倡导下，经校党委研究决定成立某某理工学院大学生军乐团。7月10日，在校团委领导的认真筹划和各方协调下，成立了某某理工学院大学生军乐团，编制为中型乐队，由52人组成，演奏队员全部来自我校各系部99级学生。在短短的三个月时间里，经音乐理论课程学习和半军事化强化训练，他们在我校50年校庆主会场上奏响了雄壮有力的军乐。某某理工学院大学生军乐团用辛勤的汗水给校党委交上了一份合格的答卷，受到了校党委及各级部门领导的高度评价。', '2011-04-09', 1, '外国语学院', '46878964', 'lzl', '720', 'girl', 'as@163.com', '111222'),
(15, '某某理工学院演讲与辩论协会', '某某理工学院演讲与辩论协会是某某理工学院校团委领导下的学生社团组织，成立于2002年10月，下设全体成员大会理事会，主席团，常务秘书会议以及其他常设机构，除组织每年一届的全校辩论赛外，其主要负责组织参与社会及学院各项语言类活动, 是一个以演讲与辩论为主要活动内容，同时组织和承办各类文艺、文学和其他有利于当代大学生身心发展活动的综合性社团。', '2011-04-09', 1, '经济', '15896345455', 'ls', '531', 'boy ', 'adf@129.com', '111222'),
(16, '某某理工学院资本市场协会', '某某理工学院资本市场协会是由某某理工学院校团委直接领导下，面向全校同学的以“资本，证券”为核心的“学术，实践”校级学生社团组织。协会以服务同学为宗旨，以创造良好的学术氛围为目的。以增长实际操作知识为口号，为广大金融证券爱好者提供一个良好的学习交流以及实践的操作平台。\r\n  资本市场协会主要通过学术讲座，虚拟操作，校外实践，学术交流等形式的活动引导同学们树立理性的投资理念，科学的指导同学们正确地认识和了解资本市场！目前协会与宏源证券，亿邦投资理财，天利期货，国泰君安，万达期货等证券公司建立了良好的长期合作关系，使同学们可以直接接触到证券公司的运作，从中学习和实践。并且协会长期邀请从事证券行业的资深人员来校为同学们开展学术讲座，分享实际操作经验。同时，学校经济学院的讲师张玉玲老师担任协会的指导老师，更好的让同学们将理论知识与实践操作相结合。\r\n', '2011-04-09', 1, '国际贸易学院', '1689354781', 'tyf', '732', 'girl', 'tyflv@163.com', '111222'),
(18, '21312', '3`23`3', '2011-04-09', 1, 'ewf', '21131', '11', '12313', 'boy ', '11@134.vjo', '11'),
(19, 'ceshi', '123213213132213', '2012-01-02', 1, 'txt_zhy', '455454', '测试23', '4554', 'boy ', '555@213.com', '123456');
