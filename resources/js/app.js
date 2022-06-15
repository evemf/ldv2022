require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('forms-component', require('./components/FormsComponent.vue').default);
Vue.component('players-list-component', require('./components/PlayersListComponent.vue').default);
Vue.component('players-form-component', require('./components/PlayersFormComponent.vue').default);
Vue.component('player-component', require('./components/PlayerComponent.vue').default);
Vue.component('teams-list-component', require('./components/TeamsListComponent.vue').default);
Vue.component('teams-form-component', require('./components/TeamsFormComponent.vue').default);
Vue.component('team-component', require('./components/TeamComponent.vue').default);

const app = new Vue({
    el: '#app',
});
