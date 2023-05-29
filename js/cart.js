var requestURL = './lib/fix.json';
var request = new XMLHttpRequest();
var list = [];
var liname = [];
var client = [];
var pay = [];
request.open('GET', requestURL);
request.responseType = 'json';
request.send();
request.onload = function() 
{
    list = request.response.list;
    liname = request.response.liname;
    client = request.response.client;
    pay = request.response.pay;
}
window.onload =()=>
{
    var view="";
    view += "<div id=title><h2>1.確認明細</h2>";
    view += "</div><div id=item>";
    view += "<h2>123</h2></div>";
    view += "<div id=input>";
    view += "<input type=submit value=確認></div>";
    document.getElementById('list').innerHTML = view;
}
details = () =>
{
    var view="";
    view += "<div id=title><h2>"+ list[0] +"</h2>";
    view += "</div><div id=item>";
    view += "<h2>123</h2></div>";
    view += "<div id=input>";
    view += "<input type=submit value=確認></div>";
    document.getElementById('list').innerHTML = view;
}
write = () =>
{
    var view="";
    view += "<div id=title><h2>"+ list[1] +"</h2></div>";
    for(var i=0;i<2;i++)
    { 
        view += "<div id=input>";
        view += "<h2>"+ client[i] +"</h2>";
        view += "<input type=text></div>";
    }
    view += "<div id=input>";
    view += "<input type=submit value=確認></div>";
    document.getElementById('list').innerHTML = view;
}
check = () =>
{
    var view="";
    view += "<div id=title><h2>"+ list[2] +"</h2>";
    view += "</div><div id=item>";
    view += "<h2>123</h2></div>";
    view += "<div id=input>";
    view += "<input type=submit value=確認></div>";
    document.getElementById('list').innerHTML = view;
}
usepay = () =>
{
    var view="";
    view += "<div id=title><h2>"+ list[3] +"</h2></div>";
    for(var i=0;i<4;i++)
    { 
        view += "<div id=input>";
        view += "<h2>"+ pay[i] +"</h2>";
        view += "<input type=text></div>";
    }
    view += "<div id=input>";
    view += "<input type=submit value=確認></div>";
    document.getElementById('list').innerHTML = view;
}
curret = () =>
{
    var view="";
    view += "<div id=title><h2>"+ list[4] +"</h2>";
    view += "</div><div id=item>";
    view += "<h2>訂單已完成</h2></div>";
    document.getElementById('list').innerHTML = view;
}