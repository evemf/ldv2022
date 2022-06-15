<template>
    <div class="card col-md-12 mb-3">
        <div class="card-header bg-primary mb-3 text-white">Classificació dels jugadors</div>
        <div class="card-body">
            <div class="players-table">
                <div class="players-table_headers">
                    <span>Nom</span>
                    <span>Cognoms</span>
                    <span>Ciutat</span>
                    <span>Categoria</span>
                    <span>Equip</span>
                    <span>Telèfon</span>
                    <span>Email</span>
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                </div>
                <player-component :jugador="jugador" v-for="jugador in players" :key="jugador.email"></player-component>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['players']
    }
</script>
