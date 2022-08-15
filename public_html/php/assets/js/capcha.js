 grecaptcha.ready(function () {
    grecaptcha.execute('6LeABJwaAAAAAJFen151ExMgnARESDdkgQcmiuRU', { action: 'contact' }).then(function (token) {
        var recaptchaResponse = document.getElementById('recaptchaResponse');
        recaptchaResponse.value = token;
    });
});