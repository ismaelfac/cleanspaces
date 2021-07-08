<template>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group ">
                <input type="text" class="form-control input-space" placeholder="Nombres completos / razon social">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group ">
                <input type="text" class="form-control input-space" placeholder="Email">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group ">
                <div class="input-wrap">
                    <div class="icon"><span class="fa fa-card"></span></div>
                    <input type="password" class="form-control" placeholder="Paswword">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group ">
                <div class="input-wrap">
                    <div class="icon"><span class="fa fa-card"></span></div>
                    <input type="repite-password" class="form-control" placeholder="Repite Paswword">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checked_notifications" name="checked_notifications" v-model="checked_notifications">
                <label class="form-check-label" for="checked_notifications"> Quiero recibir información y/o promociones </label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checked_rap" name="checked_rap" v-model="checked_rap">
                <label class="form-check-label" for="checked_rap"> Requiero atención personalizada </label>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name:"Register",
    data() {
        return {
            checked_notifications: false,
            checked_rap: false,
            checkedTCU: false,
            checkedICR: false,
            typeDni: [
                { id: 'CC', value:'CC'},
                { id: 'NIT', value: 'NIT'}
            ], 
            optionServices: [],
            selectedService: '',
            selectedDni: '',
            dni: '',
            name: '',
            lastName: '',
            businnessName: '',
            email: '',
            password: '',
            repeatPassword: '',
            errors: {
                nameState: true,
            }
        }
    },
    created: function() {
        this.getServices();
    },
    methods: {
        getServices(){
            return axios.get('./api/getServices')
                        .then(response => (this.optionServices = response.data))
                        .catch(error => console.log(error));
        }
    }
}
</script>
<style>
    .input-space {
        padding: 10px !important;
    }
</style>
