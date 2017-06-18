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