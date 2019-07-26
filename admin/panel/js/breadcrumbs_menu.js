// Уважаемые разработчики, если Вы читаете это, то заранее прошу прошения за плохой код
// Я слишком мало знаю Vue, чтобы сделать код красивым и без костылей
let menu = {
    selected: 0
};

Vue.component("breadcrumbs-item", {
    props: ['data'],
    template: `<div @click="onclick">{{ data.title }}</div>`,
    methods: {
        onclick: function() {
            menu.selected = this.data.id;
        }
    }
});
new Vue({
    el: "#tools",
    data: {
        items: [
            { id: 0, title: 'Новый пост' },
            { id: 1, title: 'Управление постами' },
            { id: 2, title: 'Статистика' },
            { id: 3, title: 'Управление портфолио' },
            { id: 4, title: 'sample text' }
        ],
        menu_item: menu
    }
});


new Vue({
    el: "main",
    data: menu
});