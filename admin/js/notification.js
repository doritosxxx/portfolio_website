const notification = {
    self: {},
    queue: [],
    visible: false,
    setText: function(text) {
        this.self.children("div").text(text);
    },
    new: function(text) {
        if (this.visible) {
            this.queue.push(text);
        } else {
            this.setText(text);
            this.show();
            this.visible = true;
            $("input[type=submit]").attr("disabled", "");
        }
    },
    show: function() {
        this.self.show();
    },
    close: function() {
        if (this.queue.length > 0) {
            this.setText(this.queue.shift());
        } else {
            this.hide();
            this.visible = false;
            $("input[type=submit]").removeAttr("disabled");
        }

    },
    hide: function() {
        this.self.hide();
    }

};

$().ready(function() {
    notification.self = $("#notification");
    $("#notification > button").on("click", () => notification.close());
});