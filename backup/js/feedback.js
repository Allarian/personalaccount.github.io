document.getElementById('feedback_form').addEventListener('submit', function feedback(evt){
    var client_cat_sel = document.getElementById('client_cat'), client_category = client_cat_sel.options[client_cat_sel.selectedIndex].text,
        client_name = document.getElementById('name_client').value,
        com_time_sel = document.getElementById('communicat_time'), communicat_time = com_time_sel.options[com_time_sel.selectedIndex].text,
        contact_number = document.getElementById('contact_number').value,
        e_mail = document.getElementById('e-mail').value,
        communicat_phone = document.getElementById('phone_communicat'),
        communicat_email = document.getElementById('e-mail_communicat'),
        residence_sel = document.getElementById('place_of_residence'), residence = residence_sel.options[residence_sel.selectedIndex].text,
        locality = document.getElementById('locality').value,
        street = document.getElementById('street').value,
        building = document.getElementById('building').value,
        apartment = document.getElementById('apartment').value,
        service_sel = document.getElementById('service'), service = service_sel.options[service_sel.selectedIndex].text,
        acc_number = document.getElementById('acc_number').value,
        topic_sel = document.getElementById('topic'), topic = topic_sel.options[topic_sel.selectedIndex].text,
        feedback_text = document.getElementById('feedback_text').value,
        http = new XMLHttpRequest();
    evt.preventDefault();
    http.open("POST", "contacts.php", true);
    http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    if (communicat_phone.checked) {
        var communicat_data = "По телефону";
    }
    if (communicat_email.checked) {
        var communicat_data = "По почте";
    }
    http.send("&client_category=" + client_category + "&client_name=" + client_name + "&communicat_time=" + communicat_time + "&communicat_data=" + communicat_data + "&residence=" + residence + "&locality=" + locality + "&street=" + street + "&building=" + building + "&apartment=" + apartment + "&service=" + service + "&acc_number=" + acc_number + "&topic=" + topic + "&feedback_text=" + feedback_text);
    http.onreadystatechange = function() {
        if (http.readyState == 4 && http.status == 200) {
        alert(http.responseText + ', Ваше сообщение получено.\nНаши специалисты ответят Вам в течении 2-х дней.\nБлагодарим за интерес к нашей фирме!');    
        feedback_text.removeAttribute('value'); 
        feedback_text.value='';
        }
    }
    http.onerror = function() {
        alert('Извините, данные не были переданы');
    }
}, false)