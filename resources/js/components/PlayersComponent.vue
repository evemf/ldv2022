<template>
    <div class="card col-md-12 mb-3">
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="jugador_nombre">Nom</label>
                        <input type="text" class="form-control" name="jugador_nombre" v-model="newPlayer.nom">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="jugador_cognoms">Cognoms</label>
                        <input type="text" class="form-control" name="jugador_cognoms" v-model="newPlayer.cognoms">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="jugador_ciutat">Ciutat</label>
                        <input type="text" class="form-control" name="jugador_ciutat" v-model="newPlayer.ciutat">
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="form-group col-md-4">
                        <label for="jugador_cat">Categoria</label>
                        <input type="text" class="form-control" name="jugador_cat" v-model="newPlayer.cat">
                    </div>
                    <div class="form-group col-md-4">   
                        <label for="jugador_equip">Equip</label>
                        <input type="text" class="form-control" name="jugador_equip" v-model="newPlayer.tel">
                    </div>
                    <div class="form-group col-md-4">   
                        <label for="jugador_telf">Telèfon</label>
                        <input type="text" class="form-control" name="jugador_telf" v-model="newPlayer.tel">
                    </div> 
                </div>
                <div class="row align-items-end">
                    <div class="form-group col-md-4">
                        <label for="jugador_email">Email</label>
                        <input type="text" class="form-control" name="jugador_email" v-model="newPlayer.email">
                    </div>
                    <div class="col-md-4">
                         <button type="submit" class="btn btn-primary mt-3" v-on:click.prevent="$emit('afegir-jugador', newPlayer)">Afegir jugador</button>
                    </div>
                </div>
            </form>
        </div>
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
                <player-component :jugador="jugador" v-for="jugador in players" :key="jugador.id"></player-component>          
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['players'],
         data() {
            return {
                newPlayer: [{
                    id: '',
                    nom: '',
                    cognoms: '',
                    ciutat: '',
                    cat: '',
                    equip: '',
                    tel: '',
                    email: ''
                }]
            }
        }
    }
</script>