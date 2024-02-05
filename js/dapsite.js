
$(document).ready(function () {
    $('#user-name').on('input', function () {
        var that = this;
        var res = /[^А-Яа-яЁё ]/g.exec(that.value);
        that.value = that.value.replace(res, '');
    });
});

$(document).ready(function () {
    $('#applicationUserName').on('input', function () {
        var that = this;
        var res = /[^А-Яа-яЁё ]/g.exec(that.value);
        that.value = that.value.replace(res, '');
    });
});

$(document).ready(function () {
    $('#name-lastname').on('input', function () {
        var that = this;
        var res = /[^А-Яа-яЁё ]/g.exec(that.value);
        that.value = that.value.replace(res, '');
    });
});

$(document).ready(function () {
    $('#town').on('input', function () {
        var that = this;
        var res = /[^А-Яа-яЁё ]/g.exec(that.value);
        that.value = that.value.replace(res, '');
    });
});


$(document).ready(function () {
    $('input[type=text]').on('input', function () {
        var that = this;
        var res = /[^А-Яа-яЁё ]/g.exec(that.value);
        that.value = that.value.replace(res, '');
    });
});