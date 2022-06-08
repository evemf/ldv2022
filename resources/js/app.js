require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('forms-component', require('./components/FormsComponent.vue').default);
Vue.component('players-component', require('./components/PlayersComponent.vue').default);
Vue.component('player-component', require('./components/PlayerComponent.vue').default);
Vue.component('teams-component', require('./components/TeamsComponent.vue').default);
Vue.component('team-component', require('./components/TeamComponent.vue').default);

const app = new Vue({
    el: '#app',
});
