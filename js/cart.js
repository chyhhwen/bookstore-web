var list = ["1.確認明細","2.填寫資料","2.訂單確認","3.進行付款","4.完成訂購"];
var client=["姓名","地址"];
var pay = ["姓名","卡號","郵址"];
const shop = {
	list: {}, 
    add: function (ID, Name, Price, Amount) 
    {
		if (this.list.hasOwnProperty(ID)) 
        {
			this.list[ID]["Amount"] = parseInt(this.list[ID]["Amount"]) + parseInt(Amount);
			this.list[ID]["Price"] = parseInt(Price) * parseInt(this.list[ID]["Amount"]);
		} 
        else 
        {
			shop.init(ID, Name, Price, Amount);
		}
	}, 
    init: function (ID, Name, Price, Amount, overwrite = true) 
    {
		if (overwrite) this.list[ID] = {"Name": Name, "Price": Price, "Amount": Amount};
	}, 
    del: function (ID) 
    {
		delete this.list[ID];
        var url = "order.php?del=1&token=" + ID;
        location.href=url;
	}, 
    total: () => 
    {
		let price = 0;
		Object.entries(shop.list).forEach(([key, value]) => 
        {
			price += parseInt(value["Price"]);
		});
		return price;
	}
};

/**
 * 物品刪除
 * @param key
 */
delItem = (key) =>
{
	shop.del(key);
    details();
}

/**
 * 呼叫資料
 * @param ItemID
 */
callItem = (ItemID) =>
{

}

/**
 * 新增物品
 * @param e1 物品名稱
 * @param e2 物品價錢
 * @param e3 物品ID
 */
addItem = (e1, e2, e3) => 
{
	let inputname_el = document.querySelector(e1);
	let inputname = inputname_el.value;
	let inputprice_el = document.querySelector(e2);
	let inputprice = inputprice_el.value;
	shop.add(e3,inputname,inputprice,1);
    alert('新增成功');
}
set = (s) =>
{
    document.querySelector("#one").style = "color: black";
    document.querySelector("#three").style = "color: black";
    document.querySelector("#four").style = "color: black";
    document.querySelector("#five").style = "color: black";
    document.querySelector(s).style = "color: #bb5a3a;";
}
curret = () =>
{
    set('#five');
    var view="";
    view += "<div id=title><h2>"+ list[4] +"</h2>";
    view += "</div><div id=item>";
    view += "<h2>訂單已完成</h2></div>";
    document.getElementById('list').innerHTML = view;
}
usepay = () =>
{
    set('#four');
    var view="";
    var input_id = ['name','card','access'];
    view += "<div id=title><h2>"+ list[3] +"</h2></div>";
    view += "<form action=deliver.php method=POST>";
    for(var i=0;i<3;i++)
    { 
        view += "<div id=input>";
        view += "<h2>"+ pay[i] +"</h2>";
        view += "<input type=text name="+ input_id[i] + "></div>";
    }
    view += "<div id=input>";
    view += "<input type=submit value=確認></div>";
    view += "</form>";
    document.getElementById('list').innerHTML = view;
}
check = () =>
{
    set('#three');
    var view="";
    view += "<div id=title><h2>"+ list[2] +"</h2></div>";
    Object.entries(shop.list).forEach(([key, value]) => 
    {
        
        view += "<div id=item>";
        view += "<h2>"+value["Name"]+" ";
        view += "  $"+value["Price"]+"</h2></div>";
	});
    view += "<div id=item>";
        view += "<h2>總金額:";
        view += "  $" + shop.total() + "</h2></div>";
    view += "<div id=input>";
    view += "<input type=submit value=確認 ";
    view +=  "onclick=\"location.href=\'index.php?page=cart&stage=3\'\"></div>";
    document.getElementById('list').innerHTML = view;
}
details = () =>
{
    set('#one');
    var view="";
    view += "<div id=title><h2>"+ list[0] +"</h2></div>";
    Object.entries(shop.list).forEach(([key, value]) => 
    {
        
        view += "<div id=item>";
        view += "<div class=text><h2>"+value["Name"]+" ";
        view += "  $"+value["Price"]+"</h2></div>";
        view += "<div class=del><a href='javascript:delItem(\"" + key + "\")'><h2>X</h2></a></div></div>";
	});
    view += "<div id=input>";
    view += "<input type=submit value=確認 ";
    view +=  "onclick=\"location.href=\'index.php?page=cart&stage=2\'\"></div>";
    document.getElementById('list').innerHTML = view;
}



