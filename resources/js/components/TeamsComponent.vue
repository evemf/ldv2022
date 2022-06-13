<template>
    <div class="card col-md-12 mb-3">
        <div class="card-body">
            <form action="">
                <div class="row align-items-end">
                    <div class="form-group col-md-3">
                        <label for="equip_nom">Nom</label>
                        <input type="text" class="form-control" name="equip_nom" v-model="formTeam.nom">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="equip_seu">Seu</label>
                        <input type="text" class="form-control" name="equip_seu" v-model="formTeam.seu">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="equip_capita">Capità</label>
                        <input type="text" class="form-control" name="equip_capita" v-model="formTeam.capita">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="equip_ciutat">Ciutat</label>
                        <input type="text" class="form-control" name="equip_ciutat" v-model="formTeam.ciutat">
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="col-md-3">
                        <button v-if="editMode == false" type="submit" class="btn btn-primary mt-3" v-on:click.prevent="onClickEvent()">Afegir equip</button>
                        <button v-if="editMode == true" type="submit" class="btn btn-primary mt-3" v-on:click.prevent="updateEquip()">Guardar equip</button>
                    </div>
                </div>
            </form>
        </div>
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
                <team-component :equip="equip" v-for="(equip, index) in teams" :key="equip.id" @editar-equip="editarEquip($event)" @borrar-equip="borrarEquip($event)"></team-component>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['teams'],
         data() {
            return {
                editMode: false,
                formTeam: {
                    id: '',
                    nom: '',
                    seu: '',
                    ciutat: '',
                    capita: ''
                }
            }
        },
        methods: {
            editarEquip(id) {
                this.editMode = true;
                let selectedTeam = this.teams.find(team => team.id == id);
                this.formTeam = selectedTeam;
            },
            onClickEvent() {
                this.$emit('afegir-equip', this.formTeam);
                this.formTeam = {
                    id: "",
                    nom: "",
                    seu: "",
                    ciutat: "",
                    capita: ""
                };
            },
            updateEquip() {
                this.editMode = false;
                this.formTeam = {
                    id: "",
                    nom: "",
                    seu: "",
                    ciutat: "",
                    capita: ""
                };
            },
            borrarEquip(equipId) {
                const equipInd = this.teams.findIndex(equip => equip.id == equipId);
                this.teams.splice(equipInd, 1);
            }
        }
    }
</script>