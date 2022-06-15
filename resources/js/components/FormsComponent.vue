<template v-html="formsHTML">
    <div class="forms">
        <teams-form-component @afegir-equip="afegirEquip($event)"></teams-form-component>
        <teams-list-component v-if="equipos" :teams="equipos"></teams-list-component>
        <players-form-component @afegir-jugador="afegirJugador($event)"></players-form-component>
        <players-list-component :players="jugadores"></players-list-component>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        data() {
            return {
                equipos: [],
                jugadores: []
            }
        },
        methods: {
            afegirEquip(equipVal) {
                console.log("eEquipVal n afegir equip ", equipVal);
                axios.post('http://127.0.0.1:8000/api/team', equipVal)
                .then(resp => {
                    console.log("this equipos ", this.equipos);
                    equipVal.id = resp.data;
                    this.equipos.push(equipVal);
                }
                ).catch();
            },
            afegirJugador(jugadorVal) {
                this.jugadores.push(jugadorVal);
            },
            getEquips() {
                axios.get('http://127.0.0.1:8000/api/team').then(resp => {
                    console.log("en getEquips ", resp);

                    resp.data.forEach(team => {
                        this.equipos.push(team);
                    });
               });
            }
        },
        created() {
            this.getEquips();
        }
    }
</script>
