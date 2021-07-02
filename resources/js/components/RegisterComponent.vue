<template>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="form-field">
                    <div class="select-wrap">
                        <div class="icon">
                            <span class="fa fa-chevron-down"></span>
                        </div>
                        <select name="selectedService" id="selectedService" class="form-control" v-model="selectedService">
                            <option v-for="option in optionServices" :key="option.id" :value="option.id">{{ option.title }}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control input-space" placeholder="Nombres completos / razon social">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control input-space" placeholder="Email">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="input-wrap">
                    <div class="icon"><span class="fa fa-calendar"></span></div>
                    <input type="text" class="form-control input-space appointment_date" placeholder="Date">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea name="messageRegister" id="messageRegister" cols="30" rows="2" class="form-control input-space" placeholder="Message"></textarea>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
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
