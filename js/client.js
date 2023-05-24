var requestURL = './fix.json';
var request = new XMLHttpRequest();
var title = [];
var input = [];
var id = [];
var qu_id = [];
request.open('GET', requestURL);
request.responseType = 'json';
request.send();
request.onload = function() 
{
    title = request.response.title;
    input = request.response.input;
    id = request.response.id;
    qu_id = request.response.qu_id;
}

login = () =>
{
    let username_el = document.querySelector(qu_id[0]);
	let username = username_el.value;
	let password_el = document.querySelector(qu_id[1]);
	let password = password_el.value;
    var text="還沒寫呢~\n帳號:"+username+"\n密碼:"+password;
    alert(text);
}
register = () =>
{
    let name_el = document.querySelector(qu_id[2]);
	let name = name_el.value;
	let password_el = document.querySelector(qu_id[3]);
	let password = password_el.value;
    let gmail_el = document.querySelector(qu_id[4]);
	let gmail = gmail_el.value;
	let access_el = document.querySelector(qu_id[5]);
	let access = access_el.value;
    var text="";
    text += "還沒寫呢~\n姓名:"+name+"\n密碼:"+password;
    text += "\n信箱:"+gmail+"\n地址:"+access;
    alert(text);
}
login_view = (el) =>
{
    var block = "";
    block += "<div class=input>";
    block += "<div class=title><h1>"+ title[0] +"</h1>";
    block += "<input type=submit value=X onclick=login_leave('#test')></div>";
    block += "<div class=form>";
    for(var i=0;i<2;i++)
    {
        if(i === 1)
        {
            block += "<div class=put><h1>"+ input[i] +"</h1>";
            block += "<input type=password id="+ id[i] +"></div>";
        }
        else
        {
            block += "<div class=put><h1>"+ input[i] +"</h1>";
            block += "<input type=text id="+ id[i] +"></div>";
        }
    }
    block += "<div class=put>";
    block += "<input type=submit value=確認 id="+ id[6]+" on";
    block += "click=login()></div>";
    block += "<div class=pic><img src=./pic/cat2.jpg>";
    block += "</div>";
    block +="</div>";
    document.querySelector(el).innerHTML = block;
    document.querySelector(el).style.display="block";
}
login_leave = (el) =>
{
    document.querySelector(el).style.display="";
}
register_view = (el) =>
{
    var block = "";
    block += "<div class=input>";
    block += "<div class=title><h1>"+ title[1] +"</h1>";
    block += "<input type=submit value=X onclick=login_leave('#test')></div>";
    block += "<div class=form>";
    for(var i=2;i<6;i++)
    {
        if(i === 3)
        {
            block += "<div class=put><h1>"+ input[i] +"</h1>";
            block += "<input type=password id="+ id[i] +"></div>";
        }
        else
        {
            block += "<div class=put><h1>"+ input[i] +"</h1>";
            block += "<input type=text id="+ id[i] +"></div>";
        }
    }
    block += "<div class=put>";
    block += "<input type=submit value=確認 id="+ id[6]+" on";
    block += "click=register()></div>";
    block +="</div>";
    document.querySelector(el).innerHTML = block;
    document.querySelector(el).style.display="block";
}
register_leave = (el) =>
{
    document.querySelector(el).style.display="";
}
reset = (el) =>
{
    document.querySelector(el).style.display="";
}
login_check = () =>
{

}