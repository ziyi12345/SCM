var a=new dtree('a','main')

	a.addFolder('管理员模块')
		a.addNode('社团管理','admin_st.php')
		a.addNode('待审社团审批','admin_st_shq.php')
		a.addNode('社团会员查看','admin_look.php')
		a.addNode('会员管理','user_list.php')

		a.addNode('查找指定会员','admin_search.php')
		a.addNode('修改管理员','admin_edit.php')
			a.addNode('发布公告','new.php?id=1')
a.addNode('公告管理','news_list.php')
a.addNode('帖子管理','bbs_list.php')

	a.endFolder()
	
   

	a.addNode('退出系统','zhuxiao.php')



a.init()
a.expandAll(true)
