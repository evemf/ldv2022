<template v-html="formsHTML">
    <div class="forms">
        <teams-component :teams="equipos" @afegir-equip="afegirEquip($event)"></teams-component>
        <players-component :players="jugadores" @afegir-jugador="afegirJugador($event)"></players-component>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                equipos: [],
                jugadores: []
            }
        },
        methods: {
            afegirEquip(equipVal) {
                console.log(equipVal);
                equipVal.id = this.equipos.length;
                this.equipos.push(equipVal);
            },
            afegirJugador(jugadorVal) {
                this.jugadores.push(jugadorVal);
            }
        }
    }
</script>
