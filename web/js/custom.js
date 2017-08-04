function slidebarclick(obj) {	
    $(this).bjuiajax('refreshLayout', {
        target: '#home-menu-list',
        url: '/menu/',
        type: 'POST',
        data: { menuGroupId: obj }
    });
	$(this).navtab('switchTab', 'main');
}