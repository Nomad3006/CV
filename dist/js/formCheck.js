regmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
regtxt = /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u
regnum=/^[0-9]+$/i

function textCheck(elem) {
	if(regtxt.test(elem.value) && elem.value.length){
		validate(elem);
		return true;
	}
	else{
		declined(elem);
		return false;
	}

}

function emailCheck (elem){
	if(regmail.test(elem.value)){
		validate(elem);
		return true;
	}
	else{
		declined(elem);
		return false;
	}
}

function isNotEmpty (elem){
	if(elem.value.length){
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
	var msg = document.getElementById('msg-input');
	var button = document.getElementById('subButton')
	var bool = true;

	bool &= textCheck(name);
	bool &= emailCheck(email);
	bool &= isNotEmpty(msg)

	if(bool){
		return true;
	}
	else{
		return false;

	}
}

function validate(e){
	console.info($(e).parent());
//	e.classList.add("ok");
//	e.classList.remove("ko");
//	e.nextElementSibling.classList.add("flaticon-success");
//	e.nextElementSibling.classList.remove("flaticon-error");
	$(e).addClass("form-control-success");
	$(e).parent().addClass("has-success");
	$(e).removeClass("form-control-danger");
	$(e).parent().removeClass("has-danger");
}

function declined(e){
	console.info($(e).parent());
//	e.classList.add("ko");
//	e.classList.remove("ok");
//	e.nextElementSibling.classList.add("flaticon-error");
//	e.nextElementSibling.classList.remove("flaticon-success");
	$(e).addClass("form-control-danger");
	$(e).parent().addClass("has-danger");
	$(e).parent().removeClass("has-success");
	$(e).removeClass("form-control-success");
}
