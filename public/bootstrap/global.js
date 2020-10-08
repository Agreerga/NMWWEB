function LoadContentPage(pageName) {
    let pages = 'pages/' + pageName + '.html';
    $('#website_content').empty();
    $('#website_content').load(pages,function(){
    });
}