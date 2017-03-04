regmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
regtxt = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u
regnum=/^[0-9]+$/i

function textBlurFunction(elem) {
	if(regtxt.test(elem.value) && elem.value.length){
		validate(elem);
		return true;
	}
	else{
		declined(elem);
		return false;
	}

}

function emailBlurFunction (elem){
	if(regmail.test(elem.value)){
		validate(elem);
		return true;
	}
	else{
		declined(elem);
		return false;
	}
}

function checkAll(){
	var name = document.getElementById('name-input');
	var email = document.getElementById('email-input');
	var button = document.getElementById('subButton')
	var bool = true;

	bool &= textBlurFunction(name);
	bool &= textBlurFunction(surname);
	bool &= textBlurFunction(city);
	bool &= cpBlurFunction(cp);
	bool &= telBlurFunction(tel);
	bool &= emailBlurFunction(email);

	if(bool){
		return true;
	}
	else{
		return false;

	}
}

function validate(e){
	e.classList.add("ok");
	e.classList.remove("ko");
	e.nextElementSibling.classList.add("flaticon-success");
	e.nextElementSibling.classList.remove("flaticon-error");
	e.classList.add("has-success");
	e.classList.remove("has-danger");
}

function declined(e){
	e.classList.add("ko");
	e.classList.remove("ok");
	e.nextElementSibling.classList.add("flaticon-error");
	e.nextElementSibling.classList.remove("flaticon-success");
	e.parent().addClass("has-danger");
	e.parent().removeClass("has-success");
}
