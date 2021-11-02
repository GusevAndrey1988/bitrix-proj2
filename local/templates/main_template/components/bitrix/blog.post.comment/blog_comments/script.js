function createNewPost() {
    let formData = new FormData(document.forms[0]);
    clearErrors();

    BX.ajax.post(
        location.href,
        Object.fromEntries(formData.entries()),
        function (response) {
            updateCaptcha();

            let responseJson = JSON.parse(response);

            let errorMessage = '';
            if (responseJson.commentError) {
                errorMessage = responseJson.commentError;
            }
            if (responseJson.fatalMessages) {
                
            }
            if (responseJson.errorMessages) {
                
            }

            if (errorMessage) {
                showErrors(errorMessage);
            } else {
                let commentList = document.querySelector('.commentlist');
                if (commentList) {
                    if (responseJson.message) {
                        commentList.innerHTML = 
                            '<li class="site-blog-post-comment">' + responseJson.message + '</li>'
                            + commentList.innerHTML;
                    } else {
                        commentList.innerHTML = responseJson.html + commentList.innerHTML;
                    }
                }
            }
        }
    )
}

function showErrors(message) {
    let errorElement = document.querySelector('#errors');
    if (errorElement) {
        errorElement.innerHTML = message;
    }
}

function clearErrors() {
    let errorElement = document.querySelector('#errors');
    if (errorElement) {
        errorElement.innerHTML = '';
    }
}

function updateCaptcha() {
    BX.ajax.getCaptcha(function(data) {
        document.querySelector('#captcha_word').value = '';
        document.querySelector('#captcha_code').value = data['captcha_sid'];
        document.querySelector('#captcha').src = '/bitrix/tools/captcha.php?captcha_code=' + data['captcha_sid'];
        document.querySelector('#captcha').style.display = '';
    });
}

BX(function () {
    updateCaptcha();
})