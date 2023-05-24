
const view ={
    title:["書籍排行榜","中文書籍","英文書籍"],
    size:8,
    show:() =>
    {
        var book_item="";
        for(var i=0;i<3;i++)
        {
            book_item += "<div id=view>";
            book_item += "<div class=title>";
            book_item += "<h2>"+ view.title[i] +"</h2></div>";
            book_item += "<div id=books>";
            for(var j=0;j<8;j++)
            {
                book_item += "<div class=book>";
                book_item += "<div class=pic></div>";
                book_item += "<div class=price>$"+ null +"</div>";
                book_item += "<div class=name>"+ "NULL" +"</div>";
                book_item += "</div>";
            }
            book_item += "</div>";
            book_item += "</div>";
        }
        document.querySelector('#view_box').innerHTML= book_item;
    }
}
/*const book={

}*/
window.onload =()=>
{   
    view.show();
}