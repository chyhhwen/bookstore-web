const view ={
    title:["推薦書籍","中文書籍","英文書籍"],
    size:8,
    show:() =>
    {
        var book_item="";
        for(var i=0;i<3;i++)
        {
            book_item += "<div class=title>";
            book_item += "<h2>"+ view.title[i] +"</h2></div>";
            for(var j=0;j<8;j++)
            {
                book_item += "<div class=book>";
                book_item += "<div class=pic></div>";
                book_item += "<div class=price>$"+ (j*100) +"</div>";
                book_item += "<div class=name>"+ "這是書名" +"</div>";
                book_item += "</div>";
            }
            book_item += "</div>";
        }
        document.querySelector('#view').innerHTML= book_item;
    }
}
/*const book={

}*/
/*const shop = {
	list: {}, add: function (ID, Name, Price, Amount) {
		if (this.list.hasOwnProperty(ID)) {
			this.list[ID]["Amount"] += Amount;
			this.list[ID]["Price"] = Price * this.list[ID]["Amount"];
		} else {
			shop.init(ID, Name, Price, Amount);
		}
	}, init: function (ID, Name, Price, Amount, overwrite = true) {
		if (overwrite) this.list[ID] = {"Name": Name, "Price": Price, "Amount": Amount};
	}, del: function (ID) {
		delete this.list[ID];
		showList();
	}, total: () => {
		let price = 0;
		Object.entries(shop.list).forEach(([key, value]) => {
			price += value["Price"];
		});
		return price;
	}
};*/
window.onload =()=>
{   
    view.show();
}