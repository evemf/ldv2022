<template>
    <div class="card col-md-12 mb-3">
        <div class="card-header bg-primary mb-3 text-white">Classificació per equips</div>
        <div class="card-body">
            <div class="teams-table">
                <div class="teams-table_headers">
                    <span>Nom</span>
                    <span>Seu</span>
                    <span>Capità</span>
                    <span>Ciutat</span>
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                </div>
                <team-component :equip="equip" v-for="(equip, index) in teams" :key="equip.nom" @borrar-equip="borrarEquip($event)"></team-component>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        props: ['teams'],
        methods: {
            editarEquip(id) {
                this.editMode = true;
                let selectedTeam = this.teams.find(team => team.id == id);
                console.log("FORM TEAM ", this.formTeam);
                this.formTeam = selectedTeam;
            },
            borrarEquip(equipId) {
                const equipInd = this.teams.findIndex(equip => equip.id == equipId);
                console.log(equipId);
                axios.delete('http://127.0.0.1:8000/api/team/' + equipId);
                this.teams.splice(equipInd, 1);
            }
        }
    }
</script>
