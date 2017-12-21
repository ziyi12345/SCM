var a=new dtree('a','main')

	a.addFolder('管理员管理')
		a.addNode('社团管理','admin_st.php')
		a.addNode('社团审批','admin_st_shq.php')
		a.addNode('社团成员查询','admin_look.php')
		a.addNode('会员列表','user_list.php')

		a.addNode('会员查询','admin_search.php')
		a.addNode('管理员信息编辑','admin_edit.php')
			a.addNode('发布公告','new.php?id=1')
a.addNode('公告查询','news_list.php')
a.addNode('帖子查询','bbs_list.php')

	a.endFolder()
	
   

	a.addNode('退出系统','zhuxiao.php')


a.init()
a.expandAll(true)
