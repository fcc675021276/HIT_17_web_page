// JavaScript Document

submituseful1=false;
submituseful2=false;
submituseful3=false;

//对比两次输入的密码
function compare() {
    var pwd1 = document.getElementById("pwd1").value;
    var pwd2 = document.getElementById("pwd2").value;
    if(pwd1 === pwd2) {
        document.getElementById("text").innerHTML="<font color='green'>两次密码相同</font>";
		submituseful1=true;
		document.getElementById("submit").disabled=false;
    }
    else {
        document.getElementById("text").innerHTML="<font color='red'>两次密码不相同,请重新输入</font>";
		submituseful1=false;
		document.getElementById("submit").disabled=false;
    }
}
		  
//密码位数限制
function pwd() {
	var pwd1=document.getElementById("pwd1").value;
	var text1=document.getElementById("text1");
	pwd1=String(pwd1);
	if(pwd1.length < 7 || pwd1.length > 30)
	{
		text1.innerHTML="<font color='red'>密码必须大于6位数且小于30位数</font>";
		submituseful2=false;
		document.getElementById("submit").disabled=false;
	}
	else {
		text1.innerHTML="<font color='green'>密码符合要求</font>";
		submituseful2=true;
		document.getElementById("submit").disabled=false;
	}
}
//用户字符数限制
function na() {
	var name1=document.getElementById("name1").value;
	var text2=document.getElementById("text2");
	name=String(name);
	if(name1.length < 3 || name1.length > 15)
	{
		text2.innerHTML="<font color='red'>用户名字符数必须大于2且小于16</font>";
		submituseful3=false;
		document.getElementById("submit").disabled=false;
	}
	else {
		text2.innerHTML="<font color='green'>用户名符合要求</font>";
		submituseful3=true;
		document.getElementById("submit").disabled=false;
	}
}
//注册按钮是否有用
function useful() {
	if(submituseful1==true && submituseful2==true && submituseful3==true)
	{
		document.getElementById("submit").disabled=false;
	}
	else{
		document.getElementById("submit").disabled=true;
	}
}