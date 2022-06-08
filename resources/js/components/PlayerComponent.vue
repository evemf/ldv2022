<template v-html="playerHTML">
    <div class="player">
        <span>{{ jugador.nom }}</span>
        <span>{{ jugador.cognoms }}</span>
        <span>{{ jugador.cat }}</span>
        <span>{{ jugador.equip }}</span>
        <span>{{ jugador.tel }}</span>
        <span>{{ jugador.email }}</span>
        <span><button class="btn btn-primary">Editar jugador</button></span>
        <span><button class="btn btn-danger">Borrar jugador</button></span>
    </div>
</template>

<script>
    export default {
        props: ['jugador']
    }
</script>
