<template>
    <div>
        <div class="col-md-12">
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
        <div class="col-md-12">
            <div class="form-group">
                <div class="form-field">
                    <div class="select-wrap">
                        <div class="icon">
                            <span class="fa fa-chevron-down"></span>
                        </div>
                        <select name="selectedPersonType" id="selectedPersonType" class="form-control" v-model="selectedPersonType">
                            <option value="">Eres empresa o persona natural</option>
                            <option value="Empresa">Soy empresa</option>
                            <option value="Persona">Soy persona natural</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" id="names" name="names" class="form-control" placeholder="Nombre Persona Natural / Empresa" v-model="names" />
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" id="email" name="email" class="form-control" placeholder="Email Address" v-model="email" />
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Numero de Contacto" v-model="phone" />
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea name="comments" id="comments" cols="30" rows="7" class="form-control" placeholder="Dejanos alguna observación y/o requerimiento"
                    v-model="comments"
                ></textarea>
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
    name: "FrmQuotes",
    data() {
        return {
            checked_notifications: false,
            checked_rap: false,
            selectedPersonType: '',
            optionServices: [],
            selectedService: '',
            comments: "",
            names: "",
            email: "",
            phone: "",
        };
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
};
</script>
