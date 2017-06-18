function show_more(i){
    var sub_block = document.getElementById(i),
    elem = document.getElementById('show-more-'+i);

    if (sub_block.classList.contains("hidden")) {
        sub_block.classList.remove("hidden");
        elem.classList.add("transformY");
        if (elem.innerHTML=="Подробнее") {
            elem.innerHTML="Скрыть";
        }
    }
    else {
        sub_block.classList.add("hidden");
        elem.classList.remove("transformY");
        if (elem.innerHTML=="Скрыть"){
            elem.innerHTML="Подробнее";
        }
    }
}

function cost_change_1(i) {
    var sel = document.getElementById(i),
    pay_method = sel.options[sel.selectedIndex].text,
    cost = document.getElementById('dc'+i);
    switch (i) {
        case '1':
            switch (pay_method) {
                case 'В рассрочку на 36 месяцев':
                    cost.innerHTML=160; 
                    cost.classList.add('cost_month');
                break;
                case 'В рассрочку на 24 месяца':
                    cost.innerHTML=250;
                    cost.classList.add('cost_month');
                break;
                case 'В рассрочку на 12 месяцев':
                    cost.innerHTML=430;
                    cost.classList.add('cost_month');
                break;
            default:
                cost.innerHTML=4800;
                cost.classList.remove('cost_month');
            break;
            }
        break;
        case '2':
            switch (pay_method) {
                case 'В рассрочку на 36 месяцев':
                    cost.innerHTML=80; 
                    cost.classList.add('cost_month');
                break;
                case 'В рассрочку на 24 месяца':
                    cost.innerHTML=100;
                    cost.classList.add('cost_month');
                break;
                case 'В рассрочку на 12 месяцев':
                    cost.innerHTML=180;
                    cost.classList.add('cost_month');
                break;
            default:
                cost.innerHTML=1900;
                cost.classList.remove('cost_month');
            break;
            }
        break;
        case '3':
            switch (pay_method) {
                case 'В рассрочку на 36 месяцев':
                    cost.innerHTML=319; 
                    cost.classList.add('cost_month');
                break;
                case 'В рассрочку на 24 месяца':
                    cost.innerHTML=439;
                    cost.classList.add('cost_month');
                break;
                case 'В рассрочку на 12 месяцев':
                    cost.innerHTML=809;
                    cost.classList.add('cost_month');
                break;
            default:
                cost.innerHTML=8790;
                cost.classList.remove('cost_month');
            break;
            }
        break;
        }    
    }
function cost_change_2(i) {
    var sel = document.getElementById(i),
    pay_method = sel.options[sel.selectedIndex].text,
    cost = document.getElementById('dc'+i);
    switch (i) {
        case '1':
            switch (pay_method) {
                case 'В рассрочку на 36 месяцев':
                    cost.innerHTML=120; 
                    cost.classList.add('cost_month');
                break;
                case 'В рассрочку на 24 месяца':
                    cost.innerHTML=180;
                    cost.classList.add('cost_month');
                break;
                case 'В рассрочку на 12 месяцев':
                    cost.innerHTML=330;
                    cost.classList.add('cost_month');
                break;
            default:
                cost.innerHTML=3800;
                cost.classList.remove('cost_month');
            break;
            }
        break;
        case '2':
            switch (pay_method) {
                case 'В рассрочку на 24 месяца':
                    cost.innerHTML=165;
                    cost.classList.add('cost_month');
                break;
                case 'В рассрочку на 12 месяцев':
                    cost.innerHTML=330;
                    cost.classList.add('cost_month');
                break;
            default:
                cost.innerHTML=3960;
                cost.classList.remove('cost_month');
            break;
            }
        break;
    }    
}

var forms = document.getElementsByTagName('form'), k=0, t=1;
for (var f = 0; f < forms.length; f++) {
    var form = forms[f],
        inputs = form.getElementsByTagName('input'),
        conts = form.getElementsByClassName('flex_block'), req_elems=[];
    for (var i = 0; i < inputs.length; i++) {
        var input = inputs[i];
        if (input.type == 'submit') { var submit = input; }
    }
    for (var i = 0; i < conts.length; i++) {
        var cont = conts[i];
        for (var n = 0; n < cont.childNodes.length; n++) {
            var cont_elem = cont.childNodes[n];
            if (cont_elem.required == true) {
                k++;
                req_elems.push(cont_elem);
            }
        }
    }
    for (var i = 0; i < req_elems.length; i++) {
        var element = req_elems[i];
        element.onchange = active_submit;
    }
}

function show_acc_block() {
    var sel = document.getElementById('topic'),
    topic = sel.options[sel.selectedIndex].text,
    block = document.getElementById('acc_block'),
    acc_number = document.getElementById('acc_number');
    if (topic == "Запрос. Подключение услуг, предоставление доп.сервисов" || topic == "Запрос. Предоставление платежно-расчетных документов") {
        block.classList.remove("hidden");
        acc_number.required = true;
    }
    else{
        if (acc_number.required == true) {
            acc_number.required = false;
            block.classList.add("hidden");
        }
    }
}

function active_submit() {
    var req_elem = event.target, filled_req_elems=[];
    if (req_elem.value != "" && filled_req_elems.indexOf(req_elem) == -1) {
        t++;
        filled_req_elems.push(req_elem);
    }
    if (req_elem.value == "") {
        t--;
        delete filled_req_elems[req_elem];
    }
    if (t >= k) {
        submit.classList.remove('disabled');
        submit.disabled = false
    }
    else {
        submit.classList.add('disabled');
        submit.disabled = true;
    }
}