<template>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="form-field">
                    <div class="select-wrap">
                        <div class="icon">
                            <span class="fa fa-chevron-down"></span>
                        </div>
                        <select name="" id="" class="form-control">
                            <option value="">Que servicios esta interesado</option>
                            <option value="">Piscinas</option>
                            <option value="">Aires Acondicionados</option>
                            <option value="">Obras Civiles</option>
                            <option value="">Lavado de Muebles </option>
                            <option value="">Impermiabilizacion</option>
                            <option value="">Redes Electricas</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Nombre Persona Natural / Juridica"
                />
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Email Address"
                />
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Numero de Contacto"
                />
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea
                    name=""
                    id=""
                    cols="30"
                    rows="7"
                    class="form-control"
                    placeholder="Dejanos alguna observación y/o requerimiento"
                ></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Quiero recibir información y/o promociones
                </label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Quiero ser contactado por un asesor
                </label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input
                    type="submit"
                    value="Send message"
                    class="btn btn-primary py-3 px-4"
                />
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "FrmQuotes",
    data() {
        return {
            checkedTCU: false,
            checkedICR: false,
            typeDni: [
                { id: "CC", value: "CC" },
                { id: "NIT", value: "NIT" }
            ],
            selectedDni: "",
            dni: "",
            name: "",
            lastName: "",
            businnessName: "",
            email: "",
            password: "",
            repeatPassword: "",
            errors: {
                nameState: true
            }
        };
    }
};
</script>
