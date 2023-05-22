login = (e1,e2) =>
{
    let username_el = document.querySelector(e1);
	let username = username_el.value;
	let password_el = document.querySelector(e2);
	let password = password_el.value;
    var text="還沒寫呢~\n密碼:"+username+"\n密碼:"+password;
    alert(text);
}
register = (e1,e2,e3,e4) =>
{
    let name_el = document.querySelector(e1);
	let name = name_el.value;
	let password_el = document.querySelector(e2);
	let password = password_el.value;
    let gmail_el = document.querySelector(e3);
	let gmail = gmail_el.value;
	let access_el = document.querySelector(e4);
	let access = access_el.value;
    var text="";
    text += "還沒寫呢~\n姓名:"+name+"\n密碼:"+password;
    text += "\n信箱:"+gmail+"\n地址:"+access;
    alert(text);
}